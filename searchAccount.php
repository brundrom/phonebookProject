<?php
                $connection = mysqli_connect("sql303.liveblog365.com", "lblog_31693290", "54p3mik62y", "lblog_31693290_contactlist"); //"localhost", "root", "root", "contactlist"
                //Check connection
                if (mysqli_connect_errno()) {
                    exit('Connect failed with error: ' . mysqli_connect_error());
                }

                $accountName = $_GET['accountName'];
                $accountPhone = $_GET['accountPhone'];
                $accountAddress = $_GET['accountAddress'];
                
                $sql = "SELECT * FROM contactlist WHERE accountName LIKE '$accountName' OR accountPhone LIKE '$accountPhone' OR accountAddress LIKE '$accountAddress'";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<br /> Name: " . $row["accountName"] . " - Phone: " . $row["accountPhone"] . " - Address: " . $row["accountAddress"];
                    }
                } else {
                    echo "No this contact in phonebook<br>";
                }
            ?>