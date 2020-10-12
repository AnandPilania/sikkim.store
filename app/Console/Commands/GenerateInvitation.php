<?php

namespace App\Console\Commands;

use App\Models\Invitation;
use App\Models\Store;
use App\Notifications\InvitationNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class GenerateInvitation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:invite';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @param Invitation $invitation
     * @return int
     */
    public function handle(Invitation $invitation)
    {
        $email = $this->ask('Enter Email Address');

        if (Invitation::query()->where('email', $email)->count()) {
            $this->info('Invitation already sent the provided email address.');
            return 0;
        }

        if (Store::query()->where('email', $email)->count()) {
            $this->info('Email address already registered');
            return 0;
        }

        tap($invitation->create([
            'code' => strtoupper(Str::random(10)),
            'email' => $email,
        ]), function ($invite) {
            Notification::route('mail', $invite->email)->notify(new  InvitationNotification($invite));
        });
        $this->info('Invitation Sent');
        return 0;
    }
}
