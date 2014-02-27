<?php
$code = include __DIR__ . '/../../phpstudygroup.com.key';

if ($_GET['code'] != $code) {
    echo 'Deploy key invalid. You sent ' . $_GET['code'];
    return;
}

passthru('git pull origin master');