<?php

use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\FT1;
use App\Views\Client\Layouts\HD1;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Auth\Register;
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
ini_set('log_errors', TRUE); 
//kiểm tra xem có file log chưa ? chưa: tạo file và lưu vào/ có: lưu vào luôn
ini_set('error_log', './logs/php/php-errors.log');
require_once 'vendor/autoload.php';
require_once 'App/Models/Database.php';

use App\Models\Database;
Header::render();
Register::render();
Footer::render();