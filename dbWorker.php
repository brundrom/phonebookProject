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

        function getAccountData() {
            $this->accountName = $_GET['accountName'];
            $this->accountPhone = $_GET['accountPhone'];
            $this->accountAddress = $_GET['accountAddress'];
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
        }

        function createAccount() {
            $this->getAccountData();
            $sql = "INSERT INTO contactlist (accountName, accountPhone, accountAddress) VALUES ($this->accountName, $this->accountPhone, $this->accountAddress)";
            $this->connection->query($sql);
        }

        function deleteAccount() {
            $this->getAccountData();
            //$sql = "DELETE FROM contactlist WHERE accountName LIKE '$accountName' AND accountPhone LIKE '$accountPhone' AND accountAddress LIKE '$accountAddress'";
            
        }


        function searchAccount() {
            $this->getAccountData();
            //$sql = "SELECT * FROM contactlist WHERE accountName LIKE '$accountName' OR accountPhone LIKE '$accountPhone' OR accountAddress LIKE '$accountAddress'";

        }
    }
?>