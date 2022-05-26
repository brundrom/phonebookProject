<?php
            include('dbworkus.php');
            $dbTask = new dbWorkus('mysql', 'root', 'secret', 'mydb');
            //$dbTask->dbOpen();
            $dbTask->createAccount();
            echo "<a href=\"index.php\">Back to main page.</a>";
?>