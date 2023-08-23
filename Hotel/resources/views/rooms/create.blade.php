<form action="/discounts" method="post">
    @csrf
    <br>
    <label for="rate">Rate</label>
    <input type="text" name="rate" id="rate">
    <br>
    <label for="type">Type</label>
    <input type="text" name="type" id="type">
    <br>
    <input type="submit" value="Create">
</form>