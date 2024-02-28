<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessUser implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data) {
       $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        Log::info('User registered: ' . json_encode($this->data));
//        echo "Job handled";//$this->data['email'];
    }
}
