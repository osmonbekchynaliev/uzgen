<?php

namespace App;

use mysqli;

class Builder extends Database{

    public $table;
    private $where;

   public function get(){
        $result = mysqli_query($this->connect, "SELECT * FROM $this->table $this->where");
        return mysqli_fetch_all($result);
    }

    public function getDesc(){
        $result = mysqli_query($this->connect, "SELECT * FROM $this->table ORDER BY id DESC");
        return mysqli_fetch_all($result);
    }

    public function getAll($query){
        $result = mysqli_query($this->connect,$query);
        return mysqli_fetch_all($result);
    }

    public function first(){
        //echo "SELECT * FROM $this->table $this->where";
      $result = mysqli_query($this->connect, "SELECT * FROM $this->table $this->where");
        return mysqli_fetch_row($result);
    }
   public function create($data){
        foreach ($data as $key => $value){
            $colums .= $key.",";
            $values .= "'$value',";
        }
        $colums = rtrim($colums, ',');
        $values = rtrim($values, ',');
        mysqli_query($this->connect, "INSERT INTO $this->table ($colums) VALUES ($values)");
    }
    public function delete($id){
        // mysqli_query($this->connect, "ALTER TABLE $this->table DROP COLUMN $id");
        $id = $_GET['id'];
        mysqli_query($this->connect, "DELETE FROM $this->table WHERE id=$id");
    }
    
    public function update($data){
        $values = '';
        foreach ($data as $key => $value){
            $values .= " $key = '$value',";
        }
        $values = rtrim($values, ',');
        mysqli_query($this->connect, "UPDATE $this->table SET $values $this->where");
    }

   public function where($key, $value){
       $this->where = "WHERE ".$key." = '".$value."'";
      // print( $this->where);
       return $this;
    }

    public function whereMulti($value){
       $this->where = "WHERE ".$value;
         return $this; 
    }

   public function whereAll($key, $value){
        $result = mysqli_query($this->connect, "SELECT * FROM $this->table WHERE $key = '$value'");
        return mysqli_fetch_all($result);
    }

    public function getUserData(){
        $result = mysqli_query($this->connect, "SELECT * FROM $this->table WHERE username'".mysqli_real_escape_string($this->connect,$_POST['login-username'])."'LIMIT 1");
    }

    public function pagination($record_per_page){
        if(isset($_GET['page'])){$page = $_GET['page'];}else{$page = 1;}
        $start_from = ($page - 1)*$record_per_page;
        $result = mysqli_query($this->connect, "SELECT * FROM $this->table ORDER BY id DESC  LIMIT $start_from, $record_per_page");
        return mysqli_fetch_all($result);
    }

    public function pages($record_per_page){
        // query -> запрос к общему кол-ву товаров
        $query = mysqli_query($this->connect, "SELECT * FROM $this->table");
        $num_of_result_query = mysqli_num_rows($query);
        // определить общее количество доступных страниц
        $num_of_result_page = ceil($num_of_result_query/$record_per_page);
        return $num_of_result_page;
    }

    

}