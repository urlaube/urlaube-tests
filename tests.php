<?php

  // this script shall only be called from the CLI
  if ("cli" !== PHP_SAPI) { die(""); }

  $tests = array_filter(glob(__DIR__."/*"), "is_dir");

  foreach ($tests as $tests_item) {
    $result_path = $tests_item."/RESULT.txt";
    $test_path   = $tests_item."/TEST.php";

    $output = shell_exec("php ".escapeshellarg($test_path));
    $result = file_get_contents($result_path);

    print($tests_item.": ");
    if (0 === strcmp($output, $result)) {
      print("SUCCESS");
    } else {
      print("FAILURE !!!!!!!!!!");
    }
    print("\n");
  }
