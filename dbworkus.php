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
            $result = $this->connection->exec($thatQuery);
            }

        function showAccounts() {
            $thatQuery = "SELECT * FROM contactList";
            $result = $this->connection->query($thatQuery);
            while($row = $result->fetch()) {
                echo "<tr><td>" . $row["accountName"] . "</td><td>" . $row["accountPhone"] . "</td><td>" . $row["accountAddress"] . "</td></tr>";
            }
        }
    }
?>