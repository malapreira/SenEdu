@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('control.create')}}">{{('Ajouter une evaluation')}}</a></p></div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Nom de la matière</th>
                    <th>Date d'evaluation</th>
                    <th>Heure debut</th>
                    <th>Heure fin</th>
                    <th width="275px">Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($control as $control)
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$control->name}}</th>
                    <th>{{$control->date}}</th>
                    <th>{{$control->early_hour}}</th>
                    <th>{{$control->end_hour}}</th>
                    <th>
                        <div>
                            <a class="btn btn-success btn-sm" href="{{route('show_control',['id'=>$control->id])}}">Voir</a>
                            <a class="btn btn-primary btn-sm" href="{{route('edit_control',['id'=>$control->id])}}">Modifier</a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete_control',['id'=>$control->id])}}">Supprimer</a>
                        </div>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
