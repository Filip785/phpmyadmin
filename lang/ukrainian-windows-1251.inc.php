<?php
/* $Id$ */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('����', '��', '��', '��');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('ѳ�', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$timespanfmt = '%s ����, %s �����, %s ������ � %s ������';

$strAPrimaryKey = '���� ������ ��������� ���� �� %s';
$strAbortedClients = '���������';
$strAbsolutePathToDocSqlDir = '����� ������ ���������� ���� �� ���-������ �� �������� docSQL';
$strAccessDenied = '������ ����������';
$strAccessDeniedExplanation = 'phpMyAdmin ��������� �\'�������� � MySQL ��������, ��� ������ �� �������� ��\'�������. ����� ��������� �������� host, username �� password � ���� config.inc.php �� ����������, �� ���� ���������� ����� ��������� ���� �� ������������� MySQL �������.';
$strAction = 'ĳ�';
$strAddDeleteColumn = '������/������� ������� �������';
$strAddDeleteRow = '������/������� ����� �������';
$strAddDropDatabase = '������ DROP DATABASE';
$strAddIntoComments = '������ ��������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '������ ��� ������';
$strAddPrivMessage = '���� ������ ����� �������';
$strAddPrivilegesOnDb = '������ ����� ��� ���� ���� �����';
$strAddPrivilegesOnTbl = '������ ����� ��� ���� �������';
$strAddSearchConditions = '������ ����� ������ (��� ��� ����� "where"):';
$strAddToIndex = '������ �� �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '������ ������ �����������';
$strAddUserMessage = '���� ������ ������ �����������.';
$strAddedColumnComment = '������ �������� �� �������';
$strAddedColumnRelation = '������ ��\'���� ��� �������';
$strAdministration = '������������';
$strAffectedRows = '������ �����:';
$strAfter = 'ϳ��� %s';
$strAfterInsertBack = '�����������';
$strAfterInsertNewInsert = '�������� ����� �����';
$strAll = '���';
$strAllTableSameWidth = '���������� �� ������� �������� ������?';
$strAlterOrderBy = '������ ������� �������';
$strAnIndex = '���� ������ ������ ��� %s';
$strAnalyzeTable = '����� �������';
$strAnd = '�';
$strAny = '��������';
$strAnyColumn = '������� �������';
$strAnyDatabase = '������ ���� �����';
$strAnyHost = '�������� ����';
$strAnyTable = '������� �������';
$strAnyUser = '�������� ����������';
$strArabic = '��������';
$strArmenian = '³��������';
$strAscending = '����������';
$strAtBeginningOfTable = '�� ������� �������';
$strAtEndOfTable = '� ���� �������';
$strAttr = '��������';
$strAutodetect = '��������������';
$strAutomaticLayout = '������������ layout';

$strBack = '�����';
$strBaltic = '���������';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' ������ ���� - �� ����������� ';
$strBookmarkDeleted = '�������� ���� ��������.';
$strBookmarkLabel = '̳���';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���� ��������';
$strBrowse = '�����������';
$strBulgarian = '����������';
$strBzError = 'phpMyAdmin �� ���� ������������� dump ����� ���������� Bz2 ���������� � ��� ���� PHP. ����������� ���������� ���������� � ���������������� ���� ������ phpMyAdmin ��������� <code>$cfg[\'BZipDump\']</code> �� <code>FALSE</code>. ���� �� ������ ��������������� ��������� Bz2 �������������, ��� ��������� �������� ����� PHP. ���. ���������� � ������������ ��� ������� %s.';
$strBzip = '���������� � "bzip"';

$strCSVOptions = 'CSV �����';
$strCannotLogin = '�� ���� �������������� �� MySQL ������';
$strCantLoad = '�� ���� ����������� %s,<br />����� ��������� ������������ PHP.';
$strCantLoadRecodeIconv = '�� ���� ����������� iconv �� recode extension ��������� ��� ���� charset-�, ������������� php ���, ��� ����� ���� ��������������� �� extensions, ��� ���������� ���� charset-� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '��������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ����  ����������� ��/��� iconv, ��/��� libiconv, ��/��� ������� recode_string ���� ���� ����������� extension reports. �������� ���� php ������������.';
$strCardinality = 'ʳ������ ��������';
$strCarriage = '���������� �������: \\r';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = '����������������';
$strChange = '������';
$strChangeCopyMode = '�������� ������ ����������� � ������ � ������� � ...';
$strChangeCopyModeCopy = '... �������� �������.';
$strChangeCopyModeDeleteAndReload = ' ... ������� ������� � ������� ������������ �� ������������� ����� ���� ����.';
$strChangeCopyModeJustDelete = ' ... ������� ������� � ������� ������������.';
$strChangeCopyModeRevoke = ' ... ��������� �� ������� ����� ������� �����������, �������� ���� ���� ����.';
$strChangeCopyUser = '������ ����������� ���� / �������� �����������';
$strChangeDisplay = '������� ���� ��� �����������';
$strChangePassword = '������ ������';
$strCharset = '���� �������';
$strCharsetOfFile = '��������� �����:';
$strCharsets = '���������';
$strCharsetsAndCollations = '������ ������� �� �����';
$strCheckAll = '³������ ���';
$strCheckDbPriv = '��������� ������ ���� �����';
$strCheckPrivs = '��������� �����';
$strCheckPrivsLong = '��������� ����� ��� ���� ����� &quot;%s&quot;.';
$strCheckTable = '��������� �������';
$strChoosePage = '����� ������� ������� ��� �����������';
$strColComFeat = '���������� �������� ��������';
$strCollation = '���������';
$strColumn = '�������';
$strColumnNames = '����� �������';
$strColumnPrivileges = '�����, �� ���������� ������� �������';
$strCommand = '�������';
$strComments = '��������';
$strCompleteInserts = '����� �������';
$strCompression = '���������';
$strConfigFileError = 'phpMyAdmin �� ���� ��������� ��������������� ���� <br />�� ���� ������� � ���� �������, ���� php ��������� �� ����������� ������� (parse error) � �����, ��� �� ���� ������ ������ �����.<br />���������� ��������������� ���� ������������� �� ��������� ��������� �������� ����� � ���������� �������� ����������� ��� ������� (php error messages). ��������� ���� � ���� ������ ����� ����� �� ���������.  <br />���� �� �������� ������� �������, - ������� ��� � �������.';
$strConfigureTableCoord = '����� �������������� ���������� ������� %s';
$strConfirm = '�� �������� ������ �� �������?';
$strConnections = '�\'������';
$strCookiesRequired = '� ����� ������� Cookies ������� ���� ���������.';
$strCopyTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ���������� � %s.';
$strCopyTableSameNames = '�� ���� ��������� ������� ���� � ����!';
$strCouldNotKill = 'phpMyAdmin �� ���� ��������� ������ %s. ³� ��� ������� ��� ���������.';
$strCreate = '��������';
$strCreateIndex = '�������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '�������� ����� ������';
$strCreateNewDatabase = '�������� ���� ��';
$strCreateNewTable = '�������� ���� ������� � �� %s';
$strCreatePage = '�������� ���� �������';
$strCreatePdfFeat = '�������� PDF-����';
$strCriteria = '�������';
$strCroatian = '���������';
$strCyrillic = '���������';
$strCzech = '������';

$strDBComment = '�������� ���� �����: ';
$strDBGContext = '��������';
$strDBGContextID = '�������� ID';
$strDBGHits = 'Hits';
$strDBGLine = '�����';
$strDBGMaxTimeMs = '���� ���, ��';
$strDBGMinTimeMs = '̳� ���, ��';
$strDBGModule = '������';
$strDBGTimePerHitMs = 'Time/Hit, ��';
$strDBGTotalTimeMs = '��������� ���, ��';
$strDanish = '�������';
$strData = '����';
$strDataDict = '������� �����';
$strDataOnly = '���� ����';
$strDatabase = '�� ';
$strDatabaseExportOptions = '������������ �������� ���� �����';
$strDatabaseHasBeenDropped = '���� ����� %s �������.';
$strDatabaseNoTable = '�� ���� ����� �� ������ �������!';
$strDatabaseWildcard = '���� ����� (��������� ������������ ��������):';
$strDatabases = '���� �����';
$strDatabasesDropped = '%s ���(�\�) ����� ������ �������.';
$strDatabasesStats = '���������� ��� �����';
$strDatabasesStatsDisable = '���������� ����������';
$strDatabasesStatsEnable = '��������� ����������';
$strDatabasesStatsHeavyTraffic = '�������: ���������� ����� ���������� ���� ����� ���� ���������� ������� ������ �� ��� �������� �� ����� ����� MySQL.';
$strDbPrivileges = '�����, �� ���������� ���� �����';
$strDbSpecific = '����������� ��� ���� �����';
$strDefault = '�� ������������';
$strDefaultValueHelp = '��� ������� �� �������������, ������ ���� ��������, ��� ������������ ��������� ������ �� �����, � ������ ������: a';
$strDelOld = '�� ������� �� ��������� �� �������, ��� ��� ����. ������ �������� �� ���������?';
$strDelete = '��������';
$strDeleteAndFlush = '������� ������������ � ��������������� ����� ���� �����.';
$strDeleteAndFlushDescr = '�� ������ �����, ����� ���������������� ���� ���� ��������� ������ ���.';
$strDeleteFailed = '��������� �� �������!';
$strDeleteUserMessage = '�������� ����������� %s.';
$strDeleted = '����� ��������';
$strDeletedRows = '�������� �������� �����:';
$strDeleting = '������� %s';
$strDescending = '���������';
$strDescription = '����';
$strDictionary = '�������';
$strDisabled = '�����������';
$strDisplay = '��������';
$strDisplayFeat = '�������� ���������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF �����';
$strDoAQuery = '�������� "����� ����� ��������" (������ �����������: "%")';
$strDoYouReally = '�� �������� ������ ';
$strDocu = '������������';
$strDrop = '�������';
$strDropDB = '������� �� %s';
$strDropSelectedDatabases = '������� ������� ���� �����';
$strDropTable = '�������� �������';
$strDropUsersDb = '������� ���� �����, �� ����� ��� � ����� �� ����� ������������.';
$strDumpComments = '�������� ������� ������ �� �������� SQL-��������';
$strDumpSaved = 'Dump ��������� � ���� %s.';
$strDumpXRows = 'Ǵ��������� ���� %s ����� ��������� � %s -��.';
$strDumpingData = '���� ����� �������';
$strDynamic = '���������';

$strEdit = '����������';
$strEditPDFPages = '���������� PDF �������';
$strEditPrivileges = '����������� �������';
$strEffective = '������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ��������� ������ ��������� (����� ���� �����).';
$strEnabled = '���������';
$strEnd = 'ʳ����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = '���������';
$strEnglishPrivileges = ' ����������: ������ MySQL ��������� ��-��������� ';
$strError = '�������';
$strEstonian = '���������';
$strExcelOptions = '������������ Excel';
$strExecuteBookmarked = '�������� ���������� �����';
$strExplain = '��������� SQL';
$strExport = '�������';
$strExportToXML = '������������ � XML ������';
$strExtendedInserts = '��������� �������';
$strExtra = '���������';

$strFailedAttempts = '�������� �����';
$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� ��������';
$strFields = '����';
$strFieldsEmpty = ' �������� ������ ����! ';
$strFieldsEnclosedBy = '���� ����� �';
$strFieldsEscapedBy = '���� �����������';
$strFieldsTerminatedBy = '���� ��������';
$strFileAlreadyExists = '���� %s ���� �� ������, ����� ������ ����� �����, ��� ������� ����� ����� �������� �����.';
$strFileCouldNotBeRead = '��������� ��������� ����';
$strFileNameTemplate = '������ ����� �����';
$strFileNameTemplateHelp = '����������� __DB__ �� ����� ���� �����, __TABLE__ �� ����� ������� � %s������� strftime%s ����� ��� ���������� ������ ����, ���������� ������ ������ �����������. ����-���� ����� ����� ���� ���������.';
$strFileNameTemplateRemember = '�����\'����� ������';
$strFixed = '����������';
$strFlushPrivilegesNote = '�������: phpMyAdmin ������ ����� ������������ ������������� � ������� ���� MySQL. ���� ���� ������� ���� ���������� �� ����, �� ���������������� ��������, ���� � �� ������� ��������� ���� ������. � ����� ������� ��� ��������� %s��������������� �����%s ����� ������������.';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormEmpty = '�� ������ �������� ��� �����!';
$strFormat = '������';
$strFullText = '����� ������';
$strFunction = '�������';

$strGenBy = '�����������';
$strGenTime = '��� ���������';
$strGeneralRelationFeat = '�������� ���������';
$strGerman = 'ͳ������';
$strGlobal = '����������';
$strGlobalPrivileges = '��������� �����';
$strGlobalValue = '�������� ��������';
$strGo = '������';
$strGrantOption = 'Grant';
$strGrants = '�����';
$strGreek = '�������';
$strGzip = '���������� � "gzip"';

$strHasBeenAltered = '���� ������.';
$strHasBeenCreated = '���� ��������.';
$strHaveToShow = '��������� ������� ������� ���� �������� ��� ������';
$strHebrew = '�����';
$strHome = '�� �������';
$strHomepageOfficial = '�������� ������� phpMyAdmin';
$strHomepageSourceforge = '������������ phpMyAdmin � Sourceforge';
$strHost = '����';
$strHostEmpty = '������� ��\'� �����!';
$strHungarian = '���������';

$strId = 'ID';
$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������ ����������� ���� ���� ������� �������, ������� ��������� ������ ������ ����.';
$strIgnore = '������������';
$strIgnoringFile = '���������� ���� %s';
$strImportDocSQL = '����������� docSQL �����';
$strImportFiles = '������ �����';
$strImportFinished = '������ ���������';
$strInUse = '���������������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s ���� �������';
$strIndexName = '����� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexes = '�������';
$strInnodbStat = '������ InnoDB';
$strInsecureMySQL = '��� ���� ������������ ������ ��������� (root ��� ������) �� ���������� �������������� ����������� MySQL. ��� MySQL ������ � ����� ������� �������� ��� ���������� � ���� ��� ����\'������ ��� ��������� �� ��������� � �������.';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ����� �����';
$strInsertNewRow = '�������� ����� �����';
$strInsertTextfiles = '�������� ������� ����� � �������';
$strInsertedRowId = '��������� ����� id:';
$strInsertedRows = '������ �����:';
$strInstructions = '����������';
$strInvalidName = '"%s" - ������������� �����, �� �� ������ ��������������� ���� ��� ����� ���� �����/�������/����.';

$strJapanese = '��������';
$strJumpToDB = '������� �� ���� ����� &quot;%s&quot;.';
$strJustDelete = '����� ������� ������������ � ������� ����.';
$strJustDeleteDescr = '&quot;������&quot; ����������� ��� �� �������� ������ �� ������� �� ��� ��, ���� �� ������ ��������������� �����.';

$strKeepPass = '�� �������� ������';
$strKeyname = '��\'� �����';
$strKill = '�����';
$strKorean = '���������';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = '����� LaTeX';
$strLandscape = 'Landscape';
$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '������ �� �������';
$strLineFeed = '������ ���� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '����� ��������';
$strLinkNotFound = '˳�� �� ��������';
$strLinksTo = '˳��� ��';
$strLithuanian = '���������';
$strLoadExplanation = '�� ������������� ������� ������ �����, ����� �� ������ ������� �����, ���� ��� �� ��������.';
$strLoadMethod = '����� ������������';
$strLocalhost = '���������';
$strLocationTextfile = '������ ������������ ���������� �����';
$strLogPassword = '������:';
$strLogUsername = '��\'� �����������:';
$strLogin = '���� � �������';
$strLoginInformation = '������ ���������� (Login)';
$strLogout = '����� � �������';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = '�������� MIME-types';
$strMIME_available_transform = '�������� ������������';
$strMIME_description = '����';
$strMIME_file = '����� �����';
$strMIME_nodescription = '���� ����� ��� ����� ������������.<br />����� �������� ������, �� ������ %s.';
$strMIME_transformation = '������������ ̲��-���� ���������';
$strMIME_transformation_note = '��� �������� ������ �������� ����� � �� MIME-type �����������, ��������� %s����� �����������%s';
$strMIME_transformation_options = '����� ������������';
$strMIME_transformation_options_note = '����� ������� �������� ����� ������������ � ������ ������: \'a\',\'b\',\'c\'...<br />���� ��������� ������ ��������� ���� ("\") �� �������� ����� ("\'") � ��� ���������, �������� ����� ���� ���������� ��������� ���� (��������� \'\\\\xyz\' �� \'a\\\'b\').';
$strMIME_without = 'MIME-types ������ �������� �� ����� ������� ������� ������������';
$strMissingBracket = '����� �����';
$strModifications = '����������� ���� ���������';
$strModify = '������';
$strModifyIndexTopic = '������ ������';
$strMoreStatusVars = '�������� �������� �����';
$strMoveTable = '��������� ������� � (���� �����<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMoveTableSameNames = '�� ���� ��������� ������� ���� � ����!';
$strMultilingual = '�����������';
$strMustSelectFile = '��� ������� ����, ���� �� ������ ��������.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL ���������������.';
$strMySQLSaid = '³������ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% �� %pma_s3%';
$strMySQLShowProcess = '�������� �������';
$strMySQLShowStatus = '�������� ���� MySQL';
$strMySQLShowVars = '�������� �������� ����� MySQL';

$strName = '�����';
$strNext = '������';
$strNo = 'ͳ';
$strNoDatabases = '�� �������';
$strNoDatabasesSelected = '�� ������� ���� �����.';
$strNoDescription = '��� �����';
$strNoDropDatabases = '��������� "DROP DATABASE" ����������.';
$strNoExplain = '�� ��������� SQL';
$strNoFrames = '��� ������ phpMyAdmin ������� ������� � ��������� <b>������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '�� ��������� ������� �������!';
$strNoModification = '��� ����';
$strNoOptions = '��� ������ �� �� �����';
$strNoPassword = '��� ������';
$strNoPermission = '���-������ �� �� ������� ��� ���������� ����� %s.';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '��� �������';
$strNoQuery = '�� ������ SQL-�����!';
$strNoRights = '�� ��� ����� ���� ����������� ����!';
$strNoSpace = '����� ���� ��� ���������� ����� %s.';
$strNoTablesFound = '� �� �� �������� �������.';
$strNoUsersFound = '�� �������� �����������.';
$strNoUsersSelected = '�� ������� ������������.';
$strNoValidateSQL = '�� ��������� SQL';
$strNone = '����';
$strNotNumber = '�� �� �����!';
$strNotOK = '�� OK';
$strNotSet = '������� <b>%s</b> �� �������� ��� �� ��������� � %s';
$strNotValidNumber = ' ����������� ������� �����!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ��������� � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ���������';
$strNumTables = '�������';

$strOK = 'OK';
$strOftenQuotation = '�������� �����. �� ������ ������, �� ���� ���� char � varchar �������� � �����.';
$strOperations = '��������';
$strOptimizeTable = '����������� �������';
$strOptionalControls = '�� ������. ��������� ������� �� ��������� ����������� �������.';
$strOptionally = '�� ������';
$strOptions = '���������';
$strOr = '���';
$strOverhead = '������� �������';
$strOverwriteExisting = '������� ������� �����';

$strPHP40203 = '�� ������������� ����� PHP 4.2.3, ��� �� �������� ������� ��� ����� � multi-byte strings (mbstring). ��� PHP bug report 19404. �� ����� PHP �� ������������� ��������������� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPageNumber = '����� �������:';
$strPaperSize = '������ ������';
$strPartialText = '������� ������';
$strPassword = '������';
$strPasswordChanged = '������ ��� %s ������ ������.';
$strPasswordEmpty = '�������� ������!';
$strPasswordNotSame = '����� �� �������!';
$strPdfDbSchema = '����� ���� ����� "%s" - ������� %s';
$strPdfInvalidPageNum = '�� ����������� ����� PDF �������!';
$strPdfInvalidTblName = '������� "%s" �� ����!';
$strPdfNoTables = '������� ����';
$strPerHour = '�� ������';
$strPerMinute = '�� �������';
$strPerSecond = '�� �������';
$strPhoneBook = '��������� �����';
$strPhp = '�������� PHP ���';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '����� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������� ���� ����������� � ������ ���������������� ����!';
$strPortrait = 'Portrait';
$strPos1 = '�������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyHasBeenDropped = '��������� ���� ���� �������';
$strPrimaryKeyName = '��\'� ���������� ����� ������� ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>�������</b> ���� ������ <b>����</b> ���������� �����!)';
$strPrint = '����';
$strPrintView = '����� ��� �����';
$strPrivDescAllPrivileges = '��������� �� ����� �� �������� GRANT.';
$strPrivDescAlter = '��������� �������� ��������� ������� �������.';
$strPrivDescCreateDb = '��������� ���������� ��� ���� ����� �� �������.';
$strPrivDescCreateTbl = '��������� ���������� ��� �������.';
$strPrivDescCreateTmpTable = '��������� ���������� �������� �������.';
$strPrivDescDelete = '��������� ��������� ���� � �������.';
$strPrivDescDropDb = '��������� ��������� ���� ����� �� �������.';
$strPrivDescDropTbl = '��������� ��������� �������.';
$strPrivDescExecute = '��������� ��������� ���������� ��������; ����������� ��� ���� ���� MySQL.';
$strPrivDescFile = '��������� ������ ����� � �����, �� ������� � �����.';
$strPrivDescGrant = '��������� ��������� ������������ �� ���� ��� ���������������� ������� ����.';
$strPrivDescIndex = '��������� ��������� �� �������� �������.';
$strPrivDescInsert = '��������� ������� �� ����� �����.';
$strPrivDescLockTables = '��������� ���������� ������� ��� ������ ������.';
$strPrivDescMaxConnections = '�������� ������� ����� ��\'������, �� ���������� ���� ���������� �������� ������.';
$strPrivDescMaxQuestions = '�������� ������� ������, �� ���������� ���� �������� ������� �������� ������.';
$strPrivDescMaxUpdates = '�������� ������� ������, �� ������� ���� �� ����-��� ������� �� ���� �����, �� ���������� ���� �������� �������� ������.';
$strPrivDescProcess3 = '��������� ��������� ������� ����� ������������.';
$strPrivDescProcess4 = '��������� �������� ������ ������ � ������ �������.';
$strPrivDescReferences = '����������� ��� ���� ���� MySQL.';
$strPrivDescReload = '��������� ���������������� ��������� �� �������� ���� �������.';
$strPrivDescReplClient = '������ ����������� ����� ���������� �� � slaves / masters.';
$strPrivDescReplSlave = '��������� ��� ��������� slaves.';
$strPrivDescSelect = '��������� ������� �����.';
$strPrivDescShowDb = '������ ������ �� ������� ������ ��� �����.';
$strPrivDescShutdown = '��������� ��������� �������.';
$strPrivDescSuper = '��������� ��\'�������, ����� ���� ��������� ����������� ������� ��\'������; ����\'������ ��� ������� ��������������� �������� ����� �� ������������ ���������� ������ �� ���������� ������� ����� ������������.';
$strPrivDescUpdate = '��������� ���� �����.';
$strPrivDescUsage = '���� ����.';
$strPrivileges = '������';
$strPrivilegesReloaded = '����� ������ ���������������.';
$strProcesslist = '������ �������';
$strProperties = '����������';
$strPutColNames = '���� ����� ���� � ������� �����';

$strQBE = '����� ����� ��������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryFrame = '³��� ������';
$strQueryFrameDebug = '���������� ������� ������������';
$strQueryFrameDebugBox = '������� ����� ������:\nDB: %s\nTable: %s\nServer: %s\n\n��������� ����� ������:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';
$strQueryOnDb = 'SQL-����� �� �� <b>%s</b>:';
$strQuerySQLHistory = 'SQL-history';
$strQueryStatistics = '<b>���������� ������</b>: � ������� �������, �� ������� ���� �������� %s ������.';
$strQueryTime = '����� ����������� %01.4f ���';
$strQueryType = '��� ������';
$strQueryWindowLock = '�� ����������� ��� ����� � ����� �����';

$strReType = 'ϳ�����������';
$strReceived = '��������';
$strRecords = '������';
$strReferentialIntegrity = '������ ��������� ����� �� ���� ��������:';
$strRelationNotWorking = '��������� ��������� ������ �� ������������ ��������� ������������. ��� ����, ��� ��������� ����, ��������� %s���%s.';
$strRelationView = '�������� �����������';
$strRelationalSchema = '����� ��\'����';
$strRelations = '��\'����';
$strReloadFailed = '�� ������� ��������������� MySQL.';
$strReloadMySQL = '��������������� MySQL';
$strReloadingThePrivileges = '���������������� ����';
$strRememberReload = '�� �������� ��������������� ������.';
$strRemoveSelectedUsers = '������� �������� ������������';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '����������� �������';
$strReplace = '�������';
$strReplaceNULLBy = '������� NULL ��';
$strReplaceTable = '������� ���� ������� ������ � �����';
$strReset = '��������������';
$strResourceLimits = '��������� �������';
$strRevoke = '³������';
$strRevokeAndDelete = '³������ �� ������� ����� ������������ �� ������� �� ���� �����.';
$strRevokeAndDeleteDescr = '����������� ��� �� ������ ���� ����� ������������ (USAGE) �� ��� ��, ���� �� ������ ��������������� �����.';
$strRevokeGrant = '³������ ������� ����';
$strRevokeGrantMessage = '���� ������� ������� ���� ��� %s';
$strRevokeMessage = '�� ������ ������ ��� %s';
$strRevokePriv = '³������ ������';
$strRowLength = '������� �����';
$strRowSize = ' ����� ����� ';
$strRows = '�����';
$strRowsFrom = '����� �';
$strRowsModeFlippedHorizontal = '������������� (rotated headers)';
$strRowsModeHorizontal = ' ������������� ';
$strRowsModeOptions = '-�� %s � ��������� ��������� ����� ����� %s ����� ';
$strRowsModeVertical = ' ����������� ';
$strRowsStatistic = '���������� �����';
$strRunQuery = '�������� �����';
$strRunSQLQuery = '�������� SQL �����(�) �� �� %�';
$strRunning = '�� %s';
$strRussian = '��������';

$strSQL = 'SQL';
$strSQLOptions = 'SQL �����';
$strSQLParserBugMessage = '������� �� ������� ������� � ������ SQL. ����� ���������� ��������� �� �������� ���� � �� ��������� ����� � ������ �����. ����� �������� �������� ������� ���� ���� �� �� �� ����������� ���� � ��������� ������ ���������� ���� ������ � ����� �������. ��������� �������� ��� ����� �� ��������� �������� MySQL � �������� ������. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������. ���� � ��� ��� �� ��������� �������� �� ������ ���� �������, � � �������� ������ ������ �����������, ����� ��������� ��� ������ SQL ����� �� ������ ������, ���� ������ � ������� ��������, � ������ ����������� ��� ������� � ������� ����� � ����� CUT �����:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. ����������� MySQL ������� ��� ������� ������ ����� (���� � ����) ����� ���� ��������� ��� � ���������� ��������.';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = '����������� �������������';
$strSQPBugUnclosedQuote = '�� ������ �����';
$strSQPBugUnknownPunctuation = '�������� ������ ����������';
$strSave = '��������';
$strSaveOnServer = '�������� �� ������ � �������� %s ';
$strScaleFactorSmall = '������� ����� ������� ��� ����� ������� ���� �������';
$strSearch = '������';
$strSearchFormTitle = '������ � ��� �����';
$strSearchInTables = '��������� �������:';
$strSearchNeedle = '����� �� ��������, �� ������� ������ (�����: "%"):';
$strSearchOption1 = '������� ���� � ���';
$strSearchOption2 = '�� �����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '���������� �����';
$strSearchResultsFor = '���������� ������ "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSecretRequired = '��������������� ���� ������� �������� ����� (������).';
$strSelect = '�������';
$strSelectADb = '����� ������� ��';
$strSelectAll = '³������ ���';
$strSelectFields = '������� ���� (���������� ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '������� �������';
$strSend = '³������';
$strSent = '³���������';
$strServer = '������ %s';
$strServerChoice = '���� �������';
$strServerStatus = '���������� ��� ������ �������';
$strServerStatusUptime = '��� MySQL ������ ������ %s. ��������� %s.';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '�����';
$strServerTrafficNotes = '<b>������ �������</b>: ������� ��������� ���������� ������������ ����� ��� MySQL �������� � ������� ���� �������.';
$strServerVars = '����� ������� �� ������������';
$strServerVersion = '����� �������';
$strSessionValue = '�������� ���';
$strSetEnumVal = '��� ���� ���� "enum" �� "set", ������ �������� ����� ������ �������: \'a\',\'b\',\'c\'...<br />���� ��� ���� ������� ������ �������� ���� ����� ("\"") ��� �������� ����� ("\'") ������� ��� �������, �������� ����� ���� �������� ���� ����� (���������, \'\\\\xyz\' �� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowCols = '�������� �������';
$strShowDatadictAs = '������ ��������';
$strShowFullQueries = '�������� ����� ������';
$strShowGrid = '�������� ����';
$strShowPHPInfo = '�������� ���������� ��� PHP';
$strShowTableDimension = '�������� ������ �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ����� ����� ����� ';
$strShowingRecords = '�������� ������ ';
$strSimplifiedChinese = '��������� ��������';
$strSingly = '(������)';
$strSize = '�����';
$strSort = '�����������';
$strSpaceUsage = '������, �� ���������������';
$strSplitWordsWithSpace = '����� �������� ������� (" ").';
$strStatCheckTime = '���������';
$strStatCreateTime = '��������';
$strStatUpdateTime = '���������';
$strStatement = '��������';
$strStatus = '������';
$strStrucCSV = 'CSV ����';
$strStrucData = '��������� � ����';
$strStrucDrop = '������ ��������� �������';
$strStrucExcelCSV = 'CSV ��� ����� MS Excel';
$strStrucOnly = '���� ���������';
$strStructPropose = '������������� ��������� �������';
$strStructure = '���������';
$strSubmit = '��������';
$strSuccess = '��� SQL-����� ���� ������ ��������';
$strSum = '������';
$strSwedish = '��������';
$strSwitchToTable = '������� �� ���������� �������';

$strTable = '������� ';
$strTableComments = '�������� �� �������';
$strTableEmpty = '������� ����� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '���� ������� ��� ������� %s';
$strTableMaintenance = '������������� �������';
$strTableOfContents = '����';
$strTableOptions = '������������ �������';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTables = '%s ������(�)';
$strTblPrivileges = '�����, �� ���������� �������';
$strTextAreaLength = ' ����� ������ �������,<br /> �� ���� �� ���� ���� ������������ ';
$strThai = '�������';
$strTheContent = '���� ����� ���� �����������.';
$strTheContents = '���� ����� ������ ���� ������� ��� ����� � ����������� ��������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� ����.';
$strThisHost = '��� ����';
$strThisNotDirectory = '�� �� �������';
$strThreadSuccessfullyKilled = '������ %s ���������.';
$strTime = '���';
$strToggleScratchboard = '�������� �������� (scratchboard)';
$strTotal = '������';
$strTotalUC = '�����';
$strTraditionalChinese = '��������� ����������';
$strTraffic = '������';
$strTransformation_image_jpeg__inline = '³������� clickable thumbnail; �����: ������, ������ � ������� (������ �������� ���������)';
$strTransformation_image_jpeg__link = '³������� ��� �� ����� ������� (direct blob download, i.e.).';
$strTransformation_image_png__inline = '���. image/jpeg: inline';
$strTransformation_text_plain__dateformat = '����� ���� TIME, TIMESTAMP �� DATETIME � ������������ ���� �������� �� ���������� ������� ����. ����� ����� - �� �������� (� �������) ���� ���� ������ �� ������ ���� (�� �������������: 0). ����� ����� - ����� ������ ���� �������� �� ��������� ������� ��� PHP strftime().';
$strTransformation_text_plain__external = 'LINUX ONLY: ������� �������� �������� � ���� ���� ����� ����������� ���. ������� ����������� ���� ��������. �� ������������� ��������� � Tidy, ��� ����� ����� HTML ���. � �������� �������, ��� ������� ��������� ������������ ���� libraries/transformations/text_plain__external.inc.php �� ������� �������� ��������� ��� �������. � ������ �������, ����� ����� - ������� �������, �� �� ������ ��������������� � ����� - ��������� ��� �������. ����� �����, ����������� � 1, ���� ����������� ���� �������������� htmlspecialchars() (�� �������������: 1). �������� �����, ����������� � 1, ���� �������� NOWRAP �� ����� ������ ��������, ��� �� ���� ���� ���� �������� ��� ���������������� (�� �������������: 1)';
$strTransformation_text_plain__formatted = '������ ��������� ������������ ����. �� ��������� �����������.';
$strTransformation_text_plain__imagelink = '������ ������� � ���, ���� ������ ����� �����; ����� ����� - �������, ������ �� "http://domain.com/", ����� - ������ � �������, ����� - ������.';
$strTransformation_text_plain__link = '������ ���, ���� ������ ����� �����; ����� ����� - �������, ������ �� "http://domain.com/", ����� ����� - title ��� ����.';
$strTransformation_text_plain__substr = '������ ���� ������� ������. ����� ����� - �� ������ ���� ������� � ����� ���� ������� �������� ���� ������ (�� �������������: 0). ����� ����� - ������� ������ ������ ���� ��������. ���� ���� ������� - ���������� ����� ������ ������. ����� ����� - ������� �� ������� ���� ������ ���� ���������� ���������� �������� (�� �������������: ...) .';
$strTransformation_text_plain__unformatted = '³������� HTML ��� �� HTML entities. HTML ������������ �� ����������.';
$strTruncateQueries = '������� �������� ������';
$strTurkish = '��������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '����� �� ������';
$strUnicode = '������';
$strUnique = '���������';
$strUnknown = '�������';
$strUnselectAll = '����� �� ������';
$strUpdComTab = '�� ����������� �� �������� ���� ������� Column_comments ����� �������� � ������������';
$strUpdatePrivMessage = '���� ������ ������ ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ���� ���������.';
$strUpdateQuery = '��������� �����';
$strUsage = '������������';
$strUseBackquotes = '�������� ����� � ������ ������� � ����';
$strUseHostTable = '��������������� ������� �����';
$strUseTables = '��������������� �������';
$strUseTextField = '��������������� �������� ����';
$strUser = '����������';
$strUserAlreadyExists = '���������� %s ��� ����!';
$strUserEmpty = '������� �\'�� �����������!';
$strUserName = '��\'� �����������';
$strUserNotFound = '��������� ����������� �� �������� � ������� ����.';
$strUserOverview = '����� ������������';
$strUsers = '�����������';
$strUsersDeleted = '³������� ������������ ������ �������.';
$strUsersHavingAccessToDb = '�����������, ���� ����� ������ �� &quot;%s&quot;';

$strValidateSQL = '��������� SQL';
$strValidatorError = '�� ���� ��������� �������� SQL. ����� ��������������� �� ������������� ��������� php extensions �� ������� � %s������������%s.';
$strValue = '��������';
$strVar = '�����';
$strViewDump = '����������� ���� (�����) �������';
$strViewDumpDB = '����������� ���� (�����) ��';
$strViewDumpDatabases = '����������� dump (�����) ��� �����';

$strWebServerUploadDirectory = '������� ���-������� ��� ������������ ����� (upload directory)';
$strWebServerUploadDirectoryError = '������������ ���� ������� ��� ������������ ����� �����������';
$strWelcome = '������� ������� �� %s';
$strWestEuropean = '������� �����������';
$strWildcard = '������';
$strWithChecked = '� ���������:';
$strWritingCommentNotPossible = '��������� ������ ��������';
$strWritingRelationNotPossible = '��������� ������ ��\'����';
$strWrongUser = '������� ����/������. ������ �� ���������.';

$strXML = 'XML';

$strYes = '���';

$strZeroRemovesTheLimit = '�������: ������������ ���� ����� � 0 (����) ����� ���������.';
$strZip = '���������� � "zip"';
// To translate

$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate

$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';//to translate
$strLatexContinued = '(continued)';//to translate
$strLatexContent = 'Content of table __TABLE__';//to translate
$strLatexIncludeCaption = 'Include table caption';//to translate
$strLatexCaption = 'Table caption';//to translate
$strLatexLabel = 'Label key';//to translate
$strLatexContinuedCaption = 'Continued table caption';//to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate
$strLogServer = 'Server';  //to translate
$strSortByKey = 'Sort by key';  //to translate
$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
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
?>
