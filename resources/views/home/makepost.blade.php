@extends('layout')

@section('contant')


        <form method="get" action="{{ route('post.save') }}">

            {{csrf_field()}}

            <div class="form-group">
                name:
                <input name="titles" class="form-control" id="name" />
            </div>

            <div class="form-group">
                name:
                <input name="passage" class="form-control" id="name" />
            </div>

            <input type="submit" value="ثبت"  />


    </form>

@stop