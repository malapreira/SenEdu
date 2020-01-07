@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a class="btn btn-primary btn-sm" href="{{route('control.index')}}">Retour</a></p></div>
            <table class="table table-bordered table-striped">
               <th>{{$control->academic}}</th>
            </table>
        </div>
    </div>
@endsection

                    
                    
                    