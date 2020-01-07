@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('classroom.create')}}">{{('Ajouter une classe')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>          
                    <th>Nom Cours</th>                      
                    <th width="270px">Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($classroom as $classroom)
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$classroom->name}}</th>
                        <th>
                            <div>
                                <a class="btn btn-success btn-sm" href="{{route('show_classroom',['id'=>$classroom->id])}}">Voir</a>
                                <a class="btn btn-primary btn-sm" href="{{route('edit_classroom',['id'=>$classroom->id])}}">Modifier</a>
                                <a class="btn btn-danger btn-sm" href="{{route('delete_classroom',['id'=>$classroom->id])}}">Suprimer</a>
                               
                            </div>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
