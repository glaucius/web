<?php

// GitHub Webhook Secret.
// Keep it the same with the 'Secret' field on your Webhooks / Manage webhook page of your respostory.

$secret = 'a/j+NPXFHFqb6vIpx75QlkPmS68nt/Wu';


// Path to your respostory on your server.
// e.g. "/var/www/respostory"
$path = "/var/www/html";

// Headers deliveried from GitHub
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

if ($signature) {
  $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
  if (strcmp($signature, $hash) == 0) {
    echo shell_exec("hostname");
    exit();
  }
}

http_response_code(404);
?>