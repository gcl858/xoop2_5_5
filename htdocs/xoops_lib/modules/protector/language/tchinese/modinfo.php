<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector ���@�Ҳ�");

// A brief description of this module
define($constpref."_DESC","���Ҳեi�O�@�z��XOOPS�����K��D���U�ا����A�ҦpDos���_�����B���X�����ΦU�ئìV");

// Menu
define($constpref."_ADMININDEX","���@����");
define($constpref."_ADVISORY","�w����ĳ");
define($constpref."_PREFIXMANAGER","�e��r��޲z��");
define($constpref.'_ADMENU_MYBLOCKSADMIN','�v��') ;

// Configs
define($constpref.'_GLOBAL_DISBL','�Ȯ�����');
define($constpref.'_GLOBAL_DISBLDSC','�Ҧ������@�Ȯ������C<br />�b���ի�A�O�ѤF�N���ﶵ�զ^�ӡC');

define($constpref.'_DEFAULT_LANG','�w�]�y�t');
define($constpref.'_DEFAULT_LANGDSC','���w�y�t�b���� common.php ���e');

define($constpref.'_RELIABLE_IPS','�i�H�઺IP');
define($constpref.'_RELIABLE_IPSDSC','�i�Ρu|�v�Ÿ��j�}IP�C�u^�v��ܬۦP��IP�}�Y�A�u$�v��ܬۦP��IP�����C');

define($constpref.'_LOG_LEVEL','��������');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','�ױ��� IP ���ɶ��]��^');

define($constpref.'_LOGLEVEL0','�L');
define($constpref.'_LOGLEVEL15','²��');
define($constpref.'_LOGLEVEL63','�@��');
define($constpref.'_LOGLEVEL255','����');

define($constpref.'_HIJACK_TOPBIT','Session �T���ﵦ');
define($constpref.'_HIJACK_TOPBITDSC','���� Session �T���G�w�]��32 bit�]��Y��@�T�wIP�^�C<br />���p�z��IP�O���T�w���A�ЧQ��bits�ƭȨӳ]�wIP�d��C<br />�Ҧp�G���ϱz�� IP �i�H���� 192.168.0.0 �� 192.168.0.255 ���d�򤤡A�г]�� 24(bit)');
define($constpref.'_HIJACK_DENYGP','�n�J�ᤣ���\ IP ���ܰʪ��s��');
define($constpref.'_HIJACK_DENYGPDSC','���� Session �T���G�п�ܤ����\ IP ���ܰʪ��s�աC<b>�]��ĳ��޲z���s�աu1�v���}�^</b>');
define($constpref.'_SAN_NULLBYTE','�Ŧ줸�ա]null-bytes�^�B�z');
define($constpref.'_SAN_NULLBYTEDSC','�����r�� "\\0" �ɱ`�Q�c�N�����ҨϥΡA�@�ӪŦ줸�ա]null-byte�^ �N�|�Q�ܧ󬰪ťաC<b>�]�j�P��ĳ�]���u�O�v�^</b>');
define($constpref.'_DIE_NULLBYTE','���p���Ŧ줸�ա]null-byte�^�N�j���X');
define($constpref.'_DIE_NULLBYTEDSC','�����r�� "\\0" �ɱ`�Q�c�N�����ҨϥΡA�@�ӪŦ줸�ա]null-byte�^ �N�|�Q�ܧ󬰪ťաC<b>�]�j�P��ĳ�]���u�O�v�^</b>');
define($constpref.'_DIE_BADEXT','���p���c�N�ɮ׳Q�W�ǴN�j���X');
define($constpref.'_DIE_BADEXTDSC','���p���H���ϤW�Ǥ@�ǥi�H���檺�c�N�ɮסA�Ҧp���ɦW��.php���ɮסA���ҲձN�j���XXOOPS�C<br />���p�z�ɱ`�|�W�� PHP �����ɨ� B-Wiki �� PukiWikiMod�A����бN���ﶵ�]���u�_�v�C');
define($constpref.'_CONTAMI_ACTION','�o�{�ܼƦìV�ɺ����Ӷi�椰��ʧ@�H');
define($constpref.'_CONTAMI_ACTIONDS','���ǤH���ϦìVXOOPS�t�Ϊ������ܼƮɡA�п�ܺ����n�Ĩ�����ʧ@�H<b>�]��ĳ��ܡu�ťյe���v�^</b>');
define($constpref.'_ISOCOM_ACTION','�o�{�����諸���ѻy�k�ɡA�����Ӷi�椰��ʧ@�H');
define($constpref.'_ISOCOM_ACTIONDSC','�����Ʈw���X�����G��u/*�v�Q�o�{�ɡA�п�ܺ����n�Ĩ�����ʧ@�C<br />�u�i��ɱj�v�N���b�����B�W�[�t�@�ӡu*/�v�C<b>�]��ĳ��ܡu�i��ɱj�v�^</b>');
define($constpref.'_UNION_ACTION','�o�{UNION�y�k�ɡA�����Ӷi�椰��ʧ@�H');
define($constpref.'_UNION_ACTIONDSC','�����Ʈw���X�����G��@�ǻy�k�pSQL���uUNION�v�Q�o�{�ɡA�п�ܺ����n�Ĩ�����ʧ@�C<br />�u�i��ɱj�v�N���N�uunion�v�אּ�uuni-on�v�C<b>�]��ĳ��ܡu�i��ɱj�v�^');
define($constpref.'_ID_INTVAL','�j��N�Ʀr�����ܼơ]���O�y�����^�ȳ]�����');
define($constpref.'_ID_INTVALDSC','�Ҧ��ܼƦW�٬��u*id�v����ȳ��N�Q�j��]����ơC�o�ӿﶵ�i�H�O�@�z�קK���� XSS�]����������{���^�H�� SQL Injections�]���X�����^�C���M�O��ĳ�z�N�����]���u�O�v�A�����|�]���i��y�������ҲչB�@�����`�]�p�G�ӼҲժ��ǻ����ѼƽT��O�n��r���ܡ^�C');
define($constpref.'_FILE_DOTDOT','�קK�Q�ؿ���V�]Directroy Traversals�^');
define($constpref.'_FILE_DOTDOTDSC','���|�N�Ҧ����ݰ_���O�n�i��ؿ���V�]Directroy Traversals�^���ШD���O���A�ư����u..�v�A�H�קK�Q�ؿ���V�C');

define($constpref.'_BF_COUNT','����ɤO�����k');
define($constpref.'_BF_COUNTDSC','�]�w�z���\�ΦW�̦b�Q���չϵn�J�����ơA���p�Y�ǤH�n�J���Ѧ��ư��󦹼Ʀr�A����L��IP�N�|�۰ʳQ�ױ��C');

define($constpref.'_BWLIMIT_COUNT','�W�e����');
define($constpref.'_BWLIMIT_COUNTDSC','���w�b�ʱ�������� mainfile.php �̤j���s���q�C�@��ӻ��A�b�D��CPU�įਬ�����ܡA�������� 0�C���ƭȭY�p��10�h�����������C');

define($constpref.'_DOS_SKIPMODS','�קK�Q�~�P�����_�����κ������Ϊ��Ҳ�');
define($constpref.'_DOS_SKIPMODSDSC','�Y�����ر`�`�|���s��z�e�����ҲաA�п�J�ӼҲժ���Ƨ��W�W�١A�H�קK�Q�~���O���_�����κ������ΡA�i�Ρu|�v���}�C');

define($constpref.'_DOS_EXPIRE','���t���������ʱ��ɶ��]��^');
define($constpref.'_DOS_EXPIREDSC','�w�ﰪ�W�v�����s��z�]F5�����^�H�����t�����������ΡA�]�w���ʱ��ɶ����ȡC');

define($constpref.'_DOS_F5COUNT','F5�������P�_�зǡ]���^');
define($constpref.'_DOS_F5COUNTDSC','��������_�����A���w�e�\���s��z���X�z���ơA�H�P�_�O�_�n��@�c�N�����C');
define($constpref.'_DOS_F5ACTION','��IF5�������]���@��');

define($constpref.'_DOS_CRCOUNT','�������Ϊ��P�_�зǡ]���^');
define($constpref.'_DOS_CRCOUNTDSC','�w�����t�����������ΡA���w�e�\�s���X�z���ơA�H�P�_�O�_�n��@�c�N���������ΡC');
define($constpref.'_DOS_CRACTION','��I���t���������Ϊ��]���@��');

define($constpref.'_DOS_CRSAFE','���\Ū����������������');
define($constpref.'_DOS_CRSAFEDSC','�Q�Υ��W��F���]perl regex pattern�^�Ӥ��\Ū���������������ΡG���p�ŦX�]�w����A���򦹺������αN���|�Q�����c�N���������ΡC�Ҧp�G<b>/(bingbot|Googlebot|Yahoo! Slurp)/i</b>');

define($constpref.'_OPT_NONE','�L�]�Ȭ����^');
define($constpref.'_OPT_SAN','�i��ɱj');
define($constpref.'_OPT_EXIT','�ťյe��');
define($constpref.'_OPT_BIP','�ä[�ױ���IP');
define($constpref.'_OPT_BIPTIME0','�Ȯɾױ���IP');

define($constpref.'_DOSOPT_NONE','�L�]�Ȭ����^');
define($constpref.'_DOSOPT_SLEEP','�ίv���A');
define($constpref.'_DOSOPT_EXIT','�ťյe��');
define($constpref.'_DOSOPT_BIP','�ä[�ױ���IP');
define($constpref.'_DOSOPT_BIPTIME0','�Ȯɾױ���IP');
define($constpref.'_DOSOPT_HTA','�ھ� .htaccess �Ӿױ��]����ʸm�^');

define($constpref.'_BIP_EXCEPT','IP�û����|�Q�C�J�¦W�檺�s��');
define($constpref.'_BIP_EXCEPTDSC','���wIP�û����|�Q�C�J�¦W�檺�s�աC<b>�]��ĳ��޲z���s�աu1�v���}�^</b>');

define($constpref.'_DISABLES','���� XOOPS �����M�I���\��');

define($constpref.'_DBLAYERTRAP','�}�Ҹ�Ʈw�h�Ū������X����');
define($constpref.'_DBLAYERTRAPDSC','���\��X�G�i�H�����������X�����C���\��ݭn�Ӧ۩� databasefactory���䴩�A�z�i�H�b�w���ʫ�ĳ�����d�֤��C���]�w�����}�ҡA�Ф������C');
define($constpref.'_DBTRAPWOSRV','�w�����X�������ˬd _SERVER �ܼ�');
define($constpref.'_DBTRAPWOSRVDSC','�����D�����}�Ҹ�Ʈw�h�Ū������X�����C�o�|�ɭP�������~�õ����޽X�����C���p�z���o��o�˪����~�A�бN�����إ��}�C�z���Ӫ��D�����ط|��z��Ʈw�h�Ū������X��������O�C');

define($constpref.'_BIGUMBRELLA','�ҥ� XSS ������������@��');
define($constpref.'_BIGUMBRELLADSC','�o�i�H���z�K�����j������ XSS ������z�I�����A���ëD 100%');

define($constpref.'_SPAMURI4U','�����U����G�w���U�ϥΪ̵o�G�����}�q');
define($constpref.'_SPAMURI4UDSC','���p�G���F�޲z���H�~���w���U�ϥΪ̦b�峹���o�G�����}�ƶq�j����w�ȡA����Ӥ峹�|�Q�����U���峹�C0 �N�����������\��C');
define($constpref.'_SPAMURI4G','�����U����G�ΦW�ϥΪ̵o�G�����}�q');
define($constpref.'_SPAMURI4GDSC','���p�ΦW�ϥΪ̦b�峹���o�G�����}�ƶq�j����w�ȡA����Ӥ峹�|�Q�����U���峹�C0 �N�����������\��C');

//3.40b
define($constpref."_ADMINHOME","����");
define($constpref."_ADMINABOUT","����");
//3.50
define($constpref.'_STOPFORUMSPAM_ACTION','����U���d��');
define($constpref.'_STOPFORUMSPAM_ACTIONDSC','�q www.stopforumspam.com��Ʈw���o���̪���ƥH���שU���o���̡C�o�ݭn php CURL �禡�w�C');


}

?>
