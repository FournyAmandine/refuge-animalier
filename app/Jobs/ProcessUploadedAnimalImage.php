<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
class ProcessUploadedAnimalImage implements ShouldQueue
{
    use Queueable;


    /**
     * Create a new job instance.
     */
    public function __construct(
        public $full_path_to_original,
        public $new_original_file_name
    ){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $image = Image::read(
            Storage::get($this->full_path_to_original)
        );

        $sizes = config('animals.sizes');
        $jpeg_compression = config('animals.jpeg_compression');
        $path_pattern = config('animals.path_pattern');

        foreach ($sizes as $size){
            $variant = clone $image;
            $variant->scale($size['width']);

            $variant_path = sprintf($path_pattern, $size['width'], $size['height']);

            Storage::put(
                $variant_path.'/'.$this->new_original_file_name,
                $variant->encodeByExtension('jpg', $jpeg_compression)
            );
        }
    }
}
