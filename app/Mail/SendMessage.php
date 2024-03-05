<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject;
    public $pesan;
    public function __construct($subject, $pesan)
    {
        $this->subject = $subject;
        $this->pesan = $pesan;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $image = '<img src="http://203.30.236.63:8980/assets/img/logo.png" alt="Logo SMK N 2 Magelang" srcset="">';
        return new Content(
            view: 'view.sendmessage',
            with: [
                'data' => $this->html($image .  $this->pesan . '<p style="font-size: smaller; color: gray">Thank you for using our application!. Anda menerima email ini sebagai pemberitahuan atas informasi penting yang mendesak</p><p style="font-size: smaller; color: gray">Copyright © 2024. All rights reserved.</p>'),
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
