<form action="{{route('course.update',['id'=>$course->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom du cours" value="{{$course->name}}"></div>
    <div><input type="text" name="date" class="form-control" placeholder="la date du cours" value="{{$course->date}}"></div>
    <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$course->description}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
    <div>
                <select name="matter_id" id="matter_id" class="form-control">
                    <option value=""></option>
                    @foreach($matter as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select name="professor_id" id="professor_id" class="form-control">
                    <option value=""></option>
                    @foreach($professor as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select name="classroom_id" id="classroom_id" class="form-control">
                    <option value=""></option>
                    @foreach($classroom as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
</form>
