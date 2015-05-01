<?php

include_once 'function/functions.php';
$obj= new database();

 $db=$obj-> connection();
 
 Class menu
{

public function get_menu()
        {

     

        $sql = "
        SELECT *
        FROM hod_studentmail";

        $result = $sql->query($sql);
        }

}



        $menu = new menu();
        $menu->get_menu();
        while($row = $menu->fetch_assoc())
        { 
        ?>
        <li><a href="<?php echo $row['reg_no'];?>"><?php echo $row['complaint_type'];?></a></li>
    <?php
        }
        ?>


