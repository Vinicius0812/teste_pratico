<!DOCTYPE html>
<html lang="pt-br">
<head>
    <body>
    <div class="content">
        <h1>Login</h1>

        <form name="frm_cad_usuarios" action="login.php" method="post">
            <p>Email: <input type="text" name="email" size="30"></p><br/><br/>
            <p>Senha: <input type="password" name="senha" size="10"></p><br/><br/>
            <input type="submit" value="Logar" name="entrar"/><br/><br/><br/>
            <a href="cadastro.php">Não tenho uma conta</a>
        </form>
    </div>
<style>
    .content{
        width: 500px;
        min-height: 560px;    
        margin: 100px auto;
        position: relative;  
        background-color: #c0c6c8;  
    }

    h1{
        font-size: 48px;
        color: #660000;
        padding: 2px 0 10px 0;
        font-family: Arial,sans-serif;
        font-weight: bold;
        text-align: center;
        padding-bottom: 30px;
    }

    p{
        margin-bottom:1px;
        color: #660000;
    }
    
    label{
        color: #405c60;
        position: relative;
    }
    
    input[type="submit"]{
        width: 100%!important;
        cursor: pointer;  
        background: #660000;
        padding: 8px 5px;
        color: #fff;
        font-size: 20px;  
        border: 1px solid #fff;   
        margin-bottom: 10px;  
        text-shadow: 0 1px 1px #333;
        
        -webkit-border-radius: 5px;
        border-radius: 5px;
        
        transition: all 0.2s linear;
    }

    a{
        text-decoration: none;
    }
    
    a.links{
        display: none;
    }

    a:link {
        width: 100%;
        cursor: pointer;  
        background: #fff;
        padding: 8px 5px;
        color: #660000;
        font-size: 20px;  
        border: 1px solid #660000;   
        margin-bottom: 10px;
        
        transition: all 0.2s linear;
    }

    a:visited {
        width: 100%;
        cursor: pointer;  
        background: #fff;
        padding: 8px 5px;
        color: #660000;
        font-size: 20px;  
        border: 1px solid #660000;   
        margin-bottom: 10px;
        
        transition: all 0.2s linear;
        text-align: center;
    }

    a:hover {
        width: 100%!important;
        cursor: pointer;  
        background: #660000;
        padding: 8px 5px;
        color: #fff;
        font-size: 20px;  
        border: 1px solid #fff;   
        margin-bottom: 10px;  
        text-shadow: 0 1px 1px #333;
        
        transition: all 0.2s linear;
    }

    a:active {
        width: 100%!important;
        cursor: pointer;  
        background: #660000;
        padding: 8px 5px;
        color: #fff;
        font-size: 20px;  
        border: 1px solid #fff;   
        margin-bottom: 10px;  
        text-shadow: 0 1px 1px #333;
        
        transition: all 0.2s linear;
    }

</style>
    </body>
</head>
</html>