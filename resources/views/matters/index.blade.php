@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a href="{{route('matter.create')}}">{{('Ajouter une matiere')}}</a></p></div>
            <table class="table table-bordered table-striped">
                     <tr>
                        <th width="50px">#</th>         
                        <th>Nom matiere</th>                     
                        <th>Action</th>
                     </tr>
                       @foreach($matters as $matter)
                               <tr>
                                       <th>#</th>
                                       <th>{{$matter->name}}</th>
                                        <th>
                                            <p><a href="{{route('edit_matter',['id'=>$matter->id])}}">Editer</a></p>
                                        </th>
                                       <th></th>
                                   </tr>
                           @endforeach
                   </table>

        </div>
    </div>

    @endsection
