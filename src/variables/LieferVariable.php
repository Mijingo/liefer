<?php
/**
 * Liefer plugin for Craft CMS 3.x
 *
 * a desc
 *
 * @link      https://mijingo.com
 * @copyright Copyright (c) 2017 Mijingo
 */

namespace mijingo\liefer\variables;

use mijingo\liefer\Liefer;

use Craft;

/**
 * Liefer Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.liefer }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Mijingo
 * @package   Liefer
 * @since     0.0.1
 */
class LieferVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.liefer.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.liefer.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function get($options = [])
    {
        return Liefer::$plugin->lieferService->get($options);
    }
}
