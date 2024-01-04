<?php
    require_once "lib/KaasConnectionDB/config/config.php";
    require_once "lib/KaasConnectionDB/lib/kaasConnectionDB.php";
    
    $bd = new KaasConnectionDB();

    // Recovering the data length
    $quant = $bd->select("SELECT COUNT(*) AS tamanho FROM tb_perguntas;")[0]['tamanho'];

    #echo($quant); die("testado!!!");

    // Generating rand number
    $aleatorio = (rand(1,$quant));
    echo $aleatorio;

    $resultado = $bd->select("SELECT R.id, P.pergunta, R.resposta FROM tb_perguntas AS P 
                              INNER JOIN tb_respostas AS R ON R.pergunta_id = '".$aleatorio."'  
                              INNER JOIN tb_niveis AS N ON P.nivel_id = N.id
                              WHERE P.id = '".$aleatorio."' ORDER BY RAND()");

    #echo "<pre>";
    #print_r($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Game - UbuntuQuizz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <div class="container">
        <div class="main-body">

            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <div class="col-md-12 text-center mb-2">
                    <button class="btn-danger" onclick="end_game()">End Game</button>
                </div>
            </nav>

            <div class="row gutters-sm">

                <div class="col-md-8 offset-md-2">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="mb-0 text-center p-3"><?php echo $resultado[0]['pergunta'] ?></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 mark-button text-center" id="div1" onmousemove="mark_select('div1')" onmouseleave="desmark_select('div1')">
                                    <a href="check_response.php?respota_escolhida=<?= $resultado[0]['id'] ?>">
                                        <h6 class="mb-0"><?php echo $resultado[0]['resposta'] ?></h6>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 text-center" id="div2" onmousemove="mark_select('div2')" onmouseleave="desmark_select('div2')">
                                    <a href="check_response.php?respota_escolhida=<?= $resultado[1]['id'] ?>">
                                    <h6 class="mb-0"><?php echo $resultado[1]['resposta'] ?></h6>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 text-center" id="div3" onmousemove="mark_select('div3')" onmouseleave="desmark_select('div3')">
                                    <a href="check_response.php?respota_escolhida=<?= $resultado[2]['id'] ?>">
                                    <h6 class="mb-0"><?php echo $resultado[2]['resposta'] ?></h6>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 text-center" id="div4" onmousemove="mark_select('div4')" onmouseleave="desmark_select('div4')">
                                    <a href="check_response.php?respota_escolhida=<?= $resultado[3]['id'] ?>">
                                    <h6 class="mb-0"><?php echo $resultado[3]['resposta'] ?></h6>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function mark_select(id_div) {
            let div = document.getElementById(id_div)
            div.style.backgroundColor = "red"
            div.style.cursor = "pointer"
        }

        function desmark_select(id_div) {
            let div = document.getElementById(id_div)
            div.style.backgroundColor = "#fff"
        }

        function end_game() {
            window.document.location.href = "index.php"
        }
    </script>
</body>

</html>