<style>
    .admin-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .admin-header {
        text-align: center;
        margin-bottom: 40px;
        padding: 30px 0;
        background: var(--surface);
        border-radius: var(--border-radius);
        color: var(--text-primary);
        border: 1px solid #334155;
    }

    .admin-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .card {
        background: var(--surface);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 30px;
        margin-bottom: 30px;
        border: 1px solid #334155;
    }

    .card h2 {
        color: var(--text-primary);
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 1px solid #334155;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 500;
        color: var(--text-secondary);
        font-size: 14px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #334155;
        border-radius: var(--border-radius);
        font-size: 14px;
        transition: all 0.3s ease;
        background: var(--background);
        color: var(--text-primary);
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: var(--primary-main);
        outline: none;
        background: var(--surface);
    }

    .error {
        color: var(--accent-color);
        font-size: 14px;
        margin-top: 8px;
        display: block;
        font-weight: 500;
    }

    .btn {
        padding: 12px 20px;
        border-radius: var(--border-radius);
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        border: none;
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

    .alert {
        padding: 15px;
        border-radius: var(--border-radius);
        margin-bottom: 25px;
        font-weight: 500;
        border: 1px solid transparent;
    }

    .alert-success {
        background: #2d5a2d;
        color: var(--text-primary);
        border: 1px solid #48bb78;
    }

    .alert-danger {
        background: var(--accent-color);
        color: var(--text-primary);
        border-color: var(--accent-hover);
    }

    .user-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 20px;
    }

    .user-table th {
        background: var(--primary-dark);
        color: var(--text-primary);
        padding: 15px;
        text-align: left;
        font-weight: 600;
        font-size: 14px;
        border-bottom: 1px solid #334155;
    }

    .user-table td {
        padding: 15px;
        border-bottom: 1px solid #334155;
        background: var(--surface);
        color: var(--text-primary);
    }

    .user-table tr:hover td {
        background: var(--primary-dark);
    }

    .search-container {
        background: var(--surface);
        border-radius: var(--border-radius);
        padding: 25px;
        margin-bottom: 30px;
        border: 1px solid #334155;
    }

    .search-form {
        display: flex;
        gap: 15px;
        align-items: flex-end;
    }

    .search-input-group {
        flex: 1;
    }

    .search-input {
        width: 100%;
        padding: 12px;
        border: 1px solid #334155;
        border-radius: var(--border-radius);
        font-size: 14px;
        background: var(--background);
        color: var(--text-primary);
        transition: all 0.3s ease;
    }

    .search-input:focus {
        border-color: var(--primary-main);
        outline: none;
        background: var(--surface);
    }

    .search-btn {
        padding: 12px 20px;
        background: var(--primary-main);
        color: var(--text-primary);
        border: 1px solid var(--primary-light);
        border-radius: var(--border-radius);
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .search-btn:hover {
        background: var(--primary-light);
        transform: translateY(-2px);
    }

    .reset-btn {
        padding: 12px 20px;
        background: var(--primary-dark);
        color: var(--text-secondary);
        border: 1px solid var(--primary-main);
        border-radius: var(--border-radius);
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .reset-btn:hover {
        background: var(--primary-main);
        color: var(--text-primary);
        transform: translateY(-2px);
    }
</style>

<div class="admin-container">
    <div class="admin-header">
        <h1>Панель администратора</h1>
    </div>

    <!-- Сообщения -->
    <?php if ($success): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <!-- Форма добавления пользователя -->
    <div class="card">
        <h2>Добавить нового пользователя</h2>
        <form method="post">
            <input type="hidden" name="createUser" value="1">

            <div class="form-group">
                <label>Логин</label>
                <input type="text" name="login" required placeholder="Введите логин"
                       value="<?= isset($old['login']) ? htmlspecialchars($old['login']) : '' ?>">
                <?php if (isset($errors['login'])): ?>
                    <span class="error"><?= is_array($errors['login']) ? implode(', ', $errors['login']) : htmlspecialchars($errors['login']) ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input type="password" name="password" required placeholder="Введите пароль">
                <?php if (isset($errors['password'])): ?>
                    <span class="error"><?= is_array($errors['password']) ? implode(', ', $errors['password']) : htmlspecialchars($errors['password']) ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label>Роль</label>
                <select name="id_role" required>
                    <?php foreach ($roles as $role): ?>
                        <option value="<?= $role->id_role ?>"
                            <?= (isset($old['id_role']) && $old['id_role'] == $role->id_role) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($role->name) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($errors['id_role'])): ?>
                    <span class="error"><?= is_array($errors['id_role']) ? implode(', ', $errors['id_role']) : htmlspecialchars($errors['id_role']) ?></span>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Добавить пользователя</button>
        </form>
    </div>

    <!-- Поиск -->
    <div class="search-container">
        <form method="get" class="search-form">
            <input type="hidden" name="search" value="1">
            <div class="search-input-group">
                <label>Поиск пользователей</label>
                <input type="text" name="search" class="search-input"
                       placeholder="Введите логин пользователя или его роль..."
                       value="<?= htmlspecialchars($searchQuery ?? '') ?>">
            </div>
            <button type="submit" class="search-btn">Найти</button>
            <?php if (!empty($searchQuery)): ?>
                <a href="/pop-it-mvc/admin" class="reset-btn">Сбросить</a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Таблица пользователей -->
    <div class="card">
        <h2>Список пользователей</h2>
        <table class="user-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Логин</th>
                <th>Роль</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id_user ?></td>
                    <td><?= $user->login ?></td>
                    <td>
                        <?php
                        if($user->id_role == 1):
                            echo 'админ';
                        else:
                            echo 'пользователь';
                        endif;
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>