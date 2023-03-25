<?php 
  if(isset($_POST['submit'])){
    $newuser = new UsersController();
   $newuser->addUser();
  }
 
  
?>
<div class="container">
    <div class="row">
       <div class="col-md-7 mx-auto">
       <div class="card">
        <div class="card-header">Add user</div>
        <div class="card-body">
            <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
        <i class="fa fa-home"></i>
            </a>
          <form method="post">
           <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="nom">
           </div>

           <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" class="form-control" placeholder="prenom">
           </div>

          

           <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" placeholder="email">
           </div>


           <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" class="form-control" placeholder="password">
           </div>

           <div class="form-group">
            <label for="category_formation">category formation</label>
            <input type="text" name="category_formation" class="form-control" placeholder="category formation">
           </div>

           <div class="form-group">
            <label for="name_uni">name university</label>
            <input type="text" name="name_uni" class="form-control" placeholder="name university">
           </div>

           <div class="form-group">
            <label for="type_user">Type user</label>
            <input type="number" max=3 min=1 name="type_user" class="form-control" placeholder="type of user">
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