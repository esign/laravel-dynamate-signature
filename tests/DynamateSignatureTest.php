<?php

namespace Esign\DynamateSignature\Tests;

use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

final class DynamateSignatureTest extends TestCase
{
    use InteractsWithViews;

    #[Test]
    public function it_can_render_the_default_signature(): void
    {
        $this->expectNotToPerformAssertions();
        $this->blade('<x-dynamate-signature::default />');
    }
}
