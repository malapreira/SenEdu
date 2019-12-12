<div><p><a href="{{route('student.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>

<table class="table table-striped">

    <tr>
         <th>#</th> <th>Nom</th> <th>Prénom</th> <th>Date de Naissance</th> <th>Lieu de Naissance</th> <th>Niveau</th> <th>Filiere</th> <th>Adresse</th> <th>Téléphone</th> <th>Email</th> <th>Civilité</th>      <th></th>
    </tr>
    @foreach($student as $student)
        <tr>
            <th>#</th>
            <th>{{$student->name}}</th>
            <th>{{$student->first_name}}</th>
            <th>{{$student->year_birth}}</th>
            <th>{{$student->Birth_Place}}</th>
            <th>{{$student->level}}</th>
            <th>{{$student->filiere}}</th>
            <th>{{$student->address}}</th>
            <th>{{$student->phone}}</th>
            <th>{{$student->email}}</th>
            <th>{{$student->civility}}</th>
            <th></th>
            <th>
                <p><a href="{{route('edit_student',['id'=>$student->id])}}">Modifier</a></p>
            </th>
        </tr>
    @endforeach
</table>
