<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:21 PM
 */

namespace CmeData;

class ValidationErrorData extends Data
{
  /**
   * @var string $field
   */
  public $field;
  /**
   * @var mixed $value - original invalid value
   */
  public $value;
  /**
   * @var string $message
   */
  public $message;
}
