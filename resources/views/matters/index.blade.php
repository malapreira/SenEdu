@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('matter.create')}}">{{('Ajouter une matiere')}}</a></p></div>
            <table class="table table-bordered table-striped">
                   <tr>
                        <th width="50px">No</th>         
                        <th>Nom matiere</th>                     
                        <th width="270px">Action</th>
                    </tr>
                    <?php $no=1; ?>
                       @foreach($matters as $matter)
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$matter->name}}</th>
                        <th>
                            <div>
                                <a class="btn btn-success btn-sm" href="{{route('show_matter',['id'=>$matter->id])}}">Voir</a>
                                <a class="btn btn-primary btn-sm" href="{{route('edit_matter',['id'=>$matter->id])}}">Modifier</a>
                                <a class="btn btn-danger btn-sm" href="{{route('delete_matter',['id'=>$matter->id])}}">Supprimer</a>
                            </div>
                        </th>
                    </tr>
                    @endforeach
            </table>
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