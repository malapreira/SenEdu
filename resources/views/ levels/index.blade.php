<table class="table table-striped">
    <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('level.create')}}">{{('Ajouter un Niveau')}}</a></p></div>
           <tr>
                   <th>#</th>          <th>Nom du Niveau</th>                    <th>Action</th>               <th></th>
               </tr>
           @foreach($levels as $level)
                   <tr>
                           <th>#</th>
                           <th>{{$level->name}}  {{ $level->student->name ?? '' }}</th>
                            <th>
                                <p><a href="{{route('editer_level',['id'=>$level->id])}}">Editer</a></p>
                            </th>
                           <th></th>
                       </tr>
               @endforeach
       </table>

