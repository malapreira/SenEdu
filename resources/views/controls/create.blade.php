@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
           
           <div class="container">
                <div><h1>{{__('Enregistrement d\'un cours')}}</h1></div>
                <div class="container">
                    <form action="{{route('control.store')}}" method="post">
                        @csrf
                        <div>
                            <br><input type="text" name="name" class="form-control" placeholder="le nom du contole">
                        </div>
                        <div>
                            <br><input type="date" name="date" class="form-control" placeholder="la date du controle">
                        </div>
                        <div>
                            <br><input type="time" name="early_hour" class="form-control" placeholder="Heure debut">
                        </div>
                        <div>
                            <br><input type="time" name="end_hour" class="form-control" placeholder="Heure fin"><br>
                        </div>
                        <div>
                            <a href="{{route('control.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                            <button class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    @endsection
