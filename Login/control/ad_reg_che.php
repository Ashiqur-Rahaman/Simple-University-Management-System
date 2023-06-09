<?php

include("../Entity/Admin.php");
include("../Repo/adrepo.php");
$admin=new Admin();
$flag=true;
$name=$mail=$dob=$gender=$bloodtype=$number=$address=$religion=$joinDate=$salary=$password="";
$error_name=$error_email=$error_dob=$error_gender=$error_blood=$error_number=$error_address=$error_religion=$error_joinDate=$error_salary=$error_password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

  
  if (empty($_REQUEST["name"])) 
    {
        $error_name = "*Cannot be empty";
    } 
  else {
        $name = $_REQUEST["name"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) 
		{
            $error_name = "*Only letters and white space allowed";
            $flag = false;
        } 
		else if(strlen($name)<8)
		{
			$error_name = "*Name cannot be less than 8 characters";
            $flag = false;
		}
		else 
		{
          
            $admin->setName($name);
        }
    }
	
	

    if (empty($_REQUEST["mail"])) 
	{
        $error_email = "*Cannot be empty";
        $flag = false;
    } else {
        $mail = $_REQUEST["mail"];
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error_email = "*Invalid format";
            $flag = false;
        } else {
            
            $admin->setEmail($mail);
        }
    }
	
	

    if (empty($_REQUEST["DOB"])) 
	{
        $error_dob = "*Cannot be empty";
        $flag = false;
    } else {
        $dob = $_REQUEST["DOB"];
        $admin->setDob($dob);
    }
	

    if (empty($_REQUEST["gender"])) {
        $error_gender = "*Cannot be empty";
        $flag = false;
    } else {
        $gender = $_REQUEST["gender"];
        $admin->setGender($gender);
    }
	
	

    if (empty($_REQUEST["bloodtype"])) 
	{
        $error_blood = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $bloodtype = $_REQUEST["bloodtype"];
        $admin->setBlood($bloodtype);
    }



    if (empty($_REQUEST["number"])) 
	{
        $error_number = "*Cannot be empty";
        $flag = false;
    } 
	else {
		 $number = $_REQUEST["number"];
		 if(strlen($number)!=11&&strlen($number)!=13)
		{
			$error_number = "*Invalid Number";
            $flag = false;
		}
	
		else if (!preg_match("/^[0-9]*$/", $number)) {
				$error_number = "*Only numbers allowed";
				$flag = false;
			} else {
				$admin->setContact($number);
			}
		}
	

    if (empty($_REQUEST["address"])) {
        $error_address = "*Cannot be empty";
        $flag = false;
    } 
	else {
		 $address = $_REQUEST["address"];
		 if(strlen($address)<8)
		{
			$error_address = "*Address Cannot Be Less Than 8 Characters";
            $flag = false;
		}
	
		else	
		{
			
			$admin->setAddress($address);
		}
	
	}

    if (empty($_REQUEST["religion"])) {
        $error_religion = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $religion = $_REQUEST["religion"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $religion)) {
            $$error_religion = "Only letters and white spaces allowed";
            $flag = false;
        } 
		else if(strlen($religion)<5)
		{
			$error_religion = "*Cannot Be Less Than 5 Characters";
            $flag = false;
		}
		
		
		else {
            $admin->setReligion($religion);
        }
    }

    if (empty($_REQUEST["joinDate"])) 
	{
        $error_joinDate = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $joinDate = $_REQUEST["joinDate"];
        $admin->setJoinigYear($joinDate);
    }
	
	

    
    
   
    if (empty($_REQUEST["salary"])) {
        $error_salary = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $salary = $_REQUEST["salary"];
        if (!ctype_alnum($salary)) {
            $error_salary = "*Only Numbers allowed";
            $flag = false;
        }
		else if(strlen($salary)<4)
		{
			$error_salary = "*Cannot Be Less Than 4 Digits";
            $flag = false;
		}
		else 
		{
            $admin->setSalary($salary);
        }
    }

    if (empty($_REQUEST["password"])) {
        $error_password = "*Cannot be empty";
        $flag = false;
    } 
	else{
		$password = $_REQUEST["password"];
		if(!ctype_alnum($password))
		{
		$error_password = "*Password Must Be Alphanumeric";
		$flag = false;
		}
		else {
			
			$admin->setPassword($password);
		}
	}
   
}
else $flag=false;



if($flag)
		{
			$_SESSION["email"]=$mail;
			$repo=new AdminRepo();
			$repo->Insert($admin);
			$admin=$repo->Get($admin);
			$repo->InsertLogin($admin->getId(),$admin->getEmail(),$admin->getPassword(),"admin");
		}


?>