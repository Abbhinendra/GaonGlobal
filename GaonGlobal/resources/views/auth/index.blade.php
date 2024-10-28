@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="sinuppage">
<form action="">
    <input type="text" name="name" value="{{old('name')}}" placeholder="Name" required autocomplete="off">
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required autocomplete="off">
    <input type="text" value="{{$type}}" readonly>
    <input type="password" name="password" placeholder="password" required autocomplete="off">
    <input type="password" name="confirmation_password" placeholder="confirm password" autocomplete="off">
    <button type="submit">Sing Up</button>
</form>
</section>
@endsection
