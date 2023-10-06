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
 * Набор функций для облегчения работы с регэкспами
 */
class Regexp {

  /**
   * @param $pattern string
   * @param $text string
   * @return string
   */
  public static function getSingleMatch($pattern, $subject, $clean = true, $debug = false) {
    $matches = [];
    preg_match($pattern, $subject, $matches);
    if ($debug) {
      var_dump($subject);
      print_r($matches);
    }
    if ($clean) {
      if (count($matches) > 1) {
        return $matches[1];
      } else {
        return null;
      }
    } else {
      if (count($matches)) {
        return $matches[0];
      } else {
        return null;
      }
    }
  }

}
