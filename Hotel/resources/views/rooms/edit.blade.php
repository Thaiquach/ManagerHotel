<form action="/rooms/{{ $rooms->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="hotel_id">Hotel</label>
    <select name="hotel_id" id="hotel_id">
        @foreach($hotels as $hotel)
            <option value="{{$hotel->id}}" @if($hotel->id == $room->hotel_id) selected @endif>{{$hotel->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="guest_id">Guest</label>
    <select name="guest_id" id="guest_id">
        @foreach($guests as $guest)
            <option value="{{$guest->id}}" @if($guest->id == $room->guest_id) selected @endif>{{$guest->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="discounts">Discount</label>
    <select name="discounts[]" id="discounts" multiple>
        @foreach($discounts as $discount)
            <option value="{{$discount->id}}" @if(in_array($discount->id, $discount->discounts->pluck('id')->toArray())) selected @endif>{{$discount->id}}</option>
        @endforeach
    </select>
    <br>
    <label for="number">Rate</label>
    <input type="text" name="number" id="number" value="{{$rooms->number}}">
    <br>
    <label for="types">Type</label>
    <input type="text" name="types" id="types" value="{{$rooms->types}}">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{$rooms->price}}">
    <br>
    <input type="submit" value="Edit">
</form>