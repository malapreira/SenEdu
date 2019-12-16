@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="py-3 px-4 bg-blue-dark no-underline"><p><a href="{{route('control.create')}}">{{('Ajouter une evaluation')}}</a></p></div>
            <table class="table table-bordered table-striped">

            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Les notes</h3>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{route('control_inscriptions.create)}}">Ajouter une note</a>
                    </div>
                </div>
                @if($errors->any())
                @foreach($errors->all() as $error)
                   <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif

                <table class="table table_hover table_sm">
                    <tr>
                        <th width="50px"><b>No</b></th>
                        <th width="300px">Notes</th>
                        <th width="180px">Action</th>
                    </tr>

                    @foreach($control_inscription as $control_inscription)
                    <tr>
                        <td><b>({++$i})</b></td>
                        <td>{{$control_inscription->note}}</td>
                        <td>
                            <form action="{{route('control_inscription.destroy',$control_inscription->id)}}" method="post">
                                <a class="btn btn_sm btn_success" href="{{route('control_inscription.show',$control_inscription->id)}}">Show</a>
                                <a class="btn btn_sm btn_warning" href="{{route('control_inscription.edit',$control_inscription->id)}}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                (!! $control_inscriptions->links())
            </div>




@endsection
