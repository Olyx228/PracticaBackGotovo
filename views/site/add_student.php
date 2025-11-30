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
        gap: 15px;
        margin-bottom: 25px;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        min-width: 180px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
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
        <h1 class="page-title">Добавление нового студента</h1>
    </div>

    <div class="section">
        <!-- Сообщения об ошибках -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $fieldErrors): ?>
                    <?php foreach ($fieldErrors as $error): ?>
                        <p><?= htmlspecialchars($error) ?></p>
                    <?php endforeach; ?>
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
        <form method="post">
            <input type="hidden" name="create" value="1">

            <div class="form-row">
                <div class="form-group">
                    <label>Фамилия</label>
                    <input type="text" name="surname" class="form-control" required
                           value="<?= htmlspecialchars($request->surname ?? '') ?>"
                           placeholder="Иванов">
                </div>

                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" name="name" class="form-control" required
                           value="<?= htmlspecialchars($request->name ?? '') ?>"
                           placeholder="Иван">
                </div>

                <div class="form-group">
                    <label>Отчество</label>
                    <input type="text" name="patronym" class="form-control"
                           value="<?= htmlspecialchars($request->patronym ?? '') ?>"
                           placeholder="Иванович">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text" name="address" class="form-control" required
                           value="<?= htmlspecialchars($request->address ?? '') ?>"
                           placeholder="г. Москва, ул. Примерная, д. 1">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Дата рождения</label>
                    <input type="date" name="date_birth" class="form-control" required
                           value="<?= htmlspecialchars($request->date_birth ?? '') ?>">
                </div>

                <div class="form-group">
                    <label>Пол</label>
                    <select name="id_gender" class="form-control" required>
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
                    <label>Группа</label>
                    <select name="id_group" class="form-control" required>
                        <option value="">Выберите группу</option>
                        <?php foreach ($groups as $group): ?>
                            <option value="<?= $group->id_group ?>"
                                <?= ($request->id_group ?? '') == $group->id_group ? 'selected' : '' ?>>
                                <?= htmlspecialchars($group->name) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Добавить студента</button>
                <a href="/pop-it-mvc/staff" class="btn">Отмена</a>
            </div>
        </form>
    </div>
</div>