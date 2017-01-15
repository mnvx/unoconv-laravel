# Laravel Unoconv for Laravel 5

Simple way for documents conversion into various formats.

For example: html -> docx, html -> pdf, docx -> html and many more.

## Usage

Using service provider:
```
use Illuminate\Support\Facades\App;
use Mnvx\Unoconv\ConverterInterface;
use Mnvx\Unoconv\Format;
use Mnvx\Unoconv\UnoconvParameters;

$converter = App::make(ConverterInterface::class);
$parameters = (new UnoconvParameters())
    ->setInputStream('test text')
    ->setOutputFormat(Format::FORMAT_TEXT_HTML);
echo $converter->convert($parameters);
```

Using facade:
```
use Mnvx\Unoconv\Format;
use Mnvx\Unoconv\UnoconvParameters;
use Mnvx\UnoconvLaravel\Facades\Converter;

$parameters = (new UnoconvParameters())
    ->setInputStream('test text')
    ->setOutputFormat(Format::FORMAT_TEXT_HTML);
echo Converter::convert($parameters);
```
## Installation

```
composer require mnvx/unoconv-laravel:dev-master
```

More about [PHP wrapper over Unoconv](https://github.com/mnvx/unoconv)