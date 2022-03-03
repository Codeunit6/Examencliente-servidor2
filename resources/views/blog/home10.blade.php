@extends('template.layaoutindex')
@section('head')
<header class="masthead" style="background-image: url('assets/img/portadas/Unidad2-8.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Bienvenido a la unidad II</h1>
                    <span class="subheading">Hecha por Fernando y Eduardo</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('info')
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <a href="{{route('unidad2-13')}}">
                    <h2 class="post-title">{{$informacion->titulo}}</h2>
                    <h3 class="post-subtitle">{{$informacion->unidad}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$informacion->autor}}</a>
                    en {{$informacion->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />            
            <a href="{{route('unidad2-14')}}">
                    <h2 class="post-title">{{$informacion2->titulo}}</h2>
                    <h3 class="post-subtitle">{{$informacion2->unidad}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$informacion2->autor}}</a>
                    en {{$informacion2->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <a href="{{route('unidad2-15')}}">
                    <h2 class="post-title">{{$informacion3->titulo}}</h2>
                    <h3 class="post-subtitle">{{$informacion3->unidad}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$informacion3->autor}}</a>
                    en {{$informacion3->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview--><div class="post-preview">
            <img class="img-fluid" src="assets/img/tema1-1.jpg" alt="..." style="width: 100%" />
                <a href="{{route('unidad2-16')}}">
                    <h2 class="post-title">{{$informacion4->titulo}}</h2>
                    <h3 class="post-subtitle">{{$informacion4->unidad}}</h3>
                </a>
                <p class="post-meta">
                    Posteado por
                    <a href="{{route('about')}}">{{$informacion4->autor}}</a>
                    en {{$informacion4->fecha}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="row">
                    <div class="col-sm">
                        <div class="d-flex justify-content-start">
                            <a class="btn btn-primary text-uppercase justify-content-start" href="{{route('home9')}}">🠔 Anterior tema</a>
                        </div>
                    </div>
    
                    <div class="col-sm">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary text-uppercase" href="{{route('home11')}}">Siguiente tema →</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection