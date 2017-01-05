@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" >
                        {{ csrf_field() }}

                        <input id="image_perfil" type="hidden" name="image_perfil" value="quick.png">
                        
                        <div class="form-group{{ $errors->has('select') ? ' has-error' : '' }}">
                            <label for="select" class="col-md-4 control-label">Select</label>
                            <div class="col-md-6">
                                <select id="select"  class="form-control" name="select"  >
                                    <option value="1">Natural Person</option>
                                    <option value="2">Legal Person</option>
                                </select>
                            </div>
                        </div>

                        <!--Date Legal Person-->
                        <div id="date_legal">
                            <div  class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }}">
                                <label for="business_name" class="col-md-4 control-label">Business Name</label>
                                <div class="col-md-6">
                                    <input id="business_name" type="text" class="form-control" name="business_name" value="{{ old('business_name') }}"  autofocus>
                                    @if ($errors->has('business_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('business_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--END Dates Legal Person-->
                        <!--Dates Natural Person-->
                        <div id="date_natural">
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required  autofocus>
                                    @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--END Dates Natural Person-->
                        <div class="form-group{{ $errors->has('document_type') ? ' has-error' : '' }}">
                            <label for="document_type" class="col-md-4 control-label">Document Type</label>
                            <div class="col-md-6">
                                <select id="document_type"  class="form-control" name="document_type"  >
                                    <option value="CC">Cedula Ciudadania</option>
                                    <option value="RUT">RUT</option>
                                    <option value="NIT">NIT</option>
                                </select>
                            </div>
                        </div>
                        <div  class="form-group{{ $errors->has('document') ? ' has-error' : '' }}">
                            <label for="document" class="col-md-4 control-label">Document</label>
                            <div class="col-md-6">
                                <input id="document" type="text" class="form-control" name="document" value="{{ old('business_name') }}" required   autofocus>
                                @if ($errors->has('document'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('document') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button  type="submit" class="btn btn-primary">
                                    Register
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