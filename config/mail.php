<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "testmail@example.com",
      "name" => "Example"
  ),
  "username" => "bab70e9221853d",
  "password" => "8b2f6110c40faa",
  "sendmail" => "/usr/sbin/sendmail -bs"
];