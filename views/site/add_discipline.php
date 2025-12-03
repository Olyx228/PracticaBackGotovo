<style>
    .container {
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
        content: '📚';
        font-size: 1.5rem;
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
        content: '🏫';
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
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: var(--text-primary);
        border: 1px solid rgba(59, 130, 246, 0.3);
        padding: 16px 40px;
        font-size: 1.1rem;
        font-weight: 700;
    }

    .btn-primary::before {
        content: '➕';
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

    .mt-4 {
        margin-top: 2rem;
    }

    .mt-5 {
        margin-top: 3rem;
    }

    /* Декоративный элемент формы */
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

    /* Ховер эффект для формы */
    .form-group:hover label {
        color: var(--text-primary);
    }

    .form-group:hover .form-control {
        border-color: var(--primary-main);
    }

    /* Кастомный фокус индикатор */
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

    /* Анимация при отправке формы */
    form {
        position: relative;
    }

    form.submitting::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(30, 41, 59, 0.8);
        backdrop-filter: blur(5px);
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: var(--border-radius-sm);
    }

    form.submitting::after {
        content: '📚';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2rem;
        z-index: 11;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 0.5;
            transform: translate(-50%, -50%) scale(1);
        }
        50% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
        }
    }
</style>

<div class="container mt-5">
    <div class="card">
        <!-- Декоративный элемент -->
        <div class="form-decoration">📚</div>

        <div class="card-header">
            <h4>Добавить новую дисциплину</h4>
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

            <form method="post" id="disciplineForm">
                <input type="hidden" name="create" value="1">

                <div class="form-group">
                    <label>Название дисциплины</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Введите название дисциплины"
                           required autocomplete="off"
                           maxlength="100"
                           pattern=".{3,}"
                           title="Название должно содержать минимум 3 символа">
                </div>

                <button type="submit" class="btn btn-primary mt-4">
                    Добавить дисциплину
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('disciplineForm');
        const input = document.querySelector('input[name="name"]');

        // Автофокус на поле ввода
        if (input) {
            input.focus();
        }

        // Валидация при вводе
        input.addEventListener('input', function() {
            if (this.value.length < 3) {
                this.setCustomValidity('Название должно содержать минимум 3 символа');
                this.style.borderColor = 'var(--accent-color)';
                this.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
            } else if (this.value.length > 100) {
                this.setCustomValidity('Название не должно превышать 100 символов');
                this.style.borderColor = 'var(--accent-color)';
                this.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
            } else {
                this.setCustomValidity('');
                this.style.borderColor = 'rgba(71, 85, 105, 0.3)';
                this.style.boxShadow = 'none';
            }

            // Подсветка при успешном вводе
            if (this.checkValidity() && this.value.length >= 3) {
                this.style.borderColor = 'var(--primary-main)';
                this.style.background = 'rgba(15, 23, 42, 0.9)';
            }
        });

        // Эффект при отправке формы
        form.addEventListener('submit', function(e) {
            if (!input.checkValidity()) {
                e.preventDefault();
                input.focus();

                // Анимация ошибки
                input.animate([
                    { transform: 'translateX(0)' },
                    { transform: 'translateX(-10px)' },
                    { transform: 'translateX(10px)' },
                    { transform: 'translateX(0)' }
                ], {
                    duration: 300,
                    iterations: 1
                });

                return;
            }

            // Добавляем класс отправки
            form.classList.add('submitting');

            // Имитация загрузки (можно убрать, если используется реальная отправка)
            setTimeout(() => {
                form.classList.remove('submitting');
            }, 1500);
        });

        // Подсчет символов
        const charCounter = document.createElement('div');
        charCounter.style.cssText = `
            position: absolute;
            right: 10px;
            bottom: -25px;
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
        `;

        input.parentNode.appendChild(charCounter);

        input.addEventListener('input', function() {
            const length = this.value.length;
            charCounter.textContent = `${length}/100 символов`;

            if (length > 80) {
                charCounter.style.color = 'var(--accent-color)';
            } else if (length > 60) {
                charCounter.style.color = '#f59e0b';
            } else {
                charCounter.style.color = 'var(--text-muted)';
            }
        });

        // Инициализация счетчика
        input.dispatchEvent(new Event('input'));

        // Эффект при фокусе
        input.addEventListener('focus', function() {
            this.parentNode.style.transform = 'translateY(-2px)';
        });

        input.addEventListener('blur', function() {
            this.parentNode.style.transform = 'translateY(0)';
        });
    });
</script>