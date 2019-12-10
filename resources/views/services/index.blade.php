
<div class="limiter">
    <div><p><a href="{{route('services.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <tr>
                    <th>#</th>          <th>Nom du service</th>                     <th></th>
                    </tr>
                    @foreach($services as $service)
                    <thead>

                        <tr class="table100-head">
                        <tr>
                            <th>#</th>
                            <th>{{$service->name}}</th>
                            <th>{{ $service->employee->name ?? '' }}</th>
                            <th>{{$service->employee->first_name ??  ''}}</th>
                            <th> {{ $service->employee->year_birth ?? ''}}</th>
                            <th>{{$service->employee->Birth_Place ?? ''}}</th>
                            <th>{{$service->employee->Marital_status ?? ''}}</th>
                            <th>{{$service->employee->status ?? ''}}</th>
                            <th>{{$service->employee->address ?? ''}}</th>
                            <th>{{$service->employee->phone ?? ''}}</th>
                            <th> {{$service->employee->email ?? ''}}</th>
                            <th>{{$service->employee->password ?? ''}}</th>
                            <th>{{$service->employee->password_confirm ?? ''}}</th>
                            <th> {{$service->employee->civility ?? ''}}</th>
                            <th>
                                <p><a href="{{route('editer_service',['id'=>$service->id])}}">Modifier</a></p>
                            </th>
                        </tr>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

