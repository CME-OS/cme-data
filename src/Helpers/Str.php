<?php

/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 6/15/2015
 * Time: 7:48 PM
 */

namespace CmeData\Helpers;

class Str
{

  /**
   * The cache of snake-cased words.
   *
   * @var array
   */
  protected static $snakeCache = [];

  /**
   * The cache of camel-cased words.
   *
   * @var array
   */
  protected static $camelCache = [];

  /**
   * The cache of studly-cased words.
   *
   * @var array
   */
  protected static $studlyCache = [];

  /**
   * Convert a value to camel case.
   *
   * @param  string  $value
   * @return string
   */
  public static function camelCase($value)
  {
    if (isset(static::$camelCache[$value]))
    {
      return static::$camelCache[$value];
    }

    return static::$camelCache[$value] = lcfirst(static::studly($value));
  }

  /**
   * Convert a string to snake case.
   *
   * @param  string  $value
   * @param  string  $delimiter
   * @return string
   */
  public static function snakeCase($value, $delimiter = '_')
  {
    $key = $value.$delimiter;

    if (isset(static::$snakeCache[$key]))
    {
      return static::$snakeCache[$key];
    }

    if ( ! ctype_lower($value))
    {
      $replace = '$1'.$delimiter.'$2';

      $value = strtolower(preg_replace('/(.)([A-Z])/', $replace, $value));
    }

    return static::$snakeCache[$key] = $value;
  }

  /**
   * Convert a value to studly caps case.
   *
   * @param  string  $value
   * @return string
   */
  public static function studly($value)
  {
    $key = $value;

    if (isset(static::$studlyCache[$key]))
    {
      return static::$studlyCache[$key];
    }

    $value = ucwords(str_replace(array('-', '_'), ' ', $value));

    return static::$studlyCache[$key] = str_replace(' ', '', $value);
  }
}
