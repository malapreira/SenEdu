@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div><p><a class="btn btn-primary btn-sm" href="{{route('inscription.create')}}">{{('Inscrire')}}</a></p></div>
            <br><table class="table table-bordered table-striped">
                <tr>
                    <th width="50px">No</th>
                    <th>Date d'inscription</th>
                    <th>Montant verse</th>
                    <th>Action</th>
                </tr>
                <?php $no=1; ?>
                @foreach($inscription as $inscription)
                    <tr>
                        <th>{{$no++}}</th>
                        <th>{{$inscription->date}}</th>
                        <th>{{$inscription->amount}}</th>
                        <th>
                            <p><a href="{{route('edit_inscription',['id'=>$inscription->id])}}">Editer</a>

                            </p>
                        </th>
                    </tr>
                @endforeach
            </table>

@endsection
