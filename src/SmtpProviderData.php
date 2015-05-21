<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:34 PM
 */

namespace CmeData;

class SmtpProviderData extends Data
{
  /**
   * @var int $id
   */
  public $id;
  /**
   * @var string $name
   */
  public $name;
  /**
   * @var string $host
   */
  public $host;
  /**
   * @var string $username
   */
  public $username;
  /**
   * @var string $password
   */
  public $password;
  /**
   * @var int $port
   */
  public $port;
  /**
   * @var int $default
   * Allowed Values: 0, 1
   */
  public $default;
  /**
   * @var int $deletedAt
   */
  public $deletedAt;
}
