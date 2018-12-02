@extends('layout')
@section('contant')

    <div class="row">
    @foreach($shop as $shops)
        <div class="col-lg-3">
            <div class="box">
                <div class="card">
                    @if($photo = \App\Photo::SearchShop($shops->id)->first())
                        @if($photo != null)
                            <img class="card-img-top img-fluid" src="{{ $photo->patch }}" />

                        @else
                            <img class="card-img-top img-fluid" src="{{ asset('/images/8.jpg') }}" />
                        @endif
                    @endif
                    <div class="card-body">
                        <div class="card-title"><h5 align="right">{{ $shops->name }}</h5></div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><p align="right" dir="rtl">شهر : {{ $shops->city }}</p></li>
                        <li class="list-group-item"><p align="right" dir="rtl">آدرس : {{ $shops->adress }}</p></li>
                        <li class="list-group-item"><p align="right" dir="rtl">تلفن : {{ $shops->phonenumber }}</p></li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('shoper.show' , $shops->id) }}" class="btn btn-outline-primary" dir="rtl">بیشتر...</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@stop

@section('one-passage')
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
@stop

