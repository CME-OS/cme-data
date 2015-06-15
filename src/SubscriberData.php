<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:21 PM
 */

namespace CmeData;

use CmeData\Validation\DataConstraints;
use Symfony\Component\Validator\Constraints as Constraint;

class SubscriberData extends Data
{
  /**
   * @var int $id
   */
  public $id;
  /**
   * @var string $email
   */
  public $email;
  /**
   * @var int $testSubscriber
   */
  public $testSubscriber = 0;
  /**
   * @var datetime $dateCreated
   */
  public $dateCreated;

  protected function _validate()
  {
    $validatableFields = ['email', 'test_subscriber', 'date_created'];
    $constraints = new Constraint\Collection(
      DataConstraints::get($validatableFields)
    );

    $allData = self::toArray();
    foreach($allData as $k => $v)
    {
      if(!in_array($k, $validatableFields))
      {
        unset($allData[$k]);
      }
    }

    $this->_violations = self::$_validator->validate(
      $allData,
      $constraints
    );
    return ($this->_violations->count()) ? false : true;
  }
}
