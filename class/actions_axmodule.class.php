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
      dol_syslog("GREGO doActions ".print_r($parameters, true), LOG_DEBUG); 
      dol_syslog("GREGO doActions action <". $action . ">");
      dol_syslog("GREGO doActions".print_r($object, true)); 
 
        if (in_array('somecontext',explode(':',$parameters['context']))) 
        { 
          // do something only for the context 'somecontext'
        }
    }

    function addStatisticLine($parameters, $object, $action)
    {

      dol_syslog("GREGO addStatisticLine ".print_r($parameters, true), LOG_DEBUG); 
      dol_syslog("GREGO addStatisticLine action <". $action . ">");
      dol_syslog("GREGO addStatisticLine ".print_r($object, true)); 
 
        if (in_array('somecontext',explode(':',$parameters['context']))) 
        { 
          // do something only for the context 'somecontext'
        }
      
    }

}


?>
