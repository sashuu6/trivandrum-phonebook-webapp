<?php

if(isset($_COOKIE['web'])) {
    if(!defined("WEB_KEY")) {
        if($_COOKIE['web'])
            define("WEB_KEY", $_COOKIE['web']);
        else
            define("WEB_KEY", random_key());
    }
    setcookie('web', WEB_KEY, time() + (86400 * 30), "/");
} else {
    if(!defined("WEB_KEY"))
        define("WEB_KEY", random_key());
    setcookie('web', WEB_KEY, time() + (86400 * 30), "/");
}