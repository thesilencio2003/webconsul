<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-md-6 d-none d-md-block image-side"></div>
            <div class="col-md-6 login-container">
                <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-end mb-5"> <a class="btn " href="/empresa">Empresa</a>
                    </div>
                    <h2 class="mb-4 text-center">Ingresa al portal</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Usuario</label>
                            <input type="email" class="form-control f2 " id="email" placeholder="123.456.789-1">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">CONTRASEÑA</label>
                            <input type="password" class="form-control f2" id="password" placeholder="Contraseña">
                        </div>
                        <a href="portal-admin.html" class="btn btn-primary w-100">Entrar</a>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
</body>

</html>