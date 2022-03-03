@extends('template.layaoutposteo')
@section('head')
{{$informacion->titulo}}
@endsection
@section('header')
<header class="masthead" style="background-image: url('assets/img/portadas/Unidad2-14.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{$informacion->titulo}}</h1>
                    <h2 class="subheading">{{$informacion->subtitulo}}</h2>
                    <span class="meta">
                        Posteado por
                        <a href="{{route('about')}}">{{$informacion->autor}}</a>
                        en {{$informacion->fecha}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('contenido')
{{!!$informacion->contenido!!}}
@endsection