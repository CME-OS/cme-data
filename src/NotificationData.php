<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:30 PM
 */

namespace CmeData;

class NotificationData extends Data
{
  /**
   * @var int $id
   */
  public $id;
  /**
   * @var string $subject
   */
  public $subject;
  /**
   * @var string $message
   */
  public $message;
  /**
   * @var string $recipient
   */
  public $recipient;
  /**
   * @var string $status
   * Allowed values: "Read", "Unread"
   */
  public $status;
  /**
   * @var int $time - unix timestamp
   */
  public $time;
}
