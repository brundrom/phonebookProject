<html>
<head>
    <title>Search contact in list</title>
</head>
<body>
     <!--MENU-->
     <table>
            <tr>
                <td><a href="index.php">The Phonebook Project | </a></td>
                <td><a href="createNew.php">New | </a></td>
                <td><a href="editList.php">Edit | </a></td>
                <td>Search | </td>
                <td><a href="https://github.com/brundrom/platformOne">Github</a></td>
            </tr>
        </table>
        
<center>
<form method="GET">
    <table>
        <tr>
            <td colspan="2">Ввести один из параметров для поиска по списку</td>
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
            <td colspan="2" align="center"><input type="submit" value="Find"><br></td>
        </tr>
    </table>
</form>
</center>

<?php
            include('dbworkus.php');
            $dbTask = new dbWorkus('mysql', 'root', 'secret', 'mydb');
            $dbTask->searchAccount();
?>

</body>
</html>