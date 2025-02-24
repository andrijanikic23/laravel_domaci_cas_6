

<form method="POST" action="/add-user-grade">
    {{ csrf_field() }}
    <input required name="professor" placeholder="Enter the name of professor">
    <input required name="subject" type="text" placeholder="Enter the subject name">
    <input required type="number" name="mark" placeholder="Enter mark">
    <button>Save grade</button>
</form>