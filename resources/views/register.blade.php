@extends('master')
@section('title', '注册会员')

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
                    <legend>注册会员</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">帐号</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="account" name="account" value="" >
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">密码</label>
                        <div class="col-lg-10">
                            <input type="password" name="password" id="password" value="" >
                        </div>
                    </div>
                    
 
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">提交</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection