<style>
    .staff-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
    }

    .page-header {
        text-align: center;
        margin-bottom: 40px;
        padding: 40px 0;
        background: var(--surface);
        border-radius: var(--border-radius);
        color: var(--text-primary);
        border: 1px solid #334155;
    }

    .page-title {
        font-size: 2rem;
        font-weight: 600;
        margin: 0;
    }

    .section {
        background: var(--surface);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 25px;
        margin-bottom: 25px;
        border: 1px solid #334155;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #334155;
    }

    .section-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--text-primary);
        margin: 0;
    }

    .btn {
        padding: 10px 16px;
        border: none;
        border-radius: var(--border-radius);
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
    }

    .btn-primary {
        background: var(--primary-main);
        color: var(--text-primary);
        border: 1px solid var(--primary-light);
    }

    .btn-primary:hover {
        background: var(--primary-light);
        transform: translateY(-2px);
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 15px;
    }

    .table th {
        background: var(--primary-dark);
        color: var(--text-primary);
        padding: 15px;
        text-align: left;
        font-weight: 600;
        font-size: 13px;
        border-bottom: 1px solid #334155;
    }

    .table td {
        padding: 15px;
        border-bottom: 1px solid #334155;
        background: var(--surface);
        color: var(--text-primary);
    }

    .table tr:hover td {
        background: var(--primary-dark);
    }

    .form-row {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        min-width: 180px;
    }

    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 13px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #334155;
        border-radius: var(--border-radius);
        font-size: 13px;
        transition: all 0.3s ease;
        background: var(--background);
        color: var(--text-primary);
    }

    .form-control:focus {
        border-color: var(--primary-main);
        outline: none;
        background: var(--surface);
    }

    .action-btns {
        display: flex;
        gap: 8px;
    }

    .btn-sm {
        padding: 8px 12px;
        font-size: 12px;
    }

    .text-center {
        text-align: center;
        color: var(--text-secondary);
        font-style: italic;
    }

</style>

<div class="staff-container">
    <div class="page-header">
        <h1 class="page-title">Панель сотрудника деканата</h1>
    </div>

    <!-- Фильтры -->
    <div class="section">
        <form method="get">
            <input type="hidden" name="index" value="1">
            <div class="form-row">
                <div class="form-group">
                    <label>Группа</label>
                    <select name="group_id" class="form-control">
                        <option value="">Все группы</option>
                        <?php foreach ($groups as $group): ?>
                            <option value="<?= $group->id_group ?>" <?= ($selectedGroupId ?? null) == $group->id_group ? 'selected' : '' ?>>
                                <?= htmlspecialchars($group->name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Дисциплина</label>
                    <select name="discipline_id" class="form-control">
                        <option value="">Все дисциплины</option>
                        <?php foreach ($disciplines as $discipline): ?>
                            <option value="<?= $discipline->id_discipline ?>"
                                <?= ($selectedDisciplineId ?? '') == $discipline->id_discipline ? 'selected' : '' ?>>
                                <?= htmlspecialchars($discipline->name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Курс</label>
                    <select name="course" class="form-control">
                        <option value="">Все курсы</option>
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <option value="<?= $i ?>" <?= ($selectedCourse ?? null) == $i ? 'selected' : '' ?>>
                                <?= $i ?> курс
                            </option>
                        <?php endfor; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Семестр</label>
                    <select name="semester" class="form-control">
                        <option value="">Все семестры</option>
                        <?php for ($i = 1; $i <= 2; $i++): ?>
                            <option value="<?= $i ?>" <?= ($selectedSemester ?? null) == $i ? 'selected' : '' ?>>
                                <?= $i ?> семестр
                            </option>
                        <?php endfor; ?>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Применить фильтры</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Дисциплины -->
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">Дисциплины</h2>
            <div class="action-btns">
                <a href="/pop-it-mvc/disciplines/create" class="btn btn-primary">Добавить дисциплину</a>
                <a href="/pop-it-mvc/disciplines/attach" class="btn btn-primary">Прикрепить к группе</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Группа</th>
                <th>Курс</th>
                <th>Семестр</th>
                <th>Часы</th>
                <th>Тип контроля</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($groupDisciplines)): ?>
                <?php foreach ($groupDisciplines as $gd): ?>
                    <tr>
                        <td><?= htmlspecialchars($gd->disciplines->name ?? '') ?></td>
                        <td><?= htmlspecialchars($gd->student_groups->name ?? '') ?></td>
                        <td><?= $gd->course ?></td>
                        <td><?= $gd->semester ?></td>
                        <td><?= $gd->hours ?></td>
                        <td><?= htmlspecialchars($gd->control_type->name ?? '') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6" class="text-center">Нет данных о дисциплинах</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Группы -->
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">Группы</h2>
            <a href="/pop-it-mvc/groups/create" class="btn btn-primary">Добавить группу</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во студентов</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($groups as $group): ?>
                <tr>
                    <td><?= htmlspecialchars($group->name) ?></td>
                    <td><?= $group->students()->count() ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Студенты -->
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">Студенты</h2>
            <a href="/pop-it-mvc/students/create" class="btn btn-primary">Добавить студента</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Группа</th>
                <th>Пол</th>
                <th>Дата рождения</th>
                <th>Адрес проживания</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($students)): ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student->surname . ' ' . $student->name . ' ' . $student->patronym) ?></td>
                        <td><?= htmlspecialchars($student->student_groups->name ?? 'Не указана') ?></td>
                        <td><?= htmlspecialchars($student->gender->name ?? '') ?></td>
                        <td><?= date('d.m.Y', strtotime($student->date_birth)) ?></td>
                        <td><?= htmlspecialchars($student->address) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">Нет данных о студентах</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Успеваемость -->
    <div class="section">
        <div class="section-header">
            <h2 class="section-title">Успеваемость</h2>
            <a href="/pop-it-mvc/grades/create" class="btn btn-primary">Добавить оценку</a>
        </div>

        <?php if (!empty($grades)): ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Студент</th>
                    <th>Дисциплина</th>
                    <th>Оценка</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($grades as $grade): ?>
                    <tr>
                        <td><?= htmlspecialchars(($grade->students->surname ?? '') . ' ' . ($grade->students->name ?? '')) ?></td>
                        <td><?= htmlspecialchars($grade->disciplines->name ?? 'Дисциплина не указана') ?></td>
                        <td><?= $grade->grade ?? 'Нет оценки' ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">Нет данных для отображения. Примените фильтры для просмотра успеваемости.</p>
        <?php endif; ?>
    </div>
</div>