<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "Löschen der Serverkonfiguration fehlgeschlagen",
"The configuration is valid and the connection could be established!" => "Die Konfiguration ist gültig und die Verbindung konnte hergestellt werden!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Die Konfiguration ist gültig aber die Verbindung ist fehlgeschlagen. Bitte überprüfen Sie die Servereinstellungen und die Anmeldeinformationen.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Die Konfiguration ist ungültig, sehen Sie für weitere Details bitte im ownCloud Log nach",
"Deletion failed" => "Löschen fehlgeschlagen",
"Take over settings from recent server configuration?" => "Einstellungen von letzter Konfiguration übernehmen?",
"Keep settings?" => "Einstellungen beibehalten?",
"Cannot add server configuration" => "Das Hinzufügen der Serverkonfiguration schlug fehl",
"Success" => "Erfolg",
"Error" => "Fehler",
"Connection test succeeded" => "Verbindungstest erfolgreich",
"Connection test failed" => "Verbindungstest fehlgeschlagen",
"Do you really want to delete the current Server Configuration?" => "Möchten Sie die aktuelle Serverkonfiguration wirklich löschen?",
"Confirm Deletion" => "Löschung bestätigen",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Warnung:</b> Die Anwendungen user_ldap und user_webdavauth sind inkompatibel. Es kann demzufolge zu unerwartetem Verhalten kommen. Bitten Sie Ihren Systemadministator eine der beiden Anwendungen zu deaktivieren.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Warnung:</b> Da das PHP-Modul für LDAP nicht installiert ist, wird das Backend nicht funktionieren. Bitten Sie Ihren Systemadministrator das Modul zu installieren.",
"Server configuration" => "Serverkonfiguration",
"Add Server Configuration" => "Serverkonfiguration hinzufügen",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Sie können das Protokoll auslassen, außer wenn Sie SSL benötigen. Beginnen Sie dann mit ldaps://",
"Base DN" => "Basis-DN",
"One Base DN per line" => "Ein Basis-DN pro Zeile",
"You can specify Base DN for users and groups in the Advanced tab" => "Sie können Basis-DN für Benutzer und Gruppen in dem \"Erweitert\"-Reiter konfigurieren",
"User DN" => "Benutzer-DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Der DN des Benutzers für LDAP-Bind, z.B.: uid=agent,dc=example,dc=com. Für einen anonymen Zugriff lassen Sie DN und Passwort leer.",
"Password" => "Passwort",
"For anonymous access, leave DN and Password empty." => "Lassen Sie die Felder DN und Passwort für einen anonymen Zugang leer.",
"User Login Filter" => "Benutzer-Login-Filter",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Bestimmt den angewendeten Filter, wenn eine Anmeldung durchgeführt wird. %%uid ersetzt den Benutzernamen beim Anmeldeversuch.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "verwenden Sie %%uid Platzhalter, z. B. \"uid=%%uid\"",
"User List Filter" => "Benutzer-Filter-Liste",
"Defines the filter to apply, when retrieving users." => "Definiert den Filter für die Anfrage der Benutzer.",
"without any placeholder, e.g. \"objectClass=person\"." => "ohne Platzhalter, z.B.: \"objectClass=person\"",
"Group Filter" => "Gruppen-Filter",
"Defines the filter to apply, when retrieving groups." => "Definiert den Filter für die Anfrage der Gruppen.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "ohne Platzhalter, z.B.: \"objectClass=posixGroup\"",
"Connection Settings" => "Verbindungseinstellungen",
"Configuration Active" => "Konfiguration aktiv",
"When unchecked, this configuration will be skipped." => "Wenn nicht angehakt, wird diese Konfiguration übersprungen.",
"Port" => "Port",
"Backup (Replica) Host" => "Backup Host (Kopie)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Geben Sie einen optionalen Backup Host an. Es muss sich um eine Kopie des Haupt LDAP/AD Servers handeln.",
"Backup (Replica) Port" => "Backup Port",
"Disable Main Server" => "Hauptserver deaktivieren",
"When switched on, ownCloud will only connect to the replica server." => "Wenn aktiviert, wird ownCloud ausschließlich den Backupserver verwenden.",
"Use TLS" => "Nutze TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Benutzen Sie es nicht in Verbindung mit LDAPS Verbindungen, es wird fehlschlagen.",
"Case insensitve LDAP server (Windows)" => "LDAP-Server (Windows: Groß- und Kleinschreibung bleibt unbeachtet)",
"Turn off SSL certificate validation." => "Schalten Sie die SSL-Zertifikatsprüfung aus.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Falls die Verbindung es erfordert, muss das SSL-Zertifikat des LDAP-Server importiert werden.",
"Not recommended, use for testing only." => "Nicht empfohlen, nur zu Testzwecken.",
"Cache Time-To-Live" => "Speichere Time-To-Live zwischen",
"in seconds. A change empties the cache." => "in Sekunden. Eine Änderung leert den Cache.",
"Directory Settings" => "Ordnereinstellungen",
"User Display Name Field" => "Feld für den Anzeigenamen des Benutzers",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Benutzernamens in ownCloud. ",
"Base User Tree" => "Basis-Benutzerbaum",
"One User Base DN per line" => "Ein Benutzer Basis-DN pro Zeile",
"User Search Attributes" => "Benutzersucheigenschaften",
"Optional; one attribute per line" => "Optional; ein Attribut pro Zeile",
"Group Display Name Field" => "Feld für den Anzeigenamen der Gruppe",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Gruppennamens in ownCloud. ",
"Base Group Tree" => "Basis-Gruppenbaum",
"One Group Base DN per line" => "Ein Gruppen Basis-DN pro Zeile",
"Group Search Attributes" => "Gruppensucheigenschaften",
"Group-Member association" => "Assoziation zwischen Gruppe und Benutzer",
"Special Attributes" => "Spezielle Eigenschaften",
"Quota Field" => "Kontingent-Feld",
"Quota Default" => "Standard-Kontingent",
"in bytes" => "in Bytes",
"Email Field" => "E-Mail-Feld",
"User Home Folder Naming Rule" => "Benennungsregel für das Home-Verzeichnis des Benutzers",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Ohne Eingabe wird der Benutzername (Standard) verwendet. Anderenfalls tragen Sie bitte ein LDAP/AD-Attribut ein.",
"Internal Username" => "Interner Benutzername",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder in ownCloud. It is also a port of remote URLs, for instance for all *DAV services. With this setting, the default behaviour can be overriden. To achieve a similar behaviour as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behaviour. Changes will have effect only on newly mapped (added) LDAP users." => "Standardmäßig wird der interne Benutzername mittels des UUID-Attributes erzeugt. Dies stellt sicher, dass der Benutzername einzigartig ist und keinerlei Zeichen konvertiert werden müssen. Der interne Benutzername unterliegt Beschränkungen, die nur die nachfolgenden Zeichen erlauben: [ a-zA-Z0-9_.@- ]. Andere Zeichenwerden mittels ihrer korrespondierenden Zeichen ersetzt oder einfach ausgelassen. Bei Übereinstimmungen wird ein Zähler hinzugefügt bzw. der Zähler um einen Wert erhöht. Der interne Benutzername wird benutzt, um einen Benutzer intern zu identifizieren. Es ist ebenso der standardmäßig vorausgewählte Namen des Heimatverzeichnisses in ownCloud. Es dient weiterhin als Port für Remote-URLs - zum Beispiel für alle *DAV-Dienste Mit dieser Einstellung kann das Standardverhalten überschrieben werden. Um ein ähnliches Verhalten wie vor ownCloud 5 zu erzielen, fügen Sie das anzuzeigende Attribut des Benutzernamens in das nachfolgende Feld ein. Lassen Sie dies hingegen für das Standardverhalten leer. Die Änderungen werden sich einzig und allein nur auf neu gemappte (hinzugefügte) LDAP-Benutzer auswirken.",
"Override UUID detection" => "UUID-Erkennung überschreiben",
"UUID Attribute:" => "UUID-Attribut:",
"Test Configuration" => "Testkonfiguration",
"Help" => "Hilfe"
);
