<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'generate:admin';

    /**
     * The console command description.
     */
    protected $description = 'Создает пользователя-администратора в системе';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $password = 'root';
        $email = 'admin@admin.com';


        User::factory()->create([
            'name' => 'Админ',
            'surname' => 'Админ',
            'patronymic' => 'Админов',
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 1,
        ]);

        $this->info('Администратор успешно создан!
Пароль: ' . $password . '
Email: ' . $email);
    }
}
