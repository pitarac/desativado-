<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SetupPostgreSQL extends Command
{
    protected $signature = 'setup:postgres';

    protected $description = 'Configuração inicial do PostgreSQL';

    public function handle()
    {
        // Commands to create database, user, grant privileges in PostgreSQL
        DB::statement('CREATE DATABASE workana');
        DB::statement("CREATE USER softExpert WITH PASSWORD 'teste'");
        DB::statement('GRANT ALL PRIVILEGES ON DATABASE workana TO softExpert');

        $this->info('PostgreSQL configured successfully!');
    }
}
