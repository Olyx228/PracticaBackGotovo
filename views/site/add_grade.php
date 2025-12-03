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
        content: '📊';
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
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
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
        gap: 8px;
    }

    .form-group label::before {
        font-size: 1.1rem;
    }

    .form-group:nth-child(1) label::before {
        content: '👨‍🎓';
    }

    .form-group:nth-child(2) label::before {
        content: '📚';
    }

    .form-group:nth-child(3) label::before {
        content: '⭐';
    }

    .form-group:nth-child(4) label::before {
        content: '📅';
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

    input[type="date"].form-control {
        background-image: none;
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
        margin-right: 20px;
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

    .grade-option {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px 0;
    }

    .grade-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        font-weight: 700;
        font-size: 0.9rem;
    }

    .grade-5 .grade-badge { background: #10b981; color: white; }
    .grade-4 .grade-badge { background: #3b82f6; color: white; }
    .grade-3 .grade-badge { background: #f59e0b; color: white; }
    .grade-2 .grade-badge { background: #ef4444; color: white; }

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

        .btn {
            width: 100%;
            margin-right: 0;
            margin-bottom: 15px;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
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

    /* Кастомные стили для datepicker */
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(0.5) sepia(1) saturate(5) hue-rotate(190deg);
        cursor: pointer;
        opacity: 0.7;
        transition: var(--transition);
    }

    input[type="date"]::-webkit-calendar-picker-indicator:hover {
        opacity: 1;
    }
</style>

<div class="staff-container">
    <div class="page-header">
        <h1 class="page-title">Добавление новой оценки</h1>
        <p class="page-subtitle">Заполните форму для добавления оценки студенту</p>
    </div>

    <div class="section">
        <!-- Сообщения об ошибках -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                    <p><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Сообщения об успехе -->
        <?php if (!empty($_GET['success'])): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_GET['success']) ?>
            </div>
        <?php endif; ?>

        <!-- Форма добавления оценки -->
        <form method="post">
            <input type="hidden" name="create" value="1">

            <div class="form-row">
                <div class="form-group">
                    <label>Студент</label>
                    <select class="form-control" name="id_student" required>
                        <option value="">Выберите студента</option>
                        <?php foreach ($students as $student): ?>
                            <option value="<?= $student->id_student ?>">
                                <?= htmlspecialchars($student->surname . ' ' . $student->name) ?>
                                (Группа: <?= htmlspecialchars($student->student_groups->name ?? 'Не указана') ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Дисциплина</label>
                    <select class="form-control" name="id_discipline" required>
                        <option value="">Выберите дисциплину</option>
                        <?php foreach ($disciplines as $discipline): ?>
                            <option value="<?= $discipline->id_discipline ?>">
                                <?= htmlspecialchars($discipline->name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Оценка</label>
                    <select class="form-control" name="grade" required id="gradeSelect">
                        <option value="">Выберите оценку</option>
                        <option value="5" data-grade="5" class="grade-option">
                            <span class="grade-badge">5</span> Отлично
                        </option>
                        <option value="4" data-grade="4" class="grade-option">
                            <span class="grade-badge">4</span> Хорошо
                        </option>
                        <option value="3" data-grade="3" class="grade-option">
                            <span class="grade-badge">3</span> Удовлетворительно
                        </option>
                        <option value="2" data-grade="2" class="grade-option">
                            <span class="grade-badge">2</span> Неудовлетворительно
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Дата оценки</label>
                    <input type="date" class="form-control" name="date"
                           value="<?= date('Y-m-d') ?>" required
                           min="2000-01-01" max="<?= date('Y-m-d', strtotime('+1 year')) ?>">
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Добавить оценку</button>
                <a href="/pop-it-mvc/staff" class="btn btn-secondary">Отмена</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const gradeSelect = document.getElementById('gradeSelect');
        const dateInput = document.querySelector('input[type="date"]');

        // Стилизация выбранной оценки
        gradeSelect.addEventListener('change', function() {
            const options = this.querySelectorAll('option');
            options.forEach(opt => {
                opt.style.fontWeight = 'normal';
                opt.style.backgroundColor = '';
                opt.style.color = '';
            });

            if (this.value) {
                const selected = this.options[this.selectedIndex];
                selected.style.fontWeight = '700';
                selected.style.backgroundColor = 'rgba(59, 130, 246, 0.1)';

                // Цвет в зависимости от оценки
                const grade = selected.getAttribute('data-grade');
                const colors = {
                    '5': '#10b981',
                    '4': '#3b82f6',
                    '3': '#f59e0b',
                    '2': '#ef4444'
                };
                if (grade && colors[grade]) {
                    selected.style.color = colors[grade];
                }
            }
        });

        // Валидация даты
        dateInput.addEventListener('change', function() {
            const selectedDate = new Date(this.value);
            const minDate = new Date('2000-01-01');
            const maxDate = new Date('<?= date('Y-m-d', strtotime('+1 year')) ?>');

            if (selectedDate < minDate) {
                this.setCustomValidity('Дата не может быть раньше 2000 года');
            } else if (selectedDate > maxDate) {
                this.setCustomValidity('Дата не может быть больше чем через год от текущей');
            } else {
                this.setCustomValidity('');
            }
        });

        // Подсветка обязательных полей
        const requiredFields = document.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            field.addEventListener('invalid', function(e) {
                e.preventDefault();
                this.style.borderColor = 'var(--accent-color)';
                this.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';

                // Анимация ошибки
                this.animate([
                    { transform: 'translateX(0)' },
                    { transform: 'translateX(-10px)' },
                    { transform: 'translateX(10px)' },
                    { transform: 'translateX(0)' }
                ], {
                    duration: 300,
                    iterations: 1
                });
            });

            field.addEventListener('input', function() {
                if (this.checkValidity()) {
                    this.style.borderColor = 'rgba(71, 85, 105, 0.3)';
                    this.style.boxShadow = 'none';
                }
            });
        });

        // Фокус на первом поле
        const firstField = document.querySelector('select[name="id_student"]');
        if (firstField) {
            firstField.focus();
        }
    });
</script>