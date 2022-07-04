<?php

namespace Controllers;

use Models\Student;

include "models/Student.php";

class StudentController
{
    public function getStudent() {
        $studentObj = new Student();
        $list = $studentObj->all();
//        echo '<pre>'; print_r($list); die();
        include_once "views/student-list.php";
    }

    public function addStudent() {
        include_once "views/addStudent.php";
    }

    public function postStudent() {
        //connect db
        $conn = \Connector::createInstance();
        //truy vấn thêm một sv
        $sql_txt = "INSERT INTO persons(fullname, email, age) VALUES (?,?,?)";
        $stt = $conn->createStatement($sql_txt);

        //set params and excute
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $stt->bind_param("sss", $name, $email, $age);   //khai báo 3 biến giả định kiểu string (s)
        $stt->execute();

        header("Location: ?page=student-list");
    }

    public function editStudent(){
        $model = new Student();
        //do student la 1 array nen khong truy xuat theo kieu con tro (->)
        $student = $model->findOne($_GET['ID']); //dung ham findOne de convert mang thanh tung object de truy xuat
          //echo '<pre>'; print_r($student); die;
        if (!$student) {
            // truong hop khong tim thay, sua duong dan thi tra ve list
            header("Location: /project/session03/mvc/?page=student-list");
        }

        include_once "views/editStudent.php";
    }

    public function updateStudent() {
        //connect db
        $conn = \Connector::createInstance();

        //truy vấn thêm một sv
        $sql_txt = "UPDATE persons SET fullname = ?, email = ?, age = ? WHERE ID = ?";
        $stt = $conn->createStatement($sql_txt);

        //set params and excute
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        //ID sẽ gán bằng ID được GET
        $ID = $_GET['ID'];

        $sID = $ID; //bac cau qua ID

        $stt->bind_param("sssi", $name, $email, $age, $sID);   //khai báo 4 biến giả định kiểu string (s), int(i)
        $stt->execute();

        //update xong thi dieu huong qua list
        header("Location: /project/session03/mvc/?page=student-list");
    }

    public function deleteStudent() {
        //connect db
        $conn = \Connector::createInstance();
        //truy vấn xoá một sv
        $sql_txt = "DELETE FROM persons WHERE ID = " . $_GET['ID'];
        $stt = $conn->query($sql_txt);

        header("Location: ?page=student-list");
    }
}