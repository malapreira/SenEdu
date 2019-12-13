<div><p><a href="{{route('professor.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>

<table class="table table-striped">

    <tr>
         <th>#</th> <th>Nom</th> <th>Prénom</th> <th>Date de Naissance</th> <th>Lieu de Naissance</th> <th>Situation matrimoniale</th> <th>statut</th> <th>Adresse</th> <th>Téléphone</th> <th>Email</th> <th>Civilité</th>      <th>Action</th>      <th></th>
    </tr>
    @foreach($professor as $professor)
        <tr>
            <th>#</th>
            <th>{{$professor->name}}</th>P
            <th>{{$professor->first_name}}</th>
            <th>{{$professor->year_birth}}</th>
            <th>{{$professor->Birth_Place}}</th>
            <th>{{$professor->Marital_status}}</th>
            <th>{{$professor->status}}</th>
            <th>{{$professor->address}}</th>
            <th>{{$professor->phone}}</th>
            <th>{{$professor->email}}</th>
            <th>{{$professor->civility}}</th>
            <th></th>
            <th>
                <p><a href="{{route('edit_teacher_type',['id'=>$professor->id])}}">Modifier</a></p>
            </th>
        </tr>
    @endforeach
</table>
