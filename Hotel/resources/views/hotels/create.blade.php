<form action="/hotels" method="post">
    @csrf
    <br>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <br>
    <input type="submit" value="Create">
</form>