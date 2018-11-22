@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-3">
                <b-alert show>
                    Por favor ingresa tus datos:
                </b-alert>
                <b-form method="POST" action="{{ route('register') }}">{{ csrf_field() }}
                    <b-form-group
                        label="Nombre:"
                        label-for="nombre">
                        <b-form-input id="nombre"
                            type="text"
                            name="nombre"
                            required
                            autofocus
                            value="{{ old('nombre') }}"
                            placeholder="Ingresa el nombre">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group
                        label="Correo electrónico:"
                        label-for="email">
                        <b-form-input id="email"
                            type="email"
                            name="email"
                            required
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
                            placeholder="***************">
                        </b-form-input>
                    </b-form-group>
                    <b-form-group
                        label="Confirmar contraseña:"
                        label-for="password_confirmation">
                        <b-form-input id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            placeholder="*****************">
                        </b-form-input>
                    </b-form-group>
                    <b-button type="submit" variant="primary">
                        Confirmar registro
                    </b-button>
                    <b-button href="{{ route('login') }}" variant="link">
                        ¿Ya te has registrado?
                    </b-button>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
