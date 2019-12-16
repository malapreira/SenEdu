@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a href="{{route('professor.create')}}">{{('Ajouter un professeur')}}</a></p></div>
            <table class="table table-bordered table-striped">
                    <tr>
                         <th width="50px">#</th> 
                        <th width="100">Nom</th>
                        <th width="200">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th width="200px">Action</th>     
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
        </div>
    </div>
@endsection
