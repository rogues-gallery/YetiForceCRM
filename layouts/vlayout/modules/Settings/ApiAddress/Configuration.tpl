{*<!--
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
-->*}
<div class="container-fluid" id="menuEditorContainer">
    <div class="widget_header row-fluid">
        <div class="span8">
			<h3>{vtranslate('LBL_API_ADDRESS', $MODULENAME)}</h3>
			{vtranslate('LBL_API_ADDRESS_DESCRIPTION', $MODULENAME)}
		</div>
    </div>
    <hr>
	<div class="main_content" style="padding:30px">
		<form>
			<table cellpadding="10">
				<tr>
					<td>
						{vtranslate('LBL_CHOOSE_API', $MODULENAME)}
					</td>
					<td>
						<select class="select2" id="change_api" style="width: 200px;">
							<option>{vtranslate('LBL_SELECT_OPTION')}</option>
							{foreach from=$CONFIG item=item key=key}
								<option value="{$item.api_name}">{vtranslate($item.api_name, $MODULENAME)}</option>
							{/foreach}
						</select>
					</td>
				</tr>
				{foreach from=$CONFIG item=item key=key}
					<tr class="hide api_row {$item.api_name}">
						<td colspan="2">
							{include file=vtemplate_path($item.api_name|cat:'.tpl', $MODULENAME) API_INFO=$item}
						</td>
					</tr>
				{/foreach}

			</table> 
		</form>	
	</div>
</div>