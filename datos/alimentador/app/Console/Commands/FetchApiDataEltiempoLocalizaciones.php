<?php

namespace App\Console\Commands;

use App\Http\Controllers\ZonaElTiempoController;
use App\Models\Zona_el_tiempo;
use Illuminate\Console\Command;

class FetchApiDataEltiempoLocalizaciones extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:localizaciones-euskalmet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $zonaElTiempoController = new ZonaElTiempoController();
    }
}
