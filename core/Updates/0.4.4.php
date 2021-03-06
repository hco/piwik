<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Updates
 */

namespace Piwik\Updates;

use Piwik\Piwik;
use Piwik\Updates;

/**
 * @package Updates
 */
class Updates_0_4_4 extends Updates
{
    static function update()
    {
        $obsoleteFile = PIWIK_DOCUMENT_ROOT . '/libs/open-flash-chart/php-ofc-library/ofc_upload_image.php';
        if (file_exists($obsoleteFile)) {
            $rc = @unlink($obsoleteFile);
            if (!$rc) {
                throw new \Exception(Piwik::translateException('General_ExceptionUndeletableFile', array($obsoleteFile)));
            }
        }
    }
}
