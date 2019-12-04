<form action="{{route('employee.update',['id'=>$employee->id])}}" method="post">
       @csrf
       @method('patch')
    <div class="container">
            <div id="pseudo_inscription">
                <div class="row">
                    @csrf
                    <div class="col-12">
                        <input type="text" name="name" placeholder="Entrez votre nom" id="name" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="first_name" placeholder="Entrez votre Prenom" id="first_name" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="year_birth" placeholder="Entrez votre nom" id="year_birth" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <input
                            type="text" name="Birth_Place" placeholder="Entrez votre Prenom" id="Birth_Place" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="Marital_status" placeholder="Entrez votre nom" id="Marital_status" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="status" placeholder="Entrez votre Prenom" id="status" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <input type="text" name="address" placeholder="Entrez votre adresse" id="address" class="form-control"/>
                    </div>
                    <div class="col-12">
                        <label class="control-label col-sm-2" for="phone">Téléphone:</label>
                        <input type="text" name="phone" placeholder="Entrez votre numéro de téléphone" id="phone" class="form-control" />
                    </div>

                    <div class="col-12">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <input type="email" name="email" placeholder="Entrez votre email" id="email" class="form-control"/>
                    </div>
                    <div class="col-12">
                        Genre:
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civility" id="civilityF" value="0"/>
                            <label class="form-check-label" for="civilityF">F</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="civility" id="civilityM" value="1"/>
                            <label class="form-check-label" for="civilityM">M </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </form>

