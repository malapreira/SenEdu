@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
 
            
            <div class="container">
                <div><h1>{{__('Ajout d\'une Annee Academique')}}</h1></div>
                               <form action="{{route('academic_year.store')}}" method="post">
                                       @csrf

                                        @if($errors->any())
                                        @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                        @endif
                                       <div>
                                               <input type="decimal" name="academic" class="form-control" placeholder="Entrer l'annee academique">
                                        </div>
                                        <div>
                                            <a href="{{route('academic_year.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                                            <button class="btn btn-success">Enregistrer</button>
                                        </div>
                                                        
                                  </form>
@endsection


