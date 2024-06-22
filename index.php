<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les design patterns en PHP</title>
    <link rel="stylesheet" href="./assets/css/main.min.css">
</head>

<body>
    <main>
        <header id="main-header" class="container-fluid">
            <h1>Les design pattern en PHP</h1>
        </header>
        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <?php include 'doc/_menu.php'; ?>
                </div>
                <div id="page-content" class="col">
                    <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if (file_exists("doc/$page.php")) {
                        include "doc/$page.php";
                    } else {
                        include 'doc/404.php';
                    }
                } else {
                    include 'doc/home.php';
                }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <script type="module" src="./assets/js/main.min.js"></script>
</body>

</html>