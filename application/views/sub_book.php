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
							
								<div class="col-sm-7"><br>
									<table class="table">
										
										<tr>
											<td colspan="2"><b><font color="white">Member ID</font></b></td>
											<td colspan="2"><input type="text" name="mid"  class="form-control"></td>
											<td colspan="2"><b><font color="white">Name</font></b></td>
											<td colspan="2"><input type="text" name="Name"  class="form-control"></td>
											
										</tr>
										<tr>
											<td colspan="2"><b><font color="white">Address</font></b></td>
											<td  colspan="2"><input type="text" name="address"  class="form-control"></td>
											<td colspan="2"><b><font color="white">Email</font></b></td>
											<td  colspan="2"><input type="text" name="email"  class="form-control"></td>
											
										</tr>
										<tr>
											<td colspan="2"><b><font color="white">Book Name</font></b></td>
											<td  colspan="2"><input type="text" name="bname"  class="form-control"></td>
											<td colspan="2"><b><font color="white">Price</font></b></td>
											<td  colspan="2"><input type="text" name="price"  class="form-control"></td>
											
										</tr>
										<tr>
											<td colspan="4"><input type="button" name="sub" value="Submit" class="btn btn-primary"></td>
										</tr>
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
