<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Add Book </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-12">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-7">
									<?= form_open('home/add_book1');?>
									<table class="table">
										<tr>
											<td><b><font color="white">Author Name</font></b></td>
											<td>
												<select name="aname" class="form-control">
													
													<?php foreach ($author_list as $author) {?>
														<option><?= $author['name']; ?></option>
													<?php }?>
													
												</select>
											</td>
											<td><b><font color="white">Publisher Name</font></b></td>
											<td>
												<select name="pname" class="form-control">
													<?php foreach ($pub_list as $pub) {?>
														<option><?= $pub['name']; ?></option>
													<?php }?>
												</select>
											</td>
											
										</tr>
										<tr>
											<td colspan="2"><b><font color="white">Book Name</font></b></td>
											<td colspan="2"><input type="text" name="name" placeholder="Enter Book Name" title="Enter Book Name" class="form-control"></td>
											
										</tr>
											<tr>
											<td colspan="2"><b><font color="white">Price</font></b></td>
											<td  colspan="2"><input type="text" name="price" placeholder="Enter Price" title="Enter Price" class="form-control"></td>
											
										</tr>
										<tr>
											<td colspan="2"><input type="submit" name="book_add" value="add" class="btn btn-primary"></td>
											<td colspan="2">
												<?php
													echo $msg=$this->session->flashdata('msg');
												 ?>

											</td>
										</tr>
									</table>
									<?= form_close();?>
								
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
