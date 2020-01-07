@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('student.create')}}">{{('Ajouter un Eleve')}}</a></p></div>

            <table class="table table-bordered table-striped">

                    <tr>
                         <th>No</th> 
                        <th width="100px">Nom</th>
                        <th width="200px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Téléphone</th>
                        <th width="275px">Action</th> 
                    </tr>
                    <?php $no=1; ?>
                    @foreach($student as $student)
                        <tr>
                            <th>{{$no++}}</th>
                            <th>{{$student->name}}</th>
                            <th>{{$student->first_name}}</th>
                            <th>{{$student->year_birth}}</th>
                            <th>{{$student->birth_Place}}</th>
                            <th>{{$student->phone}}</th>
                            <th>
                                <div>
                                    <a class="btn btn-success btn-sm" href="{{route('show_student',['id'=>$student->id])}}">Voir</a>
                                    <a class="btn btn-primary btn-sm" href="{{route('edit_student',['id'=>$student->id])}}">Modifier</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('delete_student',['id'=>$student->id])}}">Suprimer</a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </table>
        </div>
    </div>

@endsection
