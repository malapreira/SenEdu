@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('matter.create')}}">{{('Ajouter une matiere')}}</a></p></div>
            <table class="table table-bordered table-striped">
                 <tr>
                     <th width="50px">#</th>
                     <th>Nom de la matiere</th>
                     <th>Action</th>
                 </tr>
                @foreach($matters as $matter)
                    <thead>

                    <tr class="table100-head">
                    <tr>
                        <th>#</th>
                        <th>{{$matter->name}}</th>
                        <th>
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{route('edit_matter',['id'=>$matter->id])}}">Modifier</a>
                                <a class="btn btn-danger btn-sm" href="{{route('edit_matter',['id'=>$matter->id])}}">Suprimer</a>
                            </div>
                        </th>
                    </tr>
                    </thead>
                @endforeach
            </table>
        </div>
    </div>

@endsection
