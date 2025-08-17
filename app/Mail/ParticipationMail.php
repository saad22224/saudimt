<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ParticipationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $middleName;
    public $lastName;
    public $email;
    public $phone;
    public $country;
    public $city;
    public $passport;
    public $gender;
    public $organization;
    public $specialization;

    /**
     * Create a new message instance.
     */
    public function __construct($firstName, $middleName, $lastName, $email, $phone, $country, $city, $passport, $gender, $organization, $specialization)
    {
        $this->firstName      = $firstName;
        $this->middleName     = $middleName;
        $this->lastName       = $lastName;
        $this->email          = $email;
        $this->phone          = $phone;
        $this->country        = $country;
        $this->city           = $city;
        $this->passport       = $passport;
        $this->gender         = $gender;
        $this->organization   = $organization;
        $this->specialization = $specialization;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Participation Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ParticipationMail',
            with: [
                'firstName'      => $this->firstName,
                'middleName'     => $this->middleName,
                'lastName'       => $this->lastName,
                'email'          => $this->email,
                'phone'          => $this->phone,
                'country'        => $this->country,
                'city'           => $this->city,
                'passport'       => $this->passport,
                'gender'         => $this->gender,
                'organization'   => $this->organization,
                'specialization' => $this->specialization
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

