@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('professor.create')}}">{{('Ajouter un professeur')}}</a></p></div>
            <table class="table table-bordered table-striped">
                    <tr>
                         <th width="50px">No</th> 
                        <th width="100px">Nom</th>
                        <th width="200px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th width="150px">Telephone</th>
                        <th width="200px">Action</th>     
                    </tr>
                    <?php $no=1; ?>
                    @foreach($professor as $professor)
                        <tr>
                            <th>{{$no++}}</th>
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
                            <th>
                                <div>
                                    <a class="btn btn-success btn-sm" href="{{route('show_professor',['id'=>$professor->id])}}">Voir</a>
                                    <a class="btn btn-primary btn-sm" href="{{route('edit_professor',['id'=>$professor->id])}}">Modifier</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('edit_professor',['id'=>$professor->id])}}">Suprimer</a>
                                </div>
                            </th>
                        </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
