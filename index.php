<?php 
	$url = $_SERVER['REQUEST_URI'];
	$url = explode("/",$_SERVER['REQUEST_URI']);
	if(!empty($url[1])){ $cat = $url[2]; }
	if(!empty($url[2])){ $sub = $url[3]; }
	if(!empty($url[3])){ $item = $url[4]; }    
	if(!empty($item)){
		$subarea = explode("_",$item);
		$id = $subarea[1];
		$order = explode("_orderby-",$item);
		if($order[1]){
			$orderby = $order[1];
			$id = "";
			$item = $subarea[0];
		}
	}
	//echo "orderby:".$orderby." id:".$id." are:".$are." sub:".$sub." cat:".$cat." enlace:".$_SERVER['REQUEST_URI'];
?>

<!doctype html>
<html lang="en">

<head>
    <title><?php echo $cat ?></title>
    <base href="http://localhost:80/rutareciclo/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">


    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- iconos fontawesom -->
    <script src="https://kit.fontawesome.com/bc0c7bfde0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
</head>

<body>

    <?php include("menu.php");?>
    <?php include("switch.php");?>

    <?php /* include("modalInicio.php") */?>
    <?php include("footer.php")?>
</body>

</html>