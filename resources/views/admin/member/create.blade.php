@extends('master')
@section('title', '新增会员')

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
                    <legend>新增会员</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">会员名称</label>
                        <div class="col-lg-10">
                            <input type="title" class="form-control" id="name" placeholder="name" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">会员帐号</label>
                        <div class="col-lg-10">
                            <input type="title" class="form-control" id="account" placeholder="account" name="account">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">会员密码</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="password" placeholder="password" name="password">
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