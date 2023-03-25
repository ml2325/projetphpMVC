<?php  
 if(isset($_POST['id'])){
    $delteUser = new UsersController();
    $delteUser->deleteUser();
  }

?>