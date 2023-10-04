<?php

namespace App\Livewire;

use App\Models\Serie;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class ShowSeries extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $config = Cache::get('database_config');

        Config::set('database.connections.dynamic', $config);

        DB::purge('dynamic');
        DB::setDefaultConnection('dynamic');

        $series = Serie::where('titulo', 'LIKE', '%' . $this->search . '%')
            ->paginate(5);

        return view('livewire.show-series', compact('series'));
    }
}
