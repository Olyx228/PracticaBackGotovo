<?php

namespace Controller;

use Src\Request;
use Src\View;
use Model\Students;
use Model\StudentGroups;
use Model\Genders;
use Src\Auth\Auth;
use Validation\StudentValidator; // Исправленный импорт

class StudentController
{
    public function index(Request $request): string
    {
        if (!Auth::check() || Auth::user()->id_role != 2) {
            app()->route->redirect('/login');
        }

        $students = Students::with(['student_groups', 'gender'])->get();
        return new View('staff.students.index', [
            'students' => $students,
            'groups' => StudentGroups::all(),
            'genders' => Genders::all()
        ]);
    }

    public function create(Request $request): string
    {
        if ($request->method === 'POST') {
            $requestData = $request->all();

            // Обработка необязательного поля patronym
            if (empty($requestData['patronym'])) {
                $requestData['patronym'] = null;
            }

            $validated = $this->validate($requestData);

            if ($validated['success']) {
                Students::create($requestData);
                app()->route->redirect('/students/create?success=Студент+успешно+добавлен');
                exit;
            }

            return new View('site.add_student', [
                'errors' => $validated['errors'],
                'groups' => StudentGroups::all(),
                'genders' => Genders::all(),
                'request' => $request
            ]);
        }

        return new View('site.add_student', [
            'groups' => StudentGroups::all(),
            'genders' => Genders::all()
        ]);
    }

    private function validate(array $data): array
    {
        $validator = new StudentValidator();
        $errors = $validator->validate($data);

        return [
            'success' => empty($errors),
            'errors' => $errors
        ];
    }
}