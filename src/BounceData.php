<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:21 PM
 */

namespace CmeData;

class BounceData extends Data
{
  /**
   * @var string $email
   */
  public $email;
  /**
   * @var int $campaignId
   */
  public $campaignId;
  /**
   * @var int $time - unix timestamp
   */
  public $time;
}
