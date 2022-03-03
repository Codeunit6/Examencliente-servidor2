@extends('template.layaoutindex')
@section('head')
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BUENAS INVESTIGACIONES</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/tabla.css" rel="stylesheet" />
    </head>
<header class="masthead" style="background-image: url('../assets/img/basedata.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Base de datos programador</h1>
                    <span class="subheading">Hecha por Fernando y Eduardo</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('info')
<div class="container containerr">
        <table class="table table-bordered order-table" id="regTable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Unidad</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">contenido</th>
                </tr>
            </thead>
            <tbody id="tab">
            @foreach($informacion as $inf)
            <tr>
            <td>{{$inf->id}}</td>
            <td>{{$inf->unidad}}</td>
            <td>{{$inf->titulo}}</td>
            <td>{{$inf->subtitulo}}</td>
            <td>{{$inf->autor}}</td>
            <td>{{$inf->fecha}}</td>
            <td>{{$inf->contenido}}</td>
            </tr>
            </tbody>
            @endforeach

        </table>
    </div>
@endsection