<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Valida login e senha</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
        <div class='msg-login'>
            <?PHP
                $login = $_POST["login"];
                $senha = $_POST["senha"];
            
                if ($login == "aluno" && $senha == "etec")
                {
                    echo "<div class='alert-success'>Acesso permitido!</div> ";
                }
                else
                {
                    
                    echo "<div class='alert-anger' >Acesso negado!</div> ";
                }
            ?>     
        </div>     
    </body>
</html>
