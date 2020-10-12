<?php

namespace App\Http\Livewire\Component;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Contracts\Support\Renderable;

class AllStores extends Component
{
    use WithPagination;

    public bool $chronological = true;
    public string $field = 'name';
    public string $sortName = 'Name';

    protected $queryString = ['field', 'chronological'];

    public function sort($field, $name)
    {
        $this->field = $field;
        $this->sortName = $name;
        $this->chronological = true;
    }

    public function direction(): void
    {
        $this->chronological = !$this->chronological;
    }

    public function render(): Renderable
    {
        return view('livewire.component.all-stores', [
            'stores' => Store::query()->orderBy($this->field, $this->chronological === true ? 'ASC' : 'DESC')->paginate(12),
        ]);
    }
}
