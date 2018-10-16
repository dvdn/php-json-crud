<?php
include_once('Crud.php');
$crud = new Crud();

include('viewItems.php');

// actions related to GET/POST vars available
if (isset($_POST["add"])) {
    unset($_POST["add"]);
    $crud->actionAdd();
}
if (isset($_POST["edit"])) {
    unset($_POST["edit"]);
    $crud->actionEdit();
}
if (isset($_GET["action"])) {
    if ($_GET["action"]=="delete" && isset($_GET["id"])) {
        $crud->actionDelete($_GET["id"]);
    }
    if ($_GET["action"]=="edit" && isset($_GET["id"])) {
        include('viewEdit.php');
    }
    if ($_GET["action"]=="add") {
        include('viewAdd.php');
    }
}
