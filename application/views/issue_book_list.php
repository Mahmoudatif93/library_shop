<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Issue Book List </h2>
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
											<td><center><b><font color="white" size="2">Adress</font></b></center></td>
											<td><center><b><font color="white" size="2">E-mail</font></b></center></td>
											<td><center><b><font color="white" size="2">Operation</font></b></center></td>
										</tr>
												<?php
												foreach ($book_list as $book_info) {
													
												
											 ?>
										<tr>
											
											<td><center><b><font  size="3"><?=$book_info['user_id'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['name'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['book_name'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['address'];?></font></b></center></td>
											<td><center><b><font  size="3"><?=$book_info['email'];?></font></b></center></td>
											<td><center><a href="<?= base_url('Home/sub_book/'.$book_info['id']); ?>" class="btn btn-primary">Submit Now</a></center></td>
											
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
