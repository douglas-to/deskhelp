<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: login.php");	
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>Sistema Helpdesk</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/general.js"></script>
<script src="js/user.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<h2>Sistema Helpdesk</h2>	
	<?php include('menus.php'); ?>		
	</div> 
	
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Adicionar Novo</button>
			</div>
		</div>
	</div>
			
	<table id="listUser" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>S/N</th>
				<th>Nome</th>					
				<th>E-mail</th>
				<th>Criado</th>
				<th>Função</th>
				<th>Status</th>
				<th></th>
				<th></th>				
			</tr>
		</thead>
	</table>
	
	<div id="userModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="userForm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Adicionar Usuário</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="username" class="control-label">Nome*</label>
							<input type="text" class="form-control" id="userName" name="userName" placeholder="Nome de usuário" required>			
						</div>
						
						<div class="form-group">
							<label for="username" class="control-label">E-mail*</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>			
						</div>
						
						<div class="form-group">
							<label for="status" class="control-label">Função</label>				
							<select id="role" name="role" class="form-control">
							<option value="admin">Admin</option>				
							<option value="user">Membro</option>	
							</select>						
						</div>	
						
						<div class="form-group">
							<label for="status" class="control-label">Status</label>				
							<select id="status" name="status" class="form-control">
							<option value="1">Ativo</option>				
							<option value="0">Inativo</option>	
							</select>						
						</div>

						<div class="form-group">
							<label for="username" class="control-label">Nova Senha</label>
							<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Senha">			
						</div>											
						
					</div>
					<div class="modal-footer">
						<input type="hidden" name="userId" id="userId" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Salvar" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>	
<?php include('inc/footer.php');?>
