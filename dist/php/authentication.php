<?php

		$server = "itonedc.itonebh.local";
		$domain = "@itonebh.local";
		$login = ($_POST['login'].$domain);
		$senha = ($_POST['senha']);
		
function valida_ldap($server, $login, $senha)
			{
				$ldap_server = $server;
				$auth_user = $login;
				$auth_pass = $senha;
				
				if (!($connect = @ldap_connect($ldap_server))) 
				{
					return FALSE;
				}
					
					if (!($bind = @ldap_bind($connect, $auth_user, $auth_pass))) 
					{
						return FALSE;
					}
					else 
					{
							return TRUE;
					}
							
			} 
			if (valida_ldap($server, $login, $senha)) 
			{
				echo "<script>altert('usuário $login autenticado');history.back();</script>";
				header('Location: /igot/dist/php/connection.php');
			}
			else 
			{
				echo "<script>alert('usuário ou senha inválida');history.back();</script>";
			}
		 							

?>