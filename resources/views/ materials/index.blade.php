
<div class="limiter">
    <div><p><a href="{{route('matters.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <tr>
                    <th>#</th>          <th>Nom de la matiere</th>                     <th></th>
                    </tr>
                    @foreach($matters as $matter)
                    <thead>

                        <tr class="table100-head">
                        <tr>
                            <th>#</th>
                            <th>{{$matter->name}}</th>
                            <th>
                                <p><a href="{{route('editer_service',['id'=>$matter->id])}}">Modifier</a></p>
                            </th>
                        </tr>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

