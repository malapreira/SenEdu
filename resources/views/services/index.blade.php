@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('service.create')}}">{{('Ajouter un service')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="100px">No</th>
                    <th>Nom du service</th>
                    <th width=275px>Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($service as $service)
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$service->name}}</th>
                        <th>
                            <div>
                                <a class="btn btn-success btn-sm" href="{{route('show_service',['id'=>$service->id])}}">Voir</a>
                                <a class="btn btn-primary btn-sm" href="{{route('edit_service',['id'=>$service->id])}}">Modifier</a>
                                <a class="btn btn-danger btn-sm" href="{{route('delete_service',['id'=>$service->id])}}">Supprimer</a>
                                
                            </div>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
