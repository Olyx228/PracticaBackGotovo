<style>
    .staff-container {
        max-width: 900px;
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
        content: '👥';
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

    .form-group {
        margin-bottom: 35px;
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
        content: '🏷️';
        font-size: 1.2rem;
    }

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

    .form-control:focus {
        border-color: var(--primary-light);
        outline: none;
        background: rgba(15, 23, 42, 0.9);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .form-control::placeholder {
        color: var(--text-muted);
        opacity: 0.7;
    }

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

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-5px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .invalid-feedback::before {
        content: '⚠️';
        font-size: 0.9rem;
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
    }

    .alert {
        padding: 20px;
        border-radius: var(--border-radius-sm);
        margin-bottom: 30px;
        font-weight: 600;
        border: 1px solid transparent;
        animation: slideInAlert 0.3s ease-out;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    @keyframes slideInAlert {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
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

    /* Примеры групп */
    .group-examples {
        margin-top: 15px;
        color: var(--text-muted);
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .group-examples::before {
        content: '💡';
    }

    .example-badge {
        background: rgba(59, 130, 246, 0.1);
        border: 1px solid rgba(59, 130, 246, 0.2);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        color: var(--primary-light);
        transition: var(--transition);
        cursor: pointer;
    }

    .example-badge:hover {
        background: rgba(59, 130, 246, 0.2);
        transform: translateY(-1px);
    }

    /* Счетчик символов */
    .char-counter {
        position: absolute;
        right: 10px;
        bottom: -25px;
        font-size: 0.85rem;
        color: var(--text-muted);
        font-weight: 500;
        transition: var(--transition);
    }

    .char-counter.warning {
        color: #f59e0b;
    }

    .char-counter.danger {
        color: var(--accent-color);
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

        .group-examples {
            flex-direction: column;
            align-items: flex-start;
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
</style>

<div class="staff-container">
    <div class="page-header">
        <h1 class="page-title">Добавление новой группы</h1>
        <p class="page-subtitle">Создайте новую учебную группу</p>
    </div>

    <div class="section">
        <!-- Сообщения об ошибках -->
        <?php if (!empty($errors) && is_array($errors)): ?>
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

        <!-- Форма добавления группы -->
        <form method="post" id="groupForm">
            <input type="hidden" name="create" value="1">

            <div class="form-group">
                <label for="name">Название группы</label>
                <input type="text"
                       id="name"
                       name="name"
                       class="form-control <?= !empty($errors['name']) ? 'is-invalid' : '' ?>"
                       placeholder="Например: 424"
                       required
                       maxlength="10"
                       pattern="^[0-9А-Яа-я\s\-]+$"
                       title="Только цифры, русские буквы, пробелы и дефисы"
                       value="<?= htmlspecialchars($request->name ?? '') ?>"
                       autocomplete="off">

                <div class="char-counter" id="charCounter">0/10 символов</div>

                <?php if (!empty($errors['name'])): ?>
                    <div class="invalid-feedback">
                        <?php foreach ($errors['name'] as $error): ?>
                            <p><?= htmlspecialchars($error) ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="group-examples">
                    Примеры названий:
                    <span class="example-badge" data-example="424">424</span>
                    <span class="example-badge" data-example="ПИ-202">ПИ-202</span>
                    <span class="example-badge" data-example="ИСП-19">ИСП-19</span>
                    <span class="example-badge" data-example="ЭВМ-301">ЭВМ-301</span>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Добавить группу</button>
                <a href="/pop-it-mvc/staff" class="btn btn-secondary">Отмена</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nameInput = document.getElementById('name');
        const charCounter = document.getElementById('charCounter');
        const exampleBadges = document.querySelectorAll('.example-badge');
        const form = document.getElementById('groupForm');

        // Автофокус на поле ввода
        if (nameInput) {
            nameInput.focus();

            // Выделить текст, если есть значение
            if (nameInput.value) {
                nameInput.select();
            }
        }

        // Счетчик символов
        function updateCharCounter() {
            const length = nameInput.value.length;
            const maxLength = 10;

            charCounter.textContent = `${length}/${maxLength} символов`;

            // Изменение цвета счетчика
            if (length > 8) {
                charCounter.className = 'char-counter danger';
            } else if (length > 6) {
                charCounter.className = 'char-counter warning';
            } else {
                charCounter.className = 'char-counter';
            }
        }

        nameInput.addEventListener('input', updateCharCounter);
        updateCharCounter(); // Инициализация

        // Примеры названий групп
        exampleBadges.forEach(badge => {
            badge.addEventListener('click', function() {
                nameInput.value = this.getAttribute('data-example');
                nameInput.focus();
                updateCharCounter();

                // Анимация вставки
                nameInput.animate([
                    { backgroundColor: 'rgba(59, 130, 246, 0.2)' },
                    { backgroundColor: 'rgba(15, 23, 42, 0.7)' }
                ], {
                    duration: 500,
                    iterations: 1
                });
            });
        });

        // Валидация при вводе
        nameInput.addEventListener('input', function() {
            const value = this.value;
            const pattern = /^[0-9А-Яа-я\s\-]+$/;

            if (!pattern.test(value) && value !== '') {
                this.setCustomValidity('Используйте только цифры, русские буквы, пробелы и дефисы');
                this.classList.add('is-invalid');
            } else {
                this.setCustomValidity('');
                this.classList.remove('is-invalid');
            }

            // Автоматическое приведение к верхнему регистру для букв
            if (/[а-я]/.test(value)) {
                this.value = value.toUpperCase();
            }
        });

        // Валидация при отправке формы
        form.addEventListener('submit', function(e) {
            if (!nameInput.checkValidity()) {
                e.preventDefault();

                // Показать ошибку
                if (!nameInput.classList.contains('is-invalid')) {
                    nameInput.classList.add('is-invalid');
                }

                // Анимация ошибки
                nameInput.animate([
                    { transform: 'translateX(0)' },
                    { transform: 'translateX(-10px)' },
                    { transform: 'translateX(10px)' },
                    { transform: 'translateX(0)' }
                ], {
                    duration: 300,
                    iterations: 1
                });

                nameInput.focus();
                return false;
            }

            // Добавить индикатор загрузки
            const submitBtn = this.querySelector('.btn-primary');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = '🔄 Создание...';
            submitBtn.disabled = true;

            // Восстановить кнопку через 3 секунды (на случай если форма не отправится)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 3000);
        });

        // Очистка ошибок при фокусе
        nameInput.addEventListener('focus', function() {
            this.classList.remove('is-invalid');
        });

        // Подсказка при фокусе
        nameInput.addEventListener('focus', function() {
            if (!this.value) {
                this.setAttribute('placeholder', 'Пример: 424, ПИ-202, ИСП-19');
            }
        });

        nameInput.addEventListener('blur', function() {
            this.setAttribute('placeholder', 'Например: 424');
        });

        // Эффект при наведении на поле
        nameInput.addEventListener('mouseenter', function() {
            this.style.borderColor = 'rgba(59, 130, 246, 0.5)';
        });

        nameInput.addEventListener('mouseleave', function() {
            if (document.activeElement !== this) {
                this.style.borderColor = 'rgba(71, 85, 105, 0.3)';
            }
        });
    });
</script>