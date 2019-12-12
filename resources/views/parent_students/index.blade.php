<div><p><a href="{{route('parent_student.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>

<table class="table table-striped">

    <tr>
         <th>#</th> <th>Nom</th> <th>Prénom</th> <th>Date de Naissance</th> <th>Lieu de Naissance</th> <th>Situation matrimoniale</th> <th>statut</th> <th>Adresse</th> <th>Téléphone</th> <th>Email</th> <th>Civilité</th>      <th>Action</th>      <th></th>
    </tr>
    @foreach($parent_student as $parent_student)
        <tr>
            <th>#</th>
            <th>{{$parent_student->name}}</th>P
            <th>{{$parent_student->first_name}}</th>
            <th>{{$parent_student->year_birth}}</th>
            <th>{{$parent_student->Birth_Place}}</th>
            <th>{{$parent_student->Marital_status}}</th>
            <th>{{$parent_student->status}}</th>
            <th>{{$parent_student->address}}</th>
            <th>{{$parent_student->phone}}</th>
            <th>{{$parent_student->email}}</th>
            <th>{{$parent_student->civility}}</th>
            <th></th>
            <th>
                <p><a href="{{route('edit_teacher_type',['id'=>$parent_student->id])}}">Modifier</a></p>
            </th>
        </tr>
    @endforeach
</table>
