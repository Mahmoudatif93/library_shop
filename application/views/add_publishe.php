<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Add Publisher </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-12">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-7">
									
							
									<?php if(isset($res1)){ echo form_open('home/publisher_update1'); ?>
									<table class="table">
										<tr>
											<td><b><font color="white">Update Publisher Name</font></b>
											<input type="hidden" name="id" value="<?= $res1[0]['id']; ?>"></td>
											<td><input type="text" name="name"value="<?php echo $res1[0]['name']; ?>" placeholder="Enter Author Name" title="Enter Author Name" class="form-control"></td>
											<td><input type="submit" name="sub" value="update"  title="Update now" class="btn btn-primary"></td>
										</tr>
										<tr>
											<td colspan="3">
														<?php

													$msg=$this->session->flashdata('msg');
													if($msg == "1"){
														echo "Publisher Added Successfully";
													}elseif($msg == "delete"){
														
														echo "Publisher Deleted Successfully";

													}else if($msg == "update"){
														
														echo "Publisher updated Successfully";

													


													}else if($msg == "0"){
														echo validation_errors();
													}
													
															
													
													 ?>

											</td>
										</tr>
									</table>

									<?php echo form_close();}


									else{

										echo form_open('Home/pub_add'); ?>
												<table class="table">
													<tr>
														<td><b><font color="white">Publisher Name</font></b></td>
														<td><input type="text" name="name" placeholder="Enter Publisher Name" title="Enter Publisher Name" class="form-control"></td>
														<td><input type="submit" name="sub" value="add"  title="add now" class="btn btn-primary"></td>
													</tr>
													<tr>
														<td colspan="3">
																<?php
																$msg=$this->session->flashdata('msg');
																if($msg == "1"){
																	echo "Publisher Added Successfully";
																}elseif($msg == "delete"){
																	
																	echo "Publisher Deleted Successfully";

																}else if($msg == "update"){
																	
																	echo "Publisher updated Successfully";

																


																}else if($msg == "0"){
																	echo validation_errors();
																}
																
															
													
													 ?>

														</td>
													</tr>
												</table>

										<?php echo form_close();} ?>



									<?php if (isset($res)) {?>
									<table class="table">
										<tr>
											<td><center><b><font color="white" size="2">ID</font></b></center></td>
											<td><center><b><font color="white" size="2">Name</font></b></center></td>
											<td colspan="2"><center><b><font color="white" size="2">Operation</font></b></center></td>
										</tr>
										<?php 
											$i=0;

											foreach ($res as $r1) {?>
										<tr>

											<td><center><b><?= $i++; ?></b></center></td>
											<td><center><b><?= $r1['name'];?></b></center></td>
											<td><center><a href="<?= base_url('home/delete_publisher/'.$r1['id']);?>" class="btn btn-primary">Delete</a></center></td>
											<td><center><a href="<?= base_url('home/update_publisher/'.$r1['id']);?>" class="btn btn-primary">Update</a></font></center></td>



										</tr>
										<?php }?>
									</table>
									<?php }?>
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
