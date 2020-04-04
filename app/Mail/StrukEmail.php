<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Http\Request;

    class StrukEmail extends Mailable
    {
        use Queueable, SerializesModels;

        public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_dari_booking)
    {
        $this->data = $data_dari_booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    
        return $this->from('rismana546@gmail.com')
                   ->view('frontend.email');
                //    ->with($this->data);
             
    }
    
}
