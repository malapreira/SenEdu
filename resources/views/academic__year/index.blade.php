<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('academic_year.create')}}">{{('Ajouter une annee academique')}}</a></p></div>
           <tr>
                   <th>#</th>          <th>Nom matiere</th>                      <th></th>
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


