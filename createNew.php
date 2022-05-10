<html>
<head>
    <title>Account creation</title>
</head>
<body>
    <!--MENU-->
    <table>
            <tr>
                <td>The Phonebook Project | </td>
                <td><a href="createNew.php">New | </a></td>
                <td><a href="editList.php">Edit | </a></td>
                <td><a href="search.php">Search | </a></td>
            </tr>
        </table>  
    <center>
<form method="GET" action="createAccount.php">
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
            <td colspan="2" align="center"><input type="submit" value="Create"><br></td>
        </tr>
    </table>
</form>
    </center>
</body>
</html>