<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:25 PM
 */

namespace CmeData;

class ListImportQueueData extends Data
{
  /**
   * @var int $id
   */
  public $id;
  /**
   * @var int $listId
   */
  public $listId;
  /**
   * @var string $type
   * Allowed Values: "api", "csv", "file"
   */
  public $type;
  /**
   * @var string $source
   */
  public $source;
  /**
   * @var string|null $lockedBy
   */
  public $lockedBy = null;
}
