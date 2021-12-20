<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<br><br><center><u><h2>INFOS FORM</u></h2></center></br></br>

<form method="POST" action="{{ route('infos.store')}}"> 
  @csrf

<center>
 <label for="name"><h2>name:</h2></label>
 <input type="text" id="name" name="name"><br>
 <label for="content"><h2>content:</h2></label><br>
 <textarea id="content" name="content"  ></textarea>
 <br><br><br>
 <br><br><input type="submit" class="button3" value="submit"></br></br>
</br></br></br>
</center> 
</form>
</body>
</html>
