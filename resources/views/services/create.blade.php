<div class="container">
    <div><h1>{{__('Enregistrement d\'un produit')}}</h1></div>
    <div class="container">
        <form action="{{route('services.store')}}" method="post">
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

        <div>
            <select name="employee_id" id="employee_id" class="form-control">
                <option value=""></option>
                @foreach($employees as $key => $value)
                    <option value="{{$key}}" {{ $key == $service->employee_id ? 'selected="selected"':''}}>{{$value}}</option>
                @endforeach
            </select>
        </div>



