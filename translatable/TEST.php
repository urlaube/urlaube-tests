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
  require_once(SYSTEM_CORE_PATH."Translation.interface.php");
  require_once(SYSTEM_CORE_PATH."Translations.class.php");
  require_once(SYSTEM_CORE_PATH."Translatable.class.php");

  class Test1 extends Translatable implements Translation {}

  class Test2 extends Translatable implements Translation {}

  var_dump(Translations::LANGUAGE());

  Translations::LANGUAGE("en_US");
  var_dump(Translations::LANGUAGE());

  $test1 = new Test1();
  $test2 = new Test2();

  var_dump($test1->setTranslationsPath(__DIR__."/resources/test1/"));
  var_dump(strcmp(__DIR__."/resources/test1/", $test1->getTranslationsPath()));

  var_dump($test2->setTranslationsPath(__DIR__."/resources/test2/"));
  var_dump(strcmp(__DIR__."/resources/test2/", $test2->getTranslationsPath()));

  var_dump($test1->getTranslation("das ist ein Test"));
  var_dump($test1->getTranslation("das ist ein zweiter Test"));

  var_dump($test2->getTranslation("das ist ein Test"));
  var_dump($test2->getTranslation("das ist ein zweiter Test"));

  print($test1->getTranslation("das ist ein Test").NL);
  print($test1->getTranslation("das ist ein zweiter Test").NL);

  print($test2->getTranslation("das ist ein Test").NL);
  print($test2->getTranslation("das ist ein zweiter Test").NL);

