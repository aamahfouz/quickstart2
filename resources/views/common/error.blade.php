@if (count($errors) > 0)
Oops Something went wrong <br>

@foreach ($errors->all() as $error)
<li> {{$error}} </li>
@endforeach

<br><hr><br>
@endif