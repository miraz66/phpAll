<?php
namespace App;
class ToasterPro extends Toaster {
    public int $sizes = 4;
    public function toastBagel() {
        foreach ($this->slices as $key => $slice) {
            echo ($key + 1) ." Toasting Pro " . $slice . "\n";
        }
    }

    
}