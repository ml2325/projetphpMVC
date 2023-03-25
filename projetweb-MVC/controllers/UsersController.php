<?php  

class UsersController{

    public function getAllUsers(){
        $users= Users::getAll();
         return $users;
    }

    public function getOneUser(){
        if(isset($_POST['id'])){
            $data=array(
                'id'=>$_POST['id']
            );
            $user= Users::getUsers($data);
            return $user;
        }
      
    }


   public function addUser(){
    if(isset($_POST['submit'])){
        $data =array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'category_formation' => $_POST['category_formation'],
            'name_uni' => $_POST['name_uni'],
            'type_user' => $_POST['type_user'],
        );
        $result =Users::add($data);
        if($result === 'ok'){
          Session::set('success','added user');
          Redirect::to('home');
        }else{
           echo $result; 
        }
    }
   }

   public function findUser(){
    if(isset($_POST['search'])){
     $data=array('search'=>$_POST['search']);
   }
   $user=Users::searchUser($data);
   return $user;
    }


   
   public function updateUser(){
    if(isset($_POST['submit'])){
        $data =array(
            'id' => $_POST['id'],
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'category_formation' => $_POST['category_formation'],
            'name_uni' => $_POST['name_uni'],
            'type_user' => $_POST['type_user'],
        );
        $result =Users::update($data);
        if($result === 'ok'){
            Session::set('success','updated user');
            Redirect::to('home');
        }else{
           echo $result; 
        }
    }
   }
   
   public function deleteUser(){
    if(isset($_POST['id'])){
        $data['id']=$_POST['id'];
        $result=Users::delete($data);
        if($result==='ok'){
            Session::set('success','added deleted');
            Redirect::to('home');
        }else{
           echo $result; 
        }
        
    }
   }




}
   
?>