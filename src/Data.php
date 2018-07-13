<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 11:05 PM
 */

namespace CmeData;

use CmeData\Helpers\Str;
use CmeData\Validation\DataConstraints;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\Validation;

use Symfony\Component\Validator\Constraints as Constraint;
use Symfony\Component\Validator\ValidatorInterface;

abstract class Data
{
  /**
   * @var ValidatorInterface $_validator
   */
  protected static $_validator;
  /**
   * @var ConstraintViolationList $violations ;
   */
  protected $_violations;

  /**
   * @param array $data
   * @param bool  $checkProperty
   *
   * @return static
   */
  public static function hydrate(
    $data, $checkProperty = true
  )
  {
    $dataObj = new static;
    foreach($data as $key => $value)
    {
      $hydrate = true;
      if($checkProperty)
      {
        $hydrate = property_exists(get_class($dataObj), Str::camelCase($key));
      }

      if($hydrate)
      {
        $dataObj->{Str::camelCase($key)} = $value;
      }
    }
    return $dataObj;
  }

  /**
   * $checkPropertyIsSet is a flag to specify if you want to only
   * return properties that have a value that is not falsely.
   * Set to false to return falsely properties
   *
   * @param bool $checkPropertyIsSet
   *
   * @return array
   */
  public function toArray($checkPropertyIsSet = true)
  {
    $data   = get_object_vars($this);
    $return = [];
    foreach($data as $k => $v)
    {
      $add = true;
      if($checkPropertyIsSet)
      {
        $add = isset($v);
      }

      if($add)
      {
        $return[Str::snakeCase($k)] = $v;
      }
    }

    unset($return['_validator']);
    unset($return['_violations']);
    return $return;
  }

  public function validate()
  {

    $builder  = Validation::createValidatorBuilder();
    self::$_validator = $builder->getValidator();
    return $this->_validate();
  }

  /**
   * @return bool
   */
  protected function _validate()
  {
    $dk          = array_keys(self::toArray());
    $constraints = new Constraint\Collection(
      DataConstraints::get($dk)
    );

    $this->_violations = self::$_validator->validate(
      self::toArray(),
      $constraints
    );
    return ($this->_violations->count()) ? false : true;
  }

  /**
   * @return ConstraintViolationList
   */
  public function getViolations()
  {
    return $this->_violations;
  }

  /**
   * @return ValidationErrorData[]
   */
  public function getValidationErrors()
  {
    $violations = $this->getViolations();
    $errors     = [];
    foreach($violations as $v)
    {
      $ve                 = new ValidationErrorData();
      $ve->field          = str_replace([']', '['], '', $v->getPropertyPath());
      $ve->message        = $v->getMessage();
      $ve->value          = $v->getInvalidValue();
      $errors[$ve->field] = $ve;
    }

    return $errors;
  }

  /**
   * @return ValidatorInterface
   */
  public static function getValidator()
  {
    return self::$_validator;
  }
}
