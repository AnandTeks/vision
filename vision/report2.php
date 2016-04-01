
<?php include('header.php'); ?>


<?php

if(isset($_POST['fromDate']))
{
 $fromDate =$_POST['fromDate'];
 $toDate =$_POST['toDate'];
 $fromDate = new DateTime($fromDate);
  $toDate = new DateTime($toDate);
 $fromDate = $fromDate->format('d.m.Y');
  $toDate = $toDate->format('d.m.Y');

  $sql = "SELECT DISTINCT billno,grandTotal,amountpaid,Balanceamount,name,customerid,dateofentry from billing_details where dateofentry>='$fromDate' and dateofentry<='$toDate'";
$respcusttotal = $es->doStandaredQuery($sql);



}

?>

			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Report View</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								 <th>Bill No</th>
								  <th>Date of Purchaes</th>
								  <th>Customer Name</th>
								  <th>Customer Id</th>
							
								   <th>Amount Received</th>
								  <th>Balance Amount</th>
								  	  <th>Total Amount</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php for($i=0;$i<count($respcusttotal);$i++) {?>
							<tr>
								<td><?php echo $respcusttotal[$i]["billno"];?></td>
								<td class="center"><?php echo $respcusttotal[$i]['dateofentry'];?></td>
								
								<td class="center"><?php echo $respcusttotal[$i]["name"];?></td>
								<td class="center"><?php echo $respcusttotal[$i]['customerid'];?></td>
								<td class="center"><?php echo $respcusttotal[$i]['amountpaid'];?></td>
							   <td class="center"><?php echo $respcusttotal[$i]['Balanceamount'];?></td>
							    <td class="center"><?php echo $respcusttotal[$i]['grandTotal'];?></td>
								
							</tr>
							<?php }?>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<?php  include('footer.php'); ?>