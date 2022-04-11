<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/favicon1.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
</head>
<style>
    body {
        background-image: url("./assets/img/fundo_mandalorian.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>

<body id="page-top">

    <?php

    if (isset($_POST['nomman'])) {

        require './classes/Mandalorianos.php';

        $man = new Mandalorianos();
        $man->inserir($_POST['nomman']);
    }
    ?>

    <?php if (isset($_POST['nomman'])) { ?>
        <script>
            alert('Novo Mandaloriano inserido com sucesso!');
        </script>
    <?php } ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="fab fa-jedi-order"></i> Início <i class="fab fa-sith"></i></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="jedi.php">Jedi's</a></li>
                    <li class="nav-item"><a class="nav-link" href="sith.php">Sith's</a></li>
                    <li class="nav-item"><a class="nav-link" href="mandalorianos.php">Mandalorianos</a></li>
                    <li class="nav-item"><a class="nav-link" href="planeta.php">Planetas</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <center>
                        <form action="adicionar_mandalorianos.php" method="post">
                            <div class="mb-3 col-10 col-md-12" style="text-align: initial;">
                                <label for="nome" class="form-label" style="text-align: inherit;color:#fff">Adicione um nome para o novo Mandaloriano:</label>
                                <input type="text" class="form-control" id="nomman" name="nomman">
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <button class="btn btn-primary btn-xl" type="submit">Adicionar</button>
                                </div>
                            </div>
                            <br />
                            <div class="col-12 col-md-12">
                                <a class="btn btn-primary btn-xl" href="index.php"><i class="fas fa-arrow-alt-circle-left"></i> Voltar ao início</a>
                                <a class="btn btn-primary btn-xl" href="mandalorianos.php"><i class="fas fa-arrow-alt-circle-left"></i> Voltar a lista de Mandalorianos</a>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    <center>

    </center>
    <br><br><br>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>


</html>