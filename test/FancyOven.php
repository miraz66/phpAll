<?php

namespace App;

class FancyOven {

    public function __construct(private ToasterPro $toaster) {}
    public function fry() {}
    public function toast() {
     return $this->toaster->toast();
    }
    public function toastBagel() {
        return $this->toaster->toastBagel();
    }
}