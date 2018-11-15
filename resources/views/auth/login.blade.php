@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Início da Sessão">
                <b-alert show>Por favor, entre com seus dados:</b-alert>

                    <b-form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <b-form-group label="Email:" label-for="email"
                                      description="Seu email está seguro conosco.">
                            <b-form-input type="email"
                                          id="email" name="email"
                                          value="{{ old('email') }}" required autofocus
                                          placeholder="exemplo@prog.com">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group
                                    label="Senha:" label-for="password">
                            <b-form-input type="password" id="password"
                                          name="password"
                                          value="{{ old('password') }}" required>
                            </b-form-input>
                        </b-form-group>
                        <b-form-group>
                            <b-form-checkbox name="remember"  {{ old('remember') ? 'checked = "true"' : ''}}>
                              Lembre de mim!
                            </b-form-checkbox>
                        </b-form-group>
                        <b-button type="submit" variant="primary">Entrar</b-button>
                        <b-button href="{{ route('password.request') }}" variant="link">Esqueceu a sua
                    </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
