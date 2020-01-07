@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('employee.create')}}">{{('Ajouter un empoyee')}}</a></p></div>
                <table class="table table-bordered table-striped">

                    <tr>
                         <th width="50px">No</th> 
                        <th width="150px">Nom</th>
                        <th width="200px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th width="270px">Action</th>
                    </tr>
                    <?php $no=1; ?>
                    @foreach($employee as $employee)
                        <tr>
                            <th>{{$no++}}</th>
                            <th>{{$employee->name}}</th>
                            <th>{{$employee->first_name}}</th>
                            <th>{{$employee->year_birth}}</th>
                            <th>{{$employee->Birth_Place}}</th>
                            <th>
                                <div>
                                    <a class="btn btn-success btn-sm" href="{{route('show_employee',['id'=>$employee->id])}}">Voir</a>
                                    <a class="btn btn-primary btn-sm" href="{{route('edit_employee',['id'=>$employee->id])}}">Modifier</a>
                                    <a class="btn btn-danger btn-sm" href="{{route('edit_employee',['id'=>$employee->id])}}">Suprimer</a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </table>
        </div>
    </div>
@endsection
