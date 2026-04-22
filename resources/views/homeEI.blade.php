<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Switch</title>
</head>
<body>

    <h1>{{ __('messages.welcome') }}</h1>
    <h2>{{ __('messages.about') }}</h2>
    <h2>{{ __('messages.profile') }}</h2>

    <form action="/">
        <select onchange="window.location.href=this.value">
            <option value="/lang/en">English</option>
            <option value="/lang/hi">Hindi</option>
            <option value="/lang/ta">Tamil</option>
            <option value="/lang/pa">Punjabi</option>
        </select>
    </form>

</body>
</html>