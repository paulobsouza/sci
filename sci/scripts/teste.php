<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="fa/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
        ::-webkit-input-placeholder {
            color: #db6c0b;
        }

        input {
            outline: 0;
            color: #db6c0b;
        }

        #btn:hover {
            color: #db6c0b !important;
        }
    </style>
</head>

<body style="background-color: rgb(0,150,136);">
    <img id="logo" src="ceara.png" style="margin-top: 80px;width: 400px;transform: translateX(-42%);position: relative;left: 50%;">
    <center style="margin-top: 40px;">
        <form method="POST" action="" class="w3-container w3-card-4 w3-light-grey w3-margin" style="color: #db6c0b !important;width: 35%;border-radius: 10px">
            <h2 class="w3-center">Login</h2>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                    <input style="height: 30px" required="" autocomplete="off" class="w3-input w3-border" name="username" type="text" placeholder="Usuário">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
                <div class="w3-rest">
                    <input style="height: 30px" required="" class="w3-input w3-border" name="pwd" type="password" placeholder="Senha">
                </div>
            </div>

            <p class="w3-center">
                <button id="btn" name="btn" class="w3-button w3-section w3-ripple" style="background: transparent !important;color: #db6c0b;border:solid 1px #db6c0b;border-radius: 5px"> Entrar </button>
            </p>
        </form>
    </center>


</body>

</html>