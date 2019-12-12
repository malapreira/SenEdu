<div><p><a href="{{route('employee.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>

<table class="table table-striped">

    <tr>
         <th>#</th> <th>Nom</th> <th>Prénom</th> <th>Date de Naissance</th> <th>Lieu de Naissance</th> <th>Situation Matrimonial</th> <th>Statut</th> <th>Adresse</th> <th>Téléphone</th> <th>Email</th> <th>Civilité</th>      <th></th>
    </tr>
    @foreach($employee as $employee)
        <tr>
            <th>#</th>
            <th>{{$employee->name}}</th>
            <th>{{$employee->first_name}}</th>
            <th>{{$employee->year_birth}}</th>
            <th>{{$employee->Birth_Place}}</th>
            <th>{{$employee->Marital_status}}</th>
            <th>{{$employee->status}}</th>
            <th>{{$employee->address}}</th>
            <th>{{$employee->phone}}</th>
            <th>{{$employee->email}}</th>
            <th>{{$employee->civility}}</th>
            
            <th></th>
            <th>
                <p><a href="{{route('edit_$employee',['id'=>$employee->id])}}">Modifier</a></p>
            </th>
        </tr>
    @endforeach
</table>
