<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.seduc.ce.gov.br/wp-content/themes/ceara2017/favicon.ico" type="image/x-png">
    <link rel="shortcut icon" href="https://www.seduc.ce.gov.br/wp-content/themes/ceara2017/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.seduc.ce.gov.br/wp-content/themes/ceara2017/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title> SCI - Sistema de Controle de Impressões </title>
</head>

<style>
    #setor {
        display: flex;
        justify-content: center;
    }

    .child {
        width: 225;
        height: 189px;
        background-color: white;
        border: 1px black solid;
        justify-content: center;
    }
</style>

<body>
    <div class="container">
        <div class="row py-2">
            <div class="col">
                <header>
                    <div id="data-hora"></div>
                    <script>
                        const zeroFill = n => {
                            return ('0' + n).slice(-2);
                        }
                        const interval = setInterval(() => {
                            const now = new Date();
                            const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());
                            document.getElementById('data-hora').innerHTML = dataHora;
                        }, 1000);
                        const options = {
                            timeZone: 'America/Fortaleza',
                            hour: 'numeric',
                            minute: 'numeric'
                        };
                        const date = new Intl.DateTimeFormat([], options);
                        console.log(date.format(new Date()));
                    </script>
            </div>
                </header>
        </div>
    </div>
    </div>
    <center>
        <h2> SCI </h2>
        <hr>
    </center>
    <center>
        <h3> Qual setor você deseja acessar? </h4>
    </center>
    <hr>
    <div class="container" id="setor">
        <div class="child"> <a href="view/gabinete.php"> <img src="img/gabinete_icon.png" width="225" height="187.5"> </a> </div> 
        <div class="child"> <a href="view/cegaf.php"> <img src="img/cegaf_icon.png" width="225" height="187.5"> </a> </div>
        <div class="child"> <a href="view/cedea.php"><img src="img/cedea_icon.png" width="225" height="187.5"> </a> </div>
        <div class="child"> <a href="view/cecom.php"> <img src="img/cecom_icon.png" width="225" height="187.5"> </a> </div>
    </div>
    <div class="container" id="setor">
        <div class="child"> <a href="view/rh.php"> <img src="img/rh_icon.png" width="225" height="187.5"> </a> </div>
        <div class="child"> <a href="view/ti.php"> <img src="img/ti_icon.png" width="225" height="187.5"> </a> </div>
        <div class="child"> <a href="view/outros.php"> <img src="img/outros_icon.png" width="225" height="187.5"> </a> </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>