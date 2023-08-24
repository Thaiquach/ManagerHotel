<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach($guests as $guest)
        <tr>
            <td>{{ $guest->id }}</td>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->email }}</td>
            <td>{{ $guest->phonenumber }}</td>
            
            <td>
                <a href="/guests/{{$guest->id}}/edit">Edit</a>
                <form action="/guests/{{ $guest->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/guests/create'" />
<a href="/hotels" class="btn btn-success">Hotel</a>
<a href="/rooms" class="btn btn-success">Room</a>
<a href="/discounts" class="btn btn-success">Discount</a>