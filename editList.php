<?php
            include('dbworkus.php');
            $dbTask = new dbWorkus('mysql', 'root', 'secret', 'mydb');
            $dbTask->deleteAccount();
?>

<html>
<head>
    <title>Delete contact</title>
</head>
<body>
     <!--MENU-->
     <table>
            <tr>
                <td><a href="index.php">The Phonebook Project | </a></td>
                <td><a href="createNew.php">New | </a></td>
                <td>Edit | </td>
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
                //include('dbworkus.php');
                //$dbTask = new dbWorkus('mysql', 'root', 'secret', 'mydb');
                $dbTask->showAccounts();
            ?>
        </table>
        </center>
        
<center>
<form method="POST">
    <table>
        <tr>
            <td colspan="2">Для удаления контакта требуется заполнить все поля</td>
        </tr>
        <tr>
            <td><b>Name:</b></td>
            <td><input name="accountName" type="text"><br></td>
        </tr>
        <tr>
            <td><b>Phone:</b></td>
            <td><input name="accountPhone" type="text"><br></td>
        </tr>
        <tr>
            <td><b>Address:</b></td>
            <td><input name="accountAddress" type="text"><br></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Delete"><br></td>
        </tr>
    </table>
</form>
</center>

</body>
</html>