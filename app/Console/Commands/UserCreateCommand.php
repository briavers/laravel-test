<?php

namespace App\Console\Commands;

use App\Actions\CreateUserAction;
use App\Exceptions\InvalidUserCreateException;
use App\Models\User;
use Illuminate\Console\Command;

class UserCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user and saves it to the database';

    private CreateUserAction $createUserAction;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CreateUserAction $createUserAction)
    {
        parent::__construct();

        $this->createUserAction = $createUserAction;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What is your full name?');

        if (empty($name)) {
            throw new InvalidUserCreateException('Name is required');
        }

        $email = $this->ask('What is your email?');

        if (empty($email)) {
            throw new InvalidUserCreateException('Email is required');
        }

        $password = $this->secret('What is your password?');

        if (empty($password)) {
            throw new InvalidUserCreateException('Password is required');
        }

        User::withoutEvents(
            function () use ($name, $email, $password) {
                $this->createUserAction->execute($name, $email, $password);
            }
        );

        $this->info('User successfully created!');
    }
}
