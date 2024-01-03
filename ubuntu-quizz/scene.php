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
                                    <h4 class="mb-0 text-center p-3">Qual o significado da sigla PHP</h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 mark-button text-center" id="div1" onmousemove="mark_select('div1')" onmouseleave="desmark_select('div1')">
                                    <h6 class="mb-0">PHP Hypertext-Processor.</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 text-center" id="div2" onmousemove="mark_select('div2')" onmouseleave="desmark_select('div2')">
                                    <h6 class="mb-0">PHP Hypertext-Processor.</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 text-center" id="div3" onmousemove="mark_select('div3')" onmouseleave="desmark_select('div3')">
                                    <h6 class="mb-0">PHP Hypertext-Processor.</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 text-center" id="div4" onmousemove="mark_select('div4')" onmouseleave="desmark_select('div4')">
                                    <h6 class="mb-0">PHP Hypertext-Processor.</h6>
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
    
        function mark_select(id_div){
            let div = document.getElementById(id_div)
            div.style.backgroundColor = "red"
            div.style.cursor = "pointer"
        }

        function desmark_select(id_div){
            let div = document.getElementById(id_div)
            div.style.backgroundColor = "#fff"
        }

        function end_game(){
            window.document.location.href = "index.php"
        }
    </script>
</body>

</html>