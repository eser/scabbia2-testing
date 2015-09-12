<?php
/**
 * Scabbia2 Testing Component
 * http://www.scabbiafw.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        https://github.com/scabbiafw/scabbia2-testing for the canonical source repository
 * @copyright   2010-2015 Scabbia Framework Organization. (http://www.scabbiafw.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace Scabbia\Testing;

use Scabbia\Interfaces\IInterface;
use Scabbia\Interfaces\Interfaces;
use Scabbia\Tasks\TaskBase;
use Scabbia\Testing\Testing;

/**
 * A small test implementation which helps us during the development of
 * Scabbia2 PHP Framework's itself and related production code
 *
 * @package     Scabbia\Testing
 * @author      Eser Ozvataf <eser@ozvataf.com>
 * @since       2.0.0
 */
class TestTask extends TaskBase
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
     * @param array      $uParameters  parameters
     * @param IInterface $uInterface   interface class
     *
     * @return int exit code
     */
    public function executeTask(array $uParameters, $uInterface = null)
    {
        // TODO populate fixtures
        $tFixtures = [];

        Testing::coverageStart();
        $tExitCode = Testing::runUnitTests($tFixtures, $uInterface);
        $tCoverageReport = Testing::coverageStop();

        if ($tCoverageReport !== null) {
            $tCoverage = round($tCoverageReport["total"]["percentage"], 2) . "%";
        } else {
            $tCoverage = "unknown";
        }

        $uInterface->writeColor("green", sprintf("Code Coverage = %s", $tCoverage));
        $uInterface->writeColor("yellow", "done.");

        return $tExitCode;
    }

    /**
     * Returns the usage form and list of available parameters
     *
     * @param IInterface $uInterface   interface class
     *
     * @return void
     */
    public function help($uInterface = null)
    {
    }
}
