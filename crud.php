<?php

 public function delete($table_name,$condition ,$limit=1){
      $sql = "DELETE FROM $table_name WHERE $condition  LIMIT $limit ";
      return $this->link ->exec($sql);
    }

   
    public function insert($table_name,$data){
      $keys = implode(',', array_keys($data));
      $values = ":".implode(",:", array_keys($data));

      $sql = "INSERT INTO $table_name($keys) VALUES($values)";
      $stmt = $this->link->prepare($sql);

      foreach ($data as $key => $value) {
        $stmt->bindValue(":$key",$value);
      }
      return $stmt->execute(); 


    } 
    
    public function select($sql){
      $stmt = $this->link->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($table,$data,$condition ){
      $keys = '';
      foreach ($data as $key => $value) {
        $keys .= "$key=:$key,";
      }
      $keys = rtrim($keys,",");

      $sql = "UPDATE $table SET $keys WHERE $condition  ";
      $stmt = $this->link->prepare($sql);
      foreach ($data as $key => $value) {
        $stmt->bindValue(":$key",$value);
      }

      return $stmt->execute(); 
    }

    

    public function upload($file){
      $extention = explode('.', $file['name']);
      $newName = rand().'.'.$extention[1];
      $destination = './upload/'.$newName;
      move_uploaded_file($file['tmp_name'], $destination);
      return $newName;

    }
	public function delet (){
		echo "hello fahem";
		if(){
			
		}
	}
	}
    

 
