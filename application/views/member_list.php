<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Member List </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-12">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-7">
									<table class="table">
										<tr>
											<td><center><b><font color="white" size="2">ID</font></b></center></td>
											<td><center><b><font color="white" size="2">Name</font></b></center></td>
											<td><center><b><font color="white" size="2">Address</font></b></center></td>
											<td><center><b><font color="white" size="2">Mobile No</font></b></center></td>
											<td><center><b><font color="white" size="2">E-mail</font></b></center></td>
										</tr>
										<?php 
											$i=0;
											foreach ($res as $member) {
												
											
										?>
										<tr>
											<td><center><b><font  size="2"><?= $i++;?></font></b></center></td>
											<td><center><b><font  size="2"><?=$member['name'];?></font></b></center></td>
											<td><center><b><font  size="2"><?=$member['address'];?></font></b></center></td>
											<td><center><b><font  size="2"><?=$member['mno'];?></font></b></center></td>
											<td><center><b><font  size="2"><?=$member['email'];?></font></b></center></td>
										</tr>	

									<?php }?>
									</table>
								
								</div>

								
								
							
						</div>
					</div>

				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</div>
</body>
</html>
<?php include('common/footer.php'); ?>
