<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:26 PM
 */

namespace CmeData;

class MessageQueueData extends Data
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
   * @var string $fromEmail
   */
  public $fromEmail;
  /**
   * @var string $fromName
   */
  public $fromName;
  /**
   * @var string $to
   */
  public $to;
  /**
   * @var string $htmlContent
   */
  public $htmlContent;
  /**
   * @var string $textContent
   */
  public $textContent;
  /**
   * @var int $subscriberId
   */
  public $subscriberId;
  /**
   * @var int $listId
   */
  public $listId;
  /**
   * @var int $brandId
   */
  public $brandId;
  /**
   * @var int $campaignId
   */
  public $campaignId;
  /**
   * @var string $status
   * Allowed values: "Pending", "Sent", "Failed", "Paused"
   */
  public $status;
  /**
   * @var int $sendTime
   */
  public $sendTime;
  /**
   * @var int $sendPriority
   * Allowed values: 1-4
   */
  public $sendPriority;
  /**
   * @var string|null $lockedBy
   */
  public $lockedBy = null;
}
