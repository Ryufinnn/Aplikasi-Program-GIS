<h3>Login</h3>
<form method="post" action="pages/ceklogin.php?level=<?=$pages;?>">
<div class="row">
	<div class="col-md-1"><strong>Username</strong></div>
	<div class="col-md-3"><input type="text" name="username" maxlength="15" required="required" class="form-control"></input></div>
</div>
<div class="row"> 
<div class="col-md-1"><strong>Password</strong></div> 
<div class="col-md-3"><input type="password" name='password' required="required" class="form-control" maxlength="20"></input></div> 
</div>
<div class="row"> 
<div class="col-md-1"></div> 
<div class="col-md-3"><button type="submit" class="btn btn-success btn-sm">Login</button></div> 
</div>
</form>