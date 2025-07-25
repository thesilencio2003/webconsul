<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarga de Documentos Empresariales</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 40px;
            margin-bottom: 40px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .header {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .user-info {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 25px;
        }

        .document-item {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .document-item:hover {
            background-color: #f1f1f1;
        }

        /* New style to make buttons closer */
        .document-actions .btn {
            margin-left: 8px;
            /* Adds a small space between buttons */
        }

        .document-actions .btn:first-child {
            margin-left: 0;
            /* Ensures the first button doesn't have left margin */
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
        <div class="container-fluid"> <a class="navbar-brand ms-4" href="#">Navbar</a> <button class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-4"> <a class="nav-link dropdown-toggle" href="" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Dropdown link </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/empresa">Cerrar Session</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="header text-center">
            <h1 class="mb-3">Descarga de Documentos Empresariales</h1>
            <p class="lead">Accede a tus documentos filtrando por bimestre y año.</p>
        </div>

        <div class="user-info">
            <h5>Bienvenido/a: <span id="userName">Nombre del Usuario</span></h5>
            <p><strong>Rol:</strong> <span id="userRole">Administrador</span></p>
            <p><strong>Último Acceso:</strong> <span id="lastLogin">24 de Julio de 2025, 10:30 AM</span></p>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <label for="bimestreFilter" class="form-label">Filtrar por Bimestre:</label>
                <select class="form-select" id="bimestreFilter">
                    <option value="">Todos los Bimestres</option>
                    <option value="1">Bimestre 1 (Ene-Feb)</option>
                    <option value="2">Bimestre 2 (Mar-Abr)</option>
                    <option value="3">Bimestre 3 (May-Jun)</option>
                    <option value="4">Bimestre 4 (Jul-Ago)</option>
                    <option value="5">Bimestre 5 (Sep-Oct)</option>
                    <option value="6">Bimestre 6 (Nov-Dic)</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="yearFilter" class="form-label">Filtrar por Año:</label>
                <select class="form-select" id="yearFilter">
                    <option value="">Todos los Años</option>
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button class="btn btn-primary w-100" id="applyFilters">Aplicar Filtros</button>
            </div>
        </div>

        <h3>Documentos Disponibles</h3>
        <div id="documentList">
            <div class="document-item" data-bimestre="4" data-year="2025">
                <div>
                    <h5>Informe de Ventas Q2 2025</h5>
                    <p class="mb-0 text-muted">Fecha: 15/07/2025 | Tipo: PDF</p>
                </div>
                <div class="document-actions">
                    <a href="#" class="btn btn-info btn-sm preview-btn" data-bs-toggle="modal"
                        data-bs-target="#previewModal">Vista Previa</a>
                    <a href="#" class="btn btn-success btn-sm">Descargar</a>
                </div>
            </div>
            <div class="document-item" data-bimestre="3" data-year="2025">
                <div>
                    <h5>Acta de Reunión Junta Directiva - Mayo 2025</h5>
                    <p class="mb-0 text-muted">Fecha: 20/05/2025 | Tipo: DOCX</p>
                </div>
                <div class="document-actions">
                    <a href="#" class="btn btn-info btn-sm preview-btn" data-bs-toggle="modal"
                        data-bs-target="#previewModal">Vista Previa</a>
                    <a href="#" class="btn btn-success btn-sm">Descargar</a>
                </div>
            </div>
            <div class="document-item" data-bimestre="6" data-year="2024">
                <div>
                    <h5>Balance Anual 2024</h5>
                    <p class="mb-0 text-muted">Fecha: 10/01/2025 | Tipo: PDF</p>
                </div>
                <div class="document-actions">
                    <a href="#" class="btn btn-info btn-sm preview-btn" data-bs-toggle="modal"
                        data-bs-target="#previewModal">Vista Previa</a>
                    <a href="#" class="btn btn-success btn-sm">Descargar</a>
                </div>
            </div>
            <div class="document-item" data-bimestre="2" data-year="2025">
                <div>
                    <h5>Reporte Financiero Bimestre 2 2025</h5>
                    <p class="mb-0 text-muted">Fecha: 30/04/2025 | Tipo: XLSX</p>
                </div>
                <div class="document-actions">
                    <a href="#" class="btn btn-info btn-sm preview-btn" data-bs-toggle="modal"
                        data-bs-target="#previewModal">Vista Previa</a>
                    <a href="#" class="btn btn-success btn-sm">Descargar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Vista Previa del Documento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="height: 400px; border: 1px solid #ccc; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #666;">
                        Contenido de la vista previa del documento (vacío por ahora)
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Simulate fetching user data (in a real application, this would come from a backend)
            const userData = {
                name: "Juan Pérez",
                role: "Gerente de Proyectos",
                lastLogin: "24 de Julio de 2025, 10:30 AM"
            };

            document.getElementById('userName').textContent = userData.name;
            document.getElementById('userRole').textContent = userData.role;
            document.getElementById('lastLogin').textContent = userData.lastLogin;

            const bimestreFilter = document.getElementById('bimestreFilter');
            const yearFilter = document.getElementById('yearFilter');
            const applyFiltersButton = document.getElementById('applyFilters');
            const documentList = document.getElementById('documentList');
            const documentItems = document.querySelectorAll('.document-item');

            applyFiltersButton.addEventListener('click', function () {
                const selectedBimestre = bimestreFilter.value;
                const selectedYear = yearFilter.value;

                documentItems.forEach(item => {
                    const itemBimestre = item.getAttribute('data-bimestre');
                    const itemYear = item.getAttribute('data-year');

                    const matchesBimestre = selectedBimestre === '' || itemBimestre === selectedBimestre;
                    const matchesYear = selectedYear === '' || itemYear === selectedYear;

                    if (matchesBimestre && matchesYear) {
                        item.style.display = 'flex'; // Show the item
                    } else {
                        item.style.display = 'none'; // Hide the item
                    }
                });
            });

            // Agrega el evento para abrir el modal al hacer clic en "Vista Previa"
            const previewButtons = document.querySelectorAll('.preview-btn');
            previewButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Aquí puedes añadir lógica para cargar el contenido real del documento
                    // Por ahora, el modal mostrará el recuadro vacío
                    console.log('Botón de Vista Previa clicado.');
                });
            });
        });
    </script>
</body>

</html>