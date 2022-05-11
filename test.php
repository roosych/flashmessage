<?php

session_start();

include '../index.php';

echo FlashMessage::flash('success');