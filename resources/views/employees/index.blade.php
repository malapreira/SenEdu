


<div class="limiter">
    <div><p><a href="{{route('employees.create')}}">{{('Formulaire d\'inscription')}}</a></p></div>
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    @foreach($employees as $employee)
                    <thead>

                        <tr class="table100-head">
                            <th class="column1">Date</th>
                            <th class="column2">Order ID</th>
                            <th class="column3">Name</th>
                            <th class="column4">Price</th>
                            <th class="column5">Quantity</th>
                            <th class="column6">Total</th>
                        </tr>
                        <th>
                            <p><a href="{{route('modifier_employee',['id'=>$employee->id])}}">Modifier</a></p>
                        </th>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@foreach($employees as $employee)
    <tr>
        <th>#</th>
        <th>{{$employees->name}}</th>
        <th>{{$employees->first_name}}</th>
        <th> {{ $employees->year_birth}}</th>
        <th>{{$employees->Birth_Place}}</th>
        <th>{{$employees->Marital_status}}</th>
        <th> {{ $employees->status}}</th>
        <th>{{$employees->address}}</th>
        <th>{{$employees->phone}}</th>
        <th> {{ $employees->email}}</th>
        <th>{{$employees->password}}</th>
        <th>{{$employees->password_confirm}}</th>
        <th> {{ $employees->civility}}</th>
        <th>
           <p><a href="{{route('editer_employee',['id'=>$employee->id])}}">Modifier</a></p>
        </th>
    </tr>
@endforeach












