<?php

namespace Forge\Modules\ForgeFPDF;

class PDF {
    public $file = null;

    public function __construct() {
        require_once(MOD_ROOT."forge-fpdf/library-external/fpdf.php");
        $this->file = new \FPDF();
    }

}

?>