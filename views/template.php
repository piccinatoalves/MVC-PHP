<!DOCTYPE html>
<html>
<head>
	<title>Titulo do Site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/template.css">
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">

</head>
<body>
<header>
<div class="topo"><h1>Topo do site.</h1></div>


<div class="menu"><h1><a href="">Menu</a></h1> </div>

</header>

<div class="container">
<article>
	<?php $this->loadViewTemplate($viewName, $viewData);
?>
	</article>
	
</div>


<footer class="rodape">
<h1>Rodapé do site</h1>
</footer>
</body>
</html>