<!doctype html>
<html lang="ru">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Переход к оплате...</title>
</head>

<body>

	<form style="display: none" method="POST" id="ya_form" action="https://money.yandex.ru/quickpay/confirm.xml">
		<input type="hidden" name="receiver" value="41001323838874">
		<input type="hidden" name="quickpay-form" value="shop">
		<input type="hidden" name="targets" value="book regina">
		<input type="hidden" name="paymentType" value="SB">
		<input type="hidden" name="successURL" value="http://w91470j7.beget.tech/">
		<input type="hidden" name="label" value="<?= $_COOKIE['user_key']?>">
		<input type="hidden" name="sum" value="50.00">
		<input type="hidden" value="Оплатить">
		</form>

	
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<section class="image-section mt-5">
					<div class="image-bank">
						<img src="img/5e60eb4f1965c17c5a917818_bank_1f3e6.png" alt="bank" class="rounded mx-auto d-block">
					</div>
					<div class="text-pay">
						<h1 class="pay_title">Переход к оплате</h1>
						<p class="pay_text">Через несколько секунд тут будет страница оплаты…</p><a href="#" id="one_pay_button" class="btn btn-primary">Перейти</a>
					</div>

				</section>

			</div>
		</div>

	</div>

	<script>
        function form()
        {
            document.getElementById('ya_form').submit();
        }
				setTimeout(form, 2000);
				
				const onePayButton = document.getElementById('one_pay_button');
				onePayButton.addEventListener('click', form); 
    </script>
</body>

</html>