<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="container-fluid bg-white mb-2">
		<div class="container">
			
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!---->
			<div class="col-3">
					<div class="bg-white">
						<div>
						<img src="images/background.jpg" class="w-100" alt="">
						</div>
						<div class="row pt-3 pl-3 pl-3">
							<div class="col-3">
								<img src="images/avatar.jpg" class="rounded-circle" alt="">
							</div>
							<div class="col-9 ">
								<div>
									<a href="#"> Mary Smith</a>
								</div>
								<div>
									<a href="#"> @Maryss</a>
								</div>
							</div>
						</div>

						<div class="row p-3">
							<div class="col-6">
								<div>
									<h6><a href="#">Твиты</a></h6>
								</div>
								<div>
									<h6><a href="#">222</a></h6>
								</div>
							</div>
							<div class="col-6">
								<div>
									<h6><a href="#">Читаемые</a></h6>
								</div>
								<div>
									<h6><a href="#">272</a></h6>
								</div>
							</div>
						</div>
					</div>
				<div class="bg-white mt-2 p-3">
					<div>
						<h6>Актуальные темы для вас</h6>
					</div>
					<?php //for ($i=0; $i < count($bd) ; $i++) { 
					$connectAct = mysqli_connect('127.0.0.1','root','','hv'); //соединять
					$queryAct = mysqli_query($connectAct, 'SELECT * FROM actual'); //запрос
					for($i=0;$i<$queryAct->num_rows;$i++){
					?>
					<div>
						<?php
							$act = $queryAct->fetch_assoc();
							echo '<a href="'.
							$act['link'].
							'">'.
							$act['name'] .
							'</a>'
						?>
					</div>
					<?php } ?>
					<!--<div>
						<a href="#"> Blizzard</a>
					</div>
					<div>
						<a href="#"> Hearthstone</a>
					</div>
					<div>
						<a href="#"> #air</a>
					</div>
					<div>
						<a href="#"> #FTL12</a>
					</div>-->
				</div>
			</div>


			<!---->
			<div class="col-6">
				<div class="row"> 
					<div class="col-4">
						<img src="images/avatar.jpg" class="rounded-circle w-60" alt="">
					</div>
					<div class="col-8">
						 <form action="insert.php" method="POST">
						 	<input type="text" name="post_text">
						 	<button type="submit" class="btn btn-outline-primary">Твитнуть</button>
						 </form>
					</div>
				</div>
				<?php //for ($i=0; $i < count($bd) ; $i++) { 
					$connect = mysqli_connect('127.0.0.1','root','','hv'); //соединять
					$query = mysqli_query($connect, 'SELECT * FROM tweet'); //запрос
					mysqli_query($connect,"INSERT INTO contact (id,text,title,img,logo) VALUES ('$query->num_rows','$_POST[text]','basda@gmail.com','images/roscosmos.jpg','images/post2.png')");
		//VALUES ('$_POST[id]','$_POST[name]','$_POST[phone]')
					for($i=0;$i<$query->num_rows;$i++){
						$logo = $query->fetch_assoc(); //fetch - получать
				?>
				<div class="row">

					<div class="col-2">
						<p> <?php echo '"' . $logo['id'] . '"' ?> </p>
						<?php //echo '<img src="' . $bd[$i]['logo'] . '" class="rounded-circle w-100">'; 
							
							echo '<img src="' . $logo['logo'] . '" class="rounded-circle w-100">';
						?>
					</div>
					<div class="col-10">
						<div class="row">
							<h2 class="text-info">Habr</h2>
							<p class="h5 ml-3">
								<?php //echo '<a href="#">' . $bd[$i]['title'] . '</a>';
									echo '<a href="#">' . $logo['title'] . '</a>'
								?>
							</p>
						</div>
						<div>
							<?php 
							//echo '<p>' . $bd[$i]['text'] . '</p>';
								echo '<p>' . $logo['text'] . '</p>';
							 ?>
						</div>
						<div>
							<?php
						 	//echo '<img src="' . $bd[$i]['img'] . '"class="w-100">';
						 		echo '<img src="' . $logo['img'] . '" class="w-100">';
							?>
						</div>
						<div class="text-center">
							<form action="delete.php" method="POST">
							 	<?php echo '<button type="submit" class="btn btn-outline-primary"' . 'name="id"'.'value="' . $logo['id'] .'">id
							 	</button>';
							 	?>
							 </form>
						</div>
						<div class="row">
							<div class="col-3">
								<img src="images/comment.png">
							</div>
							<div class="col-3">
								<img src="images/like.png">
							</div>
							<div class="col-3">
								<img src="images/envelope.png">
							</div>
							<div class="col-3">
								<img src="images/retweet.png">
							</div>
						</div>
					</div>
				</div>

				<?php } ?>
			</div>
<!---->
			<div class="col-3">
				<div class="bg-white ">
					<div class="m-1 row">
						<h6 class="mr-1">Кого читать</h6>
						<a href="#" class="mr-1">Обновить</a>
						<a href="#">Все</a>
					</div>
					<?php //for ($i=0; $i < count($bd) ; $i++) { 
					$connectRead = mysqli_connect('127.0.0.1','root','','hv'); //соединять
					$queryRead = mysqli_query($connectRead, 'SELECT * FROM who_read'); //запрос
					for($i=0;$i<$queryRead->num_rows;$i++){
						$read = $queryRead->fetch_assoc();
					?>
					<div class="row m-1 mt-2">
						<div class="col-3">
							<?php
								echo '<img src="' .
								$read['img'] .
								'" class="rounded-circle w-100" alt="">'
							?>
						</div>
						<div class="col-9">
							<a href="#">
								<?php
								  //cool!
									echo $read['name']
								?>
							</a>
							<span>
								<?php
									//BasaD12@gmail.com
									echo $read['mail']
								?>
							</span>
							<div>
								<button type="button" class="btn btn-outline-primary btn-sm">Читать</button>
							</div>
						</div>
					</div>
					<hr>
				<?php } ?>
					<div class="row m-1">
						<div class="col-3">
							<img src="images/gmail.png" class="rounded w-100" alt="">
						</div>
						<div class="col-9">
							<h6> Найдите знакомых</h6>
							<p>Импортируйте контакты из Gmail</p>
						</div>
					</div>
					<hr>
					<div class="m-1 mb-1 h6">
						<a href="#">
							Подключите другие адресные книги
						</a>
					</div> 
				</div>

				<div class="bg-white">
					<div class="font-weight-light">
	<ul class="u-cf">
        <li class="Footer-item Footer-copyright copyright">© Twitter, 2018</li>
        <li class="Footer-item"><a class="Footer-link" href="/about" rel="noopener">О нас</a></li>
        <li class="Footer-item"><a class="Footer-link" href="//support.twitter.com" rel="noopener">Справочный центр</a></li>
        <li class="Footer-item"><a class="Footer-link" href="/tos" rel="noopener">Условия</a></li>
        <li class="Footer-item"><a class="Footer-link" href="/privacy" rel="noopener">Политика конфиденциальности</a></li>
        <li class="Footer-item"><a class="Footer-link" href="//support.twitter.com/articles/20170514" rel="noopener">Файлы cookie</a></li>
        <li class="Footer-item"><a class="Footer-link" href="//support.twitter.com/articles/20170451" rel="noopener">О рекламе</a></li>
        <li class="Footer-item"><a class="Footer-link" href="//about.twitter.com/press/brand-assets" rel="noopener">Бренд</a></li>
        <li class="Footer-item"><a class="Footer-link" href="https://blog.twitter.com" rel="noopener">Блог</a></li>
        <li class="Footer-item"><a class="Footer-link" href="http://status.twitter.com" rel="noopener">Состояние</a></li>
        <li class="Footer-item"><a class="Footer-link" href="https://about.twitter.com/products" rel="noopener">Приложения</a></li>
        <li class="Footer-item"><a class="Footer-link" href="https://about.twitter.com/careers" rel="noopener">Вакансии</a></li>
        <li class="Footer-item"><a class="Footer-link" href="https://marketing.twitter.com" rel="noopener">Маркетинг</a></li>
        <li class="Footer-item"><a class="Footer-link" href="https://business.twitter.com" rel="noopener">Компаниям</a></li>
        <li class="Footer-item"><a class="Footer-link" href="//dev.twitter.com" rel="noopener">Разработчикам</a></li>
    </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>