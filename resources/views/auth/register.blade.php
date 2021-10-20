<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Halaman Login</title>
	<style>
	.box{
		/*border: 1px solid black;*/
		width: 500px;
		margin: auto;
		border-radius:10px ;
		box-shadow: 5px 5px 25px black;
	}

	.l{
		margin-bottom: 55px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="box row justify-content-center mt-5">
			<div class="col-md-12">
				<h2 class="mt-5 mb-4 text-center">Daftar</h2>

				<div class="mb-3 row justify-content-center">
					<label for="name" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-5">
						<input type="name" class="form-control" id="name">
					</div>
				</div>

				<div class="mb-3 row justify-content-center">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-5">
						<input type="email" class="form-control" id="email">
					</div>
				</div>

				<div class="mb-3 row justify-content-center">
					<label for="password" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-5">
						<input type="password" class="form-control" id="password">
					</div>
				</div>

				<div class="mb-3 row justify-content-center">
					<label for="inputPassword" class="col-sm-2 col-form-label">Konfirmasi Password</label>
					<div class="col-sm-5">
						<input type="password" class="form-control" id="inputPassword">
					</div>
				</div>

				<div class="row">
					<div class="col">
						<a href="/" class="text-decoration-none text-center"><p><i>Kembali ke Halaman Utama</i></p></a>
					</div>
					<div class="col">
						<a href="/login" class="text-decoration-none text-center"><p><i>Masuk ke Akun</i></p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>