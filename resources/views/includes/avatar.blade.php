@if(Auth::user()->image)
<img class="avatar" src="{{route('user.avatar',['filename'=>Auth::user()->image])}}">
@else
<!-- <img class="avatar" src="http://chittagongit.com/images/avatar-icon-images/avatar-icon-images-4.jpg"> -->
<img class="avatar" src="http://chittagongit.com/images/avatar-icon-images/avatar-icon-images-8.jpg">
@endif
