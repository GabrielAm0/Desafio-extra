<?php
include_once "head.php";
?>
<link rel="shortcut icon" href="/Desafio/assets/img/favicon-login.ico" type="image/x-icon">
<link rel="stylesheet" href="../assets/style/style.css">
<title>Registre-se</title>

<body>
    <div class="fundo-login">
        <div class="container main">
            <div class="row1">
                <div class="col-md-6 side-image-regist color-fundo">
                    <img class="logo-login" src="/Desafio/assets/img/logo.png" alt="logo_login">
                    <div class="text-login">
                        <p>Grupo Confiança<br><i>- Powered by <a class="text-decoration0" href="#">AgroBold</a></i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <form class="form-regist" method="post">

                        <div class="input-box">
                            <header>Registre-se</header>
                            <div class="input-field">
                                <input type="text" class="input" id="email" required autofocus>
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" required>
                                <label for="password">Senha</label>
                            </div>
                            <div class="input-field">
                                <button type="submit" class="text-center btn submit" value="Reg">Registrar</button>
                    </form>
                </div>
                <div class="signin">
                    <span>Já possui conta?<a class="ms-2" href="http://localhost/Desafio/login">Faça login</a></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>