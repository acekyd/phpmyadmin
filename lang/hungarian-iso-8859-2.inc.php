<?php
/* $Id$ */

// Peter Bakondy <bakondyp@freemail.hu>

$charset = 'iso-8859-2';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B�jt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');
$month = array('Jan', 'Feb', 'M�rc', '�pr', 'M�j', 'J�n', 'J�l', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Le�r�s a $datefmt v�ltoz� defini�l�s�hoz:
// http://www.php.net/manual/en/function.strftime.php
$datefmt = '%Y. %B %d. %H:%M';

$timespanfmt = '%s nap, %s �ra, %s perc, %s m�sodperc'; 

$strAPrimaryKey = 'Elsodleges kulcsot hozz�adtam: %s';
$strAbortedClients = 'Megszak�tva'; 
$strAbsolutePathToDocSqlDir = '�rja be az abszol� el�r�si utat a docSQL k�nyvt�rhoz';  
$strAccessDenied = 'Hozz�f�r�s megtagadva';
$strAccessDeniedExplanation = 'A phpMyAdmin ,egpr�b�lt csatlakozni a MySQL szerverhez, de a szerver elutas�totta a kapcsolatot. Ellen"orizze a host, username �s jelsz� mez"oket a config.inc.php f�jlban, �s bizonyosodjon meg r�la, hogy ezek megfelelnek a MySQL szerver adminisztr�tor�t�l kapott inform�ci�knak.';  
$strAction = 'Parancs';
$strAddAutoIncrement = 'AUTO_INCREMENT �rt�k hozz�ad�sa';  
$strAddConstraints = 'Megszor�t�s hozz�ad�sa';  
$strAddDeleteColumn = 'Mez&#0337 Oszlopokat Hozz�ad/T�r�l';
$strAddDeleteRow = 'Krit�rium Sort Hozz�ad/T�r�l';
$strAddDropDatabase = 'DROP DATABASE hozz�ad�sa';
$strAddHeaderComment = 'Egyedi megjegyz�s hozz�ad�sa a fejl�chez (\\n t�ri a sorokat)';  
$strAddIfNotExists = 'IF NOT EXISTS hozz�ad�sa';  
$strAddIntoComments = 'Hozz�ad�s a megjegyz�shez';
$strAddNewField = '�j mez&#0337 hozz�ad�sa';
$strAddPrivilegesOnDb = 'Privil�giumok hozz�ad�sa a k�vetkez"o adatb�zison:';
$strAddPrivilegesOnTbl = 'Privil�giumok hozz�ad�sa a k�vetkez"o t�bl�n:'; 
$strAddSearchConditions = 'Keres�si felt�telek megad�sa (az "ahol" kik�t�sek):';
$strAddToIndex = 'Adj az indexhez &nbsp;%s&nbsp;oszlopot';
$strAddUser = '�j felhaszn�l� hozz�ad�sa';
$strAddUserMessage = 'Az �j felhaszn�l�t felvettem.';
$strAddedColumnComment = 'Megjegyz�s hozz�f"uzve az oszlophoz:';  
$strAddedColumnRelation = 'Kapcsolat hozz�f"uzve az oszlophoz:';  
$strAdministration = 'Adminisztr�ci�'; 
$strAffectedRows = 'Keresett sorok:';
$strAfter = '%s ut�n';
$strAfterInsertBack = 'Vissza az el&#0337z&#0337 oldalra';
$strAfterInsertNewInsert = '�j sor besz�r�sa';
$strAfterInsertSame = 'Visszat�r�s az oldalra';  
$strAll = 'Mind';
$strAllTableSameWidth = 'minden t�bla ezzel a sz�less�ggel jelenjen meg?';
$strAlterOrderBy = 'T�bla megv�ltoz�sa rendezve e szerint:';
$strAnIndex = 'Indexet hozz�adtam: %s';
$strAnalyzeTable = 'T�bla vizsg�lat';
$strAnd = '�s';
$strAny = 'B�rmely';
$strAnyHost = 'B�rmely hoszt';
$strAnyUser = 'B�rmely felhaszn�l�';
$strArabic = 'Arab';  
$strArmenian = '�rm�ny';  
$strAscending = 'N�vekv&#0337';
$strAtBeginningOfTable = 'A t�bla elej�n�l';
$strAtEndOfTable = 'A t�bla v�g�n�l';
$strAttr = 'Tulajdons�gok';
$strAutodetect = 'Automatikus felimer�s';  
$strAutomaticLayout = 'Automatikus elrendez�s';  

$strBack = 'Vissza';
$strBaltic = 'Balti';  
$strBeginCut = 'Kiv�g�s Kezdete';
$strBeginRaw = 'Feldolgozatlan Kezdete';
$strBinary = 'Bin�ris';
$strBinaryDoNotEdit = 'Bin�ris - nem szerkeszthet&#0337';
$strBookmarkAllUsers = 'Az �sszes felhaszn�l�nak enged�lyezi a hozz�f�r�st ehhez a k�nyvjelz"oh�z';  
$strBookmarkDeleted = 'A k�nyvjelzot t�r�ltem.';
$strBookmarkLabel = 'Felirat';
$strBookmarkOptions = 'K�nyvjelz"o opci�k';  
$strBookmarkQuery = 'Feljegyzett SQL-k�r�s';
$strBookmarkThis = 'Jegyezd fel az SQL-k�r�s';
$strBookmarkView = 'Csak megn�zhet&#0337';
$strBrowse = 'Tartalom';
$strBrowseForeignValues = 'Idegen kulcsok b�ng�sz�se';  
$strBulgarian = 'Bolg�r';  
$strBzError = 'A phpMyAdmin nem tudta bet�m�r�teni a dump-ot, mert nem megfelel"o a Bz2 kiterjeszt�s ebben a php verzi�ban. Er"osen aj�nlott a <code>$cfg[\'BZipDump\']</code> param�tert a phpMyAdmin konfigur�ci�s f�jlban <code>FALSE</code> �rt�kre be�ll�tani. Ha a Bz2 t�m�r�t�si elj�r�st haszn�lni szeretn�, friss�tse a php-t! Tekintse meg a %s php bug report-ot a r�szletek�rt.'; 
$strBzip = '"bzip-pel t�m�r�tve"';

$strCSVOptions = 'CSV be�ll�t�sok';
$strCalendar = 'Napt�r';  
$strCannotLogin = 'A bel�p�s a MySQL szerverre sikertelen volt';  
$strCantLoad = 'nem tudtam bet�lteni a %s kiterjeszt�st,<br />ellen"orizze a PHP konfigur�ci�t';  
$strCantLoadRecodeIconv = 'Nem tudom bet�lteni az iconv vagy recode kiterjeszt�st a karakterk�szlet-�talak�t�shoz, �ll�tsd be a php-t, hogy enged�lyezze ezeket a kiterjeszt�seket vagy tiltsd le a karakterk�szlet-�talak�t�st a phpMyAdminban.';
$strCantRenameIdxToPrimary = 'Nem tudom �tnevezni az indexet PRIMARY-v�!';
$strCantUseRecodeIconv = 'Nem tudom haszn�lni az iconv, libiconv sem a recode_string funkci�kat mialatt a kiterjeszt�s-jelent�seket be kell t�lteni. Ellen&#0337rizd a php konfigur�ci�t.';
$strCardinality = 'Sz�moss�g';
$strCarriage = 'Kocsivissza: \\r';
$strCaseInsensitive = 'bet"unagys�gra nem �rz�keny';  
$strCaseSensitive = 'bet"unagys�g-�rz�keny';  
$strCentralEuropean = 'K�z�p-eur�pai';  
$strChange = 'V�ltoztat';
$strChangeCopyMode = '�j felhaszn�l� hozz�ad�sa ezekkel a privil�giumokkal ...';  
$strChangeCopyModeCopy = '... a r�gi meg"orz�se.';  
$strChangeCopyModeDeleteAndReload = ' ... a r�gi t�rl�se a felhaszn�l�i t�bl�kb�l, �s ut�na a privil�giumok �jrat�lt�se.';  
$strChangeCopyModeJustDelete = ' ... a r�gi t�rl�se a felhaszn�l�i t�bl�kb�l.';  
$strChangeCopyModeRevoke = ' ... az �sszes akt�v privil�gium vissza�ll�t�sa a r�gib"ol, �a ut�na t�rl�s�k.';  
$strChangeCopyUser = 'Bel�p�si inform�ci� megv�ltoztat�sa / Felhaszn�l� m�sol�sa';  
$strChangeDisplay = 'V�lassz mez&#0337t a megjelen�t�shez';
$strChangePassword = 'Jelsz� megv�ltoztat�sa';
$strCharset = 'Karakterk�szlet';  
$strCharsetOfFile = 'A f�jl karakterk�szlete:';
$strCharsets = 'Karakterk�szlet';  
$strCharsetsAndCollations = 'Karakterk�szletek �s egybevet�sek';  
$strCheckAll = '�sszeset kijel�li';
$strCheckOverhead = 'Ellen"orz�s felf�ggeszt�se';  
$strCheckPrivs = 'Privil�giumok ellen"orz�se';  
$strCheckPrivsLong = 'Privil�giumok ellen"orz�se &quot;%s&quot; adatb�zison.';  
$strCheckTable = 'T�bla ellen&#0337rz�s';
$strChoosePage = 'V�lassz oldalt a szerkeszt�shez';
$strColComFeat = 'Oszlop megjegyz�sek megjelen�t�se';
$strCollation = 'Egybevet�s';  
$strColumnNames = 'Oszlop nevek';
$strColumnPrivileges = 'Oszlop-specifikus privil�giumok'; 
$strCommand = 'Parancs'; 
$strComments = 'Megjegyz�sek';
$strCommentsForTable = 'T�bla-megjegyz�sek';  
$strCompleteInserts = 'Mez&#0337neveket is hozz�adja';
$strCompression = 'T�m�r�t�s'; 
$strConfigFileError = 'A phpMyAdmin nem tudja olvasni a konfigur�ci�s f�jlt!<br />Lehet, hogy a php szintaktikai hib�t tal�lt benne, vagy nem tal�lja a f�jlt.<br />Haszn�ld az als� linket a konfigur�ci�s f�jl helyre�ll�t�s�hoz, olvasd el a kapott php hiba�zeneteket. T�bbnyire egy id�z&#0337jel vagy egy pontosvessz&#0337 hi�nyzik valahol.<br />Ha �res oldalt kapsz, minden rendben.';
$strConfigureTableCoord = '�ll�tsd be a(z) $s t�bla koordin�t�it';
$strConnectionError = 'Nem siker�lt a csatlakoz�s: �rv�nytelen be�ll�t�sok.';  
$strConnections = 'Kapcsolat'; 
$strConstraintsForDumped = 'Kik�t�sek a ki�rt t�bl�khoz';  
$strConstraintsForTable = 'Kik�t�sek a t�bl�hoz';  
$strCookiesRequired = 'A Cookie-kat most enged�lyezned kell.';
$strCopyTable = 'T�bla m�sol�sa ide (adatb�zis<b>.</b>t�bla):';
$strCopyTableOK = '%s t�bl�t ide m�soltam: %s.';
$strCopyTableSameNames = 'Nem tudom a t�bl�t ugyanarra m�solni!';  
$strCouldNotKill = 'phpMyAdmin nem tudta megsz�ntetni ez a sz�lat: %s. Meglehet, m�r v�get �rt.'; 
$strCreate = 'L�trehoz';
$strCreateIndex = 'K�sz�ts egy indexet a(z)&nbsp;%s&nbsp;. oszlopon';
$strCreateIndexTopic = '�j index l�trehoz�sa';
$strCreateNewDatabase = '�j adatb�zis l�trehoz�sa';
$strCreateNewTable = '�j t�bla l�trehoz�sa az adatb�zisban: %s';
$strCreatePage = '�j oldal k�sz�t�se';
$strCreatePdfFeat = 'PDF k�sz�t�se';
$strCreationDates = 'D�tum K�sz�t�s/M�dos�t�s/Ellen"orz�s';  
$strCriteria = 'Krit�rium';
$strCroatian = 'Horv�t';  
$strCyrillic = 'Cirill';  
$strCzech = 'Cseh';  
$strCzechSlovak = 'Szlov�k';  

$strDBComment = 'Adatb�zis megjegyz�s: ';
$strDBGContext = 'Tartalom';  
$strDBGContextID = 'Tartalom ID';  
$strDBGHits = 'Tal�lat';  
$strDBGLine = 'Vonal';  
$strDBGMaxTimeMs = 'Legnagyobb id"o, ms';  
$strDBGMinTimeMs = 'Legkisebb id"o, ms';  
$strDBGModule = 'Modul';  
$strDBGTimePerHitMs = 'Id"o/Tal�lat, ms';  
$strDBGTotalTimeMs = '�sszes id"o, ms';  
$strDBRename = 'Adatb�zis �tnevez�se: ';  
$strDanish = 'D�n';  
$strData = 'Adat';
$strDataDict = 'Adatk�nyvt�r';  
$strDataOnly = 'Csak adatok';
$strDatabase = 'Adatb�zis';
$strDatabaseEmpty = 'Az adatb�zis n�z mez"o �res!';  
$strDatabaseExportOptions = 'Adatb�zis export be�ll�t�sok';
$strDatabaseHasBeenDropped = '%s adatb�zist eldobtam.';
$strDatabaseNoTable = 'Az adatb�zis nem tartalmaz t�bl�kat!';
$strDatabases = 'adatb�zisok';
$strDatabasesDropped = '%s adatb�zist sikeresen t�r�ltem.';  
$strDatabasesStats = 'Adatb�zis statisztika';
$strDatabasesStatsDisable = 'Statistika tilt�sa';  
$strDatabasesStatsEnable = 'Statistika enged�lyez�se';  
$strDatabasesStatsHeavyTraffic = 'Megjegyz�s: az adatb�zis statisztika enged�lyez�se nagy adatforgalomhoz vezethet a webszerver �s a MySQL k�z�tt.';  
$strDbPrivileges = 'Adatb�zis-specifikus privil�giumok'; 
$strDbSpecific = 'adatb�zis-specifikus';  
$strDefault = 'Alap�rtelmezett';
$strDefaultValueHelp = 'Az alap�rtelmezett �rt�kekhez �rjon be egy egyszer"u �rt�ket, escape karakter �s id�z"ojelek n�lk�l, ezt a form�tumot k�vetve: a';  
$strDefragment = 'T�bla t�redezetts�gmentes�t�se';  
$strDelOld = 'A jelenlegi oldalon The current Page has References a t�blahivatkoz�sok m�r nem �lnek. Akarja ezeket t�r�lni';  
$strDelayedInserts = 'Id"oz�tett besz�r�s haszn�lata';  
$strDelete = 'T�r�l';
$strDeleteAndFlush = 'T�r�lje a felhaszn�l�t, azut�n t�ltse be �jra a privil�giumokat.'; 
$strDeleteAndFlushDescr = 'Ez a legtiszt�bb �t, de a privil�giumok �jrat�lt�se eltarthat egy ideig.'; 
$strDeleted = 'A sort t�r�ltem';
$strDeletedRows = 'T�r�lt sorok:';
$strDeleting = '%s t�rl�se'; 
$strDescending = 'Cs�kken&#0337';
$strDescription = 'Le�r�s';  
$strDictionary = 'sz�t�r';  
$strDisableForeignChecks = 'Idegen kulcsok ellen"orz�s�nek letilt�sa';  
$strDisabled = 'Tiltott';
$strDisplayFeat = 'Megjelen�t�s tulajdons�gok';
$strDisplayOrder = 'Megjelen�t�s rendez�s:';
$strDisplayPDF = 'PDF s�ma kijelz�se';
$strDoAQuery = 'Csin�lj egy "lek�rdez�st" (helyettes�t&#0337 karakter: "%")';
$strDoYouReally = 'Biztos ez akarod? ';
$strDocu = 'Dokument�ci�';
$strDrop = 'Eldob';
$strDropDatabaseStrongWarning = 'Ki akarod t�r�lni az EG�SZ adatb�zist?';  
$strDropSelectedDatabases = 'A kiv�lasztott adatb�zisok t�rl�se';  
$strDropUsersDb = 'Azon adatb�zisok t�rl�se, amelyek neve egyezik a felhaszn�l�kkal.'; 
$strDumpSaved = 'A ki�r�st elmetettem ebbe a f�jlba: %s.';  
$strDumpXRows = '%s sor ki�r�sa a %s. sorral kezd&#0337dik';
$strDumpingData = 'T�bla adatok:';
$strDynamic = 'dinamikus';

$strEdit = 'Szerkeszt';
$strEditPDFPages = 'PDF oldalak szerkeszt�se';
$strEditPrivileges = 'Privil�giumok szerkeszt�se';
$strEffective = 'Hat�lyos';
$strEmpty = 'Ki�r�t';
$strEmptyResultSet = 'A MySQL �reset adott vissza (nincsenek sorok).';
$strEnabled = 'Enged�lyezett';
$strEncloseInTransaction = 'Export lez�r�sa a tranzaki�ban';  
$strEnd = 'V�ge';
$strEndCut = 'Kiv�g�s V�ge';
$strEndRaw = 'Feldolgozatlan V�ge';
$strEnglish = 'Angol';  
$strEnglishPrivileges = ' Megjegyz�s: A MySQL privil�gium nevek az angolb�l sz�rmaznak ';
$strError = 'Hiba';
$strEstonian = '�szt';  
$strExcelEdition = 'Excel szerkeszt�s';  
$strExcelOptions = 'Excel opci�k';  
$strExecuteBookmarked = 'Elmentett elj�r�s futtat�sa';  
$strExplain = 'SQL magyar�zat';
$strExport = 'Export';
$strExtendedInserts = 'Kiterjesztett besz�r�sok';
$strExtra = 'Extra';

$strFailedAttempts = 'Hib�s pr�b�lkoz�s'; 
$strField = 'Mez&#0337';
$strFieldHasBeenDropped = '%s mez&#0337t eldobtam';
$strFields = 'Mez&#0337k sz�ma';
$strFieldsEmpty = ' A mez&#0337 sz�moss�ga nulla! ';
$strFieldsEnclosedBy = 'Mez&#0337 lez�r�s';
$strFieldsEscapedBy = 'Mez&#0337 escape karakter';
$strFieldsTerminatedBy = 'Mez&#0337 v�ge';
$strFileAlreadyExists = '%s f�jl m�r l�tezik a szerveren, v�ltoztassa meg a f�jlnevet, vagy �ll�tsa be a fel�l�r�s opci�t!';  
$strFileCouldNotBeRead = 'A f�jl nem olvashat�';  
$strFileNameTemplate = '�tmeneti f�jln�v';
$strFileNameTemplateHelp = 'Haszn�lja a __DB__ formul�t az adatb�zis nevekhez, a __TABLE__ formul�t a t�blanevekhez �s %segy strftime%s formul�t az id"o-meghat�roz�shoz, a kiterjeszt�st automatikusan hozz�adja. A t�bbi sz�veget meg"orzi.';
$strFileNameTemplateRemember = 'eml�kezzen az �tmeneti n�vre';
$strFixed = 'r�gz�tett';
$strFlushPrivilegesNote = 'Megjegyz�s: a phpMyAdmin a felhaszn�l�i privil�giumokat k�zvetlen�l a MySQL privil�gium t�bl�kb�l veszi. Ezen t�bl�k tartalma elt�rhet a szerver privil�giumokt�l, ha ezt k�zzel be�ll�tottuk. Ebben az esetben �rdemes %s�jra bet�lteni a privil�giumokat%s a folytat�s el"ott.'; 
$strFlushTable = 'T�bla ki�r�sa ("FLUSH")';
$strFormEmpty = 'Hi�nyz� adat a formban !';
$strFormat = 'Form�tum';
$strFullText = 'Teljes Sz�vegek';
$strFunction = 'Funkci�';

$strGenBy = 'K�sz�tette';
$strGenTime = 'L�trehoz�s ideje';
$strGeneralRelationFeat = '�ltal�nos rel�ci�s jellemz&#0337k';
$strGeorgian = 'Gr�z';  
$strGerman = 'N�met';  
$strGlobal = 'glob�lis';  
$strGlobalPrivileges = 'Glob�lis privil�giumok'; 
$strGlobalValue = 'Glob�lis v�ltoz�'; 
$strGo = 'V�grehajt';
$strGrantOption = 'Grant'; 
$strGreek = 'G�r�g';  
$strGzip = '"gzip-pel t�m�r�tve"';

$strHasBeenAltered = 'megv�ltozott.';
$strHasBeenCreated = 'megsz�letett.';
$strHaveToShow = 'Legal�bb egy oszlopot v�lasztanod kell a megjelen�t�shez';
$strHebrew = 'H�ber';  
$strHome = 'Kezd&#0337lap';
$strHomepageOfficial = 'Hivatalos phpMyAdmin Honlap';
$strHost = 'Hoszt';
$strHostEmpty = 'A hosztn�v �res!';
$strHungarian = 'Magyar';  

$strId = 'ID'; 
$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Ha csak a t�bla n�h�ny oszlop�t akarod megjelen�teni, adj meg egy vessz&#0337kkel elv�lasztott mez&#0337list�t.';
$strIgnore = 'Elutas�t';
$strIgnoreInserts = 'Mell"oz"o besz�r�sok haszn�lata';  
$strIgnoringFile = '%s f�jl mell"oz�se';  
$strImportDocSQL = 'DocSQL f�jlok importja';  
$strImportFiles = 'F�jlok importja';  
$strImportFinished = 'Import v�get �rt';  
$strInUse = 'haszn�latban';
$strIndex = 'Index';
$strIndexHasBeenDropped = '%s indexet eldobtam';
$strIndexName = 'Index n�v&nbsp;:';
$strIndexType = 'Index tipus&nbsp;:';
$strIndexes = 'Indexek';
$strInnodbStat = 'InnoDB St�tus';  
$strInsecureMySQL = 'A konfigur�ci�s f�jl be�ll�t�sa (root hozz�f�r�s jelsz� n�lk�l) az alap�rtelmezett MySQL be�ll�t�s. A MySQL szerver most ezzel fut, ami alkalmat ad a bet�r�sre. S�rg"osen jav�tani kell ezt a biztons�gi r�st.';  
$strInsert = 'Besz�r';
$strInsertAsNewRow = 'Besz�r�s �j sork�nt';
$strInsertNewRow = '�j sor besz�r�sa';
$strInsertTextfiles = 'Sz�vegf�jl tartalm�nak besz�r�sa a t�bl�ba';
$strInsertedRowId = 'A besz�rt rekord id-je:';  
$strInsertedRows = 'Besz�rt sorok:';
$strInstructions = 'Parancs';
$strInternalNotNecessary = '* Egy bels"o kapcsolat nem sz�ks�ges, ha az l�tezik az InnoDB-ben is.';  
$strInternalRelations = 'Bels"o kapcsolatok';  

$strJapanese = 'Jap�n';  
$strJumpToDB = 'Ugr�s a &quot;%s&quot; adatb�zishoz.';  
$strJustDelete = 'Egyszer"uen t�r�lje a felhaszn�l�t a privil�gium-t�bl�kb�l.'; 
$strJustDeleteDescr = 'A &quot;t�r�lt&quot; felhaszn�l�k m�g hozz�f�rhetnek a szerverhez, am�g a privil�giumok �jrat�lt�se nem t�rt�nik meg.'; 

$strKeepPass = 'Ne v�ltoztasd meg a jelsz�t';
$strKeyname = 'Kulcsn�v';
$strKill = 'Le�ll�t';
$strKorean = 'Koreai';  

$strLaTeX = 'LaTeX';  
$strLaTeXOptions = 'LaTeX opci�k';  
$strLandscape = 'Fekv"o';  
$strLatexCaption = 'T�blac�m';
$strLatexContent = 't�bla tartalom __TABLE__';
$strLatexContinued = '(folytat�s)';
$strLatexContinuedCaption = 'T�bla c�m folytat�sa';
$strLatexIncludeCaption = 'T�bla c�me tartalmazza';
$strLatexLabel = 'Felirat kulcs';
$strLatexStructure = 'T�blaszerkezet __TABLE__';
$strLengthSet = 'Hossz/�rt�k*';
$strLimitNumRows = 'Sorok sz�ma oldalank�nt';
$strLineFeed = 'Soremel�s: \\n';
$strLinesTerminatedBy = 'Sorok v�ge';
$strLinkNotFound = 'Link nem tal�lhat�';
$strLinksTo = 'Linkek:';
$strLithuanian = 'Litv�n';  
$strLoadExplanation = 'A legjobb elj�r�s van alapb�l be�ll�tva, de meg lehet v�ltoztatni, ha az sikertelen.';  
$strLoadMethod = 'LOAD elj�r�s';  
$strLocalhost = 'Helyi';
$strLocationTextfile = 'A sz�vegf�jl helye';
$strLogPassword = 'Jelsz�:';
$strLogServer = 'Szerver';  
$strLogUsername = 'Felhaszn�l�i n�v:';
$strLogin = 'Bel�p�s';
$strLoginInformation = 'Bel�p�si inform�ci�'; 
$strLogout = 'Kil�p�s';

$strMIMETypesForTable = 'T�bla MIME-tipusok';  
$strMIME_MIMEtype = 'MIME-tipus';
$strMIME_available_mime = 'El�rhet"o MIME-tipusok';
$strMIME_available_transform = 'El�rhet"o �talak�t�sok';
$strMIME_description = 'Le�r�s';
$strMIME_nodescription = 'Ehhez az �talak�t�shoz nem �rhet"o el le�r�s.<br />K�rdezze a szerz"ot, aki k�sz�tette: %s.';
$strMIME_transformation = 'B�ng�sz"o �talak�t�s';
$strMIME_transformation_note = 'Az el�rhet"o �talak�t�si be�ll�t�sok list�j�hoz �s a hozz�juk tartoz� MIME-tipusokhoz akttintson ide: %stransformation descriptions%s';
$strMIME_transformation_options = '�talak�t�s be�ll�t�sok';
$strMIME_transformation_options_note = 'Az �talak�t�s be�ll�t�sokhoz �rja be az �rt�keket a kovetkez"o form�tumban: \'a\',\'b\',\'c\'...<br />Ha visszapert ("\") vagy id�z"ojelet ("\'") akar besz�rni, haszn�ljon visszapert (for example \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'A d"olttel �rt MIME-tipusok nem v�laszrtj�k el az �talak�t�si funkci�kat';
$strMaximumSize = 'Legnagyobb m�ret: %s%s';  
$strModifications = 'A v�ltoz�sokat elmentettem';
$strModify = 'V�ltoz�s';
$strModifyIndexTopic = 'Index v�ltoz�sa';
$strMoreStatusVars = 'T�bb �llapotv�ltoz�'; 
$strMoveTable = 'T�bla �thelyez�se ide (adatb�zis<b>.</b>t�bla):';
$strMoveTableOK = '%s t�bl�t �thelyeztem ide: %s.';
$strMoveTableSameNames = 'Nem tudom a t�bl�t ugyanarra mozgatni!';  
$strMultilingual = 'soknyelv"u';  
$strMustSelectFile = 'V�lassza ki a f�jlt, amit be akar illeszteni.';  
$strMySQLCharset = 'MySQL karakterk�szlet';
$strMySQLReloaded = 'MySQL �jrat�ltve.';
$strMySQLSaid = 'MySQL jelzi: ';
$strMySQLServerProcess = 'MySQL %pma_s1%, szerver: %pma_s2%, felhaszn�l�: %pma_s3%';
$strMySQLShowProcess = 'Mutasd meg a folyamatokat';
$strMySQLShowStatus = 'Mutasd meg a MySQL fut�si inform�ci�kat';
$strMySQLShowVars = 'Mutasd meg a MySQL rendszer v�ltoz�kat';

$strName = 'Neve';
$strNeedPrimaryKey = 'Els"odleges kulcs defini�l�sa sz�ks�ges a t�bl�hoz.';  
$strNext = 'K�vetkez&#0337';
$strNo = 'Nem';
$strNoDatabases = 'Nincs adatb�zis';
$strNoDatabasesSelected = 'Nincs adatb�zis kiv�lasztva.';  
$strNoDescription = 'nincs le�r�s';
$strNoDropDatabases = '"DROP DATABASE" utas�t�s le van tiltva.';
$strNoExplain = 'SQL magyar�zat �tugr�sa';
$strNoFrames = 'A phpMyAdmin haszn�lhat�bb egy <b>frame-kezel&#0337</b> b�ng�sz&#0337ben.';
$strNoIndex = 'Nincs index meghat�rozva!';
$strNoIndexPartsDefined = 'Nincs index darab meghat�rozva!';
$strNoModification = 'Nincs v�ltoz�s';
$strNoOptions = 'Ennek nincs be�ll�t�si lehet"os�ge';
$strNoPassword = 'Nincs jelsz�';
$strNoPermission = 'A webszervernek nincs joga elmenteni a f�jlt: %s.';  
$strNoPhp = 'PHP k�d n�lk�l';
$strNoPrivileges = 'Nincs privil�gium';
$strNoQuery = 'Nincs SQL k�r�s!';
$strNoRights = 'Nincs el�g jogod ennek v�grehajt�s�ra!';
$strNoRowsSelected = 'Nincs sor kiv�lasztva';  
$strNoSpace = 'Nincs el�g hely elmenteni a f�jlt: %s.';  
$strNoTablesFound = 'Nincs t�bla az adatb�zisban.';
$strNoUsersFound = 'Nem tal�ltam felhaszn�l�(ka)t.';
$strNoValidateSQL = 'SQL j�v�hagy�s �tugr�sa';
$strNone = 'Nincs';
$strNotNumber = 'Ez nem egy sz�m!';
$strNotOK = 'Nincs rendben';
$strNotSet = '<b>%s</b> t�bl�t nem tal�ltam vagy nincs benne: %s';
$strNotValidNumber = ' nem �rv�nyes sorsz�m!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s tal�lat <i>%s</i> t�bl�ban';
$strNumSearchResultsTotal = '<b>�sszes:</b> <i>%s</i> tal�lat';
$strNumTables = 'T�bla'; 

$strOK = 'Rendben';
$strOftenQuotation = 'Gyakran id�z&#0337jel. Opcion�lisan a char �s varchar mez&#0337k lez�rhat�k a \"lez�r�s\"-karakterrel.';
$strOperations = 'Tev�kenys�gek';
$strOperator = 'Kezel"o';  
$strOptimizeTable = 'T�bla optimaliz�l�s';
$strOptionalControls = 'Opcion�lis. Vez�rl&#0337k, amelyekkel �rhatsz �s olvashatsz speci�lis karaktereket.';
$strOptionally = 'Opcion�lis';
$strOr = 'Vagy';
$strOverhead = 'Fel�l�r�s';
$strOverwriteExisting = 'L�tez"o f�jlok fel�l�r�sa';  

$strPHP40203 = 'A PHP 4.2.3-mas verzi�ja fut, ami egy s�lyos hib�t tartalmaz a t�bb-b�jtos sztringek kezel�s�n�l (mbstring). N�zze meg a k�vetkez"ot: PHP bug report 19404. A PHP ezen verz�ja nem aj�nlott a phpMyAdminhoz.';  
$strPHPVersion = 'PHP Verzi�';
$strPageNumber = 'Oldalsz�m:';
$strPaperSize = 'Pap�rm�ret';  
$strPartialText = 'R�szleges Sz�vegek';
$strPassword = 'Jelsz�';
$strPasswordChanged = '%s jelszav�t sikeresen megv�ltoztattam.';
$strPasswordEmpty = 'A jelsz� mez&#0337 �res!';
$strPasswordNotSame = 'A jelszavak nem azonosak!';
$strPdfDbSchema = '"%s" adatb�zis s�m�ja - %s oldal';
$strPdfInvalidTblName = '"%s" t�bla nem l�tezik!';
$strPdfNoTables = 'Nincs t�bla';
$strPerHour = '�r�nk�nt'; 
$strPerMinute = 'percenk�nt';
$strPerSecond = 'm�sodpercenk�nt';
$strPhoneBook = 'telefonk�nyv';  
$strPhp = 'PHP k�d k�sz�t�se';
$strPmaDocumentation = 'phpMyAdmin dokument�ci�';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> �rt�k�t a konfigur�ci�s f�jlban KELL be�ll�tani!';
$strPortrait = '�ll�';  
$strPos1 = 'Kezdet';
$strPrevious = 'El&#0337z&#0337';
$strPrimary = 'Els&#0337dleges';
$strPrimaryKeyHasBeenDropped = 'Az els&#0337dleges kulcsot eldobtam';
$strPrimaryKeyName = 'Az els&#0337dleges kulcs nev�nek "PRIMARY"-nak kell lennie!';
$strPrimaryKeyWarning = '("PRIMARY"-nak <b>kell</b> lennie, �s <b>csak annak</b> szabad lennie az els&#0337dleges kulcsnak!)';
$strPrint = 'Nyomtat�s';  
$strPrintView = 'Nyomtat�si n�zet';
$strPrintViewFull = 'Nyomtat�si n�zet (�sszes sz�veggel)';  
$strPrivDescAllPrivileges = 'Minden privil�giumot tartalmaz, kiv�ve a GRANT.'; 
$strPrivDescAlter = 'Enged�lyezi a l�tez"o t�bl�k szerkezet�nek megv�ltoztat�s�t.'; 
$strPrivDescCreateDb = 'Enged�lyezi �j adatb�zisok �s t�bl�k k�sz�t�s�t.'; 
$strPrivDescCreateTbl = 'Enged�lyezi �j t�bl�k k�sz�t�s�t.'; 
$strPrivDescCreateTmpTable = 'Enged�lyezi �tmeneti t�bl�k k�sz�t�s�t.'; 
$strPrivDescDelete = 'Enged�lyezi az adatok t�rl�s�t.'; 
$strPrivDescDropDb = 'Enged�lyezi adatb�zisok �s t�bl�k t�rl�s�t.'; 
$strPrivDescDropTbl = 'Enged�lyezi t�bl�k t�rl�s�t.'; 
$strPrivDescExecute = 'Enged�lyezi t�rolt elj�r�sok futtat�s�t; m�g nem val�sult meg ebben a MySQL verzi�ban.'; 
$strPrivDescFile = 'Enged�lyezi adatok export/importj�t f�jlokba.'; 
$strPrivDescGrant = 'Enged�lyezi felhaszn�l�k �s privil�giumok hozz�ad�s�t a privil�giumi t�bl�k �jrat�lt�se n�lk�l.'; 
$strPrivDescIndex = 'Enged�lyezi indexek k�sz�t�s�t �s t�rl�s�t.'; 
$strPrivDescInsert = 'Enged�lyezi adatok be�r�s�t �s megv�ltoztat�s�t.'; 
$strPrivDescLockTables = 'Enged�lyezi t�bl�k blokkol�s�t erre a sz�lra.'; 
$strPrivDescMaxConnections = 'Korl�tozza az �j kapcsolatok sz�m�t, amit a felhaszn�l� �r�nk�nt megnyithat.';
$strPrivDescMaxQuestions = 'Korl�tozza a felhaszn�l�i lek�r�sek sz�m�t �r�nk�nt.';
$strPrivDescMaxUpdates = 'Korl�tozza azon utas�t�sok sz�m�t �r�nk�nt, amelyek megv�ltoztatnak egy t�bl�t vagy adatb�zist.';
$strPrivDescProcess3 = 'Enged�lyezi m�s felhaszn�l�k folyamatainak megsz�ntet�s�t.'; 
$strPrivDescProcess4 = 'Enged�lyezi a teljes lek�r�sek megtekint�s�t a folyamatlist�ban.'; 
$strPrivDescReferences = 'Nem val�sult meg ebben a MySQL verzi�ban'; 
$strPrivDescReload = 'Enged�lyezi a szerver be�ll�t�sok �jrat�lt�s�t �s a szerver-cache t�rl�s�t.'; 
$strPrivDescReplClient = 'Jogokat ad a felhaszn�l�nak, hogy lek�rdezhess�k a slave/master helyeket.'; 
$strPrivDescReplSlave = 'Sz�ks�ges a slave-ek m�sol�s�hoz.'; 
$strPrivDescSelect = 'Enged�lyezi adatok olvas�s�t.'; 
$strPrivDescShowDb = 'Hozz�f�r�st ad az adatb�zisok teljes list�j�hoz.'; 
$strPrivDescShutdown = 'Enged�lyezi a szerver le�ll�t�s�t.'; 
$strPrivDescSuper = 'Enged�lyezi a kapcsol�d�st akkor is, ha a kapcsolatok sz�ma a maximumot el�rte. Ez sz�ks�ges a legfontosabb adminisztr�ci�s m"uveletekhez, mint a glob�lis v�ltoz�k be�ll�t�sa vagy m�s felhaszn�l�k folyamatainak megsz�ntet�se.'; 
$strPrivDescUpdate = 'Enged�lyezi az adatok megv�ltoztat�s�t.'; 
$strPrivDescUsage = 'Nincsenek privil�giumok.'; 
$strPrivileges = 'Privil�giumok';
$strPrivilegesReloaded = 'A privil�giumok �jrat�lt�se sikeres volt.'; 
$strProcesslist = 'Folyamatlista'; 
$strProperties = 'Tulajdons�gok';
$strPutColNames = 'Tegye a mez"oneveket az els"o sorhoz';  

$strQBE = 'Lek�rdez�s';
$strQBEDel = 'T�r�l';
$strQBEIns = 'Besz�r';
$strQueryFrame = 'Lek�r�si ablak';
$strQueryOnDb = 'SQL-k�r�s <b>%s</b> adatb�zison:';
$strQuerySQLHistory = 'SQL-el"ozm�nyek';
$strQueryStatistics = '<b>Lek�r�si statisztika</b>: Az indul�s �ta %s k�r�s ment el a szerverhez.';
$strQueryTime = 'A lek�r�s lefutott %01.4f m�sodperc alatt';
$strQueryType = 'Lek�r�s t�pusa'; 
$strQueryWindowLock = 'Ne �rja fel�l a lek�r�st az ablakon k�v�lr"ol';  

$strReType = '�jra�r�s';
$strReceived = 'Fogadott'; 
$strRecords = 'Sor';
$strReferentialIntegrity = 'Hivatkoz�si s�rtetlens�g ellenorz�se:';
$strRefresh = 'Friss�t�s';  
$strRelationNotWorking = 'A munka kieg�sz�t&#0337 tulajdons�gai a vonatkoz� t�bl�kra meg lettek sz�ntetve. Az okok�rt kattints %side%s.';
$strRelationView = 'Rel�ci� n�zet';
$strRelationalSchema = 'Kapcsolati s�ma';  
$strRelations = 'Kapcsolatok';  
$strRelationsForTable = 'T�bla-kapcsolatok';  
$strReloadFailed = 'MySQL �jrat�lt�se sikertelen.';
$strReloadMySQL = 'MySQL �jrat�lt�se';
$strReloadingThePrivileges = 'Privil�giumok �jrat�lt�se'; 
$strRemoveSelectedUsers = 'A kiv�lasztott felhaszn�l�k t�rl�se'; 
$strRenameDatabaseOK = '%s adatb�zis �tneveztem erre: %s';  
$strRenameTable = 'T�bla �tnevez�se erre';
$strRenameTableOK = '%s t�bl�t �tneveztem erre: %s';
$strRepairTable = 'T�bla jav�t�s';
$strReplace = 'Csere';
$strReplaceNULLBy = 'NULL cser�je ezzel:';  
$strReplaceTable = 'T�bla adatok �s f�jl cser�je';
$strReset = 'T�r�l';
$strResourceLimits = 'Er"oforr�s hat�rok'; 
$strRevoke = 'Visszavon';
$strRevokeAndDelete = 'A felhaszn�l�k �sszes privil�gium�nak visszavon�sa, azt�n t�rl�s�k.'; 
$strRevokeAndDeleteDescr = 'A felhaszn�l�knak m�g haszn�lhat� privil�giumuk van, am�g nem t�rt�nik meg a privil�giumok �jrat�lt�se.'; 
$strRevokeMessage = 'Visszavontam a %s privil�giumokat';
$strRowLength = 'Sorhossz';
$strRowSize = ' Sorm�ret ';
$strRows = 'Sorok';
$strRowsFrom = 'sor kezdve ezzel:';
$strRowsModeFlippedHorizontal = 'v�zszintes (elforgatott felj�c)';
$strRowsModeHorizontal = 'v�zszintes';
$strRowsModeOptions = '%s m�don, a fejl�cet %s soronk�nt megism�telve';
$strRowsModeVertical = 'f�gg&#0337leges';
$strRowsStatistic = 'Sor-statisztika';
$strRunQuery = 'K�r�s v�grehajt�sa';
$strRunSQLQuery = 'SQL parancs(ok) futtat�sa a(z) %s adatb�zison';
$strRunning = ': %s';
$strRussian = 'Orosz';  

$strSQL = 'SQL';
$strSQLExportType = 'Export tipus';  
$strSQLOptions = 'SQL be�ll�t�sok';
$strSQLParserBugMessage = 'Es�ly van r�, hogy egy hib�t tal�lhatt�l az SQL szintaktikai elemz&#0337ben (parser). Vizsg�ld meg gondosan a lek�rdez�sedet, ellen&#0337rizd, hogy az id�z&#0337jelek j�k �s j�l illeszkednek. M�s lehets�ges hiba oka lehet, hogy bin�risan t�lt�tt�l fel egy f�jlt az id�zett sz�vegmez&#0337n k�v�l. Kipr�b�lhatod a lek�r�sedet a MySQL parancssoros fel�let�n.  A MySQL szerver hibakimenete alul l�that�, ha van ott valami, az seg�thet felder�teni a hiba ok�t. Ha m�g mindig gondjaid vannak, vagy a szintaktiaki elemz&#0337 (parser) hib�t jelez, ahol a parancsoros fel�leten v�grehajt�dik, reduk�ld a probl�m�t okoz� SQL lek�rdez�st egy egyszer&#0369 lek�rdez�ss�, �s k�ldd el egy hibajelz�sben (bug report) az als� Kiv�g�s r�szben lev&#0337 adatokkal egy�tt:';
$strSQLParserUserError = '�gy l�tszik az SQL lek�rdez�sedben van egy hiba. A MySQL szerver hibakimenete alul l�that�, ha van ott valami, az seg�thet felder�teni a hiba ok�t';
$strSQLQuery = 'SQL-k�r�s';
$strSQLResult = 'SQL eredm�ny';
$strSQPBugInvalidIdentifer = '�rv�nytelen azonos�t�';
$strSQPBugUnclosedQuote = 'Lez�ratlan lek�rdez�s';
$strSQPBugUnknownPunctuation = 'Ismeretlen k�zpontozott sztring';
$strSave = 'Ment';
$strSaveOnServer = 'Ment�s a szerver %s k�nyvt�r�ba';  
$strScaleFactorSmall = 'A m�ret elem t�l kicsi, hogy megfelel&#0337 legyen a s�m�hoz egy oldalon';
$strSearch = 'Keres�s';
$strSearchFormTitle = 'Keres�s az adatb�zisban';
$strSearchInTables = 'T�bl�(k)ban:';
$strSearchNeedle = 'Szavak vagy �rt�kek a keres�shez (helyettes�t&#0337 karakter: "%"):';
$strSearchOption1 = 'legal�bb egy sz�';
$strSearchOption2 = '�sszes sz�';
$strSearchOption3 = 'a helyes mondat';
$strSearchOption4 = 'regul�r�ris kifejez�sk�nt';
$strSearchResultsFor = 'Keres�si eredm�nyek "<i>%s</i>" %s:';
$strSearchType = 'Keress:';
$strSecretRequired = 'A konfigur�ci�s f�jl egy titkos jelsz� kifejez�st v�r (blowfish_secret).';  
$strSelectADb = 'V�lassz egy adatb�zist';
$strSelectAll = 'Mindet kijel�li';
$strSelectFields = 'Mez&#0337k kiv�laszt�sa (legal�bb egyet):';
$strSelectNumRows = 'k�r�sben';
$strSelectTables = 'T�bl�k kiv�laszt�sa';
$strSend = 'F�jln�v megad�sa';
$strSent = 'K�ld�tt'; 
$strServer = 'Szerver';  
$strServerChoice = 'Szerver V�laszt�s';
$strServerNotResponding = 'A szerver nem v�laszol';  
$strServerStatus = 'Fut�si inform�ci�k'; 
$strServerStatusUptime = 'Ez a MySQL szerver fut: %s. Elind�tva: %s.'; 
$strServerTabProcesslist = 'Folyamatok'; 
$strServerTabVariables = 'V�ltoz�k'; 
$strServerTrafficNotes = '<b>Szerver forgalom</b>: Ezek a t�bl�k mutatj�k a MySQL szerver h�l�zati forgalom-statisztik�it az indul�st�l kezdve.';
$strServerVars = 'Szerver v�ltoz�k �s be�ll�t�sok'; 
$strServerVersion = 'Szerver verzi�';
$strSessionValue = 'Session �rt�k'; 
$strSetEnumVal = 'Ha a mez&#0337 tipusa "enum" vagy "set", akkor az �rt�keket ilyen form�ban �rd be: \'a\',\'b\',\'c\'...<br />Ha backslash-t ("\") vagy aposztr�fot ("\'") akarsz ezen �rt�kek k�z�tt haszn�lni, haszn�ld a backslash escape karaktert (pl \'\\\\xyz\' vagy \'a\\\'b\').';
$strShow = 'Mutat';
$strShowAll = 'Mutasd mindet';
$strShowColor = 'Mutasd a sz�neket';
$strShowDatadictAs = 'Adatk�nyvt�r form�tum';  
$strShowFullQueries = 'Teljes lek�r�sek mutat�sa';  
$strShowGrid = 'Mutasd a r�csot';
$strShowPHPInfo = 'PHP inform�ci�';
$strShowTableDimension = 'Mutasd a t�bl�k m�ret�t';
$strShowTables = 'Mutasd a t�bl�kat';
$strShowThisQuery = ' Mutasd a parancsot itt �jra ';
$strShowingRecords = 'Sorok megjelen�t�se ';
$strSimplifiedChinese = 'Egyszer"us�tett k�nai';  
$strSingly = '(egyenk�nt)';
$strSize = 'M�ret';
$strSort = 'Sorrendez�s';
$strSortByKey = 'Kulcs szerinti rendez�s';  
$strSpaceUsage = 'Helyfoglal�s';
$strSpanish = 'Spanyol';  
$strSplitWordsWithSpace = 'A szavak fel vannak osztva sz�k�z karakter szerint (" ").';
$strStatCheckTime = 'Utols� ellen"orz�s';
$strStatCreateTime = 'L�trehoz�s';
$strStatUpdateTime = 'Utols� m�dos�t�s';
$strStatement = 'Adatok';
$strStatus = 'St�tus'; 
$strStrucCSV = 'CSV adat';
$strStrucData = 'Szerkezet �s adatok';
$strStrucDrop = '\'T�bla eldob�s\' hozz�ad�sa';
$strStrucExcelCSV = 'M$ Excel CSV adat';
$strStrucNativeExcel = 'Nat�v MS Excel adat';  
$strStrucOnly = 'Csak szerkezet';
$strStructPropose = 'T�bla strukt�ra aj�nlat';
$strStructure = 'Strukt�ra';
$strSubmit = 'V�grehajt';
$strSuccess = 'Az SQL-k�r�st sikeresen v�grehajtottam';
$strSum = '�sszesen';
$strSwedish = 'Sv�d';  
$strSwitchToTable = 'V�lt�s a m�solt t�bl�ra';  

$strTable = 'T�bla';
$strTableComments = 'T�bla megjegyz�sek';
$strTableEmpty = 'A t�blan�v helye �res!';
$strTableHasBeenDropped = '%s t�bl�t eldobtam';
$strTableHasBeenEmptied = '%s t�bl�t ki�r�tettem';
$strTableHasBeenFlushed = '%s t�bl�t ki�rtam';
$strTableMaintenance = 'T�bla karbantart�s';
$strTableOfContents = 'Tartalomjegyz�k';  
$strTableOptions = 'T�bla opci�k';  
$strTableStructure = 'T�bla szerkezet:';
$strTableType = 'T�bla tipusa';
$strTables = '%s t�bla';
$strTakeIt = 'csin�ld';  
$strTblPrivileges = 'T�bla-specifikus privil�giumok'; 
$strTextAreaLength = ' Mivel ez a hossz,<br /> ez a mez&#0337 nem szerkeszthet&#0337 ';
$strThai = 'Thai';  
$strTheContent = 'A f�jl tartalm�t beillesztettem.';
$strTheContents = 'A f�jl �s a kiv�lasztott t�bla sorainak tartalm�t azonos els&#0337dleges vagy egyedi kulccsal cser�li ki.';
$strTheTerminator = 'A mez&#0337k lez�r�ja.';
$strTheme = 'T�ma / St�lus';  
$strThisHost = 'Ez a g�p'; 
$strThisNotDirectory = 'Ez nem alk�nyvt�r volt';  
$strThreadSuccessfullyKilled = 'A %s. sz�lat siker�lt megsz�ntetni.'; 
$strTime = 'Id"o'; 
$strToggleScratchboard = 'scratchboard kapcsol�sa';  
$strTotal = '�sszesen';
$strTotalUC = '�ssz'; 
$strTraditionalChinese = 'Hagyom�nos k�nai';  
$strTraffic = 'Forgalom'; 
$strTransformation_application_octetstream__download = 'Egy linket jelen�t meg a mez"o bin�ri ada�nak let�lt�s�hez. Els"o opci� a bin�ris f�jl neve. M�sodik a t�bla sor�nak egy lehets�ges mez"oneve f�jln�v gyan�nt. Ha be�ll�tja a m�sodik opci�t, akkor az els"ot �resen kell hagyni';  
$strTransformation_image_jpeg__inline = 'Kattinthat� ikon mutat�sa; be�ll�t�sok: sz�less�g,magass�g pixelben (megtartja az eredeti k�par�nyt)';  
$strTransformation_image_jpeg__link = 'Egy linket mutat a k�phez (k�zvetlen ablakos let�lt�s).';
$strTransformation_image_png__inline = 'image/jpeg megtekint�se: bent';  
$strTransformation_text_plain__dateformat = 'A TIME, TIMESTAMP vagy DATETIME mez"ok �s form�tumok az �n helyi d�tumform�tum�t haszn�lj�k. Els"o opci� az elt�r�s (�r�ban), ami hozz�ad�dik az id"oh�z (alap�rtelmezett: 0). A m�sodik egy k�l�nb�z"o id"oform�tum a PHP strftime() param�tere szerint.';
$strTransformation_text_plain__external = 'Csak LINUX: Elind�t egy k�ls"o programot, ami megkapja az adatokat a standard inputon. Visszat�r a program standard outputj�n. Alap�rtelmezett a Tidy, csinos HTML k�dot kap. Biztons�gi megfontol�sokb�l k�zzel kell szerkeszteni a libraries/transformations/text_plain__external.inc.php f�jlt, �s be�rni a program nev�t, amit futtatni akar. Az els"o opci� a program sz�ma, amit futtatni akar, a m�sodik a program param�terei. A harmadik opci� ha egyenl"o eggyel, akkor a kimenet konvert�lva lesz a htmlspecialchars() elj�r�ssal (alap�rtelmezett 1). A negyedik opci� ha egyre van be�ll�tva, egy NOWRAP form�z�st ad minden mez"oh�z, �gy a kimenet �jrat�rdel�s n�lk�l l�tszik (alap�rtelmezett 1)';
$strTransformation_text_plain__formatted = 'A mez"o eredeti form�z�s�nak meg"orz�se. Nincs kiv�tel.';
$strTransformation_text_plain__imagelink = 'Egy k�pet es egy linket jelen�t meg, a mez"o tartalmazza a f�jlnevet; az els"o opc�� egy el"otag, mint pl "http://domain.com/", a m�sodik a sz�less�g pixelben, a harmadik pedig a magass�g.';  
$strTransformation_text_plain__link = 'Meg linket jelen�t meg, a megz"o tartalmazza a f�jlnevet; az els"o opc�� egy el"otag, mint pl "http://domain.com/", a m�sodik a link neve.';  
$strTransformation_text_plain__substr = 'A sz�veg egy r�sz�t mutatja. Els"o opci� egy offszet, ami a kezd"opoz�ci�t �ll�tja be (alap�rtelmezett: 0). A m�sodik azt adja meg, hogy mennyi sz�veg j�jj�n vissza. Ha �res, az �sszes visszamarad� sz�veg �tj�n. A harmadik opci�ban atokat a karaktereket lehet be�ll�tani, amik a sz�veg v�g�re ker�lnek, ha sz�vegr�szt kapunk vissza (alap�rtelmezett: ...) .';
$strTransformation_text_plain__unformatted = 'HTML k�d megjelen�t�se HTML elemekk�nt. Nincs HTML form�z�s.';
$strTruncateQueries = 'A mutatott k�r�sek t�rl�se';  
$strTurkish = 'T�r�k';  
$strType = 'Tipus';

$strUkrainian = 'Ukr�n';  
$strUncheckAll = '�sszeset t�rli';
$strUnicode = 'Unicode';  
$strUnique = 'Egyedi';
$strUnknown = 'ismeretlen';  
$strUnselectAll = 'Mindet t�rli';
$strUpdComTab = 'Olvassa el a Dokument�ci�t, hogyan tudja m�dos�tani a Column_comments t�bl�t';  
$strUpdatePrivMessage = 'Friss�tettem a(z) %s privil�giumokat.';
$strUpdateProfileMessage = 'A profilt friss�tettem.';
$strUpdateQuery = 'K�r�s friss�t�s';
$strUpgrade = 'M�dos�t�s sz�ks�ges %s %s vagy k�s"obb.';  
$strUsage = 'M�ret';
$strUseBackquotes = 'Id�z&#0337jelek haszn�lata a t�bla- �s mez&#0337nevekn�l';
$strUseHostTable = 'Hoszt-t�bla haszn�lata';  
$strUseTables = 'T�bl�k haszn�lata';
$strUseTextField = 'Sz�veges mez"o haszn�lata'; 
$strUseThisValue = 'Ezen �rt�k haszn�lata';  
$strUser = 'Felhaszn�l�';
$strUserAlreadyExists = '%s felhaszn�l� m�r l�tezik!'; 
$strUserEmpty = 'A felhaszn�l�i n�v mez&#0337je �res!';
$strUserName = 'Felhaszn�l�i n�v';
$strUserNotFound = 'A kiv�lasztott felhaszn�l�t nem tal�ltam a privil�gium t�bl�ban.'; 
$strUserOverview = 'Felhaszn�l� �ttekint�s'; 
$strUsersDeleted = 'A kiv�lasztott felhaszn�l�k t�rl�se siker�lt.'; 
$strUsersHavingAccessToDb = 'A felhaszn�l�knak hozz�f�r�s�k van ehhez: &quot;%s&quot;';  

$strValidateSQL = 'SQL j�v�hagy�s';
$strValidatorError = 'Az SQL ellen"orz"ot (SQL validator) nem siker�lt elind�tani. Ellen"orizze a sz�ks�ges php kiterjeszt�st, ahogy itt le van �rva: %sdocumentation%.'; 
$strValue = '�rt�k';
$strVar = 'V�ltoz�'; 
$strViewDump = 'T�bla ki�r�s (v�zlat) megn�z�se';
$strViewDumpDB = 'Adatb�zis ki�r�s (v�zlat) megn�z�se';
$strViewDumpDatabases = 'Adatb�zis ki�r�s (s�ma) megtekint�se';

$strWebServerUploadDirectory = 'web-szerver felt�lt�si k�nyvt�r';  
$strWebServerUploadDirectoryError = 'Az alk�nyvt�r, ami a felt�lt�sekhez be lett �ll�tva, nem el�rhet"o';  
$strWelcome = '�dv�z�l a %s';
$strWestEuropean = 'Nyugat-eur�pai';  
$strWildcard = 'helyettes�t"o jel';  
$strWindowNotFound = 'A c�l b�ng�sz"oablakot nem tudtam �jrat�lteni. Tal�n a sz�l"oablak be lett z�rva, vagy a b�ng�sz"o biztons�gi be�ll�t�sa tiltja az ablakok k�zti �jrat�lt�st';  
$strWithChecked = 'A kijel�ltekkel v�gzend&#0337 m&#0369velet:';
$strWritingCommentNotPossible = 'Megjegyz�s �r�sa nem lehets�ges';  
$strWritingRelationNotPossible = 'Kapcsolat �r�sa nem lehets�ges';  
$strWrongUser = 'Rossz felhaszn�l�i n�v/jelsz�. Hozz�f�r�s megtagadva.';

$strXML = 'XML';

$strYes = 'Igen';

$strZeroRemovesTheLimit = 'Megjegyz�s: A 0 (nulla) be�ll�t�sa t�rli a limitet.'; 
$strZip = '"zippel t�m�r�tve"';

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
