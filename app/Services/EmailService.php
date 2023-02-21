<?php

namespace App\Services;

use App\Jobs\SendEmail;
use App\Models\Email;

class EmailService
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  mixed $request
     * @return void
     */
    public function store($data) : Email
    {
        return Email::create($data);
    }

    /**
     * Send email.
     *
     * @param  mixed $data
     * @return void
     */
    public function sendEmail($data)
    {
        return dispatch(new SendEmail($data));
    }
}
