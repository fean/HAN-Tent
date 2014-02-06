<?php
     if ($_GET['page'] == null) {
         include './Views/' . $controller . '/Index.php';
     } else {
         if (file_exists('./Views/' . $controller . '/' . $_GET["page"] . '.php')) {
             include './Views/' . $controller . '/' . $_GET["page"] . '.php';
         } else {
             if(file_exists('./Views/Shared/' . $_GET['page'] . '.php')) {
                 include './Views/Shared/' . $_GET['page'] . '.php';
             } else {
                 require '/Views/Shared/Error-404.php';
             }
         }
     }
?>