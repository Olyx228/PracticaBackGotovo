<?php

namespace Validation;

use Model\Genders;
use Model\StudentGroups;

class StudentValidator
{
    protected array $errors = [];

    public function validate(array $data): array
    {
        $this->errors = [];

        // Проверка обязательных полей
        $required = [
            'surname' => 'Фамилия обязательна для заполнения',
            'name' => 'Имя обязательно для заполнения',
            'date_birth' => 'Дата рождения обязательна для заполнения',
            'id_gender' => 'Пол обязателен для выбора',
            'id_group' => 'Группа обязательна для выбора',
            'address' => 'Адрес обязателен для заполнения'
        ];

        foreach ($required as $field => $message) {
            if (empty($data[$field])) {
                $this->errors[$field][] = $message;
            }
        }

        // Проверка существования пола
        if (!empty($data['id_gender']) && !Genders::find($data['id_gender'])) {
            $this->errors['id_gender'][] = 'Выбранный пол не существует';
        }

        // Проверка существования группы
        if (!empty($data['id_group']) && !StudentGroups::find($data['id_group'])) {
            $this->errors['id_group'][] = 'Выбранная группа не существует';
        }

        // Проверка даты рождения
        if (!empty($data['date_birth'])) {
            $birthYear = (int) date('Y', strtotime($data['date_birth']));
            if ($birthYear > 2009) {
                $this->errors['date_birth'][] = 'Студент должен быть старше 14 лет';
            }
        }

        return $this->errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}