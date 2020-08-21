@extends('cms.cms_master')
@section('cms_content')
    <h2 class="page-header text-center"><b><i>B</i></b>-Hatikvah Consulting & Investments</h2>

    <h3> Direction & Management team </h3>
    <div class="row placeholders">


        <div class="col-xs-6 col-sm-3 placeholder">
            <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"-->
            <img width="175" height="150" src="{{ asset('images/'.'jmbolima.jpeg') }}">
            <h4>Jean Michel B.A.</h4>
            <span class="text-muted">Founder & General Manager</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <!--img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail"-->
            <img width="150" src="{{ asset('images/'.'florimond.jpeg') }}">
            <h4>Florimond M.K</h4>
            <span class="text-muted">Co-founder & Associate manager</span>
        </div>
    </div>
    <h2 class="sub-header">Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
            </tr>
            <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
