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
                $connection = mysqli_connect("localhost", "root", "root", "contactlist");
                $sql = "SELECT * FROM contactlist";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["accountName"] . "</td><td>" . $row["accountPhone"] . "</td><td>" . $row["accountAddress"] . "</td></tr>";
                    }
                } else {
                    echo "No contacts in phonebook<br>";
                }
            ?>
        </table>
        </center>

        <footer><center>The Phonebook Project | <?php include "version.php"?></center></footer>
    </body>
</html>