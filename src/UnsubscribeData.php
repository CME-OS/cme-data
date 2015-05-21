<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:37 PM
 */

namespace CmeData;

class UnsubscribeData extends Data
{
  /**
   * @var string $email
   */
  public $email;
  /**
   * @var int $brandId
   */
  public $brandId;
  /**
   * @var int $campaignId
   */
  public $campaignId;
  /**
   * @var int $listId
   */
  public $listId;
  /**
   * @var int $time - unix timestamp
   */
  public $time;
}
