<?php



class User  extends Dbh{

    public function getAllUser() {
        $stmt = $this->connect()->query("SELECT * FROM MYUSER");

        while($row = $stmt->fetch()) {
            $results[] = $row['uid'];
            

        }

        return $results;
        

    }


    public function getUserWithCountCheck() {
        $id = 1;
        $uid = "Utshaw";

        $stmt = $this->connect()->prepare("SELECT * FROM MYUSER WHERE id = ? AND uid = ?");
        $stmt->execute([$id, $uid]);

        if($stmt->rowCount()){ 
            while($row = $stmt->fetch()) {
                return $row['uid'];
            }
        }else {

        }
    }
    
    
}