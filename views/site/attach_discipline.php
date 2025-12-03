<style>
    .container {
        max-width: 1200px;
        margin: 80px auto;
        padding: 0 20px;
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

    .card {
        background: rgba(30, 41, 59, 0.95);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 40px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
        transition: var(--transition);
    }

    .card:hover {
        box-shadow: var(--shadow-lg);
        transform: translateY(-2px);
    }

    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, var(--primary-main), var(--accent-color));
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
        padding-bottom: 25px;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        position: relative;
    }

    .card-header::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100px;
        height: 3px;
        background: linear-gradient(to right, var(--primary-main), transparent);
        border-radius: 2px;
    }

    .card-header h4 {
        color: var(--text-primary);
        font-size: 1.8rem;
        font-weight: 700;
        margin: 0;
        background: linear-gradient(to right, var(--text-primary), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .card-header h4::before {
        content: '📎';
        font-size: 1.5rem;
    }

    .btn {
        padding: 14px 28px;
        border-radius: var(--border-radius-sm);
        font-weight: 700;
        text-decoration: none;
        transition: var(--transition);
        border: none;
        cursor: pointer;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
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

    .btn-secondary {
        background: rgba(71, 85, 105, 0.3);
        color: var(--text-secondary);
        border: 1px solid rgba(71, 85, 105, 0.5);
    }

    .btn-secondary::before {
        content: '⬅️';
    }

    .btn-secondary:hover {
        background: rgba(71, 85, 105, 0.5);
        color: var(--text-primary);
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .card-body {
        position: relative;
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 35px;
    }

    .form-group {
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 12px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 1rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-group label::before {
        font-size: 1.1rem;
    }

    .form-group:nth-child(1) label::before { content: '👥'; }
    .form-group:nth-child(2) label::before { content: '📚'; }
    .form-group:nth-child(3) label::before { content: '🎓'; }
    .form-group:nth-child(4) label::before { content: '📅'; }
    .form-group:nth-child(5) label::before { content: '⏱️'; }
    .form-group:nth-child(6) label::before { content: '📝'; }

    .form-control {
        width: 100%;
        padding: 16px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        border-radius: var(--border-radius-sm);
        font-size: 1rem;
        transition: var(--transition);
        background: rgba(15, 23, 42, 0.7);
        color: var(--text-primary);
        font-family: inherit;
    }

    select.form-control {
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
    }

    select.form-control:focus {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%233b82f6' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    }

    .form-control::placeholder {
        color: var(--text-muted);
        opacity: 0.7;
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

    input[type="number"].form-control::-webkit-inner-spin-button,
    input[type="number"].form-control::-webkit-outer-spin-button {
        opacity: 0.5;
        cursor: pointer;
    }

    input[type="number"].form-control:focus::-webkit-inner-spin-button,
    input[type="number"].form-control:focus::-webkit-outer-spin-button {
        opacity: 1;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: var(--text-primary);
        border: 1px solid rgba(59, 130, 246, 0.3);
        padding: 16px 40px;
        font-size: 1.1rem;
        font-weight: 700;
        margin-top: 20px;
    }

    .btn-primary::before {
        content: '📎';
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-main));
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    .alert {
        padding: 20px;
        border-radius: var(--border-radius-sm);
        margin-bottom: 30px;
        font-weight: 600;
        border: 1px solid transparent;
        animation: slideIn 0.3s ease-out;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.15);
        color: #fca5a5;
        border: 1px solid rgba(239, 68, 68, 0.3);
    }

    .alert-danger::before {
        content: '⚠️';
        font-size: 1.2rem;
    }

    .alert-success {
        background: rgba(34, 197, 94, 0.15);
        color: #86efac;
        border: 1px solid rgba(34, 197, 94, 0.3);
    }

    .alert-success::before {
        content: '✅';
        font-size: 1.2rem;
    }

    .mt-3 {
        margin-top: 1rem;
    }

    .mt-4 {
        margin-top: 1.5rem;
    }

    .mt-5 {
        margin-top: 3rem;
    }

    /* Подсказки для полей */
    .field-hint {
        color: var(--text-muted);
        font-size: 0.85rem;
        margin-top: 8px;
        display: flex;
        align-items: center;
        gap: 6px;
        opacity: 0.8;
    }

    .field-hint::before {
        content: '💡';
        font-size: 0.9rem;
    }

    /* Декоративные элементы */
    .form-decoration {
        position: absolute;
        right: -40px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 8rem;
        opacity: 0.05;
        z-index: 0;
        pointer-events: none;
    }

    /* Информация о группе */
    .group-info {
        background: rgba(15, 23, 42, 0.5);
        border-radius: var(--border-radius-sm);
        padding: 15px;
        margin-top: 10px;
        border: 1px solid rgba(71, 85, 105, 0.2);
        display: none;
    }

    .group-info.show {
        display: block;
        animation: fadeIn 0.3s ease-out;
    }

    .group-info-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .group-info-label {
        color: var(--text-muted);
        font-weight: 600;
    }

    .group-info-value {
        color: var(--text-primary);
        font-weight: 700;
    }

    /* Стили для чисел */
    .number-input-group {
        position: relative;
    }

    .number-controls {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .number-btn {
        width: 24px;
        height: 24px;
        background: rgba(59, 130, 246, 0.2);
        border: 1px solid rgba(59, 130, 246, 0.3);
        color: var(--primary-light);
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        font-weight: 700;
        transition: var(--transition);
        user-select: none;
    }

    .number-btn:hover {
        background: rgba(59, 130, 246, 0.3);
    }

    .number-btn:active {
        transform: scale(0.9);
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .container {
            margin: 40px auto;
            padding: 0 15px;
        }

        .card {
            padding: 30px;
        }

        .card-header {
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
        }

        .card-header h4 {
            font-size: 1.6rem;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }

        .form-decoration {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .container {
            margin: 20px auto;
        }

        .card {
            padding: 20px;
        }

        .card-header h4 {
            font-size: 1.4rem;
        }

        .form-control {
            padding: 14px;
        }

        .btn {
            padding: 14px 20px;
        }
    }

    /* Анимация при фокусе */
    .form-group:focus-within label {
        color: var(--text-primary);
    }

    .form-group:focus-within::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, var(--primary-main), transparent);
        border-radius: 2px;
        animation: focusSlide 0.3s ease-out;
    }

    @keyframes focusSlide {
        from {
            transform: scaleX(0);
            opacity: 0;
        }
        to {
            transform: scaleX(1);
            opacity: 1;
        }
    }
</style>

<div class="container mt-5">
    <div class="card">
        <!-- Декоративный элемент -->
        <div class="form-decoration">📚</div>

        <div class="card-header">
            <h4>Прикрепить дисциплину к группе</h4>
            <a href="/pop-it-mvc/staff" class="btn btn-secondary">Назад</a>
        </div>

        <div class="card-body">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <p><?= htmlspecialchars($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($_GET['success'])): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars($_GET['success']) ?>
                </div>
            <?php endif; ?>

            <form method="post" id="attachForm">
                <input type="hidden" name="attachToGroup" value="1">

                <div class="form-row">
                    <div class="form-group">
                        <label for="id_group">Группа</label>
                        <select id="id_group" name="id_group" class="form-control" required>
                            <option value="">Выберите группу</option>
                            <?php foreach ($groups as $group): ?>
                                <option value="<?= $group->id_group ?>"
                                        data-student-count="<?= $group->students()->count() ?>">
                                    <?= htmlspecialchars($group->name) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="field-hint">Выберите учебную группу</div>
                        <div class="group-info" id="groupInfo"></div>
                    </div>

                    <div class="form-group">
                        <label for="id_discipline">Дисциплина</label>
                        <select id="id_discipline" name="id_discipline" class="form-control" required>
                            <option value="">Выберите дисциплину</option>
                            <?php foreach ($disciplines as $discipline): ?>
                                <option value="<?= $discipline->id_discipline ?>">
                                    <?= htmlspecialchars($discipline->name) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="field-hint">Выберите учебную дисциплину</div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="course">Курс</label>
                        <div class="number-input-group">
                            <input type="number"
                                   id="course"
                                   name="course"
                                   min="1"
                                   max="4"
                                   class="form-control"
                                   required
                                   placeholder="1-4"
                                   value="1">
                            <div class="number-controls">
                                <div class="number-btn" data-target="course" data-action="increase">+</div>
                                <div class="number-btn" data-target="course" data-action="decrease">-</div>
                            </div>
                        </div>
                        <div class="field-hint">1-4 курс обучения</div>
                    </div>

                    <div class="form-group">
                        <label for="semester">Семестр</label>
                        <div class="number-input-group">
                            <input type="number"
                                   id="semester"
                                   name="semester"
                                   min="1"
                                   max="2"
                                   class="form-control"
                                   required
                                   placeholder="1-2"
                                   value="1">
                            <div class="number-controls">
                                <div class="number-btn" data-target="semester" data-action="increase">+</div>
                                <div class="number-btn" data-target="semester" data-action="decrease">-</div>
                            </div>
                        </div>
                        <div class="field-hint">1-2 семестр</div>
                    </div>

                    <div class="form-group">
                        <label for="hours">Часы</label>
                        <div class="number-input-group">
                            <input type="number"
                                   id="hours"
                                   name="hours"
                                   min="1"
                                   max="500"
                                   class="form-control"
                                   required
                                   placeholder="Количество часов"
                                   value="36">
                            <div class="number-controls">
                                <div class="number-btn" data-target="hours" data-action="increase">+</div>
                                <div class="number-btn" data-target="hours" data-action="decrease">-</div>
                            </div>
                        </div>
                        <div class="field-hint">Общее количество часов</div>
                    </div>

                    <div class="form-group">
                        <label for="id_control_type">Тип контроля</label>
                        <select id="id_control_type" name="id_control_type" class="form-control" required>
                            <option value="">Выберите тип</option>
                            <?php foreach ($controlTypes as $type): ?>
                                <option value="<?= $type->id_control_type ?>">
                                    <?= htmlspecialchars($type->name) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="field-hint">Тип контроля знаний</div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Прикрепить дисциплину</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('attachForm');
        const groupSelect = document.getElementById('id_group');
        const disciplineSelect = document.getElementById('id_discipline');
        const courseInput = document.getElementById('course');
        const semesterInput = document.getElementById('semester');
        const hoursInput = document.getElementById('hours');
        const controlTypeSelect = document.getElementById('id_control_type');
        const groupInfo = document.getElementById('groupInfo');
        const numberButtons = document.querySelectorAll('.number-btn');

        // Автофокус на поле группы
        groupSelect.focus();

        // Информация о выбранной группе
        groupSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const studentCount = selectedOption.getAttribute('data-student-count') || 0;

            if (selectedOption.value) {
                groupInfo.innerHTML = `
                    <div class="group-info-item">
                        <span class="group-info-label">Студентов в группе:</span>
                        <span class="group-info-value">${studentCount}</span>
                    </div>
                    <div class="group-info-item">
                        <span class="group-info-label">Дисциплин на курс:</span>
                        <span class="group-info-value">Обычно 5-8 дисциплин</span>
                    </div>
                `;
                groupInfo.classList.add('show');

                // Подсказка о типичной нагрузке
                if (studentCount > 0) {
                    const hoursPerStudent = Math.ceil(parseInt(hoursInput.value) / studentCount);
                    const extraInfo = document.createElement('div');
                    extraInfo.className = 'group-info-item';
                    extraInfo.innerHTML = `
                        <span class="group-info-label">Часов на студента:</span>
                        <span class="group-info-value">~${hoursPerStudent} ч.</span>
                    `;
                    groupInfo.appendChild(extraInfo);
                }
            } else {
                groupInfo.classList.remove('show');
            }
        });

        // Кнопки для чисел
        numberButtons.forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                const action = this.getAttribute('data-action');
                const input = document.getElementById(target);
                let value = parseInt(input.value) || 0;

                if (action === 'increase') {
                    const max = parseInt(input.getAttribute('max')) || Infinity;
                    if (value < max) {
                        value++;
                    }
                } else if (action === 'decrease') {
                    const min = parseInt(input.getAttribute('min')) || -Infinity;
                    if (value > min) {
                        value--;
                    }
                }

                input.value = value;

                // Анимация изменения
                input.animate([
                    { backgroundColor: 'rgba(59, 130, 246, 0.2)' },
                    { backgroundColor: 'rgba(15, 23, 42, 0.7)' }
                ], {
                    duration: 300,
                    iterations: 1
                });
            });
        });

        // Валидация числовых полей
        [courseInput, semesterInput, hoursInput].forEach(input => {
            input.addEventListener('input', function() {
                const value = parseInt(this.value) || 0;
                const min = parseInt(this.getAttribute('min')) || 1;
                const max = parseInt(this.getAttribute('max')) || 100;

                if (value < min) {
                    this.value = min;
                    this.setCustomValidity(`Минимальное значение: ${min}`);
                    this.classList.add('is-invalid');
                } else if (value > max) {
                    this.value = max;
                    this.setCustomValidity(`Максимальное значение: ${max}`);
                    this.classList.add('is-invalid');
                } else {
                    this.setCustomValidity('');
                    this.classList.remove('is-invalid');
                }

                // Обновление информации о группе при изменении часов
                if (input === hoursInput && groupSelect.value) {
                    groupSelect.dispatchEvent(new Event('change'));
                }
            });

            // Подсказка при фокусе
            input.addEventListener('focus', function() {
                const hint = this.nextElementSibling;
                if (hint && hint.classList.contains('number-controls')) {
                    hint.style.opacity = '1';
                }
            });

            input.addEventListener('blur', function() {
                const hint = this.nextElementSibling;
                if (hint && hint.classList.contains('number-controls')) {
                    hint.style.opacity = '0.7';
                }
            });
        });

        // Проверка на дублирование дисциплины в группе
        let existingDisciplines = <?= json_encode($existingDisciplines ?? []) ?>;

        groupSelect.addEventListener('change', function() {
            const groupId = this.value;
            const disciplineId = disciplineSelect.value;

            if (groupId && disciplineId) {
                const key = `${groupId}_${disciplineId}`;
                if (existingDisciplines.includes(key)) {
                    const warning = document.createElement('div');
                    warning.className = 'alert alert-danger mt-3';
                    warning.innerHTML = `
                        <strong>⚠️ Внимание!</strong> Эта дисциплина уже прикреплена к данной группе.
                        <br><small>Вы уверены, что хотите добавить её повторно?</small>
                    `;

                    const existingWarning = form.querySelector('.duplicate-warning');
                    if (existingWarning) {
                        existingWarning.remove();
                    }

                    warning.classList.add('duplicate-warning');
                    form.querySelector('.btn-primary').before(warning);
                } else {
                    const warning = form.querySelector('.duplicate-warning');
                    if (warning) {
                        warning.remove();
                    }
                }
            }
        });

        disciplineSelect.addEventListener('change', function() {
            groupSelect.dispatchEvent(new Event('change'));
        });

        // Валидация формы
        form.addEventListener('submit', function(e) {
            let isValid = true;

            // Проверка всех обязательных полей
            const requiredFields = [
                groupSelect,
                disciplineSelect,
                courseInput,
                semesterInput,
                hoursInput,
                controlTypeSelect
            ];

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    field.style.borderColor = 'var(--accent-color)';

                    // Анимация ошибки
                    field.animate([
                        { transform: 'translateX(0)' },
                        { transform: 'translateX(-10px)' },
                        { transform: 'translateX(10px)' },
                        { transform: 'translateX(0)' }
                    ], {
                        duration: 300,
                        iterations: 1
                    });

                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                    field.style.borderColor = '';
                }
            });

            if (!isValid) {
                e.preventDefault();

                // Прокрутка к первой ошибке
                const firstError = form.querySelector('.is-invalid');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }

                return false;
            }

            // Индикатор загрузки
            const submitBtn = this.querySelector('.btn-primary');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '📎 Прикрепление...';
            submitBtn.disabled = true;

            // Восстановление через 3 секунды
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 3000);

            // Подтверждение при дублировании
            const duplicateWarning = form.querySelector('.duplicate-warning');
            if (duplicateWarning) {
                if (!confirm('Эта дисциплина уже прикреплена к группе. Вы уверены, что хотите добавить её повторно?')) {
                    e.preventDefault();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    return false;
                }
            }
        });

        // Автоматическое изменение семестра при изменении курса
        courseInput.addEventListener('change', function() {
            const course = parseInt(this.value);
            if (course === 1 || course === 3) {
                semesterInput.value = 1;
            } else if (course === 2 || course === 4) {
                semesterInput.value = 2;
            }
        });

        // Рекомендация часов в зависимости от курса
        courseInput.addEventListener('change', function() {
            const course = parseInt(this.value);
            const recommendedHours = {
                1: 36,
                2: 54,
                3: 72,
                4: 36
            };

            if (recommendedHours[course] && hoursInput.value === '36') {
                hoursInput.value = recommendedHours[course];

                // Анимация изменения
                hoursInput.animate([
                    { backgroundColor: 'rgba(34, 197, 94, 0.2)' },
                    { backgroundColor: 'rgba(15, 23, 42, 0.7)' }
                ], {
                    duration: 500,
                    iterations: 1
                });
            }
        });
    });
</script>