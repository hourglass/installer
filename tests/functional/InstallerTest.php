<?php

use Hourglass\Addon\AddonRepository;
use Hourglass\Foundation\Testing\AddonTestCase;
use Hourglass\Installer\Installer;

class InstallerTest extends AddonTestCase
{
    public function test_it_can_be_enabled()
    {
        $repository = $this->app->make(AddonRepository::class);

        $this->assertTrue($repository->isEnabled(Installer::class));
    }
}