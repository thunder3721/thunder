<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@extends('master')
@section('title',$aProduct->name)
@section('content')
 
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input type="hidden" name="_token" value="{!! $aProduct->id !!}">

                <fieldset>
                    <legend>{{ $aProduct->name }}</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">商品名称</label>
                        <div class="col-lg-10">
                            {!! ($aProduct->name) !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">商品图片</label>
                        <div class="col-lg-10">
                            <img src="{!! ($aProduct->photo) !!}" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{!! action('CartController@add', $aProduct->id) !!}">加入购物车</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection