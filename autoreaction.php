<?php

require_once('lib/fb.php');

//////////////////////////////////////////////[edit authentication here]///////////////////////////////////////////
$user		= 'djsoda73@gmail.com'; // facebook username / email
$pass 		= 'Gakdeliv111111'; // facebook passwod
$r_male		= '4'; // reaction if user male , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$r_female	= '4'; // reaction if user female , like = 1, love = 2, wow = 3, haha = 4, sad = 7, angry = 8
$max_status	= '6'; // maximum reacted status
$token 		= 'EAAAAUaZA8jlABAPlX868us9x1hpBVQrREZBcwebgxKHQqJWhjteEWUdogzoDqETINMFKInPcdiTmhb6pNIZBwtYZAKwqAeBWD5hBOHbFFrx2l9deNM5csy6xGSBsyFGmwGkVnfb2DQofSIwY7SVU5S6ZAsRIs0ZB08AWJ4FY4l2AcMH2z4I4XZC';
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);