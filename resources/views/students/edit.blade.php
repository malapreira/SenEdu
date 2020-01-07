@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">        
            <div><h2 class="title">Formulaire d'incription</h2></div>
                        <div class="card-body">
                            <form action="{{route('update_student',['id'=>$student->id])}}" id="formulaire" class="form-group" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PATCH">
                                <div>
                                    <input type="text" name="name" class="form-control col-8" placeholder="Entrez votre nom" value="{{$student->name}}">
                                </div>
                               
                                <div>
                                    <br><input type="text" name="first_name" class="form-control col-8" placeholder="Entrez votre Prenom" value="{{$student->first_name}}">
                                </div>
                                <div>
                                    <br><input type="date" name="year_birth" class="form-control col-8" placeholder="Entrez votre date de naissance" value="{{$student->year_birth}}">
                                </div>
                                <div>
                                    <br><input type="text" name="birth_Place" class="form-control col-8" placeholder="Entrez votre Lieu de naissance" value="{{$student->birth_Place}}">
                                </div>
                                <div>
                                    <br><input type="text" name="address" class="form-control col-8" placeholder="Entrez votre adresse" value="{{$student->address}}">
                                </div>
                               
                                <div>
                                    <br><input type="text" name="phone" class="form-control col-8" placeholder="Entrez votre numero de téléphone" value="{{$student->phone}}">
                                </div>
                                <div>
                                    <br><input type="text" name="email" class="form-control col-8" placeholder="example@email.com" value="{{$student->email}}"><br>
                                </div>
                                <div class="form-row">
                                    <div class="civility">Genre:</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="civility" id="civilityF" value="0"/>
                                        <label class="form-check-label" for="civilityF">F</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="civility" id="civilityM" value="1"/>
                                        <label class="form-check-label" for="civilityM">M </label>
                                    </div>
                                </div>
                                <div>
                                    <br><a href="{{route('student.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                                    <button class="btn btn-success">Enregistrer</button>
                                </div>
                                <div>
                                    <br><select name="parent_student_id" id="parent_student_id" class="form-control col-8">
                                        <option value=""></option>
                                        @foreach($parent_students as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>

                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <br><select name="classrooms_id" id="classrooms_id" class="form-control col-8">
                                        <option value=""></option>
                                        @foreach($classroom as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>

                                        @endforeach
                                    </select>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
@endsection
