<div class="container"><h1>Je hebt {{count($users)}} gebruiker(s)</h1>

    <div class="col-md-8">
        <ul class="list-group"> @foreach($users as $user)
                <li class="list-group-item">{{$user->name}}</li> @endforeach </ul>
    </div>
</div>