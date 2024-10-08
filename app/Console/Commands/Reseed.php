<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Reseed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'image:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reseeds the image folders';

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
     * @return int
     */
    public function handle()
    {
        File::copy( storage_path('app/public/pictures-seed/img1.jpg'), storage_path('app/public/pictures/img1.jpg'));
        File::copy(storage_path('app/public/pictures-seed/img2.jpg'), storage_path('app/public/pictures/img2.jpg'));
        File::copy(storage_path('app/public/pictures-seed/img3.jpg'), storage_path('app/public/pictures/img3.jpg'));
        File::copy(storage_path('app/public/pictures-seed/jana.jpg'), storage_path('app/public/pictures/jana.jpg'));
        File::copy(storage_path('app/public/pictures-seed/lora.jpg'), storage_path('app/public/pictures/lora.jpg'));
        File::copy(storage_path('app/public/pictures-seed/mike.jpg'), storage_path('app/public/pictures/mike.jpg'));
    }
}
