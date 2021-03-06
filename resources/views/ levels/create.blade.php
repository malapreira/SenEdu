@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="container">
                <div><p><a href="{{route('level.store')}}">{{__('Enregistrement du niveau')}}</a></p></div>
                <div class="container">
                @csrf
                    <div>
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                    @endif
                        <input type="text" name="name" class="form-control" placeholder="le nom du Niveau">
                    </div>
                    <div>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
                    </div>
                    <div>
                        <a href="{{route('level.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                        <button class="btn btn-success">Enregistrer</button>
                    </div>
            </form>
@endsection

