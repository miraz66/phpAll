<?php

namespace App;

class Toaster {
    public array $slices = [];
    public int $sizes = 2;

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