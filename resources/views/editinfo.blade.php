<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<br><br><center><u><h2>EDITINFO FORM</u></h2></center></br></br>

<form method="POST" action="{{ route('infos.update',['id'=>$infoarray->id])}}">
  @csrf

<center>
 <label for="name"><h2>NOTE_NAME:</h2></label>
 <input type="text" id="name" value="{{$infoarray->name}}" name="name"><br>
 <input type="hidden" id="name" value="PUT" name="_method">
 <label for="content"><h2>content:</h2></label><br>
 <!-- <input type="text" id="content" name="content" value="$content"> -->
 <textarea id="content" name="content" >{{$infoarray->content}} </textarea>
 <br><br><br>
 <br><br><input type="submit" class="button3" value="submit"></br></br>
 </br></br></br>
 </center> 
 </form>
 </body>
 </html>
