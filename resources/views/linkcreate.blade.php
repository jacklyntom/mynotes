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
<input type="text" id="name" name="name"/><br>
<label for="link_name"><h2>link_name:</h2></label><br>
<textarea id="link_name" name="link_name"  ></textarea>
 <br><br><br>
 <input type="submit" class="button3" value="submit">
 </br></br></br>


 <div class="row">
@foreach ($linkarray as $item) 
  <div class="column" style="background-color:#aaa">
  <center> <tr> <td><h1>{{$item->name}}</h1></td></tr></center>
  <tr><td><a href ="{{$item->link_name}}">{{$item->link_name}}</a></td></tr></br>
  <div><td><a href="{{ route('links.edit',['id'=>$item->id]) }}">edit</a></td></tr></div>
  </div>
@endforeach
</div>
</center> 
</form>
</body>
</html>
