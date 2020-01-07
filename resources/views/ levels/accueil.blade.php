@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('level.create')}}">{{('Ajouter un niveau')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="100px">#</th>
                    <th>Nom du niveau</th>
                    <th>Action</th>
                </tr>
                @foreach($levels as $level)
                    <tr>
                        <th>#</th>
                        <th>{{$level->name}}</th>
                        <th>
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{route('edit_level',['id'=>$level->id])}}">Modifier</a>
                                <a class="btn btn-danger btn-sm" href="{{route('edit_level',['id'=>$level->id])}}">Suprimer</a>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection