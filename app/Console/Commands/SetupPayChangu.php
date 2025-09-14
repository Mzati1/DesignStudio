<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupPayChangu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paychangu:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup PayChangu payment configuration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Setting up PayChangu payment configuration...');
        
        // Check if .env file exists
        $envPath = base_path('.env');
        if (!file_exists($envPath)) {
            $this->error('.env file not found. Please create one first.');
            $this->info('You can copy .env.example to .env and then run this command again.');
            return 1;
        }

        // Read current .env content
        $envContent = file_get_contents($envPath);
        
        // Check if PayChangu variables already exist
        if (strpos($envContent, 'PAYCHANGU_TEST_SECRET_KEY') !== false) {
            $this->info('PayChangu configuration already exists in .env file.');
            $this->info('Current PayChangu variables:');
            $this->line('PAYCHANGU_API_URL: ' . env('PAYCHANGU_API_URL', 'Not set'));
            $this->line('PAYCHANGU_VERIFY_TRANSACTION_URL: ' . env('PAYCHANGU_VERIFY_TRANSACTION_URL', 'Not set'));
            $this->line('PAYCHANGU_TEST_SECRET_KEY: ' . (env('PAYCHANGU_TEST_SECRET_KEY') ? 'Set' : 'Not set'));
            $this->line('PAYCHANGU_LIVE_SECRET_KEY: ' . (env('PAYCHANGU_LIVE_SECRET_KEY') ? 'Set' : 'Not set'));
            $this->line('PAYCHANGU_MODE: ' . env('PAYCHANGU_MODE', 'test'));
            return 0;
        }

        // Add PayChangu configuration
        $paychanguConfig = "\n# PayChangu Configuration\n";
        $paychanguConfig .= "PAYCHANGU_API_URL=https://api.paychangu.com/payment\n";
        $paychanguConfig .= "PAYCHANGU_VERIFY_TRANSACTION_URL=https://api.paychangu.com/verify-payment\n";
        $paychanguConfig .= "PAYCHANGU_TEST_SECRET_KEY=your-paychangu-test-secret-key-here\n";
        $paychanguConfig .= "PAYCHANGU_LIVE_SECRET_KEY=your-paychangu-live-secret-key-here\n";
        $paychanguConfig .= "PAYCHANGU_MODE=test\n";

        // Append to .env file
        file_put_contents($envPath, $envContent . $paychanguConfig);

        $this->info('PayChangu configuration added to .env file.');
        $this->warn('Please update the following variables with your actual PayChangu credentials:');
        $this->line('- PAYCHANGU_TEST_SECRET_KEY');
        $this->line('- PAYCHANGU_LIVE_SECRET_KEY');
        $this->line('- PAYCHANGU_MODE (test or live)');
        
        $this->info('After updating the .env file, run: php artisan config:clear');
        
        return 0;
    }
}