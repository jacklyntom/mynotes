<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<br><br><center><u><h2>EDITPHOTO FORM</u></h2></center></br></br>
<form method="POST" action="{{ route('photos.update',['id'=>$photo->id])}}" enctype="multipart/form-data"> 
  @csrf

 <center>
 <br><br><input type="file" id="name"  name="photo"/></br></br>
 <label>NOTE_NAME:</label>
 <br><br><input type="text" id="name" value="{{$photo->note_name}}" name="note_name"/></br></br>
 <input type="hidden" id="name" value="PUT" name="_method">
 <img src="{{asset('storage/' .$photo->photo_url)}}" width="100" height="150">
<br><br><br>
 <input type="submit" class="button3" value="submit">
 </center>
 </br></br></br>
</form>
</body>
</html>