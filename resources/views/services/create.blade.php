<div class="container">
    <div><h1>{{__('Enregistrement d\'un service')}}</h1></div>
    <div class="container">
        <form action="{{route('service.store')}}" method="post">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            ...

            <div>
                <input type="text" name="name" class="form-control" placeholder="le nom du service">
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>




