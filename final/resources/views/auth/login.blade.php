@extends('layouts.app')


@section('heads')
    <link rel="stylesheet" href="{{asset('css/hw2-global.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <script src="https://use.fontawesome.com/451b505981.js"></script>
@endsection


@section('content')
    <section>
        <div class="row">
            <div class="modal col-4 col-off-4">
                <div class="brand">
                    ورود
                </div>
                <form role="form" method="POST" action="{{ url('/login') }}" class="form col-10 col-off-1">
                    {{csrf_field()}}
                    <div class="row {{ $errors->has('email') ? ' has-error' : '' }}" >
                        <!-- <div class="col-8 col-off-1 box"> -->
                        <input class="col-8 col-off-1 box" type="email" id="email" name="email" placeholder="رایانامه" value="{{ old('email') }}" required autofocus>
                        <!-- </div> -->
                        <label class="col-1 col-off-1">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        </label>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="row {{ $errors->has('password') ? ' has-error' : '' }}">
                        <!-- <div class="col-8 col-off-1 box"> -->
                        <input class="col-8 col-off-1 box" type="password" id="password" name="password" placeholder="رمز عبور" required>
                        <!-- </div> -->
                        <label class="col-1 col-off-1">
                            <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
                        </label>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="row" id="last">
                        <div class="col-8 col-off-1 remember">
                            مرا به خاطر بسپار
                        </div>
                        <label class="col-1 col-off-1">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                        </label>
                    </div>
                    <input class="col-10 col-off-1" type="submit" name="button" value="ورود">
                    <div class="col-6 col-off-3" id="forget">
                        <a href="{{ url('/password/reset') }}">رمزو یادم رفته</a>
                    </div>
                </form>
                <div class="form-footer col-12">
                    حساب کاربری ندارید؟ <a href="{{ url('/register') }}">ثبت نام کنید</a>
                </div>
            </div>
        </div>
    </section>

@endsection
