<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SendWelcomeEmail as SendWelcomeEmailService;

class SendWelcomeEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pdavila:SendWelcomeEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var SendWelcomeEmail
     */
    public $email;

    /**
     * Create a new command instance.
     *
     * @param SendWelcomeEmail $email
     */
    public function __construct(SendWelcomeEmailService $email)
    {
        parent::__construct();
        $this->email = $email;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->email->send();
    }
}
