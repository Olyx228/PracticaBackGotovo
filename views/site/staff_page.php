<style>
    .staff-container {
        max-width: 1600px;
        margin: 0 auto;
        padding: 20px;
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .page-header {
        text-align: center;
        margin-bottom: 50px;
        padding: 60px 0;
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%);
        border-radius: var(--border-radius);
        color: var(--text-primary);
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--primary-main), var(--accent-color));
    }

    .page-header::after {
        content: '👨‍🏫';
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 5rem;
        opacity: 0.05;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0 0 15px 0;
        background: linear-gradient(to right, var(--text-primary), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        z-index: 1;
    }

    .page-subtitle {
        color: var(--text-muted);
        font-size: 1.1rem;
        font-weight: 500;
        position: relative;
        z-index: 1;
        max-width: 600px;
        margin: 0 auto;
    }

    .section {
        background: rgba(30, 41, 59, 0.95);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 30px;
        margin-bottom: 30px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
        transition: var(--transition);
    }

    .section:hover {
        box-shadow: var(--shadow-lg);
        transform: translateY(-2px);
    }

    .section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, var(--primary-main), var(--accent-color));
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        position: relative;
    }

    .section-header::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100px;
        height: 3px;
        background: linear-gradient(to right, var(--primary-main), transparent);
        border-radius: 2px;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-primary);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .section-title::before {
        font-size: 1.2rem;
    }

    .disciplines-section .section-title::before {
        content: '📚';
    }

    .groups-section .section-title::before {
        content: '👥';
    }

    .students-section .section-title::before {
        content: '👨‍🎓';
    }

    .grades-section .section-title::before {
        content: '📊';
    }

    .filters-section .section-title::before {
        content: '🔍';
    }

    .btn {
        padding: 14px 28px;
        border: none;
        border-radius: var(--border-radius-sm);
        cursor: pointer;
        font-weight: 700;
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 1rem;
        position: relative;
        overflow: hidden;
    }

    .btn::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 5px;
        height: 5px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 0;
        border-radius: 100%;
        transform: scale(1, 1) translate(-50%);
        transform-origin: 50% 50%;
    }

    .btn:focus:not(:active)::after {
        animation: ripple 1s ease-out;
    }

    @keyframes ripple {
        0% {
            transform: scale(0, 0);
            opacity: 0.5;
        }
        100% {
            transform: scale(20, 20);
            opacity: 0;
        }
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: var(--text-primary);
        border: 1px solid rgba(59, 130, 246, 0.3);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-main));
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .btn-apply {
        background: linear-gradient(135deg, #10b981, #34d399);
        color: white;
        border: 1px solid rgba(16, 185, 129, 0.3);
    }

    .btn-apply:hover {
        background: linear-gradient(135deg, #34d399, #10b981);
    }

    .action-btns {
        display: flex;
        gap: 15px;
    }

    .btn-sm {
        padding: 12px 24px;
        font-size: 0.95rem;
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 20px;
        border-radius: var(--border-radius-sm);
        overflow: hidden;
    }

    .table th {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-main));
        color: var(--text-primary);
        padding: 18px;
        text-align: left;
        font-weight: 700;
        font-size: 0.95rem;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        position: relative;
    }

    .table th::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(to right, transparent, var(--accent-color), transparent);
    }

    .table td {
        padding: 18px;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        background: rgba(30, 41, 59, 0.7);
        color: var(--text-primary);
        transition: var(--transition);
    }

    .table tr {
        transition: var(--transition);
    }

    .table tr:hover td {
        background: rgba(37, 99, 235, 0.1);
        transform: scale(1.01);
    }

    .text-center {
        text-align: center;
        color: var(--text-muted);
        font-style: italic;
        padding: 40px;
        background: rgba(15, 23, 42, 0.3);
        border-radius: var(--border-radius-sm);
        margin: 20px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .text-center::before {
        content: '📭';
        font-size: 1.5rem;
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-group label::before {
        font-size: 1.1rem;
    }

    .form-group:nth-child(1) label::before { content: '👥'; }
    .form-group:nth-child(2) label::before { content: '📚'; }
    .form-group:nth-child(3) label::before { content: '🎓'; }
    .form-group:nth-child(4) label::before { content: '📅'; }

    .form-control {
        width: 100%;
        padding: 14px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        border-radius: var(--border-radius-sm);
        font-size: 1rem;
        transition: var(--transition);
        background: rgba(15, 23, 42, 0.7);
        color: var(--text-primary);
        font-family: inherit;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%2394a3b8' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 16px;
    }

    .form-control:focus {
        border-color: var(--primary-light);
        outline: none;
        background: rgba(15, 23, 42, 0.9);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%233b82f6' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    }

    .form-control option {
        background: var(--surface);
        color: var(--text-primary);
        padding: 12px;
    }

    .form-control option:checked {
        background: var(--primary-main);
        color: white;
    }

    .form-control option:hover {
        background: var(--primary-light);
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 10px;
    }

    .grade-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 32px;
        padding: 6px 12px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.9rem;
        text-transform: uppercase;
    }

    .grade-5 { background: linear-gradient(135deg, #10b981, #34d399); color: white; }
    .grade-4 { background: linear-gradient(135deg, #3b82f6, #60a5fa); color: white; }
    .grade-3 { background: linear-gradient(135deg, #f59e0b, #fbbf24); color: white; }
    .grade-2 { background: linear-gradient(135deg, #ef4444, #f87171); color: white; }
    .no-grade { background: rgba(71, 85, 105, 0.3); color: var(--text-muted); }

    .student-count {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .student-count::before {
        content: '👤';
        font-size: 0.9rem;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 25px;
    }

    .stat-card {
        background: rgba(15, 23, 42, 0.5);
        border-radius: var(--border-radius-sm);
        padding: 20px;
        text-align: center;
        border: 1px solid rgba(71, 85, 105, 0.2);
        transition: var(--transition);
    }

    .stat-card:hover {
        background: rgba(15, 23, 42, 0.7);
        transform: translateY(-2px);
    }

    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-light);
        margin-bottom: 8px;
    }

    .stat-label {
        color: var(--text-muted);
        font-size: 0.9rem;
        font-weight: 600;
    }

    @media (max-width: 1200px) {
        .staff-container {
            padding: 15px;
        }

        .page-header {
            padding: 40px 0;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 768px) {
        .section-header {
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
        }

        .action-btns {
            width: 100%;
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .table {
            display: block;
            overflow-x: auto;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .page-header {
            padding: 30px 0;
        }

        .page-title {
            font-size: 1.6rem;
        }

        .page-subtitle {
            font-size: 1rem;
        }

        .section {
            padding: 20px;
        }

        .section-title {
            font-size: 1.3rem;
        }

        .form-control {
            padding: 12px;
        }
    }

    /* Анимация загрузки для таблиц */
    @keyframes pulse {
        0%, 100% {
            opacity: 0.5;
        }
        50% {
            opacity: 1;
        }
    }

    .loading {
        animation: pulse 1.5s infinite;
    }
</style>

<div class="staff-container">
    <div class="page-header">
        <h1 class="page-title">Панель сотрудника деканата</h1>
        <p class="page-subtitle">Управление учебным процессом и успеваемостью студентов</p>
    </div>

    <!-- Фильтры -->
    <div class="section filters-section">
        <div class="section-header">
            <h2 class="section-title">Фильтры данных</h2>
        </div>

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
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-apply">
                    <span>🔍</span> Применить фильтры
                </button>
                <a href="/pop-it-mvc/staff" class="btn btn-secondary">Сбросить</a>
            </div>
        </form>
    </div>

    <!-- Статистика -->
    <?php if (!empty($groups) || !empty($students)): ?>
        <div class="section">
            <div class="section-header">
                <h2 class="section-title">Статистика</h2>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value"><?= count($groups) ?></div>
                    <div class="stat-label">Учебных групп</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value"><?= count($students) ?></div>
                    <div class="stat-label">Студентов</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value"><?= count($disciplines) ?></div>
                    <div class="stat-label">Дисциплин</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value"><?= count($grades) ?></div>
                    <div class="stat-label">Оценок</div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Дисциплины -->
    <div class="section disciplines-section">
        <div class="section-header">
            <h2 class="section-title">Дисциплины</h2>
            <div class="action-btns">
                <a href="/pop-it-mvc/disciplines/create" class="btn btn-primary btn-sm">
                    <span>➕</span> Добавить дисциплину
                </a>
                <a href="/pop-it-mvc/disciplines/attach" class="btn btn-primary btn-sm">
                    <span>📎</span> Прикрепить к группе
                </a>
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
                        <td><strong><?= htmlspecialchars($gd->disciplines->name ?? '') ?></strong></td>
                        <td>
                            <span class="student-count">
                                <?= htmlspecialchars($gd->student_groups->name ?? '') ?>
                            </span>
                        </td>
                        <td><?= $gd->course ?> курс</td>
                        <td><?= $gd->semester ?> семестр</td>
                        <td><?= $gd->hours ?> ч.</td>
                        <td>
                            <span class="grade-badge no-grade">
                                <?= htmlspecialchars($gd->control_type->name ?? '') ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">
                        Нет данных о дисциплинах. Добавьте дисциплины или примените другие фильтры.
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Группы -->
    <div class="section groups-section">
        <div class="section-header">
            <h2 class="section-title">Группы</h2>
            <a href="/pop-it-mvc/groups/create" class="btn btn-primary btn-sm">
                <span>➕</span> Добавить группу
            </a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во студентов</th>
                <th>Активных дисциплин</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($groups)): ?>
                <?php foreach ($groups as $group): ?>
                    <tr>
                        <td>
                            <strong><?= htmlspecialchars($group->name) ?></strong>
                        </td>
                        <td>
                            <span class="student-count">
                                <?= $group->students()->count() ?> студентов
                            </span>
                        </td>
                        <td>
                            <?php
                            $disciplinesCount = 0;
                            foreach ($groupDisciplines as $gd) {
                                if ($gd->student_groups->id_group ?? null == $group->id_group) {
                                    $disciplinesCount++;
                                }
                            }
                            ?>
                            <span class="student-count" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                                <?= $disciplinesCount ?> дисциплин
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">
                        Нет данных о группах. Добавьте первую группу.
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Студенты -->
    <div class="section students-section">
        <div class="section-header">
            <h2 class="section-title">Студенты</h2>
            <a href="/pop-it-mvc/students/create" class="btn btn-primary btn-sm">
                <span>➕</span> Добавить студента
            </a>
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
                        <td>
                            <strong>
                                <?= htmlspecialchars($student->surname . ' ' . $student->name . ' ' . $student->patronym) ?>
                            </strong>
                        </td>
                        <td>
                            <span class="student-count">
                                <?= htmlspecialchars($student->student_groups->name ?? 'Не указана') ?>
                            </span>
                        </td>
                        <td><?= htmlspecialchars($student->gender->name ?? '') ?></td>
                        <td><?= date('d.m.Y', strtotime($student->date_birth)) ?></td>
                        <td><?= htmlspecialchars($student->address) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">
                        Нет данных о студентах. Добавьте студентов или примените другие фильтры.
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Успеваемость -->
    <div class="section grades-section">
        <div class="section-header">
            <h2 class="section-title">Успеваемость</h2>
            <a href="/pop-it-mvc/grades/create" class="btn btn-primary btn-sm">
                <span>➕</span> Добавить оценку
            </a>
        </div>

        <?php if (!empty($grades)): ?>
            <table class="table">
                <thead>
                <tr>
                    <th>Студент</th>
                    <th>Дисциплина</th>
                    <th>Оценка</th>
                    <th>Дата оценки</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($grades as $grade): ?>
                    <tr>
                        <td>
                            <strong>
                                <?= htmlspecialchars(($grade->students->surname ?? '') . ' ' . ($grade->students->name ?? '')) ?>
                            </strong>
                        </td>
                        <td><?= htmlspecialchars($grade->disciplines->name ?? 'Дисциплина не указана') ?></td>
                        <td>
                            <?php if ($grade->grade): ?>
                                <span class="grade-badge grade-<?= $grade->grade ?>">
                                    <?= $grade->grade ?>
                                </span>
                            <?php else: ?>
                                <span class="grade-badge no-grade">
                                    Нет оценки
                                </span>
                            <?php endif; ?>
                        </td>
                        <td><?= date('d.m.Y', strtotime($grade->date ?? 'now')) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="text-center">
                Нет данных для отображения. Примените фильтры для просмотра успеваемости или добавьте оценки.
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Анимация при загрузке таблиц
        const tables = document.querySelectorAll('.table tbody');
        tables.forEach((table, index) => {
            setTimeout(() => {
                table.classList.add('loading');
                setTimeout(() => {
                    table.classList.remove('loading');
                }, 1500);
            }, index * 300);
        });

        // Фильтрация данных
        const filterForm = document.querySelector('form');
        const filterSelects = document.querySelectorAll('.form-control');

        filterSelects.forEach(select => {
            select.addEventListener('change', function() {
                // Добавляем индикатор загрузки
                const applyBtn = filterForm.querySelector('.btn-apply');
                const originalText = applyBtn.innerHTML;
                applyBtn.innerHTML = '<span>🔄</span> Загрузка...';
                applyBtn.disabled = true;

                // Отправляем форму через 500мс
                setTimeout(() => {
                    filterForm.submit();
                }, 500);
            });
        });

        // Подсветка строк при наведении
        const tableRows = document.querySelectorAll('.table tbody tr');
        tableRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.01)';
                this.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
            });

            row.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = 'none';
            });
        });

        // Автоматическое обновление статистики при изменении фильтров
        let updateTimeout;
        filterSelects.forEach(select => {
            select.addEventListener('change', function() {
                clearTimeout(updateTimeout);
                updateTimeout = setTimeout(() => {
                    // Здесь можно добавить AJAX запрос для обновления статистики
                    console.log('Фильтры изменены, обновляем данные...');
                }, 1000);
            });
        });

        // Анимация для счетчиков студентов
        const studentCounts = document.querySelectorAll('.student-count');
        studentCounts.forEach(count => {
            const originalValue = count.textContent;
            const numValue = parseInt(originalValue.match(/\d+/)?.[0]) || 0;

            // Анимация появления
            count.style.transform = 'scale(0.8)';
            count.style.opacity = '0.5';

            setTimeout(() => {
                count.style.transition = 'all 0.3s ease';
                count.style.transform = 'scale(1)';
                count.style.opacity = '1';
            }, 100);
        });
    });
</script>