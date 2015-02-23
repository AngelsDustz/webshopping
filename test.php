<?php
include 'libs/auth.php';

var_dump(db::select('*', 'Users'));