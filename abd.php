<?php
// Start the session
session_start();
?>
<?php
require_once 'classes/dbconnect.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
a{
    text-decoration: none;
}
</style>
</head>
<body>
<div class="container">
    <br><h1 class="text-center">Application IQ challenge</h1><br><br>
    <section>
        <div class="card-deck mb-3">            
            <!-- panel des clients -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h4 class="my-0 font-weight-normal">Tour 1</h4>
                </div>
                <div class="card-body">
                    <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
                    Accéder à la Tour 1 :
                    <ul class="list mt-3 mb-4">
                        <li>Rependr 5 question</li>
                        <li>ghdsfsdsd sfsddfds</li>
                        <li>etc.</li>
                    </ul>
                    <a href="tour1/index.php?active=clients">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Accéder à la page Tour 1 </button>
                    </a><br>
                    <a href="tour1/result.php">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Résultat Tour 1 </button>
                    </a>
                </div>
            </div>
            <!-- panel des comptes -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h4 class="my-0 font-weight-normal">Tour 2</h4>
                </div>
                <div class="card-body">
                    <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
                    Accéder à la Tour 1 :
                    <ul class="list mt-3 mb-4">
                        <li> Accéder à la Tour 1  dfgfdsf </li>
                        <li>Afficher un état</li>
                        <li>etc.</li>
                    </ul>
                    <a href="tour2/index.php?active=comptes">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Accéder à la page Tour 2 </button>
                    </a><br>
                    <a href="tour2/result.php">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Résultat Tour 2 </button>
                    </a>
                </div>
            </div>
            <!-- panel des transactions -->
            <div class="card mb-4 shadow-sm">
                <div class="card-header text-center">
                    <h4 class="my-0 font-weight-normal">Tour 3</h4>
                </div>
                <div class="card-body">
                    <!-- <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1> -->
                    Accéder à la Tour 3 :
                    <ul class="list mt-3 mb-4">
                        <li>Accéder à la Tour 1 :</li>
                        <li>Afficher un état</li>
                        <li>etc.</li>
                    </ul>
                    <a href="tour3/index.php?active=transactions">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Accéder à la page Tour 3 </button>
                    </a><br>
                    <a href="tour3/result.php">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Résultat Tour 3 </button>
                    </a>
                </div>
            </div>            
            <!-- fin panel des transactions -->
        </div>
    </section>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>