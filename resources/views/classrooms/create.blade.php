<div class="container">
    <div><h1>{{__('Ajouter une classe')}}</h1></div>
    <div class="container">
        <form action="{{route('classroom.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="name" class="form-control" placeholder="le nom de la classe">
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
            <div>
                <select name="filiere_id" id="filiere_id" class="form-control">
                    <option value=""></option>
                    @foreach($filiere as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select name="level_id" id="level_id" class="form-control">
                    <option value=""></option>
                    @foreach($level as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>

        </form>
