<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Book studion manage </h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="container">
						<div class="row">
							<?php include('common/left_menu.php'); ?>
							
								<div class="col-sm-4">
									<ul><li><a href="<?= base_url('Home/add_autor') ?>">Add Author</a></li><br>
									<li><a href="<?= base_url('Home/add_publisher') ?>">Add Publisher</a></li><br></ul>
								</div>

								<div class="col-sm-3">
										<ul>
									<li><a href="<?= base_url('Home/add_book') ?>">Add Book</a></li><br>
									<li><a href="<?= base_url('Home/book_list') ?>">Book List</a></li><br>
								</ul>
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
