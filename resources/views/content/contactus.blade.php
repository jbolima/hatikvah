@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>BM-H| CONTACT</h3>
            <hr>
            <p>Laissez-nous votre message et nous reviendrons vers vous dès que possible.</p>
            <br>

            <p><b>ATTENTION !</b>
                Pour établir un contact personnalisé et aussi consulter de façon confidentielle vos messages, nous vous
                recommandons :
                <br>
                1) Pour une fois seulement, à travers le menu <b>S'ENREGISTRER</b>, laissez-nous vos coordonnées: Votre
                nom de contact, votre adresse e-mail et votre mot de passe d’accès confidentiel dans BM Holding s.a.r.l
                ;
                <br>
                2) De vous identifier chaque fois que vous voulez consulter notre réponse à votre message à partir du
                menu <b>S'IDENTIFIER</b>
            </p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            @include('inc.contactus-form')
        </div>
    </div>
@endsection
