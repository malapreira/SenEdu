@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('level.create')}}">{{('Ajouter un niveau')}}</a></p></div>
            <table class="table table-bordered table-striped">
                   <tr>
                        <th width="50px">No</th>         
                        <th>Nom matiere</th>                     
                        <th width="270px">Action</th>
                    </tr>
                    <?php $no=1; ?>
                       @foreach($levels as $level)
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$level->name}}</th>
                        <th>
                            <div>
                                <a class="btn btn-success btn-sm" href="{{route('show_level',['id'=>$level->id])}}">Voir</a>
                                <a class="btn btn-primary btn-sm" href="{{route('edit_level',['id'=>$level->id])}}">Modifier</a>
                                <a class="btn btn-danger btn-sm" href="{{route('delete_level',['id'=>$level->id])}}">Supprimer</a>
                            </div>
                        </th>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection