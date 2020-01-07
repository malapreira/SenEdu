@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <form action="{{route('academic_year.update',['id'=>$academic_year->id])}}" method="post">
                   @csrf
                   @method('patch')
                   <div><input type="text" name="academic" class="form-control" placeholder="Entrer l'annee academique" value="{{$academic_year->academic}}"></div>
                   <div> <button class="btn btn-primary">Enregistrer</button> </div>
            </form>
@endsection
