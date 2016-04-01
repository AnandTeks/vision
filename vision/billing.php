<?php
 ob_start(); 

session_start();
if(isset($_SESSION["login"])){
include('header.php'); 

?>
<?php
$sql = "SELECT count(*) from billing";
 $resp = $es->doStandaredQuery($sql);
$sql = "SELECT * from customerprofile";
 $respcust = $es->doStandaredQuery($sql);
if(!empty($_POST['fourthrowproduct'])){
 $billno = $_POST['billno'];
 $customerid = $_POST['customerId'];
 $sql = "SELECT * from customerprofile where id='$customerid'";
 $resp = $es->doStandaredQuery($sql);
 $Name = $resp[0]['Name'];
 $address = $resp[0]['address'];
 $phno = $resp[0]['phno'];
 $firstrowproduct=$_POST['firstrowproduct'];
 $firstrowcode=$_POST['firstrowcode'];
 $firstrowqty=$_POST['firstrowqty'];
 $firstrowamount=$_POST['firstrowamount'];
 $firstrowdiscount=$_POST['firstrowdiscount'];
 $firstrowtotal=$_POST['firstrowtotal'];
 $secondrowproduct=$_POST['secondrowproduct'];
 $secondrowcode=$_POST['secondrowcode'];
 $secondrowqty=$_POST['secondrowqty'];
 $secondrowamount=$_POST['secondrowamount'];
 $secondrowdiscount=$_POST['secondrowdiscount'];
 $secondrowtotal=$_POST['secondrowtotal'];
 $thirdrowproduct=$_POST['thirdrowproduct'];
 $thirdrowcode=$_POST['thirdrowcode'];
 $thirdrowqty=$_POST['thirdrowqty'];
 $thirdrowamount=$_POST['thirdrowamount'];
 $thirdrowdiscount=$_POST['thirdrowdiscount'];
 $thirdrowtotal=$_POST['thirdrowtotal'];
 $fourthrowproduct=$_POST['fourthrowproduct'];
 $fourthrowcode=$_POST['fourthrowcode'];
 $fourthrowqty=$_POST['fourthrowqty'];
 $fourthrowamount=$_POST['fourthrowamount'];
 $fourthrowdiscount=$_POST['fourthrowdiscount'];
 $fourthrowtotal=$_POST['fourthrowtotal'];
 $grandTotal =$_POST['grandTotal'];
 $amountpaid =$_POST['amountpaid'];
 $Balanceamount =$_POST['Balanceamount'];

 $billingArrayonlyone =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "firstrowproduct"=>"$firstrowproduct",
 "firstrowcode"=>"$firstrowcode",
 "firstrowqty"=>"$firstrowqty",
 "firstrowamount"=>"$firstrowamount",
 "firstrowdiscount"=>"$firstrowdiscount",
 "firstrowtotal"=>"$firstrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

 $billingArrayonlysecond =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "secondrowproduct"=>"$secondrowproduct",
 "secondrowcode"=>"$secondrowcode",
 "secondrowqty"=>"$secondrowqty",
 "secondrowamount"=>"$secondrowamount",
 "secondrowdiscount"=>"$secondrowdiscount",
 "secondrowtotal"=>"$secondrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));
 $billingArrayonlythird =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "thirdrowproduct"=>"$thirdrowproduct",
 "thirdrowcode"=>"$thirdrowcode",
 "thirdrowqty"=>"$thirdrowqty",
 "thirdrowamount"=>"$thirdrowamount",
 "thirdrowdiscount"=>"$thirdrowdiscount",
 "thirdrowtotal"=>"$thirdrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));
 $billingArrayonlyfourth =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "fourthrowproduct"=>"$fourthrowproduct",
 "fourthrowcode"=>"$fourthrowcode",
 "fourthrowqty"=>"$fourthrowqty",
 "fourthrowamount"=>"$fourthrowamount",
 "fourthrowdiscount"=>"$fourthrowdiscount",
 "fourthrowtotal"=>"$fourthrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

  $billing =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));
$respboolean = $es->addbillingforfirstrow($billingArrayonlyone);
 $respboolean = $es->addbillingforsecondrow($billingArrayonlysecond);
$respboolean = $es->addbillingforthirdrow($billingArrayonlythird);
 $respboolean = $es->addbillingforfourthrow($billingArrayonlyfourth);
 $respboolean = $es->billing($billing);
header("Location:bill.php?id=".$billno);
}
else if(!empty($_POST['thirdrowproduct'])){
$billno = $_POST['billno'];
 $customerid = $_POST['customerId'];
 $sql = "SELECT * from customerprofile where id='$customerid'";
 $resp = $es->doStandaredQuery($sql);
 $Name = $resp[0]['Name'];
 $address = $resp[0]['address'];
 $phno = $resp[0]['phno'];
 $firstrowproduct=$_POST['firstrowproduct'];
 $firstrowcode=$_POST['firstrowcode'];
 $firstrowqty=$_POST['firstrowqty'];
 $firstrowamount=$_POST['firstrowamount'];
 $firstrowdiscount=$_POST['firstrowdiscount'];
 $firstrowtotal=$_POST['firstrowtotal'];
 $secondrowproduct=$_POST['secondrowproduct'];
 $secondrowcode=$_POST['secondrowcode'];
 $secondrowqty=$_POST['secondrowqty'];
 $secondrowamount=$_POST['secondrowamount'];
 $secondrowdiscount=$_POST['secondrowdiscount'];
 $secondrowtotal=$_POST['secondrowtotal'];
 $thirdrowproduct=$_POST['thirdrowproduct'];
 $thirdrowcode=$_POST['thirdrowcode'];
 $thirdrowqty=$_POST['thirdrowqty'];
 $thirdrowamount=$_POST['thirdrowamount'];
 $thirdrowdiscount=$_POST['thirdrowdiscount'];
 $thirdrowtotal=$_POST['thirdrowtotal'];
 $grandTotal =$_POST['grandTotal'];
 $amountpaid =$_POST['amountpaid'];
 $Balanceamount =$_POST['Balanceamount'];

 $billingArrayonlyone =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "firstrowproduct"=>"$firstrowproduct",
 "firstrowcode"=>"$firstrowcode",
 "firstrowqty"=>"$firstrowqty",
 "firstrowamount"=>"$firstrowamount",
 "firstrowdiscount"=>"$firstrowdiscount",
 "firstrowtotal"=>"$firstrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

 $billingArrayonlysecond =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "secondrowproduct"=>"$secondrowproduct",
 "secondrowcode"=>"$secondrowcode",
 "secondrowqty"=>"$secondrowqty",
 "secondrowamount"=>"$secondrowamount",
 "secondrowdiscount"=>"$secondrowdiscount",
 "secondrowtotal"=>"$secondrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));
 $billingArrayonlythird =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "thirdrowproduct"=>"$thirdrowproduct",
 "thirdrowcode"=>"$thirdrowcode",
 "thirdrowqty"=>"$thirdrowqty",
 "thirdrowamount"=>"$thirdrowamount",
 "thirdrowdiscount"=>"$thirdrowdiscount",
 "thirdrowtotal"=>"$thirdrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));
 $billing =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));
$respboolean = $es->addbillingforfirstrow($billingArrayonlyone);
 $respboolean = $es->addbillingforsecondrow($billingArrayonlysecond);
$respboolean = $es->addbillingforthirdrow($billingArrayonlythird);
  $respboolean = $es->billing($billing);
    header("Location:bill.php?id=".$billno);
}
else if(!empty($_POST['secondrowproduct'])){
 $billno = $_POST['billno'];
 $customerid = $_POST['customerId'];
 $sql = "SELECT * from customerprofile where id='$customerid'";
 $resp = $es->doStandaredQuery($sql);
 $Name = $resp[0]['Name'];
 $address = $resp[0]['address'];
 $phno = $resp[0]['phno'];
 $firstrowproduct=$_POST['firstrowproduct'];
 $firstrowcode=$_POST['firstrowcode'];
 $firstrowqty=$_POST['firstrowqty'];
 $firstrowamount=$_POST['firstrowamount'];
 $firstrowdiscount=$_POST['firstrowdiscount'];
 $firstrowtotal=$_POST['firstrowtotal'];
 $secondrowproduct=$_POST['secondrowproduct'];
 $secondrowcode=$_POST['secondrowcode'];
 $secondrowqty=$_POST['secondrowqty'];
 $secondrowamount=$_POST['secondrowamount'];
 $secondrowdiscount=$_POST['secondrowdiscount'];
 $secondrowtotal=$_POST['secondrowtotal'];
$grandTotal =$_POST['grandTotal'];
 $grandTotal =$_POST['grandTotal'];
 $amountpaid =$_POST['amountpaid'];
 $Balanceamount =$_POST['Balanceamount'];

 $billingArrayonlyone =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "firstrowproduct"=>"$firstrowproduct",
 "firstrowcode"=>"$firstrowcode",
 "firstrowqty"=>"$firstrowqty",
 "firstrowamount"=>"$firstrowamount",
 "firstrowdiscount"=>"$firstrowdiscount",
 "firstrowtotal"=>"$firstrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

 $billingArrayonlysecond =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "secondrowproduct"=>"$secondrowproduct",
 "secondrowcode"=>"$secondrowcode",
 "secondrowqty"=>"$secondrowqty",
 "secondrowamount"=>"$secondrowamount",
 "secondrowdiscount"=>"$secondrowdiscount",
 "secondrowtotal"=>"$secondrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

  $billing =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

 
 $respboolean = $es->addbillingforfirstrow($billingArrayonlyone);

 $respboolean = $es->addbillingforsecondrow($billingArrayonlysecond);
 $respboolean = $es->billing($billing);
     header("Location:bill.php?id=".$billno);
}
else if(!empty($_POST['firstrowproduct'])){
 $billno = $_POST['billno'];
 $customerid = $_POST['customerId'];
 $sql = "SELECT * from customerprofile where id='$customerid'";
 $resp = $es->doStandaredQuery($sql);
 $Name = $resp[0]['Name'];
 $address = $resp[0]['address'];
 $phno = $resp[0]['phno'];
 $firstrowproduct=$_POST['firstrowproduct'];
 $firstrowcode=$_POST['firstrowcode'];
 $firstrowqty=$_POST['firstrowqty'];
 $firstrowamount=$_POST['firstrowamount'];
 $firstrowdiscount=$_POST['firstrowdiscount'];
 $firstrowtotal=$_POST['firstrowtotal'];
 $grandTotal =$_POST['grandTotal'];
 $amountpaid =$_POST['amountpaid'];
 $Balanceamount =$_POST['Balanceamount'];

 $billingArrayonlyone =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "Name"=>"$Name",
 "address" =>"$address",
 "phno"=> "$phno",
 "firstrowproduct"=>"$firstrowproduct",
 "firstrowcode"=>"$firstrowcode",
 "firstrowqty"=>"$firstrowqty",
 "firstrowamount"=>"$firstrowamount",
 "firstrowdiscount"=>"$firstrowdiscount",
 "firstrowtotal"=>"$firstrowtotal",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));


  $billing =array(
 "billno"=>"$billno",
  "customerid"=>"$customerid",
 "grandTotal"=>"$grandTotal",
 "amountpaid"=>"$amountpaid",
 "Balanceamount"=>"$Balanceamount",
 "dateofentry"=>date("d.m.Y"));

 
 $respboolean = $es->addbillingforfirstrow($billingArrayonlyone);
$respboolean = $es->billing($billing);
    header("Location:bill.php?id=".$billno);
 }
?>

			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Billing</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="billing.php" method="POST">
						  <fieldset>
							<legend>Billing</legend>
							

							<?php if(@$respboolean){?>
					<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Billing Added SucessFully !!!
						</div>
					<?php }?>
							

				<div class="control-group">
							  <label class="control-label" for="typeahead">Bill No </label>
							  <div class="controls">
								<input readonly class="span6 typeahead" required id="typeahead" name='billno' value='<?php echo $resp[0]["count(*)"]+1;?>'>
						
							  </div>
							</div>

							


						 <div class="control-group">
								<label class="control-label" for="selectError">Customer Code</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="customerId"> 
								  <?php for($i=0;$i<count($respcust);$i++){?>
									<option><?php echo $respcust[$i]['id']?></option>
								<?php }?>
								  </select>
								</div>
							  </div>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Sales Orders</b>

							<div class="box-content">
						<table class="table  table-bordered bootstrap-datatable ">
						  <thead>

						   
							  <tr>
							     
								  <th>Product Description</th>
								  <th>Code</th>
								  <th>Qty</th>
								 <th>Amount</th>
								  <th>Discount</th>
								    <th>Total Amount</th>
								  
								  
							  </tr>
						  </thead>   
						  <tbody>
							<tr>


							<td><input type="text" name="firstrowproduct" value="" style="width:150px;"></td>
							<td><input type="text" name="firstrowcode"  style="width:150px;"></td>
							<td><input type="text" name="firstrowqty" id="firstrowqty" onkeyup="qty()" style="width:150px;"></td>
							<td><input type="text" name="firstrowamount" id="firstrowamount" onkeyup="totalAmount()" style="width:150px;"></td>
							<td><input type="text" name="firstrowdiscount" id="firstrowdiscount" onkeyup="per()"  style="width:150px;"></td>
								<td><input type="text" name="firstrowtotal"  id="firstrowtotal" style="width:150px;"></td>
						  </tr>
						  <tr>
							
							<td><input type="text" name="secondrowproduct"  style="width:150px;"></td>
							<td><input type="text" name="secondrowcode"  style="width:150px;"></td>
							<td><input type="text" name="secondrowqty" id="secondrowqty" onkeyup="qty2()" style="width:150px;"></td>
							<td><input type="text" name="secondrowamount" id="secondrowamount"  onkeyup="totalAmount2()"  style="width:150px;"></td>
							<td><input type="text" name="secondrowdiscount" id="secondrowdiscount" onkeyup="per2()" style="width:150px;"></td>
								<td><input type="text" name="secondrowtotal" id="secondrowtotal" style="width:150px;"></td>
						  </tr>
						  <tr>
							
							<td><input type="text" name="thirdrowproduct"  style="width:150px;"></td>
							<td><input type="text" name="thirdrowcode"  style="width:150px;"></td>
							<td><input type="text" name="thirdrowqty" id="thirdrowqty" onkeyup="qty3()" style="width:150px;"></td>
							<td><input type="text" name="thirdrowamount" id="thirdrowamount"   onkeyup="totalAmount3()" style="width:150px;"></td>
							<td><input type="text" name="thirdrowdiscount" id="thirdrowdiscount" onkeyup="per3()" style="width:150px;"></td>
								<td><input type="text" name="thirdrowtotal" id="thirdrowtotal"  style="width:150px;"></td>
						  </tr>
						  <tr>
							
							<td><input type="text" name="fourthrowproduct"  style="width:150px;"></td>
							<td><input type="text" name="fourthrowcode"  style="width:150px;"></td>
							<td><input type="text" name="fourthrowqty" id="fourthrowqty" onkeyup="qty4()" style="width:150px;"></td>
							<td><input type="text" name="fourthrowamount" id="fourthrowamount"  onkeyup="totalAmount4()" style="width:150px;"></td>
							<td><input type="text" name="fourthrowdiscount" onkeyup="per4()" id="fourthrowdiscount" style="width:150px;"></td>
								<td><input type="text" name="fourthrowtotal" id="fourthrowtotal" style="width:150px;"></td>
						  </tr>
						  <tr>
							
							
							<td  colspan=4></td>
								<td>Total</td>
									<td><input type="text"name="grandTotal" id="grandTotal" style="width:150px;"></td>
						  </tr>

						  <tr>
							
							
							<td  colspan=4></td>
								<td>Amount Paid</td>
									<td><input type="text" required name="amountpaid" id="amountpaid" onkeyup="amountcal()" style="width:150px;"></td>
						  </tr>

						  <tr>
							
							
							<td  colspan=4></td>
								<td>Balance</td>
									<td><input type="text" required name="Balanceamount" id="Balanceamount" style="width:150px;"></td>
						  </tr>


							
						  </tbody>
					  </table>            
				
			</div><!--/row-->



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Bill </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->


			
			</div><!--/row-->
    
<?php

}else
{
	header('Location:login.php');
}

 include('footer.php'); ?>


<script>

function amountcal()
{
	var grandTotal = $('#grandTotal').val();
    var amountpaid = $('#amountpaid').val();
    var Balanceamount = grandTotal - amountpaid;
    $('#Balanceamount').val(Balanceamount);
}
function grandTotal()
{
	 var firstrowtotal = $('#firstrowtotal').val();
    var secondrowtotal = $('#secondrowtotal').val();
    var thirdrowtotal = $('#thirdrowtotal').val();
   var fourthrowtotal = $('#fourthrowtotal').val();
var grandTotal = parseInt(firstrowtotal, 10) + parseInt(secondrowtotal,10) +parseInt(thirdrowtotal,10) +parseInt(fourthrowtotal,10);
$('#grandTotal').val(grandTotal);
}

function per()
{

var firstrowdiscount = $('#firstrowdiscount').val();
var firstrowqty = $('#firstrowqty').val();
var firstrowamount = $('#firstrowamount').val();
var totalAmount = firstrowqty * firstrowamount;
var amount = (firstrowdiscount/ 100) * totalAmount;
var firstrowdiscounttotal = totalAmount -amount;
$('#firstrowtotal').val(firstrowdiscounttotal);
grandTotal();


   
}




function per2()
{


var secondrowdiscount = $('#secondrowdiscount').val();
var secondrowqty = $('#secondrowqty').val();
var secondrowamount = $('#secondrowamount').val();
var totalAmount = secondrowqty * secondrowamount;
var amount = (secondrowdiscount/ 100) * totalAmount;
var secondrowdiscounttotal = totalAmount -amount;
$('#secondrowtotal').val(secondrowdiscounttotal);
grandTotal();

}

function per3()
{


var thirdrowdiscount = $('#thirdrowdiscount').val();
var thirdrowqty = $('#thirdrowqty').val();
var thirdrowamount = $('#thirdrowamount').val();
var totalAmount = thirdrowqty * thirdrowamount;
var amount = (thirdrowdiscount/ 100) * totalAmount;
var thirdrowdiscounttotal = totalAmount -amount;
$('#thirdrowtotal').val(thirdrowdiscounttotal);
grandTotal();

}

function per4()
{


var fourthrowdiscount = $('#fourthrowdiscount').val();
var fourthrowqty = $('#fourthrowqty').val();
var fourthrowamount = $('#fourthrowamount').val();
var totalAmount = fourthrowqty * fourthrowamount;
var amount = (fourthrowdiscount/ 100) * totalAmount;
var fourthrowdiscounttotal = totalAmount-amount;
$('#fourthrowtotal').val(fourthrowdiscounttotal);
grandTotal();

}

function totalAmount()
{

  var firstrowqty = $('#firstrowqty').val();
  var firstrowamount = $('#firstrowamount').val();
  var totalAmount = firstrowqty * firstrowamount;
  $('#firstrowtotal').val(totalAmount);



  var secondrowqty = $('#secondrowqty').val();
  var secondrowamount = $('#secondrowamount').val();
  var totalAmount = secondrowqty * secondrowamount;
  $('#secondrowtotal').val(totalAmount);

  var thirdrowqty = $('#thirdrowqty').val();
  var thirdrowamount = $('#thirdrowamount').val();
  var totalAmount = thirdrowqty * thirdrowamount;
  $('#thirdrowtotal').val(totalAmount);

  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per();

}



function totalAmount2()
{





  var secondrowqty = $('#secondrowqty').val();
  var secondrowamount = $('#secondrowamount').val();
  var totalAmount = secondrowqty * secondrowamount;
  $('#secondrowtotal').val(totalAmount);

  var thirdrowqty = $('#thirdrowqty').val();
  var thirdrowamount = $('#thirdrowamount').val();
  var totalAmount = thirdrowqty * thirdrowamount;
  $('#thirdrowtotal').val(totalAmount);

  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per2();

}



function totalAmount3()
{

  
  var thirdrowqty = $('#thirdrowqty').val();
  var thirdrowamount = $('#thirdrowamount').val();
  var totalAmount = thirdrowqty * thirdrowamount;
  $('#thirdrowtotal').val(totalAmount);

  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per3();

}

function totalAmount4()
{

 
  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per4();


}



function qty()
{

 var firstrowqty = $('#firstrowqty').val();
  var firstrowamount = $('#firstrowamount').val();
  var totalAmount = firstrowqty * firstrowamount;
  $('#firstrowtotal').val(totalAmount);



  var secondrowqty = $('#secondrowqty').val();
  var secondrowamount = $('#secondrowamount').val();
  var totalAmount = secondrowqty * secondrowamount;
  $('#secondrowtotal').val(totalAmount);

  var thirdrowqty = $('#thirdrowqty').val();
  var thirdrowamount = $('#thirdrowamount').val();
  var totalAmount = thirdrowqty * thirdrowamount;
  $('#thirdrowtotal').val(totalAmount);

  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
 
 per();

}

function qty2()
{

  
  var secondrowqty = $('#secondrowqty').val();
  var secondrowamount = $('#secondrowamount').val();
  var totalAmount = secondrowqty * secondrowamount;
  $('#secondrowtotal').val(totalAmount);
  var thirdrowqty = $('#thirdrowqty').val();
  var thirdrowamount = $('#thirdrowamount').val();
  var totalAmount = thirdrowqty * thirdrowamount;
  $('#thirdrowtotal').val(totalAmount);
  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per2();

}

function qty3()
{

  
  var thirdrowqty = $('#thirdrowqty').val();
  var thirdrowamount = $('#thirdrowamount').val();
  var totalAmount = thirdrowqty * thirdrowamount;
  $('#thirdrowtotal').val(totalAmount);
  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per3();

}


function qty4()
{

 
  var fourthrowqty = $('#fourthrowqty').val();
  var fourthrowamount = $('#fourthrowamount').val();
  var totalAmount = fourthrowqty * fourthrowamount;
  $('#fourthrowtotal').val(totalAmount);
per4();

}




</script>







