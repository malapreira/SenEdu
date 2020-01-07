@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('matter.create')}}">{{('Ajouter une matiere')}}</a></p></div>
            <table class="table table-bordered table-striped">
                   <tr>
                        <th width="50px">#</th>         
                        <th>Nom matiere</th>                     
                        <th>Action</th>
                    </tr>
                       @foreach($matter as $matter)
                    <tr>
                        <th>#</th>
                        <th>{{$matter->name}}</th>
                    </th>
                    <th>
                        <div>
                            <a class="btn btn-primary btn-sm" href="{{route('edit_matter',['id'=>$matter->id])}}">Modifier</a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete_matter',['id'=>$matter->id])}}">Supprimer</a>
                            <a class="btn btn-danger btn-sm" href="{{route('show_matter',['id'=>$matter->id])}}">Voir</a>
                        </div>
                        
                    </tr>
                    @endforeach
            </table>

        </div>
    </div>
@endsection
