@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('filiere.create')}}">{{('Ajouter une filiere')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Nom de la filiere</th>
                    <th width="270px">Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($filieres as $filiere)
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$filiere->name}}</th>
                    <th>
                        <div>
                            <a class="btn btn-success btn-sm" href="{{route('show_filiere',['id'=>$filiere->id])}}">Voir</a>
                            <a class="btn btn-primary btn-sm" href="{{route('edit_filiere',['id'=>$filiere->id])}}">Modifier</a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete_filiere',['id'=>$filiere->id])}}">Supprimer</a>
                        </div>
                    </th>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection

