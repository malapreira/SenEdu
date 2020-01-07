@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('course.create')}}">{{('Ajouter un cours')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Nom du Cours</th>
                    <th>Date du Cours</th>
                    <th>Heure debut</th>
                    <th>Heure fin</th>
                    <th width="260px">Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($course as $course)
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$course->name}}</th>
                    <th>{{$course->date}}</th>
                    <th>{{$course->early_hour}}</th>
                    <th>{{$course->end_hour}}</th>
                    <th>
                        <div>
                            <a class="btn btn-success btn-sm" href="{{route('show_course',['id'=>$course->id])}}">Voir</a>
                            <a class="btn btn-primary btn-sm" href="{{route('edit_course',['id'=>$course->id])}}">Modifier</a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete_course',['id'=>$course->id])}}">Supprimer</a>
                        </div>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
