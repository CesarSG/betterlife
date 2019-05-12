@if (asset(Auth::user()->image))
<img class="avatar" src="https://cdn.pixabay.com/photo/2017/07/18/23/23/user-2517433_960_720.png">
<!-- else
<img class="avatar" src="{{route('user.avatar',['filename'=>Auth::user()->image])}}"> -->
@endif
