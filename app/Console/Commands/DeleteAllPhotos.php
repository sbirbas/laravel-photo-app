<?php

namespace App\Console\Commands;

use App\Models\Photo;
use Illuminate\Console\Command;

class DeleteAllPhotos extends Command
{
    protected $signature = 'photos:delete-all';
    protected $description = 'Delete all photos from the database';

    public function handle()
    {
        $this->info('Deleting all photos...');

        if ($this->confirm('Are you sure you want to delete all photos?')) {
            Photo::query()->delete();
            $this->info('All photos have been deleted!');
        } else {
            $this->info('Operation cancelled.');
        }
    }
}

