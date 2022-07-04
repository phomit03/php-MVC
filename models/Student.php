<?php

namespace Models;

include "IModel.php";
include "helpers/Connector.php";

class Student implements IModel
{
    protected $_table = "persons";
    protected $_primarykey = "ID";
    public $ID;
    public $fullname;
    public $email;
    public $age;

    /**
     * @return mixed
     */
    function all()
    {
        // TODO: Implement all() method.
        $conn = \Connector::createInstance();
        $sql_txt = "SELECT * FROM " . $this->_table;
        $result = $conn->query($sql_txt);
        $list = [];
        while ($row = $result->fetch_assoc()) {
            $s = new Student();
            $s->ID = $row['ID'];
            $s->fullname = $row['fullname'];
            $s->email = $row['email'];
            $s->age = $row['age'];
            $list[] = $s;
        }
        return $list;
    }
    
    function findOne($id)
    {
        //connect db
        $conn = \Connector::createInstance();
        //truy vấn
        $sql_txt = "SELECT * FROM persons WHERE ID = " . $id;
        $result = $conn->query($sql_txt);

        $student = null;
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $student = new self();
                $student->ID = $row['ID'];
                $student->fullname = $row['fullname'];
                $student->email = $row['email'];
                $student->age = $row['age'];
            }
        }
        
        return $student;
    }

    /**
     * @return mixed
     */
    function save()
    {
        // TODO: Implement save() method.
    }

    /**
     * @return mixed
     */
    function update()
    {
        // TODO: Implement update() method.
    }

    /**
     * @return mixed
     */
    function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    function find($id)
    {
        // TODO: Implement find() method.
    }
}