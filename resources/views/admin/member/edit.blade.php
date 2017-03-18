@extends('master')
@section('title', '�༭��Ա')

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
                    <legend>��Ա</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">����</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" value="{!! $member->title !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">�ʺ�</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="account" name="account">{!! $member->content !!}</textarea>
                        </div>
                    </div>

             
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection