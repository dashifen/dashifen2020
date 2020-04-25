<?php

namespace Dashifen\Dashifen2020;

use Dashifen\WPHandler\Handlers\HandlerException;
use Dashifen\WPHandler\Handlers\Themes\AbstractThemeHandler;

class Theme extends AbstractThemeHandler
{
    /**
     * initialize
     *
     * Uses the addAction and addFilter methods of our parent to connect
     * the protected method of this object to the WordPress ecosystem.
     *
     * @return void
     * @throws HandlerException
     */
    public function initialize (): void
    {
        if (!$this->isInitialized()) {
            $this->addAction('wp_enqueue_scripts', 'addAssets');
        }
    }
    
    /**
     * addAssets
     *
     * Adds the script and style assets for this theme into the WordPress
     * assets queue.
     *
     * @return void
     */
    protected function addAssets (): void
    {
        $this->enqueue('assets/dashifen.js');
        $this->enqueue('assets/dashifen.css');
    }
}
