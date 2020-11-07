<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
	<div class="p-3 border-bottom sticky-top bg-white"> <!--шапка-->
		<div class="col-8 mx-auto">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col-1 px-0">
							<img src="logo.png" class="w-100">
						</div>
						<div class="col-1 px-0 text-center">
							<img src="line.png" class="w-50">
						</div>
						<div class="col-4 px-0">
							<img src="logo2.png" class="w-100">
						</div>
					</div>
				</div>
				<div class="col-4">
					<input type="" name="" placeholder="поиск" class="border rounded text-center px-3 ml-5 border-secondary">
				</div>
				<div class="col-4">
					<div class="row">
						<div class="col-6">
							<a href="admin.php"><h5>+</h5></a>
						</div>
						
						<div class="col-2 px-0 pl-2">
							<img src="1.png" class="w-50">
						</div>
						<div class="col-2 px-0 pl-2">
							<div class="dropdown">
							  <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <img src="2.png" class="w-50">
							  </a>
							</div>
						</div>
						<div class="col-2 px-0 pl-2">
							<img src="3.png" class="w-50">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="dobav.php" method="GET" style=" background-color: #f7f7f7" class="border col-8 mx-auto mt-5 py-4"  >
		<h4 class="text-center ml-3">Добавить публикацию</h4>
		<div class="mt-2 col-12">
			<input type="" name="user" class="col-12" placeholder="USER" style="height: 100px">
		</div>
		<div class="mt-2 col-12">
			<input type="" name="img" class="col-12" placeholder="IMG" style="height: 100px">
		</div>
		<div class="mt-2 col-12">
			<input type="" name="texts" class="col-12" placeholder="TEXT" style="height: 100px">
		</div>
		
		<div class="mx-auto col-1 mt-4">
			<button class="rounded bg-dark text-center text-white"> Добавить</button>
		</div>
		
	</form>
</body>
</html>