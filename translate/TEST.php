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
  require_once(SYSTEM_CORE_PATH."Main.class.php");
  require_once(SYSTEM_CORE_PATH."Translate.class.php");

  var_dump(Translate::LANGUAGE());

  var_dump(Translate::register(__DIR__."/resources/platzhalter/", "platzhalter"));
  var_dump(Translate::register(__DIR__."/resources/test1/", "test1"));
  var_dump(Translate::register(__DIR__."/resources/test2/", "test2"));

  var_dump(tfhtml("%s", "platzhalter", "[PLATZHÄLTER]"));

  Translate::LANGUAGE("en_US");
  var_dump(Translate::LANGUAGE());

  var_dump(t("das ist ein Test",         "test1"));
  var_dump(t("das ist ein zweiter Test", "test1"));

  var_dump(t("das ist ein Test",         "test2"));
  var_dump(t("das ist ein zweiter Test", "test2"));

