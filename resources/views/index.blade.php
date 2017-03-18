@extends('master')
@section('title',"首页")
@section('content')

<div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> 商品 </h2>
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                </div>
                @if ($aProduct->isEmpty())
                    <p> There is no ticket.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                 <th>名称</th>
                                <th>图片</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aProduct as $r)
                                <tr>
                                    <td><a href="{!! action('ProductController@show', $r->id) !!}">{!! $r->name !!} </a></td>
                                    <td>{!! $r->photo !!} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>
    
    
@endsection