<style>
    .staff-container {
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

    .page-header {
        text-align: center;
        margin-bottom: 50px;
        padding: 50px 0;
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
        content: '👨‍🎓';
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 4rem;
        opacity: 0.05;
    }

    .page-title {
        font-size: 2.2rem;
        font-weight: 700;
        margin: 0;
        background: linear-gradient(to right, var(--text-primary), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        z-index: 1;
    }

    .page-subtitle {
        color: var(--text-muted);
        font-size: 1.1rem;
        margin-top: 15px;
        font-weight: 500;
        position: relative;
        z-index: 1;
    }

    .section {
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

    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-group label::before {
        font-size: 1.1rem;
    }

    .form-group:nth-child(1) label::before { content: '👤'; }
    .form-group:nth-child(2) label::before { content: '👤'; }
    .form-group:nth-child(3) label::before { content: '👤'; }
    .form-group:nth-child(4) label::before { content: '🏠'; }
    .form-group:nth-child(5) label::before { content: '🎂'; }
    .form-group:nth-child(6) label::before { content: '⚧'; }
    .form-group:nth-child(7) label::before { content: '👥'; }

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

    input[type="date"].form-control {
        background-image: none;
    }

    input[type="date"].form-control::-webkit-calendar-picker-indicator {
        filter: invert(0.5) sepia(1) saturate(5) hue-rotate(190deg);
        cursor: pointer;
        opacity: 0.7;
        transition: var(--transition);
    }

    input[type="date"].form-control::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
    }

    .btn {
        padding: 16px 32px;
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

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: var(--text-primary);
        border: 1px solid rgba(59, 130, 246, 0.3);
    }

    .btn-primary::before {
        content: '➕';
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-main));
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .btn-secondary {
        background: rgba(71, 85, 105, 0.3);
        color: var(--text-secondary);
        border: 1px solid rgba(71, 85, 105, 0.5);
    }

    .btn-secondary::before {
        content: '↩️';
    }

    .btn-secondary:hover {
        background: rgba(71, 85, 105, 0.5);
        color: var(--text-primary);
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .btn-group {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 30px;
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

    /* Валидационные стили */
    .is-invalid {
        border-color: var(--accent-color) !important;
        background: rgba(239, 68, 68, 0.1) !important;
        animation: shake 0.3s ease-out;
    }

    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }
        20%, 60% {
            transform: translateX(-5px);
        }
        40%, 80% {
            transform: translateX(5px);
        }
    }

    .invalid-feedback {
        color: #fca5a5;
        font-size: 0.9rem;
        margin-top: 8px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 6px;
        animation: slideIn 0.3s ease-out;
    }

    .invalid-feedback::before {
        content: '⚠️';
        font-size: 0.9rem;
    }

    /* Подсказки для полей */
    .field-hint {
        color: var(--text-muted);
        font-size: 0.85rem;
        margin-top: 6px;
        display: flex;
        align-items: center;
        gap: 5px;
        opacity: 0.8;
    }

    .field-hint::before {
        content: '💡';
        font-size: 0.9rem;
    }

    /* Полный адрес для примера */
    .address-example {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-top: 10px;
        padding: 10px;
        background: rgba(15, 23, 42, 0.3);
        border-radius: var(--border-radius-sm);
        border-left: 3px solid var(--primary-main);
    }

    .address-example::before {
        content: '📍 Пример: ';
        font-weight: 600;
        color: var(--primary-light);
    }

    @media (max-width: 768px) {
        .staff-container {
            margin: 40px auto;
            padding: 0 15px;
        }

        .page-header {
            padding: 40px 0;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 1.8rem;
        }

        .section {
            padding: 30px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .btn-group {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
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

        .form-control {
            padding: 14px;
        }
    }

    /* Эффект при фокусе */
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

    /* Автозаполнение фамилии, имени, отчества */
    .name-suggestions {
        position: absolute;
        background: rgba(30, 41, 59, 0.98);
        border: 1px solid rgba(71, 85, 105, 0.5);
        border-radius: var(--border-radius-sm);
        width: 100%;
        max-height: 200px;
        overflow-y: auto;
        z-index: 1000;
        display: none;
        box-shadow: var(--shadow-lg);
    }

    .suggestion-item {
        padding: 12px 16px;
        cursor: pointer;
        transition: var(--transition);
        color: var(--text-primary);
    }

    .suggestion-item:hover {
        background: rgba(59, 130, 246, 0.2);
    }

    .suggestion-item.active {
        background: rgba(59, 130, 246, 0.3);
    }
</style>

<div class="staff-container">
    <div class="page-header">
        <h1 class="page-title">Добавление нового студента</h1>
        <p class="page-subtitle">Заполните анкету для регистрации студента в системе</p>
    </div>

    <div class="section">
        <!-- Сообщения об ошибках -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $fieldErrors): ?>
                    <?php if (is_array($fieldErrors)): ?>
                        <?php foreach ($fieldErrors as $error): ?>
                            <p><?= htmlspecialchars($error) ?></p>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p><?= htmlspecialchars($fieldErrors) ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Сообщения об успехе -->
        <?php if (!empty($_GET['success'])): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_GET['success']) ?>
            </div>
        <?php endif; ?>

        <!-- Форма добавления студента -->
        <form method="post" id="studentForm">
            <input type="hidden" name="create" value="1">

            <div class="form-row">
                <div class="form-group">
                    <label for="surname">Фамилия</label>
                    <input type="text"
                           id="surname"
                           name="surname"
                           class="form-control"
                           required
                           value="<?= htmlspecialchars($request->surname ?? '') ?>"
                           placeholder="Иванов"
                           maxlength="50"
                           autocomplete="family-name">
                    <div class="field-hint">Только кириллические буквы</div>
                </div>

                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text"
                           id="name"
                           name="name"
                           class="form-control"
                           required
                           value="<?= htmlspecialchars($request->name ?? '') ?>"
                           placeholder="Иван"
                           maxlength="50"
                           autocomplete="given-name">
                    <div class="field-hint">Только кириллические буквы</div>
                </div>

                <div class="form-group">
                    <label for="patronym">Отчество</label>
                    <input type="text"
                           id="patronym"
                           name="patronym"
                           class="form-control"
                           value="<?= htmlspecialchars($request->patronym ?? '') ?>"
                           placeholder="Иванович"
                           maxlength="50"
                           autocomplete="additional-name">
                    <div class="field-hint">Необязательное поле</div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="address">Адрес проживания</label>
                    <input type="text"
                           id="address"
                           name="address"
                           class="form-control"
                           required
                           value="<?= htmlspecialchars($request->address ?? '') ?>"
                           placeholder="г. Москва, ул. Примерная, д. 1, кв. 10"
                           maxlength="200">
                    <div class="address-example">
                        г. Москва, ул. Ленина, д. 15, кв. 42<br>
                        г. Санкт-Петербург, пр. Невский, д. 28
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="date_birth">Дата рождения</label>
                    <input type="date"
                           id="date_birth"
                           name="date_birth"
                           class="form-control"
                           required
                           value="<?= htmlspecialchars($request->date_birth ?? '') ?>"
                           min="1970-01-01"
                           max="<?= date('Y-m-d', strtotime('-16 years')) ?>">
                    <div class="field-hint">Минимальный возраст: 16 лет</div>
                </div>

                <div class="form-group">
                    <label for="id_gender">Пол</label>
                    <select id="id_gender"
                            name="id_gender"
                            class="form-control"
                            required>
                        <option value="">Выберите пол</option>
                        <?php foreach ($genders as $gender): ?>
                            <option value="<?= $gender->id_gender ?>"
                                <?= ($request->id_gender ?? '') == $gender->id_gender ? 'selected' : '' ?>>
                                <?= htmlspecialchars($gender->name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_group">Группа</label>
                    <select id="id_group"
                            name="id_group"
                            class="form-control"
                            required>
                        <option value="">Выберите группу</option>
                        <?php foreach ($groups as $group): ?>
                            <option value="<?= $group->id_group ?>"
                                    data-count="<?= $group->students()->count() ?>"
                                <?= ($request->id_group ?? '') == $group->id_group ? 'selected' : '' ?>>
                                <?= htmlspecialchars($group->name) ?>
                                (<?= $group->students()->count() ?> студентов)
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="field-hint" id="groupInfo"></div>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Добавить студента</button>
                <a href="/pop-it-mvc/staff" class="btn btn-secondary">Отмена</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('studentForm');
        const surnameInput = document.getElementById('surname');
        const nameInput = document.getElementById('name');
        const patronymInput = document.getElementById('patronym');
        const dateInput = document.getElementById('date_birth');
        const groupSelect = document.getElementById('id_group');
        const groupInfo = document.getElementById('groupInfo');

        // Автофокус на поле фамилии
        surnameInput.focus();

        // Валидация ФИО (только кириллица)
        function validateCyrillic(input) {
            const value = input.value;
            const cyrillicPattern = /^[а-яА-ЯёЁ\s\-]+$/;

            if (value && !cyrillicPattern.test(value)) {
                input.classList.add('is-invalid');
                input.setCustomValidity('Используйте только кириллические буквы');
                return false;
            } else {
                input.classList.remove('is-invalid');
                input.setCustomValidity('');
                return true;
            }
        }

        // Приведение ФИО к правильному регистру
        function capitalizeWords(input) {
            if (!input.value) return;

            let words = input.value.toLowerCase().split(' ');
            words = words.map(word => {
                if (word.length > 0) {
                    return word.charAt(0).toUpperCase() + word.slice(1);
                }
                return word;
            });

            input.value = words.join(' ');
        }

        // Валидация и форматирование ФИО
        [surnameInput, nameInput, patronymInput].forEach(input => {
            input.addEventListener('input', function() {
                validateCyrillic(this);
                capitalizeWords(this);
            });

            input.addEventListener('blur', function() {
                validateCyrillic(this);
                capitalizeWords(this);
            });
        });

        // Валидация даты рождения
        dateInput.addEventListener('change', function() {
            const selectedDate = new Date(this.value);
            const minDate = new Date('1970-01-01');
            const maxDate = new Date('<?= date('Y-m-d', strtotime('-16 years')) ?>');

            if (selectedDate < minDate) {
                this.setCustomValidity('Дата не может быть раньше 1970 года');
                this.classList.add('is-invalid');
            } else if (selectedDate > maxDate) {
                this.setCustomValidity('Студент должен быть не младше 16 лет');
                this.classList.add('is-invalid');
            } else {
                this.setCustomValidity('');
                this.classList.remove('is-invalid');

                // Вычисление возраста
                const today = new Date();
                let age = today.getFullYear() - selectedDate.getFullYear();
                const monthDiff = today.getMonth() - selectedDate.getMonth();
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
                    age--;
                }

                const ageHint = document.createElement('div');
                ageHint.className = 'field-hint';
                ageHint.innerHTML = `Возраст: ${age} лет`;

                const existingHint = this.parentNode.querySelector('.field-hint');
                if (existingHint) {
                    existingHint.remove();
                }
                this.parentNode.appendChild(ageHint);
            }
        });

        // Информация о выбранной группе
        groupSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const studentCount = selectedOption.getAttribute('data-count') || 0;

            if (selectedOption.value) {
                groupInfo.innerHTML = `В группе: ${studentCount} студентов`;
                groupInfo.style.color = studentCount >= 30 ? 'var(--accent-color)' : 'var(--text-muted)';

                if (studentCount >= 30) {
                    groupInfo.innerHTML += ' (группа почти заполнена)';
                }
            } else {
                groupInfo.innerHTML = '';
            }
        });

        // Инициализация информации о группе
        if (groupSelect.value) {
            groupSelect.dispatchEvent(new Event('change'));
        }

        // Валидация адреса
        const addressInput = document.getElementById('address');
        addressInput.addEventListener('input', function() {
            if (this.value.length < 10) {
                this.setCustomValidity('Адрес должен содержать не менее 10 символов');
                this.classList.add('is-invalid');
            } else {
                this.setCustomValidity('');
                this.classList.remove('is-invalid');
            }
        });

        // Валидация формы при отправке
        form.addEventListener('submit', function(e) {
            let isValid = true;

            // Проверка всех обязательных полей
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;

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

            // Добавление индикатора загрузки
            const submitBtn = this.querySelector('.btn-primary');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '🔄 Добавление студента...';
            submitBtn.disabled = true;

            // Восстановление кнопки через 3 секунды
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 3000);
        });

        // Автоматический ввод даты рождения при фокусе
        dateInput.addEventListener('focus', function() {
            if (!this.value) {
                const defaultDate = new Date();
                defaultDate.setFullYear(defaultDate.getFullYear() - 18);
                this.value = defaultDate.toISOString().split('T')[0];
                this.dispatchEvent(new Event('change'));
            }
        });

        // Подсказки для полей при фокусе
        const formControls = form.querySelectorAll('.form-control');
        formControls.forEach(control => {
            control.addEventListener('focus', function() {
                this.parentNode.classList.add('focused');
            });

            control.addEventListener('blur', function() {
                this.parentNode.classList.remove('focused');
            });
        });

        // Автоматическое склонение отчества
        const genderSelect = document.getElementById('id_gender');
        genderSelect.addEventListener('change', function() {
            if (patronymInput.value) {
                const patronym = patronymInput.value.trim();
                const gender = this.value;

                // Упрощенная логика для демонстрации
                if (gender === '1') { // Мужской
                    if (patronym.endsWith('на')) {
                        patronymInput.value = patronym.slice(0, -1);
                    }
                } else if (gender === '2') { // Женский
                    if (!patronym.endsWith('на')) {
                        patronymInput.value = patronym + 'на';
                    }
                }
            }
        });
    });
</script>