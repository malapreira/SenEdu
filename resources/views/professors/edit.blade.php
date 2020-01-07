@extends("acces")
@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">        
            <div><h2 class="title">Formulaire d'incription</h2></div>
                    <div class="card-body">
                    <form action="{{route('update_professor',['id'=>$professor->id])}}" method="post" class="form-group" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PATCH">
                            <div>
                                    <input type="text" name="name" class="form-control col-8" placeholder="Entrez votre nom">
                                </div>
                               
                                <div>
                                    <br><input type="text" name="first_name" class="form-control col-8" placeholder="Entrez votre Prenom">
                                </div>
                                <div>
                                    <br><input type="text" name="year_birth" class="form-control col-8" placeholder="Entrez votre date de naissance">
                                </div>
                                <div>
                                    <br><input type="text" name="birth_Place" class="form-control col-8" placeholder="Entrez votre Lieu de naissance">
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
                                    <br><input type="text" name="email" class="form-control col-8" placeholder="example@email.com">
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
                                    <br><button class="btn btn-primary">Enregistrer</button>
                                </div>
@endsection
