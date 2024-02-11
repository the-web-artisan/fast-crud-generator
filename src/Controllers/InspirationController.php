<?php
namespace Fhsinchy\Inspire\Controllers;

use Fhsinchy\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
    }
}
