<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     var_dump($_GET["page"]);
//     // Debug pour voir si le chemin est correct
// var_dump(realpath("../views/enregistrerdette.html.php"));
    $page = isset($_GET["page"]) ? $_GET["page"]:1;
    switch ($page) {
        case 1:
            include_once "../index.html.php";
            break;
        
        case 2:
            include_once "../views/enregistrerdette.html.php";
            break;
        default:
            break;

    }
    ?>
</body>
</html>
