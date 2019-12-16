@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a href="{{route('filiere.create')}}">{{('Ajouter une filiere')}}</a></p></div>
            <table class="table table-bordered table-striped">
                   <tr>
                       <th width="10%">Numero</th>
                       <th width="35%">Nom de la filiere</th>
                       <th width="35%">Action</th>
                       <th></th>
                   </table>

                @foreach($filiere as $filiere)
                    <tr>
                        <th>#</th>
                        <th>{{$filiere->name}}</th>
                        <th>
                        </th>
                    </tr>
                @endforeach
                </table>
        </div>
    </div>


@endsection
