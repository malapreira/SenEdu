<div class="container">
           <div><p><a href="{{route('matter.index')}}">{{__('Enregistrement du niveau')}}</a></p></div>
           <div class="container">
                   <form action="{{route('matter.store')}}" method="post">
                           @csrf
                           <div>
                                    @if($errors->any())
                                         @foreach($errors->all() as $error)
                                            <div class="alert alert-danger">{{$error}}</div>
                                        @endforeach
                                    @endif
                                   <input type="text" name="name" class="form-control" placeholder="le nom du Niveau">
                           </div>
                          <div>
                                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
                           </div>
                           <div>
                                   <button class="btn btn-primary">Enregistrer</button>
                           </div>
                            <div>
                                <select name="course_id" id="course_id" class="form-control">
                                    <option value=""></option>
                                       @foreach($students as $key => $value)
                                        <option value="{{$key}}" >{{$value}}</option>
                                        @endforeach
                                </select>
                            </div>
                      </form>


