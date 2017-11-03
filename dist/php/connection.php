<?php
	$server = "dc-labwes";
	$user = "dbadmin";
	$password = 'Pas$w0rd';
	
	function open_conn()
	{
		try {
		$conn = new PDO("mysql:host=$server;dbname=igot", $user, $password);
		echo "Connected successfully"; 
		}
		
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
	
	if($_POST["enviar"]) 
	{
	$connection = open_conn();
	$login = $_POST['login'];
	$senha = $_POST["senha"];
	
	//declarando a sentença SQL que será submetida ao Banco de Dados
	$query= "SELECT id_guerreiro,guerreiro FROM guerreiros where guerreiro='$login'";
	
	//executa a consulta SQL e retorna os registros
	$stmt = $connection->query($query);
	
	$resultado = $stmt->fetchAll();
	//executa a consulta SQL e retorna os registros
	
	$numLinhas = count($resultado);
	//se o numero de linhas retornado for diferente de 1 então o usuário e senha não existem na tabela
	
	if($numLinhas != 1) {
	echo("<h1>Usuario não encontrado.</h1>");
	}
	else
		{
			$_SESSION["UsuarioAutenticado"] = 1;
			header('Location: news.html');
	}
	$conexao = NULL;
}
?>