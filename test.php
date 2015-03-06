<?php
include('libs/auth.php');
include('libs/admin/admin_lib.php');


echo '<pre>';
admin::productAdd('bob', 'test', '20.00');
echo '</pre>';