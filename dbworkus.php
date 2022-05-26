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
        }

        function dbOpen() {
            $this->connection = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname};charset=utf8", $this->dbuser, $this->dbpass);
            //$this->connection = new mysqli($this->dbhost, $this->dbname, $this->dbpass, $this->dbname);
        }

        function dbMakeQuery($query) {
            return $this->connection->query($query);            
        }

        function getAccountData() {
            $this->accountName = $_POST['accountName'];
            $this->accountPhone = $_POST['accountPhone'];
            $this->accountAddress = $_POST['accountAddress'];
        }

        function createAccount() {
            $this->dbOpen();
            $this->getAccountData();
            $thatQuery = "INSERT INTO contactList (accountName, accountPhone, accountAddress) VALUES ('$this->accountName', '$this->accountPhone', '$this->accountAddress')";
            $result = $this->connection->exec($thatQuery);
            return $result;
            }

        function showAccounts() {
            $this->dbOpen();
            $thatQuery = "SELECT * FROM contactList";
            $result = $this->connection->query($thatQuery);
            while($row = $result->fetch()) {
                echo "<tr><td>" . $row["accountName"] . "</td><td>" . $row["accountPhone"] . "</td><td>" . $row["accountAddress"] . "</td></tr>";
            }
        }
    }
?>