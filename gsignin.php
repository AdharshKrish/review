<?php
session_start();

$id_token = $_POST['idtoken'];

//$id_token = "eyJhbGciOiJSUzI1NiIsImtpZCI6IjBhN2RjMTI2NjQ1OTBjOTU3ZmZhZWJmN2I2NzE4Mjk3Yjg2NGJhOTEiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNzA5MTY2MzM1Nzg1LXNlcWlvcm00YzlyYjE3b2VtdmU4MW5hYTJ0NmVldjd2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNzA5MTY2MzM1Nzg1LXNlcWlvcm00YzlyYjE3b2VtdmU4MW5hYTJ0NmVldjd2LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTAzMjM0ODg2NDY0NzQ2NjY1MTcxIiwiZW1haWwiOiJhZGhhcnNoMjg2MDBAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giOiJWbWVuVzVreHpYWkNfWFo0VnJmbnZnIiwibmFtZSI6IkFkaGFyc2ggS3Jpc2giLCJwaWN0dXJlIjoiaHR0cHM6Ly9saDMuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2EtL0FPaDE0R2hTdUQ3ZUVhTk5Nc3RRTTN1WTdDbms3ZW90SXQ4dkFPS1poQlVrdWc9czk2LWMiLCJnaXZlbl9uYW1lIjoiQWRoYXJzaCIsImZhbWlseV9uYW1lIjoiS3Jpc2giLCJsb2NhbGUiOiJlbiIsImlhdCI6MTU5ODU5MTIxNywiZXhwIjoxNTk4NTk0ODE3LCJqdGkiOiJiYTg2Y2M2MjdlMGMxYTI0YTRiYTFmOTQzNDhkOWJmYThjZGU4YTNiIn0.MFcY3gyPd6ulwpC16VgSwn-odogqlzoMUAVEZSZ5QlYEmqhBgXKYgRlE2Wq-ApO3UAHqBle378mZ1EH7LYkEsYvgdbEsGWukmc4MW5995h4dE_dm4mwgmEU6ZJ2i_L_Jto9nsI//FObP6ppSJ9Od5D60Nh-_QQfioPc9myiI0mYOGS7nIi197p4FUfwN3OX1DlS6_PbLflRJqd7P9rUSSoTI8xiPsi9LFyZKTh6ZGzGz8slaDnRl6CZKywG7twaZ_-SpIJPfguna81qu-AHrZ9KC-dyNReZnzKjlTvM6R7Wgb7utBjfxy26dsoBegbhNsesusfGmz3I-F7g6F_ENLIQg";

require_once 'google-api-php-client-v2.7.0-PHP7.4/vendor/autoload.php';
$jwt = new \Firebase\JWT\JWT;
$jwt::$leeway = 60;
// Get $id_token via HTTPS POST.

$client = new Google_Client(['client_id' => "709166335785-seqiorm4c9rb17oemve81naa2t6eev7v.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  $_SESSION['email'] = $payload['email'];
  $_SESSION['pic'] = $payload['picture'];
  echo $_SESSION['email'];
  // If request specified a G Suite domain:
  //$domain = $payload['hd'];
} else {
  // Invalid ID token
}