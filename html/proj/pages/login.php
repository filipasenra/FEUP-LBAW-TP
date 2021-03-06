<?php
include_once("../templates/header.php");
include_once("../templates/footer.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <script src="https://kit.fontawesome.com/4f1925ab80.js" crossorigin="anonymous"></script>
    <script src="../js/input.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Papagaio</title>
</head>


<script>
    $(function() {
        $('[toggle]').tooltip()
    })
</script>



<body>
    <?php drawHeaderVisitor();  ?>

    <div class="form-center align-items-center pb-5">
        <h2>Bem Vindo!</h2>
        <h6><br></h6>

        <form class="login mt-5" action="../pages/main_page.php">

            <div class="content">
                <label for="inputEmail"><i class="fas fa-at"></i></label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="" toggle="" data-placement="bottom" title="exemplo@email.com">
            </div>

            <div class="content">
                <label for="inputPassword"><i class="fas fa-key"></i></label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Palavra-passe" required="" toggle="" data-placement="bottom" title="Introduza a sua password">
            </div>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sessão</button>

            <div><button type="button" class="btn btn-link">Esqueceu-se da sua palavra-passe?</button></div>

            <hr class="section-break" />

            <a class="btn btn-outline-dark" href="#" role="button" style="text-transform:none">
                <img width="20px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                Iniciar sessão com o Google
            </a>

        </form>
    </div>


    <?php drawFooter(); ?>

</body>

</html>