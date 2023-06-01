<!doctype html>
<html lang='da'>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='description' content='Reparation af Lastvogne, Entreprenørmaskiner, Slamsuger, Gravesuger anlæg / Suction excavators, Hydraulikslanger' />
        <meta name='keywords' content='lastvogne, entreprenørmaskiner, slamsuger, gravesuger anlæg, Suction Excavators, hydraulikslaner, mekaniker, lastvognsmekaniker, store maskiner, maskine reparation' />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">

        <link rel="icon" type="image/x-icon" href="src/images/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/897612594a.js" crossorigin="anonymous"></script>

        <?php
            switch($_SERVER['REQUEST_URI']) {
                case '/':
                    echo '<link type="text/css" rel="stylesheet" href="src/styles/home.css" />';
                break;

                case '/projekter':
                    echo '<link type="text/css" rel="stylesheet" href="src/styles/projects.css" />';
                break;

                case '/service-partner':
                    echo '<link type="text/css" rel="stylesheet" href="src/styles/service-partner.css" />';
                break;

                case '/facebook-feed':
                    echo '<link type"text/css" rel="stylesheet" href="src/styles/facebook-feed.css" />';
                break;

                case '/om-os':
                    echo '<link type="text/css" rel="stylesheet" href="src/styles/about-us.css" />';
                break;

                case '/kontakt-os':
                    echo '<link type="text/css" rel="stylesheet" href="src/styles/contact-us.css" />';
                break;
            }
        ?>
        <link type='text/css' rel='stylesheet' href='src/styles/404.css' />
        <link type='text/css' rel='stylesheet' href='src/styles/global.css' />
        <link type='text/css' rel='stylesheet' href='src/styles/navbar.css' />

        <title>CMS Auto</title>
    </head>

    <body class='flex flex-column'>
        <header >
            <?php include('src/includes/navigation.php') ?>
        </header>

        <main class='flex-shrink-0 w-100 overflow-x-hidden'>
            <?php
                require __DIR__ . '/vendor/autoload.php';

                // Create Router instance
                $router = new \Bramus\Router\Router();

                $router->setBasePath('/');

                $router->get('/', function() {
                    include_once('src/views/home.php');
                });

                $router->get('/projekter', function() {
                    include_once('src/views/projects.php');
                });

                $router->get('/service-partner', function() {
                    include_once('src/views/service-partner.php');
                });

                $router->get('/facebook-feed', function() {
                    include_once('src/views/facebook-feed.php');
                });

                $router->get('/om-os', function() {
                    include_once('src/views/about-us.php');
                });

                $router->get('/kontakt-os', function() {
                    include_once('src/views/contact-us.php');
                });

                // Custom 404 Handler
                $router->set404(function () {
                    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
                    include_once('src/views/404.php');
                });

                $router->run();
            ?>
        </main>

        <footer class="footer fixed-bottom mt-auto py-2">
            <?php include_once('src/includes/footer.php'); ?>
        </footer>

    
        <?php include('src/includes/scripts.php'); ?>
  </body>
</html>
