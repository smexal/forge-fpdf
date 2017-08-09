<?php

namespace Forge\Modules\ForgeFPDF;

use \Forge\Core\Classes\Fields;
use \Forge\Core\Abstracts\Module;
use \Forge\Core\App\Auth;
use \Forge\Core\Classes\Settings;



class ForgeMailchimp extends Module {
    private $settings = null;

    public function setup() {
        $this->settings = Settings::instance();
        $this->version = '1.0.0';
        $this->settings = Settings::instance();
        $this->id = "forge-fpdf";
        $this->name = i('FPDF Library', 'forge-fpdf');
        $this->description = i('FPDF library for forge.', 'forge-fpdf');
        $this->image = $this->url().'images/module-image.png';
    }

    public function start() {
        $this->settings();
    }

    private function settings() {
        if (! Auth::allowed("manage.settings", true)) {
            return;
        }

        $this->settings->registerField(
            Fields::image([
            'key' => 'forge-pdf-logo',
            'label' => i('Page Logo for PDF Files', 'forge-fpdf'),
            'hint' => i('jpg or png', 'forge-fpdf')
        ], Settings::get('forge-pdf-logo')), 'forge-pdf-logo', 'left', 'forge-fpdf');
   }  

}

?>
