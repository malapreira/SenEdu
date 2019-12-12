<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('teacher_type.create')}}">{{('Ajouter le type de professeur')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Nom matiere enseigne</th>                                      <th>Action</th>                <th></th>
    </tr>
    @foreach($teacher_types as $teacher_type)
        <tr>
            <th>#</th>
            <th>{{$teacher_type->name}}</th>
            <th>
                <p><a href="{{route('edit_teacher_type',['id'=>$teacher_type->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>
