<?php
session_start();
include '../classes/FlashMessage.php';

$msg = new FlashMessage();

FlashMessage::flash('success', 'Register success');

var_dump($_SESSION);