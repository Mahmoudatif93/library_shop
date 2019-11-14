<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Submit Book List </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-12">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-7">
									<?php echo $this->session->flashdata('msg'); ?>
									<table class="table">
										<tr>
											<td><center><b><font color="white" size="2">ID</font></b></center></td>
											<td><center><b><font color="white" size="2">Name</font></b></center></td>
											<td><center><b><font color="white" size="2">Author Name </font></b></center></td>
											<td><center><b><font color="white" size="2">E-mail</font></b></center></td>
											
										</tr>
												<?php
												foreach ($sub_book_enfo as $book_info) {
													
												
											 ?>
										<tr>
											
											<td><center><b><font  size="3"><?=$book_info['id'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['name'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['book_name'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['email'];?></font></b></center></td>	
											
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
