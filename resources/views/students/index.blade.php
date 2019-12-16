@extends("acces")

@section("contenu")

    <div><p><a href="{{route('student.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">

            <table class="table table-bordered table-striped">
                <div><p>Listes des Eleves</p></div>
                <div>
                    <tr>
                         <th width="50px">#</th> 
                        <th width="180px">Nom</th>
                        <th width="180px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>  
                        <th width="200px">Actions</th>    
                    </tr>
                </div>
                @foreach($student as $student)
                    <tr>
                        <th>#</th>
                        <th>{{$student->name}}</th>
                        <th>{{$student->first_name}}</th>
                        <th>{{$student->year_birth}}</th>
                        <th>{{$student->birth_Place}}</th>
                        <th></th>
                        <th>
                            <p><a href="{{route('edit_student',['id'=>$student->id])}}">Modifier</a></p>
                        </th>
                    </tr>

                @endforeach
            </table>
        </div>
    </div>



