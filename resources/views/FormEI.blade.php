<!DOCTYPE html>
<html>
<head>
    <title>Form EI</title>
</head>
<body>

    <h2>Form EI</h2>

    <form method="POST" action="/submit-formei">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br>
        @error('name')
        <p style="color:orange">{{ $message }}</p>
        @enderror
        <br>
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>
        @error('email')
        <p style="color:orange">{{ $message }}</p>
        @enderror
        <br>
        <label>Phone:</label><br>
        <input type="number" name="phone" value="{{ old('phone') }}"><br>
        @error('phone')
        <p style="color:orange">{{ $message }}</p>
        @enderror
        <br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>