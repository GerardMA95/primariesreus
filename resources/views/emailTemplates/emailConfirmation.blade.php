@extends('emailTemplates.layout.master')

@section('title', 'Primaries Reus')

@section('style')
    @parent
@endsection
@section('section-name', '')
@section('main')
    <?php
    $user = \App\User::all()->first();
    ?>
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="card-title text-info">Primàries Reus</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="{{ asset('images/web/logo/primariesReus.jpeg') }}"
                     style="max-height: 200px; max-width: 200px;" alt="Circle Image" class="rounded-circle img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h5 class="description">
                    Correu de confirmació de l'usuari
                </h5>
                <h4 class="card-title text-info">{{ $user->name }} {{ $user->surname }} {{ $user->surname2 }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <a href="{{route('userConfirmationEmail', ['userId' => $user->id, 'userToken' => sha1($user->email)])}}" class="btn text-white btn-primary btn-block btn-round">
                    CONFIRMAR USUARI
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h5 class="description">
                    En cas de no rebre confirmació en 48 hores procedirem a esborrar les seves dades.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-profile card-plain">
                    <div class="card-body ">
                        <h2 class="card-title text-info">Política de privadessa</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-text">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <p>
                        Primàries Reus garanteix el compliment amb la normativa de protecció de dades de caràcter
                        personal, així com la implementació de les mesures de seguretat recollides en l’article 9 de la
                        Llei Orgànica 15/1999, de 13 de desembre, de protecció de dades de caràcter personal (LOPD) i el
                        Art. 81 del Reial Decret 1720/2007, de 21 de desembre, de Protecció de Dades Personals (en
                        endavant, RDLOPD).
                    </p>
                    <p>
                        Les dades que Primàries Reus sol•liciti o els usuaris facilitin seran tractades amb conformitat
                        a la Llei Orgànica de Protecció de Dades (LOPD) i s’utilitzaran d’acord amb les següents
                        finalitats:
                        -Mantenir informat a l’usuari sobre les nostres notícies i novetats o d’atendre les seves
                        consultes i peticions a través dels formularis i correus electrònics que posem a la seva
                        disposició a tal efecte a la nostra pàgina web.
                    </p>
                    <p>
                        Segons els art. 5 i 6 de la LOPD, aquestes dades formaran part d’un fitxer automatitzat, que ha
                        estat inscrit en el Registre General de Protecció de Dades de l’Agència Espanyola de Protecció
                        de Dades (AEPD). L’usuari podrà accedir, rectificar i cancel•lar les seves dades en qualsevol
                        moment mitjançant comunicació escrita, a la qual heu d’adjuntar una fotocòpia del vostre DNI,
                        adreçada a l’Assemblea Nacional Catalana a: CALLE FALSA 00 MORDOR o al correu electrònic
                        “XXXX@RANDOM.CAT"
                    </p>
                    <p>
                        Les dades requerides seran utilitzades únicament per enviar informació sobre les primàries a
                        Reus, i en cap cas amb finalitats comercials.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    @parent
@endsection