<?php 

	$conexao = new PDO("mysql:host=localhost;dbname='suadatabase'","root","");

	$sql = $conexao->prepare("SELECT * FROM `suatabela` WHERE nome LIKE '%' '".$_POST['busca']."' '%'");

	$sql->execute();

	$sql2 = $sql->fetchAll();

	foreach ($sql2 as $key => $value) {
		echo $value['nome'];
		echo '<hr/>';
	};

?>