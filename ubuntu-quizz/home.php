<?php
// Check if this page was accessed by index
if (!defined(CONTROLE)) {
    header("Location: 403page.php");
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Home - UbuntuQuizz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <div class="container">
        <div class="main-body">

            <div class="row gutters-sm">

                <div class="col-md-8 offset-md-2 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>Caascii Africano</h4>
                                    <p class="text-secondary mb-1">Back End Developer</p>
                                    <p class="text-muted font-size-sm">Luanda, Angola</p>
                                    <button class="btn btn-primary" onclick="execute_game()">Play</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg>Github</h6>
                                <span class="text-secondary"><a target="_blank" href="https://www.github.com/caasciiafricano">Carlos Teca Avelino</a></span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary"><a target="_blank" href="https://www.facebook.com/profile.php?id=100082279838992">Carlos Avelino</a></span>
                            </li>
                        </ul>
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
        function execute_game(){
            window.document.location.href = "scene.php"
        }
    </script>
</body>

</html>