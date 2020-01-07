@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content"><div class="container">
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
                        <a href="{{route('matter.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                        <button class="btn btn-success">Enregistrer</button>
                    </div>
                                        
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script defer>
    let form = document.getElementById("category_form");
    form.addEventListener('submit', function (e) {
       e.preventDefault();
       let donnees_formulaire = $(this).serialize();
       $.ajax({
           type: "POST",
           url: '/ajout_category',
           data: donnees_formulaire,
           success: function(data){
               alert("Category ajoutée");
               console.log(donnees_formulaire);
               $("#category_table").append(`<tr> <td>#</td> <td> ${data.data.name} </td> <td> <div class="row justify-content-end"> <div class="col"><a href="/categories/${data.data.id}/edit" class="btn btn-primary">Editer</a></div> <form class="col" action="/categories/${data.data.id}" method="post"> <input type="hidden" name="_token" value="{{@csrf_token()}}"> <input type="hidden" name="_method" value="delete">                            <button type="submit" class="btn btn-danger">Suppimer</button> </form> </div> </td> </tr>`);
               $('#add_category').modal('hide');
           }
       });
   })
</script>
@endsection

