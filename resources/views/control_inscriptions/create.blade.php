@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
 

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Entrer une notes</h3>
            </div>
        </div>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif

        <form action="{{route('control_inscription.store')}}" method="post">
            <div class="row">
                <div class="col-md-12">
                    <strong>Notes :</strong>
                    <input type="text" name="note" class="form-control" placeholder="Entrer une note">
                </div>
                <div>
                    <br><a href="{{route('control_inscription.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                    <button class="btn btn-success">Enregistrer</button>
                </div>
            </div>
        </form>

    </div>

@endsection

