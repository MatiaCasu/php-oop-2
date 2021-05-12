<?php

//SuperClasse Prodotto
class Prodotto {

    // Attributi Prodotto Base
    private $prezzo;

    public $materiali;
    public $categoriaProd;
    public $imgSrc;

    // Construttore
    public function __construct( $_prezzo ,$_materiali, $_categoriaProd, $_imgSrc){
        $this -> prezzo = $_prezzo;

        $this -> materiali = $_materiali;
        $this -> categoriaProd = $_categoriaProd;
        $this -> imgSrc = $_imgSrc;
    }

    //Funzione get Private prezzo
    public function getPrice(){
        return $this -> prezzo;
    }
}

//Classe figlia Abbigliamento
class Abbigliamento extends Prodotto{

    // Attributi Prodotto Abbigliamento
    public $stagione;
    public $taglia;
    public $reparto;

    // Construttore Esteso
    public function __construct($_prezzo ,$_materiali, $_categoriaProd, $_imgSrc, $_stagione, $_taglia, $_reparto){

        parent::__construct($_prezzo, $_materiali, $_categoriaProd, $_imgSrc);
        $this -> stagione = $_stagione;
        $this -> taglia = $_taglia;
        $this -> reparto = $_reparto;
    }
}

//Classe figlia Cucina/Casa
class CucinaCasa extends Prodotto{

    // Attributi Prodotto Abbigliamento
    public $resistenza;
    public $manici;
    public $dimensioni;

    // Construttore Esteso
    public function __construct($_prezzo ,$_materiali, $_categoriaProd, $_imgSrc, $_resistenza, $_manici, $_dimensioni){

        parent::__construct($_prezzo, $_materiali, $_categoriaProd, $_imgSrc);
        $this -> resistenza = $_resistenza;
        $this -> manici = $_manici;
        $this -> dimensioni = $_dimensioni;
    }
}


//Prodotto base
$pentola = new CucinaCasa(30.50, "Acciaio", "Cucina/Casa", "https://www.stilcasa.net/arimgzoom/698.30220120z.jpg", "Altissima", "Acciaio", "XXL");

//Prodotto Abbigliamento
$pantaloni = new Abbigliamento(40.00, "Jeans", "Abbigliamento", "https://www.lamattaabbigliamento.it/wp-content/uploads/2019/09/Pantaloni-a-zampa-RINASCIMENTO-4.jpg", "Estate", "Media", "Donna");


//var_dump($pantaloni);
//var_dump($pentola);
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
        .container{
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="prodotto">
            <h2>Cucina</h2>
            <ul>
                <li><img src="<?php echo $pentola -> imgSrc; ?>" alt="" width="200px" height="250px"></li>
                <li>Prezzo: €<?php echo $pentola -> getPrice(); ?></li>
                <li>Categoria: <?php echo $pentola -> categoriaProd; ?></li>
                <li>Materiali: <?php echo $pentola -> materiali; ?></li>
            </ul>
            <h4>Caratteristiche Prodotto:</h4>
            <ul>
                <li>Resistenza: <?php echo $pentola -> resistenza; ?></li>
                <li>Manici: <?php echo $pentola -> manici; ?></li>
                <li>Dimensioni: <?php echo $pentola -> dimensioni; ?></li>
            </ul>
        </div>
        <div class="prodotto">
            <h2>Abbigliamento</h2>
            <ul>
                <li><img src="<?php echo $pantaloni -> imgSrc; ?>" alt="" width="200px" height="250px"></li>
                <li>Prezzo: €<?php echo $pantaloni -> getPrice(); ?></li>
                <li>Categoria: <?php echo $pantaloni -> categoriaProd; ?></li>
                <li>Materiali: <?php echo $pantaloni -> materiali; ?></li>
            </ul>    
            <h4>Caratteristiche Prodotto:</h4>
            <ul>
                <li>Stagione: <?php echo $pantaloni -> stagione; ?></li>
                <li>Taglia: <?php echo $pantaloni -> taglia; ?></li>
                <li>Reparto: <?php echo $pantaloni -> reparto; ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
