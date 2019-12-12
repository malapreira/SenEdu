
<div class="limiter">
    <div><p><a href="{{route('service.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <tr>
                    <th>#</th>          <th>Nom du service</th>       <th>Action</th>              <th></th>
                    </tr>
                    @foreach($service as $service)
                    <thead>

                        <tr class="table100-head">
                        <tr>
                            <th>#</th>
                            <th>{{$service->name}}</th>

                            <th>
                                <p><a href="{{route('edit_service',['id'=>$service->id])}}">Modifier</a></p>
                            </th>
                        </tr>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

