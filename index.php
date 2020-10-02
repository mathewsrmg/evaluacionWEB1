<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    
    <header>
       <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
           <a class="navbar-brand" href="#">PAGINA OPERACIONES</a>
           <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toggle navigation"></button>
           <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   <li class="nav-item active">
                       <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">LINK</a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPCIONES</a>
                       <div class="dropdown-menu" aria-labelledby="dropdownId">
                           <a class="dropdown-item" href="#">PRIMERA ACCION</a>
                           <a class="dropdown-item" href="#">SEGUNDA ACCION</a>
                       </div>
                   </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
               </form>
           </div>
       </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify">
                <div class="colums">
                    <form class="mt-5" action="index.php" method="POST">
                        <h4>CALCULO DE COMPRA</h4>
                        <br><br>
                        <div class="row">                                                               
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero1" name="numero1">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero2" name="numero2">
                            </div>
                            <div>
                            <select class="form-control" id="operracion" name="operacion">                  
                                <option value="1">1-suma</option>
                                <option value="2">2-resta</option>  
                                <option value="3">3-multiplicacion</option>
                                <option value="4">4-division</option>
                            </select>
                            </div>
                        <button type="submit" class="btn btn-primary mt-5" name="botoncalcular">Calcular</button>
                    </form>

                    <br><br><br>

                    <?php if(isset($_POST["botoncalcular"])){
                        
                        $operacion=$_POST["operacion"];
                        $numero1=$_POST["numero1"];
                        $numero2=$_POST["numero2"];
                        $resultado;
                        echo("segun la operacion ");

                        echo($operacion);

                        if ($operacion==1){
                        $resultado=$numero1+$numero2;
                        echo(" sumar de ".$numero1." + ".$numero2);
                        echo(" es : ".$resultado);
                        }

                        if ($operacion==2){
                        $resultado=$numero1-$numero2;
                        echo(" restar de ".$numero1." - ".$numero2);
                        echo(" es : ".$resultado);
                        }

                        if ($operacion==3){
                        $resultado=$numero1*$numero2;
                        echo(" multiplicar de ".$numero1." x ".$numero2);
                        echo(" es : ".$resultado);
                        }

                        if ($operacion==4){
                        $resultado=$numero1/$numero2;
                        echo(" dividir de ".$numero1." / ".$numero2);
                        echo(" es : ".$resultado);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>