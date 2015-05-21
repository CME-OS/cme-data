<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:24 PM
 */

namespace CmeData;

class ListData extends Data
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
   * @var string $description
   */
  public $description;
  /**
   * @var string $endpoint ;
   */
  public $endpoint;
  /**
   * For API lists, this is how often you want CME to refresh the list
   * @var int $refreshInterval
   */
  public $refreshInterval;
  /**
   * This is used to keep track of the last time an API list was refreshed, so
   * we can work when the next refresh is due
   *
   * @var int $lastRefreshTime
   */
  public $lastRefreshTime;
  /**
   * @var string $lockedBy
   */
  public $lockedBy;
  /**
   * @var int $deletedAt - unix timestamp
   */
  public $deletedAt;
  /**
   * Size of list - number of subscribers in list
   * @var int $_size
   */
  private $_size;

  /**
   * @param int $size
   */
  public function setSize($size)
  {
    $this->_size = $size;
  }

  /**
   * @return int $_size;
   */
  public function getSize()
  {
    return $this->_size;
  }
}
