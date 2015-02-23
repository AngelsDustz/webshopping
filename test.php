<?php
include 'libs/auth.php';

Auth::attempt('admin', 'admin');