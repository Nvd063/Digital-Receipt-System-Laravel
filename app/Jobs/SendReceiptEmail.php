<?php
namespace App\Jobs;

use App\Models\Receipt;
use App\Mail\CustomerReceiptMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendReceiptEmail implements ShouldQueue
{
    use Queueable;

    public $receipt;

    public function __construct(Receipt $receipt)
    {
        $this->receipt = $receipt;
    }

    public function handle(): void
    {
        $this->receipt->load(['items.product', 'customer']);

        Mail::to($this->receipt->customer->email)
            ->send(new CustomerReceiptMail($this->receipt));
    }
}