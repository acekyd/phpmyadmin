<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// abreviatures de Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s dies, %s hores, %s minuts i %s segons';

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAPrimaryKey = 'S\'ha afegit una clau principal a %s';
$strAbortedClients = 'Avortat';
$strAbsolutePathToDocSqlDir = 'S\'ha d\'entrar el camí absolut en el servidor web per el directori de docSQL';
$strAccessDenied = 'Accés denegat';
$strAccessDeniedExplanation = 'phpMyAdmin ha intentat connectar amb el servidor de MySQL, pero el servidor ha rebutjat la connexió. Comprova el host, el num d\' usuari i la contrasenya al fitxer config.inc.php i mira que es correspongui amb la informació facilitada per l\' administrador del servidor de MySQL.';
$strAction = 'Acció';
$strAddAutoIncrement = 'Afegir valor AUTO_INCREMENT';
$strAddConstraints = 'Afegir restriccions';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddDropDatabase = 'Afegir DROP DATABASE';
$strAddHeaderComment = 'Afegir comentari personalitzat a la capçalera (\\n divideix linies)';
$strAddIfNotExists = 'Afegir IF NOT EXISTS';
$strAddIntoComments = 'Afegir en comentaris';
$strAddNewField = 'Afegir un camp nou';
$strAddPrivilegesOnDb = 'Afegir permissos a la següent base de dades';
$strAddPrivilegesOnTbl = 'Afegir permissos a la següent taula';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la clàusula "WHERE"):';
$strAddToIndex = 'Afegir columna(es) a l\'índex %s &nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAddedColumnComment = 'Afegit comentari per la columna';
$strAddedColumnRelation = 'Afegida relació per la columna';
$strAdministration = 'Administració';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Després %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAfterInsertSame = 'Tornar a aquesta plana';
$strAll = 'Tot';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnIndex = 'S\'ha afegit un índex a %s';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAny = 'Qualsevol';
$strAnyHost = 'Qualsevol servidor';
$strAnyUser = 'Qualsevol usuari';
$strArabic = 'Àrab';
$strArmenian = 'Armeni';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';
$strAutodetect = 'Autodetectar';
$strAutomaticLayout = 'Disseny automàtic';

$strBack = 'Enrere';
$strBaltic = 'Bàltic';
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL VOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkAllUsers = 'Deixa accedir a cada usuari a aquesta consulta arxivada';
$strBookmarkDeleted = 'S\'ha esborrat la consulta arxivada.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkOptions = 'Opcions de consulta arxivada';
$strBookmarkQuery = 'Consulta SQL arxivada';
$strBookmarkThis = 'Arxiva aquesta consulta SQL';
$strBookmarkView = 'Només mirar';
$strBrowse = 'Navega';
$strBrowseForeignValues = 'Navega valors externs';
$strBulgarian = 'Búlgar';
$strBzError = 'phpMyAdmin és incapaç de comprimir el volcat degut a una extensió Bz2 incorrecta en aquesta versió de php. És molt recomenable posar a la directiva <code>$cfg[\'BZipDump\']</code> el valor <code>FALSE</code> al fitxer de configuració de phpMyAdmin. Si vol utilitzar les facilitats de compresió Bz2, és necessari actualitzar el php a la darrera versió disponible. Es pot consultar el informe d\'errada %s de php per a més detalls.';
$strBzip = '"comprimit amb bzip"';

$strCSVOptions = 'Opcions CSV';
$strCalendar = 'Calendari';
$strCannotLogin = 'No podem connectar amb el servidor MySQL';
$strCantLoad = 'No puc carregar la extensió %s,<br />comprova la configuració de PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensió necessària per la conversió de jocs de caràcters, configura php per permetre l\'ús d\'aquestes extensions o bé desactiva la conversió de jocs de caràcters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un índex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funció recode_string mentre es carrega l\'extensió d\'informes. Comprova la configuració de php.';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de línia: \\r';
$strCaseInsensitive = 'No sensible a majúscules';
$strCaseSensitive = 'sensible a majúscules';
$strCentralEuropean = 'Europa Central';
$strChange = 'Canvi';
$strChangeCopyMode = 'Crea un nou usuari amb els mateixos permissos i ...';
$strChangeCopyModeCopy = '... respecta l\'antic.';
$strChangeCopyModeDeleteAndReload = ' ... esborra l\'antic de les taules d\'usuaris i recarrega els permissos després.';
$strChangeCopyModeJustDelete = ' ... esborra l\'antic de les taules d\'usuaris.';
$strChangeCopyModeRevoke = ' ... treu tots els permissos actius de l\'antic i esborra\'l després.';
$strChangeCopyUser = 'Canvi d\'Informació de Connexió / Copia d\'Usuari';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharset = 'Joc de Caracters';
$strCharsetOfFile = 'Joc de caràcters de l\'arxiu:';
$strCharsets = 'Jocs de caracters';
$strCharsetsAndCollations = 'Jocs de Caracters i ordenacions';
$strCheckAll = 'Verificar-ho tot';
$strCheckOverhead = 'Comprova desfragmentades';
$strCheckPrivs = 'Comprova els Permissos';
$strCheckPrivsLong = 'Comprova els Permissos per la Base de dades &quot;%s&quot;.';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una pàgina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strCollation = 'Ordenaciò';
$strColumnNames = 'Nom de les columnes';
$strColumnPrivileges = 'Permissos específics de columna';
$strCommand = 'Ordre';
$strComments = 'Comentaris';
$strCommentsForTable = 'COMENTARIS PER LA TAULA';
$strCompleteInserts = 'Completar insercions';
$strCompression = 'Compressió';
$strConfigFileError = 'phpMyAdmin és incapaç de llegir el fitxer de configuració!<br />Això pot succeir si php troba un error sintàctic en ell o bé php no pot trobar el fitxer.<br />Intenta obrir el fitxer de configuració directament fent servir l\'enllaç següent i comprova el(s) missatge(s) d\'error que reps. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si reps una plana en blanc, tot està bé.';
$strConfigureTableCoord = 'Configura les coordinades per la taula %s';
$strConnectionError = 'No puc connectar: paràmetres incorrectes.';
$strConnections = 'Connexions';
$strConstraintsForDumped = 'Restriccions per taules volcades';
$strConstraintsForTable = 'Restriccions per la taula';
$strCookiesRequired = 'A partir d\'aquest punt és necessari tenir les galetes (cookies) activades.';
$strCopyTable = 'Copia taula a (base-de-dades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCopyTableSameNames = 'No es pot copiar la taula sobre ella mateixa';
$strCouldNotKill = 'phpMyAdmin no pot cancel.lar el fil %s. Probablement, ja és tancat.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un índex a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou índex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova Pàgina';
$strCreatePdfFeat = 'Creació de PDFs';
$strCreationDates = 'Datas de Creació/Modificació/Comprovació';
$strCriteria = 'Criteris';
$strCroatian = 'Croata';
$strCyrillic = 'Ciríl.lic';
$strCzech = 'Txec';
$strCzechSlovak = 'Txec-Eslovac';

$strDBComment = 'Comentaris de la Base de Dades: ';
$strDBGContext = 'Contexte';
$strDBGContextID = 'ID de contexte';
$strDBGHits = 'Accessos';
$strDBGLine = 'Linia';
$strDBGMaxTimeMs = 'Temps max, ms';
$strDBGMinTimeMs = 'Temps min, ms';
$strDBGModule = 'Módul';
$strDBGTimePerHitMs = 'Temps/Accés, ms';
$strDBGTotalTimeMs = 'Temps total, ms';
$strDBRename = 'Reanomenar base de dades a';
$strDanish = 'Danès';
$strData = 'Dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Només dades';
$strDatabase = 'Base de dades';
$strDatabaseEmpty = 'El nom de la base de dades és buit!';
$strDatabaseExportOptions = 'Opcions d\'exportació de Bases de Dades';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabaseNoTable = 'Aquesta base de dades no té taules!';
$strDatabases = 'bases de dades';
$strDatabasesDropped = '%s Bases de dades s\'han esborrat correctament.';
$strDatabasesStats = 'Estadístiques de les bases de dades';
$strDatabasesStatsDisable = 'Desactiva Estadístiques';
$strDatabasesStatsEnable = 'Activa Estadístiques';
$strDatabasesStatsHeavyTraffic = 'Nota: Activant les estadístiques de Base de Dades aqui pot provocar elevat tràfic entre el servidor Web i el de MySQL.';
$strDbPrivileges = 'Permissos especifics de Base de dades';
$strDbSpecific = 'específic de la base de dades';
$strDefault = 'Defecte';
$strDefaultValueHelp = 'Per a valors per defecte, només entra un valor, sense barres invertides ni cometes, fent servir aquest format: a';
$strDefragment = 'Desfragmentar taula';
$strDelOld = 'La plana actual té referències a taules que no existeixen. Vols esborrar aquestes referències?';
$strDelayedInserts = 'Usa insercions diferides';
$strDelete = 'Esborrar';
$strDeleteAndFlush = 'Esborra els usuaris i recarrega els permissos seguidament.';
$strDeleteAndFlushDescr = 'Aquesta és la forma més clara, pero recarregar els permissos pot tardar una mica.';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDeleting = 'Esborrant %s';
$strDescending = 'Descendent';
$strDescription = 'Descripció';
$strDictionary = 'diccionari';
$strDisableForeignChecks = 'Desactivar comprovacions de claus externes';
$strDisabled = 'Desactivat';
$strDisplayFeat = 'Mostrar característiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petició segons exemple" (comodí: "%")';
$strDoYouReally = 'Realment vols fer?';
$strDocu = 'Documentació';
$strDrop = 'Eliminar';
$strDropDatabaseStrongWarning = 'Ets a punt d\' ELIMINAR completament una base de dades!';
$strDropSelectedDatabases = 'Esborra les Bases de dades sel.lecionades';
$strDropUsersDb = 'Esborra les bases de dades que tenen els mateixos noms que els usuaris.';
$strDumpSaved = 'El volcat s\'ha guardat amb el nom d\'arxiu %s.';
$strDumpXRows = 'Volcar %s files començant a la fila %s.';
$strDumpingData = 'Volcant dades de la taula';
$strDynamic = 'dinàmic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar pàgines PDF';
$strEditPrivileges = 'Editar permissos';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEncloseInTransaction = 'Incloure exportació en la transacció';
$strEnd = 'Final';
$strEndCut = 'FI DEL TALL';
$strEndRaw = 'FI DEL VOLCAT';
$strEnglish = 'Anglès';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL són en llengua anglesa ';
$strError = 'Errada';
$strEstonian = 'Estonià ';
$strExcelEdition = 'Edició per Excel';
$strExcelOptions = 'Opcions d\'Excel';
$strExecuteBookmarked = 'Executa una consulta arxivada';
$strExplain = 'Explicació de l\'SQL';
$strExport = 'Exportar';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strFailedAttempts = 'Intents erronis';
$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps és buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escapada';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFileAlreadyExists = 'L\'arxiu %s ja existeix al servidor, canvia el nom o marca la opció de sobreescriure.';
$strFileCouldNotBeRead = 'No es pot llegir el fitxer';
$strFileNameTemplate = 'Nom de fitxer de plantilla';
$strFileNameTemplateHelp = 'Utilitza __DB__ per a nom de base de dades, __TABLE__ per a nom de taula i opcions %sany strftime%s per especificacions horaries, la extensió s\'afegirà automàgicament. Qualsevol altre text es mantindrà.';
$strFileNameTemplateRemember = 'Recordar plantilla';
$strFixed = 'fixa';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obté els permissos de l\'usuari directament de les taules de permissos de l\' MySQL. El contingut d\'aquestes taules pot diferir dels permissos que utilitza el servidor si s\'han fet canvis manualment. En aquest cas, es necessari %srecarregar els permissos%s abans de continuar.';
$strFlushTable = 'Buidar la memòria cau de la taula ("FLUSH")';
$strFormEmpty = 'Falta un valor al formulari !';
$strFormat = 'Format';
$strFullText = 'Textos sencers';
$strFunction = 'Funció';

$strGenBy = 'Generat per';
$strGenTime = 'Temps de generació';
$strGeneralRelationFeat = 'Característiques generals de relacions';
$strGeorgian = 'Georgià';
$strGerman = 'Alemany';
$strGlobal = 'global';
$strGlobalPrivileges = 'Permissos generals';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrantOption = 'Atorgar';
$strGreek = 'Grec';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has d\'escollir al menys una columna per mostrar';
$strHebrew = 'Hebreu';
$strHexForBinary = 'Usa hexadecimal per camps binaris';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor és buit!';
$strHungarian = 'Húngar';

$strId = 'ID';
$strIdxFulltext = 'Text sencer';
$strIfYouWish = 'Si només vols carregar algunes columnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strIgnoreInserts = 'Utilitzar "ignore inserts"';
$strIgnoringFile = 'Ignorant fitxer %s';
$strImportDocSQL = 'Importa Arxius docSQL';
$strImportFiles = 'Importar fitxers';
$strImportFinished = 'Importació finalitzada';
$strInUse = 'en ús';
$strIndex = 'Índex';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'índex %s';
$strIndexName = 'Nom d\'índex:';
$strIndexType = 'Tipus d\'índex:';
$strIndexes = 'Indexos';
$strInnodbStat = 'Estat InnoDB';
$strInsecureMySQL = 'El vostre fitxer de configuració té paràmetres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL està funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparació urgent d\'aquest forat de seguretat.';
$strInsert = 'Insereix';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInsertedRowId = 'Id de la fila inserida:';
$strInsertedRows = 'Files Inserides:';
$strInstructions = 'Instruccions';
$strInternalNotNecessary = '* No es necessita una relació interna si ja existeix a InnoDB.';
$strInternalRelations = 'Relacions internes';

$strJapanese = 'Japonès';
$strJumpToDB = 'Vés a la Base de Dades &quot;%s&quot;.';
$strJustDelete = 'Només esborra els usuaris de les taules de permissos.';
$strJustDeleteDescr = 'Els usuaris &quot;esborrats&quot; encara tindrán accés al servidor com fins ara mentre no es recarreguin els permissos.';

$strKeepPass = 'No canviïs la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';
$strKorean = 'Coreà';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'Opcions LaTeX';
$strLandscape = 'Horitzontal';
$strLatexCaption = 'Titol de Taula';
$strLatexContent = 'Contingut de la taula __TABLE__';
$strLatexContinued = '(continúa)';
$strLatexContinuedCaption = 'Continuació del Titol de taula';
$strLatexIncludeCaption = 'Inclusió del titol de taula';
$strLatexLabel = 'Etiqueta de clau';
$strLatexStructure = 'Estructura de la taula __TABLE__';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de línia: \\n';
$strLinesTerminatedBy = 'Línies terminades per';
$strLinkNotFound = 'L\'enllaç no s\'ha trobat';
$strLinksTo = 'Enllaços a';
$strLithuanian = 'Lituà ';
$strLoadExplanation = 'El millor metode es comprova per defecte, pero es pot canviar si falla.';
$strLoadMethod = 'Metode de CARREGA';
$strLocalhost = 'Local';
$strLocationTextfile = 'Ubicació del fitxer de text';
$strLogPassword = 'Contrasenya:';
$strLogServer = 'Servidor';
$strLogUsername = 'Nom d\'Usuari:';
$strLogin = 'Identificació';
$strLoginInformation = 'Informació d\'Identificació';
$strLogout = 'Sortir';

$strMIMETypesForTable = 'TIPUS MIME PER LA TAULA';
$strMIME_MIMEtype = 'Tipus MIME';
$strMIME_available_mime = 'Tipus MIME disponibles';
$strMIME_available_transform = 'Transformacions disponibles';
$strMIME_description = 'Descripció';
$strMIME_nodescription = 'No hi ha cap descripció disponible per a aquesta transformació.<br />Demana a l\'autor qué fa %s.';
$strMIME_transformation = 'Transformació del Navegador';
$strMIME_transformation_note = 'Per veure una llista d\'opcions de transformació disponibles i els seus tipus MIME de  transformació, clica a %stransformation descriptions%s';
$strMIME_transformation_options = 'Opcions de Transformació';
$strMIME_transformation_options_note = 'Entra els valors per a transformar utilitzant aquest format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure una barra invertida ("\") o un apòstrof ("\'") entre aquests valors, posa una barra invertida devant (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_without = 'Els tipus MIME en cursiva no tenen funcions de transformació a part';
$strMaximumSize = 'Tamany Màxim: %s%s';
$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un índex';
$strMoreStatusVars = 'Més  variables d\'estat';
$strMoveTable = 'Mou taula a (base-de-dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMoveTableSameNames = 'No es pot moure la taula sobre ella mateixa!';
$strMultilingual = 'multilingüe';
$strMustSelectFile = 'Has de sel.leccionar l\'arxiu que vols inserir.';
$strMySQLCharset = 'Joc de caràcters de MySQL';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informació de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNeedPrimaryKey = 'S\'ha de definir una clau principal per a aquesta taula.';
$strNext = 'Següent';
$strNo = 'No';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDatabasesSelected = 'No hi han Bases de dades sel.leccionades.';
$strNoDescription = 'Sense Descripció';
$strNoDropDatabases = 'Instrucció "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicació de l\'SQL';
$strNoFrames = 'phpMyAdmin és més fàcil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'índex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'índex!';
$strNoModification = 'Sense canvis';
$strNoOptions = 'Aquest format no té opcions';
$strNoPassword = 'Sense contrasenya';
$strNoPermission = 'El servidor web no té permissos per a guardar l\'arxiu %s.';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense permissos';
$strNoQuery = 'No és una consulta SQL!';
$strNoRights = 'No tens prou permissos per visualitzar aquesta informació!';
$strNoRowsSelected = 'No s\'han seleccionat files';
$strNoSpace = 'No hi ha prou espai per guardar  l\'arxiu %s.';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoValidateSQL = 'Saltar la Validació de l\'SQL';
$strNone = 'Res';
$strNotNumber = 'Aquest valor no és un número!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNotValidNumber = ' no es un número de columna vàlid!';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';
$strNumTables = 'Taules';

$strOK = 'Correcte';
$strOftenQuotation = 'Marques sintàctiques. OPCIONALMENT vol dir que només els camps de tipus char i varchar van "tancats dins" "-aquest caràcter.';
$strOperations = 'Operacions';
$strOperator = 'Operador';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure caràcters especials.';
$strOptionally = 'OPCIONALMENT';
$strOr = 'O';
$strOverhead = 'Defragmentat';
$strOverwriteExisting = 'Sobreescriure arxiu(s) existent(s)';

$strPHP40203 = 'S\'esta fent servir la versió 4.2.3 de PHP, que té un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versió de PHP per treballar amb phpMyAdmin.';
$strPHPVersion = 'PHP versió';
$strPageNumber = 'Número de pàgina:';
$strPaperSize = 'Tamany de paper';
$strPartialText = 'Textos Parcials';
$strPassword = 'Contrasenya';
$strPasswordChanged = 'La contrasenya per a %s s\'ha canviat correctament.';
$strPasswordEmpty = 'La contrasenya és buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - Pàgina %s';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPerHour = 'per hora';
$strPerMinute = 'per minut';
$strPerSecond = 'per segon';
$strPhoneBook = 'Libreta d\' adreces';
$strPhp = 'Crear codi PHP';
$strPmaDocumentation = 'Documentació de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar al fitxer de configuració!';
$strPortrait = 'Vertical';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Principal';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>només</b> el nom de la clau principal!)';
$strPrint = 'Imprimir';
$strPrintView = 'Imprimir vista';
$strPrintViewFull = 'Vista d\'impresió (amb texts sencers)';
$strPrivDescAllPrivileges = 'Inclou tots els permissos excepte GRANT (atorgar).';
$strPrivDescAlter = 'Permet alterar l\'estructura de taules existents.';
$strPrivDescCreateDb = 'Permet crear noves bases de dades i taules.';
$strPrivDescCreateTbl = 'Permet crear noves taules.';
$strPrivDescCreateTmpTable = 'Permet crear taules temporals.';
$strPrivDescDelete = 'Permet esborrar dades.';
$strPrivDescDropDb = 'Permet eliminar bases de dades i taules.';
$strPrivDescDropTbl = 'Permet eliminar taules.';
$strPrivDescExecute = 'Permet executar processos enmagatzemats (stored procedures); No té efecte en aquesta versió de MySQL.';
$strPrivDescFile = 'Permet importar i exportar dades amb fitxers externs.';
$strPrivDescGrant = 'Permet afegir usuaris i permissos sense tenir que recarregar les taules de permissos.';
$strPrivDescIndex = 'Permet crear i eliminar indexos.';
$strPrivDescInsert = 'Permet inserir i modificar dades.';
$strPrivDescLockTables = 'Permet bloquejar taules per l\'actual fil d\'execució.';
$strPrivDescMaxConnections = 'Limita el numero de noves connexions que pot obrir l\'usuari per hora.';
$strPrivDescMaxQuestions = 'Limita el numero de consultes que pot enviar l\'usuari al servidor per hora.';
$strPrivDescMaxUpdates = 'Limita el numero d\'ordres que pot executar l\'usuari canviant qualsevol taula o base de dades per hora.';
$strPrivDescProcess3 = 'Permet cancel.lar processos d\'altres usuaris.';
$strPrivDescProcess4 = 'Permet veure completament les consultes a la llista de processos.';
$strPrivDescReferences = 'No té efecte en aquesta versió de MySQL.';
$strPrivDescReload = 'Permet recarregar les configuracions del servidor i buidar les seves memòries cau.';
$strPrivDescReplClient = 'Dona el dret a l\'usuari de preguntar quins servidors mestres / esclaus hi ha.';
$strPrivDescReplSlave = 'Es necessari per a la replicació en servidors esclaus.';
$strPrivDescSelect = 'Permet llegir dades.';
$strPrivDescShowDb = 'Dona accés a la llista completa de bases de dades.';
$strPrivDescShutdown = 'Permet parar el servidor.';
$strPrivDescSuper = 'Permet connectar, encara que s\'hagi arribat al máxim numero de connexions permés; Es necessari per moltes operacions d\'administració com ara establir variables globals o bé cancel.lar fils d\'execució d\'altres usuaris.';
$strPrivDescUpdate = 'Permet canviar dades.';
$strPrivDescUsage = 'Sense permissos.';
$strPrivileges = 'Permissos';
$strPrivilegesReloaded = 'Els permissos s\'han recarregat correctament.';
$strProcesslist = 'Llista de processos';
$strProperties = 'Propietats';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryFrame = 'Finestra de la Consulta';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';
$strQuerySQLHistory = 'Historial SQL';
$strQueryStatistics = '<b>Estadístiques de Consultes</b>: Des de l\'últim inici, s\'han enviat %s consultes al servidor.';
$strQueryTime = 'La consulta tarda %s seg';
$strQueryType = 'Tipus de consulta';
$strQueryWindowLock = 'No sobreescriure aquesta consulta des de fora de la finestra';

$strReType = 'Reescriure';
$strReceived = 'Rebut';
$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRefresh = 'Actualitzar';
$strRelationNotWorking = 'Les característiques addicionals per treballar amb taules enllaçades s\'han desactivat. Per saber perquè clica %saquí%s.';
$strRelationView = 'Vista de Relacions';
$strRelationalSchema = 'Esquema Relacional';
$strRelations = 'Relacions';
$strRelationsForTable = 'RELACIONS DE LA TAULA';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strReloadingThePrivileges = 'Recarregant permissos';
$strRemoveSelectedUsers = 'Treure els usuaris sel.leccionats';
$strRenameDatabaseOK = 'Base de dades %s reanomenada a %s';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substituir';
$strReplaceNULLBy = 'Substitueix NULL per';
$strReplaceTable = 'Substituir les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strResourceLimits = 'Limit de recursos';
$strRevoke = 'Treure';
$strRevokeAndDelete = 'Denega tots els permissos actius dels usuaris i els esborra després.';
$strRevokeAndDeleteDescr = 'Els usuaris encara tindran el permís USAGE fins que es recarreguin els permissos.';
$strRevokeMessage = 'Has tret els permissos per %s';
$strRowLength = 'Longitud de fila';
$strRowSize = 'Mida de fila ';
$strRows = 'Fila';
$strRowsFrom = 'Files començant des de';
$strRowsModeFlippedHorizontal = 'horizontal (capçaleres rotades)';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions = ' en mode %s i repeteix capçaleres després de %s cel·les ';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadística de files';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunning = 'funcionant a %s';
$strRussian = 'Rus';

$strSQL = 'SQL';
$strSQLExportType = 'Tipus d\' Exportació';
$strSQLOptions = 'Opcions SQL';
$strSQLParserBugMessage = 'És possible que hagueu trobat un error a l\'intèrpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada és que estigueu pujant un arxiu amb dades binàries per fora de l\'àrea de text delimitada. També podeu provar la consulta a la interfície de comandes de MySQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'intèrpret falla i l\'interfície de comandes funciona, reduïu la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secció de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometa no tancada';
$strSQPBugUnknownPunctuation = 'Signe de puntuació desconegut';
$strSave = 'Guardar';
$strSaveOnServer = 'Guardar al servidor al directori %s';
$strScaleFactorSmall = 'El factor de l\'escala és massa petit per posar l\'esquema en una pàgina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comodí: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressió regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSecretRequired = 'El fitxer de configuració necessita ara una frase de pas secreta (blowfish_secret).';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Selecciona els camps (un com a mínim):';
$strSelectNumRows = 'en consulta';
$strSelectTables = 'Selecciona Taules';
$strSend = 'enviar';
$strSent = 'Enviat';
$strServer = 'Servidor';
$strServerChoice = 'Elecció de Servidor';
$strServerNotResponding = 'El servidor no respon';
$strServerStatus = 'Informació d\'execució';
$strServerStatusUptime = 'Aquest servidor MySQL és en marxa durant %s. Es va iniciar en %s.';
$strServerTabProcesslist = 'Processos';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Ocupació de servidor</b>: Aquestes taules mostren la ocupació de la xarxa d\'aquest servidor MySQL des de l\'últim inici.';
$strServerVars = 'Variables i configuracions del servidor';
$strServerVersion = 'Versió del servidor';
$strSessionValue = 'Valor de sessió';
$strSetEnumVal = 'Si el tipus de camp és "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowDatadictAs = 'Format del Diccionari de Dades';
$strShowFullQueries = 'Mostra Consultes completes';
$strShowGrid = 'Mostra graella';
$strShowPHPInfo = 'Mostra informació de PHP';
$strShowTableDimension = 'Mostra dimensió de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strShowingRecords = 'Mostrant registres: ';
$strSimplifiedChinese = 'Xinés Simplificat';
$strSingly = '(només)';
$strSize = 'Mida';
$strSort = 'Classificació';
$strSortByKey = 'Classifica per la clau';
$strSpaceUsage = 'Utilització d\'espai';
$strSpanish = 'Espanyol';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strStatCheckTime = 'Darrera comprovació';
$strStatCreateTime = 'Creació';
$strStatUpdateTime = 'Darrera actualització';
$strStatement = 'Sentències';
$strStatus = 'Estat';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir DROP TABLE';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucNativeExcel = 'Dades Natives MS Excel';
$strStrucOnly = 'Només l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb èxit';
$strSum = 'Suma';
$strSwedish = 'Suec';
$strSwitchToTable = 'Canvia a una taula copiada';

$strTable = 'Taula';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula és buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat la memòria cau de la taula %s';
$strTableMaintenance = 'Manteniment de la taula';
$strTableOfContents = 'Taula de continguts';
$strTableOptions = 'Opcions de Taula';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTables = '%s taula(es)';
$strTakeIt = 'agafa';
$strTblPrivileges = 'Permissos especifics de taula';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strThai = 'Tailandès';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substituirà els continguts de les taules seleccionades a les files que contenen la mateixa clau única o primària';
$strTheTerminator = 'El separador de camps.';
$strTheme = 'Tema / Estil';
$strThisHost = 'Aquest Host';
$strThisNotDirectory = 'Aixó no és un directori';
$strThreadSuccessfullyKilled = 'Fil %s cancel.lat correctament.';
$strTime = 'Temps';
$strToggleScratchboard = 'Canvia l\' scratchboard';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraditionalChinese = 'Xinés Tradicional';
$strTraffic = 'Tràfic';
$strTransformation_application_octetstream__download = 'Mostra un enllaç per descarregar les dades binàries d\'un camp. La primera dada és el nom d\'arxiu binari. La segona dada és un possible nom de camp d\'una taula que contingui el nom d\'arxiu. Si es facilita la segona dada és necessari tenir la primera dada buida';
$strTransformation_image_jpeg__inline = 'Mostra una miniatura am enllaç; opcions: ample,alt en pixels (respecta la proporció original)';
$strTransformation_image_jpeg__link = 'Es mostra com a enllaç a la imatge.';
$strTransformation_image_png__inline = 'Veure image/jpeg: en linia';
$strTransformation_text_plain__dateformat = 'Pren un camp TIME, TIMESTAMP o DATETIME i li dona format utilitzant el format d\'hora local. La primera opció es la diferència (en hores) que s\'ha d\'afegir a l\'hora (Per defecte: 0). La segona opció és un format de data diferent d\'acord als paràmetres disponibles per a la funció de PHP strftime().';
$strTransformation_text_plain__external = 'NOMÉS LINUX: Llença una aplicació externa i facilita el camp de dades via standard input. Retorna per standard output de l\'aplicacióo. El defecte és Tidy, per interpretar codi HTML. Per raons de seguretat, has d\' editar manualment el fitxer libraries/transformations/text_plain__external.inc.php i afegir les eines que vulguis fer servir. La primera opció és, llavors, el numero del programa que vols fer servir i la segona opció són els paràmetres per el programa. El tercer paràmetre, si es posa a 1, convertirà la sortida fent servir htmlspecialchars() (El defecte és 1). El quart paràmetre, si val 1, posarà un NOWRAP al contingut de les cel.les de forma que la sortida sencera es mostrarà sense reformatejar (Per defecte 1)';
$strTransformation_text_plain__formatted = 'Conserva el format original del camp. No es fa cap canvi.';
$strTransformation_text_plain__imagelink = 'Mostra una imatge i un enllaç, el camp conté el nom del fitxer; la primera opció és un prefixe com "http://domini.com/", la segona opció és l\'amplada en pixels, la tercera és l\'alçada.';
$strTransformation_text_plain__link = 'Mostra un enllaç, el camp conté el nom del fitxer; la primera opció és un prefixe com "http://domini.com/", la segona opció és el titol del enllaç.';
$strTransformation_text_plain__substr = 'Només mostra part de la cadena. La primera opció marca el desplaçament on comença el teu text (Per defecte 0). La segona opció indica la quantitat de caracters a retornar. Si és buit, retorna tot el texte restant. La tercera opció defineix els caracters que s\'han d\'afegir a la sortida quan es retorna la cadena (Defecte: ...) .';
$strTransformation_text_plain__unformatted = 'Mostra codi HTML com entitats HTML. No es mostra en format HTML.';
$strTruncateQueries = 'Talla les consultes mostrades';
$strTurkish = 'Turc';
$strType = 'Tipus';

$strUkrainian = 'Ucrainès ';
$strUncheckAll = 'Desmarcar tot';
$strUnicode = 'Unicode';
$strUnique = 'Única';
$strUnknown = 'Desconegut';
$strUnselectAll = 'Desmarca tot';
$strUpdComTab = 'Mira a la documentació com actualitzar la teva Taula de Comentaris de les Columnes';
$strUpdatePrivMessage = 'Heu actualitzat els permissos de %s.';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUpgrade = 'Es necessari actualitzar a %s %s o posterior.';
$strUsage = 'Ús';
$strUseBackquotes = 'Usa &quot;backquotes&quot; amb taules i noms de camps';
$strUseHostTable = 'Utilitza la Taula de Hosts';
$strUseTables = 'Usa Taules';
$strUseTextField = 'Usa camp de texte';
$strUseThisValue = 'Fes servir aquest valor';
$strUser = 'Usuari';
$strUserAlreadyExists = 'L\'usuari %s ja existeix!';
$strUserEmpty = 'El nom d\'usuari és buit!';
$strUserName = 'Nom d\'usuari';
$strUserNotFound = 'No s\'ha trobat l\'usuari sel.leccionat a la taula de permissos.';
$strUserOverview = 'Informació general de l\'usuari';
$strUsersDeleted = 'S\'han esborrat correctament els usuaris sel.leccionats.';
$strUsersHavingAccessToDb = 'Usuaris amb accés a &quot;%s&quot;';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal·lats els mòduls de PHP necessaris tal i com s\'indica a la %sdocumentació%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';
$strViewDumpDatabases = 'Veure volcat (esquema) de les bases de dades';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No està disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWestEuropean = 'Europa Occidental';
$strWildcard = 'comodins';
$strWindowNotFound = 'La finestra destí del navegador no s\'ha pogut actualitzar. Potser has tancat la finestra "pare" o bé el teu navegador bloqueja actualitzacions entre finestres per la teva configuració de seguretat';
$strWithChecked = 'Amb marca:';
$strWritingCommentNotPossible = 'No es pot gravar aquest comentari';
$strWritingRelationNotPossible = 'No es pot gravar aquesta relació';
$strWrongUser = 'Usuari i/o clau erronis. Accés denegat.';

$strXML = 'XML';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Establint aquestes opcions a 0 (zero) treu el limit.';
$strZip = '"comprimit amb zip"';

$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
?>
