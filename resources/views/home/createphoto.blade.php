@extends('layout')

@section('contant')
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-12">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-haeding" align="right" dir="rtl"> هشدار!</h4>
            <p align="right" dir="rtl">
                از این که می خواهید برای فروشگاه خود عکس بزارید خوشحال هستیم.
                <br />
                توجه کنید که امکان تعویض عکس برای فروشگاه ها نیست و شما می توانید فعلا یک عکس برای فروشگاهتان انتخاب کنید پس در انتخاب خود دقت کنید
            </p>
            <hr />
            <h4 align="center" class="mb-0">
               لطفا عکس انتخابی مناسب باشد در غیر این صورت حذف و فعلا قابل تعویض نیست
            </h4>
        </div>
    </div>

    @foreach($shops as $shop)
        <form action="{{route('photo.save' , ['shop_id' => $shop->id])}}" class="dropzone" method="post" id="my-awesome-dropzone">
            {{csrf_field()}}
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>

        </form>
@endforeach




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
