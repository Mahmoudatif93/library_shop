<?php include('common/header.php'); ?>
	<div class="container banner">
		<div class="inner">
			<div class="login">
				<h2>Admin Login</h2>
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<table class="table">
						<tr>
							<td><font color="white" size="4">Enter Username</font></td>
							<td><input type="text" name="un" id="un" placeholder="Enterusername" class="form-control"></td>
						</tr>
						<tr>
							<td><font color="white" size="4">Enter Password</font></td>
							<td><input type="password" name="ps" id="ps" placeholder="EnterPassword"class="form-control"></td>
						</tr>
						<tr><td colspan="2"><input type="checkbox" name="c1"  value="yes"><font color="white" size="4">Remember Me</font></td></tr>
						<tr><td colspan="2"><input type="button" name="btn" onclick="login();"  class="btn btn-primary" value="Login"></td></tr>
					</table>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</div>
</body>
</html>
<?php include('common/footer.php'); ?>
