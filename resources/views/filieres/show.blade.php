@extends("layout")

@section("contenu_page")

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Filiere Show</h2>
            </div>
            <div class="pull-right">
                <a href="{{route(filieres.index)}}" class="btn btn-primary">
                <i class="glyphicon glyphicon-arrow-left"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for=""></label>
                
                <input type="text" class="form-control" id="" placeholder>
            </div>
        </div>
    </div>

@endsection