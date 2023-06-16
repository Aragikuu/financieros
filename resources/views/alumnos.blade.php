@extends('layaout.master')
@section('content')
<div class="t">Alumnos</div>
<div class="marco">
    <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th data-priority="1" class="boder-inicio ">Nombres</th>
                <th data-priority="2">Apellido P.</th>
                <th data-priority="3">Apellido M.</th>
                <th data-priority="4">CURP</th>
                <th data-priority="5">NSS</th>
                <th data-priority="6">Grado</th>
                <th data-priority="7">Grupo</th>
                <th data-priority="8">Carrera</th>
                <th data-priority="9">Matricula</th>
                <th data-priority="10">Tutor</th>
                <th data-priority="11">Telefono</th>
                <th data-priority="12">Direccion</th>
                <th data-priority="13" class="boder-fin">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Oscar Aldair</td>
                <td>Matu</td>
                <td>Miranda</td>
                <td>123456789012345678</td>
                <td>1234567890123</td>
                <td>4</td>
                <td>A</td>
                <td>Tics</td>
                <td>20212299</td>
                <td>Julia Marizol Miranda Osorio</td>
                <td>9881054669</td>
                <td>Calle35x42y44</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>Smith</td>
                <td>987654321098765432</td>
                <td>9876543210987</td>
                <td>3</td>
                <td>B</td>
                <td>Engineering</td>
                <td>20212298</td>
                <td>Jane Smith</td>
                <td>1234567890</td>
                <td>123 Main St</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
            <tr>
                <td>Sophia</td>
                <td>Garcia</td>
                <td>Mendoza</td>
                <td>987654321012345678</td>
                <td>9876543210123</td>
                <td>3</td>
                <td>C</td>
                <td>Business Administration</td>
                <td>20223333</td>
                <td>Carlos Rodriguez</td>
                <td>9876543211</td>
                <td>Avenida Principal #123</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
            <tr>
                <td>Emma</td>
                <td>Rivera</td>
                <td>Lopez</td>
                <td>123456789012345678</td>
                <td>1234567890123</td>
                <td>4</td>
                <td>A</td>
                <td>Engineering</td>
                <td>20214444</td>
                <td>Miguel Torres</td>
                <td>9881054669</td>
                <td>Calle 10, Av. Principal</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Liam</td>
                <td>Hernandez</td>
                <td>Gomez</td>
                <td>987654321023456789</td>
                <td>9876543210345</td>
                <td>3</td>
                <td>B</td>
                <td>Psychology</td>
                <td>20215555</td>
                <td>Sofia Perez</td>
                <td>9876543212</td>
                <td>Calle 20, Av. Libertad</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Ava</td>
                <td>Gonzalez</td>
                <td>Rodriguez</td>
                <td>123456789045678912</td>
                <td>1234567890567</td>
                <td>2</td>
                <td>A</td>
                <td>Marketing</td>
                <td>20216666</td>
                <td>David Sanchez</td>
                <td>9881054777</td>
                <td>Calle 15, Av. Independencia</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Noah</td>
                <td>Rodriguez</td>
                <td>Lopez</td>
                <td>987654321056789012</td>
                <td>9876543210678</td>
                <td>5</td>
                <td>C</td>
                <td>Political Science</td>
                <td>20217777</td>
                <td>Isabella Garcia</td>
                <td>9876543213</td>
                <td>Calle 25, Av. Bolivar</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Isabella</td>
                <td>Lopez</td>
                <td>Rodriguez</td>
                <td>123456789078912345</td>
                <td>1234567890890</td>
                <td>4</td>
                <td>B</td>
                <td>Education</td>
                <td>20218888</td>
                <td>Sebastian Martinez</td>
                <td>9881054888</td>
                <td>Calle 30, Av. Venezuela</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Sophia</td>
                <td>Sanchez</td>
                <td>Gomez</td>
                <td>987654321089012345</td>
                <td>9876543210901</td>
                <td>3</td>
                <td>A</td>
                <td>Art</td>
                <td>20219999</td>
                <td>Lucas Fernandez</td>
                <td>9876543214</td>
                <td>Calle 40, Av. Italia</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Mia</td>
                <td>Perez</td>
                <td>Garcia</td>
                <td>123456789012309876</td>
                <td>1234567890124</td>
                <td>2</td>
                <td>A</td>
                <td>Nursing</td>
                <td>20220000</td>
                <td>Diego Hernandez</td>
                <td>9881054999</td>
                <td>Calle 50, Av. España</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Oliver</td>
                <td>Flores</td>
                <td>Castillo</td>
                <td>987654321012345670</td>
                <td>9876543210125</td>
                <td>5</td>
                <td>B</td>
                <td>Architecture</td>
                <td>20221111</td>
                <td>Valeria Ramirez</td>
                <td>9876543215</td>
                <td>Calle 60, Av. Francia</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>William</td>
                <td>Ortega</td>
                <td>Lopez</td>
                <td>123456789034567891</td>
                <td>1234567890234</td>
                <td>4</td>
                <td>C</td>
                <td>Journalism</td>
                <td>20222222</td>
                <td>Valentina Herrera</td>
                <td>9881055111</td>
                <td>Calle 70, Av. Colombia</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

            <tr>
                <td>Evelyn</td>
                <td>Romero</td>
                <td>Mendoza</td>
                <td>987654321045678910</td>
                <td>9876543210126</td>
                <td>3</td>
                <td>A</td>
                <td>Biology</td>
                <td>20223333</td>
                <td>Luis Gomez</td>
                <td>9876543216</td>
                <td>Calle 80, Av. Brasil</td>
                <td>
                    <button class="btn-edit"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>

        </tbody>
    </table>
</div>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: {
                details: {
                    type: 'column',
                    target: -1 // Última columna (ACCIONES) se ocultará en pantallas pequeñas
                }
            },
            columnDefs: [{
                className: 'control',
                orderable: false,
                targets: -1 // Última columna (ACCIONES) no se ordenará
            }],
            "lengthMenu": [6, 10, 25, 50], // Configurar las opciones de cantidad de filas por página
            "pageLength": 6 // Establecer el número de filas por página por defecto
        });
    });
</script>
@endsection