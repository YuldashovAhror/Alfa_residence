<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Words extends Component
{
    public $key, $ru, $uz, $words, $id_edit=0, $key_edit, $key_ru, $key_uz;

    public function render()
    {
        $this->words = \App\Models\Words::orderBy('id')->get();
        return view('livewire.words');
    }

    public function save()
    {
        \App\Models\Words::create([
            'key'=>$this->key,
            'ru'=>$this->ru,
            'uz'=>$this->uz,
        ]);
        $this->key = '';
        $this->ru = '';
        $this->uz = '';
    }

    public function edit($id)
    {
        $this->id_edit = $id;
        $this->key_edit = \App\Models\Words::find($id)->key;
        $this->key_ru = \App\Models\Words::find($id)->ru;
        $this->key_uz = \App\Models\Words::find($id)->uz;
    }

    public function update($id)
    {
        \App\Models\Words::find($id)->update([
            'key' => $this->key_edit,
            'ru' => $this->key_ru,
            'uz' => $this->key_uz,
        ]);
        $this->id_edit = 0;
    }
}
