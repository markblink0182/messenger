@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
        <b-card title="Inicio de sesión">
            <b-alert show>Ingresa tus datos</b-alert>
           
                <b-form method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
            
            <b-form-group
                    label="Correo electrónico:"
                    label-for="email"
                    description="Sitio seguro, no compartimos tu email">
            <b-form-input id="email"
                      type="email"
                      name ="email"
                      required
                      value="{{ old('email') }}" required autofocus
                      placeholder="Ingresa tu correo">
            </b-form-input>
            </b-form-group>

            <b-form-group
                    label="Contraseña:"
                    label-for="password">
            <b-form-input id="password"
                      type="password"
                      name ="password"
                      required
                      value="{{ old('password') }}"
                      placeholder="Ingresa tu contraseña">
            </b-form-input>
            </b-form-group>
            
            <b-form-group>
                <b-form-checkbox 
                name="remember"
                {{ old('remember') ? 'checked="true"' : '' }}>
                     Recordar sesión
                </b-form-checkbox>
            </b-form-group>

             <b-button type="submit"
                      variant="primary">Ingresar
            </b-button>
            <b-button href="{{ route('password.request') }}"
                      variant="link">¿Olvidaste tu password?
            </b-button>
         
        </b-form>
        </b-card>
                
        </b-col>
    </b-row>
</b-container>
@endsection
