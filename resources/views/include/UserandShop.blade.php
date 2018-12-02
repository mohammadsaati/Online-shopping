<div class="col-lg-3 col-md-3 col-sm-6 col-12 col-xl-3">
    <div class="box">
        <h5 align="right">
            فروشندگان جدید
            <span class="livicon center-auto" data-name="user-flag" data-size="30" data-onparent="true"></span>

        </h5>
        <hr />
        @foreach($user as $users)
            <p align="right"><a href="#">{{ $users->name }}</a></p>
        @endforeach
    </div>
    <br />
</div>

{{--Show user Store--}}
<div class="col-lg-3 col-md-3 col-sm-6 col-12 col-xl-3">

    <div class="box">
        <h5 align="right">
            فروشگاه ها
            <span class="livicon center-auto" data-name="shopping-cart" data-size="30" data-onparent="true"></span>

        </h5>
        <hr />
        @foreach($shop as $shops)
            <p align="right"><a href="{{ route('shoper.show' , $shops->id) }}">{{ $shops->name }}</a></p>
        @endforeach
    </div>
</div>

{{--Show user Store--}}
<div class="col-lg-6 col-xl-6 col-md-6 d-none d-md-block">
    <img class="img-fluid" src="{{ asset('/images/bags.jpg') }}">
</div>