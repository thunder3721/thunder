@extends('master')
@section('title', '新增商品')

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

                <fieldset>
                    <legend>新增商品</legend>
                    
                    
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">名称</label>
                        <div class="col-lg-10">
                            <input type="title" class="form-control" id="name" placeholder="name" name="name">
                        </div>
                    </div>



                     <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">图片</label>
                        <div class="col-lg-10">
                            <input type="file" name="photo" id="photo" value="" >
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">简介</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection