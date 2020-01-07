@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
     
           
            <div class="container">
                <div><h1>{{__('Ajouter le type de professeur')}}</h1></div>
                <div class="container">
                    <form action="{{route('teacher_type.store')}}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="le nom du type de professeur">
                        </div>
                        <div>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection 
