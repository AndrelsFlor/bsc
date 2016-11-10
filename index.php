<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="snippet.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    BSC</p>
                <form class="login" id="formLogin" action="main.php" method="POST">
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Senha" name="senha" />
                <input type="submit" value="Entrar" class="btn btn-success btn-sm" />
                <input type="hidden" name="acao" value="loginUser">
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
   
</div>



</body>
</html>