<?php

use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {
    public ?string $current = null;
    public string $key = '';
    public string $model_id = '';

    #[On('open_modal')]
    public function open(array $payload):void
    {
        $this->current = $payload['form'];
        $this->model_id = $payload['model_id'];
    }

    #[On('close_modal')]
    public function close()
    {
        $this->current = null;
    }
};
?>

<div>
    @if(!is_null($current))
        <livewire:is :component="$current" :key="$key" :model_id="$model_id"/>
    @endif
</div>
