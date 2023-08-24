<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Hotel</th>
        <th>Guest</th>
        <th>Discount</th>
        <th>Number</th>
        <th>Type</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($rooms as $value)
        <tr>
            <td>{{$value->id}}</td>
             <td>{{ $value->hotel_id }}</td> 
             <td>{{$value->guest_id}}</td>
            <td><a href="">{{ $value->number }}</a></td>
            <td><a href="">{{ $value->name }}</a></td>
            
            <td>{{ $value->number }}</td>
            <td>{{ $value->types }}</td>
            <td>{{ $value->price }}</td>
            
            <td>
                <a href="/rooms/{{$value->id}}/edit">Edit</a>
                <form action="/rooms/{{ $value->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/rooms/create'" />
<a href="/hotels" class="btn btn-success">Hotel</a>
<a href="/guests" class="btn btn-success">Guests</a>
<a href="/discounts" class="btn btn-success">Discount</a>