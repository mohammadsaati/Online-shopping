<br/>
<div class="box">
    <h4 align="right">
        آخرین محصولات
        <span class="livicon center-auto" data-name="check-circle-alt" data-size="24" data-onparent="true"></span>

    </h4>
    <hr />
    @foreach($product as $products)
        <a href="{{ route('product.onlyshow' , $products->id)}}"><p align="right" dir="rtl">{{ $products->product_name }}</p></a>

    @endforeach
</div>