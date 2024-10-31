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
    @if(session()->has('success'))
    <div class="success">
        <span class="FormVailidationErrors" >{{session('success')}}</span>
    </div>
    @endif
    <br>
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email"  required autocomplete="off">
    <input type="password" name="password" placeholder="password" required autocomplete="off">
    <center><h1 style="font-size: 2rem;">or</h1></center>
    <a href="{{route('googleRedirected')}}" style=" border: none;
    padding: 6px;
    width:120px;
    font-size: 22px;
    background-color: rgb(15, 14, 14);
    color: white;
    border-radius: 9px;
    outline: 2px solid lightgreen;
    margin: 12px 12px;
    cursor: pointer; display: flex; align-items: center; justify-content:center;">
        <img src="{{asset('images/google.png')}}" style="width: 58px;">
</a>
    <button type="submit">Login</button>
    <a href="{{route('forgotPass')}}">Forgot password?</a>
</form>
</section>
@endsection

