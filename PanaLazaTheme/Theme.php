<?php

namespace Shopware\Themes\PanaLazaTheme;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Pana Laza Shop
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Pana Laza Shop
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    protected $css = [
        'src/css/fontawesome.min.css',
        'src/css/light.min.css',
        'src/css/brands.min.css',
        'src/css/regular.min.css',
        'src/css/solid.min.css'
    ];


    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}