@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de Sesión" class="my-3">
                <b-alert show>
                    Por favor ingresa tus datos:
                </b-alert>
                <b-form method="POST" action="{{ route('login') }}">{{ csrf_field() }}
                    <b-form-group
                        label="Correo electrónico:"
                        label-for="email">
                        <b-form-input id="email"
                            type="email"
                            name="email"
                            required
                            autofocus
                            value="{{ old('email') }}"
                            placeholder="example@gmail.com">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group
                        label="Constraseña:"
                        label-for="password">
                        <b-form-input type="password"
                            id="password"
                            name="password"
                            required
                            value="{{ old('password') }}"
                            placeholder="***************">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group>
                        <b-form-checkbox
                            name="remember" 
                            {{ old('remember') ? 'checked="true"' : '' }}>
                            Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>
                    <b-button type="submit" variant="primary">Ingresar</b-button>
                    <b-button href="{{ route('password.request') }}" variant="link">¿Olvidaste tu contraseña?</b-button>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
