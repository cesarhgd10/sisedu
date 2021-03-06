@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @component('admin.users.tabs-component', ['user' => $form->getModel()])
                <h1 class="text-center">Editar Usuário</h1>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    {!! form($form->add('insert', 'submit', [
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => 'Editar'
                    ])) !!}
                </div>
            @endcomponent
        </div>
    </div>
@endsection