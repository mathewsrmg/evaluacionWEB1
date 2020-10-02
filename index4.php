<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
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
                       <a class="nav-link" href="index3.php">PAGINA otra <span class="sr-only">(current)</span></a>
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
                    <form class="mt-5" action="index4.php" method="POST">
                        <h4>POSTOBON</h4>
                        <h4>con esta pagina podra ver el resultado de su salario en nuestra compañia</h4>
                        <h4>digite el numero de horas extra si y solo si las ha realizado</h4>
                        <h4>las horas si hizo 40 se colocan en la primera casilla si hizo menos tambien
                        si usted hizo mas horas, favor de colocarlas en la segunda casilla</h4>
                        <div class="row">                                                               
                            <div class="col">
                                <input type="text" class="form-control" placeholder="horas" name="numh">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="horas extra" name="numhext">
                            </div>
                        <button type="submit" class="btn btn-primary mt-5" name="botoncalcular4">Calcular</button>
                        <p></p>
                    </form> 
                    <br>
                    <?php if(isset($_POST["botoncalcular4"])){
                        $numh=$_POST["numh"];
                        $numhext=$_POST["numhext"];
                        $plata=20000;
                        $plataext=25000;
                        $resultado4;
                        $resultadoplata;
                        $ext;

                        if($numh>40){
                        echo("muy gracioso dijite los datos porfavor como se le indica.");
                        }
                        if($numhext<=0){
                        $resultadoplata=$plata*$numh;
                        $resultado4=$resultadoplata;
                        echo("su salario es: ".$resultado4);
                        }
                        if($numhext>0){
                        $resultadoplata=$plata*$numh;
                        $ext=$plataext*$numhext;
                        $resultado4=$resultadoplata+$ext;
                        echo("su salario es: ".$resultado4);
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