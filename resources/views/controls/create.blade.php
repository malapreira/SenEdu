<div class="container">
    <div><h1>{{__('Enregistrement d\'un cours')}}</h1></div>
    <div class="container">
        <form action="{{route('control.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" class="form-control" placeholder="le nom du contole">
            </div>
            <div>
                <input type="text" name="date" class="form-control" placeholder="la date du controle">
            </div>
            <div>
                <input type="text" name="time" class="form-control" placeholder="l'heure du controle">
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
