
-- Same address when add a contact to a thirdpart
DELETE FROM llx_const WHERE name = 'CONTACT_USE_COMPANY_ADDRESS' AND entity = 1;
INSERT INTO llx_const(name,value,type,visible,note,entity) VALUES ('CONTACT_USE_COMPANY_ADDRESS', '1','chaine',1,'Auxiliae',1);


-- Add type of rdv when creating new event
DELETE FROM llx_const WHERE name = 'AGENDA_USE_EVENT_TYPE' AND entity = 1;
INSERT INTO llx_const(name,value,type,visible,note,entity) VALUES ('AGENDA_USE_EVENT_TYPE', '1','chaine',1,'',1);





