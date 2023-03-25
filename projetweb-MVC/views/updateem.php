<?php 
  if(isset($_POST['id'])){
    $existUser = new UsersController();
    $user = $existUser->getOneUser();
  }else{
    Redirect::to('home');
  }
  if(isset($_POST['submit'])){
    $existUser = new UsersController();
    $existUser->updateUser();
  }
 
  
?>
<div class="container">
    <div class="row">
       <div class="col-md-7 mx-auto">
       <div class="card">
        <div class="card-header">Edit user</div>
        <div class="card-body">
            <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
        <i class="fa fa-home"></i>
            </a>
          <form method="post">
           <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="nom" value="<?php echo $user->nom ; ?>">
           </div>

           <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" class="form-control"  value="<?php echo $user->prenom ; ?>">
            <input type="hidden" name="id" value="<?php echo $user->id?>">
           </div>

          

           <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" placeholder="email" value="<?php echo $user->email ; ?>">
           </div>


           <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" class="form-control" placeholder="password" value="<?php echo $user->password ; ?>">
           </div>

           <div class="form-group">
            <label for="category_formation">category formation</label>
            <input type="text" name="category_formation" class="form-control" placeholder="category formation" value="<?php echo $user->category_formation ; ?>">
           </div>

           <div class="form-group">
            <label for="name_uni">name university</label>
            <input type="text" name="name_uni" class="form-control" placeholder="name university" value="<?php echo $user->name_uni ; ?>">
           </div>

           <div class="form-group">
            <label for="type_user">Type user</label>
            <input type="number" max=3 min=1 name="type_user" class="form-control" placeholder="type of user" value="<?php echo $user->type_user ; ?>">
           </div>

           <div class="form-group">
             <button type="submit" class="btn btn-primary" name="submit">OK</button>
           </div>
          </form>
        </div>
       </div>
       </div> 
    </div>
</div>