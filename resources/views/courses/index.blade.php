@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('course.create')}}">{{('Ajouter un cours')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">#</th>
                    <th>Nom du Cours</th>
                    <th>Date du Cours</th>
                    <th width="200px">Action</th>
                </tr>
                @foreach($course as $course)
                    <tr>
                        <th>#</th>
                        <th>{{$course->name}}</th>
                        <th>{{$course->date}}</th>
                        <th>
                            <p><a href="{{route('edit_course',['id'=>$course->id])}}">Editer</a>

                            </p>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
