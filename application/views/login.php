<?php include "top.php" ?>
<div id="ticker" style="overflow: hidden; position: relative; height: 24px;"></div>
<div id="page-content" class="div1">

	<div class="row-section">
		<div class="page-section mar-T20">
			<h1>MEMBERSHIP LOGIN</h1>
		</div>

		<div class="block-70-C">
			<div class="pad-20" align="center">
			<form method="POST" action="<?=base_url()?>login/auth">
					<table border="0" class="login">
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input type="text" name="username"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><a href="#">Forgot Your Password ?</a></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><button type="submit" class="fsSubmitButton">LOGIN</button></td>
						</tr>
					</table>
				</form>
			</div>

		</div>

		<div class="clear"></div>
	</div>

</div><!-- =========== end content =========== -->
<?php include "bot.php" ?>