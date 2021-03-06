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
  require_once(SYSTEM_CORE_PATH."Content.class.php");

  $content = new Content();

  var_dump($content->set("title", "Testtitel"));
  var_dump($content->set("name",  "Testname"));
  var_dump($content->set("text", "Testtext"));

  var_dump(value($content, "title"));
  var_dump(value($content, "name"));
  var_dump(value($content, "text"));
