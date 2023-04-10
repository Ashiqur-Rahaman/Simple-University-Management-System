<!DOCTYPE html>
<html>
<?php
session_start();

include("../control/adminprocon.php");
include("Adhome.php");
?>


    <div align="center">
        <label> Name : <?php echo  $admin->getName(); ?> </label><br>
        <label> Email : <?php echo  $admin->getEmail(); ?></label><br>
        <label> Date of Birth : <?php echo  $admin->getDob(); ?></label><br>
        <label> Gender : <?php echo  $admin->getGender(); ?></label><br>
        <label> Bloodgroup : <?php echo  $admin->getBlood(); ?></label><br>
        <label> Contact Number : <?php echo  $admin->getContact(); ?></label><br>
        <label> Address : <?php echo  $admin->getAddress(); ?></label><br>
        <label> Religion : <?php echo  $admin->getReligion(); ?></label><br>
        <label> Joining Date : <?php echo  $admin->getJoinigYear(); ?></label><br>
        <label> Salary : <?php echo  $admin->getSalary(); ?></label><br>
    </div>

</body>

</html>