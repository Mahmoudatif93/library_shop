<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Book List </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-12">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-7">
									<p class="float-right"><a href="<?= base_url('Home/issue_book_list'); ?>" style="color: white">Issue Book List</a></p>
									<?= form_open('home/book_filter');?>
									<table class="table">
										<tr>
											<td><b><font color="white">Enter Member ID </font></b></td>
											<td><input type="text" name="id" placeholder="Enter Member ID" title="Enter Member ID" class="form-control"></td>
											<td><input type="submit" name="sub" value="Search"  title="Search" class="btn btn-primary"></td>
										</tr>
										
									</table>
									<?= form_close();?>
									<?php

										if (isset($res)) {
									?>
									<?= form_open('home/issue_book');?>
									<table class="table">
										
										<tr>
											<td><b><font color="white" size="2">ID</font></b></td>
											<td><input type="text" name="user_id" value="<?=$res[0]['id']; ?>" class="form-control"></td>
											<td><center><b><font color="white" size="2">Name</font></b></center></td>
											<td><input type="text" name="name" value="<?=$res[0]['name']; ?>" class="form-control"></td>
										</tr>
								       <tr>
											<td><b><font color="white" size="2">Address</font></b></td>
											<td><input type="text" name="Address" value="<?=$res[0]['address']; ?>" class="form-control"></td>
											<td><center><b><font color="white" size="2">E-mail</font></b></center></td>
											<td><input type="text" name="email" value="<?=$res[0]['email']; ?>" class="form-control"></td>

										</tr>
										<tr>
											<td><b><font color="white" size="2">Select Book</font></b></td>
											<td><select name="book_name" class="form-control">
												<?php
													foreach ($book_data as $book) {
														?><option><?= $book['name'];?></option><?php
													}
												 ?>
												
												
											</select></td>
										</tr>
										<tr><td colspan="4"><input type="submit" name="btn" value="Book Now" class="btn btn-primary"></td></tr>

									
									</table>
									<?php echo form_close();?>
								<?php }else{
									echo $msg=$this->session->flashdata('msg');
								}
								?>
								</div>

								
								
							
						</div>
					</div>

				</div>
				<div class="col-sm-1">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php include('common/footer.php'); ?>
