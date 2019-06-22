<h2>if use laravel</h2>
{{$name}}
</br>
{{strlen($name)}}
</br>

@if(strlen($name)>5)

string has length>0

@elseif(strlen($name)>5 && strlen($name)<10)

strlen length within 5 to 10

@elseif(strlen($name)>10)

string has length >10

@else

string has length=0

@endif