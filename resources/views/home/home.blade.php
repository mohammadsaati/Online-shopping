@extends('layout')

@section('contant')
 <div class="row">
    
        @include('include.slide')
    

    <div class="col-lg-3 col-md-12 col-sm-12 col-12 col-xl-3">
        @include('include.LastProduct')
    </div>

 </div>
<br /><br />
 {{--Show new Users--}}
 <div class="row">
    
     @include('include.UserandShop')

 </div>



 <div class="row">
     @include('include.video')
 </div>
 <br />
 <div class="row">
   @include('include.JobsandPosts')
 </div>

 <br />
@stop

@section('one-passage')

    <!--Services-->
    <div style="background-image:url({{ asset('/images/services.jpg') }})" id="services">
        <div class="container">
            <br />
            <div class="list-group-item" id="servic-body">
                <h4 dir="rtl" align="right">
                    امکانی برای سفارش و فروش محصولات خود در اینترنت
                    <br/> <br/>
                   تبلیغات رایگان و گسترده
                    <br/> <br/>
                    تبلیغات رایگان ، فروش کالای شما
                </h4>
                <br/>
                <h2 align="center" dir="rtl">لذت کسب و کارتان را با ما تجربه کنید</h2>

            </div>
            <br/>
        </div>

    </div>
    <!--Endservices-->


@stop