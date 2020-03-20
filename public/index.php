<?php

require_once 'views/layouts/header.php';


isset($_GET['nav']) ? $navigation = $_GET['nav'] : $navigation = null;

switch ($navigation) {
    case 'signin':
        require_once 'views/signin.php';
    break;

    case 'register':
        require_once 'views/register.php';
    break;
}

require_once 'views/layouts/footer.php';
