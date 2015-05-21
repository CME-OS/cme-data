<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:32 PM
 */

namespace CmeData;

class QueueRangesData extends Data
{
  /**
   * @var int $listId
   */
  public $listId;
  /**
   * @var int $campaignId
   */
  public $campaignId;
  /**
   * @var int $start
   */
  public $start;
  /**
   * @var int $end
   */
  public $end;
  /**
   * @var string|null $lockedBy
   */
  public $lockedBy = null;
  /**
   * @var int $created
   */
  public $created;
}
