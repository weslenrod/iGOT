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
				header('Location: /igot/news.html');
			}
			else 
			{
				echo "<script>alert('usuário ou senha inválida');history.back();</script>";
				//echo "<div id='mensagem'>.mensagem 123</html>";
				//echo '<script type="text/javascript">','($login,$senha);','</script>';
				//echo "$login  $senha";
			}
		 							

?>