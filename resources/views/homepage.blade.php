

@extends('layouts.generalLayout')

@section('content')
    <div class="content_section">
        <div class="container">
            <div class="row content_card_section">
                @foreach ($fumetti as $fumetto)
                    <div class="col-2">
                        <div class="mycard">
                            <div class="card_img">
                                <img class="img_fumetto" src="{{ $fumetto['thumb'] }}" alt="">
                            </div>
                            <div class="title">{{ $fumetto['series'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bunner">
            <div class="container">
                
            </div>
        </div>
    </div>
@endsection
