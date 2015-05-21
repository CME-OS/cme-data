<?php
/**
 * Created by PhpStorm.
 * User: Okechukwu
 * Date: 5/18/2015
 * Time: 11:05 PM
 */

namespace CmeData;

abstract class Data
{
  /**
   * @param array $data
   * @param bool  $checkProperty
   *
   * @return static
   */
  public static function hydrate(
    array $data, $checkProperty = true
  )
  {
    $dataObj = new static;
    foreach($data as $key => $value)
    {
      $hydrate = true;
      if($checkProperty)
      {
        $hydrate = property_exists(get_class($dataObj), camel_case($key));
      }

      if($hydrate)
      {
        $dataObj->{camel_case($key)} = $value;
      }
    }
    return $dataObj;
  }

  /**
   * @return array
   */
  public function toArray()
  {
    $data   = (array)$this;
    $return = [];
    foreach($data as $k => $v)
    {
      if(isset($v))
      {
        $return[snake_case($k)] = $v;
      }
    }

    return $return;
  }
}
