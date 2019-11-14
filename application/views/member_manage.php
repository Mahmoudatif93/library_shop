<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Add Member </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-12">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-7">
									<p><a href="<?= base_url('Home/member_list'); ?>" class="float-right" style="color: White">Member List</a></p>
									<?= form_open('home/add_member');?>
									<table class="table">
										
										<tr>
											<td colspan="2"><b><font color="white">Name</font></b></td>
											<td colspan="2"><input type="text" name="name" placeholder="name"  class="form-control"></td>
											
										</tr>
										<tr>
											<td colspan="2"><b><font color="white">Address</font></b></td>
											<td  colspan="2"><input type="text" name="address" placeholder="Address" class="form-control"></td>		
										</tr>
										<tr>
											<td colspan="2"><b><font color="white">Email</font></b></td>
											<td  colspan="2"><input type="text" name="email" placeholder="Email" class="form-control"></td>
										</tr>
										<tr>
											<td colspan="2"><b><font color="white">Mobile No</font></b></td>
											<td  colspan="2"><input type="text" name="mno" placeholder="Mobile"  class="form-control"></td>
										</tr>
										<tr>
											<td colspan="2"><input type="submit" name="sub" value="Add" class="btn btn-primary"></td>
											<td colspan="2">
												<?= $this->session->flashdata('msg');?>
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
