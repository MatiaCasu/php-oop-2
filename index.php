<?php

class Prodotto {
    public $materiali;
    public $categoriaProd;
    public $prezzo;
    public $imgSrc;

    public function __construct($_materiali, $_categoriaProd, $_prezzo, $_imgSrc){
        $this -> materiali = $_materiali;
        $this -> categoriaProd = $_categoriaProd;
        $this -> prezzo = $_prezzo;
        $this -> imgSrc = $_imgSrc;
    }
}

$pentola = new Prodotto("Acciaio", "Cucina/Casa", 30.50, "https://www.stilcasa.net/arimgzoom/698.30220120z.jpg");


class Abbigliamento extends Prodotto{
    public $stagione;
    public $taglia;
    public $reparto;


    public function __construct($_materiali, $_categoriaProd, $_prezzo, $_imgSrc, $_stagione, $_taglia, $_reparto){

        parent::__construct($_materiali, $_categoriaProd, $_prezzo, $_imgSrc);
        $this -> stagione = $_stagione;
        $this -> taglia = $_taglia;
        $this -> reparto = $_reparto;
    }

}
$pantaloni = new Abbigliamento("Jeans", "Abbigliamento", 40.00, "https://www.lamattaabbigliamento.it/wp-content/uploads/2019/09/Pantaloni-a-zampa-RINASCIMENTO-4.jpg", "Estate", "Media", "Donna");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Oop</title>
    <style>
        ul{
            list-style: none;
            font-size:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cucina</h2>
        <ul>
            <li><img src="<?php echo $pentola -> imgSrc ?>" alt="" width="200px" height="200px"></li>
            <li>Prezzo: <?php echo $pentola -> prezzo ?></li>
            <li>Categoria: <?php echo $pentola -> categoriaProd ?></li>
            <li>Materiali: <?php echo $pentola -> materiali ?></li>
        </ul>

        <h2>Abbigliamento</h2>
        <ul>
            <li><img src="<?php echo $pantaloni -> imgSrc ?>" alt="" width="200px" height="200px"></li>
            <li>Prezzo: <?php echo $pantaloni -> prezzo ?></li>
            <li>Categoria: <?php echo $pantaloni -> categoriaProd ?></li>
            <li>Materiali: <?php echo $pantaloni -> materiali ?></li>
            <li>Stagione: <?php echo $pantaloni -> stagione ?></li>
            <li>Taglia: <?php echo $pantaloni -> taglia ?></li>
            <li>Reparto: <?php echo $pantaloni -> reparto ?></li>
        </ul>


    </div>

    
</body>
</html>
