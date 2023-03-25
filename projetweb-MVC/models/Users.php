<?php
class Users{
    static public function getAll(){
      $stmt = DB::connect()->prepare('SELECT * FROM users');
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt=null;
    }

    static public function getUsers($data){
      $id=$data['id'];
      try{
        $query='SELECT * FROM users WHERE id=:id';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $user=$stmt->fetch(PDO::FETCH_OBJ);
        return $user;
      }catch(PDOException $ex){
         echo 'erreur' .$ex->getMessage();
      }
    }

   
    static public function add($data){
      $stmt = DB::connect()->prepare('INSERT INTO users(nom,prenom,email,password,category_formation,name_uni,type_user) VALUES (:nom,:prenom,:email,:password,:category_formation,:name_uni,:type_user)');
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':email',$data['email']);
      $stmt->bindParam(':password',$data['password']);
      $stmt->bindParam(':category_formation',$data['category_formation']);
      $stmt->bindParam(':name_uni',$data['name_uni']);
      $stmt->bindParam(':type_user',$data['type_user']);


      if($stmt->execute()){
        return 'ok';
      }else{
        return 'try again';
      }
      $stmt->close();
      $stmt=null;
    }


    static public function update($data){
      $stmt = DB::connect()->prepare('UPDATE users SET nom=:nom,prenom=:prenom,email=:email,password=:password,category_formation=:category_formation,name_uni=:name_uni,type_user=:type_user WHERE id=:id');
      $stmt->bindParam(':id',$data['id']);
      $stmt->bindParam(':nom',$data['nom']);
      $stmt->bindParam(':prenom',$data['prenom']);
      $stmt->bindParam(':email',$data['email']);
      $stmt->bindParam(':password',$data['password']);
      $stmt->bindParam(':category_formation',$data['category_formation']);
      $stmt->bindParam(':name_uni',$data['name_uni']);
      $stmt->bindParam(':type_user',$data['type_user']);


      if($stmt->execute()){
        return 'ok';
      }else{
        return 'try again';
      }
      $stmt->close();
      $stmt=null;
    }

  static public function delete($data){
    $id=$data['id'];
    try{
      $query='DELETE FROM users WHERE id=:id';
      $stmt = DB::connect()->prepare($query);
      $stmt->execute(array(":id" => $id));
      if($stmt->execute()){
        return 'ok';
      }
    }catch(PDOException $ex){
       echo 'erreur' .$ex->getMessage();
    }
  }

  static public function searchUser($data){
    $search=$data['search'];
    try{
      $query='SELECT * FROM users WHERE nom LIKE  ? OR prenom LIKE ? OR category_formation LIKE ? OR name_uni LIKE ? OR type_user LIKE ?';
      $stmt = DB::connect()->prepare($query);
      $stmt->execute(array('%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%','%'.$search.'%'));
     $user= $stmt ->fetchAll();
     return $user;
    }catch(PDOException $ex){
       echo 'erreur' .$ex->getMessage();
    }
  }


}


?>