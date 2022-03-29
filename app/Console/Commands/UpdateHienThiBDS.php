<?php

namespace App\Console\Commands;

use App\models\BatDongSan;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class UpdateHienThiBDS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'HienThiBDS:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $now=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
       
        $bds = BatDongSan::where('NgayKetThuc', '<=', $now)->where('HienThiBDS',1)->update(['HienThiBDS' => 2]);
        
        $this->info('status:update Command Run successfully!');
    }
}
