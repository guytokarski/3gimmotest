@extends('layouts/master', ['title' => "Help"])


@section('content')


<h1>{{ __('Real Estate adverts') }}</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<a href="{{ URL::to('annonce/create') }}">{{ __('Create an advert') }}</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>{{ __('Advert reference') }}</td>
            <td>{{ __('Advert price') }}</td>
            <td>{{ __('Area') }}</td>
            <td>{{ __('Number of rooms') }}</td>            
            <td>{{ __('Actions') }}</td>
        </tr>
    </thead>
    <tbody>

    <!-- loop on annonces array -->
    @foreach($annonces as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->ref_annonce }}</td>
            <td>{{ $value->prix_annonce }}</td>
            <td>{{ $value->surface_habitable }}</td>
            <td>{{ $value->nombre_de_piece }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <form method="POST" action="/annonce/{{ $value->id }}" style="float: left;">
                    @method('DELETE')
                    @csrf

                    <input type="submit" value="Delete" class="btn btn-primary">
                    
                </form>
                                

                <!-- show the annonce (uses the show method found at GET /annonce/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('annonce/' . $value->id) }}">{{ __('Show ad') }}</a>

                <!-- edit this annonce (uses the edit method found at GET /annonce/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('annonce/' . $value->id . '/edit') }}">{{ __('Edit ad') }}</a>

            </td>
        </tr>
    @endforeach

    </tbody>
</table>


@endsection