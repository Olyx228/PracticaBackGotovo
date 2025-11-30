<?php

namespace App\Validation;

class Validator
{
    protected array $errors = [];
    protected array $rules = [];

    public function validate(array $data): array
    {
        $this->errors = [];

        foreach ($this->rules as $field => $fieldRules) {
            $value = $data[$field] ?? null;

            foreach ($fieldRules as $rule) {
                $this->applyRule($field, $rule, $value, $data);
            }
        }

        return $this->errors;
    }

    protected function applyRule(string $field, string $rule, $value, array $data): void
    {
        if (strpos($rule, ':') !== false) {
            [$ruleName, $parameter] = explode(':', $rule, 2);
            $this->applyParameterizedRule($field, $ruleName, $value, $parameter);
        } else {
            $this->applySimpleRule($field, $rule, $value);
        }
    }

    protected function applySimpleRule(string $field, string $rule, $value): void
    {
        switch ($rule) {
            case 'required':
                if (empty($value)) {
                    $this->addError($field, "Поле {$field} обязательно для заполнения");
                }
                break;
        }
    }

    protected function applyParameterizedRule(string $field, string $rule, $value, string $parameter): void
    {
        // Будет переопределен в дочерних классах
    }

    protected function addError(string $field, string $message): void
    {
        $this->errors[$field][] = $message;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}