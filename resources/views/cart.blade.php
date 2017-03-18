@extends('master')
@section('title', '购物车')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> 购物车 </h2>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                
                @if (!$aCart)
                    <p> 购物车为空.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                 <th>商品名称</th>
                                <th>数量</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aCart as $r)
                                <tr>
                                     <td><a href="{!! action('ProductController@show', $r->id) !!}">{!! $r->name !!} </a></td>
                                    <td><a href="{!! action('ProductController@show', $r->id) !!}">{!! $r->number !!}</a></td>
                                    <td><a href="{!! action('CartController@delete', $r->id) !!}">删除</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection