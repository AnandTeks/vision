

<?php 
session_start();
if(isset($_SESSION["login"])){
include('header.php'); 

?>


			<div class="sortable row-fluid">
				<a data-rel="tooltip" class="well span3 top-block" href="customerprofile.php">
					<span class="icon28 icon-red icon-user"></span>
					<div>Customer Entry</div>
				</a>

                 <a data-rel="tooltip" class="well span3 top-block" href="customerprofileview.php">
					<span class="icon28 icon-red icon-user"></span>
					<div>Customer Profile View</div>
				</a>

				
				  <a data-rel="tooltip" class="well span3 top-block" href="billing.php">
					<span class="icon28 icon-red icon-edit"></span>
					<div>Billing</div>
				</a>

				 <a data-rel="tooltip" class="well span3 top-block" href="billingupdate.php">
					<span class="icon28 icon-red icon-edit"></span>
					<div>Billing Update</div>
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="export.php">
					<span class="icon28 icon-red icon-file"></span>
					<div>Customer Details</div>
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="report.php">
					<span class="icon28 icon-red icon-file"></span>
					<div>Date Wise Report</div>
				</a>


				</a>



			</div>
				  

		  
       
<?php

}else
{
	header('Location:login.php');
}

 include('footer.php'); ?>
