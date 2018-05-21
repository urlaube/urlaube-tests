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
  require_once(SYSTEM_CORE_PATH."Content.class.php");
  require_once(SYSTEM_CORE_PATH."Debug.class.php");
  require_once(SYSTEM_CORE_PATH."Handlers.class.php");
  require_once(SYSTEM_CORE_PATH."Config.class.php");

  var_dump(Config::HANDLER());

  var_dump(Config::HANDLER("test"));

  var_dump(Config::HANDLER("test", "test1"));
  var_dump(Config::HANDLER("test"));

  var_dump(Config::HANDLER("test", "test2", "blafasel"));
  var_dump(Config::HANDLER("test"));
