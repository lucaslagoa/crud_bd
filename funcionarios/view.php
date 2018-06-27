<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $funcionario['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome / Razão Social:</dt>
	<dd><?php echo $funcionario['name']; ?></dd>

	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $funcionario['cpf_cnpj']; ?></dd>

	<dt>CPF_Administrador:</dt>
	<dd><?php echo $funcionario['cpf_adm']; ?></dd>
</dl>
<!--
<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $funcionario['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $funcionario['hood']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $funcionario['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $funcionario['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $funcionario['city']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $funcionario['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $funcionario['mobile']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $funcionario['state']; ?></dd>

	<dt>Inscrição Estadual:</dt>
	<dd><?php echo $funcionario['ie']; ?></dd>
</dl>
-->
<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>