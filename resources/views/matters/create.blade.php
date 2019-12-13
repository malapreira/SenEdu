<div class="container">
    <div><h1>{{__('Ajout d\'une Matiere')}}</h1></div>
                   <form action="{{route('matter.store')}}" method="post">
                           @csrf
                           <div>
                                    @if($errors->any())
                                         @foreach($errors->all() as $error)
                                            <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                    @endif
                                   <input type="text" name="name" class="form-control" placeholder="le nom de la matiere">
                           </div>
                          <div>
                                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
                           </div>
                           <div>
                                   <button class="btn btn-primary">Enregistrer</button>
                           </div>
                            
                      </form>


