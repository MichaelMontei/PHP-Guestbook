<?php

//this line makes PHP behave in a more strict way
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//we are going to use session variables so we need to enable sessions
session_start();


require 'Post.php';
require 'PostLoader.php';
require 'database.txt';
require 'Form.php';
require '.\View\footer.php';
require '.\View\header.php';
require '.\View\view.php';