<?php

/**
 * Return list of modules directories
 *
 * @param	string	$subdir		Sub directory (Example: '/mailings')
 * @return	array				Array of directories that can contains module descriptors
 */
function myDolGetModulesDirs($subdir='')
{
    global $conf;

    $modulesdir=array();

    foreach ($conf->file->dol_document_root as $type => $dirroot)
    {
        // Default core/modules dir
        $modulesdir[$dirroot . $subdir.'/'] = $dirroot .$subdir.'/';

        // Scan dir from external modules
        $handle=@opendir($dirroot);
        if (is_resource($handle))
        {
            while (($file = readdir($handle))!==false)
            {
                if (is_dir($dirroot.'/'.$file) && substr($file, 0, 1) <> '.' && substr($file, 0, 3) <> 'CVS' && $file != 'includes')
                {
                    if (is_dir($dirroot . '/' . $file . $subdir.'/'))
                    {
                        $modulesdir[$dirroot . '/' . $file . $subdir.'/'] = $dirroot . '/' . $file . $subdir.'/';
                    }
                }
            }
            closedir($handle);
        }
    }
    return $modulesdir;
}

?>