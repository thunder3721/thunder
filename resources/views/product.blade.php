@extends('master')
@section('title',$member->title)
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

           <table  >
           <?
		   $line = ceil(count($aProduct));
           for($i=0;$i<$line;$i++)
		   {
			   for($j=0; $j<= 5;$j++)
			   {
				   $index = $i*5 + $j;
				   $r = $aProduct[$j];
		   ?>
               <tr>
                   <td><a href="{!! action('product@show', $r->no) !!}"><?=$r["photo"]?></a></td>
                   <td><?=$r["name"]?></td>
               </tr>
           <?
			   }
		   }
		   ?>
           </table>
           
        </div>
    </div>
@endsection