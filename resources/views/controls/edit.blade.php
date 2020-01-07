@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <form action="{{route('update_control',['id'=>$control->id])}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PATCH">
                <div><input type="text" name="name" class="form-control" placeholder="le nom du coontrole" value="{{$control->name}}"></div>
                <div><input type="date" name="date" class="form-control" placeholder="la date du controle" value="{{$control->date}}"></div>
                <div><input type="time" name="early_hour" class="form-control" placeholder="l'heure de debut" value="{{$control->early_hour}}"></div>
                <div><input type="time" name="end_hour" class="form-control" placeholder="l'heure de fin" value="{{$control->end_hour}}"></div>
                <div> <button class="btn btn-primary">Enregistrer</button> </div>
            </form>

@endsection