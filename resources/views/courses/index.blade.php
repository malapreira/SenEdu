<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('course.create')}}">{{('Ajouter un cours')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Nom Cours</th>    <th>Date du Cours</th>                  <th></th>
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
