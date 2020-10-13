<?php

if (!isset($_COOKIE['user_key'])){
	session_start();
	$value = session_id();
	setcookie("user_key", $value, strtotime( '+90 days' )); 
	include 'bd_insert.php';
} 
?>

<!doctype html>
<html lang="ru">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Я не люблю сладкое</title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-light bg-light mb-3">
			<a class="navbar-brand" href="#">
				<img src="img/book-of-black-cover-closed.svg" width="30" height="30" class="d-inline-block align-top" alt=""
					loading="lazy">
				Я не люблю сладкое
			</a>
		</nav>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="image">
					<img src="img/42609522-regina-doktor-ya-ne-lublu-sladkoe.jpg" class="rounded mx-auto d-block"
						alt="Responsive image">
				</div>
			</div>
			<div class="col-md-6 col-sm-12">

				<div class="biblio_book_top">
					<div class="title">
						Я не люблю сладкое
					</div>
					<div class="author">
						<span class="author">Автор: Регина Доктор</span>
					</div>
					<div class="seria">
						<span class="seria">Из серии: Лечу едой</span>
					</div>
					<strong class="price">50 руб</strong>

					<?php 

					include 'bd_query.php';

					if ($actor['pay'] == 1) {
						echo 'link';
				
					} else {

						echo '					<div class="buttons">
						<a href="/form.php" class="btn btn-success mt-3 bt">Купить книгу</a>
					</div>';
					}
					
					
					
					?>

				</div>



			</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-12 col-sm-12">
				<div class="biblio_book_descr">
					<div class="biblio_book_annotation">
						<div class="biblio_book_descr_caption" role="heading" aria-level="3">Аннотация</div>
						<div itemprop="description">
							<p>Регина Доктор – диетолог, терапевт и популярный блогер, автор бестселлера «Здоровое питание в большом
								городе». В ее следующей книге под названием «Я не люблю сладкое» речь пойдет об определенном виде
								пищевой зависимости.</p>
							<p>Вылечить многие болезни и снизить вес можно, если взять под контроль самый сильный пищевой наркотик –
								сахар. Именно привычка, тяга и любовь к сладкому мешают похудеть и соблюдать предписанный врачом план
								лечебного питания. Регина Доктор признается, что она тоже сладкоежка. Однако между полным отказом и
								разумным контролем существует огромная разница. Цель автора – помочь людям регулировать потребление
								сахара без негативных последствий для психики.</p>
							<p>Чтобы добиться успеха, нужно изменить пищевое поведение, то есть существующие вкусовые привычки. От
								сомнительной установки «мне нельзя сладкое» перейти к уверенному «я не люблю сладкое».</p>
						</div>
					</div>
					<!--noindex-->
					<div id="biblio_book_descr_toggle" class="biblio_book_descr_caption act" role="heading" aria-level="3">
						Описание от издательства</div>
					<div class="biblio_book_descr_publishers">
						<p>Долгожданное продолжение книги «Здоровое питание в большом городе», которая стала настоящим бестселлером
							среди бесчисленного количества других книг по диетологии. Осмысленный подход к своему питанию, понимание
							значимости пищевого поведения стали главными принципами в жизни многих людей.</p>
						<p>Сколько раз мы мечтали сбросить вес? Улучшить свое здоровье? Избавиться от хронических заболеваний? А кто
							задумывался о первопричине всех этих проблем? Что мешает нам просто взять и начать здоровый образ жизни?!
							Наша тяга, пищевые пристрастия, пищевое поведение, которое можно и нужно менять!</p>
						<p>В книге Регины Доктор «Я не люблю сладкое» вы найдете четкий план, инструкцию к действию и сможете, как и
							многие люди по всему миру, встать однажды с твердым убеждением и сказать себе: «Я не люблю
							сладкое!»&nbsp;– без запретов и ограничений.</p>
					</div>
					<!--/noindex-->
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
	
			</div>
		</div>


		<div class="card-group">
			<h4>Отзывы читателей </h4>
			<div class="row">

				<div class="col-md-6 col-sm-12">
					<div class="card bg-light mb-3">
						<div class="card-body">
							<h5 class="card-title">Наталья С.</h5>
							<p class="card-text">Вроде бы ничего нового, но в то же время, заставила сильно задуматься. До прочтения
								этой книги даже не осознавала сколько сахара попадает в организм и какого качества это сахар. Только
								ради этого рекомендую к прочтению. Ну и рецепты в конце простые, доступные и главное вкусные. Жить без
								сахара можно!!!</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card bg-light mb-3">
						<div class="card-body">
							<h5 class="card-title">Лена М.</h5>
							<p class="card-text">После прочтения первой книги Регины, не задумываясь приобрела и эту. Ничего
								лишнего.
								Все по факту. Убедительно. Ясно. Мотивирует. Действительно легче отказать себе в сладком, когда
								доходчиво
								доведена информация о том, что происходит в нашем организме. Благодарю автора за книгу.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card bg-light mb-3">
						<div class="card-body">
							<h5 class="card-title">Ира В.</h5>
							<p class="card-text">Ждала вторую книгу Регины Доктора. Всё структурировано, доступно, понятно.
								Рекомендовала всем своим знакомым.
								Много рецептов.
								И вообще, мне нравится стиль изложения Регины</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card bg-light mb-3">
						<div class="card-body">
							<h5 class="card-title">Виктория Д.</h5>
							<p class="card-text">Нахожусь под невероятным ощущением чего то нового, несмотря на то, что по большей
								степени многое понимала и раньше! Прочла книгу на одном дыхании! Этому поспособствовала Шелест О. !
								Спасибо ей и Автору! Я точно на правильном пути!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<nav class="navbar navbar-light bg-light mb-3">
			<a class="navbar-brand" href="#">
				<img src="img/book-of-black-cover-closed.svg" width="30" height="30" class="d-inline-block align-top" alt=""
					loading="lazy">
				Я не люблю сладкое
			</a>
		</nav>
	</div>




	<!-- Optional JavaScript -->
	<script src="script/script.js"></script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script> -->
</body>

</html>