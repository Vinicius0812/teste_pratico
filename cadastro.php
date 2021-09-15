<div class="content">
<h1>Criar Usuário</h1>
<form enctype="multipart/form-data" name="frm_cad_usuarios" action="cadastrar.php" method="post">
    <p>Nome: <input type="text" name="nome" size="30"></p><br/>
    <p>Email: <input type="text" name="email" size="30"></p><br/>
    <p>Senha: <input type="password" name="senha" size="30"></p><br/>
    <p>Confirmar Senha: <input type="password" name="conf_senha" size="19"></p><br/><br/>
    <input type="submit" value="Cadastrar" />
</form>
<br/><br/>
    <a href="index.php">Voltar para tela de login</a>
    </div>
<style>
    .content{
        width: 500px;
        min-height: 560px;    
        margin: 100px auto;
        position: relative;  
        background-color: #c0c6c8;  
        padding: 20px;
        border-radius: 4px;
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
        border-color: #660000;
        -webkit-border-radius: 5px;
        border-radius: 5px;
        
        transition: all 0.2s linear;
    }

    a{
        text-decoration: none;
        border-radius: 4px;
        width: 100%;
        cursor: pointer;  
        background: #fff;
        padding: 8px 5px;
        font-size: 20px;  
    }
    
    a.links{
        display: none;
    }

    a:link {
        color: #660000;
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

