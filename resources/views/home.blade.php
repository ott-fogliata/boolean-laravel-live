@extends('templates.base')

@section('title', 'HomePage')

@section('main')
    <div class="container-fluid home-page-content">
        <div class="container">
            <div class="row">
                @foreach($pasta as $pastaSingle) 
                <div class="pasta-item col-4">
                    <!--<a href="/product/{{ $loop->iteration }}">-->
                    <a href="{{ route('product', [ 'id' => $loop->iteration ]) }}">
                        <div class="pasta-item-content">
                            <img src="{{ $pastaSingle['src'] }}" />
                            <h3>{{ $pastaSingle["titolo"] }}</h3>
                        </div>
                    </a>
                </div>            
                @endforeach
            </div>
        </div>
    </div>
@endsection