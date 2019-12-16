@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('control.create')}}">{{('Ajouter une evaluation')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">#</th>
                    <th>Nom evaluation</th>
                    <th>Date du evaluation</th>
                    <th>Heure du evaluation</th>
                    <th width="200px">Action</th>
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
        </div>
    </div>

@endsection
