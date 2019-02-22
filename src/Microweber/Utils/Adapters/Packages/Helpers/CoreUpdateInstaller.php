<?php

namespace Microweber\Utils\Adapters\Packages\Helpers;


use Composer\Package\PackageInterface;


class CoreUpdateInstaller extends BaseInstaller
{


    protected $folder_base = './';
    protected $supports = 'microweber-core-update';


    public function getInstallPath(PackageInterface $package)
    {
        return parent::getInstallPath($package);
    }


    public function supports($packageType)
    {
        return $this->supports === $packageType;
    }
}