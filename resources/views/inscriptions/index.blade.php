<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('inscription.create')}}">{{('Ajouter une inscription')}}</a></p></div>
    <tr>
        <th>#</th>          <th>Date d'inscription</th>    <th>Montant verse</th>                <th></th>
    </tr>
    @foreach($inscription as $inscription)
        <tr>
            <th>#</th>
            <th>{{$inscription->date}}</th>
            <th>{{$inscription->amount}}</th>
            <th>
                <p><a href="{{route('edit_inscription',['id'=>$inscription->id])}}">Editer</a>

                </p>
            </th>
        </tr>
    @endforeach
</table>
