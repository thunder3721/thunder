@extends('master')
@section('title', '编辑会员')

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
                <input type="hidden" name="id" value="{!! $member->id !!}">

                <fieldset>
                    <legend>会员中心</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">帐号</label>
                        <div class="col-lg-10">
                           {!! $member->account !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">密码</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="password" name="password" value="" >
                        </div>
                    </div>

             
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                             <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection