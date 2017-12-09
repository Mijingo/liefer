<?php
/**
 * Liefer plugin for Craft CMS 3.x
 *
 * a desc
 *
 * @link      https://mijingo.com
 * @copyright Copyright (c) 2017 Mijingo
 */

namespace mijingo\liefer\services;

use mijingo\liefer\Liefer;

use Craft;
use craft\base\Component;

/**
 * LieferService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Mijingo
 * @package   Liefer
 * @since     0.0.1
 */
class LieferService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Liefer::$plugin->lieferService->exampleService()
     *
     * @return mixed
     */
    public function get($options = [])
    {
        if ( isset($options['url']) ) {
            return $this->_fetchData($options['url']);
        }
        else {
            return;
        }
    }

    private function _fetchData($url) {
        $json = file_get_contents($url);
        $array = json_decode($json, true);
        return $array['data'];

    }
}
