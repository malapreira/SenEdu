@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('parent_student.index')}}">Retour</a></p></div>

            <table class="table table-bordered table-striped">
                <th>{{$parent_student->name}}</th>
                <th>{{$parent_student->first_name}}</th>
                <th>{{$parent_student->year_birth}}</th>
                <th>{{$parent_student->Birth_Place}}</th>
                <th>{{$parent_student->Marital_status}}</th>
                <th>{{$parent_student->status}}</th>
                <th>{{$parent_student->address}}</th>
                <th>{{$parent_student->phone}}</th>
                <th>{{$parent_student->email}}</th>
                <th>{{$parent_student->civility}}</th>
            </table>
        </div>
    </div>

@endsection
