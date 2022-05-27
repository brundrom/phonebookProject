<?php
            include('dbworkus.php');
            $dbTask = new dbWorkus('mysql', 'root', 'secret', 'mydb');
            $dbTask->searchAccount();
            echo "<a href=\"index.php\">Back to main page.</a>";
?>