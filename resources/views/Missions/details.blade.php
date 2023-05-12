@extends("Layouts.layout")

@section("Content")

    <div class="card" style="padding: 13px">
        <h2>{{$mission->designation}}</h2>
        <b>Date mission: </b>{{$mission->DateMission}}


        <div class="card">
            <div class="card-header">
                Liste des constats
                <button data-toggle="modal" data-target="#AddConstat" class="btn btn-info float-right">Ajouter un
                    constat
                </button>
            </div>
            <div class="content" style="padding: 10px">
                @foreach($constats as $constat)
                    <div style="margin: 13px">
                        {{$constat->designation}}
                        <a href="#RouteDetails" class="btn btn-info float-right">Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddConstat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route("Constat.Add",array("id"=>$mission->id))}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau constat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Designation</label>
                            <input class="form-control" name="Designation" type="text">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection