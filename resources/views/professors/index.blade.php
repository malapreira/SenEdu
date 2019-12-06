
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('professors.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    @foreach($professors as $professor)
                        <thead>

                        <tr class="table100-head">
                            <th class="column1">Date</th>
                            <th class="column2">Order ID</th>
                            <th class="column3">Name</th>
                            <th class="column4">Price</th>
                            <th class="column5">Quantity</th>
                            <th class="column6">Total</th>
                        </tr>
                        <th>
                            <p><a href="{{route('modifier_professor',['id'=>$professor->id])}}">Modifier</a></p>
                        </th>
                        </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

