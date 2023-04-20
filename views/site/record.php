<h3><?= $message ?? ''; ?></h3>
<form method="post">
    <input name="csrf_token" type="hidden" value="">
    <label>ФИО <input type="text" name="name"></label>
    <label>Лечащий врач <input type="text" name="doctor_id"></label>
    <label>Диагноз <input type="text" name="diagnosis_id"></label>
    <label>Дата <input type="date" name="date"></label>
    <button>Создать запись</button>
</form>