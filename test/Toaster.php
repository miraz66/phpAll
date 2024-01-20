<?php

namespace App;

class Toaster {
    protected array $slices = [];
    protected int $sizes;

    public function __construct() { 
        $this->slices = [];
        $this->sizes = 2;
    }

    public function addSlice(string $slice): void {
        if(count($this->slices) < $this->sizes) {
            $this->slices[] = $slice;
        }
    }

    public function toast() {
        foreach ($this->slices  as $key => $slice) {
            echo ($key + 1) ." Toasting " . $slice  . " Hello" . "\n";
        }
    }
}