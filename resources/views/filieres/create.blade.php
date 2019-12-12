<div class="container">
    <div><h1>{{__('Enregistrement d\'une filiere')}}</h1></div>
    <div class="container">
        <form action="{{route('filiere.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" class="form-control" placeholder="le nom de la filiere">
            </div>
           <div>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>






@if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
