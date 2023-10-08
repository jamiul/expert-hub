<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;

class ConvertToCamelCase extends Command
{
    protected $signature = 'convert:camelcase';

    protected $description = 'Converts all method names and variable names to camelCase';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $basePath = resource_path(); // Change this to the base path of your Laravel application

        $finder = new Finder();
        $finder->files()->in($basePath)->name('*.php');

        foreach ($finder as $file) {
            $contents = file_get_contents($file->getRealPath());

            $contents = preg_replace_callback('/function\s+(\w+)\s*\(/', function ($matches) {
                return 'function ' . Str::camel($matches[1]) . '(';
            }, $contents);

            $contents = preg_replace_callback('/\$(\w+)/', function ($matches) {
                return '$' . Str::camel($matches[1]);
            }, $contents);

            file_put_contents($file->getRealPath(), $contents);
        }

        $this->info('All method names and variable names have been converted to camelCase.');
    }
}
