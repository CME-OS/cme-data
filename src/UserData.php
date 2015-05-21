<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:38 PM
 */

namespace CmeData;

class UserData extends Data
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
   * @var string $password
   */
  public $password;
  /**
   * @var int $active
   */
  public $active;
  /**
   * @var int $deletedAt - unix timestamp
   */
  public $deletedAt;
  /**
   * @var string $rememberToken
   */
  public $rememberToken;
  /**
   * @var datetime $createdAt - Y-m-d H:i:s
   */
  public $createdAt;
  /**
   * @var datetime $updatedAt - Y-m-d H:i:s
   */
  public $updatedAt;
}
