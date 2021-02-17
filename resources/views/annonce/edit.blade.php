@extends('layouts/master', ['title' => "Help"])


@section('content')

<!-- show errors here -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>{{ __('Edit') }} {{ $entity->ref_annonce }}</h1>

<form method="POST" action="/annonce/{{ $entity->id }}">
    @method('PUT')
    @csrf

    @php ( $entityArray = $entity->toArray() )
    

    <input type="text" id="ref_annonce" name="ref_annonce" maxlength=20 required value="{{ $entityArray['ref_annonce'] }}">

    <input type="text" id="prix_annonce" name="prix_annonce" value="{{ $entityArray['prix_annonce'] }}">

    <input type="text" id="surface_habitable" name="surface_habitable" value="{{ $entityArray['surface_habitable'] }}">

    <input type="number" id="nombre_de_piece" name="nombre_de_piece" value="{{ $entityArray['nombre_de_piece'] }}">

    <input type="submit" value="{{ __('Submit') }}" class="btn btn-primary">
    
</form>

@endsection