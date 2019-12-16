@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('academic_year.create')}}">{{('Ajouter une annee academique')}}</a></p></div>
            <table class="table table-bordered table-striped">
                      <tr>
                               <th>#</th>          <th>Annee Academique</th>                      <th></th>
                           </tr>
                       @foreach($academic_year as $academic_year)
                               <tr>
                                       <th>#</th>
                                       <th>{{$academic_year->academic}}</th>
                                        <th>
                                            <p><a href="{{route('edit_academic_year',['id'=>$academic_year->id])}}">Editer</a></p>
                                        </th>
                                       <th></th>
                                   </tr>
                           @endforeach
            </table>
        </div>
    </div>

    @endsection
