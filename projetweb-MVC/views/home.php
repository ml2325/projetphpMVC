<?php 
  if(isset($_POST['find'])){
    $data=new UsersController();
    $users=$data->findUser();
  }else{
    $data = new UsersController();
    $users= $data->getAllUsers();
  }
 
  
?>
<div class="container">
    <div class="row">
       <div class="col-md-12 mx-auto">
        <?php include('./views/includes/alerts.php');?>
       <div class="card">
        <div class="card-body">
            <a href="<?php echo BASE_URL;?>addem" class="btn btn-sm btn-primary mr-2 mb-2">
        <i class="fa fa-plus"></i>
            </a>
            <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
        <i class="fa fa-home"></i>
            </a>
            <form  method="post" class="float-right d-flex flex-row">
              <input type="text" name="search" placeholder="filter">
              <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
            </form>
        <table class="table ">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">category de formation</th>
      <th scope="col">nom de l'universite</th>
      <th scope="col">type user</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
       <?php foreach($users as $user):?>
       <tr>
       <th scope="row"><?php echo $user['id']; ?></th>
       <th scope="row"><?php echo $user['nom']; ?></th>
       <th scope="row"><?php echo $user['prenom']; ?></th>
       <th scope="row"><?php echo $user['email']; ?></th>
       <th scope="row"><?php echo $user['password']; ?></th>
       <th scope="row"><?php echo $user['category_formation']; ?></th>
       <th scope="row"><?php echo $user['name_uni']; ?></th>
       <th scope="row"><?php echo $user['type_user'] ?></th>

       <td class="d-flex flex-row">
        <form method="post" class="mr-1" action="updateem">
              <input type="hidden" name="id" value="<?php echo $user['id']?>">
            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
        </form>
        <form method="post" class="mr-1" action="deleteem">
             <input type="hidden" name="id" value="<?php echo $user['id']?>">
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
        </form>
       </td>
       </tr>
       <?php endforeach; ?>
  </tbody>
</table>
        </div>
       </div>
       </div> 
    </div>
</div>