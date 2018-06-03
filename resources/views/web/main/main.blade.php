@extends('web.layout.master')

@section('title', 'Primaries Reus')

@section('style')
    @parent
@endsection
@section('header-main')
    @parent
@endsection
@section('main')
    @if(session()->has('alertArray'))
        @foreach (session()->get('alertArray') as $alert)

            <div class="row">
                <div class="col-sm-6 mx-auto">
                    @include('web.modules.alert.basicAlert')
                </div>
            </div>
        @endforeach
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-profile card-plain">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <img src="{{ asset('images/web/logo/primariesReus.jpeg') }}" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>
                    </div>
                    <div class="card-body ">
                        <h2 class="card-title text-info">REUS. ELECCIONS MUNICIPALS 2019</h2>
                        <h4 class="card-category text-muted text-info">LES FAQS SOBRE LA LLISTA DE CONCENTRACIÓ DE VOT REPUBLICÀ</h4>
                        <a href="{{ route('adhesionsMain') }}" class="btn btn-info btn-round">Adherir-se<div class="ripple-container"></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-text">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h4 class="title text-info">Per què una llista de concentració de vot republicà?</h4>
                    <p>
                        Perquè creiem que la força més votada a les properes municipals haurà de superar els 10.000 vots i cap llista republicana per separat serà capaç d’assolir aquesta fita. Si no som la força més votada, només es podrà aconseguir una alcaldia republicana amb majoria absoluta i això en cap cas està garantit. Per tant, el risc que partits del 155 puguin assolir l’alcaldia de Reus és molt elevat i això no ho podem permetre de cap manera.
                    </p>

                    <h4 class="title text-info">Per  a què una llista de concentració de vot republicà?</h4>
                    <p>
                        Per avançar en el camí de la constitució de la República cal que els principals Ajuntaments del país comptin amb governs que ajudin a implementar els resultats del referèndum de l’1-O i les polítiques republicanes.
                    </p>

                    <h4 class="title text-info">Què passa amb la ideologia?</h4>
                    <p>
                        Fer república conté en si mateix un posicionament comú evident en tant que suposa tenir l’oportunitat d’implementar un projecte rupturista i participatiu que reflecteixi la voluntat col·lectiva. En aquest context haurem de fer un esforç tots i totes en consensuar el projecte de ciutat que volem per tal de treballar junts en la mateixa direcció des de les diverses sensibilitats ideològiques. L’esforç ens sembla que s’ho val i constitueix una diferenciació real respecte les diferents alternatives polítiques que confluiran a les pròximes eleccions municipals.
                    </p>

                    <h4 class="title text-info">Com organitzarem aquest plantejament polític?</h4>
                    <p>
                        Ho farem “a la republicana”. Amb la màxima transparència i radicalitat democràtica a través d’unes eleccions primàries obertes amb censos amplis que permetin exposar els diferents punts de vista polítics i que permetin als reusencs i les reusenques definir les seves prioritats en una sola llista que reculli la diversitat social de la ciutat.
                    </p>

                    <h4 class="title text-info">Si els partits tradicionals són reticents, què farem?</h4>
                    <p>
                        L’ 1-O ens ha ensenyat una cosa fonamental, que el poder està en mans de la gent i que els partits han d’atendre i respondre a aquesta circumstància. Si aconseguim generar un moviment ciutadà ampli, transversal i potent els partits polítics no tindran més remei que acceptar-ho i adherir-s’hi. D’altra forma, seran només ells els responsables de la involució que pot representar un govern d’extrema dreta a Reus.
                    </p>

                    <h4 class="title text-info">És una proposta només pels independentistes?</h4>
                    <p>
                        La República que volem és de tothom. Volem fer sobretot polítiques que millorin i situïn a la ciutat en un lloc preeminent de les ciutats del país, que facin de Reus la capital del Sud de Catalunya i creiem que les polítiques en el marc d’una república independent són les que encaixen en aquest context. En tot cas nosaltres volem comptar també amb el talent de reusencs i reusenques que no siguin independentistes, però que creguin en la democràcia i en la millora de la ciutat. Des de la República farem ciutat i país entre tots i totes.
                    </p>

                    <h4 class="title text-info">Quan ho farem?</h4>
                    <p>
                        Des d’avui mateix. I, si vols treballar com a voluntari o voluntària pel projecte, <a href="{{ route('adhesionsMain') }}">adhereix-t’hi</a>.
                    </p>
                </div>
            </div>
        </div>
        {{--<div class="section-comments">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-8 ml-auto mr-auto">--}}
                    {{--<div class="media-area">--}}
                        {{--<h2 class="title text-center text-info">Comentaris</h2>--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Anònim--}}
                                    {{--<small>&#xB7; Ahir</small>--}}
                                {{--</h4>--}}
                                {{--<p> Comentari random Comentari random Comentari random Comentari random Comentari random Comentari random Comentari random Comentari random </p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="media">--}}
                            {{--<div class="media-body">--}}
                                {{--<h4 class="media-heading">Gerard--}}
                                    {{--<small>&#xB7; 18:34</small>--}}
                                {{--</h4>--}}
                                {{--<p> Comentari random Comentari random Comentari random Comentari random Comentari random Comentari random Comentari random Comentari random </p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<h3 class="title text-center text-info">Deixa el teu comentari</h3>--}}
                    {{--<div class="media media-post">--}}
                        {{--<div class="media-body">--}}
                            {{--<div class="form-group label-floating bmd-form-group">--}}
                                {{--<label class="form-control-label bmd-label-floating" for="exampleBlogPost"> Escriu el teu comentari...</label>--}}
                                {{--<textarea class="form-control" rows="5" id="exampleBlogPost"></textarea>--}}
                            {{--</div>--}}
                            {{--<div class="media-footer">--}}
                                {{--<a href="#pablo" class="btn btn-primary btn-round btn-wd float-right">Comentar</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- end media-post -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection

@section('javascript')
    @parent
@endsection