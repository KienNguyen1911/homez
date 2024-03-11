<?php

namespace App\Mail;

use App\Models\UserInfo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewUserRegistered extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        protected UserInfo $userInfo
    ) {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[T-Dolphin] New User Registered',
            from: 'info@t-dolphin.com',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $userInfo = $this->userInfo;
        $userInfo['province'] = \Kjmtrue\VietnamZone\Models\Province::find($userInfo->province_id)->name;
        $districts = \Kjmtrue\VietnamZone\Models\District::whereIn('id', $userInfo->district_ids)->get();
        $districts->pluck('name');
        $userInfo['districts'] = $districts->implode('name', ', ');

        return new Content(
            view: 'mail.user.register',
            with: [
                'userInfo' => $userInfo,
                'name' => 'T-Dolphin',
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
