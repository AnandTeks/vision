<?php 
include "lib/visionlib.php";
include "lib/config.php";
$es = new visionlib($DB->con);
?>



<?php

if($_GET['id'])
{
$id = $_GET['id'];
$sql = "SELECT * from billing_details where billno='$id'";
$respcust = $es->doStandaredQuery($sql);	

}
?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="8"><b>GLOBAL VISION</b></font></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font size="6"><b>Branded Optical Shop</b></font></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>TIN NO:33632906738</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Date: <?php echo $respcust[0]['dateofentry'];?> </b> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Bill No:<?php echo $respcust[0]['billno'];?></b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>CST NO:<?php echo $respcust[0]['customerid'];?></b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>TO:<?php echo $respcust[0]['name'];?></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>PH:<?php echo $respcust[0]['phno'];?></b>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>ADDRESS:<?php echo $respcust[0]['address'];?></b>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<table align="center" style="width:80%">
  <tr>
    <th>S.NO</th>
    <th>PARTICULARS</th>
    <th>QTY</th>
  
    <th>DISCOUNT</th>
    <th>AMOUNT</th>
      <th>TOTAL</th>
  </tr>
    <?php for($i=0;$i<count($respcust);$i++){?>
  <tr>

    <td><?php echo $i+1;?></td>
   <td><?php echo $respcust[$i]['product'];?></td>
   <td><?php echo $respcust[$i]['qty'];?></td>
   <td><?php echo $respcust[$i]['discount'];?>%</td>
    <td><?php echo $respcust[$i]['amount'];?></td>
    <td><?php echo $respcust[$i]['total'];?></td>
  </tr>
  <?php }?>

  <tr>

    <td colspan=5><p align="right"> GRAND TOTAL</p></td>
   <td><?php echo $respcust[0]['grandTotal'];?></td>
   
  </tr>
    <tr>

    <td colspan=5><p align="right"> AMOUNT PAID</p></td>
   <td><?php echo $respcust[0]['amountpaid'];?></td>
   
  </tr>
    <tr>

    <td colspan=5><p align="right"> BALANCE AMOUNT</p></td>
   <td><?php echo $respcust[0]['Balanceamount'];?></td>
   
  </tr>
 </table>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>#10,Saradha College main road,opp.Arunagiri hospital,salem-636004.</b></br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b> PH-04274266668,960045544.Email:globalvision.sk@gmail.com</b></br>


<!DOCTYPE html>
<html>
<head>

</head>
<body>


<script type="text/javascript">
function printpage()
  {
  window.print()
  //window.onfocus=function(){ window.close();}
  window.location.href="billing.php";
 }
</script>


 

<body onload="printpage()">



</body>
</html>