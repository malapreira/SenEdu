<form action="{{route('classroom.update',['id'=>$classroom->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom de la classe" value="{{$classroom->name}}"></div>
    <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$classroom->description}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
    <div>
                <select name="student_id" id="student_id" class="form-control">
                    <option value=""></option>
                    @foreach($student as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select name="academic__year_id" id="academic__year_id" class="form-control">
                    <option value=""></option>
                    @foreach($academic__year as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
</form>
