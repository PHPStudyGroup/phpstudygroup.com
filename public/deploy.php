<?php
$code = require_once __DIR__ . '/../../phpstudygroup.com.key';

if ($_GET['code'] != $code) {
    echo 'Deploy key invalid.';
    return;
}

passthru('git pull origin master');