@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('matter.create')}}">{{('Ajouter une matiere')}}</a></p></div>
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
                            <p><a href="{{route('edit_matter',['id'=>$matter->id])}}">Modifier</a></p>
                        </th>
                    </tr>
                    </thead>
                @endforeach
            </table>
        </div>
    </div>

@endsection
