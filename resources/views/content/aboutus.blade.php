@extends('master')
@section('content')
    <h3>About Us </h3>
    <hr>
    <h3>Direction & Management team</h3>
    <div class="row">
        <br>
        <div class="col-md-4">
            <p><img width="175" height="150" class="img-rounded" src="{{ asset('images/'.'jmbolima.jpeg') }}"></p>
            <h4><b>Jean Michel B.A.</b></h4>
            <h5>Founder & General Manager</h5>
        </div>
        <div class="col-md-4">
            <p><img width="150" height="150" class="img-rounded" src="{{ asset('images/'.'florimond.jpeg') }}"></p>
            <h4><b>Florimond K.M.</b></h4>
            <h5>Co-Founder & Associate Manager</h5>
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
@endsection
