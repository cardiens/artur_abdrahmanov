<?
// Переменные с данными для визитки
$company_logo = 'img/logo_black.png';
$company_description = 'Google Play Apps';
$company_site = 'https://play.google.com/store/apps/developer?id=Artur+Abdrakhmanov';
$company_email = 'aaptup@gmail.com';
?>
<HTML>
	<HEAD>
		<TITLE>DKrylov.ru - Создание любых видов сайтов</TITLE>
		<!--В данном примере, нам понадобятся только CSS стили-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</HEAD>
	<BODY>
		<!--Общий контейнер, в который мы обертываем все остальные-->
		<div class="wrap">
			<img src="<?echo $company_logo;?>">
				<span class="company_description">
					<?echo $company_description;?>
				</span>
			<!--Тэг <hr /> создает линию-->
			<hr />
			<!--
				Блок, который распологается под блоком с логотипом и описанием
				В нем мы будем писать информацию о компании :D
			-->
			<div class="main_info">
				<span class="site">
					<?echo $company_site;?>
				</span>
				<span class="info">
					<span class="sized">
						E-mail:
					</span>
					<strong><i>aaptup@gmail.com</i></strong>
					<br />
				</span>
			</div>
		</div>
	</BODY>
</HTML>