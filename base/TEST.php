<?php

  // this script shall only be called from the CLI
  if ("cli" !== PHP_SAPI) { die(""); }

  define("URLAUBE", true);

  define("SYSTEM_PATH", __DIR__."/../../urlaube/system/");
  define("USER_PATH",   __DIR__."/");

  require_once(SYSTEM_PATH."system.php");
  require_once(SYSTEM_PATH."user.php");

  require_once(SYSTEM_PATH."constants.php");
  require_once(SYSTEM_PATH."defaults.php");

  require_once(SYSTEM_CORE_PATH."Base.class.php");

  class Test extends Base {

    protected static $valuea = null;
    protected static $valueb = null;

    public static function getValuea() {
      return self::$valuea;
    }

    public static function getValueb() {
      return self::$valueb;
    }

    public static function setValuea($value) {
      self::$valuea = $value;
    }

    public static function setValueb($value) {
      self::$valueb = $value;
    }

  }

  var_dump(Test::VALUEA("hallo"));
  var_dump(Test::VALUEB("welt"));

  var_dump(Test::VALUEA());
  var_dump(Test::VALUEB());

