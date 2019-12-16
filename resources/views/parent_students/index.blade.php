@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a href="{{route('parent_student.create')}}">{{('Ajouter un parent')}}</a></p></div>

            <table class="table table-bordered table-striped">

                    <tr>
                         <th>#</th> 
                        <th width="150px">Nom</th>
                        <th width="200px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Téléphone</th>
                        <th width="150px">Action</th> 
                    </tr>
                    @foreach($parent_student as $parent_student)
                        <tr>
                            <th>#</th>
                            <th>{{$parent_student->name}}</th>P
                            <th>{{$parent_student->first_name}}</th>
                            <th>{{$parent_student->year_birth}}</th>
                            <th>{{$parent_student->Birth_Place}}</th>
                            <th>{{$parent_student->phone}}</th>
                            <th>{{$parent_student->civility}}</th>
                            <th></th>
                            <th>
                                <p><a href="{{route('edit_teacher_type',['id'=>$parent_student->id])}}">Modifier</a></p>
                            </th>
                        </tr>
                    @endforeach
                </table>
        </div>
    </div>

@endsection
