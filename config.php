<?php
$servername = "213.136.76.119";
$username = "tradehos_zyrotest";
$password = "fBGXs90l]rV6*1";
$dbname = "tradehos_zyrotest";
$conn = new mysqli($servername, $username, $password, $dbname);

// Site domain
$site_domain = "limitednodes.host";

// Pterodactyl API settings
$ptero_domain = "gp.trade-mc.tk";
$ptero_key = "";

// Payment settings
$paypal['email'] = "";

// Discord server settings
$discord['autojoin_role'] = "C582892108046663690"; //role ID
$discord['autojoin_guildid'] = "579239670639099915"; //server ID
$discord['bot_token'] = "ODY1OTI1NzI5MDAyNDU1MDQy.YPLGLQ.w7cQyQ4Fb_lFk7SphWb1fbhBhbU";

// Discord OAUTH2 Settings
$discord_oauth2['client_id'] = "865925729002455042";
$discord_oauth2['client_secret'] = "ogSc6-E_lztVTkxr9TJDIWiGBGJyyAwY";
$discord_oauth2['redirect_uri'] = "https://falixnodesv1.herokuapp.comt/login";
?>
