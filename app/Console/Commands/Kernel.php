<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Aquí se registran los comandos personalizados
        Commands\DispatchTestJobCommand::class, // Añade aquí tu nuevo comando
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Aquí se pueden definir tareas programadas para ejecutarse periódicamente
        // Ejemplo: Ejecutar un comando cada día a la medianoche
        // $schedule->command('inspire')->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
