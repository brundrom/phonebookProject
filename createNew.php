<html>
<head>
    <title>Account creation</title>
</head>
<body>
    <!--MENU-->
    <table>
            <tr>
                <td><a href="index.php">The Phonebook Project | </a></td>
                <td>New | </td>
                <td><a href="editList.php">Edit | </a></td>
                <td><a href="search.php">Search | </a></td>
                <td><a href="https://github.com/brundrom/platformOne">Github</a></td>
            </tr>
        </table>  
    <center>
<form method="POST" action="dbWorker.php">
    <table>
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
            <td colspan="2" align="center"><input type="button" name="creationJob" value="Create"><br></td>
        </tr>
    </table>
</form>
    </center>
</body>
</html>