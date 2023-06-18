
<!DOCTYPE html>

	<?php require_once 'php_segments/head.php';?>

<body>

 <?php require_once 'php_segments/nav.php';?>
<main>
<div class="header_container">
	<center>
		<img class="header_text" src="img/believe.png">
	</center>
	<div class="header_img_container">
		<strong>

				<div class="header_img first">
							<a href="poznaj_nas.php">
					<img src="img/poznaj_nas.jpg" width="100%">
					Poznaj nas
								</a>
				</div>


				<div class="header_img">
							<a href="szkolenia.php">
					<img src="img/oferta.jpg" width="100%">
					Ty i Twój zespół
								</a>
				</div>

				<div class="header_img">	
							<a href="consulting.php">
					<img src="img/kontakt.jpg" width="100%">
					Twoja firma
								</a>
				</div>
				<div class="header_img">
							<a href="zaufali.php">
					<img src="img/zaufali_nam.png" width="100%">
					Zaufali nam
								</a>
				</div>


			</strong>

	</div>
</div>
<?php
$TITLE = 'Aktualności';
$CONTENT ='
	<article>
		<h4>NConculting na konferencji “Nowe perspektywy rozwoju dla pomorskich przedsiębiorców” (01.02.2023)</h4>
		<img src="img/aktualnosci/konferencja.jpeg" height="200px" class="image_right">
		W dnu 1 lutego 2023, na zaproszenie Pomorskiego Brokera Eksportowego oraz Agencji Rozwoju Pomorza,
		firma  #NConsulting uczestniczyła w Seminarium “Nowe perspektywy rozwoju dla pomorskich przedsiębiorców” Seminarium zorganizowano w klimatycznym hotelu Gdańsk  przy współpracy z PARP.
		Trzymamy rękę na pulsie w zakresie projektów, które możemy realizować dla naszych Klientów.
		Skontaktuj się z nami, aby uzyskać więcej informacji.
	
	</article>
	<article>
		<h4>Akredytacja SPEKTRUM (15.02.2023)</h4>
		<img src="img/aktualnosci/spektrum.jpg" height="200px" class="image_right">
		Z przyjemnością informujemy, że firma NConsulting otrzymała akredytację w Bazie Instytucji Otoczenia Biznesu w projekcie „SPEKTRUM. Pomorski System Usług Doradczych” w obszarach– zarządzanie i organizacja oraz marketing.
		SPEKTRUM to nazwa pomorskiego systemu świadczenia specjalistycznych usług doradczych dla MSP. Firmy z województwa pomorskiego w ramach systemu będą mogły otrzymać dofinansowanie w wysokości 50% na zakup specjalistycznej usługi doradczej. System SPEKTRUM jest finansowany z funduszy unijnych wdrażanych w ramach Regionalnego Programu Operacyjnego Województwa Pomorskiego na lata 2014-2020, działanie 2.4.1. Całkowita wartość projektu wynosi ponad 27 mln zł.
	</article>
	<article>
		<h4>Pomóż nam poznać potrzeby Twoje i Twojego zespołu (15.01.2023)</h4>
		<img src="img/aktualnosci/ankieta.jpg" height="200px" class="image_right">
		W NConsulting tworzymy program, który jest dopasowany do Twoich potrzeb.<Br>
		<strong>Akademia Menadżerska #NManagement</strong> to wyjątkowy trening dla Menadżerów, którzy stawiają 
		swoje pierwsze kroki w zarządzaniu. 
		<br><br>
		Pamiętasz swój pierwszy awans?<br>
		Pamiętasz moment, gdy obejmowałeś obecnie zajmowane stanowisko?

		<br> Awansowałeś lub planujesz dać awans osobie w Twoim zespole?
		Uzupełnij <strong><a href="https://forms.gle/RZ7rx5mQYRaxQUcw5">krótką ankietę</a></strong> i przypomnij sobie swoje pierwsze kroki.<br>
		<br>
		Dziękujemy!
		<br>
		<br>
	</article>
	'
	;
include 'php_segments/content_section.php'
?>

</main>
<div class="line"></div>

<?php require_once 'php_segments/footer.php';?>
</body>
</html>
