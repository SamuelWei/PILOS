<?php

return [
    'access_code'                  => 'Zugangscode',
    'access_for_participants'      => 'Zugang für Teilnehmer',
    'become_member'                => 'Mitglied werden',
    'copy_access_for_participants' => 'Zugangsdaten für Teilnehmer in Zwischenablage kopieren',
    'create'                       => [
        'ok'    => 'Erstellen',
        'title' => 'Neuen Raum erstellen',
    ],
    'end_membership' => [
        'button'  => 'Mitgliedschaft beenden',
        'message' => 'Sie verlieren die Rolle, die mit Ihrer Mitgliedschaft verbunden ist. Um wieder Mitglied zu werden, müssen Sie eventuell den Raumbesitzer fragen. Wenn der Raum einen Zugangscode hat, müssen Sie diesen kennen, um weiterhin Zugang zu dem Raum zu haben.',
        'no'      => 'Nein, Mitgliedschaft beibehalten',
        'title'   => 'Sind Sie sicher, dass Sie die Mitgliedschaft beenden wollen?',
        'yes'     => 'Ja, Mitgliedschaft beenden',
    ],
    'files' => [
        'confirm_delete' => 'Soll die Datei :filename gelöscht werden?',
        'default'        => 'Standard',
        'delete'         => 'Datei löschen',
        'downloadable'   => 'Herunterladbar',
        'filename'       => 'Dateiname',
        'formats'        => 'Erlaubte Dateiformate: :formats',
        'nodata'         => 'Keine Dateien vorhanden',
        'select_or_drag' => 'Wählen Sie eine Datei aus, oder ziehen Sie eine Datei per Drag & Drop in dieses Feld ...',
        'size'           => 'Max. Dateigröße: :size MB',
        'terms_of_use'   => [
            'accept'  => 'Ich akzeptiere die Nutzungsbedingungen',
            'content' => 'Dateien, welche hier zum Download angeboten werden, sind ausschließlich für das persönliche Studium. Die Dateien, oder Inhalte aus diesen, dürfen nicht geteilt oder weiterverbreitet werden.',
            'title'   => 'Nutzungsbedingungen',
        ],
        'title'               => 'Dateien',
        'uploaded_at'         => 'Hochgeladen am',
        'use_in_next_meeting' => 'Im nächsten Meeting nutzen',
        'view'                => 'Datei anzeigen',
    ],
    'filter' => [
        'apply' => 'Anwenden',
        'title' => 'Filter',
    ],
    'first_and_lastname' => 'Vor- und Nachname',
    'flash'              => [
        'access_code_invalid' => 'Der Zugangscode ist ungültig.',
        'file_forbidden'      => 'Die Zugriff auf die Datei wurde verweigert.',
        'file_gone'           => 'Die Datei wurde in der Zwischenzeit gelöscht.',
        'no_new_room'         => 'Sie haben nicht die nötige Berechtigung um einen neuen Raum zu erstellen.',
        'start_forbidden'     => 'Der Raum kann von Ihnen nicht gestartet werden.',
        'token_invalid'       => 'Der personalisierte Raumlink ist nicht mehr gültig.',
    ],
    'index' => [
        'favorites' => 'Favoriten',
        'filter' => 'Filter',
        'no_favorites' => 'Keine Räume als Favoriten markiert',
        'no_rooms_selected' => 'Keine Räume ausgewählt',
        'reset_filter' => "Filter zurücksetzen",
        'rooms'       => 'Räume',
        'show_all'    => 'Alle Räume',
        'show_own'    => 'Eigene Räume',
        'show_public' => 'Öffentliche Räume',
        'show_shared' => 'Geteilte Räume',
        'sorting'     => [
            'sort'           => 'Sortierung',
            'select_sorting' => '-- Sortierung auswählen --',
            'alpha'          => 'Alphabetisch',
            'last_active'    => 'Zuletzt aktiv',
            'room_type'      => 'Nach Raumart',

        ],
        'room_component'=> [
            'never_started'   => ' Noch nie gestartet',
            'running_since'   => ' Meeting läuft seit :date',
            'last_ran_till'   => ' Zuletzt gelaufen bis :date',
            'meeting_starting'=> ' Meeting startet gerade',
            'open'            => 'Öffnen',
            'details'         => 'Details',
        ],
    ],
    'invalid_personal_link' => 'Dieser personalisierte Raumlink ist ungültig.',
    'invitation'            => [
        'code' => 'Zugangscode: :code',
        'link' => 'Link: :link',
        'room' => 'An ":roomname" mit :platform teilnehmen',
    ],
    'join'            => 'Teilnehmen',
    'login'           => 'Anmelden',
    'meeting_history' => [
        'title' => 'Historie',
    ],
    'members' => [
        'add_user'          => 'Benutzer hinzufügen',
        'bulk_edit_user'    => ':numberOfSelectedUsers Mitglieder bearbeiten',
        'bulk_import_users' => 'Mehrere Benutzer hinzufügen',
        'bulk_remove_user'  => ':numberOfSelectedUsers Mitglieder löschen',
        'edit_user'         => 'Mitglied bearbeiten',
        'image'             => 'Bild',
        'modals'            => [
            'add' => [
                'add'         => 'Hinzufügen',
                'no_options'  => 'Keine Einträge, bitte suchen Sie nach einem Benutzer.',
                'no_result'   => 'Oops! Für diesen Suchbegriff konnten keine Benutzer gefunden werden.',
                'select_role' => 'Bitte wählen Sie eine Rolle aus',
                'select_user' => 'Bitte wählen Sie einen Benutzer aus',
            ],
            'bulk_import' => [
                'can_import_users'          => 'Benutzer, die hinzugefügt werden können',
                'cannot_import_users'       => 'Benutzer, die nicht hinzugefügt werden können',
                'copied_invalid_users'      => 'Ungültige Benutzer wurden kopiert',
                'copy_and_close'            => 'Ungültige Benutzer kopieren und Schließen',
                'could_not_import_users'    => 'Benutzer, die nicht hinzugefügt werden konnten',
                'list_description'          => 'Jede Zeile steht für eine eigene E-Mail-Adresse (maximal 1000)',
                'list_placeholder'          => "max.mustermann@domain.de\nerika.mustermann@domain.de",
                'import_importable_button'  => 'Gültige Benutzer hinzufügen',
                'import_importable_question'=> 'Möchten Sie fortfahren und die Benutzer hinzufügen, die hinzugefügt werden können?',
                'imported_users'            => 'Benutzer, die erfolgreich hinzugefügt wurden',
                'label'                     => 'E-Mail-Liste'
            ],
            'edit' => [
                'title'      => ':firstname :lastname bearbeiten',
                'title_bulk' => ':numberOfSelectedUsers Mitglieder bearbeiten',
            ],
            'remove' => [
                'confirm'      => 'Soll :firstname :lastname aus dem Raum entfernt werden?',
                'confirm_bulk' => 'Sollen :numberOfSelectedUsers Mitglieder aus dem Raum entfernt werden?',
                'title'        => 'Mitglied aus dem Raum entfernen',
                'title_bulk'   => ':numberOfSelectedUsers Mitglieder aus dem Raum entfernen',
            ],
        ],
        'nodata'      => 'Keine Mitglieder vorhanden',
        'remove_user' => 'Mitglied löschen',
        'title'       => 'Mitglieder',
    ],
    'modals' => [
        'delete' => [
            'confirm' => 'Soll der Raum ":name" gelöscht werden?',
            'title'   => 'Raum löschen',
        ],
    ],
    'name'                      => 'Raumname',
    'no_rooms_available'        => 'Keine Räume vorhanden',
    'no_rooms_available_search' => 'Keine Räume für diesen Suchbegriff gefunden',
    'not_running'               => 'Der Raum ist noch nicht gestartet.',
    'notification'              => [
        'body'            => 'Der Raum wurde um :time gestartet',
        'browser_support' => 'Ihr Browser unterstützt keine Benachrichtigung.',
        'denied'          => 'Der Browser verweigert Benachrichtigungen.',
        'enable'          => 'Beim Start des Raumes benachrichtigen',
        'enabled'         => 'Sie werden beim Start des Raumes von Ihrem Browser benachrichtigt. Schließen Sie dieses Fenster/Tab nicht.',
    ],
    'only_used_by_authenticated_users' => 'Dieser Raum kann nur von angemeldeten Benutzern verwendet werden.',
    'placeholder_name'                 => 'Max Mustermann',
    'recording_attendance_accept'      => 'Ich bin mit der Protokollierung einverstanden.',
    'recording_attendance_info'        => 'Die Anwesenheit in diesem Raum wird protokolliert.',
    'require_access_code'              => 'Für diesen Raum ist ein Zugangscode erforderlich',
    'role'                             => 'Rolle',
    'roles'                            => [
        'co_owner'    => 'Mitbesitzer',
        'guest'       => 'Gast',
        'moderator'   => 'Moderator',
        'participant' => 'Teilnehmer',
    ],
    'room_limit'              => 'Maximale Anzahl an Räumen: :has/:max',
    'room_type_invalid_alert' => 'Die Nutzung der Raumart :roomTypeName ist nur für bestimmte Benutzergruppen genehmigt. Wenn Sie der Eigentümer des Raumes sind, ändern Sie bitte die Raumart, damit der Raum wieder gestartet werden kann.',
    'room_types'              => [
        'loading_error' => 'Beim Laden der Raumarten ist ein Fehler aufgetreten.',
        'reload'        => 'Raumarten neuladen',
        'select_type'   => '-- Raumart auswählen --',
        'all'           => 'Alle Raumarten',
    ],
    'settings' => [
        'general' => [
            'chars'             => 'Zeichen: :chars',
            'max_duration'      => 'Max. Dauer',
            'minutes'           => 'min.',
            'reset_duration'    => 'Dauer zurücksetzen',
            'short_description' => 'Kurzbeschreibung',
            'title'             => 'Allgemein',
            'type'              => 'Art',
            'welcome_message'   => 'Begrüßungsnachricht',
        ],
        'none_placeholder' => '-- keine --',
        'participants'     => [
            'clear_max_participants' => 'Max. Teilnehmeranzahl zurücksetzen',
            'default_role'           => [
                'only_logged_in' => '(nur für angemeldete Beutzer)',
                'title'          => 'Standardrolle',
            ],
            'max_participants'  => 'Max. Teilnehmeranzahl',
            'record_attendance' => 'Anwesenheit der Teilnehmer protokollieren',
            'title'             => 'Teilnehmer',
            'waiting_room'      => [
                'only_for_guests_enabled' => 'Aktiviert für Gäste',
                'title'                   => 'Warteraum',
            ],
        ],
        'permissions' => [
            'everyone_start' => 'Jeder darf das Meeting starten',
            'mute_mic'       => 'Mikrofon bei Beitritt stummschalten',
            'title'          => 'Berechtigungen',
        ],
        'restrictions' => [
            'disable_cam'            => 'Webcam deaktivieren',
            'disable_mic'            => 'Mikrofon deaktivieren',
            'disable_note_edit'      => 'Bearbeiten der Notizen deaktivieren',
            'disable_private_chat'   => 'Private Chats deaktivieren',
            'disable_public_chat'    => 'Öffentlichen Chat deaktivieren',
            'enabled'                => 'Einschränkungen aktivieren',
            'hide_participants_list' => 'Teilnehmerliste verbergen',
            'only_mod_see_cam'       => 'Webcam nur für Moderatoren sichtbar',
            'title'                  => 'Einschränkungen',
        ],
        'security' => [
            'access_code_note'        => 'Zugangsbeschränkung für die Teilnahme und Mitgliedschaft (wenn aktiviert).',
            'allow_guests'            => 'Gäste zulassen',
            'allow_new_members'       => 'Neue Mitglieder zulassen',
            'delete_access_code'      => 'Zugangscode entfernen',
            'generate_access_code'    => 'Neuen Zugangscode erstellen',
            'listed'                  => 'In Raumsuche einschließen',
            'unprotected_placeholder' => '-- ungeschützt --',
        ],
        'title' => 'Einstellungen',
    ],
    'start'        => 'Starten',
    'status'       => [
        'not_running' => 'Kein laufendes Meeting',
        'running'     => 'Meeting läuft',
    ],
    'tokens' => [
        'add'              => 'Personalisierten Raumlink hinzufügen',
        'confirm_delete'   => 'Wollen Sie den personalisierten Raumlink für :firstname :lastname wirklich löschen?',
        'copy'             => 'Personalisierten Raumlink in Zwischenablage kopieren',
        'delete'           => 'Personalisierten Raumlink löschen',
        'edit'             => 'Personalisierten Raumlink bearbeiten',
        'expires'          => 'Verfallsdatum',
        'last_usage'       => 'Zuletzt verwendet',
        'nodata'           => 'Keine personalisierten Raumlinks vorhanden!',
        'room_link_copied' => 'Der persionalisierte Raumlink für :firstname :lastname wurde in Ihre Zwischenablage kopiert.',
        'title'            => 'Personalisierte Raumlinks',
    ],
    'try_again'   => 'Erneut versuchen',
    'description' => [
        'cancel' => 'Abbrechen',
        'color'  => [
            'black' => 'Schwarz',
            'blue'  => 'Blau',
            'green' => 'Grün',
            'red'   => 'Rot',
        ],
        'edit'      => 'Bearbeiten',
        'heading1'  => 'Überschrift 1',
        'heading2'  => 'Überschrift 2',
        'heading3'  => 'Überschrift 3',
        'highlight' => [
            'green'  => 'Grün',
            'red'    => 'Rot',
            'yellow' => 'Gelb',
        ],
        'modals' => [
            'link' => [
                'new'         => 'Neuen Link hinzufügen',
                'edit'        => 'Link bearbeiten',
                'url'         => 'URL',
                'invalid_url' => 'Die URL muss mit http://, https:// oder mailto:// beginnen',
            ],
            'image' => [
                'new'               => 'Neues Bild einfügen',
                'edit'              => 'Bild bearbeiten',
                'src'               => 'URL',
                'invalid_src'       => 'Die URL muss mit http:// oder https:// beginnen',
                'width'             => 'Breite',
                'width_description' => 'Breite in Pixeln (px) oder Prozent (%)',
                'alt'               => 'Alternativtext',
            ],
            'source_code' => [
                'title' => 'Quellcode bearbeiten',
            ],
        ],
        'external_link_warning' => [
            'title'       => 'Externer Link',
            'description' => 'Sie werden zu folgender URL weitergeleitet :link',
        ],
        'missing'   => 'Keine Beschreibung vorhanden',
        'paragraph' => 'Absatz',
        'save'      => 'Speichern',
        'title'     => 'Beschreibung',
        'tooltips'  => [
            'text_type'     => 'Textart',
            'bold'          => 'Fett',
            'italic'        => 'Kursiv',
            'underline'     => 'Unterstrichen',
            'strikethrough' => 'Durchgestrichen',
            'color'         => 'Textfarbe',
            'highlight'     => 'Hervorhebung',
            'clear'         => 'Formatierung entfernen',
            'center'        => 'Zentriert ausrichten',
            'left'          => 'Links ausrichten',
            'right'         => 'Rechts ausrichten',
            'list'          => 'Liste',
            'numbered_list' => 'Nummerierte Liste',
            'quote'         => 'Zitat',
            'link'          => 'Link',
            'image'         => 'Bild',
            'undo'          => 'Rückgängig',
            'redo'          => 'Wiederholen',
            'delete'        => 'Inhalt löschen',
            'source_code'   => 'Quellcode',
        ],
    ],
];
