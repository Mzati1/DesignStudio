<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ElevateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:elevate-user {--email=} {--search=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Elevate an existing user to admin role';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🔍 User Role Elevation Tool');
        $this->newLine();

        // Get search term
        $searchTerm = $this->option('email') ?: $this->option('search') ?: $this->ask('Enter email or part of email to search');

        if (empty($searchTerm)) {
            $this->error('Search term cannot be empty.');
            return Command::FAILURE;
        }

        // Search for users
        $users = User::where('email', 'LIKE', "%{$searchTerm}%")
                    ->orderBy('email')
                    ->get();

        if ($users->isEmpty()) {
            $this->warn("No users found matching: {$searchTerm}");
            return Command::SUCCESS;
        }

        // Display found users
        $this->info("Found {$users->count()} user(s):");
        $this->newLine();

        // Prepare table data
        $tableData = [];
        $userChoices = [];
        
        foreach ($users as $index => $user) {
            $roleStatus = $user->role === 'admin' ? '👑 Admin' : '👤 User';
            $tableData[] = [
                $index + 1,
                $user->name,
                $user->email,
                $roleStatus,
                $user->created_at->format('Y-m-d H:i'),
            ];
            $userChoices[$index + 1] = $user;
        }

        $this->table(
            ['#', 'Name', 'Email', 'Current Role', 'Created At'],
            $tableData
        );

        // If only one user found, ask if they want to proceed with that user
        if ($users->count() === 1) {
            $selectedUser = $users->first();
        } else {
            // Let user select from multiple results
            $choice = $this->ask("Enter the number of the user to elevate (1-{$users->count()}) or 'q' to quit");
            
            if (strtolower($choice) === 'q') {
                $this->info('Operation cancelled.');
                return Command::SUCCESS;
            }

            if (!isset($userChoices[$choice])) {
                $this->error('Invalid selection.');
                return Command::FAILURE;
            }

            $selectedUser = $userChoices[$choice];
        }

        // Check if user is already admin
        if ($selectedUser->role === 'admin') {
            $this->warn("User '{$selectedUser->email}' is already an admin!");
            return Command::SUCCESS;
        }

        // Show selected user details
        $this->newLine();
        $this->info('Selected User:');
        $this->table(
            ['Field', 'Value'],
            [
                ['Name', $selectedUser->name],
                ['Email', $selectedUser->email],
                ['Current Role', $selectedUser->role],
                ['ID', $selectedUser->id],
                ['Created', $selectedUser->created_at->format('Y-m-d H:i:s')],
            ]
        );

        // Confirmation
        $this->newLine();
        if (!$this->confirm("Are you sure you want to elevate '{$selectedUser->email}' to admin role?")) {
            $this->info('Operation cancelled.');
            return Command::SUCCESS;
        }

        // Double confirmation for safety
        if (!$this->confirm('This will give the user full admin privileges. Continue?', false)) {
            $this->info('Operation cancelled.');
            return Command::SUCCESS;
        }

        try {
            // Update user role
            $selectedUser->role = 'admin';
            $selectedUser->save();

            $this->newLine();
            $this->info("✅ Successfully elevated '{$selectedUser->email}' to admin role!");
            
            // Show updated user info
            $this->table(
                ['Field', 'Before', 'After'],
                [
                    ['Role', '👤 user', '👑 admin'],
                    ['Updated At', '-', now()->format('Y-m-d H:i:s')],
                ]
            );

            return Command::SUCCESS;

        } catch (\Exception $e) {
            $this->error('Failed to elevate user: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}