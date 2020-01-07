@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('teacher_type.create')}}">{{('Ajouter le type de professeur')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                        <th width="50px">No</th>
                        <th>Nom matiere enseigne</th>
                        <th>Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($teacher_types as $teacher_type)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$teacher_type->name}}</td>

                    <th>
                        <div>
                            <a class="btn btn-success btn-sm" href="{{route('show_teacher_type',['id'=>$teacher_type->id])}}">Voir</a>
                            <a class="btn btn-primary btn-sm" href="{{route('edit_teacher_type',['id'=>$teacher_type->id])}}">Modifier</a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete_teacher_type',['id'=>$teacher_type->id])}}">Supprimer</a>
                        </div>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
