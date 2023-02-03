<?php
namespace GDO\Prism;

use GDO\Core\GDO_Module;

/**
 * Include prism syntax highlighter.
 * @see https://prismjs.com/
 * @author gizmore
 * @since 6.10
 */
final class Module_Prism extends GDO_Module
{
    public function onIncludeScripts() : void
    {
        $this->addJS('prism/prism.js');
        $this->addCSS('prism/prism.css');
        $this->addJS('js/phpgdo-prism.js');
    }
    
}
