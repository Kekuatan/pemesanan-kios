<?php

namespace App\Traits\Livewire;

trait AlertifyTrait
{
    public function alertifyError($type, $message){
        $this->dispatchBrowserEvent('alert-' . $type, ['message' => $message]);
    }

    public function showErrorByAlertify(){
        if (count($this->getErrorBag()->all())) {
            foreach ($this->getErrorBag()->all() as $error) {
                $this->alertifyError('error', $error);
            }
            $this->resetErrorBag();
        }
    }
}
