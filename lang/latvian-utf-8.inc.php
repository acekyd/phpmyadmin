<?php
/* $Id$ */

/**
 * Latvian language file by Sandis Jērics <sandisj at parks.lv>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sv', 'P', 'O', 'T', 'C', 'Pk', 'S');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn', 'Jūl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y %H:%M';

$timespanfmt = '%s dienas, %s stundas, %s minūtes un %s sekundes';

$strAPrimaryKey = 'Primārā atslēga pievienota uz lauka %s';
$strAbortedClients = 'Pārtraukts';
$strAbsolutePathToDocSqlDir = 'Lūdzu ievadiet absolūto ceļu līdz docSQL direktorijai uz servera';
$strAccessDenied = 'Pieeja aizliegta';
$strAccessDeniedExplanation = 'phpMyAdmin mēģināja pieslēgties MySQL serverim, un serveris noraidīja pieslēgumu. Lūdzu pārbaudiet hostu, lietotājvārdu un paroli config.inc.php failā, un pārliecinieties, ka tie atbilst informācijai, ko Jums deva MySQL servera administrators.';
$strAction = 'Darbība';
$strAddAutoIncrement = 'Pievienot AUTO_INCREMENT vērtību';
$strAddConstraints = 'Pievienot ierobežojumus';
$strAddDeleteColumn = 'Pievienot/Dzēst laukus (kolonnas)';
$strAddDeleteRow = 'Pievienot/Dzēst ierakstu';
$strAddDropDatabase = 'Pievienot DROP DATABASE';
$strAddIntoComments = 'Pievienot komentāros';
$strAddNewField = 'Pievienot jaunu lauku';
$strAddPrivilegesOnDb = 'Pievienot privilēģijas uz sekojošo  datubāzi';
$strAddPrivilegesOnTbl = 'Pievienot privilēģijas uz sekojošo tabulu';
$strAddSearchConditions = 'Pievienot meklēšanas nosacījumus ("where" izteiksmes ķermenis):';
$strAddToIndex = 'Pievienot indeksam &nbsp;%s&nbsp;kolonn(u/as)';
$strAddUser = 'Pievienot jaunu lietotāju';
$strAddUserMessage = 'Jūs pievienojāt jaunu lietotāju.';
$strAddedColumnComment = 'Pievienots komentārs kolonnai';
$strAddedColumnRelation = 'Pievienota relācija kolonnai';
$strAdministration = 'Administrācija';
$strAffectedRows = 'Ietekmēto rindu skaits:';
$strAfter = 'Pēc %s';
$strAfterInsertBack = 'Atgriezties atpakaļ iepriekšējā lapā';
$strAfterInsertNewInsert = 'Ievietot vēl vienu rindu';
$strAll = 'Visi';
$strAllTableSameWidth = 'rādīt visas tabulas vienadā platumā?';
$strAlterOrderBy = 'Mainīt datu kārtošanas laukus';
$strAnIndex = 'Indekss tieka pievienots uz %s';
$strAnalyzeTable = 'Analizēt tabulu';
$strAnd = 'Un';
$strAny = 'Jebkurš';
$strAnyHost = 'Jebkurš hosts';
$strAnyUser = 'Jebkurš lietotājs';
$strArabic = 'Arābu';
$strArmenian = 'Armēņu';
$strAscending = 'Augošā secībā';
$strAtBeginningOfTable = 'Tabulas sākumā';
$strAtEndOfTable = 'Tabulas beigās';
$strAttr = 'Atribūti';
$strAutodetect = 'Noteikt automātiski';
$strAutomaticLayout = 'Automātiskais izvietojums';

$strBack = 'Atpakaļ';
$strBaltic = 'Baltijas';
$strBeginCut = 'IZGRIEZT NO ŠĪS VIETAS';
$strBeginRaw = 'RINDAS SĀKUMS';
$strBinary = 'Binārais';
$strBinaryDoNotEdit = 'Binārais - netiek labots';
$strBookmarkAllUsers = 'Dot ikvienam lietotājam pieeju šai grāmatzīmei';
$strBookmarkDeleted = 'Ieraksts tika dzēsts.';
$strBookmarkLabel = 'Nosaukums';
$strBookmarkOptions = 'Grāmatzīmju opcijas';
$strBookmarkQuery = 'Saglabātie SQL vaicājumi';
$strBookmarkThis = 'Saglabāt šo SQL vaicājumu';
$strBookmarkView = 'Tikai apskatīt';
$strBrowse = 'Apskatīt';
$strBrowseForeignValues = 'Pārlūkot ārējās vērtības';
$strBulgarian = 'Bulgāru';
$strBzError = 'phpMyAdmin nevarēja saarhivēt failu dēļ bojāta Bz2 paplašinājuma šajā php versijā. Stingri rekomendējam uzstādīt <code>$cfg[\'BZipDump\']</code> direktīvu Jūsu phpMyAdmin konfigurācijas failā uz <code>FALSE</code>. Ja vēlaties lietot Bz2 kompresijas iespējas, Jums jāuzliek jaunāka php versija. Skatīt php bug report %s sīkākai informācijai.';
$strBzip = 'Arhivēts ar bzip';

$strCSVOptions = 'CSV opcijas';
$strCannotLogin = 'Nevar pieslēgties MySQL serverim';
$strCantLoad = 'nevar ielādēt paplašinājumu %s,<br />lūdzu pārbaudiet PHP konfigurāciju';
$strCantLoadRecodeIconv = 'Nevar ielādēt iconv vai recode paplašinājumu, kas ir nepieciešams rakstzīmju konvertācijai, lūdzu nokonfigurējiet php, lai varētu lietot šos paplašinājumus, vai arī atslēdziet rakstzīmju konvertāciju phpMyAdmin konfigurācijā.';
$strCantRenameIdxToPrimary = 'Nevar pārsaukt indeksu par PRIMARY!';
$strCantUseRecodeIconv = 'Nevar lietot iconv, libiconv vai recode_string funkciju, bet php saka, ka paplašinājums ir ielādēts. Pārbaudiet Jūsu php konfigurāciju.';
$strCardinality = 'Kardinalitāte';
$strCarriage = 'Rindas nobeiguma simbols: \\r';
$strCaseInsensitive = 'reģistrnejutīgs';
$strCaseSensitive = 'reģistrjutīgs';
$strCentralEuropean = 'Centrāleiropas';
$strChange = 'Labot';
$strChangeCopyMode = 'Izveidot jaunu lietotāju ar tādām pašām privilēģijām un ...';
$strChangeCopyModeCopy = '... paturēt veco lietotāju.';
$strChangeCopyModeDeleteAndReload = ' ... dzēst veco lietotāju no lietotāju tabulas, un pēc tam pārlādēt privilēģijas.';
$strChangeCopyModeJustDelete = ' ... dzēst veco lietotāju no lietotāju tabulas.';
$strChangeCopyModeRevoke = ' ... atņemt vecajam lietotājam visas aktīvās privilēģijas, un pēc tam dzēst viņu.';
$strChangeCopyUser = 'Mainīt piekļuves informāciju / Klonēt lietotāju';
$strChangeDisplay = 'Izvēlieties, kuru lauku rādīt';
$strChangePassword = 'Mainīt paroli';
$strCharset = 'Kodējums';
$strCharsetOfFile = 'Tabulas kodējums:';
$strCharsets = 'Rakstzīmju kodējumi';
$strCharsetsAndCollations = 'Rakstzīmju kodējumi un izkārtojumi';
$strCheckAll = 'Iezīmēt visu';
$strCheckOverhead = 'Pārbaudīt pārpildītos';
$strCheckPrivs = 'Pārbaudīt privilēģijas';
$strCheckPrivsLong = 'Pārbaudīt privilēģijas uz datubāzi &quot;%s&quot;.';
$strCheckTable = 'Pārbaudīt tabulu';
$strChoosePage = 'Izvēlieties lapu redigēšanai';
$strColComFeat = 'Rādu kolonnu komentārus';
$strCollation = 'Izkārtojumi';
$strColumnNames = 'Kolonnu nosaukumi';
$strColumnPrivileges = 'Kolonnu specifiskās privilēģijas';
$strCommand = 'Komanda';
$strComments = 'Komentāri';
$strCompleteInserts = 'Pilnas INSERT izteiksmes';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nevar nolasīt Jūsu konfigurācijas failu!<br />Tas var notikt, ja PHP atrod tajā kļūda, vai arī PHP nevar atrast so failu.<br />Mēginiet izsaukt konfigurācijas failu tieši, klikškinot linku zemāk un lasiet PHP pazinojumu par kļūdām. Vairākumā gadījumu kaut kur pietrukst pēdina vai semikols.<br />Ja Jūs redzat tukšu lapu, viss ir kārtībā.';
$strConfigureTableCoord = 'Lūdzu konfigurējiet koordinātes tabulai %s';
$strConnections = 'Konekcijas';
$strConstraintsForDumped = 'Ierobežojumi izmestām tabulām';
$strConstraintsForTable = 'Ierobežojumi tabulai';
$strCookiesRequired = 'Šī lapa nestrādās korekti, ja \'Cookies\' ir atslēgtas Jūsu pārlūkprogrammas konfigurācijā.';
$strCopyTable = 'Kopēt tabulu uz (datubāze<b>.</b>tabula):';
$strCopyTableOK = 'Tabula %s tika pārkopēta uz %s.';
$strCopyTableSameNames = 'Nevar nokopēt tabulu uz viņu pašu!';
$strCouldNotKill = 'phpMyAdmin nevarēja nogalināt procesu %s. Iespējams, ka tas jau agrāk tika izbeigts.';
$strCreate = 'Izveidot';
$strCreateIndex = 'Izveidot indeksu uz&nbsp;%s&nbsp;laukiem';
$strCreateIndexTopic = 'Izveidot jaunu indeksu';
$strCreateNewDatabase = 'Izveidot jaunu datubāzi';
$strCreateNewTable = 'Izveidot jaunu tabulu datubāzē %s';
$strCreatePage = 'Izveidot jaunu lapu';
$strCreatePdfFeat = 'PDF failu izveide';
$strCreationDates = 'Izveidošanas/Atjaunošanas/Piekļuves datumi';
$strCriteria = 'Kritērijs';
$strCroatian = 'Horvātu';
$strCyrillic = 'Kirilisks';
$strCzech = 'Čehu';

$strDBComment = 'Datubāzes komentārs: ';
$strDBGContext = 'Konteksts';
$strDBGContextID = 'Konteksta ID';
$strDBGHits = 'Apmeklējumi';
$strDBGLine = 'Līnija';
$strDBGMaxTimeMs = 'Maks. laiks, ms';
$strDBGMinTimeMs = 'Min. laiks, ms';
$strDBGModule = 'Modulis';
$strDBGTimePerHitMs = 'Viena apmeklējuma laiks, ms';
$strDBGTotalTimeMs = 'Laiks kopā, ms';
$strDanish = 'Dāņu';
$strData = 'Dati';
$strDataDict = 'Datu vārdnīca';
$strDataOnly = 'Tikai dati';
$strDatabase = 'Datubāze';
$strDatabaseExportOptions = 'Datubāzu eksporta opcijas';
$strDatabaseHasBeenDropped = 'Datubāze %s tika izdzēsta.';
$strDatabaseNoTable = 'Šajā datubāzē nav tabulu!';
$strDatabases = 'Datubāzes';
$strDatabasesDropped = '%s datubāzes tika veiksmīgi dzēstas.';
$strDatabasesStats = 'Datubāzu statistika';
$strDatabasesStatsDisable = 'Izslēgt statistiku';
$strDatabasesStatsEnable = 'Ieslēgt statistiku';
$strDatabasesStatsHeavyTraffic = 'Piezīme: Datubāzes statistikas ieslēgšana šeit var izsaukt palielināto datu apmaiņu starp webserveri un MySQL serveri.';
$strDbPrivileges = 'Datubāžu specifiskās privilēģijas';
$strDbSpecific = 'datubāzei specifisks';
$strDefault = 'Noklusēts';
$strDefaultValueHelp = 'Noklusētajām vērtībām, lūdzu ievadiet tikai pašu vertību, bez izsargāšanās ar atpakaļējo slīpsvītru vai pēdiņām, lietojot šo formatu: a';
$strDelOld = 'Tekošajā lapā ir atsauces uz tabulām, kas vairs neeksistē. Vai Jūs gribat dzēst šīs atsauces?';
$strDelayedInserts = 'Lietot aizturētos INSERT';
$strDelete = 'Dzēst';
$strDeleteAndFlush = 'Dzēst lietotājus, un pēc tam pārlādēt privilēģijas.';
$strDeleteAndFlushDescr = 'Tas ir labākais veids, bet privilēģiju pārlādēšana var paņemt zināmu laiku.';
$strDeleted = 'Ieraksts tika dzēsts';
$strDeletedRows = 'Ieraksti dzēsti:';
$strDeleting = 'Dzēšam %s';
$strDescending = 'Dilstošā secībā';
$strDescription = 'Apraksts';
$strDictionary = 'vārdnīca';
$strDisabled = 'Izslēgts';
$strDisplayFeat = 'Rādīt iespējas';
$strDisplayOrder = 'Attēlošanas secība:';
$strDisplayPDF = 'Rādīt PDF shēmu';
$strDoAQuery = 'Izpildīt "vaicājumu pēc parauga" (aizstājējzīme: "%")';
$strDoYouReally = 'Vai Jūs tiešām gribat ';
$strDocu = 'Dokumentācija';
$strDrop = 'Likvidēt';
$strDropSelectedDatabases = 'Dzēst iezīmētās datubāzes';
$strDropUsersDb = 'Dzēst datubāzes, kurām ir tādi paši vārdi, kā lietotājiem.';
$strDumpSaved = 'Damps tika saglabāts failā %s.';
$strDumpXRows = 'Saglabāt %s rindas, sākot ar %s.';
$strDumpingData = 'Dati tabulai';
$strDynamic = 'dinamisks';

$strEdit = 'Labot';
$strEditPDFPages = 'Labot PDF lapas';
$strEditPrivileges = 'Mainīt privilēģijas';
$strEffective = 'Efektīvs';
$strEmpty = 'Iztukšot';
$strEmptyResultSet = 'MySQL atgrieza tukšo rezultātu (0 rindas).';
$strEnabled = 'Ieslēgts';
$strEnd = 'Beigas';
$strEndCut = 'IZGRIEZT LĪDZ ŠAI VIETAI';
$strEndRaw = 'RINDAS BEIGAS';
$strEnglish = 'Angļu';
$strEnglishPrivileges = ' Piezīme: MySQL privilēģiju apzīmējumi tiek rakstīti angļu valodā ';
$strError = 'Kļūda';
$strEstonian = 'Igauņu';
$strExcelEdition = 'Excel redakcija';
$strExcelOptions = 'Excel opcijas';
$strExecuteBookmarked = 'Izpildīt iegrāmatoto vaicājumu';
$strExplain = 'Izskaidrot SQL';
$strExport = 'Eksports';
$strExtendedInserts = 'Paplašinātas INSERT izteiksmes';
$strExtra = 'Ekstras';

$strFailedAttempts = 'Neveiksmīgi mēģinājumi';
$strField = 'Lauks';
$strFieldHasBeenDropped = 'Lauks %s tika izdzēsts';
$strFields = 'Lauki';
$strFieldsEmpty = ' Lauku skaits ir nulle! ';
$strFieldsEnclosedBy = 'Lauki iekļauti iekš';
$strFieldsEscapedBy = 'Glābjoša (escape) rakstzīme ir';
$strFieldsTerminatedBy = 'Lauki atdalīti ar';
$strFileAlreadyExists = 'Fails %s jau eksistē uz servera. Lūdzu nomainiet faila nosaukumu vai atzīmējiet failu pārrakstīšanas opciju.';
$strFileCouldNotBeRead = 'Nevar nolasīt failu';
$strFileNameTemplate = 'Faila nosaukuma šablons';
$strFileNameTemplateHelp = 'Lietojiet __DB__ datubāzes nosaukumam, __TABLE__ tabulas nosaukumam un funkcijas %sstrftime%s opcijas laika norādīsanai, faila paplašinājums tiks automātiski pievienots. Jebkāds cits teksts tiks atstāts bez izmaiņām.';
$strFileNameTemplateRemember = 'atcerēties šablonu';
$strFixed = 'fiksēts';
$strFlushPrivilegesNote = 'Piezīme: phpMyAdmin saņem lietotāju privilēģijas pa taisno no MySQL privilēģiju tabilām. Šo tabulu saturs var atšķirties no privilēģijām, ko lieto serveris, ja tur tika veikti labojumi. Šajā gadījumā ir nepieciešams %spārlādēt privilēģijas%s pirms Jūs turpināt.';
$strFlushTable = 'Atsvaidzināt tabulu ("FLUSH")';
$strFormEmpty = 'Formā trūkst vērtību!';
$strFormat = 'Formats';
$strFullText = 'Pilni teksti';
$strFunction = 'Funkcija';

$strGenBy = 'Uzģenerēja';
$strGenTime = 'Izveidošanas laiks';
$strGeneralRelationFeat = 'Galvenās relāciju īpašības';
$strGerman = 'Vācu';
$strGlobal = 'globāls';
$strGlobalPrivileges = 'Globālās privilēģijas';
$strGlobalValue = 'Globālā vērtība';
$strGo = 'Aiziet!';
$strGrantOption = 'Piešķirt';
$strGreek = 'Grieķu';
$strGzip = 'Arhivēts ar gzip';

$strHasBeenAltered = 'tika modificēta.';
$strHasBeenCreated = 'tika izveidota.';
$strHaveToShow = 'Izvēlieties vismaz vienu kolonnu attēlošanai';
$strHebrew = 'Ebreju';
$strHome = 'Sākumlapa';
$strHomepageOfficial = 'Oficiālā phpMyAdmin mājaslapa';
$strHost = 'Hosts';
$strHostEmpty = 'Hosts nav norādīts!';
$strHungarian = 'Ungāru';

$strId = 'ID';
$strIdxFulltext = 'Pilni teksti';
$strIfYouWish = 'Ja Jūs vēlaties ielādēt tikai dažas tabulas kolonnas, norādiet to nosaukumus, atdalot tos ar komatu.';
$strIgnore = 'Ignorēt';
$strIgnoringFile = 'Ignorējam failu %s';
$strImportDocSQL = 'Importēt docSQL failus';
$strImportFiles = 'Importēt failus';
$strImportFinished = 'Imports pabeigts';
$strInUse = 'lietošanā';
$strIndex = 'Indekss';
$strIndexHasBeenDropped = 'Indekss %s tika izdzēsts';
$strIndexName = 'Indeksa nosaukums&nbsp;:';
$strIndexType = 'Indeksa tips&nbsp;:';
$strIndexes = 'Indeksi';
$strInnodbStat = 'InnoDB statuss';
$strInsecureMySQL = 'Jūsu konfigurācijas fails satur iestādījumus (lietotājs "root" bez paroles), kas atbilst noklusētajam MySQL priviliģētajam lietotājam. Jūsu MySQL serveris strādā ar šo noklusēto variantu, ir atvērts uzbrukumiem, un Jums tiešām jāaiztaisa šis drošības caurums.';
$strInsert = 'Pievienot';
$strInsertAsNewRow = 'Ievietot kā jaunu rindu';
$strInsertNewRow = 'Pievienot jaunu rindu';
$strInsertTextfiles = 'Ievietot tabulā datus no teksta faila';
$strInsertedRowId = 'Ievietotās rindas id:';
$strInsertedRows = 'Rindas pievienotas:';
$strInstructions = 'Instrukcijas';
$strInternalNotNecessary = '* Iekšējā relācija nav nepieciešama, kad tā eksistē arī iekš InnoDB.';
$strInternalRelations = 'Iekšējās relācijas';

$strJapanese = 'Japāņu';
$strJumpToDB = 'pāriet pie datubāzes &quot;%s&quot;.';
$strJustDelete = 'Dzēst lietotājus no privilēģiju tabulām.';
$strJustDeleteDescr = '&quot;Dzēstie&quot; lietotāji saglabā spēju piekļūt serverim kā parasti, līdz privilēģijas tiek pārlādētas.';

$strKeepPass = 'Nemainīt paroli';
$strKeyname = 'Atslēgas nosaukums';
$strKill = 'Nogalināt';
$strKorean = 'Korejiešu';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX opcijas';
$strLandscape = 'Landscape';
$strLatexCaption = 'Tabulas virsraksts';
$strLatexContent = 'Tabulas __TABLE__ saturs';
$strLatexContinued = '(turpinājums)';
$strLatexContinuedCaption = 'Tabulas virsraksta turpinājums';
$strLatexIncludeCaption = 'Iekļaut tabulas virsrakstu';
$strLatexLabel = 'Etiķetes atslēga';
$strLatexStructure = 'Tabulas __TABLE__ struktūra';
$strLengthSet = 'Garums/Vērtības*';
$strLimitNumRows = 'Rindu skaits vienā lapā';
$strLineFeed = 'Rindas beigu simbols: \\n';
$strLinesTerminatedBy = 'Rindas atdalītas ar';
$strLinkNotFound = 'Links nav atrasts';
$strLinksTo = 'Linki uz';
$strLithuanian = 'Lietuviešu';
$strLoadExplanation = 'Labākā metode ir izvēlēta pēc noklusējuma, bet Jūs varat mainīt to neveiksmes gadījumā.';
$strLoadMethod = 'LOAD metode';
$strLocalhost = 'Lokāls';
$strLocationTextfile = 'Teksta faila atrašanās vieta';
$strLogPassword = 'Parole:';
$strLogServer = 'Serveris';
$strLogUsername = 'Lietotājvārds:';
$strLogin = 'Ieiet';
$strLoginInformation = 'Piekļuves informācija';
$strLogout = 'Iziet';

$strMIME_MIMEtype = 'MIME tips';
$strMIME_available_mime = 'Pieejamie MIME tipi';
$strMIME_available_transform = 'Pieejamās transformācijas';
$strMIME_description = 'Apraksts';
$strMIME_nodescription = 'Šai transformācijai nav apraksta.<br />Jautājiet autoram, ko %s dara.';
$strMIME_transformation = 'Pārlūkprogrammas transformācija';
$strMIME_transformation_note = 'Lai iegūtu pieejamo transformāciju opcijas un to MIME tipu transformācijas, uzklikšķiniet uz %stransformāciju apraksti%s';
$strMIME_transformation_options = 'Transformācijas opcijas';
$strMIME_transformation_options_note = 'Lūdzu ievadiet transformāciju opciju vērtības, lietojot šo formatu: \'a\',\'b\',\'c\'...<br />Ja Jums jālieto atpakaļējā slīpsvītra ("\") vai vienkāršā pēdiņa ("\'") starp šīm vērtībām, lieciet tās priekšā vēl vienu atpakaļējo slīpsvītru (piemēram \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME tipiem, kas parādīti slīprakstā, nav atsevišķas transformācijas funkcijas';
$strModifications = 'Labojumi tika saglabāti';
$strModify = 'Labot';
$strModifyIndexTopic = 'Labot indeksu';
$strMoreStatusVars = 'Vairāk statusa mainīgie';
$strMoveTable = 'Pārvietot tabulu uz (datubāze<b>.</b>tabula):';
$strMoveTableOK = 'Tabula %s tika pārvietota uz %s.';
$strMoveTableSameNames = 'Nevar pārvietot tabulu uz viņu pašu!';
$strMultilingual = 'daudzvalodu';
$strMustSelectFile = 'Lūdzu izvēlieties failu, kuru Jūs gribat ievietot.';
$strMySQLCharset = 'MySQL kodējums';
$strMySQLReloaded = 'MySQL serveris tika pārlādēts.';
$strMySQLSaid = 'MySQL teica: ';
$strMySQLServerProcess = 'MySQL %pma_s1% strādā uz %pma_s2%, lietotājs %pma_s3%';
$strMySQLShowProcess = 'Parādīt procesus';
$strMySQLShowStatus = 'Parādīt MySQL izpildes laika informāciju';
$strMySQLShowVars = 'Parādīt MySQL sistēmas mainīgos';

$strName = 'Nosaukums';
$strNext = 'Nākamie';
$strNo = 'Nē';
$strNoDatabases = 'Nav datubāzu';
$strNoDatabasesSelected = 'Datubāze nav izvēlēta.';
$strNoDescription = 'Bez apraksta';
$strNoDropDatabases = '"DROP DATABASE" komanda ir aizliegta.';
$strNoExplain = 'Neizskaidrot SQL';
$strNoFrames = 'phpMyAdmin ir vairāk draudzīgs <b>freimu atbalstošām</b> pārlūkprogrammām.';
$strNoIndex = 'Nav definēti indeksi!';
$strNoIndexPartsDefined = 'Nav definēto indeksa daļu!';
$strNoModification = 'Netika labots';
$strNoOptions = 'Šim formātam nav opciju';
$strNoPassword = 'Nav paroles';
$strNoPermission = 'Web serverim nav tiesību rakstīt failā %s.';
$strNoPhp = 'Bez PHP koda';
$strNoPrivileges = 'Nav privilēģiju';
$strNoQuery = 'Nav SQL vaicājuma!';
$strNoRights = 'Jums nav pietiekoši tiesību, lai atrastos šeit tagad!';
$strNoSpace = 'Nepietiek vietas, lai saglabātu failu %s.';
$strNoTablesFound = 'Tabulas nav atrastas šajā datubāzē.';
$strNoUsersFound = 'Lietotāji netika atrasti.';
$strNoValidateSQL = 'Nepārbaudīt SQL';
$strNone = 'Nav';
$strNotNumber = 'Tas nav numurs!';
$strNotOK = 'nav OK';
$strNotSet = 'Tabula <b>%s</b> nav atrasta vai nav atzīmeta iekš %s';
$strNotValidNumber = ' nav derīgs lauku skaits!';
$strNull = 'Nulle';
$strNumSearchResultsInTable = '%s rezultāti tabulā <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kopumā:</b> <i>%s</i> rezultāti';
$strNumTables = 'Tabulas';

$strOK = 'Labi';
$strOftenQuotation = 'Parasti pēdiņas. NEOBLIGĀTS nozīmē, ka tikai \'char\' un \'varchar\' tipa lauki tiek norobežoti ar šo simbolu.';
$strOperations = 'Darbības';
$strOptimizeTable = 'Optimizēt tabulu';
$strOptionalControls = 'Neobligāts. Nosaka, kā rakstīt vai lasīt speciālās rakstzīmes.';
$strOptionally = 'NEOBLIGĀTS';
$strOr = 'Vai';
$strOverhead = 'Pārtēriņš';
$strOverwriteExisting = 'Pārrakstīt eksistējošos failus';

$strPHP40203 = 'Jūs lietojat PHP versiju 4.2.3, kurai ir nopietna kļūda daudzbaitu rindiņu funkcijās (mbstring). Skatīt PHP bug report 19404. Sī PHP versija nav rekomendējama lietošanai ar phpMyAdmin.';
$strPHPVersion = 'PHP Versija';
$strPageNumber = 'Lapas numurs:';
$strPaperSize = 'Papīra izmērs';
$strPartialText = 'Daļēji teksti';
$strPassword = 'Parole';
$strPasswordChanged = 'Lietotāja %s parole tika veiksmīgi mainīta.';
$strPasswordEmpty = 'Parole nav norādīta!';
$strPasswordNotSame = 'Paroles nesakrīt!';
$strPdfDbSchema = 'Datubāzes "%s" shēma, %s. lapa';
$strPdfInvalidTblName = 'Tabula "%s" neeksistē!';
$strPdfNoTables = 'Nav tabulu';
$strPerHour = 'stundā';
$strPerMinute = 'minūtē';
$strPerSecond = 'sekundē';
$strPhoneBook = 'telefonu grāmata';
$strPhp = 'Izveidot PHP kodu';
$strPmaDocumentation = 'phpMyAdmin dokumentācija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktīvai ir JĀBŪT nodefinētai Jūsu konfigurācijas failā!';
$strPortrait = 'Portrait';
$strPos1 = 'Sākums';
$strPrevious = 'Iepriekšējie';
$strPrimary = 'Primārā';
$strPrimaryKeyHasBeenDropped = 'Primārā atslēga tika izdzēsta';
$strPrimaryKeyName = 'Primārās atslēgas nosaukumam jābūt... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>jābūt</b> tikai un <b>vienīgi</b> primārās atslēgas indeksa nosaukumam!)';
$strPrint = 'Drukāt';
$strPrintView = 'Izdrukas versija';
$strPrintViewFull = 'Drukas skats (ar pilniem tekstiem)';
$strPrivDescAllPrivileges = 'Iekļauj visas privilēģijas, izņemot GRANT.';
$strPrivDescAlter = 'Ļauj mainīt esošo tabulu struktūru.';
$strPrivDescCreateDb = 'Ļauj veidot jaunas datubāzes un tabulas.';
$strPrivDescCreateTbl = 'Ļauj veidot jaunas tabulas.';
$strPrivDescCreateTmpTable = 'Ļauj veidot pagaidu tabulas.';
$strPrivDescDelete = 'Ļauj dzēst datus.';
$strPrivDescDropDb = 'Ļauj dzēst datubāzes un tabulas.';
$strPrivDescDropTbl = 'Ļauj dzēst tabulas.';
$strPrivDescExecute = 'Ļauj palaist saglabātās procedūras; vēl nestrādā šajā MySQL versijā.';
$strPrivDescFile = 'Ļauj importēt/eksportēt datus no/uz failiem.';
$strPrivDescGrant = 'Ļauj pievienot lietotājus un privilēģijas bez privilēģiju tabulu pārlādēšanas.';
$strPrivDescIndex = 'Ļauj veidot un dzēst indeksus.';
$strPrivDescInsert = 'Ļauj ievietot un mainīt datus.';
$strPrivDescLockTables = 'Ļauj bloķēt tabulas tekošajai darbībai.';
$strPrivDescMaxConnections = 'Ierobežo jauno konekciju skaitu, ko lietotājs var atvērt stundas laikā.';
$strPrivDescMaxQuestions = 'Ierobežo vaicājumu skaitu, ko lietotājs var mosūtīt uz serveri stundas laikā.';
$strPrivDescMaxUpdates = 'Ierobežo komandu skaitu, kas maina kas maina tabulas vai datubāzes, ko lietotājs var izpildīt stundas laikā.';
$strPrivDescProcess3 = 'Ļauj nogalināt citu lietotāju procesus.';
$strPrivDescProcess4 = 'Ļauj apskatīt pieprasījumu un procesu sarakstus.';
$strPrivDescReferences = 'Nedarbojas šajā MySQL versijā.';
$strPrivDescReload = 'Ļauj prlādēt servera iestādījumus un iztukšot servera kešu.';
$strPrivDescReplClient = 'Dod lietotājam tiesības jautāt, kur ir replikācijas oriģināli / kopijas.';
$strPrivDescReplSlave = 'Nepieciešams replikāciju kopijām.';
$strPrivDescSelect = 'Ļauj lasīt datus.';
$strPrivDescShowDb = 'Dod pieeju pilnam datubāzu sarakstam.';
$strPrivDescShutdown = 'Ļauj apstādināt serveri.';
$strPrivDescSuper = 'Ļauj pieslēgties pat tad, ja ir sasniegts maksimālais konekciju skaits; Nepieciešams vairumam administratīvo operāciju, kā globālo mainīgo maiņa vai citu lietotāju procesu nogalināšana.';
$strPrivDescUpdate = 'Ļauj mainīt datus.';
$strPrivDescUsage = 'Nav privilēģiju.';
$strPrivileges = 'Privilēģijas';
$strPrivilegesReloaded = 'Privilēģijas tika veiksmīgi pārlādētas.';
$strProcesslist = 'Procesu saraksts';
$strProperties = 'Īpašības';
$strPutColNames = 'Likt kolonnu nosaukumus pirmajā rindā';

$strQBE = 'Vaicājums pēc parauga';
$strQBEDel = 'Dzēst';
$strQBEIns = 'Ielikt';
$strQueryFrame = 'Vaicājuma logs';
$strQueryOnDb = 'SQL vaicājums uz datubāzes <b>%s</b>:';
$strQuerySQLHistory = 'SQL vēsture';
$strQueryStatistics = '<b>Pieprasījumu statistika</b>: %s pieprasījumi tika nosūtīti uz serveri kopš tā palaišanās brīža.';
$strQueryTime = 'Vaicājums ilga %01.4f s';
$strQueryType = 'Vaicājuma tips';
$strQueryWindowLock = 'Nepārrakstīt šo vaicājumu ārpus šī loga';

$strReType = 'Atkārtojiet';
$strReceived = 'Saņemts';
$strRecords = 'Ieraksti';
$strReferentialIntegrity = 'Pārbaudīt referenciālo integritāti:';
$strRelationNotWorking = 'Papildiespējas darbam ar saistītām tabulām tika izslēgtas. Lai uzzinātu kāpēc, klikškiniet %sšeit%s.';
$strRelationView = 'Relāciju pārskats';
$strRelationalSchema = 'Relāciju shēma';
$strRelations = 'Relācijas';
$strReloadFailed = 'Nesanāca pārlādēt MySQL serveri.';
$strReloadMySQL = 'Pārlādēt MySQL serveri';
$strReloadingThePrivileges = 'Pārlādējam privilēģijas';
$strRemoveSelectedUsers = 'Dzēst izvēlētos lietotājus';
$strRenameTable = 'Pārsaukt tabulu uz';
$strRenameTableOK = 'Tabula %s tika pārsaukta par %s';
$strRepairTable = 'Restaurēt tabulu';
$strReplace = 'Aizvietot';
$strReplaceNULLBy = 'Aizvietot NULL ar';
$strReplaceTable = 'Aizvietot tabulas datus ar datiem no faila';
$strReset = 'Atcelt';
$strResourceLimits = 'Resursu ierobežojumi';
$strRevoke = 'Atsaukt';
$strRevokeAndDelete = 'Atņemt visas aktīvās privilēģijas lietotājiem, un pēc tam dzēst tos.';
$strRevokeAndDeleteDescr = 'Lietotāji saglabā iespeju lietot datubāzes, līdz privilēģijas tiek pārlādētas.';
$strRevokeMessage = 'Jūs atņēmāt privilēgijas lietotājam %s';
$strRowLength = 'Rindas garums';
$strRowSize = ' Rindas izmērs ';
$strRows = 'Rindas';
$strRowsFrom = 'rindas sākot no';
$strRowsModeFlippedHorizontal = 'horizontālā (pagriezti virsraksti)';
$strRowsModeHorizontal = 'horizontālā';
$strRowsModeOptions = '%s skatā un atkārtot virsrakstus ik pēc %s rindām';
$strRowsModeVertical = 'vertikālā';
$strRowsStatistic = 'Rindas statistika';
$strRunQuery = 'Izpildīt vaicājumu';
$strRunSQLQuery = 'Izpildīt SQL vaicājumu(s) uz datubāzes %s';
$strRunning = 'atrodas uz %s';
$strRussian = 'Krievu';

$strSQL = 'SQL';
$strSQLExportType = 'Eksporta veids';
$strSQLOptions = 'SQL opcijas';
$strSQLParserBugMessage = 'Iespējams, ka Jūs esat atraduši kļūdu SQL interpretatorā. Lūdzu apskatiet Jūsu vaicājumu citīgāk, un pārbaudiet, ka pēdiņas ir pareizas un nav sajauktas. Cits kļūdas iemesls var būt tas, ka Jūs atsūtījāt failu ar bināro vērtību ārpus pēdiņās iekļautā teksta lauka. Jūs varat arī izmēģināt savu vaicājumu MySQL komandrindas interfeisā. MySQL servera kļūdas paziņojums zemāk, ja tāds ir, var arī palīdzēt Jums diagnosticēt problēmu. Ja problēma paliek, vai arī iekš phpMyAdmin kļūda ir, bet komandrindā nav, lūdzu samaziniet Jūsu SQL vaicājumu līdz vienkāršam vaicājumam kas izsauc problēmas, un atsūtiet mums ziņojumu par kļūdu, iekļaujot tajā datus no IZGRIEZT sekcijas zemāk:';
$strSQLParserUserError = 'Izkatās, ka Jūsu SQL vaicajumā ir kļūda. MySQL servera kļūdas pazinojums zemāk, ja tāds ir, var arī palīdzet Jums diagnosticēt problēmu.';
$strSQLQuery = 'SQL vaicājums';
$strSQLResult = 'SQL rezultāts';
$strSQPBugInvalidIdentifer = 'Nederīgs identifikators';
$strSQPBugUnclosedQuote = 'Neaizvērtas pēdiņas';
$strSQPBugUnknownPunctuation = 'Nezināmā punktuācijas zīme';
$strSave = 'Saglabāt';
$strSaveOnServer = 'Saglabāt uz servera direktorijā %s';
$strScaleFactorSmall = 'Mērogošanas faktors ir pārāk mazs, lai shēma ietilptu vienā lapā';
$strSearch = 'Meklēt';
$strSearchFormTitle = 'Meklēt datubāzē';
$strSearchInTables = 'Tabulā(s):';
$strSearchNeedle = 'Vārdi vai vērtības meklēšanai (aizstājējzīme: "%"):';
$strSearchOption1 = 'kaut viens no vārdiem';
$strSearchOption2 = 'visi vārdi';
$strSearchOption3 = 'precīza frāze';
$strSearchOption4 = 'kā regulārā izteiksme';
$strSearchResultsFor = 'Meklēšanas rezultāti "<i>%s</i>" %s:';
$strSearchType = 'Atrast:';
$strSecretRequired = 'Konfigurācijas fails tagad prasa slepeno paroli (blowfish_secret).';
$strSelectADb = 'Lūdzu izvēlieties datubāzi';
$strSelectAll = 'Iezīmēt visu';
$strSelectFields = 'Izvēlieties laukus (kaut vienu):';
$strSelectNumRows = 'vaicājumā';
$strSelectTables = 'Izvēlieties tabulas';
$strSend = 'Saglabāt kā failu';
$strSent = 'Nosūtīts';
$strServer = 'Serveris';
$strServerChoice = 'Servera izvēle';
$strServerStatus = 'Izpildes laika informācija';
$strServerStatusUptime = 'Šis MySQL serveris strādā %s. Tas tika palaists %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Mainīgie';
$strServerTrafficNotes = '<b>Servera trafiks</b>: Šīs tabulas parāda šī MySQL servera tīkla trafika statistiku kopš tā palaišanas.';
$strServerVars = 'Servera mainīgie un konfigurācija';
$strServerVersion = 'Servera versija';
$strSessionValue = 'Sesijas vērtība';
$strSetEnumVal = 'Ja lauka tips ir "enum" vai "set", lūdzu ievadiet vērtības atbilstoši šim formatam: \'a\',\'b\',\'c\'...<br />Ja Jums vajag ielikt atpakaļējo slīpsvītru (\) vai vienkāršo pēdiņu (\') kādā no šīm vērtībām, lieciet tās priekšā atpakaļējo slīpsvītru (piemēram, \'\\\\xyz\' vai \'a\\\'b\').';
$strShow = 'Rādīt';
$strShowAll = 'Rādīt visu';
$strShowColor = 'Rādīt krāsas';
$strShowDatadictAs = 'Datu vārdnīcas formats';
$strShowFullQueries = 'Rādīt pilnos vaicājumus';
$strShowGrid = 'Rādīt režģi';
$strShowPHPInfo = 'Parādīt PHP informāciju';
$strShowTableDimension = 'Rādit tabulu izmērus';
$strShowTables = 'Rādīt tabulas';
$strShowThisQuery = ' Rādīt šo vaicājumu šeit atkal ';
$strShowingRecords = 'Parādu rindas';
$strSimplifiedChinese = 'Vienkāršota ķīniešu';
$strSingly = '(vienkārši)';
$strSize = 'Izmērs';
$strSort = 'Kārtošana';
$strSortByKey = 'Kārtot pēc atslēgas';
$strSpaceUsage = 'Diska vietas lietošana';
$strSplitWordsWithSpace = 'Vārdi ir atdalīti ar tukšumu (" ").';
$strStatCheckTime = 'Pēdējā pārbaude';
$strStatCreateTime = 'Izveidošana';
$strStatUpdateTime = 'Pēdējā atjaunošana';
$strStatement = 'Parametrs';
$strStatus = 'Statuss';
$strStrucCSV = 'CSV dati';
$strStrucData = 'Struktūra un dati';
$strStrucDrop = 'Pievienot tabulu dzēšanas komandas';
$strStrucExcelCSV = 'CSV dati MS Excel formātā';
$strStrucOnly = 'Tikai struktūra';
$strStructPropose = 'Ieteikt tabulas sruktūru';
$strStructure = 'Struktūra';
$strSubmit = 'Nosūtīt';
$strSuccess = 'Jūsu SQL vaicājums tika veiksmīgi izpildīts';
$strSum = 'Kopumā';
$strSwedish = 'Zviedru';
$strSwitchToTable = 'Pārslēgties uz nokopēto tabulu';

$strTable = 'Tabula';
$strTableComments = 'Komentārs tabulai';
$strTableEmpty = 'Tabulas nosaukums nav norādīts!';
$strTableHasBeenDropped = 'Tabula %s tika izdzēsta';
$strTableHasBeenEmptied = 'Tabula %s tika iztukšota';
$strTableHasBeenFlushed = 'Tabula %s tika atsvaidzināta';
$strTableMaintenance = 'Tabulas apkalpošana';
$strTableOfContents = 'Satura rādītājs';
$strTableOptions = 'Tabulas opcijas';
$strTableStructure = 'Tabulas struktūra tabulai';
$strTableType = 'Tabulas tips';
$strTables = '%s tabula(s)';
$strTblPrivileges = 'Tabulu specifiskās privilēģijas';
$strTextAreaLength = ' Sava garuma dēļ,<br /> šis lauks var būt nerediģējams ';
$strThai = 'Taizemiešu';
$strTheContent = 'Jūsu faila saturs tika ievietots.';
$strTheContents = 'Faila saturs aizvieto izvēlētās tabulas saturu rindiņām ar identisko primārās vai unikālās atslēgas vērtību.';
$strTheTerminator = 'Lauku atdalītājs.';
$strThisHost = 'Šis hosts';
$strThisNotDirectory = 'Tā nebija direktorija';
$strThreadSuccessfullyKilled = 'Process %s tika veiksmīgi nogalināts.';
$strTime = 'Laiks';
$strToggleScratchboard = 'parādīt/noslēpt piezīmju tafeli';
$strTotal = 'kopā';
$strTotalUC = 'Kopā';
$strTraditionalChinese = 'Tradicionāla ķīniešu';
$strTraffic = 'Datu apmaiņa';
$strTransformation_image_jpeg__inline = 'Parāda klikšķināmo sīktēlu; opcijas: platums, augstums pikseļos (saglabājot oriģinālās proporcijas)';
$strTransformation_image_jpeg__link = 'Parāda linku uz šo attēlu (tieša blob lauka lajuplāde).';
$strTransformation_image_png__inline = 'Skatīties image/jpeg: kā ierindotu attēlu';
$strTransformation_text_plain__dateformat = 'Ņem TIME, TIMESTAMP vai DATETIME lauku, un formatē to izmantojot Jūsu lokālo datuma formatu. Pirmā opcija ir nobīde (stundās), kas tiks pievienota timestamp laukam (noklusētā: 0). Otrā opcija ir datuma formats, saskaņā ar PHP finkcijas strftime() parametriem.';
$strTransformation_text_plain__external = 'Tikai LINUX: Palaiž ārējo aplikāciju un padod lauka datus tās standartievadā. Atgriež aplikācijas standartizvadi. Noklusējums ir Tidy, kas izskaistina HTML kodu. Drošības apsvērumu dēļ, nepieciešams manuāli rediģēt failu libraries/transformations/text_plain__external.inc.php un ielikt rīkus, kurus Jūs atļaujat palaist. Pirmā opcija ir programmas numurs, ko Jūs vēlaties lietot, otrā opcija ir parametri šai programmai. Trešā opcija, ja ir vienāda ar 1, konvertē izvadi, izmantojot htmlspecialchars() (noklusējums ir 1). Ceturtais parametrs, ja vienāds ar 1, liek NOWRAP parametru satura šūnai, tā kā izvade tiks attēlota bez pārformatēšanas. (noklusējums ir 1)';
$strTransformation_text_plain__formatted = 'Saglabā lauka oriģinālo formatējumu. Speciālo rakstzīmju pasargāšana netiek veikta.';
$strTransformation_text_plain__imagelink = 'Parāda attēlu un linku, lauks satur faila nosauumu; pirmā opcija ir prefikss, piemēram, "http://domens.lv/", otrā opcija ir platums pikseļos, trešā ir augstums.';
$strTransformation_text_plain__link = 'Parāda attēlu un linku, lauks satur faila nosauumu; pirmā opcija ir prefikss, piemēram, "http://domens.lv/", otrā opcija ir linka nosaukums.';
$strTransformation_text_plain__substr = 'Parāda tikai virknes daļu. Pirmā opcija ir nobīde, kas nosaka, kur Jūsu teksts sākas (noklusējums 0). Otrā opcija ir atgriežamā teksta garums. Ja tukša, atgriež visu atlikušo tekstu. Trešā opcija nosaka rakstzīmes, kas tiks pievienotas apgrieztās virknes galā (noklusējums: ...) .';
$strTransformation_text_plain__unformatted = 'Parāda HTML kā HTML simbolus. HTML formatējums netiek rādīts.';
$strTruncateQueries = 'Ierobežot parādīto vaicājumu garumu';
$strTurkish = 'Turku';
$strType = 'Tips';

$strUkrainian = 'Ukraiņu';
$strUncheckAll = 'Neiezīmēt neko';
$strUnicode = 'Unikods';
$strUnique = 'Unikālais';
$strUnknown = 'nazināma';
$strUnselectAll = 'Neiezīmēt neko';
$strUpdComTab = 'Lūdzu skatieties dokumentāciju par to, kā atjaunot \'Column_comments\' tabulu';
$strUpdatePrivMessage = 'Jūs modificējāt privilēģijas objektam %s.';
$strUpdateProfileMessage = 'Profils tika modificēts.';
$strUpdateQuery = 'Atjaunot vaicājumu';
$strUpgrade = 'Jums ir jāuzliek %s %s vai jaunāks.';
$strUsage = 'Aizņem';
$strUseBackquotes = 'Lietot apostrofa simbolu [`] tabulu un lauku nosaukumiem';
$strUseHostTable = 'Lietot hostu tabulu';
$strUseTables = 'Lietot tabulas';
$strUseTextField = 'Lietot teksta lauku';
$strUseThisValue = 'Lietot šo vērtību';
$strUser = 'Lietotājs';
$strUserAlreadyExists = 'Lietotājs %s jau eksistē!';
$strUserEmpty = 'Lietotāja vārds nav norādīts!';
$strUserName = 'Lietotājvārds';
$strUserNotFound = 'Izvēlētais lietotājs nav atrasts privilēģiju tabulā.';
$strUserOverview = 'Lietotāju pārskats';
$strUsersDeleted = 'Izvēlētie lietotāji tika veiksmīgi dzēsti.';
$strUsersHavingAccessToDb = 'Lietotāji, kam ir pieja datubāzei &quot;%s&quot;';

$strValidateSQL = 'Pārbaudīt SQL';
$strValidatorError = 'Nevar inicializēt SQL pārbauditāju. Lūdzu pārbaudiet, vai Jūs esat uzinstalējuši nepieciešamos PHP paplašinājumus, kā aprakstīts %sdokumentācijā%s.';
$strValue = 'Vērtība';
$strVar = 'Mainīgais';
$strViewDump = 'Apskatīt tabulas dampu (shēmu)';
$strViewDumpDB = 'Apskatīt datubāzes dampu (shēmu)';
$strViewDumpDatabases = 'Apskatīt datubāzu dampu (shēmu)';

$strWebServerUploadDirectory = 'web servera augšupielādes direktorija';
$strWebServerUploadDirectoryError = 'Direktoija, kuru Jūs norādijāt augšupielādei, nav pieejama';
$strWelcome = 'Laipni lūgti %s';
$strWestEuropean = 'Rietumeiropas';
$strWildcard = 'aizstājējzīme';
$strWindowNotFound = 'Neizdevās atjaunot galveno pārlūkprogramas logu. Varbūt esat viņu aizvēruši, vai arī Jūsu pārlūkprogramma bloķe starplogu saskarsmi Jūsu drošības iestādījumu dēļ.';
$strWithChecked = 'Ar iezīmēto:';
$strWritingCommentNotPossible = 'Komentāra rakstīšana nav iespējama';
$strWritingRelationNotPossible = 'Relācijas rakstīšana nav iespējama';
$strWrongUser = 'Kļūdains lietotājvārds/parole. Pieeja aizliegta.';

$strXML = 'XML';

$strYes = 'Jā';

$strZeroRemovesTheLimit = 'Piezīme: Šo opciju uzstādīšana uz 0 (nulli) atceļ ierobežojumus.';
$strZip = 'Arhivēts ar zip';

$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
?>
