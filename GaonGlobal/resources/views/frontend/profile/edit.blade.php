

@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="user-profile-section">
<h2>Edit Profile</h2>
<form action="{{route('profile.update', $user->id)}}" method="POST">
@csrf
@method('PUT')
<input type="text" name="name"  value="{{$user->name}}">
<input type="text" value="{{$user->email}}" readonly>
<button type="submit">Save</button>
</form>
</section>
@endsection

