


    
@extends('layouts.master')
   <div class="container">
   @section('content')

    <!-- @include('layouts.post') -->

<div class="col-sm-8 blog-main">

@foreach ($posts as $post)

@include('posts.article')

@endforeach



</div>

      

@endsection


  