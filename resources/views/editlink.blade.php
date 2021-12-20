<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
 </head>
<body>
<br><br><center><u><h2>LINKS FORM</u></h2></center></br></br>
<form method="POST" action="{{ route('links.store') }}"> 
  @csrf
<center>
<label for="name"><h2>name:</h2></label>
<input type="text" id="name" value="{{$linkarray->name}}" name="name"/><br>
<label for="link_name"><h2>link_name:</h2></label><br>
<textarea id="link_name" name="link_name"  >{{$linkarray->link_name}} </textarea>
 <br><br><br>
 <input type="submit" class="button3" value="submit">
 </br></br></br>


 
</div>
</center> 
</form>
</body>
</html>
