<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('matter.create')}}">{{('Ajouter une matiere')}}</a></p></div>
           <tr>
                   <th>#</th>          <th>Nom matiere</th>                      <th></th>
               </tr>
           @foreach($matters as $matter)
                   <tr>
                           <th>#</th>
                           <th>{{$matter->name}}</th>
                            <th>
                                <p><a href="{{route('edit_matter',['id'=>$matter->id])}}">Editer</a></p>
                            </th>
                           <th></th>
                       </tr>
               @endforeach
       </table>


