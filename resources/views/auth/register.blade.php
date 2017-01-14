@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body login-register-form">
                    <form class="form" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="link-login">
                            <ul class="h-ul-li">
                                <li ><a href="{{url('/')}}/login">Đăng nhập</a></li>
                                <li class="active"><a href="{{url('/')}}/register">Đăng ký</a></li>
                            </ul>
                        </div>
                    <div class="clear"></div>
                        <br><br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="name">Tên</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="email">Mật khẩu</label>
                                    <input id="" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label" for="email">Xác nhận mật khẩu</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif

                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-raised btn-large">
                                    Đăng ký
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
