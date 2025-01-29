<?php

namespace Esign\DynamateSignature\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

class DynamateSignatureTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_can_render_the_default_signature(): void
    {
        $this->expectNotToPerformAssertions();
        $this->blade('<x-dynamate-signature::default />');
    }
}
