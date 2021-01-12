<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'Aktion';
$_lang['action_desc'] = 'Die Aktion, auf die diese Regel angewendet wird.';
$_lang['activate'] = 'Aktivieren';
$_lang['constraint'] = 'Einschränken auf';
$_lang['constraint_class'] = 'Klasse für Einschränkung';
$_lang['constraint_class_desc'] = 'Optional. Regel-Einschränkungen erlauben es, Regeln nur dann anzuwenden, wenn ein bestimmtes Feld einen bestimmten Wert hat. Angenommen, eine Regel für resource/update soll nur auf Ressourcen mit der Template-ID 4 angewendet werden. Dann sollte als Klasse "modResource", als Feld "template" und als Wert "4" eingegeben werden. Wenn hier Klasse, Feld und Wert der Einschränkung angegeben werden, wird die Regel entsprechend eingeschränkt.';
$_lang['constraint_desc'] = 'Optional. Der Wert der Einschränkungs-Bedingung, der mit dem Wert des Feldes verglichen wird.';
$_lang['constraint_field'] = 'Feld für Einschränkung';
$_lang['constraint_field_desc'] = 'Optional. Das Feld, von dessen Wert die Einschränkung abhängig ist.';
$_lang['containing_panel'] = 'Enthalten in';
$_lang['containing_panel_desc'] = 'Die ID des Formulars, das das Feld enthält. Diese wird manchmal für bestimmte Regeln benötigt, damit das System weiß, in welchem Formular oder Bedienelement das Feld zu finden ist.';
$_lang['deactivate'] = 'Deaktivieren';
$_lang['default_value'] = 'Standardwert';
$_lang['export'] = 'Exportieren';
$_lang['fc.action_create'] = 'Ressource erstellen';
$_lang['fc.action_update'] = 'Ressource bearbeiten';
$_lang['fc.action_resource_wildcard'] = 'Ressource erstellen & bearbeiten';
$_lang['field'] = 'Feld';
$_lang['field_desc'] = 'Dies ist das Feld, auf das sich die Regel auswirkt. Dies kann auch ein Reiter oder eine TV sein. Wenn es eine TV ist, geben Sie sie bitte im Format "tv#" an, wobei # für die ID der TV steht. Es kann auch eine kommaseparierte Liste eingegeben werden.';
$_lang['field_default'] = 'Feld-Standardwert';
$_lang['field_label'] = 'Feldbeschriftung';
$_lang['field_visible'] = 'Feld sichtbar';
$_lang['fields'] = 'Felder';
$_lang['file'] = 'Datei';
$_lang['filter_by_action'] = 'Nach Aktion filtern...';
$_lang['filter_by_rule_type'] = 'Nach Regel filtern...';
$_lang['filter_by_search'] = 'Suche...';
$_lang['for_parent'] = 'Für Eltern-Element';
$_lang['for_parent_desc'] = 'Aktivieren Sie diese Option, wenn Sie möchten, dass diese Regel auf das Eltern-Element angewendet wird. Verwenden Sie dies nur mit Ressourcen oder Objekten mit einem mit einem "parent"-Feld. Nützlich für die "Erstellen"-Seite von Ressourcen.';
$_lang['form_customization_msg'] = 'Hier ist eine Liste der momentan angewendeten Regeln. Weitere Informationen über Regeln und Formular-Anpassung finden Sie <a href="https://docs.modx.com/3.x/en/building-sites/client-proofing/form-customization" target="_blank">hier</a>. Bitte beachten Sie, dass ungeeignete Regeln Probleme mit Ihrer MODX-Installation verursachen können. Inaktive Regeln werden ausgegraut dargestellt.';
$_lang['form_rules'] = 'Formular-Regeln';
$_lang['import'] = 'Importieren';
$_lang['import_from_xml'] = 'Neues Set aus XML-Datei importieren';
$_lang['label'] = 'Beschriftung';
$_lang['original_value'] = 'Ursprünglicher Wert';
$_lang['profile'] = 'Profil';
$_lang['profile_create'] = 'Profil erstellen';
$_lang['profile_err_nfs'] = 'Formular-Anpassungs-Profil mit der ID [[+id]] nicht gefunden.';
$_lang['profile_err_ns'] = 'Formular-Anpassungs-Profil nicht angegeben!';
$_lang['profile_err_remove'] = 'Beim Versuch, das Profil zu löschen, ist ein Fehler aufgetreten.';
$_lang['profile_err_save'] = 'Beim Versuch, das Profil zu speichern, ist ein Fehler aufgetreten.';
$_lang['profile_msg'] = 'Hier können Sie Sets für dieses Profil angeben. Ein Set ist eine Sammlung von Regeln, die auf eine gegebene Seite angewendet werden (Ressource bearbeiten oder erstellen). Sie können auch auf bestimmte Templates oder auf Werte anderer Felder der Ressource beschränkt werden. Einschränkungen für die Sets, die bei der Erstellung von Ressourcen zur Anwendung kommen, werden basierend auf der Eltern-Ressource der neu erstellten Ressource angewendet.';
$_lang['profile_new'] = 'Formular-Anpassungs-Profil erstellen';
$_lang['profile_remove'] = 'Profil löschen';
$_lang['profile_remove_confirm'] = 'Sind Sie sicher, dass Sie das Profil löschen möchten? Dies lässt sich nicht rückgängig machen.';
$_lang['profile_remove_multiple'] = 'Mehrere Profile löschen';
$_lang['profile_remove_multiple_confirm'] = 'Sind Sie sicher, dass Sie diese Profile löschen möchten? Dies lässt sich nicht rückgängig machen.';
$_lang['profile_usergroup_err_ae'] = 'Diese Benutzergruppe ist diesem Profil bereits zugeordnet!';
$_lang['profile_usergroups_msg'] = 'Hier können Sie die Benutzergruppen zuordnen, die dieses Profil verwenden. Wenn keine Benutzergruppen zugeordnet sind, verwenden alle Benutzer dieses Profil.';
$_lang['profiles'] = 'Formular-Anpassungs-Profile';
$_lang['profiles_msg'] = 'Dies ist eine Liste Ihrer Formular-Anpassungs-Profile. Profile können mehrere Formular-Anpassungs-Regeln enthalten und können aktiviert oder deaktiviert werden. Sie können auch so konfiguriert werden, dass sie nur auf bestimmte Benutzergruppen angewendet werden.';
$_lang['rank'] = 'Rang';
$_lang['rank_desc'] = 'Mit dieser Einstellung wird die Reihenfolge festgelegt, in der die Regeln ausgeführt werden. Eine kleinere Zahl bedeutet, dass die Regel früher ausgeführt wird.';
$_lang['region'] = 'Bereich';
$_lang['regions'] = 'Bereiche';
$_lang['rule'] = 'Regel';
$_lang['rule_create'] = 'Regel erstellen';
$_lang['rule_desc'] = 'Die Art der Regel, die auf dieses Feld angewendet wird.';
$_lang['rule_description_desc'] = 'Optional. Eine Beschreibung der Regel.';
$_lang['rule_err_ae'] = 'Es existiert bereits eine Regel für dieses Feld!';
$_lang['rule_err_duplicate'] = 'Beim Versuch, die Regel zu duplizieren, ist ein Fehler aufgetreten.';
$_lang['rule_err_nf'] = 'Regel nicht gefunden.';
$_lang['rule_err_ns'] = 'Regel nicht angegeben.';
$_lang['rule_err_remove'] = 'Beim Versuch, die Regel zu löschen, ist ein Fehler aufgetreten.';
$_lang['rule_err_save'] = 'Beim Versuch, die Regel zu speichern, ist ein Fehler aufgetreten.';
$_lang['rule_remove'] = 'Regel löschen';
$_lang['rule_remove_confirm'] = 'Sind Sie sicher, dass Sie diese Regel löschen möchten?';
$_lang['rule_remove_multiple'] = 'Mehrere Regeln löschen';
$_lang['rule_remove_multiple_confirm'] = 'Sind Sie sicher, dass Sie diese Regeln löschen möchten? Dies lässt sich nicht rückgängig machen.';
$_lang['rule_update'] = 'Regel bearbeiten';
$_lang['rule_value_desc'] = 'Der Wert, der durch die Regel gesetzt wird. Bei manchen Regeln, z.B. bei "TV zum Reiter verschieben", kann hier eine kommaseparierte Liste eingegeben werden.';
$_lang['rules'] = 'Regeln';
$_lang['set'] = 'Einstellen';
$_lang['set_and_fields'] = 'Set-Informationen und -Felder';
$_lang['set_change_template'] = 'Wechsle Template für das Set';
$_lang['set_change_template_confirm'] = 'Sind Sie sicher, dass Sie dies tun möchten? Falls ja, wird das Template gewechselt, auf das diese Regeln angewendet werden. MODX wird dann zunächst Ihre Änderungen speichern, bevor die Seite neu geladen wird, damit die richtigen TVs für das neu ausgewählte Template angezeigt werden.';
$_lang['set_constraint_field_desc'] = 'Das Setzen des "Feldes für die Einschränkung" sorgt dafür, dass die Regeln in diesem Set nur dann angewendet werden, wenn in einer Ressource der Inhalt dieses Feldes mit dem Wert der Einschränkung übereinstimmt.';
$_lang['set_constraint_desc'] = 'Legen Sie den Wert des oben angegebenen Feldes fest, um die Anwendung der Regeln dieses Sets auf die Ressourcen zu beschränken, die diesen Wert im angegebenen "Feld für die Einschränkung" enthalten.';
$_lang['set_create'] = 'Set erstellen';
$_lang['set_err_nfs'] = 'Kein Set mit der ID [[+id]] gefunden';
$_lang['set_err_ns'] = 'Kein Set angegeben.';
$_lang['set_fields_msg'] = 'Hier können Sie die Felder für diese Seite anpassen, inklusive ihrer Sichtbarkeit, Beschriftungen und Standardwerte. Klicken Sie einfach doppelt auf eine Zeile, um ihren Wert zu ändern. Bei leergelassenen Feldern kommen die Standardeinstellungen zur Anwendung.<br>Bitte beachten Sie: Wenn ein Element innerhalb dieses Profils versteckt wird, wird es auch in überlappenden Profilen versteckt sein (auch wenn dort das Häkchen bei "Sichtbar" gesetzt ist).';
$_lang['set_import_err_upload'] = 'Beim Versuch, die XML-Datei zu finden, ist ein Fehler aufgetreten. Bitte geben Sie eine gültige Datei an.';
$_lang['set_import_err_xml'] = 'Beim Versuch, die XML-Datei zu importieren, ist ein Fehler aufgetreten. Bitte überprüfen Sie, ob Sie eine gültige XML-Datei für Formular-Anpassungs-Sets angegeben haben.';
$_lang['set_import_msg'] = 'Wählen Sie eine XML-Datei, aus der ein Formular-Anpassungs-Set importiert werden soll. Die Datei muss im korrekten XML-Format für Formular-Anpassungen vorliegen.';
$_lang['set_import_template_err_nf'] = 'Beim Importieren des Formular-Anpassungs-Sets wurde das Template nicht gefunden.';
$_lang['set_msg'] = 'Hier können Sie festlegen, welche Felder, Reiter und TVs für diese Seite angezeigt werden, ebenso ihre Beschriftungen und Standardwerte. Klicken Sie einfach doppelt auf eine Spalte, um ihren Wert zu ändern. Sie können auch die Tabulator-Taste verwenden, um durch die Felder zu navigieren. Bei leergelassenen Feldern kommen die Standardeinstellungen zur Anwendung.';
$_lang['set_new'] = 'Set erstellen';
$_lang['set_edit'] = 'Set bearbeiten';
$_lang['set_remove'] = 'Set löschen';
$_lang['set_remove_confirm'] = 'Sind Sie sicher, dass Sie dieses Set endgültig löschen möchten? Dies lässt sich nicht rückgängig machen.';
$_lang['set_remove_multiple'] = 'Mehrere Sets löschen';
$_lang['set_remove_multiple_confirm'] = 'Sind Sie sicher, dass Sie diese Sets endgültig löschen möchten? Dies lässt sich nicht rückgängig machen.';
$_lang['set_tab_err_ae'] = 'Ein Reiter mit dieser ID existiert bereits. Bitte geben Sie eine andere ein.';
$_lang['set_tabs_msg'] = 'Hier können Sie die Reiter und Bereiche für diese Seite anpassen, inklusive ihrer Sichtbarkeit und ihrer Titel. Klicken Sie einfach doppelt auf eine Zeile, um ihren Wert zu ändern. Bei leergelassenen Feldern kommen die Standardeinstellungen zur Anwendung.<br>Bitte beachten Sie: Wenn ein Element innerhalb dieses Profils versteckt wird, wird es auch in überlappenden Profilen versteckt sein (auch wenn dort das Häkchen bei "Sichtbar" gesetzt ist).';
$_lang['set_template_desc'] = 'Das Auswählen eines Templates beschränkt die Anwendung der Regeln in diesem Set auf Ressourcen, die das angegebene Template verwenden.';
$_lang['set_tvs_msg'] = 'Hier können Sie die Sichtbarkeit, Beschriftungen, Standardwerte und Reiter, auf denen sie sich befinden, anpassen, indem Sie doppelt auf eine Zeile der Tabelle klicken. Hinweis: Wenn Sie eine <abbr title="Template-Variable">TV</abbr> in einen anderen Bereich verschieben, können Sie die Position der TV innerhalb des Reiters mittels des Feldes "Rang des Bereichs" anpassen. Bei leergelassenen Feldern kommen die Standardeinstellungen zur Anwendung.';
$_lang['sets'] = 'Formular-Anpassungs-Sets';
$_lang['simplexml_err_nf'] = 'MODX benötigt die SimpleXML-PHP-Extension, um dieses Feature nutzen zu können. Bitte stellen Sie sicher, dass die Extension installiert ist, bevor Sie fortfahren.';
$_lang['tab'] = 'Reiter';
$_lang['tab_create'] = 'Tab erstellen';
$_lang['tab_id'] = 'ID';
$_lang['tab_name'] = 'Name des Reiters';
$_lang['tab_title'] = 'Titel';
$_lang['tab_new'] = 'Tab erstellen';
$_lang['tab_rank'] = 'Rang des Bereichs';
$_lang['tab_remove'] = 'Reiter löschen';
$_lang['tab_remove_confirm'] = 'Sind Sie sicher, dass Sie diesen Reiter löschen möchten?';
$_lang['tab_visible'] = 'Reiter sichtbar';
$_lang['tabs'] = 'Reiter';
$_lang['tv'] = 'TV';
$_lang['tv_default'] = 'TV-Standardwert';
$_lang['tv_label'] = 'TV-Feldbeschriftung';
$_lang['tv_name'] = 'Name';
$_lang['tv_move'] = 'TV zum Reiter verschieben';
$_lang['tv_visible'] = 'TV sichtbar';
$_lang['tvs'] = 'Template-Variablen';
$_lang['usergroup'] = 'Benutzergruppe';
$_lang['usergroup_create'] = 'Benutzergruppe erstellen';
$_lang['usergroup_desc'] = 'Optional. Wenn ausgefüllt, wird dieses Profil nur auf Benutzer angewendet, die der angegebenen Benutzergruppe angehören.';
$_lang['usergroup_remove'] = 'Benutzergruppe aus dem Profil löschen';
$_lang['usergroup_remove_confirm'] = 'Sind Sie sicher, dass dieses Profil nicht mehr auf Benutzer aus dieser Benutzergruppe angewendet werden soll?';
$_lang['usergroups'] = 'Benutzergruppen';
$_lang['visible'] = 'Sichtbar';
$_lang['xmlwriter_err_nf'] = 'MODX benötigt die XMLWriter-PHP-Extension, um dieses Feature nutzen zu können. Bitte stellen Sie sicher, dass die Extension installiert ist, bevor Sie fortfahren.';
