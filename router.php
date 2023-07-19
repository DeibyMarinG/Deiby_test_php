<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : '';

switch ($controller) {
    case 'contacts':
        include 'controllers/contacts.php';
        break;
    default:
        $view = 'views/home.php'; // Path to the view file
        require_once 'views/layout.php'; // Load the layout file
        break;
}
?>
