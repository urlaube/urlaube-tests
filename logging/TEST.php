<?php

  // this script shall only be called from the CLI
  if ("cli" !== PHP_SAPI) { die(""); }

  define("URLAUBE", true);

  define("SYSTEM_PATH", __DIR__."/../../urlaube/system/");
  define("USER_PATH",   __DIR__."/");

  require_once(SYSTEM_PATH."system.php");
  require_once(SYSTEM_PATH."user.php");

  require_once(SYSTEM_PATH."static.php");
  require_once(SYSTEM_PATH."derived.php");

  require_once(SYSTEM_CORE_PATH."BaseSingleton.class.php");
  require_once(SYSTEM_CORE_PATH."BaseConfig.class.php");
  require_once(SYSTEM_CORE_PATH."Content.class.php");
  require_once(SYSTEM_CORE_PATH."Logging.class.php");
  require_once(SYSTEM_CORE_PATH."Main.class.php");

  Main::configure();

  $time = 802562400; // publication date of PHP
  date_default_timezone_set("Europe/Berlin");

  var_dump(Main::get(LOGLEVEL));
  var_dump(Main::get(LOGTARGET));

  var_dump(Logging::log("test 1", Logging::NONE,  $time));
  var_dump(Logging::log("test 2", Logging::DEBUG, $time));

  var_dump(Main::set(LOGLEVEL, Logging::DEBUG));

  var_dump(Logging::log("test 3", Logging::DEBUG, $time));
  var_dump(Logging::log("test 4", Logging::INFO,  $time));
  var_dump(Logging::log("test 5", Logging::WARN,  $time));
  var_dump(Logging::log("test 6", Logging::ERROR, $time));

  var_dump(Main::set(LOGLEVEL, Logging::WARN));

  var_dump(Logging::log("test 7", Logging::INFO,  $time));
  var_dump(Logging::log("test 8", Logging::WARN , $time));
  var_dump(Logging::log("test 9", Logging::ERROR, $time));

  var_dump(Main::set(LOGLEVEL, Logging::ERROR));

  var_dump(Logging::log("test 10", Logging::WARN,  $time));
  var_dump(Logging::log("test 11", Logging::ERROR, $time));
