@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <form action="{{route('update_parent_student',['id'=>$parent_student->id])}}" method="post" class="form-group" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PATCH">
                   <div class="col-12">
                        <input type="text" name="name" placeholder="Entrez votre nom" id="name" class="form-control" value="{{$parent_student->name}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="first_name" placeholder="Entrez votre Prenom" id="first_name" class="form-control" value="{{$parent_student->first_name}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="year_birth" placeholder="Entrez votre nom" id="year_birth" class="form-control" value="{{$parent_student->year_birth}}">
                    </div>
                    <div class="col-12">
                        <input
                            type="text" name="Birth_Place" placeholder="Entrez votre Prenom" id="Birth_Place" class="form-control" value="{{$parent_student->Birth_Place}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="Marital_status" placeholder="Entrez votre situation matrimoniale" id="Marital_status" class="form-control" value="{{$parent_student->Marital_status}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="status" placeholder="Entrez votre statut" id="status" class="form-control" value="{{$parent_student->status}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="address" placeholder="Entrez votre adresse" id="address" class="form-control" value="{{$parent_student->address}}">
                    </div>
                    <div class="col-12">
                        <input type="text" name="phone" placeholder="Entrez votre numéro de téléphone" id="phone" class="form-control" value="{{$parent_student->phone}}">
                    </div>

                    <div class="col-12">
                        <input type="email" name="email" placeholder="Entrez votre email" id="email" class="form-control" value="{{$parent_student->email}}">
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
                    <div>
                        <br><a href="{{route('parent_student.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                        <button class="btn btn-primary" type="submit">Enregistrer</button> 
                    </div>
            </form>
        </div>
    </div>
@endsection
