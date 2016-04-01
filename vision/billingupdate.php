<?php
 ob_start();  

session_start();
if(isset($_SESSION["login"])){
include('header.php'); 

?>




<?php

if(isset($_POST['amountalready']) && isset($_POST['amountPaying']))
{
	$billNo = $_POST['billNo'];
	$amountalready = $_POST['amountalready'];
	$amountPaying = $_POST['amountPaying'];
	$totalAmount = $amountalready +$amountPaying;
	echo $balanceAmount = $_POST['total'];
	$billUpdateArray =array("billNo"=>"$billNo","totalAmount"=>"$totalAmount","balanceAmount"=>"$balanceAmount");
	$respboolean = $es->billingUpdate($billUpdateArray);
	$respboolean = $es->billingUpdateforbillingdetails($billUpdateArray);

	header("Location:bill.php?id=".$billNo);
}

?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i>Billing Update</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="billingupdate.php" method="POST">
						  <fieldset>
							<legend>Billing update</legend>
							
							<?php if(@$respboolean){?>
					<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Billing updated SucessFully !!!
						</div>
					<?php }?>
							


							<div class="control-group">
							  <label class="control-label" for="typeahead">Bill No</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead"  name='billNo'  id="billNo">
						
							  </div>
							</div>




						
							<div class="control-group">
							  <label class="control-label" for="typeahead">Total Bill Amount </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="totalAmount" name='totalAmount'>
						
							  </div>
							</div>


							 <div class="control-group">
							  <label class="control-label" for="typeahead">Amount Already Paid </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="amountalready" name='amountalready'>
						
							  </div>
							</div>



                        <div class="control-group">
							  <label class="control-label" for="typeahead">Balance Bill Amount </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="balanceAmount" name='balanceAmount'>
						
							  </div>
							</div>


                             
                        <div class="control-group">
							  <label class="control-label" for="typeahead">Amount paying Now</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="amountPaying" name='amountPaying'>
						
							  </div>
							</div>



							<div class="control-group">
							  <label class="control-label" for="typeahead">Remaining Amount</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="reminingamount" name='total'>
						
							  </div>
							</div>

						

<!-- 

<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>
 -->

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save </button>
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




<script >
	
$( document ).ready(function() {

$("#billNo").keyup(function(){

 	var total = $('#billNo').val();
 	
 	$.ajax({ url: 'ajaxCall.php',
         data: {billNo: total},
         type: 'post',
         success: function(output) {

         	var jsonData = JSON.parse(output);
                 var totalAmount = jsonData[0]["grandTotal"];
                   var AmountPaid = jsonData[0]["amountpaid"];
                   var Balance = totalAmount - AmountPaid;
                  
                   $("#totalAmount").val(totalAmount);

                   $("#amountalready").val(AmountPaid);

                   $("#balanceAmount").val(Balance);
                  }
});

});	




$("#amountPaying").keyup(function(){

 	var balanceAmount = $('#balanceAmount').val();
 	var amountPaying = $('#amountPaying').val();
 	var totalAmount = balanceAmount - amountPaying;
 	 $('#reminingamount').val(totalAmount);
});	




});




</script>