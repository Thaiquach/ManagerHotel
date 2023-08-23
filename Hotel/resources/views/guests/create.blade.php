<form action="/guests" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    <label for="phonenumber">Phone</label>
    <input type="text" name="phonenumber" id="phonenumber">
    <br>
    
    <input type="submit" value="Create">
</form>