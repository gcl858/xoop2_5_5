<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 3768 2009-10-23 08:37:41Z wishcraft $
 */

// _LANGCODE: tw
// _CHARSET : Big5
// Translator: �I��U�q���u�@�� http://ck2tw.net/

define( "SHOW_HIDE_HELP", "���/���� ������T" );

// License
define('LICENSE_NOT_WRITEABLE', '�q�Τ��@�\�i�� %s�A<br/><font style="colour:#ff0000">�г]�w ../include/license.php �ݩʬ��u�i�g�J�v</font>');
define('LICENSE_IS_WRITEABLE', '�q�Τ��@�\�i�� %s');

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s �����M��" );
define( "CHAR_ENCODING", "�r�Ŷ��s�X" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "�򥻻ݨD" );
define( "_PHP_VERSION", "PHP ����" );
define( "RECOMMENDED_SETTINGS", "��ĳ�]�w" );
define( "RECOMMENDED_EXTENSIONS", "��ĳ�ҥΪ������M��" );
define( "SETTING_NAME", "�]�w�W��" );
define( "RECOMMENDED", "����" );
define( "CURRENT", "�ثe" );
define( "RECOMMENDED_EXTENSIONS_MSG", "�o�ǩ����M�󤣬O�@��Τᥲ���w�˩M�ҥΪ��A���O���ǥ\��ݭn�o�ǩ����M��~��ϥΡ]�Ҧp�h�r�`�y���� RSS �䴩���^�A�]���A���˦w�˩M�ҥγo�ǩ����M��C" );
define( "NONE", "�L" );
define( "SUCCESS", "����" );
define( "WARNING", "�`�N" );
define( "FAILED", "����" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS �w�˺��F" );

define( "LANGUAGE_SELECTION", "��ܻy��" );
define( "LANGUAGE_SELECTION_TITLE", "��ܻy��");        // L128
define( "INTRODUCTION", "����" );
define( "INTRODUCTION_TITLE", "�w��ϥ� XOOPS �w�˺��F�A�Ы����ܶi��w�ˡC" );        // L0
define( "CONFIGURATION_CHECK", "�]�w�ˬd" );
define( "CONFIGURATION_CHECK_TITLE", "�ˬd�A�����A���]�w" );
define( "PATHS_SETTINGS", "���|�]�w" );
define( "PATHS_SETTINGS_TITLE", "���|�]�w" );
define( "DATABASE_CONNECTION", "��Ʈw�s���]�w" );
define( "DATABASE_CONNECTION_TITLE", "��Ʈw�s���]�w" );
define( "DATABASE_CONFIG", "��Ʈw�]�w" );
define( "DATABASE_CONFIG_TITLE", "��Ʈw�]�w" );
define( "CONFIG_SAVE", "�x�s�]�w" );
define( "CONFIG_SAVE_TITLE", "�x�s�]�w" );
define( "TABLES_CREATION", "�إ߸�ƪ�" );
define( "TABLES_CREATION_TITLE", "��ƪ�إ�" );
define( "INITIAL_SETTINGS", "��l�]�w" );
define( "INITIAL_SETTINGS_TITLE", "�п�J��l�]�w" );
define( "DATA_INSERTION", "�s�W���" );
define( "DATA_INSERTION_TITLE", "�s�W��ƨ��Ʈw" );
define( "WELCOME", "�w��ϥ� XOOPS" );
define( "WELCOME_TITLE", "�w��i�J XOOPS ����" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS ��ڸ��|" );
define( "XOOPS_URLS", "XOOPS �������|" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS ��ڸ��|�G");
define("XOOPS_ROOT_PATH_HELP","XOOPS �ڥؿ�����ڸ��|�A�������n�['/'");

define( "XOOPS_LIB_PATH_LABEL", "XOOPS �禡�w�]library directory�^" );
define( "XOOPS_LIB_PATH_HELP", "XOOPS �禡�w�]library directory�^����ڸ��|�A�������n�['/'�C�w���_���A��ĳ�N�Ӹ�Ƨ��ಾ�� " . XOOPS_ROOT_PATH_LABEL . " �H�~�C");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS ��Ƥ��" );
define( "XOOPS_DATA_PATH_HELP", "XOOPS ��Ƥ��]�ݩʥi�g�^�������ڸ��|�A�������n�['/'�C�w���_���A��ĳ�N�Ӹ�Ƨ��ಾ�� " . XOOPS_ROOT_PATH_LABEL . "���~�C" );

define( "XOOPS_URL_LABEL", "XOOPS �������|(URL)�G" ); // L56
define( "XOOPS_URL_HELP", "�y�X�] XOOPS �^���������}�A�������n�['/'" ); // L58

define( "LEGEND_CONNECTION", "��Ʈw���A���s���]�w" );
define( "LEGEND_DATABASE", "��Ʈw" ); // L51

define( "DB_HOST_LABEL", "��Ʈw�D���W�١G" );    // L27
define( "DB_HOST_HELP",  "�p�G���T�w�A�Шϥ� <em>localhost</em>�C"); // L67
define( "DB_USER_LABEL", "��Ʈw�Τ�b���G" );    // L28
define( "DB_USER_HELP",  "�Τ�n�J��Ʈw�D���÷s�ظ�Ʈw���b���C"); // L65
define( "DB_PASS_LABEL", "��Ʈw�Τ�K�X�G" );    // L52
define( "DB_PASS_HELP",  "�P��Ʈw�Τ�b���������K�X�C"); // L68
define( "DB_NAME_LABEL", "��Ʈw�W�١G" );    // L29
define( "DB_NAME_HELP",  "�Ω�w�� XOOPS ����Ʈw�W�١A�p�G���s�b�A�{���N�۰ʷs�ءC"); // L64
define( "DB_CHARSET_LABEL", "��Ʈw�r�Ŷ�" );
define( "DB_CHARSET_HELP",  "MySQL �䴩�r�Ŷ��]�w�A�q�ӥi�H�ĥΫ���W�h�Ω����x�s�M���e����C");
define( "DB_COLLATION_LABEL", "��Ʈw�s���չ�" );
define( "DB_COLLATION_HELP",  "��Ʈw�s���չ�O�Ω�r�Ť�����@�M�W�h�C");
define( "DB_PREFIX_LABEL", "��ƪ�e�m�r��G" );    // L30
define( "DB_PREFIX_HELP",  "�Ω�إ߸�ƪ�ɭԪ���e�m�r��A�p�G���T�w�A�ЫO���w�]�ȡC"); // L63
define( "DB_PCONNECT_LABEL", "��Ʈw����s���G" );    // L54
define( "DB_PCONNECT_HELP",  "��ĳ�����D���Τᤣ�n����C"); // L69
define("DB_DATABASE_LABEL","��ܭn�ϥΪ���Ʈw����");

define( "LEGEND_ADMIN_ACCOUNT", "�޲z���b���]�w" );
define("ADMIN_LOGIN_LABEL","�����޲z���b���G");
define("ADMIN_EMAIL_LABEL","�����޲z���l��G");
define("ADMIN_PASS_LABEL","�����޲z���K�X�G");
define("ADMIN_CONFIRMPASS_LABEL","�T�{�޲z���K�X�G");

// Buttons
define( "BUTTON_PREVIOUS", "�W�@�B" ); // L42
define( "BUTTON_NEXT", "�U�@�B" ); // L47

// Messages
define( "XOOPS_FOUND", "%s OK" );
define( "CHECKING_PERMISSIONS", "�T�{���M��Ƨ��v���K" ); // L82
define( "IS_NOT_WRITABLE", "��Ƨ� %s �ݩʰ�Ū" ); // L83
define( "IS_WRITABLE", "��Ƨ� %s �ݩʥi�g�J" ); // L84

define( "XOOPS_PATH_FOUND", "���| OK" );

define( "READY_CREATE_TABLES", "�S���j�M���ƪ�C<br />�w�˺��F�N�|�s�� XOOPS �t�Ωһݪ���ƪ�<br />�I�� <em>�U�@�B</em> ���榹�ާ@�C" );
define( "XOOPS_TABLES_FOUND", "��ƪ�w�s�b�C<br />�I�� <em>�U�@�B</em> �~��i��w��" ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS �t�θ�ƪ�s�ئ��\�C<br />�I�� <em>�U�@�B</em> �~��i��w�ˡC" );
define( "READY_INSERT_DATA", "�w�˵{���N�|�s�W�w�]��ƨ��Ʈw���C" );
define( "READY_SAVE_MAINFILE", "�w�˵{���N�|����w���]�w�x�s�� <em>mainfile.php</em>���C<br />�I�� <em>�U�@�B</em> ����s�ɡC" );
define( "SAVED_MAINFILE", "�x�s�]�w�� mainfile.php ��" );
define( "SAVED_MAINFILE_MSG", "XOOPS�w�˺��F�N�|��o�ǳ]�w�g�� <em>mainfile.php</em> �� <em>secure.php</em> �ɮפ��C �I�� <em>�U�@�B</em> �~��i��w�ˡC" );
define( "DATA_ALREADY_INSERTED", "��Ʈw���w����ơC<br />�I�� <em>�U�@�B</em> �~��i��w�ˡC" );
define( "DATA_INSERTED", "�s�W��l��ƨ��Ʈw���C<br />�I�� <em>�U�@�B</em> �~��i��w�ˡC" );


// %s is database name
define( "DATABASE_CREATED", "��Ʈw %s �g�J���\�I" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "�L�k�إ߸�ƪ� %s" ); // L118
define( "TABLE_CREATED", "��ƪ� %s �g�J���\ " ); // L45
define( "ROWS_INSERTED", "���\�g�J %d ����ƨ��ƪ� %s ��" ); // L119
define( "ROWS_FAILED", " %d ����Ƽg�J�� %s ��ƪ�ɥ���" ); // L120
define( "TABLE_ALTERED", "��ƪ� %s ��s���\ "); // L133
define( "TABLE_NOT_ALTERED", "��ƪ� %s ��s����"); // L134
define( "TABLE_DROPPED", "��ƪ� %s �R�����\ "); // L163
define( "TABLE_NOT_DROPPED", "��ƪ� %s �R������"); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "�L�kŪ�����w��Ƨ��A�нT�{�O�_�s�b�åB�]�w�ݩʬ��iŪ�C" );
define( "ERR_NO_XOOPS_FOUND", "�L�k�����w��Ƨ��C" );
define( "ERR_INVALID_EMAIL", "�L�Ī��q�l�l��" ); // L73
define( "ERR_REQUIRED", "�����ơC" ); // L41
define( "ERR_PASSWORD_MATCH", "�⦸��J���K�X���@�P�C" );
define( "ERR_NEED_WRITE_ACCESS", "�U�C��Ƨ��ݩʥ������iŪ�g�G<br />(UNIX/LINUX �t�γ]�w�� 666�BMacOS �t�γ]�w�� 777�BWinOS �t�Υh���uŪ�ݩ�)�C" );
define( "ERR_NO_DATABASE", "�L�k�s�W��Ʈw�A���p�����A���޲z���d�߸ԲӰT���C" ); // L31
define( "ERR_NO_DBCONNECTION", "�L�k�s�����Ʈw���A���C" ); // L106
define( "ERR_WRITING_CONSTANT", "%s �]�w���ѡC" ); // L122

define( "ERR_COPY_MAINFILE", "�L�k�N mainfile.dist.php �����e�ƻs�� mainfile.php ��" );
define( "ERR_WRITE_MAINFILE", "�L�k�g�J mainfile.php�C���ˬd����v���᭫�աC");
define( "ERR_READ_MAINFILE", "�L�kŪ�� mainfile.php�C" );

define( "ERR_INVALID_DBCHARSET", "�r�Ŷ� '%s' ���䴩�C" );
define( "ERR_INVALID_DBCOLLATION", "�s���չ� '%s' ���䴩�C" );
define( "ERR_CHARSET_NOT_SET", "����]�w XOOPS ��Ʈw���w�]�r�Ŷ��C" );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "�䴩");

define( "LOGIN", "����");
define( "LOGIN_TITLE", "����");
define( "USER_LOGIN", "�޲z���n�J" );
define( "USERNAME", "�b�� :");
define( "PASSWORD", "�K�X :");

define( "ICONV_CONVERSION", "�r�Ŷ��ഫ");
define( "ZLIB_COMPRESSION", "zlib���Y");
define( "IMAGE_FUNCTIONS", "�Ϥ��\��");
define( "IMAGE_METAS", "�Ϥ���T�]exif�^");
define( "FILTER_FUNCTIONS", "�z��\��");

define( "ADMIN_EXIST", "�޲z���b���w�s�b�A<br />�I�� <strong>�U�@�B</strong> �i��U�@�B�J");

define( "CONFIG_SITE", "�����]�w" );
define( "CONFIG_SITE_TITLE", "�����]�w" );
define( "MODULES", "�w�˼Ҳ�" );
define( "MODULES_TITLE", "�w�˼Ҳ�" );
define( "THEME", "��ܧG��" );
define( "THEME_TITLE", "��ܹw�]�G��" );

define( "INSTALLED_MODULES", "�Ҳդw�w��<br />���I�� <strong>�U�@�B</strong> �~��w��");
define( "NO_MODULES_FOUND", "�Ҳդ��s�b<br />���I�� <strong>�U�@�B</strong> �~��w��");
define( "NO_INSTALLED_MODULES", "�Ҳզw�˥���<br />���I�� <strong>�U�@�B</strong> �~��w��");

define( "THEME_NO_SCREENSHOT", "�䤣���Y��");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "�K�X�j�סG");
define( "PASSWORD_DESC", "����J�K�X");
define( "PASSWORD_GENERATOR", "�K�X���;�");
define( "PASSWORD_GENERATE", "���ͱK�X");
define( "PASSWORD_COPY", "�ƻs");

define( "PASSWORD_VERY_WEAK", "�W�t");
define( "PASSWORD_WEAK", "�t");
define( "PASSWORD_BETTER", "�@��");
define( "PASSWORD_MEDIUM", "����");
define( "PASSWORD_STRONG", "�j");
define( "PASSWORD_STRONGEST", "�j�j");
?>
