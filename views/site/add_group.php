<style>
    .staff-container {
        max-width: 800px;
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

    .form-group {
        margin-bottom: 25px;
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

    .is-invalid {
        border-color: var(--accent-color) !important;
    }

    .invalid-feedback {
        color: var(--accent-color);
        font-size: 13px;
        margin-top: 8px;
        font-weight: 500;
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
        margin-bottom: 25px;
        font-weight: 600;
        border: 1px solid transparent;
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
        <h1 class="page-title">Добавление новой группы</h1>
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
        <form method="post">
            <input type="hidden" name="create" value="1">

            <div class="form-group">
                <label for="name">Название группы</label>
                <input type="text"
                       id="name"
                       name="name"
                       class="form-control <?= !empty($errors['name']) ? 'is-invalid' : '' ?>"
                       placeholder="Например: 424"
                       required
                       value="<?= htmlspecialchars($request->name ?? '') ?>">
                <?php if (!empty($errors['name'])): ?>
                    <div class="invalid-feedback">
                        <?php foreach ($errors['name'] as $error): ?>
                            <p><?= htmlspecialchars($error) ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Добавить группу</button>
                <a href="/pop-it-mvc/staff" class="btn">Отмена</a>
            </div>
        </form>
    </div>
</div>