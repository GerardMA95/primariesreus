@extends('web.layout.master')

@section('title', 'Primaries Reus')

@section('style')
    @parent
@endsection
@section('header-main')
    @parent
@endsection
@section('section-name', 'contact-us')
@section('main')
    <div class="container">
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
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="title text-info">Preguntes?</h2>
                <p class="description">Ens encantarà respondre qualsevol dubte.
                    <br>
                    <br>
                </p>
                <form class="form needs-validation" novalidate role="form" id="contact-form" method="post" action="{{ route('conctactSave') }}">
                    <div class="form-group">
                        <label for="name" class="bmd-label-floating">Nom</label>
                        <input name="name" type="text" class="form-control" id="name" required>
                        <div class="invalid-tooltip">
                            Introdueix-hi el seu nom, siusplau
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_from" class="bmd-label-floating">Correu electrònic</label>
                        <input name="email_from" type="email" class="form-control" id="email_from" required>
                        <span class="bmd-help">Únicament l'utilitzarem per a contesar-li</span>
                        <div class="invalid-tooltip">
                            Introdueix-hi el seu correu, siusplau
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="form-control-label bmd-label-floating" for="message">Missatge</label>
                        <textarea name="text" class="form-control" rows="6" id="message" required></textarea>
                        <div class="invalid-tooltip">
                            Introdueix-hi el missatge, siusplau
                        </div>
                    </div>
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-12 col-lg-6 mx-auto">
                            <div class="g-recaptcha" data-sitekey="6LdkxFwUAAAAANLA3XlS3T2AINlRehuXTFVjKx9A"></div>
                        </div>
                    </div>
                    <div class="form-check mt-2">
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
                    <div class="submit text-center">
                                <input type="submit" class="btn btn-info btn-raised btn-round" value="Enviar">
                    </div>
                </form>
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