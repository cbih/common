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
 * Набор функций для облегчения работы с файлами
 */
class Filesystem {

  /**
   * @param $dir string
   * @param $mask string
   * @param $result string
   * @return Array
   */
  public static function getDirContents($dir, $mask = '', &$result = array()) {
    $files = scandir($dir);
    foreach ($files as $value) {
      $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
      if (!is_dir($path)) {
        if ($mask) {
          if (preg_match($mask, $path)) {
            $result[] = $path;
          }
        } else {
          $result[] = $path;
        }
      } else if ($value != "." && $value != "..") {
        getDirContents($path, $mask, $result);
      }
    }

    return $result;
  }

}
