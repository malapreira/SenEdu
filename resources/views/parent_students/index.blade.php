@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('parent_student.create')}}">{{('Ajouter un parent')}}</a></p></div>

            <table class="table table-bordered table-striped">

                    <tr>
                        <th>No</th> 
                        <th width="100px">Nom</th>
                        <th width="200px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Téléphone</th>
                        <th>Action</th> 
                    </tr>
                    <?php $no=1; ?>
                    @foreach($parent_student as $parent_student)
                        <tr>
                            <th>{{$no++}}</th>
                            <th>{{$parent_student->name}}</th>
                            <th>{{$parent_student->first_name}}</th>
                            <th>{{$parent_student->year_birth}}</th>
                            <th>{{$parent_student->Birth_Place}}</th>
                            <th>{{$parent_student->phone}}</th>
                            <th>
                                <div>
                                    <a class="btn btn-success btn-sm" href="{{route('show_parent_student',['id'=>$parent_student->id])}}">Voir</a>
                                    <a class="btn btn-primary btn-sm" href="{{route('edit_parent_student',['id'=>$parent_student->id])}}">Modifier</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('delete_parent_student',['id'=>$parent_student->id])}}">Suprimer</a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </table>
        </div>
    </div>

@endsection