<?php
require_once "script/pdocrud.php";
$pdo_crud = new PDOCrud();
    // we need to add actions 
    // before checking the login data if you want to peform any operation like password encryption etc/(optional)
     $pdo_crud->addCallback("before_select", "beforeloginCallback");
   // after login, we generally want to save the data in session
     $pdo_crud->addCallback("after_select", "afterLoginCallBack");
     //only required fields to be display on form
     $pdo_crud->formFields(array("email", "password"));
    ///redirect to some page after login (optional)
     $pdo_crud->formRedirection("registros.php");
    // set db table to your user table and call render function with select form
     echo $pdo_crud->dbTable("users")->render("selectform");
     ?>