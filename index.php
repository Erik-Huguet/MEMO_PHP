<?php


switch ($_SERVER['REQUEST_URI']) {
    case '/':
        include 'header.php';
        break;
    case '/montagne':
        include 'pages/montagne.php';
        break;
    case '/plage':
        include 'pages/plage.php';
        break;
    case '/foret':
        include 'pages/foret.php';
        break;
    default:
        include 'notfound.php';
        break;
}