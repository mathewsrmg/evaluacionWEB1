<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    
    <header>
       <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
           <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                       <a class="nav-link" href="index.php">PAGINA CALCULOS <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="index2.php">PAGINA GIMNACIO <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="index3.php">PAGINA ZAPATOS <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="index4.php">PAGINA POSTOBON <span class="sr-only">(current)</span></a>
                   </li>
               </ul>
           </div>
       </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify">
                <div class="colums">
                    <form class="mt-5" action="index3.php" method="POST">
                        <h4>BIENVENIDO A SU TIENDA DE CONFIANZA</h4>
                        <h3>SPRING STEP</h3>
                        <h4>con esta aplicacion podra ver el descuento de zapatos que le daran</h4>
                        <br><br>
                        <div class="row">                                                               
                            <div class="col">
                                <input type="text" class="form-control" placeholder="numero de zapatos" name="zapatos">
                            </div>
                            <br>
                        <button type="submit" class="btn btn-primary mt-5" name="botoncalcular3">Calcular</button>
                    </form> 

                    <?php if(isset($_POST["botoncalcular3"])){
                        $zapatos=$_POST["zapatos"];
                        $resultado;
                        $descuento;
                        $total;
                        if ($zapatos==0){
                        echo(" usted no ha comprado no recibira descuento ");
                        }

                        if ($zapatos>=1 && $zapatos<=2){
                        echo(" lo siento no recibira descuento valido por los pares que ha comprado ");
                        $resultado=$zapatos*50000;
                        echo(" su factura sin descuentos es: ". $resultado);
                        }

                        if ($zapatos>=3 && $zapatos<=7){
                        echo(" usted trendra un 10% de descuento por el total de zapatos comprados ");
                        $resultado=$zapatos*50000;
                        $descuento=($resultado*10)/100;
                        $total=$resultado-$descuento;
                        echo(" su factura con el descuento de 10% del total es: ". $total);
                        }

                        if ($zapatos==8){
                        echo(" felicidades, usted trendra un 20% de descuento por el total de zapatos comprados ");
                        $resultado=$zapatos*50000;
                        $descuento=($resultado*20)/100;
                        $total=$resultado-$descuento;
                        echo(" su factura con el descuento de 20% del total es: ". $total);
                        }

                        if ($zapatos>=9){
                        echo(" increible felicidades!. Usted trendra un 50% de descuento por el total de sus zapatos comprados, ");
                        $resultado=$zapatos*50000;
                        $descuento=($resultado*50)/100;
                        $total=$resultado-$descuento;
                        echo(" su factura con el descuento de la mitad del precio normalmente vendido es: ". $total);
                        }
                    }
                    ?>

                    </div>
            </div>
        </div>
    </main>

    <?php if(isset($_POST["botoncalcular3"])): ?>
    
        <h1>estas haciendo click</h1>
    
    <?php endif ?>

    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>