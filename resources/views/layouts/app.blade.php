<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        h1,table,th, td, text,label {
            color: #16c809;
            border: 1px solid #16c809;
            border-collapse: collapse;
            text-align: center;
            align-content: center;
        }
    </style>
    <title>Proyecto</title>
</head>
<body>
    <a href="{{ route('students.index') }}">Listar Alumnos</a>
    <a href="{{ route('student.create') }}">Registrar Alumno</a>
    @yield('content')
</body>
</html>