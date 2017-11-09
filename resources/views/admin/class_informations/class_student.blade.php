@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h3>Adiministração de alunos na turma</h3>
      {{--@php dd($class_information->id) @endphp--}}
      <class-student class-information="{{$class_information->id}}"></class-student>
    </div>
@endsection