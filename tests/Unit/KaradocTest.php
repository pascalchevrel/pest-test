<?php

use Pascal\Karadoc as k;

it('is hungry' , function () {
    $this->assertEquals("J'ai faim", k::affirmation('bonjour'));
});

it('is talking' , function () {
    $this->assertEquals("C'est pas faux", k::affirmation('oui'));
});
