<form action="/rooms" method="post">
    @csrf
    <label for="hotel_id">Hotel</label>
    <select name="hotel_id" id="hotel_id">
        @foreach($hotels as $hotel)
            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="guest_id">Guest</label>
    <select name="guest_id" id="guest_id">
        @foreach($guests as $guest)
            <option value="{{$guest->id}}">{{$guest->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="discounts">Discount</label>
    <select name="discounts[]" id="discounts" multiple>
        @foreach($discounts as $discount)
            <option value="{{$discount->id}}">{{$discount->id}}</option>
        @endforeach
    </select>
    <br>
    <label for="number">Number</label>
    <input type="text" name="number" id="number">
    <br>
    <label for="types">Type</label>
    <input type="text" name="types" id="types">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <br>
    <input type="submit" value="Create">
</form>