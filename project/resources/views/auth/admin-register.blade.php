<!DOCTYPE html>
<html>
<head>
    <title>Реєстрація адміністратора</title>
</head>
<body>
    <h1>Реєстрація адміністратора</h1>
    <form method="POST" action="{{ route('admin.register') }}">
        @csrf
        <div>
            <label for="name">Ім'я</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Підтвердження пароля</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Зареєструвати адміністратора</button>
    </form>
</body>
</html>