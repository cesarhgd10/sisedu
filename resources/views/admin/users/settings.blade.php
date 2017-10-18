@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Editar meu perfil de usuário</h1>
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                {!! form($form->add('insert', 'submit', [
                'attr' => ['class' => 'btn btn-primary btn-block'],
                'label' => 'Salvar'
                ])) !!}
            </div>
        </div>
    </div>
@endsection