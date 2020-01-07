@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">        
            <div><h2 class="title">Formulaire d'incription</h2></div>
                        <div class="card-body">
                            <form action="{{route('parent_student.store')}}" id="formulaire" class="form-group" method="post">
                            @csrf
                                <div>
                                    <input type="text" name="name" class="form-control col-8" placeholder="Entrez votre nom">
                                </div>
                               
                                <div>
                                    <br><input type="text" name="first_name" class="form-control col-8" placeholder="Entrez votre Prenom">
                                </div>
                                <div>
                                    <br><input type="date" name="year_birth" class="form-control col-8" placeholder="Entrez votre date de naissance">
                                </div>
                                <div>
                                    <br><input type="text" name="Birth_Place" class="form-control col-8" placeholder="Entrez votre Lieu de naissance">
                                </div>
                                <div>
                                    <br><input type="text" name="Marital_status" class="form-control col-8" placeholder="Entrez votre statut">
                                </div>
                                <div>
                                    <br><input type="text" name="status" class="form-control col-8" placeholder="Entrez votre situation matrimoniale">
                                </div>
                                <div>
                                    <br><input type="text" name="address" class="form-control col-8" placeholder="Entrez votre adresse">
                                </div>
                               
                                <div>
                                    <br><input type="text" name="phone" class="form-control col-8" placeholder="Entrez votre numero de téléphone">
                                </div>
                                <div>
                                    <br><input type="text" name="email" class="form-control col-8" placeholder="example@email.com"><br>
                                </div>
                                <div class="form-row">
                                    <div class="civility">Genre:</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="civility" id="civilityF" value="0"/>
                                        <label class="form-check-label" for="civilityF">F</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="civility" id="civilityM" value="1"/>
                                        <label class="form-check-label" for="civilityM">M </label><br>
                                    </div>
                                </div>
                                <div>
                                    <br><a href="{{route('parent_student.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                                    <button class="btn btn-success">Enregistrer</button>
                                </div>
@endsection
