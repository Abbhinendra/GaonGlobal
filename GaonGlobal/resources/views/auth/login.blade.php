@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="sinuppage">
<form action="{{route('login')}}" method="POST">
    @csrf
    @method('POST')
    @if(session()->has('error'))
    <div class="captcha">
        <span class="FormVailidationErrors" >{{session('error')}}</span>
    </div>
    @endif
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required autocomplete="off">
    <input type="password" name="password" placeholder="password" required autocomplete="off">
    <button type="submit">Login</button>
</form>
</section>
@endsection

