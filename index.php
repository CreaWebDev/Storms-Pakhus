<!-- Først skal php-filen tilknyttes filen -->
<?php include("inc/functions.php"); 
$currentPage = GetCurrentPage();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITENAME;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">    
</head>
<body>
<!-- Hér ses den første Bootstrap (Bs) kode/class
"container.fluid" definerer, at det fulde skærmbillede er i brug -->
<main class="container.fluid">

<!-- Header gøres til link til forsiden -->
   <div class="col-md-12 col-sm-11 col-xs-11">
    <a href="index.php"><header></header></a></div>
    <br>
    
<!-- Denne Bs class angiver, at nav skal fylde alle 12 kolonner i alle viewport str. -->
       <nav class="col-12">

<!-- "text-center er også en Bs funktion, der centrerer indholdet"-->           <h3 class="text-center"><?php Menu(); ?></h3><br>
        </nav><br>

    <section class="col-12">
        <h1 class="text-center">
        <?php echo $currentPage->headline; ?></h1><br><br>
        
        <h4 class="text-center"><?php echo $currentPage->bodyText; ?></h4><br><br>
        
<!-- Denne Bs-class fordeler indholdet ligevægtigt på siden-->
        <article class="d-flex justify-content-around"><?php include $currentPage->includes; ?></article>
    </section><br><br>

<!-- I footer højrestilles ikonet vha. Bs-classen "text-right"-->
    <footer class="col-2 offset-10">
        <h3 class="text-right"><img src="inc/pages/img/storm.png" class="img-fluid" alt="storm som robot"></h3>
    </footer>

</main>
</body>
</html>









