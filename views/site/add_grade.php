<style>
    .staff-container {
        max-width: 1000px;
        margin: 50px auto;
        padding: 20px;
    }

    .page-header {
        text-align: center;
        margin-bottom: 40px;
        padding: 30px 0;
        background: var(--surface);
        border-radius: var(--border-radius);
        color: var(--text-primary);
        border: 1px solid #334155;
    }

    .page-title {
        font-size: 1.8rem;
        font-weight: 600;
        margin: 0;
    }

    .section {
        background: var(--surface);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 30px;
        border: 1px solid #334155;
    }

    .form-row {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        min-width: 200px;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #334155;
        border-radius: var(--border-radius);
        font-size: 14px;
        transition: all 0.3s ease;
        background: var(--background);
        color: var(--text-primary);
    }

    .form-control:focus {
        border-color: var(--primary-main);
        outline: none;
        background: var(--surface);
    }

    .btn {
        padding: 12px 20px;
        border-radius: var(--border-radius);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 14px;
        margin-right: 15px;
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

    .btn:not(.btn-primary) {
        background: var(--primary-dark);
        color: var(--text-secondary);
        border: 1px solid var(--primary-main);
    }

    .btn:not(.btn-primary):hover {
        background: var(--primary-main);
        color: var(--text-primary);
        transform: translateY(-2px);
    }

    .alert {
        padding: 15px;
        border-radius: var(--border-radius);
        margin-bottom: 30px;
        font-weight: 600;
        border: 1px solid transparent;
        text-align: center;
    }

    .alert-danger {
        background: var(--accent-color);
        color: var(--text-primary);
        border-color: var(--accent-hover);
    }

    .alert-success {
        background: #2d5a2d;
        color: var(--text-primary);
        border: 1px solid #48bb78;
    }

</style>

<div class="staff-container">
    <div class="page-header">
        <h1 class="page-title">Добавление новой оценки</h1>
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
                    <select class="form-control" name="grade" required>
                        <option value="">Выберите оценку</option>
                        <option value="5">5 (Отлично)</option>
                        <option value="4">4 (Хорошо)</option>
                        <option value="3">3 (Удовлетворительно)</option>
                        <option value="2">2 (Неудовлетворительно)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Дата оценки</label>
                    <input type="date" class="form-control" name="date"
                           value="<?= date('Y-m-d') ?>" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Добавить оценку</button>
                <a href="/pop-it-mvc/staff" class="btn">Отмена</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const gradeSelect = document.querySelector('select[name="grade"]');
        const gradeOptions = document.querySelectorAll('select[name="grade"] option');

        gradeSelect.addEventListener('change', function() {
            gradeOptions.forEach(option => {
                option.style.fontWeight = 'normal';
            });

            if (this.value) {
                const selectedOption = this.options[this.selectedIndex];
                selectedOption.style.fontWeight = '600';
            }
        });
    });
</script>