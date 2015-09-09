<?php
/**
 * Scabbia2 PHP Framework Code
 * http://www.scabbiafw.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        http://github.com/scabbiafw/scabbia2-fw for the canonical source repository
 * @copyright   2010-2015 Scabbia Framework Organization. (http://www.scabbiafw.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace Scabbia\Testing;

use Scabbia\Interfaces\IInterface;
use Scabbia\Interfaces\Interfaces;
use Scabbia\Tasks\TaskBase;

/**
 * A small test implementation which helps us during the development of
 * Scabbia2 PHP Framework's itself and related production code
 *
 * @package     Scabbia\Testing
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       2.0.0
 */
class Test extends TaskBase
{
    /**
     * Initializes a task
     *
     * @return Test
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Executes the task
     *
     * @param array $uParameters parameters
     *
     * @return int exit code
     */
    public function executeTask(array $uParameters)
    {
        echo "not yet.";

        return 0;
    }

    /**
     * Returns the usage form and list of available parameters
     *
     * @return array usage summary
     */
    public function help()
    {
        return [];
    }
}
