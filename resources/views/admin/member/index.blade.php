@extends('master')
@section('title', 'View all tickets')
@section('content')



    <div class="container col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Tickets </h2>
                    
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                </div>
                @if ($tickets->isEmpty())
                    <p> There is no ticket.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>会员帐号</th>
                                <th>会员名称</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{!! $ticket->id !!} </td>
                                    <td><a href="{!! action('TicketsController@show', $ticket->slug) !!}">{!! $ticket->account !!} </a></td>
                                    <td><a href="{!! action('TicketsController@show', $ticket->slug) !!}">{!! $ticket->title !!} </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection