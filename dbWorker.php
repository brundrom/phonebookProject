<?php

    class dbWorker {
      
        private $connection;

        private $dbhost, $dbname, $dbuser, $dbpass;
        private $accountName, $accountPhone, $accountAddress;

        function __construct($dbhost = 'mysql', $dbuser = 'root', $dbpass = 'secret', $dbname = 'mydb') {
            $this->dbhost = $dbhost;
            $this->dbname = $dbname;
            $this->dbuser = $dbuser;
            $this->dbpass = $dbpass;
        }

        function dbOpen() {
            $this->connection = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname};charset=utf8", $this->dbuser, $this->dbpass);
        }

        function showAccounts() {
            $sql = 'SELECT * FROM contactList';
            $result = $this->connection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["accountName"] . "</td><td>" . $row["accountPhone"] . "</td><td>" . $row["accountAddress"] . "</td></tr>";
                }
            } else {
                echo "No contacts in phonebook<br>";
            }

        function createAccount() {
            $accountName = $_POST['accountName'];
            $accountPhone = $_POST['accountPhone'];
            $accountAddress = $_POST['accountAddress'];
            $sql = "INSERT INTO contactlist (accountName, accountPhone, accountAddress) VALUES ('$accountName', '$accountPhone', '$accountAddress')";
            //$this->connection->query($sql);
        

        }


        }
        // function createAccount();        
        // function deleteAccount();
        // function searchAccount();
    }
?>