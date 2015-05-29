<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:21 PM
 */

namespace CmeData;

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
   * @var int $dateCreated - unix timestamp
   */
  public $dateCreated;
}
