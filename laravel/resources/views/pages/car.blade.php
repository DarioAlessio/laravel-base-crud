@extends('layouts.main-layout')

@section('content')

  <h1>C A R</h1>

  <li>
    {{$car -> id}}/
    {{$car -> name}}/
    {{$car -> model}}/
    {{$car -> price}}/
    {{$car -> consumption}}
  </li>

@endsection
