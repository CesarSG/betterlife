@if(Auth::user()->image)
<img class="avatar" src="{{asset('storage').'/'.Auth::user()->image}}">
@else
<img class="avatar" src="../../images/avatar-default.jpg">
@endif
