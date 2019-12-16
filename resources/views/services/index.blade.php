@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a href="{{route('inscription.create')}}">{{('Ajouter un service')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">#</th>
                    <th>Nom du service</th>
                    <th>Action</th>
                </tr>
                @foreach($service as $service)
                    <thead>

                    <tr class="table100-head">
                    <tr>
                        <th>#</th>
                        <th>{{$service->name}}</th>

                        <th>
                            <p><a href="{{route('edit_service',['id'=>$service->id])}}">Modifier</a></p>
                        </th>
                    </tr>
                    </thead>
                @endforeach
            </table>
        </div>
    </div>

@endsection
