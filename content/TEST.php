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
  require_once(SYSTEM_CORE_PATH."Content.class.php");

  $content = new Content();

  var_dump($content->set("title", "Testtitel"));
  var_dump($content->set("name",  "Testname"));
  var_dump($content->set("text", "Testtext"));

  var_dump($content->get("title"));
  var_dump($content->get("name"));
  var_dump($content->get("text"));

