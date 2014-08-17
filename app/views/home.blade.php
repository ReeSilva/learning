@extends('layout')

@section('content')
    <div class="row">
        <div class="small-8 medium-8 large-5 columns card form">
            <hgroup>
                <h3>Mostre o seu amor pela cidade mais amor do país.</h3>
            </hgroup>

            {{ Form::open(array('route' => 'insert_post', 'data-abide' => '')) }}
                <fieldset>

                    <legend>O que São Paulo fez pra você?</legend>

                    <div class="row">
                        <div class="small-12 columns">
                            {{ form::label('title', 'Título') }}
                            {{ Form::text('title', '', $attributes = array('placeholder' => 'Título da sua história', 'required' => '')) }}
                            <small class="error">Sua história tem que ter um título.</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-16 columns">
                            {{ form::label('post', 'Conte a história') }}
                            {{ Form::textarea('post', '', $attributes = array('placeholder' => 'Conte-nos a sua história', 'required' => '')) }}
                            <small class="error">Conte-nos sua história.</small>
                        </div>
                    </div>

                    {{ Form::submit('Contar', $attributes = array('class' => 'small-offset-11 button')) }}

                </fieldset>
            {{ Form::close() }}

        </div>

        <div class="small-7 medium-7 large-10 small-offset-1 medium-offset-1 large-offset-1 columns">
            @if (count($posts) < 1)
                <div class="row">
                    <div class="small-16 columns card card-empty">
                        Nenhum post foi criado ainda! Seja o primeiro :) !
                    </div>
                </div>
            @else
                @foreach($posts as $post)
                    <div class="row">
                        <div class="small-16 columns card">
                            <hgroup>
                                <h2>{{ $post->title }}</h2>
                                <h5>Por Anônimo em {{ date("d/m/Y", strtotime( $post->created_at )) }} às {{ date("H:i:s", strtotime( $post->created_at )) }}</h5>
                            </hgroup>
                            <hr/>
                            <p>{{ $post->post }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@stop