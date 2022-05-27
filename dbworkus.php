<?php

    class dbWorkus {

        private $connection;

        private $dbname, $dbuser, $dbpass, $dbhost;
        private $accountName, $accountPhone, $accountAddress;

        function __construct($dbhost = 'mysql', $dbuser = 'root', $dbpass = 'secret', $dbname = 'mydb') {
            $this->dbhost = $dbhost;
            $this->dbname = $dbname;
            $this->dbuser = $dbuser;
            $this->dbpass = $dbpass;
            $this->dbOpen();
        }

        function dbOpen() {
            $this->connection = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname};charset=utf8", $this->dbuser, $this->dbpass);
        }

        function getAccountData() {
            $this->accountName = $_POST['accountName'];
            $this->accountPhone = $_POST['accountPhone'];
            $this->accountAddress = $_POST['accountAddress'];
        }

        function createAccount() {
            $this->getAccountData();
            $thatQuery = "INSERT INTO contactList (accountName, accountPhone, accountAddress) VALUES ('$this->accountName', '$this->accountPhone', '$this->accountAddress')";
            $this->connection->exec($thatQuery);
            }

        function showAccounts() {
            $thatQuery = "SELECT * FROM contactList";
            $result = $this->connection->query($thatQuery);
            while($row = $result->fetch()) {
                echo "<tr><td>" . $row["accountName"] . "</td><td>" . $row["accountPhone"] . "</td><td>" . $row["accountAddress"] . "</td></tr>";
            }
        }

        function deleteAccount() {
            $this->getAccountData();
            $thatQuery = "DELETE FROM contactList WHERE accountName LIKE '$this->accountName' AND accountPhone LIKE '$this->accountPhone' AND accountAddress LIKE '$this->accountAddress'";
            $this->connection->exec($thatQuery);
        }

        function searchAccount() {
            $this->accountName = $_GET['accountName'];
            $this->accountPhone = $_GET['accountPhone'];
            $this->accountAddress = $_GET['accountAddress'];

            $thatQuery = "SELECT * FROM contactList WHERE accountName LIKE '$this->accountName' OR accountPhone LIKE '$this->accountPhone' OR accountAddress LIKE '$this->accountAddress'";
            $result = $this->connection->query($thatQuery);
            while ($row = $result->fetch()) {
                    echo "Name: " . $row["accountName"] . " - Phone: " . $row["accountPhone"] . " - Address: " . $row["accountAddress"] . "<br>";
            }      
        }
    }
?>