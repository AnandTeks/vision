
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

 $sql = "SELECT sum(grandTotal) from billing where dateofentry>='$fromDate' and dateofentry<='$toDate'";
$respcusttotal = $es->doStandaredQuery($sql);


 $sql = "SELECT sum(Balanceamount) from billing where dateofentry>='$fromDate' and dateofentry<='$toDate'";
$respcustbalance = $es->doStandaredQuery($sql);



 $sql = "SELECT sum(amountpaid) from billing where dateofentry>='$fromDate' and dateofentry<='$toDate'";
$respcusttotalamountpaid = $es->doStandaredQuery($sql);


 $sql = "SELECT Count(*) from billing where dateofentry>='$fromDate' and dateofentry<='$toDate'";
$respcusttotalbill = $es->doStandaredQuery($sql);

}

?>

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>Date Wise Report</h2>
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
								  <th>FromDate</th>
								  <th>ToDate</th>
								  <th>No of Bills</th>
								  <th>Total Amount</th>
								   <th>Amount Received</th>
								  <th>Balance Amount</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td><?php echo $fromDate;?></td>
								<td class="center"><?php echo $toDate;?></td>
								
								<td class="center"><?php echo $respcusttotalbill[0]["Count(*)"];?></td>
								<td class="center"><?php echo $respcusttotal[0]['sum(grandTotal)'];?></td>
								<td class="center"><?php echo $respcusttotalamountpaid[0]['sum(amountpaid)'];?></td>
							   <td class="center"><?php echo $respcustbalance[0]['sum(Balanceamount)'];?></td>
								
							</tr>
							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

				<?php  include('footer.php'); ?>