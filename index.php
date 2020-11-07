<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<style type="text/css">
	</style>
  </head>
  <body>
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
							<a href="admin.php">
								<h5>+</h5>
							</a>
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

	<div class="col-6 mx-auto" > <!--ГЛАВНЫЙ БЛОК-->
		<div class="row"> 
			<!--ЛЕВЫЙ БЛОК. ДИВ ДЛЯ ПОСТОВ-->
			<div class="col-8 px-0 my-2"> 
				<?php 
					$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
					$query = mysqli_query($connect, "SELECT * FROM posts");	
				?>	
				<!--САМ ПОСТ-->
				<?php 
					for ($i=0; $i < $query->num_rows; $i++) { 
					$stroka = $query->fetch_assoc();
				?>
					<div class="mt-5 border rounded">   
						<div class="col-12 px-1">
							<div class="row">
								<div class="col-1 text-right pb-4 pt-2 px-0 ml-4">
									<img src="3.png" class="w-100 rounded-circle">
								</div>
								<div class="col-10 pb-4 pt-3 text-left">
									<h6 class="mb-0">
										<?php 
											echo $stroka[user];
										?>
									</h6>
									<p class="mb-0">Якутск</p>	
								</div>													
							</div>
						</div>
						<div class="col-12 img" style="height: 450px; background-image: url(<?php echo $stroka[img] ?>); background-size: 100% 100%"> <!--картинка поста-->
						</div>
						<div class="col-12 py-2">  <!--текстовые элементы поста-->
							<div>
								<p>Lol, KEK еще 13</p>
							</div>
							<div>
								<p>
									<?php 
										echo "<form action='update.php' method='GET' class='forms'  >"
									?>	
										<input type='' name='id' class='col-12 ' value=" <?php echo $stroka['id'] ?> " style='height: 30px; border:0; display: none'>
										<input type='' name='texts' class='col-12 ' value=" <?php echo $stroka['texts'] ?> " style='height: 30px; border:0'>
										
										
										<div class="col-1 ">
											<button class="rounded bg-success text-center text-white "> сохранить</button>
										</div>
									<?php 
									 	echo "</form>"
									?>

									
								</p>
							</div>


							<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" style="display: none">
							  Запустить модальное окно
							</button>
							<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <form enctype="multipart/form-data" method="GET" action="update.php">
									   <p>Загрузите ваши фотографии на сервер</p>
									   <input type='' name='id' class='col-12 ' value=" <?php echo $stroka['id'] ?> " style='height: 30px; border:0; display: none'>
									   <p><input type="file" name="img" multiple accept="image/*,image/jpg, image/png">
									   <button type="submit" class="btn btn-secondary backbtn"  value="Отправить"> сохранить</button></p>
									</form>
							        <button type="button" class="btn btn-secondary backbtn" data-dismiss="modal">закрыть</button>
							      </div>
							      
							    </div>
							  </div>
							</div>
							



							
							<div>
								<p>5 недель назад</p>
							</div>						
						</div>
						<?php 
							echo "<form action='delete.php' method='GET' class='forms'  >"
						?>	
							<input type='' name='id' class='col-12 ' value=" <?php echo $stroka['id'] ?> " style='height: 30px; border:0; display: none'>
							<div class="col-1 ">
								<button class="rounded bg-danger text-center text-white "> удалить</button>
							</div>
						<?php 
							echo "</form>"
						?>
					</div>
				<?php }  ?>
				<!-- ПОСТ ЗАКРЫЛСЯ-->
			</div> 
			<!--ДИВ ДЛЯ ПОСТОВ закрылся-->
			<div class="col-4 mt-5">  <!--ПРАВЫЙ БЛОК. ПОДПИСКИ И ТД-->
				<div class="my-2 border rounded px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-2 px-0">
								<img src="3.png" class="w-100 rounded-circle">
							</div>
							<div class="col-10">
								<h6 class="mb-0">
									<?php 
										echo $stroka[user];
									?>
								</h6>
								<p class="text-secondary mb-0">
									<?php 
										echo $stroka[user];
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-2 border my-2 rounded  px-3 py-2">
					<div class="col-12">
						<div class="row">
							<div class="col-4 text-left px-0 pb-3 pt-1">Истории</div>
							<div class="col-8 text-left pb-3 pt-1">Смотреть все</div>
						</div>
						<div class="row">
							<div class="col-3 px-1">
								<img src="JF.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>jimmyfallon</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="pew.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>PewDiePie</p>
							</div>
						</div>
						<div class="row mt-2">
							<div class=" col-3 px-1">
								<img src="kodz.png" class="w-100 rounded-circle">
							</div>
							<div class="col-9 py-2" >
								<p>Hideo Kojima</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="my-2 border rounded px-3 py-2">  <!--ПРАВЫЙ БЛОК. РЕКОМЕНДАЦИИ-->
					<div class="col-12">
						<div class="row">
							<div class="col-8 text-left px-0 pb-3 pt-1">Рекомендации для вас</div>
							<div class="col-4 text-left pb-3 pt-1">Все</div>
						</div>
						<div class="row">
							<div class="col-3 px-2">
								<img src="mbn.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">mbn360</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="9gag.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 ">
								<p class="mb-0">9gag</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-3  px-2" >
								<img src="groot.png" class="rounded-circle w-100">
							</div>
							<div class="col-9 " >
								<p class="mb-0">groot</p>
								<a href="" class="mb-0">Подписаться</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		let btn = document.querySelector(".btn")
		
		let modal = document.querySelector(".modal")
		let img = document.querySelector(".img")
		img.onclick = function(){
			btn.click()
			
		}

		
	</script> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>