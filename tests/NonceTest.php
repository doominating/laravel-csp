<?php

namespace Spatie\Csp\Tests;

class NonceTest extends TestCase
{
    /** @test */
    public function calling_the_nonce_function_will_generate_the_same_result()
    {
        $nonce = cspNonce();

        $this->assertTrue(strlen($nonce) > 50);

        foreach(range(1,5) as $i) {
            $this->assertEquals($nonce, cspNonce());
        }
    }
}