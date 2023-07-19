<?php
#require_once 'models/contacts.php';
require_once 'models/contactManager.php';
require_once 'config/config.php';
$folder_views="views/contacts/";

class ContactsController {
    public function __construct($folder_views){
        $this->folder_views = $folder_views;
        $this->contactManager = new ContactManager($GLOBALS['host'], $GLOBALS['dbName'], $GLOBALS['username']);
    }
    public function index() {
        $contacts = $this->contactManager->getContacts();
        $view = $this->folder_views."read.php";
        require "views/layout.php";

    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->contactManager->createContact($name, $email, $phone);
            echo "sale de alli";
            header('Location: index.php?controller=contacts');
            exit();
        }
        $view = $this->folder_views."create.php";
        require "views/layout.php";
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->contactManager->updateContact($id, $name, $email, $phone);
            header('Location: index.php?controller=contacts');
            exit();
        } else {
            $id = $_GET['id'];
            $contact = $this->contactManager->getContact($id);
            $view = $this->folder_views.'update.php';
            require "views/layout.php";
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->contactManager->deleteContact($id);
        header('Location: index.php?controller=contacts');
        exit();
    }
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller = new ContactsController($folder_views);
echo "la accion es $action";
switch ($action) {
    case 'create':
        $controller->create();
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete();
        break;

    default:
        $controller->index();
        break;
}
?>

