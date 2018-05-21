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
  require_once(SYSTEM_CORE_PATH."Debug.class.php");

  $time = 802562400; // publication date of PHP
  date_default_timezone_set("Europe/Berlin");

  var_dump(Debug::LOGLEVEL());
  var_dump(Debug::LOGTARGET());

  var_dump(Debug::log("test 1", DEBUG_NONE,  $time));
  var_dump(Debug::log("test 2", DEBUG_DEBUG, $time));

  var_dump(Debug::LOGLEVEL(DEBUG_DEBUG));

  var_dump(Debug::log("test 3", DEBUG_DEBUG, $time));
  var_dump(Debug::log("test 4", DEBUG_INFO,  $time));
  var_dump(Debug::log("test 5", DEBUG_WARN,  $time));
  var_dump(Debug::log("test 6", DEBUG_ERROR, $time));

  var_dump(Debug::LOGLEVEL(DEBUG_WARN, $time));

  var_dump(Debug::log("test 7", DEBUG_INFO,  $time));
  var_dump(Debug::log("test 8", DEBUG_WARN , $time));
  var_dump(Debug::log("test 9", DEBUG_ERROR, $time));

  var_dump(Debug::LOGLEVEL(DEBUG_ERROR, $time));

  var_dump(Debug::log("test 10", DEBUG_WARN,  $time));
  var_dump(Debug::log("test 11", DEBUG_ERROR, $time));

