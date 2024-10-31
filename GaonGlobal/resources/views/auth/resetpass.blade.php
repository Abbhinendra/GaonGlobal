@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="sinuppage">
<form action="{{route('changePass')}}" method="POST">
    @csrf
    @method('POST')
    <center><h1 style="text-align: center; font-size:26px;">Reset Your Password</h1></center>
    <br>
    @if(session()->has('error'))
    <div class="error">
        <span class="FormVailidationErrors" >{{session('error')}}</span>
    </div>
    @endif
    @if(session()->has('success'))
    <div class="success">
        <span class="FormVailidationErrors" >{{session('success')}}</span>
    </div>
    @endif
    <br>
    <input type="password" name="password"  placeholder="new password" required autocomplete="off">
    <div class="captcha">
        @if ($errors->has('password'))
        <span class="FormVailidationErrors" >{{ $errors->first('password') }}</span>
        @endif
    </div>
    <input type="password" name="password_confirmation"  placeholder="repeat password" required autocomplete="off">
    <button type="submit">Reset Password</button>
</form>
</section>
@endsection
