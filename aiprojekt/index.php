<?php
	session_start();
	$_SESSION['pageid'] = 'index';
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8">
	
	<title>Projekt zaliczeniowy z przedmiotu aplikacje mobilne i internetowe </title>
	<meta name="description" content="Projekt zaliczeniowy">
	<meta name="keywords" content="projekt, zaliczenie, wykładu">
	<meta name="author" content="Jan Hałasiński">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML">
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	
	
</head>

<body>
<header>
	<?php
		include('./nav.php');
	?>
</header>

<main>
	<section>
		<div id="container" class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Natomiast wzór na sens życia wyraża się wzorem:
			
			\begin{equation*} X(\omega) = \int_{-\infty}^{\infty} x(t) e ^{-j \omega t} \mathrm{d}t = \int_{-\infty}^{\infty} x(t) e ^{-j 2 \pi f t} \mathrm{d}t \end{equation*}

			\begin{equation*} x(t) = \frac{1}{2 \pi} \int_{-\infty}^{\infty} X(\omega) e ^{j \omega t} \mathrm{d}\omega = \int_{-\infty}^{\infty} X(f) e ^{j 2 \pi f t} \mathrm{d}f \end{equation*}

			\begin{equation*} x(t) \Leftrightarrow X(\omega) \end{equation*}
			
			lub w postaci dyskretnej: 
			
			\begin{equation*} X_k = \sum_{k=0}^{N} x[n] e ^{-j \frac{ 2 \pi}{N} kn} = \sum_{n=0}^{N} x[n] W^{-kn}_N \end{equation*}
			
			\begin{equation*} x[n] = \frac{1}{N} \sum_{n=0}^{N} X_k e ^{j \frac{ 2 \pi}{N} kn} = \frac{1}{N} \sum_{k=0}^{N} X_k W^{kn}_N \end{equation*}
		
			\begin{equation*} W_N = e ^{j \frac{ 2 \pi}{N}} \end{equation*}
			
			Neque aliquam vestibulum morbi blandit cursus risus. Urna molestie at elementum eu facilisis sed odio morbi. Mauris nunc congue nisi vitae suscipit tellus mauris a diam. Erat pellentesque adipiscing commodo elit at. Netus et malesuada fames ac turpis. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Tempor id eu nisl nunc mi ipsum faucibus. Vitae aliquet nec ullamcorper sit amet risus nullam. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Amet purus gravida quis blandit turpis cursus. Nec sagittis aliquam malesuada bibendum arcu vitae. Tincidunt vitae semper quis lectus nulla. Dictum varius duis at consectetur lorem donec massa. Odio eu feugiat pretium nibh ipsum consequat nisl. Pharetra diam sit amet nisl suscipit adipiscing. Viverra maecenas accumsan lacus vel facilisis volutpat. Sed libero enim sed faucibus turpis in eu mi. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Pretium fusce id velit ut tortor. Posuere ac ut consequat semper viverra nam. Amet risus nullam eget felis eget nunc lobortis mattis. Posuere urna nec tincidunt praesent. Sit amet mattis vulputate enim. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc.Faucibus ornare suspendisse sed nisi lacus sed viverra tellus in. Placerat orci nulla pellentesque dignissim enim sit amet venenatis. Sed blandit libero volutpat sed cras ornare arcu dui vivamus. Orci sagittis eu volutpat odio facilisis. Et malesuada fames ac turpis. Nam libero justo laoreet sit amet cursus sit. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Purus in mollis nunc sed id semper risus in. Vulputate sapien nec sagittis aliquam malesuada. Tortor condimentum lacinia quis vel eros donec ac odio tempor. Cursus metus aliquam eleifend mi in. Rhoncus dolor purus non enim praesent elementum facilisis. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus. Ridiculus mus mauris vitae ultricies leo integer. Aliquam ut porttitor leo a diam sollicitudin tempor id eu. Non nisi est sit amet facilisis magna etiam tempor. Vel turpis nunc eget lorem dolor sed. Lectus magna fringilla urna porttitor rhoncus dolor purus non. In vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque sit amet. Risus nullam eget felis eget nunc. Sit amet risus nullam eget.
		</div>
	</section>		
</main>

<footer>
	<?php include("./footer.php"); ?>
</footer>

</body>
</html>