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

namespace Yasumi\tests\Netherlands;

use Yasumi\Holiday;

/**
 * Class for testing holidays in Netherlands.
 */
class NetherlandsTest extends NetherlandsBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Tests if all national holidays in Netherlands are defined by the provider class
     */
    public function testNationalHolidays()
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'easter',
            'easterMonday',
            'kingsDay',
            'ascensionDay',
            'pentecost',
            'pentecostMonday',
            'christmasDay',
            'secondChristmasDay'
        ], self::REGION, $this->year, Holiday::TYPE_NATIONAL);
    }

    /**
     * Tests if all observed holidays in Netherlands are defined by the provider class
     */
    public function testObservedHolidays()
    {
        $this->assertDefinedHolidays([
            'stMartinsDay',
            'goodFriday',
            'ashWednesday',
            'commemorationDay',
            'liberationDay',
            'halloween',
            'stNicholasDay',
            'carnivalDay',
            'secondCarnivalDay',
            'thirdCarnivalDay'
        ], self::REGION, $this->year, Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests if all seasonal holidays in Netherlands are defined by the provider class
     */
    public function testSeasonalHolidays()
    {
        $this->assertDefinedHolidays(['summerTime', 'winterTime'], self::REGION, $this->year, Holiday::TYPE_SEASON);
    }

    /**
     * Tests if all bank holidays in Netherlands are defined by the provider class
     */
    public function testBankHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_BANK);
    }

    /**
     * Tests if all other holidays in Netherlands are defined by the provider class
     */
    public function testOtherHolidays()
    {
        $this->assertDefinedHolidays([
            'internationalWorkersDay',
            'valentinesDay',
            'worldAnimalDay',
            'fathersDay',
            'mothersDay',
            'epiphany',
            'princesDay'
        ], self::REGION, $this->year, Holiday::TYPE_OTHER);
    }

    /**
     * Initial setup of this Test Case
     */
    protected function setUp()
    {
        $this->year = $this->generateRandomYear(2014);
    }
}
