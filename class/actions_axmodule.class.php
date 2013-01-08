<?php


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
      // dol_syslog("AxModule doActions ".print_r($_POST, true), LOG_DEBUG); 
      // dol_syslog("AxModule doActions ".print_r($parameters, true), LOG_DEBUG); 
      // dol_syslog("AxModule doActions action <". $action . ">");
      // dol_syslog("AxModule doActions".print_r($object, true)); 
 
      if (in_array('contactcard',explode(':',$parameters['context']))) 
        { 
	  if($action == 'update' || $action == 'create' || $action == 'add') {
	    $_POST['lastname'] = mb_strtoupper($_POST['lastname']);
	    $_POST['town']     = mb_strtoupper($_POST['town']);
	  }
        }
    }
}


?>
