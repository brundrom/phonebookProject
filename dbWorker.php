<?php
        function showContactList() {
            $username = "root";
            $password = "secret";
            $dbName = "mydb";
            $serverName = "mysql";
            echo "Init for connection to do.\n";
            $connection = new PDO("mysql:host={$serverName};dbname={$dbName};charset=utf8", $username, $password);
            $sql = "SELECT * FROM contactList";
            $result = $connection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["accountName"] . "</td><td>" . $row["accountPhone"] . "</td><td>" . $row["accountAddress"] . "</td></tr>";
                }
            } else {
                echo "No contacts in phonebook<br>";
            }
        }
?>