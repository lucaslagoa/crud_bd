<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $admin['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome / Razão Social:</dt>
	<dd><?php echo $admin['name']; ?></dd>

	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $admin['cpf_cnpj']; ?></dd>

</dl>
<!--
<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $admin['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $admin['hood']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $admin['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $admin['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Cidade:</dt>
	<dd><?php echo $admin['city']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $admin['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $admin['mobile']; ?></dd>

	<dt>UF:</dt>
	<dd><?php echo $admin['state']; ?></dd>

	<dt>Inscrição Estadual:</dt>
	<dd><?php echo $admin['ie']; ?></dd>
</dl>
-->
<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $admin['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>