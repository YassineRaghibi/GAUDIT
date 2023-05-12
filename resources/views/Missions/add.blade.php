@extends("Layouts.layout")

@section("Content")

    <div class="card" style="padding: 13px;">
        <form action="{{route("mission.store")}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Designation</label>
                <input class="form-control" name="Designation" type="text">
            </div>

            <div class="form-group">
                <label>Date mission</label>
                <input class="form-control" name="DateMission" type="date">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection