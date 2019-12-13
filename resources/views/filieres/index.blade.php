<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('filiere.create')}}">{{('Ajouter une evaluation')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Nom controle</th>                        <th></th>
    </tr>
    @foreach($filiere as $filiere)
        <tr>
            <th>#</th>
            <th>{{$filiere->name}}</th>
            <th>
                <p><a href="{{route('edit_filiere',['id'=>$filiere->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>
