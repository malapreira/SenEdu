<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('control.create')}}">{{('Ajouter une evaluation')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Nom evaluation</th>    <th>Date du evaluation</th>      <th>Heure du evaluation</th>                <th></th>
    </tr>
    @foreach($controls as $control)
        <tr>
            <th>#</th>
            <th>{{$control->name}}</th>
            <th>{{$control->date}}</th>
            <th>{{$control->time}}</th>
            <th>
                <p><a href="{{route('edit_control',['id'=>$control->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>
