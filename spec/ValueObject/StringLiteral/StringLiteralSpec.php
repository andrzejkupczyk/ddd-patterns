<?php

declare(strict_types=1);

namespace spec\WebGarden\Model\ValueObject\StringLiteral;

use PhpSpec\ObjectBehavior;
use WebGarden\Model\Assert\AssertionFailed;
use WebGarden\Model\ValueObject\StringLiteral\StringLiteral;

class StringLiteralSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('foobar');

        $this->shouldHaveType(StringLiteral::class);
        $this->shouldNotThrow(AssertionFailed::class)->duringInstantiation();
    }

    function it_checks_whether_value_is_empty()
    {
        $this->beConstructedWith('');

        $this->isEmpty()->shouldReturn(true);
    }
}
