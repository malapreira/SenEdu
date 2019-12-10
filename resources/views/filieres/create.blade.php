<div class="container">
    <div><h1>{{__('Enregistrement d\'une filiere')}}</h1></div>
    <div class="container">
        <form action="{{route('filieres.store')}}" method="post">
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

        <div>
            <select name="classroom_id" id="classroom_id" class="form-control">
                <option value=""></option>
                @foreach($classrooms as $key => $value)
                    <option value="{{$key}}" {{ $key == $filiere->classroom_id ? 'selected="selected"':''}}>{{$value}}</option>
                @endforeach
            </select>
        </div>





@if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
