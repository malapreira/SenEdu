@extends("acces")

@section("contenu")


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
                <div class="col-md-12">
                    <a href="{{route('control_inscription.index')}}" class="btn btn-sm btn-success">Retour</a>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Valider</button>
            </div>
        </form>

    </div>

@endsection

