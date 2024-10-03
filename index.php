<?php
include "views/layout/header.php";
?>

<div class="container mt-5">
    <?php
    require_once "autoload.php";
    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];

        if (class_exists($controller)) {
            $controller = $controller . "Controller";
            $controller= new $controller ();
            if (isset($_GET["method"])) {
                $method = $_GET["method"];
                if (method_exists($controller, $method)) {
                    $controller->$method();
                } else {
                    echo "No existeix el metode " . $method;
                }
            } else {
                echo "No existeix la classe " . $controller;
            }
        }
    }


    ?>
</div>


<?php
include "views/layout/footer.php";
?>