<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/contactappp/config/database.php';

class Contact{
    static function select(){
        global $conn;
        $sql = "SELECT * FROM contact";
        $result = $conn-> query($sql);
        $arr = array();

        if ($result-> num_rows> 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($ID, $No_Hp, $Owner) {
        global $conn;
        $sql = "INSERT INTO contact(ID,No_Hp,Owner) VALUES (?,?,?)";
        $stmt = $conn-> prepare($sql);
        $stmt-> bind_param ('sss', $ID, $No_Hp, $Owner);
        $stmt->execute();
        $result = $stmt-> affected_rows > 0 ? true : false; 
        return $result;
    }
    static function update($ID, $No_Hp, $Owner) {
        global $conn;
        $sql = "UPDATE contact SET No_Hp=?, Owner=? WHERE ID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $No_Hp, $Owner, $ID);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    
    static function delete($ID) {
        global $conn;
        $sql = "DELETE FROM contact WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $ID);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

}

