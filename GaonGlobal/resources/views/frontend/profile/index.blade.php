

@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="user-profile-section">
<h2>Your Profile</h2>
<div>{{auth()->user()->name}}</div>
<div>{{auth()->user()->email}}</div>
<div>{{auth()->user()->type}}</div>
<a href="{{route('profile.edit', auth()->id())}}" class="show-profile-edit-page">Edit profile</a>
</section>
@endsection

