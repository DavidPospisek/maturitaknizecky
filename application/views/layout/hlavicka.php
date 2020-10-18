 <head>
    <title>Knížky potřebné k Maturitě</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
 </head>
 <div class="container">
 <nav class="navbar navbar-expand-sm bg-dark navbar-blue">
   <h1 class="navbar-brand"><span style="color: black;">Knížky potřebné k Maturitě</span></h1>
   <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">
            <?php foreach($polozky as $p): ?>
          <li class="nav-item">
  <a class="nav-link" href="<?php echo base_url("stranka/".$p->idmenu)?>"><?= $p->categorie ?><span class="sr-only">(current)</span></a>
        </li>
    <?php endforeach; ?>
        </ul>                   
 </div>
 </div>
 </nav> 
 <br>
