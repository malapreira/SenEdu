@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('level.create')}}">{{('Ajouter un niveau')}}</a></p></div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="50px">#</th>         
                        <th>Nom du Niveau</th>      
                        <th>Action</th>            
                     </tr>
                      @foreach($level as $level)
                     <tr>
                        <th>#</th>
                        <th>{{$level->name}}</th>
                        <th>
                            <p><a href="{{route('edit_level',['id'=>$level->id])}}">Editer</a></p>
                        </th>
                    </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
