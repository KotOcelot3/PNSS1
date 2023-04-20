<h2>Регистрация пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="">

    <label>Имя <input type="text" name="name"></label>
    <label>Фамилия <input type="text" name="last_name"></label>
    <label>Логин <input type="text" name="login"></label>
    <label>Пароль <input type="password" name="password"></label>
    <label>Дата рождения <input type="date" name="date"></label>

    <button>Зарегистрироваться</button>
</form>
