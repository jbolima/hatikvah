<div class="row">
    <div class="row">
        <div class="col-md-6" style=" margin-top: -55px;">
            <div class="row">
                <div id="carousel-example-generic" style=" padding: 15px; border: 15px; margin:15px;"
                     class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach( $carousels as $carousel )
                            <li data-target="#carousel-Indicators" data-slide-to="{{ $loop->index }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner center-block" role="listbox">
                        @foreach( $carousels as $carousel )
                            <div class="item {{ $loop->first ? 'active' : '' }}">
                                <h3 class="text-success text-left">{{ $carousel->stitle }}</h3>
                                <img class="d-block car-img" src="{{ asset("images/{$carousel->simage}") }}"
                                     alt="{{ $carousel->stitle }}">
                                <div class="carousel-caption d-none d-md-block">
                                <!--<p>{!! $carousel->sdescription !!}</p>-->
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-md-12">
                <h4>Bureaux et Agences extérieures:</h4>
                <h5><b>RDC</b></h5>
                <span>
                    - NORD-KIVU:Rue du Mussée no 14, Q/Himbi C/Goma Ville de Goma.<br>
                    - KISANGANI: ouverture très bientôt.<br>
                    - KINSHASA : Ouverture très bientôt.<br>
                </span>
                <h5><b>ISRAEL</b></h5>
                <span>
                        - Rue Kakal 3/1 ville de Bat-Yam district de Tel-Aviv.
                    </span>
            </div>

        </div>
        <div class="col-md-6 p-35-md paragraph">
            <h4 class="text-justify">Nous sommes BM Holding S.A.R.L, nous sommes un rêve pour l'avenir mais en action
                dans le présent.
                Nous challengeons les defis du Future dans notre Aujourd’hui.<br><br>

                BM holding S.A.R.L: l’innovation perpétuelle, le développement, le progrès et le bien-être. Nous sommes
                « All in one ».<br><br>
                BM Holding S.A.R.L : Un team en consulting avec une expertise diversifiée pour conseiller, accompagner
                et soutenir les projets fiables d’investissement.
            </h4>
        </div>
        <div class="col-md-6 p-35-md">
            <h4>BM-H spot publicitaire</h4>
            <iframe style="width: 100%" width="560" height="315" src="https://www.youtube.com/embed/-9787lyC7mk"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>
</div>
<style>
    #carousel-example-generic .item {
        height: 300px;

    }

    .carousel-control {
        background: 0 !important;
    }

    @media (max-width: 1080px) {
        .p-35-md {
            padding: 0 35px;
        }
    }

    .carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
        display: block;
        max-width: 100%;
        height: auto;
        width: 100%;
    }
</style>
