<nav class="navbar navbar-inverse" style="background:#ffd803;color:#f6f8f9;font-weight:bold; border:0;">
	<div class="container-fluid">		
		<ul class="nav navbar-nav menus">
			<li id="ticket"><a href="ticket.php" class="navbar-brand">Chamados</a></li>
			<?php if(isset($_SESSION["admin"])) { ?>
				<li id="department"><a href="department.php" >Departamentos</a></li>
				<li id="user"><a href="user.php" >Usuários</a></li>				
			<?php } ?>						
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> 
				<img src="//gravatar.com/avatar/<?php echo md5($user['email']); ?>?s=100" width="20px">&nbsp;<?php if(isset($_SESSION["userid"])) { echo $user['name']; } ?></a>
				<ul class="dropdown-menu">					
					<li><a href="logout.php">Sair</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
