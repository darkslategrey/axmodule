
-- Same address when add a contact to a thirdpart
DELETE FROM llx_const WHERE name = 'CONTACT_USE_COMPANY_ADDRESS' AND entity = 1;
INSERT INTO llx_const(name,value,type,visible,note,entity) VALUES ('CONTACT_USE_COMPANY_ADDRESS', '1','chaine',1,'Auxiliae',1);


-- Add type of rdv when creating new event
DELETE FROM llx_const WHERE name = 'AGENDA_USE_EVENT_TYPE' AND entity = 1;
INSERT INTO llx_const(name,value,type,visible,note,entity) VALUES ('AGENDA_USE_EVENT_TYPE', '1','chaine',1,'',1);

-- Hide payement conditions on propals
DELETE FROM llx_const WHERE name = 'PROPALE_PDF_HIDE_PAYMENTTERMCOND' AND entity = 1;
INSERT INTO llx_const(name,value,type,visible,note,entity) VALUES ('PROPALE_PDF_HIDE_PAYMENTTERMCOND', '1','chaine',1,'',1);

-- Hide payement conditions on propals
DELETE FROM llx_const WHERE name = 'AGENDA_USE_EVENT_TYPE' AND entity = 1;
INSERT INTO llx_const(name,value,type,visible,note,entity) VALUES ('AGENDA_USE_EVENT_TYPE', '1','chaine',1,'',1);

-- Google module: set llx_actioncomm.ref_ext lenght to 256
alter table `llx_actioncomm` modify `ref_ext` varchar(256);

