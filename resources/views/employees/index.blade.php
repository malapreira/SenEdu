@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('employee.create')}}">{{('Ajouter un empoyee')}}</a></p></div>
                <table class="table table-bordered table-striped">

                    <tr>
                         <th width="50px">#</th> 
                        <th width="150px">Nom</th>
                        <th width="200px">Prénom</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th width="200px">Action</th>
                    </tr>
                    @foreach($employee as $employee)
                        <tr>
                            <th>#</th>
                            <th>{{$employee->name}}</th>
                            <th>{{$employee->first_name}}</th>
                            <th>{{$employee->year_birth}}</th>
                            <th>{{$employee->Birth_Place}}</th>
                            <th></th>
                            <th>
                                <p><a href="{{route('edit_$employee',['id'=>$employee->id])}}">Modifier</a></p>
                            </th>
                        </tr>
                    @endforeach
                </table>
        </div>
    </div>
@endsection
