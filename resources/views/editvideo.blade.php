<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
 </head>
<body>
<form method="POST" action="{{ route('videos.update',['id'=>$videoarray->id])}}" enctype="multipart/form-data"> 
 <br><br><center><u><h2>EDITVIDEOS FORM</u></h2></center></br></br>
 @csrf
 <center>
 <br><br><label>name:</label></br></br>
 <input type="text" id="name" value="{{$videoarray->name}}" name="name"/><br>
 <input type="hidden" id="name" value="PUT" name="_method">
 <br><br><label>video_url:</label></br></br>
 <br><br><textarea id="video_url"   name="video_url">{{$videoarray->video_url}} </textarea></br></br>
 <iframe width="50%" height="200" src="{{$videoarray->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <br><br><input type="submit" class="button3" value="submit"></br></br>
 </center>
 <br><br><br>
</form>
</body>
</html>