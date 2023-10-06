<?php

/**
 * cbih common library
 *
 * @package cbih\common
 * @version $Id$
 * @author Sidorov Aleksey <cbih315@gmail.com>
 */

namespace cbih\common;

/**
 * Набор всяких разных функций 
 */
class Common {

  /**
   * @param $obj mixed
   * @return string
   */  
  public static function listvar($obj) {
    if ($obj) {
      echo '<pre>';
      print_r($obj);
      echo '</pre>';
    } else {
      var_dump($obj);
    }
  }

}
