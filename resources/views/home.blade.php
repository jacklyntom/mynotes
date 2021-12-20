



@extends('layouts.app')



@section('content')
<div class="container">
  <h2>Buttons</h2>
  <link rel="stylesheet" href="css/style.css">
  <!-- <button type="button" class="button2 "><h2><center>add links</center></h2></button>
  <button type="button" class="button2"><h2><center>add videos</center></h2></button>
  <button type="button" class="button2"><h2><center>add photos</center></h2></button> -->

  <a type="button" href="{{route('links.create')}}"class="button2"><h2>add links</h2></a>
  <a type="button" href="{{route('videos.create')}}"class="button2"><h2>add videos</h2></a>
  <a type="button" href="{{route('photos.create')}}"class="button2"><h2>add photos</h2></a>
  <a type="button" href="{{route('infos.create')}}"class="button2"><h2>add infos</h2></a>
  
  </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
                <h1>INFOS LIST</h1>
            </div>
        </div>
    </div>
</div>


    
<div class="row">
@foreach ($tablearray as $item) 
  <div class="column" style="background-color:#aaa">
  <center> <tr> <td><h1>{{$item->name}}</h1></td></tr></center>
  <tr><td><h2>{{$item->content}}</h2></td></tr>
  <br><td><a href="{{ route('infos.edit',['id'=>$item->id]) }}">edit</a></td></tr></br></br>
 

<form method="POST" action="{{ route('infos.destroy',['id'=>$item->id])}}">
  @csrf
 <button type="submit" value="{{$item->delete}}" >delete</button>
 <input type="hidden" id="delete"  name="_method">
 
 


  </div>
</form>
@endforeach

</div>




  
@endsection

