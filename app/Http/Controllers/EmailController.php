<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CreateEmailRequest;
use App\Services\EmailService;

class EmailController extends Controller
{
    protected $emailService;

    /**
     * Instantiate a new controller instance.
     *
     * @param  mixed $emailService
     * @return void
     */
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Http\Requests\CreateEmailRequest $request
     * @return void
     */
    public function create() : View
    {
        return view('feedback_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateEmailRequest $request
     * @return void
     */
    public function store(CreateEmailRequest $request) : RedirectResponse
    {
        $data = $request->validated();
        $email = $this->emailService->store($data);
        $mail = $this->emailService->sendEmail($data);
        return back();
    }
}
