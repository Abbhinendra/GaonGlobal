@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="sinuppage">
<form action="{{route('passReset')}}" method="POST">
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
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required autocomplete="off">
    <button type="submit">Send Reset Email</button>
</form>
</section>
@endsection
