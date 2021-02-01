@extends('layouts.main-layout')

@section('content')

  <h1>CARS</h1>
     @foreach ($cars as $car)

       <a href="{{ route ('car-show',$car -> id)}}">

         {{$car -> name}} 
         {{$car -> model}}/

       </a>

     @endforeach
@endsection
