<form action="/discounts/{{ $discounts->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="rate">Rate</label>
    <input type="text" name="rate" id="rate" value="{{$discounts->rate}}">
    <br>
    <label for="type">Type</label>
    <input type="text" name="type" id="type" value="{{$discounts->type}}">
    <br>
    <input type="submit" value="Edit">
</form>