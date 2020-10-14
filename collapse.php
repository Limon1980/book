<?php
	echo <<< END
	<h4>Скачать в виде файла</h4>
	<div class="accordion" id="accordionExample">
	<div class="card">
		<div class="card-header" id="headingOne">
			<h5 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					FB2
				</button>
			</h5>
		</div>
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-body">
			Подходит для смартфонов, планшетов на Android, электронных книг (кроме Kindle) и многих программ
			<a href="/lib/Doktor_R._Lechuedoyi._Ya_Ne_Lyublyu_Sladkoe.fb2.zip"><span class="name">Скачать</span></a>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingTwo">
			<h5 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					EPUB
				</button>
			</h5>
		</div>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			<div class="card-body">
			Подходит для устройств на iOS (iPhone, iPad, iMac) и большинства приложений для чтения
			<a href="/lib/Doktor_R._Lechuedoyi._Ya_Ne_Lyublyu_Sladkoe.epub"><span class="name">Скачать</span></a>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingThree">
			<h5 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					PDF A4
				</button>
			</h5>
		</div>
		<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			<div class="card-body">
			Открывается в программе Adobe Reader
			</div>
		</div>
	</div>
</div>

END;


?>