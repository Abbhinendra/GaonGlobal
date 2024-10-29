@extends('masterlayout.aap')
@section('content')
<section>

    <div class="bar" style="padding: 9px; ">
        <img style="filter: invert(100%); width:37px; cursor: pointer;" src="{{asset('svg/hamburgur.svg')}}" alt="">
        </div>
    @include('pagesection.bar')

</section>
<section class="sinuppage">
<form action="{{route('singup')}}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="name" value="{{old('name')}}" placeholder="Name" required autocomplete="off">
    <div class="captcha">
        @if ($errors->has('name'))
        <span class="FormVailidationErrors" >{{ $errors->first('name') }}</span>
        @endif
    </div>
    <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required autocomplete="off">
    <div class="captcha">
        @if ($errors->has('email'))
        <span class="FormVailidationErrors" >{{ $errors->first('email') }}</span>
        @endif
    </div>
    <input type="text" name="type" value="{{$type}}" readonly>
    <input type="password" name="password" placeholder="password" required autocomplete="off">
    <div class="captcha">
        @if ($errors->has('password'))
        <span class="FormVailidationErrors" >{{ $errors->first('password') }}</span>
        @endif
    </div>
    <input type="password" name="password_confirmation" placeholder="confirm password" autocomplete="off">
    <div class="captcha">
        @if ($errors->has('g-recaptcha-response'))
        <span class="FormVailidationErrors" >{{ $errors->first('g-recaptcha-response') }}</span>
        @endif
    </div>
    <div class="captcha">
        {!!htmlFormSnippet()!!}
    </div>
    <button type="submit">Sing Up</button>
</form>
</section>
@endsection

