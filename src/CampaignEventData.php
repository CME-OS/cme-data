<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:21 PM
 */

namespace CmeData;

class CampaignEventData extends Data
{
  /**
   * @var int $eventId
   */
  public $eventId;
  /**
   * @var int $campaignId
   */
  public $campaignId;
  /**
   * @var int $listId
   */
  public $listId;
  /**
   * @var int $subscriberId
   */
  public $subscriberId;
  /**
   * @var string $eventType
   */
  public $eventType;
  /**
   * @var string $reference
   */
  public $reference;
  /**
   * @var int $time - unix timestamp
   */
  public $time;
}
