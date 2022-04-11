<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jedi's</title>
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

<body>
    <style>
        body {
            background-image: url("./assets/img/fundo_jedi.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
    <?php
    require './classes/Jedi.php';

    $jedi = new Jedi();
    $listaDeJedi = $jedi->listar();

    if (isset($_POST['nomjed'])) {
    }
    ?>



    <!-- Navigation-->
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
    <div class="d-flex px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center ">
        <div class=" text-center ">

            <table class="table table-hover">
                <thead>

                    <tr class="table">
                        <td style="color: #fff;">Código</td>
                        <td style="color: #fff;">Nome do Jedi</td>
                        <td style="color: #fff;">Ações</td>
                    </tr>
                </thead>



                <tbody>
                    <?php foreach ($listaDeJedi as $j) { ?>
                        <tr class="table">
                            <td style="color: #b3b3b3;"><i style="color: #e5b13a;" class="fas fa-user"></i> <?php echo $j['codjed']; ?></td>
                            <td style="color: #b3b3b3;"><a style="color: #b3b3b3;" href="editar_jedi.php?codjed=<?php echo $j['codjed']; ?>"> <?php echo $j['nomjed']; ?><i style="color: #e5b13a;" class="far fa-edit"></i></a> </td>
                            <td><a style="color:#b3b3b3;" href="eliminar_jedi.php?codjed=<?php echo $j['codjed']; ?>">Eliminar<i style="color: #e5b13a;" class="far fa-trash-alt"></i></a></td>
                        </tr>
                    <?php } ?>


                </tbody>

            </table>
            <center>
                <a class="col-md-12" href="adicionar_jedi.php"><button  type="submit" class="btn btn-primary btn-xl">Adicionar um novo Jedi</button></a>
            </center>
        </div>
    </div>

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