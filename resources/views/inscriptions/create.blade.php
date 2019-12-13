<div class="container">
    <div><h1>{{__('Inscription d\'un eleve')}}</h1></div>
    <div class="container">
        <form action="{{route('inscription.store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="date" class="form-control" placeholder="la date d'inscription">
            </div>
            <div>
                <input type="text" name="amount" class="form-control" placeholder="Le montant verse">
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
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
