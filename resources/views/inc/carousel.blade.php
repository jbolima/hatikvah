<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="carousel-example-generic" style="height: 600px;" class="carousel slide" data-ride="carousel">
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
        <div class="col-md-6 paragraph">
            <h4 class="text-center">We are Hatikvah, the Hope! We are Hatikvah, the Action!</h4>
            <h4 class="text-center">We are Todays Keys Solutions for the Future!</h4>
            <h4 class="text-center">We Challenge the Future!</h4>
            <h4 class="text-center">The keys tools for development, the progress and the welfare.</h4>
        </div>
    </div>
</div>
<style>
    #carousel-example-generic .item {
        height: 600px;

    }
</style>
