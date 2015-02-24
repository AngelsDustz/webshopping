<?php
include 'libs/auth.php';

Auth::login('admin', 'foutwachtwoord');
echo '<br><br><br>';
Auth::login('admin', 'admin');