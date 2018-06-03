@extends('web.layout.master')

@section('title', 'Primaries Reus')

@section('style')
    @parent
@endsection
@section('header-main')
    @parent
@endsection
@section('section-name', 'about-us')
@section('main')
    {{-- Form Errors --}}
    @include('web.modules.showRequestErrors')

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
        <div class="about-team">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Formulari d'<span class="text-warning">adhesions</span></h2>
                    <h5 class="description">
                        Deixa'ns les teves dades per iniciar la teva adhesió al projecte de primàries republicanes
                    </h5>
                </div>
            </div>
            <hr>
        </div>
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Dades necessàries</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-success">
                                            <i class="material-icons">verified_user</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Dades personals</h4>
                                            <p class="description">
                                                Les dades requerides seran utilitzades únicament per enviar informació sobre les primàries a Reus, i en cap cas amb finalitats comercials.
                                                <a href="{{ route('policyMain') }}">Més informació</a>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mr-auto">
                                    <div class="social text-center">
                                        <a href="https://www.facebook.com/PrimariesReus/" target="_blank" class="btn btn-just-icon btn-facebook btn-link" rel="tooltip" title="Facebook" data-original-title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                        <a href="https://twitter.com/PrimariesReus" target="_blank" class="btn btn-just-icon btn-twitter btn-link" rel="tooltip" title="Twitter" data-original-title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://t.me/PrimariesReus" target="_blank" class="btn btn-just-icon btn-twitter btn-link" rel="tooltip" title="Telegram" data-original-title="Telegram">
                                            <i class="fab fa-telegram-plane"></i>
                                        </a>
                                    </div>
                                    <form class="form needs-validation" novalidate method="post" action="{{ route('adhesionsSave') }}">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                </div>
                                                <input type="text" name="name" class="form-control" placeholder="Nom" required>
                                                <div class="invalid-tooltip">
                                                    Introdueix-hi el seu nom, siusplau
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                </div>
                                                <input type="text" name="surname" class="form-control" placeholder="Primer cognom" required>
                                                <div class="invalid-tooltip">
                                                    Introdueix-hi el seu primer cognom, siusplau
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                </div>
                                                <input type="text" name="surname2" class="form-control" placeholder="Segon cognom">
                                                <div class="invalid-tooltip">
                                                    Introdueix-hi el seu segon cognom, siusplau
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons">mail</i>
                                                </span>
                                                </div>
                                                <input type="email" name="email" class="form-control" placeholder="Correu electrònic" required>
                                                <div class="invalid-tooltip">
                                                    Introdueix-hi el seu correu electrònic, siusplau
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input name="terms" class="form-check-input" type="checkbox" value="1" required>
                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                <div class="invalid-feedback show">Es necesàri que accepti les condicions per a poder continuar</div>

                                                Accepto
                                                <a href="{{ route('policyMain') }}">els termes i les condicions</a>.
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 m-2">
                                                <div class="g-recaptcha" data-sitekey="6LdkxFwUAAAAANLA3XlS3T2AINlRehuXTFVjKx9A"></div>
                                            </div>
                                        </div>
                                        {!! csrf_field() !!}
                                        <div class="text-center">
                                            <button class="btn btn-info btn-round" type="submit">Adhereix-m'hi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('javascript')
    @parent
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection