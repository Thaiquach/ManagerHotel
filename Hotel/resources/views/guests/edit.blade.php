<form action="/guests/{{ $guest->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$guest->name}}">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$guest->email}}">
    <br>
    <label for="phonenumber">Phone</label>
    <input type="text" name="phonenumber" id="phonenumber" value="{{$guest->phonenumber}}">
    <br>
    
    <input type="submit" value="Edit">
</form>