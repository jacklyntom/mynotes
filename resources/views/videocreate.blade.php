<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
 </head>
<body>
<form method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data"> 


<br><br><center><u><h2>VIDEOS FORM</u></h2></center></br></br>


 
 
  @csrf

 <center>

 <br><br><label>name:</label></br></br>
 <input type="text" id="name" name="name"/><br>
 <br><br><label>video_url:</label></br></br>
 <br><textarea id="video_url" name="video_url"></textarea></br>
 <br><input type="submit" class="button3" value="submit"></br>
 </center>
 <br><br><br>

  @foreach ($videoarray as $item) 
  <div class="column" style="background-color:#aaa">
  <center> <tr> <td><h1>{{$item->name}}</h1></td></tr></center>
  <tr><td><a href ="{{$item->video_url}}">{{$item->video_url}}</a></td></tr>
  <iframe width="100%" height="150" src="{{$item->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <td><a href="{{ route('videos.edit',['id'=>$item->id]) }}">edit</a></td></tr>
  </div>
@endforeach
 
</form>
</body>
</html>