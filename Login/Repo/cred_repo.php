<?php
include('conn.php');

class Credential
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function Get(Login  $entity)
    {

        $sql2 = "SELECT * FROM login_type WHERE  email='" . $entity->getUsername() . "' OR 
        id = '" . $entity->getUsername() . "'  AND password= '" . $entity->getPassword() . "' ";
        $result = $this->db->ReaderQuery($sql2);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $entity->setId($row["id"]);
                $entity->setEmail($row["email"]);
                $entity->setType($row["type"]);
                return $entity;
            }
        } else {
            return null;
        }
    }
}
