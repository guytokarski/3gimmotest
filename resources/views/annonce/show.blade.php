@extends('layouts/master', ['title' => "Help"])


@section('content')

<h1>Showing {{ $annonce->ref_annonce }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $annonce->ref_annonce }}</h2>
        <p>
            <strong>{{ __('Advert reference') }} :</strong> {{ $annonce->ref_annonce }}<br>
            <strong>{{ __('Advert price') }} :</strong> {{ $annonce->prix_annonce }}<br>
            <strong>{{ __('Area') }}:</strong> {{ $annonce->surface_habitable }}<br>
            <strong>{{ __('Number of rooms') }}:</strong> {{ $annonce->nombre_de_piece }}  <br>          
        </p>
    </div>

@endsection