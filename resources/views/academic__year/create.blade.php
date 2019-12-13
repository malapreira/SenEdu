<div class="container">
    <div><h1>{{__('Ajout d\'une Annee Academique')}}</h1></div>
                   <form action="{{route('academic_year.store')}}" method="post">
                           @csrf
                           <div>
                                    @if($errors->any())
                                         @foreach($errors->all() as $error)
                                            <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                    @endif
                                   <input type="text" name="academic" class="form-control" placeholder="Entrer l'annee academique">
                           </div>
                          <div>
                                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
                           </div>
                           <div>
                                   <button class="btn btn-primary">Enregistrer</button>
                           </div>
                            
                      </form>


