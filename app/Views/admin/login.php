<?php echo view('layout/header');?>
    <div class="page-header">
        <h1>Please sign in</h1>
        <?php if(isset($_GET['error'])):?>
        <div class="alert alert-danger">Invalid Username or password</div>
        <?php endif;?>
    </div>
<form class="form-signin" action="<?php echo url('/admin/login');?>" method="post" >
   <p> <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
   </p>
    <p>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>

<?php echo view('layout/footer');?>
