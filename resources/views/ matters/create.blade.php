@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">

            <div class="container">
                <div><h1>{{__('Enregistrement d\'une matiere')}}</h1></div>
                <div class="container">
                    <form action="{{route('matters.store')}}" method="post">
                        @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                        @endif
                        ...

                        <div>
                            <input type="text" name="name" class="form-control" placeholder="le nom de la matiere">
                        </div>
                        <div>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
                        </div>
                        <div>
                            <a href="{{route('matter.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                            <button class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>

                    <div>
                        <select name="employee_id" id="employee_id" class="form-control">
                            <option value=""></option>
                            @foreach($courses as $key => $value)
                                <option value="{{$key}}" {{ $key == $matter->course_id ? 'selected="selected"':''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
        </div>
    </div>

@endsection

