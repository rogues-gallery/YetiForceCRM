<?php

/**
 * OSSEmployees EmployeeHierarchy view class
 * @package YetiForce.View
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
class OSSEmployees_EmployeeHierarchy_View extends Vtiger_View_Controller
{

	/**
	 * Function to check permission
	 * @param \App\Request $request
	 * @throws \App\Exceptions\NoPermittedToRecord
	 */
	public function checkPermission(\App\Request $request)
	{
		$recordId = $request->getInteger('record');
		if (!$recordId) {
			throw new \App\Exceptions\NoPermittedToRecord('LBL_NO_PERMISSIONS_FOR_THE_RECORD');
		}
		if (!\App\Privilege::isPermitted($request->getModule(), 'DetailView', $recordId)) {
			throw new \App\Exceptions\NoPermittedToRecord('LBL_NO_PERMISSIONS_FOR_THE_RECORD');
		}
	}

	public function preProcess(\App\Request $request, $display = true)
	{
		
	}

	public function process(\App\Request $request)
	{
		$viewer = $this->getViewer($request);
		$moduleName = $request->getModule();
		$recordModel = Vtiger_Record_Model::getInstanceById($request->getInteger('record'), $moduleName);
		$hierarchy = $recordModel->getEmployeeHierarchy();

		$viewer->assign('MODULE', $moduleName);
		$viewer->assign('EMPLOYEES_HIERARCHY', $hierarchy);
		$viewer->view('EmployeeHierarchy.tpl', $moduleName);
	}

	public function postProcess(\App\Request $request)
	{
		
	}
}
