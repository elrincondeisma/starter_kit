<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\info;
use function Laravel\Prompts\text;
use function Laravel\Prompts\warning;
use Illuminate\Support\Facades\File;

class AppInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install {name? : The project name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        info('Starting App installation...');
        // Run npm install
        if (! File::exists('node_modules')) {
            info('Running npm install...');
            exec('npm install');
        } else {
            warning('Node modules already exist. Skipping npm install.');
        }
        $this->setupEnvFile();
        $this->reloadEnvironment();
        $this->generateAppKey();
        $this->runMigrations();
        $this->setProjectName();
        // $this->installFilament();
        // $this->setFilamentUser();

        $this->cleanup();

        info('App installation completed successfully! ☢️');
        info('👉 Run `composer run dev` to start the local server.');
        info('Keep creating. 🫡');

    }
    private function setupEnvFile()
    {
        info('Setting up .env file...');
        if (! File::exists('.env')) {
            File::copy('.env.example', '.env');
            info('.env file created successfully.');
        } else {
            warning('.env file already exists. Skipping creation.');
        }

        // Ensure APP_ENV is set to local
        $envContent = File::get('.env');
        if (! preg_match('/^APP_ENV=/', $envContent)) {
            File::append('.env', "\nAPP_ENV=local");
            info('APP_ENV set to local.');
        } else {
            $envContent = preg_replace('/^APP_ENV=(.*)$/m', 'APP_ENV=local', $envContent);
            File::put('.env', $envContent);
            info('APP_ENV updated to local.');
        }
    }

    private function generateAppKey()
    {
        info('Checking application key...');
        if (empty(env('APP_KEY'))) {
            $this->call('key:generate');
        } else {
            warning('Application key already exists. Skipping.');
        }
    }

    private function runMigrations()
    {
        if (confirm('Do you want to run database migrations?', true)) {
            info('Running database migrations...');
            $this->call('migrate:fresh', [
                '--force' => true, // This will bypass the production check
            ]);
        }
    }
    private function setFilamentUser(){
        info('Setting up Filament user...');
        $this->call('make:filament-user');
    }

    private function setProjectName()
    {
        $defaultName = $this->argument('name') ?: basename(getcwd());
        $name = text(
            label: 'What is the name of your project?',
            placeholder: $defaultName,
            default: $defaultName,
            required: true
        );

        $this->updateEnv('APP_NAME', $name);

        $defaultUrl = 'http://localhost:8000';
        $url = text(
            label: 'What is the URL of your project?',
            placeholder: $defaultUrl,
            default: $defaultUrl,
            required: true
        );

        $this->updateEnv('APP_URL', $url);
    }

    private function updateEnv($key, $value)
    {
        $path = base_path('.env');

        if (File::exists($path)) {
            file_put_contents($path, preg_replace(
                "/^{$key}=.*/m",
                "{$key}=\"{$value}\"",
                file_get_contents($path)
            ));
        }
    }

    private function cleanup()
    {
        if (confirm('Do you want to remove the installation files?', false)) {
            info('Removing installation files...');

            // Remove the entire Commands folder
            // File::deleteDirectory(app_path('Console'));

            // Remove the install.sh script
            File::delete(base_path('install.sh'));

            info('Installation files removed.');
        } else {
            info('Installation files kept. You can manually remove them later if needed.');
        }
    }

    private function reloadEnvironment()
    {
        $app = app();
        $app->bootstrapWith([
            \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables::class,
        ]);
    }

}
