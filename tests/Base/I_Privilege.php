<?php
/**
 * Privileges test class.
 *
 * @copyright YetiForce Sp . z o . o
 * @license   YetiForce Public License 4.0 (licenses / LicenseEN . txt or yetiforce . com)
 * @author    Arkadiusz Dudek < a . dudek@yetiforce . com >
 */

namespace Tests\Base;

class I_Privilege extends \Tests\Base
{
	/**
	 * Testing Privilege Utils.
	 */
	public function testPrivilegeUtils()
	{
		$ticketId = (new \App\Db\Query())->from('vtiger_troubletickets')->scalar();
		$this->assertNotFalse(\App\PrivilegeUtil::testPrivileges($ticketId));
	}
}
