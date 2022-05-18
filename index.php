<html>
    <head>
        <title>The Phonebook Project</title>    
    </head>
    <body>
        <!--MENU-->
        <table>
            <tr>
                <td>The Phonebook Project | </td>
                <td><a href="createNew.php">New | </a></td>
                <td><a href="editList.php">Edit | </a></td>
                <td><a href="search.php">Search | </a></td>
                <td><a href="https://github.com/brundrom/platformOne">Github</a></td>
            </tr>
        </table>         
        
        <!--DBLIST-->
        <center>
        <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            <?php

            include('dbWorker.php');
            $dbTask = new dbWorker('mysql', 'root', 'secret', 'mydb');
            $dbTask->dbOpen();
            $dbTask->showAccounts();

            ?>
        </table>
        </center>

        <footer><center>The Phonebook Project | <?php include "version.php"?></center></footer>
    </body>
</html>