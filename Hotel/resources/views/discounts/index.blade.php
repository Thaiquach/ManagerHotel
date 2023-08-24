<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Rate</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
    @foreach($discounts as $discount)
        <tr>
            <td>{{ $discount->id }}</td>
            <td>{{ $discount->rate }}</td>
            <td>{{ $discount->type }}</td>
            
            <td>
                <a href="/discounts/{{$discount->id}}/edit">Edit</a>
                <form action="/discounts/{{ $discount->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/discounts/create'" />
<a href="/hotels" class="btn btn-success">Hotel</a>
<a href="/rooms" class="btn btn-success">Room</a>
<a href="/guests" class="btn btn-success">Guests</a>