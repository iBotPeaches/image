<?php

namespace Intervention\Image\Tests\Drivers\Imagick\Modifiers;

use Intervention\Image\Tests\TestCase;
use Intervention\Image\Drivers\Imagick\Image;
use Intervention\Image\Drivers\Imagick\Modifiers\SharpenModifier;
use Intervention\Image\Tests\Traits\CanCreateImagickTestImage;

class SharpenModifierTest extends TestCase
{
    use CanCreateImagickTestImage;

    public function testModify(): void
    {
        $image = $this->createTestImage('trim.png');
        $this->assertEquals('60ab96', $image->pickColor(15, 14)->toHex());
        $image->modify(new SharpenModifier(10));
        $this->assertEquals('4faca6', $image->pickColor(15, 14)->toHex());
    }
}