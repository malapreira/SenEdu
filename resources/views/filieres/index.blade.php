<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('filieres.create')}}">{{('Ajouter une filiere')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Nom Filiere</th>                     <th></th>
    </tr>
    @foreach($filieres as $filiere)
        <tr>
            <th>#</th>
            <th>{{$filiere->name}}</th>
            <th> {{ $filiere->classroom->name ?? '' }}</th>
            <th>
                <p><a href="{{route('editer_filiere',['id'=>$filiere->id])}}">Editer</a></p>

            </th>
        </tr>
    @endforeach
</table>

