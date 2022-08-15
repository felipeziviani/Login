
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Valida login e senha</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-login">
        <form id="form1" name="form1" method="post" action="login2.php">  
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                         <label for="Usuario">Usuário</label>
                        <input name="login" type="text" id="login" placeholder="Usuário"/>
                    </div>
                    <div class="textfield">
                        <label for="Senha">Senha</label>
                        <input name="senha" type="password" id="senha" placeholder="Senha"/>
                    </div>
                    <button class="btn-login">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>