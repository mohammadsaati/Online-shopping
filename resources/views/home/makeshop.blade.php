@extends('layout')

@section('contant')
    <form  method="get" action="{{ route('shop.save') }}" >

        <div class="form-row">
            <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <label for="name">نام</label>
                <input type="text" id="name" name="name" class="form-control"  required/>
            </div>
            <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <label for="city">شهر</label>
                <input type="text" id="city" name="city" class="form-control"  required/>
            </div>
            <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <label for="phonenumber">شماره تلفن</label>
                <input type="text" id="phonenumber" name="phonenumber" class="form-control"  required/>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <label for="str_code">کدفروشگاه</label>
                <input type="text" id="str_code" name="str_code" class="form-control"  required/>
            </div>
            <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <label for="adress">آدرس دقیق مغازه</label>
                <input type="text" id="adress" name="adress" class="form-control"  required/>
            </div>
            <div class="form-group col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <label for="telegram">ایدی تلگرام</label>
                <input type="text" id="telegram" name="telegram_id" class="form-control"  required/>
            </div>
        </div>
        <div class="form-group">
            <label for="discription">توضیحات</label>
            <textarea id="discription" class="form-control" name="discription" width="100%" required></textarea>
        </div>

        <input type="submit" class="btn btn-success" value="ثبت فروشگاه" />
    </form>

@stop