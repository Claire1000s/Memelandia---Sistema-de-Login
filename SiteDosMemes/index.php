<!DOCTYPE html>

<html lang="pt-br">
    <head>
	<meta charset="UTF-8" />
	<title>Memelândia - O Melhor site de Memes do Brasil!</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body background="images/bg.jpg">
	<header>
            <div id="cabecalho">
		<img id="img_logo" src="images/logo.png" width="20%"/>
            </div>
	</header>
	<div id="formulario">
            <form id="form_memes" method="POST" action="validator.php">
		<center>
		<label>Login</label><br />
		<input type="email" name="email" size="30" />
		<br />
		<label>Senha</label><br />
		<input type="password" name="senha" size="15" />
		</center>
		<br /><br />
		<button type="submit" id="bt_entrar" value="entrar">ENTRAR!</button>
            </form>
	</div>
    </body>
</html>