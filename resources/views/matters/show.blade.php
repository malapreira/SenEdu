@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('matter.index')}}">Retour</a></p></div>
            <table class="table table-bordered table-striped">
                <br><th>{{$matter->name}}</th>
                <th>{{$matter->description}}</th>
            </table>

        </div>
    </div>
@endsection
