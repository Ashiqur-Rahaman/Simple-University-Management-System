<?php

include("conn.php");


class AdminRepo
{
    private $db;
    function __construct()
    {

        $this->db = new DataAccess();
    }

    function Insert(Admin $admin)
    {

        $sql = "INSERT INTO admin(name,email,dob,gender,bloodgroup,contact_number,address,religion,join_date,salary,password,image)
VALUES(" . "'" . $admin->getName() . "','" . $admin->getEmail() . "','" . $admin->getDob() . "',
        '" . $admin->getGender() . "','" . $admin->getBlood() . "','" . $admin->getContact() . "','" . $admin->getAddress() . "',
        '" . $admin->getReligion() . "','" . $admin->getJoinigYear() . "','" . $admin->getSalary() . "','"
            . $admin->getPassword() . "', '')";



        $result = $this->db->executeQuery($sql);
        if ($result > 0)
            echo "Insertion Successfull";
        else echo "Insertion Failed";
    }

    
    function Get(Admin $admin)
    {

        $sql2 = "SELECT * FROM admin WHERE email='" . $admin->getEmail() .  "'";
        $result = $this->db->ReaderQuery($sql2);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $admin->setId($row["id"]);
                $admin->setName($row["name"]);
                $admin->setEmail($row["email"]);
                $admin->setDob($row["dob"]);
                $admin->setGender($row["gender"]);
                $admin->setBlood($row["bloodgroup"]);
                $admin->setContact($row["contact_number"]);
                $admin->setAddress($row["address"]);
                $admin->setReligion($row["religion"]);
                $admin->setJoinigYear($row["join_date"]);
                $admin->setSalary($row["salary"]);
                $admin->setPassword($row["password"]);
                return $admin;
            }
        } else {
            echo "0 result ";
        }
    }

    function InsertLogin($id, $email, $password, $type)
    {
        $sql3 = "INSERT INTO login_type(email,password,type) VALUES('" . $email . "','" . $password . "','" . $type . "')";
        $result = $this->db->executeQuery($sql3);
        if ($result > 0)
            echo "Login Insertion Successfull";
        else echo "Insertion Failed";
    }
}
