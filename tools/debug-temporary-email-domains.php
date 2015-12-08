<?php
$json_string = file_get_contents('../temporary-email-domains.json');
$json_to_php_array = json_decode($json_string, true);

var_dump($json_to_php_array);