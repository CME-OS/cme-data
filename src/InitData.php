<?php
/**
 * @author  oke.ugwu
 */

namespace CmeData;

class InitData
{
  /**
   * @var string $dbDriver
   */
  public $dbDriver = 'mysql';
  /**
   * @var string $dbHost
   */
  public $dbHost;
  /**
   * @var string $dbUsername
   */
  public $dbUsername;
  /**
   * @var string $dbPassword
   */
  public $dbPassword;
  /**
   * @var string $dbName
   */
  public $dbName;
  /**
   * @var string $dbCharset
   */
  public $dbCharset = 'utf8';
  /**
   * @var string $dbCollation
   */
  public $dbCollation = 'utf8_unicode_ci';
  /**
   * @var string $dbPrefix
   */
  public $dbPrefix = '';

  /**
   * @var string $cacheDriver
   */
  public $cacheDriver;

  /**
   * @var string $cachePath
   */
  public $cachePath;

  /**
   * @var string $cachePrefix
   */
  public $cachePrefix;
}
