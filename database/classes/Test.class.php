<?php 

class Test extends DB {

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row['firstname']."<br>";
        }
    }
}