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

@php ( $oldInput = Session::getOldInput() )

<h1>{{ __('Create an advert') }}</h1>

<form method="POST" action="/annonce">
    @csrf

    <label for="ref_annonce">{{ __('Advert reference') }}</label>
    <input type="text" id="ref_annonce" name="ref_annonce" maxlength=20 required value="{{ $oldInput['ref_annonce'] ?? '' }}">
    <br>
    <label for="ref_annonce">{{ __('Advert price') }}</label>
    <input type="text" id="prix_annonce" name="prix_annonce" value="{{ $oldInput['prix_annonce'] ?? '' }}">
    <br>
    <label for="ref_annonce">{{ __('Area') }}</label>
    <input type="text" id="surface_habitable" name="surface_habitable" value="{{ $oldInput['surface_habitable'] ?? '' }}">
    <br>
    <label for="ref_annonce">{{ __('Number of rooms') }}</label>
    <input type="number" id="nombre_de_piece" name="nombre_de_piece" value="{{ $oldInput['nombre_de_piece'] ?? '' }}">
    <br>
    <input type="submit" value="{{ __('Submit') }}" class="btn btn-primary">
    
</form>

@endsection