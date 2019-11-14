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
									<table class="table">
										<tr>
											<td><center><b><font color="white" size="2">ID</font></b></center></td>
											<td><center><b><font color="white" size="2">Name</font></b></center></td>
											<td><center><b><font color="white" size="2">Author Name </font></b></center></td>
											<td><center><b><font color="white" size="2">Publisher Name</font></b></center></td>
											<td><center><b><font color="white" size="2">Price</font></b></center></td>
										</tr>
										<?php 
										$i=0;
											foreach ($book_list as $book) {
												
											
										?>
										<tr>
											<td><center><b><font  size="2"><?= $i++;?></font></b></center></td>
											<td><center><b><font  size="2"><?= $book['name'];?></font></b></center></td>
											<td><center><b><font  size="2"><?= $book['aname'];?></font></b></center></td>
											<td><center><b><font  size="2"><?= $book['pname'];?></font></b></center></td>
											<td><center><b><font  size="2"><?= $book['price'];?></font></b></center></td>
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
