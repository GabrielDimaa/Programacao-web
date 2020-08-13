<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>aula 3</title>
</head>
<body>
    <div class="app">

        <?php require_once('template/header.php'); ?>

        <?php require_once('template/menu.php'); ?>

        <section class="section">
            <div class="section-div">
                
                <?php

                    if (!isset($_GET['modulo'])) {
                        require_once('template/home.php');
                    } else {
                        switch($_REQUEST['modulo']) {
                            case 'home':
                                require_once('components/home.php');
                            break;
                            case 'sobre':
                                require_once('components/sobre.php');
                            break;
                            case 'form':
                                require_once('components/formulario.php');
                            break;
                            case 'produto':
                                require_once('components/produtos.php');
                            break;
                        }
                    }

                ?>

            </div>
        </section>

        <?php require_once('template/footer.php'); ?>

    </div>
</body>
</html>