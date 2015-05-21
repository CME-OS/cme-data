<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 8:36 PM
 */

namespace CmeData;

class TemplateData extends Data
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
   * @var string $content
   */
  public $content;
  /**
   * @var string $screenshot
   */
  public $screenshot;
  /**
   * @var int $created - unix timestamp
   */
  public $created;
  /**
   * @var int $deletedAt - unix timestamp
   */
  public $deletedAt;
}
