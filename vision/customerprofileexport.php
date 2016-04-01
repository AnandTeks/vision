<?php 
include "lib/visionlib.php";
include "lib/config.php";
$es = new visionlib($DB->con);
?>


<table border="1">
    <tr>
        <th>NO.</th>
        <th>NAME</th>
        <th>phone no</th>
        <th>Address</th>
        <th>Email</th>
    </tr>
    <?php
    //connection to mysql
    mysql_connect("localhost", "root", ""); //server , username , password
    mysql_select_db("vision");
    
    //query get data
    $sql = mysql_query("SELECT * FROM customerprofile ORDER BY id ASC");
    $no = 1;
    while($data = mysql_fetch_assoc($sql)){
        echo '
        <tr>
            <td>'.$no.'</td>
            <td>'.$data['Name'].'</td>
            <td>'.$data['phno'].'</td>
              <td>'.$data['address'].'</td>
                <td>'.$data['email'].'</td>
        </tr>
        ';
        $no++;
    }
    ?>
</table>