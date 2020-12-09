<?php

namespace App\Observers;

use App\Models\Preorder;

class PreorderObserver
{
    public function created(Preorder $preorder)
    {
        $preorder->sendEmailVerificationNotification();
    }

    public function updated(Preorder $preorder){}

    public function deleted(Preorder $preorder){}

    public function restored(Preorder $preorder){}

    public function forceDeleted(Preorder $preorder){}
}
