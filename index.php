<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <title>Mon super site</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">HOME</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText" data-bs-theme="dark">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Montage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">plage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">foret</a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            Navbar text with an inline element
                        </span>
                    </div>
                </div>
            </nav>
        </header>
        <?php
            switch ($_SERVER['REQUEST_URI']) {
                case '/montagne':
                    include 'pages/montagne.php';
                    break;
                case '/plage':
                    include 'pages/plage.php';
                    break;
                case '/foret':
                    include 'pages/foret.php';
                    break;
                case '/contact':
                    include 'contact.php';
                    break;
                default:
                    include 'nomdelapage.php';
                    break;
            }
        ?>

        <?php require_once "footer.php"?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
