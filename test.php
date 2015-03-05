<?php
include('libs/auth.php');
include('libs/admin/admin_lib.php');

$userData = Admin::getUserData(2);
$levelData = Admin::getUserLevel($userData);

echo '<pre>';
var_dump($userData);
echo '<br>';
var_dump($levelData);
echo '</pre>';