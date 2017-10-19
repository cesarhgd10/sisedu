@extends ('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
     @component('admin.users.tabs-component', ['user' => $form->getModel()])
        <h1>Editar perfil</h1>
        @php $icon = Icon::create('pencil'); @endphp
        {!!
          form($form->add('salve', 'submit', [
            'attr' => ['class' => 'btn btn-primary btn-block'],
            'label' => $icon
          ]))
        !!}
     @endcomponent
    </div>
  </div>
@endsection