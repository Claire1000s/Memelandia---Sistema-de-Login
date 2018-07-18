<?php
    // Na área restrita, é necessário se fazer o teste de sessão.
    session_start();
    
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) // Testando se o ID é válido.
    {
        echo "Área Restrita..."; // Se o ID for válido, loga.
    }
    else
    {
        header("Location: index.php"); // Se não, volta pra página de login.
    }





