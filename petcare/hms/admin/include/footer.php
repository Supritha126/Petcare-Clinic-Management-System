<?php 
include("include/config.php");
$sql = mysqli_query($con,"SELECT * FROM settings ");
while($row=mysqli_fetch_array($sql))
{
	$Product_id = $row['id'];
	$Product_Name = $row['product_name'];
}
?>
<footer>
				<div class="footer-inner">
					<div class="pull-left">
			<span class="text-bold text-uppercase"><?php echo $Product_Name ?></span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>