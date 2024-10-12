<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Software Engineer',
                'salary' => '$90,000'
            ],
            [
                'id' => 3,
                'title' => 'Ui/Ux Designer',
                'salary' => '$70,000'
            ]
        ];
    }

    public static function find($id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
