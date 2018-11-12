<?php

require('../config.php');
require_once('lib.php');

require_login(); //Won't do any good to 'get' a username 'til sombody's logged in.

global $USER;



$userid = $USER->id;
$firstname = $USER->firstname;
$lastname = $USER->lastname;

echo $userid;
echo $firstname;
echo $lastname;

header("Location: http://localhost/compiler/php/course.html?id=" . $userid);

exit;

?>
