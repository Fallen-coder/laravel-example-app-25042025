<form action="/comment" method="post">
    @csrf
    <input type="text" name="content">
    <input type="submit" value="Create">
</form>