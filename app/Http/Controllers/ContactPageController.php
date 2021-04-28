<?php


namespace App\Http\Controllers;


use Inertia\Response;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactMessageNotification;

class ContactPageController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function __invoke(): Response
    {
        return inertia('Contact');
    }

    /**
     * @param \App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        Notification::route('mail', config('services.admin.email'))
            ->notify(new ContactMessageNotification($request->validated()));
        return back()->with('success');
    }
}
