<?php 
include 'init.php';
if($users->isLoggedIn()) {
	header('Location: ticket.php');
}
$errorMessage = $users->login();
include('inc/header.php');
?>
<title>Sistema Helpdesk</title>
<?php include('inc/container.php');?>
<div class="container contact">	
	<h2>Sistema Helpdesk</h2>	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#00796B;color:white;">
				<div class="panel-title">Login de Usuário</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" placeholder="e-mail" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password" placeholder="senha" required>
					</div>
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						Admin: dougto@gmail.com<br>
						Senha: qwe1qa	<br><br>
						Usuário: helena45@gmail.com<br>
						senha: 1qaqwe							
						</div>						
					</div>	
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>
