<?php
  $data = json_decode(file_get_contents("php://input"), true);

  if (!isset($data['functionName'])) {
    $data['functionName'] = "";
  }

  switch ($data['functionName']) {
    case 'testFunction':
      echo 'testFunction ran successfully';
      break;

    default:
      echo 'default function ran successfully';
  }
