<br /><br />


        <div  class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
                <div class="box">
                        <h5 align="right">محصولات شما</h5>
                        <hr />

                    @foreach($user->shops as $shop)
                        @foreach($shop->products as $product)
                        <div class="row">

                    <div class="col-lg-2 col-xl-2 d-none d-lg-block">
                        <a href="{{ route('product.edit' , ["product_id" => $product->id , "user_id" =>auth()->id()]) }}" class="btn btn-warning">Edit</a>
                    </div>
                    <div class="col-lg-2 col-xl-2 d-none d-lg-block">
                        <a href="{{ route('product.delete' , ["product_id" => $product->id , "user_id" =>auth()->id()])}}" class="btn btn-danger">حذف</a>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-sm-4 col-12 col-md-6">
                        <a href="{{ route('product.onlyshow' , ["product_id" => $product->id , "user_id" =>auth()->id()])}}" class="btn btn-info">مشاهده</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xl-6 col-12"><p align="right">{{ $product->product_name }}</p></div>
                </div>


                @endforeach
            @endforeach
        </div>
    </div>