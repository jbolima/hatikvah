@if( Session::has('sm'))
    <!-- down alert message if item or product added in the Cart-->
    <div id="sm-box" class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <p>{{ Session::get('sm') }}</p>
            </div>
        </div>
    </div>
    <!--end of alert message -->
@endif
