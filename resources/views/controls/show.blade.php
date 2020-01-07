@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('control.index')}}">Retour</a></p></div>
            <table class="table table-bordered table-striped">
               <th>{{$control->name}}</th>
               <th>{{$control->date}}</th>
               <th>{{$control->early_hour}}</th>
               <th>{{$control->end_hour}}</th>
            </table>
        </div>
    </div>
@endsection

                    
                    
                    