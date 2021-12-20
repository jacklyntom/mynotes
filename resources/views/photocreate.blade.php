<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<br><br><center><u><h2>PHOTOS FORM</u></h2></center></br></br>

<form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data"> 
  @csrf

<center>
 <br><br><input type="file" id="name" name="photo"/></br></br>
 <label>NOTE_NAME</label>
 <input type="text" id="name" name="note_name"/><br>
 
 <br><br><br>
 <input type="submit" class="button3" value="submit">
 </center>
 <br><h2>PHOTOS LIST</h2></br>
 @foreach ($photoarray as $item) 
  <div class="column" style="background-color:#aaa">
  <center> <tr> <td><h1>{{$item->note_name}}</h1></td></tr></center>
  <tr><td><h2><center><img src="{{asset('storage/'. $item->photo_url)}}"></center></h2></td></tr>
  
  <td><a href="{{ route('photos.edit',['id'=>$item->id]) }}">edit</a></td></tr>
  </div>
 @endforeach
</br></br></br>
</form>
</body>
</html>