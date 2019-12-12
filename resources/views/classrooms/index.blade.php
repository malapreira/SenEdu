<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('classroom.create')}}">{{('Ajouter une classe')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Nom Cours</th>                      <th></th>
    </tr>
    @foreach($classroom as $classroom)
        <tr>
            <th>#</th>
            <th>{{$classroom->name}}</th>
            <th>
                <p><a href="{{route('edit_classroom',['id'=>$classroom->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>
