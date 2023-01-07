<?php

require_once('_autoload.php');

if(Auth::validate()){
    Auth::destroy();
}

header('Location: index.php');