<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9" />
    <title>@yield('title')Inicio</title>
    <link rel="icon" type="image/png" href="otros/path4490.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/datatable.css">
</head>

<body>
    <nav>
        <a href="#">Inicio</a>
        <a href="xml">xml</a>
        <a href="alumnos">Alumnos</a>
        <label class="switch">
            <input type="checkbox" id="mode-switch">
            <span class="slider"></span>
        </label>
        <a href="#"><i class="fa-solid fa-right-from-bracket"></i></a>
    </nav>
    <div class="contenido">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://kit.fontawesome.com/c892f5f399.js" crossorigin="anonymous"></script>
    <script src="js/master.js"></script>
    @yield('scripts')
</body>
<script>
    // Obtener el elemento del interruptor de modo
    const modeSwitch = document.querySelector('#mode-switch');

    // Escuchar el evento de cambio de interruptor de modo
    modeSwitch.addEventListener('change', toggleMode);

    // Función para cambiar el modo
    function toggleMode() {
        const body = document.querySelector('body');

        // Si se activa el modo oscuro, agregar la clase 'dark-mode' al cuerpo
        if (modeSwitch.checked) {
            body.classList.add('dark-mode');
        } else {
            // Si se desactiva el modo oscuro, quitar la clase 'dark-mode' del cuerpo
            body.classList.remove('dark-mode');
        }
    }
</script>

</html>