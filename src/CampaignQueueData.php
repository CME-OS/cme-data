<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:23 PM
 */

namespace CmeData;

class CampaignQueueData extends Data
{
  /**
   * @var int $id
   */
  public $id;
  /**
   * @var int $campaignId
   */
  public $campaignId;
  /**
   * @var int $time - unix timestamp
   */
  public $time;
  /**
   * @var string|null $lockedBy
   */
  public $lockedBy = null;
  /**
   * @var int $processed
   */
  public $processed = 0;
}
