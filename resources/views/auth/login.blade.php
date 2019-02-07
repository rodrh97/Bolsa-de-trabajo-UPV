@extends('layouts.app')

@section('content')
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">

                <div class="panel-body">
                    <form  class="md-float-material" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="auth-box">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <img src="assets/images/UP_Victoria.png" alt="UP_Victoria.png" width="200px" height="100px">
                                <<h3 class="text-center txt-primary">Bolsa de Trabajo de la Universidad Politécnica de Victoria</h3>
                            </div>
                        </div>
                         <hr/>
                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="md-line">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="md-line">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-inverse btn-md btn-block text-center m-b-20">
                                    Iniciar Sesión
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- Authentication card end -->
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>
<!-- end of container-fluid -->
</section>
           
@endsection
