<?php

include "controllers/StudentController.php";

$routing = $_GET["page"];
// nhan cac tham so qua GET o day
//echo '<pre>'; print_r($_GET);
switch ($routing) {
    case "student-list" : {
        $ctr = new \Controllers\StudentController();
        $ctr->getStudent();
        break;
    }
    case "student-add" : {
        $ctr = new \Controllers\StudentController();
        $ctr->addStudent();
        break;
    }
    case "student-post" : {
        $ctr = new \Controllers\StudentController();
        $ctr->postStudent();
        break;
    }
    case "student-edit" : {
        $ctr = new \Controllers\StudentController();
        $ctr->editStudent();
        break;
    }
    case "student-update" : {
        $ctr = new \Controllers\StudentController();
        $ctr->updateStudent();
        break;
    }
    case "student-delete" : {
        $ctr = new \Controllers\StudentController();
        $ctr->deleteStudent();
        break;
    }
    default : {
        die("404 not found!");
    }
}