<meta charset="UTF-8">
<?php

class banco {

    function connect() {
        return new mysqli("localhost", "root", "", "appeureca");
    }
    function insert($sql){
        $connect = $this->connect();
        $result = mysqli_query($connect, $sql);
        return $result;
    }
    function select($sql){
        $connect = $this->connect();
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    function delete($sql){
        $connect = $this->connect();
        $result = mysqli_query($connect, $sql);
        return $result;
    }
}
?>