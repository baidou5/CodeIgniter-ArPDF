<?php

class ArPDF {

    private $content = '';
    private $pageWidth = 210;
    private $pageHeight = 297;
    private $fontFamily = 'Arial';
    private $fontSize = 12;

    public function __construct() {
        // Basic settings, if necessary.
    }

    public function setFont($fontFamily, $fontSize) {
        $this->fontFamily = $fontFamily;
        $this->fontSize = $fontSize;
    }

    public function addText($text, $x = 10, $y = 10) {
        $this->content .= "<div style='font-family: {$this->fontFamily}; font-size: {$this->fontSize}px; position: absolute; left: {$x}mm; top: {$y}mm; direction: rtl;'>$text</div>";
    }

    public function output($filename = 'document.pdf') {
        header('Content-Type: application/pdf');
        header("Content-Disposition: inline; filename=\"$filename\"");
        header('Cache-Control: private, max-age=0, must-revalidate');
        header('Pragma: public');

        echo $this->generatePDF();
        exit;
    }

    private function generatePDF() {
        return "
            <html>
            <head>
                <style>
                    @page {
                        size: {$this->pageWidth}mm {$this->pageHeight}mm;
                        margin: 0;
                    }
                    body {
                        margin: 0;
                    }
                </style>
                <link href='https://fonts.googleapis.com/css2?family=Amiri&display=swap' rel='stylesheet'>
            </head>
            <body>
                {$this->content}
            </body>
            </html>
        ";
    }
}
