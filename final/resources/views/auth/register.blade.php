@extends('layouts.app')

@section('heads')
    <link rel="stylesheet" href="{{asset('css/hw2-global.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <script src="https://use.fontawesome.com/451b505981.js"></script>
    @endsection


@section('content')
    <section>
        <div class="row">
            <div class="modal col-4 col-off-4">
                <div class="brand">
                    ثبت نام
                </div>
                <form class="form col-10 col-off-1" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="row {{ $errors->has('name') ? ' has-error' : '' }}">
                        <!-- <div class="col-8 col-off-1 box"> -->
                        <input class="col-8 col-off-1 box" type="text" name="name" id="name" placeholder="نام"  value="{{ old('name') }}" required autofocus>
                        <!-- </div> -->
                        <label class="col-1 col-off-1">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                        </label>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="row {{ $errors->has('email') ? ' has-error' : '' }}">
                        <!-- <div class="col-8 col-off-1 box"> -->
                        <input class="col-8 col-off-1 box" type="text" name="email" id="email" value="{{ old('email') }}" required placeholder="رایانامه">
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
                        <input class="col-8 col-off-1 box" type="password" id="password" name="password" placeholder="رمز عبور">
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
                    <div class="row">
                        <!-- <div class="col-8 col-off-1 box"> -->
                        <input class="col-8 col-off-1 box" type="password" id="password-confirm" name="password_confirmation" placeholder="تایید رمز عبور" required>
                        <!-- </div> -->
                        <label class="col-1 col-off-1">
                            <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
                        </label>

                    </div>
                    <div class="row" id="last">
                        <div class="col-8 col-off-1 remember">
                            <a href="#">قوانین</a> را می‌پذیرم
                        </div>
                        <label class="col-1 col-off-1">
                            <input type="checkbox" name="box" >
                        </label>
                    </div>
                    <div class="row footer">
                        <input class="col-10 col-off-1" type="submit" name="register" value="ثبت نام">
                    </div>
                    <!-- <a class="col-6 col-off-3" href="">رمزو یادم رفته</a>	 -->
                </form>

            </div>
        </div>
    </section>

@endsection
