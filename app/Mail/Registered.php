<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Client;
class Registered extends Mailable
{
    use Queueable, SerializesModels;
    public $Client;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Client $Client)
    {
        $this->Client = $Client;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('imadebensotmi2015@gmail.com', 'name')
            ->subject('Bienvenue !')
            ->view('mail.registered', ['user' => auth()->user()]);
    }
}
