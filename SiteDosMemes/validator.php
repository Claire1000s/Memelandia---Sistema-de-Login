<?php
    session_start(); // Sempre inicia uma sessão quando for usar.
    
    if(isset($_POST['email']) && !empty($_POST['email'])) // Checa os dados digitados.
        {
            if(isset($_POST['senha']) && !empty($_POST['senha']))
            {
                // Proteção contra SQL Injection nos dados digitados.
                $email = addslashes($_POST['email']);
                $senha = md5(addslashes($_POST['senha']));
                
                // Conectando com o Banco de Dados...
                $dsn = 'mysql:dbname=blog;host=localhost';
                $dbuser = 'root';
                $dbpass = '';
                
                try
                {
                    $pdo = new PDO($dsn, $dbuser, $dbpass);
                    //Fazendo o teste de login...
                    $sql = $pdo->query("SELECT * FROM login WHERE email = '$email' AND senha = '$senha'");
                    header("Location: AreaRestrita.php");
                    
                    // Validando o ID da sessão.
                    if($sql->rowCount() > 0)
                    {
                        $id = $sql->fetch(); // Pegando o ID em um dado só.
                        $_SESSION['id'] = $id['id'];
                    }
                }
                catch(PDOException $exc)
                {
                    echo "O Banco de Dados falhou!<br />" . $exc->getMessage();
                }     
            }
        }
        
        

