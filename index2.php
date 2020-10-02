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
                    <form class="mt-5" action="index2.php" method="POST">
                        <h4>BIENVENIDO A SU GIMNACIO</h4>
                        <h3>BODY-TECH</h3>
                        <h4>con esta aplicacion podra ver el resultado de indice de masa corporal</h4>
                        <br><br>
                        <div class="row">                                                               
                            <div class="col">
                                <input type="text" class="form-control" placeholder="peso1" name="peso1">
                            </div>
                            <br>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="altura1" name="altura1">
                            </div>
                            <br>
                        <button type="submit" class="btn btn-primary mt-5" name="botoncalcular2">Calcular</button>
                    </form> 

                    <?php if(isset($_POST["botoncalcular2"])){
                        $operacion2=$_POST["operacion2"];
                        $peso1=$_POST["peso1"];
                        $altura1=$_POST["altura1"];
                        $resultado2;
                        
                        $resultado2=$peso1/($altura1*$altura1);
                        echo("el resultado de la operacion es:");
                        echo(" : ".$resultado2);
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