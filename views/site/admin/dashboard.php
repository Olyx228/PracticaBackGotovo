<style>
    .admin-container {
        max-width: 1200px;
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

    .admin-header {
        text-align: center;
        margin-bottom: 40px;
        padding: 40px 0;
        background: linear-gradient(135deg, rgba(30, 41, 59, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%);
        border-radius: var(--border-radius);
        color: var(--text-primary);
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .admin-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--primary-main), var(--accent-color));
    }

    .admin-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        background: linear-gradient(to right, var(--text-primary), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
        z-index: 1;
    }

    .admin-header p {
        color: var(--text-muted);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .card {
        background: rgba(30, 41, 59, 0.95);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 30px;
        margin-bottom: 30px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
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

    .card h2 {
        color: var(--text-primary);
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        position: relative;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card h2::before {
        content: '';
        width: 24px;
        height: 24px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230891b2'%3E%3Cpath d='M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 25px;
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
        width: 20px;
        height: 20px;
        background-repeat: no-repeat;
        background-position: center;
    }

    .form-group input[type="text"] + label::before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230891b2'%3E%3Cpath d='M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/%3E%3C/svg%3E");
    }

    .form-group input[type="password"] + label::before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230891b2'%3E%3Cpath d='M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z'/%3E%3C/svg%3E");
    }

    .form-group select + label::before {
        content: '';
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230891b2'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z'/%3E%3C/svg%3E");
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 14px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        border-radius: var(--border-radius-sm);
        font-size: 1rem;
        transition: var(--transition);
        background: rgba(15, 23, 42, 0.7);
        color: var(--text-primary);
        font-family: inherit;
    }

    .form-group input::placeholder {
        color: var(--text-muted);
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: var(--primary-light);
        outline: none;
        background: rgba(15, 23, 42, 0.9);
        box-shadow: 0 0 0 3px rgba(8, 145, 178, 0.1);
    }

    .error {
        color: var(--accent-color);
        font-size: 0.9rem;
        margin-top: 8px;
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 500;
    }

    .error::before {
        content: '';
        width: 16px;
        height: 16px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%237c3aed'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .btn {
        padding: 14px 28px;
        border-radius: var(--border-radius-sm);
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        border: none;
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
        border: 1px solid rgba(8, 145, 178, 0.3);
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-main));
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .btn-primary::before {
        content: '';
        width: 20px;
        height: 20px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Cpath d='M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .alert {
        padding: 20px;
        border-radius: var(--border-radius-sm);
        margin-bottom: 25px;
        font-weight: 500;
        border: 1px solid transparent;
        animation: slideIn 0.3s ease-out;
        display: flex;
        align-items: center;
        gap: 12px;
        backdrop-filter: blur(10px);
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

    .alert-success {
        background: rgba(34, 197, 94, 0.1);
        color: #86efac;
        border: 1px solid rgba(34, 197, 94, 0.3);
    }

    .alert-success::before {
        content: '';
        width: 20px;
        height: 20px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2286efac'%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.1);
        color: #fca5a5;
        border: 1px solid rgba(239, 68, 68, 0.3);
    }

    .alert-danger::before {
        content: '';
        width: 20px;
        height: 20px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23fca5a5'%3E%3Cpath d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .user-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 20px;
        border-radius: var(--border-radius-sm);
        overflow: hidden;
    }

    .user-table th {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-main));
        color: var(--text-primary);
        padding: 18px;
        text-align: left;
        font-weight: 600;
        font-size: 0.95rem;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        position: relative;
    }

    .user-table th::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(to right, transparent, var(--accent-color), transparent);
    }

    .user-table td {
        padding: 18px;
        border-bottom: 1px solid rgba(71, 85, 105, 0.3);
        background: rgba(30, 41, 59, 0.7);
        color: var(--text-primary);
        transition: var(--transition);
    }

    .user-table tr {
        transition: var(--transition);
    }

    .user-table tr:hover td {
        background: rgba(8, 145, 178, 0.1);
        transform: scale(1.01);
    }

    .user-table td:first-child {
        color: var(--text-muted);
        font-family: 'Monaco', 'Courier New', monospace;
        font-size: 0.9rem;
    }

    .role-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .role-admin {
        background: linear-gradient(135deg, var(--accent-color), #6d28d9);
        color: white;
    }

    .role-user {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: white;
    }

    .search-container {
        background: rgba(30, 41, 59, 0.95);
        border-radius: var(--border-radius);
        padding: 30px;
        margin-bottom: 30px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .search-container::before {
        content: '';
        position: absolute;
        top: 30px;
        right: 30px;
        width: 32px;
        height: 32px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230891b2' opacity='0.1'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .search-form {
        display: flex;
        gap: 15px;
        align-items: flex-end;
    }

    .search-input-group {
        flex: 1;
    }

    .search-input-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .search-input-group label::before {
        content: '';
        width: 20px;
        height: 20px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230891b2'%3E%3Cpath d='M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .search-input {
        width: 100%;
        padding: 14px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        border-radius: var(--border-radius-sm);
        font-size: 1rem;
        background: rgba(15, 23, 42, 0.7);
        color: var(--text-primary);
        transition: var(--transition);
        font-family: inherit;
    }

    .search-input::placeholder {
        color: var(--text-muted);
    }

    .search-input:focus {
        border-color: var(--primary-light);
        outline: none;
        background: rgba(15, 23, 42, 0.9);
        box-shadow: 0 0 0 3px rgba(8, 145, 178, 0.1);
    }

    .search-btn {
        padding: 14px 28px;
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: var(--text-primary);
        border: 1px solid rgba(8, 145, 178, 0.3);
        border-radius: var(--border-radius-sm);
        cursor: pointer;
        font-weight: 600;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .search-btn::before {
        content: '';
        width: 20px;
        height: 20px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .search-btn:hover {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-main));
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .reset-btn {
        padding: 14px 28px;
        background: rgba(71, 85, 105, 0.3);
        color: var(--text-secondary);
        border: 1px solid rgba(71, 85, 105, 0.5);
        border-radius: var(--border-radius-sm);
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .reset-btn::before {
        content: '';
        width: 20px;
        height: 20px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cbd5e1'%3E%3Cpath d='M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    .reset-btn:hover {
        background: rgba(71, 85, 105, 0.5);
        color: var(--text-primary);
        transform: translateY(-2px);
    }

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-muted);
    }

    .empty-state::before {
        content: '';
        width: 48px;
        height: 48px;
        margin: 0 auto 20px;
        display: block;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2394a3b8' opacity='0.5'%3E%3Cpath d='M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
    }

    @media (max-width: 768px) {
        .admin-container {
            padding: 15px;
        }

        .admin-header {
            padding: 30px 0;
        }

        .admin-header h1 {
            font-size: 2rem;
        }

        .search-form {
            flex-direction: column;
            gap: 15px;
        }

        .search-btn,
        .reset-btn {
            width: 100%;
            justify-content: center;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .user-table {
            display: block;
            overflow-x: auto;
        }

        .card {
            padding: 20px;
        }
    }

    @media (max-width: 480px) {
        .admin-header {
            padding: 20px 0;
        }

        .admin-header h1 {
            font-size: 1.75rem;
        }

        .card h2 {
            font-size: 1.3rem;
        }

        .btn {
            padding: 12px 20px;
            width: 100%;
        }
    }
</style>

<div class="admin-container">
    <div class="admin-header">
        <h1>Панель администратора</h1>
        <p>Управление пользователями и настройками системы</p>
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

            <div class="form-grid">
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
        <?php if (empty($users)): ?>
            <div class="empty-state">
                Пользователи не найдены
            </div>
        <?php else: ?>
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
                        <td>#<?= $user->id_user ?></td>
                        <td><?= htmlspecialchars($user->login) ?></td>
                        <td>
                            <span class="role-badge <?= $user->id_role == 1 ? 'role-admin' : 'role-user' ?>">
                                <?= $user->id_role == 1 ? 'Администратор' : 'Пользователь' ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>