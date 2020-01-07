@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('student.index')}}">Retour</a></p></div>
            <table class="table table-bordered table-striped">
                <th>{{$student->name}}</th>
                <th>{{$student->first_name}}</th>
                <th>{{$student->year_birth}}</th>
                <th>{{$student->birth_Place}}</th>
                <th>{{$student->phone}}</th>
                <th>{{$student->email}}</th>
                <th>{{$student->civility}}</th>
                <th>{{$student->parent_student_id}}</th>
                <th>{{$student->classroom_id}}</th>
            </table>

        </div>
    </div>
@endsection
