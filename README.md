![ArPDF Logo](https://raw.githubusercontent.com/baidou5/CodeIgniter-ArPDF/main/arpdf.jpg)

## ArPDF - PDF Generation Library for CodeIgniter

**ArPDF** is a simple PHP library designed for **CodeIgniter** to generate PDF files with support for **Arabic** text and custom fonts.

### Features:
- Arabic language support.
- Custom font embedding.
- Easy integration with CodeIgniter.

### Installation:
Install via Composer:
```bash
composer require baidouabdellah/arpdf
```

### Usage:
```php
use ArPDF\ArPDF;

$pdf = new ArPDF();
$pdf->setFont('Amiri', 16);
$pdf->addText('مرحبا بك!', 20, 30);
$pdf->output('document.pdf');
```
## Support ? 
 

- **Abdellah Baidou**
- +212 661176711
- baidou.abd@gmail.com


### License:
[MIT License](https://opensource.org/licenses/MIT)

