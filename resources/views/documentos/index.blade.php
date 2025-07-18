
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Documentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portal.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid"> <a class="navbar-brand ms-4" href="#">Navbar</a> <button class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-4"> <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown link </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Cerrar Session</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <h1 class="text-center mb-4">Consulta de Documentos</h1>
        <div class="row mb-3">
            <div class="col-md-5"> <label for="bimestreSelect" class="form-label">Bimestre</label> <select
                    id="bimestreSelect" name="bimestre" class="form-select">
                    <option value="">-- Selecciona un bimestre --</option>
                    <option value="bimestre1">Bimestre 1</option>
                    <option value="bimestre2">Bimestre 2</option>
                    <option value="bimestre3">Bimestre 3</option>
                    <option value="bimestre4">Bimestre 4</option>
                    <option value="bimestre5">Bimestre 5</option>
                    <option value="bimestre6">Bimestre 6</option>
                </select> <label for="yearSelect" class="form-label mt-4">Año</label> <select id="yearSelect"
                    name="year" class="form-select">
                    <option value="">-- Selecciona un año --</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                </select> </div>
            <div class="text-start mt-4 "> <button type="button" class="btn btn-primary">Buscar</button> </div>
            <div>
                <h3 class="text-center mt-3">Agregar Archivo</h3>
                <p class="mt-3">Agrega el archivo correspondiente, tamaño máximo.</p> <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"> <button class="nav-link active" id="pdf-tab"
                            data-bs-toggle="tab" data-bs-target="#pdf" type="button" role="tab" aria-controls="pdf"
                            aria-selected="true">PDF</button> </li>
                    <li class="nav-item" role="presentation"> <button class="nav-link" id="excel-tab"
                            data-bs-toggle="tab" data-bs-target="#excel" type="button" role="tab" aria-controls="excel"
                            aria-selected="false">Excel</button> </li>
                </ul> <!-- Tab panes -->
                <div class="tab-content p-3 border border-top-0">
                    <div class="tab-pane fade show active" id="pdf" role="tabpanel" aria-labelledby="pdf-tab">
                        <form>
                            <div class="mb-3"> <label for="formFilePdf" class="form-label">Seleccionar archivo
                                    PDF</label> <input class="form-control" type="file" id="formFilePdf"
                                    accept="application/pdf"> </div> <button type="submit" class="btn btn-success">Subir
                                PDF</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="excel" role="tabpanel" aria-labelledby="excel-tab">
                        <form>
                            <div class="mb-3"> <label for="formFileExcel" class="form-label">Seleccionar archivo
                                    Excel</label> <input class="form-control" type="file" id="formFileExcel"
                                    accept=".xlsx,.xls"> </div> <button type="submit" class="btn btn-success">Subir
                                Excel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>