{*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
<div class="crm-block crm-form-block crm-mailing-upload-form-block">
{include file="CRM/common/WizardHeader.tpl"}

<div id="help">
    {ts}You can either <strong>upload</strong> the voice message to be broadcast from your pc or you can record it from here{/ts} {help id="content-intro"}
</div>

{include file="CRM/Mailing/Form/Count.tpl"}

<table class="form-layout-compressed">
    <tr class="crm-mailing-upload-form-block-subject"><td class="label">{$form.caller.label}</td>
        <td colspan="2">{$form.caller.html} {help id="caller"}
    </tr>

</table>
  {capture assign=docLink}{docURL page="Sample CiviMail Messages" text="More information and sample messages..." resource="wiki"}{/capture}
  <fieldset id="upload_id"><legend>{ts}Upload Content{/ts}</legend>
    <table class="form-layout-compressed">
        <tr class="crm-mailing-upload-form-block-textFile">
            <td class="label">{$form.textFile.label}</td>
            <td>{$form.textFile.html}<br />
                <span class="description">{ts}Browse to the <strong>Voice Message</strong> message file you have prepared for this voice broadcast.{/ts}<br /> {$docLink}</span>
            </td>
        </tr>
    </table>
  </fieldset



  <div class="crm-submit-buttons">{include file="CRM/common/formButtons.tpl"}</div>
</div><!-- / .crm-form-block -->

{* -- Javascript for showing/hiding the upload/compose options -- *}
{include file="CRM/common/showHide.tpl"}
{literal}
<script type="text/javascript">
    showHideUpload();
    function showHideUpload()
    {
  if (document.getElementsByName("upload_type")[0].checked) {
            cj('#compose_id').hide();
      cj('.crm-mailing-upload-form-block-template').hide();
      cj('#upload_id').show();
        } else {
            cj('#compose_id').show();
      cj('.crm-mailing-upload-form-block-template').show();
      cj('#upload_id').hide();
            verify( );
        }
    }
</script>
{/literal}

{* include jscript to warn if unsaved form field changes *}
{include file="CRM/common/formNavigate.tpl"}
