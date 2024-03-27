<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LinkImages extends Command
{
    protected $signature = 'link:images';

    protected $description = 'Create a symbolic link from public/build/img to public/img';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if (file_exists(public_path('img'))) {
            return $this->error('The "public/img" directory already exists.');
        }

        $this->laravel->make('files')->link(
            public_path('build/img'), public_path('img')
        );

        $this->info('The [public/img] directory has been linked.');
    }
}