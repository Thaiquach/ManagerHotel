<form action="/hotels/{{ $hotels->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$hotels->name}}">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{$hotels->address}}">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$hotels->phone}}">
    <br>
    <input type="submit" value="Edit">
</form>