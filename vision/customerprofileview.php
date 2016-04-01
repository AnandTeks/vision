
<?php 
session_start();
if(isset($_SESSION["login"])){
include('header.php'); 

?>


<?php


$sql = "SELECT * from customerprofile";
 $resp = $es->doStandaredQuery($sql);




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
								  <th>Name</th>
								  <th>Date of join </th>
								  <th>Phone Number</th>
								  <th>Customer Code</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  <?php for($i=0;$i<count($resp);$i++){?>
							<tr>
								<td><?php echo $resp[$i]['Name'];?></td>
								<td class="center"><?php echo $resp[$i]['dateofjoin'];?></td>
								<td class="center"><?php echo $resp[$i]['phno'];?></td>
								<td class="center"><?php echo $resp[$i]['id'];?></td>
								<td class="center">
									<a class="btn btn-success" href="profileview.php?id=<?php echo $resp[$i]['id']; ?> ">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="profileedit.php?id=<?php echo $resp[$i]['id']; ?> ">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="profiledelete.php?id=<?php echo $resp[$i]['id']; ?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							<?php }?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

				
				</div><!--/span-->
			</div><!--/row-->
    
<?php

}else
{
	header('Location:login.php');
}

 include('footer.php'); ?>

