<?php

/*
 * Includes the main module file.
 */
declare(strict_types=1);

// phpcs:disable PSR1.Files.SideEffects

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

class Sk_Testmodule extends Module
{
     /**
     * The module slug name.
     */
    const MODULE_NAME = 'sk_testmodule';

    /**
     * The module version.
     */
    const MODULE_VERSION = '0.0.1';

    public function __construct()
    {
        $this->name = self::MODULE_NAME;
        $this->tab = 'administration';
        $this->version = self::MODULE_VERSION;
        $this->author = 'Skaparate';
        $this->author_uri = 'https://author.uri/';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->ps_versions_compliancy = [
            'min' => '1.7.7.0',
            'max' => _PS_VERSION_,
        ];

        // Needs to be called AFTER the name is set.
        parent::__construct();
        $this->displayName = 'Skaparate test module';
        $this->description =
            'A test module showcasing how to override a Symfony route from a module.';
    }

    public function install(): bool
    {
        return parent::install();
    }

    public function uninstall(): bool
    {
        return parent::uninstall();
    }

    public function enable($force_all = false)
    {
        return parent::enable($force_all);
    }

    public function disable($force_all = false)
    {
        return parent::disable($force_all);
    }
}
