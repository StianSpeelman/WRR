@extends('layouts.template')

@section('title', 'Shop')

@section('main')

    <h1>Shop</h1>
    <form method="get" action="/shop" id="searchForm">
        <div class="row">
            <div class="col-sm-6 mb-2">
                <input type="text" class="form-control" name="artist" value="" placeholder="Filter artist or record">
            </div>
            <div class="col-sm-4 mb-2">
                <select class="form-control" name="genre_id" id="genre_id">
                    <option value="%">All genres</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm2 mb-2">
                <button type="submit" class="btn btn-success btn-block">Search</button>
            </div>
        </div>
    </form>
    <hr>
{{--    {{ $records->withQueryString()->links() }}--}}
    <div class="row">
        @foreach($records as $record)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
            <div class="card" data-id="{{ $record->id }}">
{{--                @if($record->cover)--}}
                @if($record->title_mbid)
                    <img class="card-img-top" src="https://coverartarchive.org/release/{{ $record->title_mbid }}/front-250.jpg" alt="{{ $record->artist }} - {{ $record->title }}">
                @else
                    <img class="card-img-top" src="/assets/vinyl.png">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $record->artist }}</h5>
                    <p class="card-text">{{ $record->title }}</p>
                    <a href="shop/{{ $record->id }}" class="btn btn-outline-info btn-sm btn-block">Show details</a>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <p>{{ $record->genre->name }}</p>
                    <p>
                        € {{ number_format($record->price,2) }}
                        <span class="ml-3 badge badge-success">{{ $record->stock }}</span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{--    {{ $records->withQueryString()->links() }}--}}
@endsection

@include('shared.footer')
