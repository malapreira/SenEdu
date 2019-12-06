<div><p><a href="{{route('parent_students.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>

<table class="table table-striped">

    <tr>
         <th>#</th> <th>Nom</th> <th>Prénom</th> <th>Date de Naissance</th> <th>Lieu de Naissance</th> <th>Situation Matrimonial</th> <th>Statut</th> <th>Adresse</th> <th>Téléphone</th> <th>Email</th> <th>Civilité</th>      <th></th>
    </tr>
    @foreach($parent_students as $parent_student)
        <tr>
            <th>#</th>
            <th>{{$parent_students->name}}</th>
            <th>{{$parent_students->first_name}}</th>
            <th>{{$parent_students->civility}}</th>
            <th>{{$parent_students->year_birth}}</th>
            <th>{{$parent_students->Birth_Place}}</th>
            <th>{{$parent_students->Marital_status}}</th>
            <th>{{$parent_students->status}}</th>
            <th>{{$parent_students->address}}</th>
            <th>{{$parent_students->phone}}</th>
            <th>{{$parent_students->email}}</th>
            <th></th>
            <th>
                <p><a href="{{route('modifier_$parent_student',['id'=>$$parent_student->id])}}">Modifier</a></p>
            </th>
        </tr>
    @endforeach
</table>
