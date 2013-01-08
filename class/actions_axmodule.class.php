<?php

include_once DOL_DOCUMENT_ROOT .'/core/lib/functions.lib.php';

class ActionsAxModule
{ 
 
    /** Overloading the doActions function : replacing the parent's function with the one below 
     *  @param      parameters  meta datas of the hook (context, etc...) 
     *  @param      object             the object you want to process (an invoice if you are in invoice module, a propale in propale's module, etc...) 
     *  @param      action             current action (if set). Generally create or edit or null 
     *  @return       void 
     */ 
    function doActions($parameters, $object, $action) 
    { 
      dol_syslog("AxModule doActions ".GETPOST('socid'), LOG_DEBUG);
      // dol_syslog("AxModule doActions socid ".$_GET('socid'), LOG_DEBUG);
      /* dol_syslog("AxModule doActions POST ".print_r($_POST, true), LOG_DEBUG);  */
      /* dol_syslog("AxModule doActions ".print_r($parameters, true), LOG_DEBUG);  */
      /* dol_syslog("AxModule doActions action <". $action . ">"); */
      /* dol_syslog("AxModule doActions".print_r($object, true));  */
      /* $_POST['lastname'] = mb_strtoupper($_POST['lastname'], 'UTF-8'); */
      /* $_POST['town']     = mb_strtoupper($_POST['town'], 'UTF-8'); */
      if($parameters['context'] == 'contactcard') { 

      } 
      /* if (in_array('thirdpartycard',explode(':',$parameters['context']))) { */
      /* 	if($action == 'create') { */

      /* 	} */
    }
}


?>
