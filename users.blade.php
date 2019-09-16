<table>
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Email</th>
        <th>Sifra</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->ime}}</td>
            <td>{{$user->prezime}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->sifra}}</td>
            <td><a href="edit/{{$user->id}}">
    <button> Edit </button>
</a></td>
            <td><a href="delete/{{$user->id}}">
    <button> Delete </button>
</a></td>
            
        </tr>
    @endforeach
</table>

<a href="/register">
    <button> Go to register </button>
</a>
