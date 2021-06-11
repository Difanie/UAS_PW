<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport"
		content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="css PIK 3 UAS.css">
	</head>
	<style>
		footer {
			color: white;
			position: fixed;
			left: 0;
			bottom: 0;
			font-size: 15px}
	</style>
	
	<body>
		<div class="vid_bg">
		<video loop muted autoplay>
		<source src="bg3.mp4">
		</div>	
		<form action="aksi_login.php" method="POST">
			<table id="all">
				<tr>
					<td> <h1 style="color : #eaded2;" >Ayo Login</h1> </td>
				</tr>
			</table>
			<table class="bg" >

					<tr>			
						<td>
						<label for="">Username</label><br>
						<input name="username" type="text"
						placeholder="Masukkan username"></td>
					</tr>
					<tr>
						<td>
						<label for ="">Password</label><br>
						<input name="password" type="password"
						placeholder="Masukkan password"></td>
					</tr>
				<tr>
					<td><button type="submit" value="login">Login</button></td>
				</tr>
			</table>
			
		</form>
	</body>
	<footer><p>
	&copy; 2019 tyket company s.t. All right reservered.</p>
	</footer>
</html>