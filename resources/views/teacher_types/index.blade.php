@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('teacher_type.create')}}">{{('Ajouter le type de professeur')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                        <th width="50px">#</th>
                        <th>Nom matiere enseigne</th>
                        <th>Action</th>
                </tr>
                    @foreach($teacher_types as $teacher_type)
                        <tr>
                            <th>#</th>
                            <th>{{$teacher_type->name}}</th>
                            <th>
                                <p><a href="{{route('edit_teacher_type',['id'=>$teacher_type->id])}}">Editer</a>

                                </p>
                            </th>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>

@endsection
