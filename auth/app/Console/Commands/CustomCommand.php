<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $name = $this->ask("What is your Name ? ");
        // $password = $this->secret('What is the password?');
        // $this->info($name);
        // $this->info($password);
        // if ($this->confirm('Do you wish to continue?')) {
        //     //
        // }

        // $name = $this->choice(
        //     'What is your name?',
        //     ['Shahin', 'Arif'],

        // );
        // $this->info($name);
        // $this->error('Something went wrong!');
        // $this->newLine(3);
        // $this->line('Display this on the screen');
        $this->info('Command Hitted!');
        $users = User::whereNull('email_verified_at')->get();
        foreach ($users as $user) {
            $user->delete();
        }
    }
}
