<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\CzechRepublic;

use DateTime;
use DateTimeZone;
use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class containing tests for Easter Monday in the Czech Republic.
 *
 * Class EasterMondayTest
 * @package Yasumi\tests\CzechRepublic
 * @author  Dennis Fridrich <fridrich.dennis@gmail.com>
 */
class EasterMondayTest extends CzechRepublicBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday to be tested
     */
    const HOLIDAY = 'easterMonday';

    /**
     * Tests the holiday defined in this test.
     */
    public function testHoliday()
    {
        $year = 2000;
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year,
            new DateTime("$year-4-24", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of the holiday defined in this test.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::REGION, self::HOLIDAY, $this->generateRandomYear(),
            [self::LOCALE => 'Velikonoční pondělí']);
    }

    /**
     * Tests type of the holiday defined in this test.
     */
    public function testHolidayType()
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_NATIONAL);
    }
}
