<?php
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldVips" ) == false ) {
	new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldVips {
		public function __construct()
		{
		}
		public function loadAdvantages()
		{
			global $ldTpl;
			global $PANELUSER_PREMISSIONS;
			global $PANELUSER_MODULE;
			$ldTpl->set("MODIFY_DATA_FREE", ($PANELUSER_PREMISSIONS['MODIFY_DATA'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MODIFY_DATA_VIPS", ($PANELUSER_PREMISSIONS['MODIFY_DATA'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MODIFY_DATA_VIPG", ($PANELUSER_PREMISSIONS['MODIFY_DATA'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MODIFY_DATA_VIP3", ($PANELUSER_PREMISSIONS['MODIFY_DATA'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MODIFY_DATA_VIP4", ($PANELUSER_PREMISSIONS['MODIFY_DATA'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MODIFY_DATA_VIP5", ($PANELUSER_PREMISSIONS['MODIFY_DATA'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CLEAN_VAULT_FREE", ($PANELUSER_PREMISSIONS['CLEAN_VAULT'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CLEAN_VAULT_VIPS", ($PANELUSER_PREMISSIONS['CLEAN_VAULT'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_VAULT_VIPG", ($PANELUSER_PREMISSIONS['CLEAN_VAULT'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_VAULT_VIP3", ($PANELUSER_PREMISSIONS['CLEAN_VAULT'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_VAULT_VIP4", ($PANELUSER_PREMISSIONS['CLEAN_VAULT'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CLEAN_VAULT_VIP5", ($PANELUSER_PREMISSIONS['CLEAN_VAULT'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("DOUBLE_VAULT_FREE", ($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("DOUBLE_VAULT_VIPS", ($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("DOUBLE_VAULT_VIPG", ($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("DOUBLE_VAULT_VIP3", ($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("DOUBLE_VAULT_VIP4", ($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("DOUBLE_VAULT_VIP5", ($PANELUSER_PREMISSIONS['DOUBLE_VAULT'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LOG_BUYS_FREE", ($PANELUSER_PREMISSIONS['LOG_BUYS'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("LOG_BUYS_VIPS", ($PANELUSER_PREMISSIONS['LOG_BUYS'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("LOG_BUYS_VIPG", ($PANELUSER_PREMISSIONS['LOG_BUYS'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("LOG_BUYS_VIP3", ($PANELUSER_PREMISSIONS['LOG_BUYS'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("LOG_BUYS_VIP4", ($PANELUSER_PREMISSIONS['LOG_BUYS'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("LOG_BUYS_VIP5", ($PANELUSER_PREMISSIONS['LOG_BUYS'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("MODIFY_PERSONALID_FREE", ($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MODIFY_PERSONALID_VIPS", ($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MODIFY_PERSONALID_VIPG", ($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MODIFY_PERSONALID_VIP3", ($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MODIFY_PERSONALID_VIP4", ($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MODIFY_PERSONALID_VIP5", ($PANELUSER_PREMISSIONS['MODIFY_PERSONALID'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("RESET_FREE", ($PANELUSER_PREMISSIONS['RESET'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_VIPS", ($PANELUSER_PREMISSIONS['RESET'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_VIPG", ($PANELUSER_PREMISSIONS['RESET'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_VIP3", ($PANELUSER_PREMISSIONS['RESET'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_VIP4", ($PANELUSER_PREMISSIONS['RESET'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_VIP5", ($PANELUSER_PREMISSIONS['RESET'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            
            $ldTpl->set("MASTER_RESET_FREE", ($PANELUSER_PREMISSIONS['MASTER_RESET'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MASTER_RESET_VIPS", ($PANELUSER_PREMISSIONS['MASTER_RESET'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MASTER_RESET_VIPG", ($PANELUSER_PREMISSIONS['MASTER_RESET'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MASTER_RESET_VIP3", ($PANELUSER_PREMISSIONS['MASTER_RESET'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MASTER_RESET_VIP4", ($PANELUSER_PREMISSIONS['MASTER_RESET'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MASTER_RESET_VIP5", ($PANELUSER_PREMISSIONS['MASTER_RESET'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            
			$ldTpl->set("RESET_TRANSFER_FREE", ($PANELUSER_PREMISSIONS['RESET_TRANSFER'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("RESET_TRANSFER_VIPS", ($PANELUSER_PREMISSIONS['RESET_TRANSFER'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_TRANSFER_VIPG", ($PANELUSER_PREMISSIONS['RESET_TRANSFER'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_TRANSFER_VIP3", ($PANELUSER_PREMISSIONS['RESET_TRANSFER'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("RESET_TRANSFER_VIP4", ($PANELUSER_PREMISSIONS['RESET_TRANSFER'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("RESET_TRANSFER_VIP5", ($PANELUSER_PREMISSIONS['RESET_TRANSFER'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CLEAN_PK_FREE", ($PANELUSER_PREMISSIONS['CLEAN_PK'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CLEAN_PK_VIPS", ($PANELUSER_PREMISSIONS['CLEAN_PK'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_PK_VIPG", ($PANELUSER_PREMISSIONS['CLEAN_PK'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_PK_VIP3", ($PANELUSER_PREMISSIONS['CLEAN_PK'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_PK_VIP4", ($PANELUSER_PREMISSIONS['CLEAN_PK'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CLEAN_PK_VIP5", ($PANELUSER_PREMISSIONS['CLEAN_PK'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("DISTRIBUTE_POINTS_FREE", ($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("DISTRIBUTE_POINTS_VIPS", ($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("DISTRIBUTE_POINTS_VIPG", ($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("DISTRIBUTE_POINTS_VIP3", ($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("DISTRIBUTE_POINTS_VIP4", ($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("DISTRIBUTE_POINTS_VIP5", ($PANELUSER_PREMISSIONS['DISTRIBUTE_POINTS'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("MOVE_CHARACTER_FREE", ($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MOVE_CHARACTER_VIPS", ($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MOVE_CHARACTER_VIPG", ($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MOVE_CHARACTER_VIP3", ($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MOVE_CHARACTER_VIP4", ($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MOVE_CHARACTER_VIP5", ($PANELUSER_PREMISSIONS['MOVE_CHARACTER'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CHANGE_NICK_FREE", ($PANELUSER_PREMISSIONS['CHANGE_NICK'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CHANGE_NICK_VIPS", ($PANELUSER_PREMISSIONS['CHANGE_NICK'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CHANGE_NICK_VIPG", ($PANELUSER_PREMISSIONS['CHANGE_NICK'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CHANGE_NICK_VIP3", ($PANELUSER_PREMISSIONS['CHANGE_NICK'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CHANGE_NICK_VIP4", ($PANELUSER_PREMISSIONS['CHANGE_NICK'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CHANGE_NICK_VIP5", ($PANELUSER_PREMISSIONS['CHANGE_NICK'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CHANGE_CLASS_FREE", ($PANELUSER_PREMISSIONS['CHANGE_CLASS'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CHANGE_CLASS_VIPS", ($PANELUSER_PREMISSIONS['CHANGE_CLASS'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CHANGE_CLASS_VIPG", ($PANELUSER_PREMISSIONS['CHANGE_CLASS'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CHANGE_CLASS_VIP3", ($PANELUSER_PREMISSIONS['CHANGE_CLASS'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CHANGE_CLASS_VIP4", ($PANELUSER_PREMISSIONS['CHANGE_CLASS'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("CHANGE_CLASS_VIP5", ($PANELUSER_PREMISSIONS['CHANGE_CLASS'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("REDISTRIBUTE_POINTS_FREE", ($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("REDISTRIBUTE_POINTS_VIPS", ($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("REDISTRIBUTE_POINTS_VIPG", ($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("REDISTRIBUTE_POINTS_VIP3", ($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("REDISTRIBUTE_POINTS_VIP4", ($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("REDISTRIBUTE_POINTS_VIP5", ($PANELUSER_PREMISSIONS['REDISTRIBUTE_POINTS'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CLEAN_INVENTORY_FREE", ($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_INVENTORY_VIPS", ($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_INVENTORY_VIPG", ($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_INVENTORY_VIP3", ($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_INVENTORY_VIP4", ($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("CLEAN_INVENTORY_VIP5", ($PANELUSER_PREMISSIONS['CLEAN_INVENTORY'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            
            $ldTpl->set("MANAGER_PHOTO_FREE", ($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MANAGER_PHOTO_VIPS", ($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MANAGER_PHOTO_VIPG", ($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MANAGER_PHOTO_VIP3", ($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("MANAGER_PHOTO_VIP4", ($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("MANAGER_PHOTO_VIP5", ($PANELUSER_PREMISSIONS['MANAGER_PHOTO'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("OPEN_COMPLAINTS_FREE", ($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("OPEN_COMPLAINTS_VIPS", ($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("OPEN_COMPLAINTS_VIPG", ($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("OPEN_COMPLAINTS_VIP3", ($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("OPEN_COMPLAINTS_VIP4", ($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("OPEN_COMPLAINTS_VIP5", ($PANELUSER_PREMISSIONS['OPEN_COMPLAINTS'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("OPEN_TICKET_FREE", ($PANELUSER_PREMISSIONS['OPEN_TICKET'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("OPEN_TICKET_VIPS", ($PANELUSER_PREMISSIONS['OPEN_TICKET'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("OPEN_TICKET_VIPG", ($PANELUSER_PREMISSIONS['OPEN_TICKET'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("OPEN_TICKET_VIP3", ($PANELUSER_PREMISSIONS['OPEN_TICKET'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("OPEN_TICKET_VIP4", ($PANELUSER_PREMISSIONS['OPEN_TICKET'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("OPEN_TICKET_VIP5", ($PANELUSER_PREMISSIONS['OPEN_TICKET'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("READ_TICKET_FREE", ($PANELUSER_PREMISSIONS['READ_TICKET'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("READ_TICKET_VIPS", ($PANELUSER_PREMISSIONS['READ_TICKET'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("READ_TICKET_VIPG", ($PANELUSER_PREMISSIONS['READ_TICKET'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("READ_TICKET_VIP3", ($PANELUSER_PREMISSIONS['READ_TICKET'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("READ_TICKET_VIP4", ($PANELUSER_PREMISSIONS['READ_TICKET'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("READ_TICKET_VIP5", ($PANELUSER_PREMISSIONS['READ_TICKET'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			
			$ldTpl->set("SEND_SMS_FREE", ($PANELUSER_PREMISSIONS['SEND_SMS'][1] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
			$ldTpl->set("SEND_SMS_VIPS", ($PANELUSER_PREMISSIONS['SEND_SMS'][2] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));
            $ldTpl->set("SEND_SMS_VIPG", ($PANELUSER_PREMISSIONS['SEND_SMS'][3] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));    
            $ldTpl->set("SEND_SMS_VIP3", ($PANELUSER_PREMISSIONS['SEND_SMS'][4] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));    
            $ldTpl->set("SEND_SMS_VIP4", ($PANELUSER_PREMISSIONS['SEND_SMS'][5] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));    
			$ldTpl->set("SEND_SMS_VIP5", ($PANELUSER_PREMISSIONS['SEND_SMS'][6] == 0 ? "<span style=\"color:#FF0000\">".VIPS_NOT."</span>":"<span style=\"color:#40B60E\">".VIPS_YES."</span>"));	
			
			$ldTpl->set("LevelReset[0-10]_FREE", $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[0-10]_VIPS", $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[0-10]_VIPG", $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][2]);
            $ldTpl->set("LevelReset[0-10]_VIP3", $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][3]);
            $ldTpl->set("LevelReset[0-10]_VIP4", $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][4]);
			$ldTpl->set("LevelReset[0-10]_VIP5", $PANELUSER_MODULE['RESET']['0-10']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[0-10]_FREE", $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[0-10]_VIPS", $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[0-10]_VIPG", $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[0-10]_VIP3", $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[0-10]_VIP4", $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[0-10]_VIP5", $PANELUSER_MODULE['RESET']['0-10']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[0-10]_FREE", $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[0-10]_VIPS", $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[0-10]_VIPG", $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[0-10]_VIP3", $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[0-10]_VIP4", $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][4]);
			$ldTpl->set("ZenRequire[0-10]_VIP5", $PANELUSER_MODULE['RESET']['0-10']['ZenRequire'][5]);
			
			$ldTpl->set("Points[0-10]_FREE", $PANELUSER_MODULE['RESET']['0-10']['Points'][0]);	
			$ldTpl->set("Points[0-10]_VIPS", $PANELUSER_MODULE['RESET']['0-10']['Points'][1]);	
            $ldTpl->set("Points[0-10]_VIPG", $PANELUSER_MODULE['RESET']['0-10']['Points'][2]);
            $ldTpl->set("Points[0-10]_VIP3", $PANELUSER_MODULE['RESET']['0-10']['Points'][3]);
            $ldTpl->set("Points[0-10]_VIP4", $PANELUSER_MODULE['RESET']['0-10']['Points'][4]);
			$ldTpl->set("Points[0-10]_VIP5", $PANELUSER_MODULE['RESET']['0-10']['Points'][5]);
			
			$ldTpl->set("CleanItens[0-10]_FREE", ($PANELUSER_MODULE['RESET']['0-10']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[0-10]_VIPS", ($PANELUSER_MODULE['RESET']['0-10']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[0-10]_VIPG", ($PANELUSER_MODULE['RESET']['0-10']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[0-10]_VIP3", ($PANELUSER_MODULE['RESET']['0-10']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[0-10]_VIP4", ($PANELUSER_MODULE['RESET']['0-10']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[0-10]_VIP5", ($PANELUSER_MODULE['RESET']['0-10']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[0-10]_FREE", ($PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[0-10]_VIPS", ($PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[0-10]_VIPG", ($PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[0-10]_VIP3", ($PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[0-10]_VIP4", ($PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[0-10]_VIP5", ($PANELUSER_MODULE['RESET']['0-10']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[0-10]_FREE", ($PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[0-10]_VIPS", ($PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[0-10]_VIPG", ($PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[0-10]_VIP3", ($PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[0-10]_VIP4", ($PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[0-10]_VIP5", ($PANELUSER_MODULE['RESET']['0-10']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LevelReset[11-50]_FREE", $PANELUSER_MODULE['RESET']['11-50']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[11-50]_VIPS", $PANELUSER_MODULE['RESET']['11-50']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[11-50]_VIPG", $PANELUSER_MODULE['RESET']['11-50']['LevelReset'][2]);
            $ldTpl->set("LevelReset[11-50]_VIP3", $PANELUSER_MODULE['RESET']['11-50']['LevelReset'][3]);
            $ldTpl->set("LevelReset[11-50]_VIP4", $PANELUSER_MODULE['RESET']['11-50']['LevelReset'][4]);
			$ldTpl->set("LevelReset[11-50]_VIP5", $PANELUSER_MODULE['RESET']['11-50']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[11-50]_FREE", $PANELUSER_MODULE['RESET']['11-50']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[11-50]_VIPS", $PANELUSER_MODULE['RESET']['11-50']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[11-50]_VIPG", $PANELUSER_MODULE['RESET']['11-50']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[11-50]_VIP3", $PANELUSER_MODULE['RESET']['11-50']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[11-50]_VIP4", $PANELUSER_MODULE['RESET']['11-50']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[11-50]_VIP5", $PANELUSER_MODULE['RESET']['11-50']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[11-50]_FREE", $PANELUSER_MODULE['RESET']['11-50']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[11-50]_VIPS", $PANELUSER_MODULE['RESET']['11-50']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[11-50]_VIPG", $PANELUSER_MODULE['RESET']['11-50']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[11-50]_VIP3", $PANELUSER_MODULE['RESET']['11-50']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[11-50]_VIP4", $PANELUSER_MODULE['RESET']['11-50']['ZenRequire'][4]);
			$ldTpl->set("ZenRequire[11-50]_VIP5", $PANELUSER_MODULE['RESET']['11-50']['ZenRequire'][5]);
			
			$ldTpl->set("Points[11-50]_FREE", $PANELUSER_MODULE['RESET']['11-50']['Points'][0]);	
			$ldTpl->set("Points[11-50]_VIPS", $PANELUSER_MODULE['RESET']['11-50']['Points'][1]);	
            $ldTpl->set("Points[11-50]_VIPG", $PANELUSER_MODULE['RESET']['11-50']['Points'][2]);
            $ldTpl->set("Points[11-50]_VIP3", $PANELUSER_MODULE['RESET']['11-50']['Points'][3]);
            $ldTpl->set("Points[11-50]_VIP4", $PANELUSER_MODULE['RESET']['11-50']['Points'][4]);
			$ldTpl->set("Points[11-50]_VIP5", $PANELUSER_MODULE['RESET']['11-50']['Points'][5]);
			
			$ldTpl->set("CleanItens[11-50]_FREE", ($PANELUSER_MODULE['RESET']['11-50']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[11-50]_VIPS", ($PANELUSER_MODULE['RESET']['11-50']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[11-50]_VIPG", ($PANELUSER_MODULE['RESET']['11-50']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[11-50]_VIP3", ($PANELUSER_MODULE['RESET']['11-50']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[11-50]_VIP4", ($PANELUSER_MODULE['RESET']['11-50']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[11-50]_VIP5", ($PANELUSER_MODULE['RESET']['11-50']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[11-50]_FREE", ($PANELUSER_MODULE['RESET']['11-50']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[11-50]_VIPS", ($PANELUSER_MODULE['RESET']['11-50']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[11-50]_VIPG", ($PANELUSER_MODULE['RESET']['11-50']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[11-50]_VIP3", ($PANELUSER_MODULE['RESET']['11-50']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[11-50]_VIP4", ($PANELUSER_MODULE['RESET']['11-50']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[11-50]_VIP5", ($PANELUSER_MODULE['RESET']['11-50']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[11-50]_FREE", ($PANELUSER_MODULE['RESET']['11-50']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[11-50]_VIPS", ($PANELUSER_MODULE['RESET']['11-50']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[11-50]_VIPG", ($PANELUSER_MODULE['RESET']['11-50']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[11-50]_VIP3", ($PANELUSER_MODULE['RESET']['11-50']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[11-50]_VIP4", ($PANELUSER_MODULE['RESET']['11-50']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[11-50]_VIP5", ($PANELUSER_MODULE['RESET']['11-50']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LevelReset[51-100]_FREE", $PANELUSER_MODULE['RESET']['51-100']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[51-100]_VIPS", $PANELUSER_MODULE['RESET']['51-100']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[51-100]_VIPG", $PANELUSER_MODULE['RESET']['51-100']['LevelReset'][2]);
            $ldTpl->set("LevelReset[51-100]_VIP3", $PANELUSER_MODULE['RESET']['51-100']['LevelReset'][3]);
            $ldTpl->set("LevelReset[51-100]_VIP4", $PANELUSER_MODULE['RESET']['51-100']['LevelReset'][4]);
			$ldTpl->set("LevelReset[51-100]_VIP5", $PANELUSER_MODULE['RESET']['51-100']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[51-100]_FREE", $PANELUSER_MODULE['RESET']['51-100']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[51-100]_VIPS", $PANELUSER_MODULE['RESET']['51-100']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[51-100]_VIPG", $PANELUSER_MODULE['RESET']['51-100']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[51-100]_VIP3", $PANELUSER_MODULE['RESET']['51-100']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[51-100]_VIP4", $PANELUSER_MODULE['RESET']['51-100']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[51-100]_VIP5", $PANELUSER_MODULE['RESET']['51-100']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[51-100]_FREE", $PANELUSER_MODULE['RESET']['51-100']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[51-100]_VIPS", $PANELUSER_MODULE['RESET']['51-100']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[51-100]_VIPG", $PANELUSER_MODULE['RESET']['51-100']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[51-100]_VIP3", $PANELUSER_MODULE['RESET']['51-100']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[51-100]_VIP4", $PANELUSER_MODULE['RESET']['51-100']['ZenRequire'][4]);
			$ldTpl->set("ZenRequire[51-100]_VIP5", $PANELUSER_MODULE['RESET']['51-100']['ZenRequire'][5]);
			
			$ldTpl->set("Points[51-100]_FREE", $PANELUSER_MODULE['RESET']['51-100']['Points'][0]);	
			$ldTpl->set("Points[51-100]_VIPS", $PANELUSER_MODULE['RESET']['51-100']['Points'][1]);	
            $ldTpl->set("Points[51-100]_VIPG", $PANELUSER_MODULE['RESET']['51-100']['Points'][2]);
            $ldTpl->set("Points[51-100]_VIP3", $PANELUSER_MODULE['RESET']['51-100']['Points'][3]);
            $ldTpl->set("Points[51-100]_VIP4", $PANELUSER_MODULE['RESET']['51-100']['Points'][4]);
			$ldTpl->set("Points[51-100]_VIP5", $PANELUSER_MODULE['RESET']['51-100']['Points'][5]);
			
			$ldTpl->set("CleanItens[51-100]_FREE", ($PANELUSER_MODULE['RESET']['51-100']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[51-100]_VIPS", ($PANELUSER_MODULE['RESET']['51-100']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[51-100]_VIPG", ($PANELUSER_MODULE['RESET']['51-100']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[51-100]_VIP3", ($PANELUSER_MODULE['RESET']['51-100']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[51-100]_VIP4", ($PANELUSER_MODULE['RESET']['51-100']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[51-100]_VIP5", ($PANELUSER_MODULE['RESET']['51-100']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[51-100]_FREE", ($PANELUSER_MODULE['RESET']['51-100']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[51-100]_VIPS", ($PANELUSER_MODULE['RESET']['51-100']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[51-100]_VIPG", ($PANELUSER_MODULE['RESET']['51-100']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[51-100]_VIP3", ($PANELUSER_MODULE['RESET']['51-100']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[51-100]_VIP4", ($PANELUSER_MODULE['RESET']['51-100']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[51-100]_VIP5", ($PANELUSER_MODULE['RESET']['51-100']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[51-100]_FREE", ($PANELUSER_MODULE['RESET']['51-100']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[51-100]_VIPS", ($PANELUSER_MODULE['RESET']['51-100']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[51-100]_VIPG", ($PANELUSER_MODULE['RESET']['51-100']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[51-100]_VIP3", ($PANELUSER_MODULE['RESET']['51-100']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[51-100]_VIP4", ($PANELUSER_MODULE['RESET']['51-100']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[51-100]_VIP5", ($PANELUSER_MODULE['RESET']['51-100']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LevelReset[101-150]_FREE", $PANELUSER_MODULE['RESET']['101-150']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[101-150]_VIPS", $PANELUSER_MODULE['RESET']['101-150']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[101-150]_VIPG", $PANELUSER_MODULE['RESET']['101-150']['LevelReset'][2]);
            $ldTpl->set("LevelReset[101-150]_VIP3", $PANELUSER_MODULE['RESET']['101-150']['LevelReset'][3]);
            $ldTpl->set("LevelReset[101-150]_VIP4", $PANELUSER_MODULE['RESET']['101-150']['LevelReset'][4]);
			$ldTpl->set("LevelReset[101-150]_VIP5", $PANELUSER_MODULE['RESET']['101-150']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[101-150]_FREE", $PANELUSER_MODULE['RESET']['101-150']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[101-150]_VIPS", $PANELUSER_MODULE['RESET']['101-150']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[101-150]_VIPG", $PANELUSER_MODULE['RESET']['101-150']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[101-150]_VIP3", $PANELUSER_MODULE['RESET']['101-150']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[101-150]_VIP4", $PANELUSER_MODULE['RESET']['101-150']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[101-150]_VIP5", $PANELUSER_MODULE['RESET']['101-150']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[101-150]_FREE", $PANELUSER_MODULE['RESET']['101-150']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[101-150]_VIPS", $PANELUSER_MODULE['RESET']['101-150']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[101-150]_VIPG", $PANELUSER_MODULE['RESET']['101-150']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[101-150]_VIP3", $PANELUSER_MODULE['RESET']['101-150']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[101-150]_VIP4", $PANELUSER_MODULE['RESET']['101-150']['ZenRequire'][4]);
			$ldTpl->set("ZenRequire[101-150]_VIP5", $PANELUSER_MODULE['RESET']['101-150']['ZenRequire'][5]);
			
			$ldTpl->set("Points[101-150]_FREE", $PANELUSER_MODULE['RESET']['101-150']['Points'][0]);	
			$ldTpl->set("Points[101-150]_VIPS", $PANELUSER_MODULE['RESET']['101-150']['Points'][1]);	
            $ldTpl->set("Points[101-150]_VIPG", $PANELUSER_MODULE['RESET']['101-150']['Points'][2]);
            $ldTpl->set("Points[101-150]_VIP3", $PANELUSER_MODULE['RESET']['101-150']['Points'][3]);
            $ldTpl->set("Points[101-150]_VIP4", $PANELUSER_MODULE['RESET']['101-150']['Points'][4]);
			$ldTpl->set("Points[101-150]_VIP5", $PANELUSER_MODULE['RESET']['101-150']['Points'][5]);
			
			$ldTpl->set("CleanItens[101-150]_FREE", ($PANELUSER_MODULE['RESET']['101-150']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[101-150]_VIPS", ($PANELUSER_MODULE['RESET']['101-150']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[101-150]_VIPG", ($PANELUSER_MODULE['RESET']['101-150']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[101-150]_VIP3", ($PANELUSER_MODULE['RESET']['101-150']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[101-150]_VIP4", ($PANELUSER_MODULE['RESET']['101-150']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[101-150]_VIP5", ($PANELUSER_MODULE['RESET']['101-150']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[101-150]_FREE", ($PANELUSER_MODULE['RESET']['101-150']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[101-150]_VIPS", ($PANELUSER_MODULE['RESET']['101-150']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[101-150]_VIPG", ($PANELUSER_MODULE['RESET']['101-150']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[101-150]_VIP3", ($PANELUSER_MODULE['RESET']['101-150']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[101-150]_VIP4", ($PANELUSER_MODULE['RESET']['101-150']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[101-150]_VIP5", ($PANELUSER_MODULE['RESET']['101-150']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[101-150]_FREE", ($PANELUSER_MODULE['RESET']['101-150']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[101-150]_VIPS", ($PANELUSER_MODULE['RESET']['101-150']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[101-150]_VIPG", ($PANELUSER_MODULE['RESET']['101-150']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[101-150]_VIP3", ($PANELUSER_MODULE['RESET']['101-150']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[101-150]_VIP4", ($PANELUSER_MODULE['RESET']['101-150']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[101-150]_VIP5", ($PANELUSER_MODULE['RESET']['101-150']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LevelReset[151-200]_FREE", $PANELUSER_MODULE['RESET']['151-200']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[151-200]_VIPS", $PANELUSER_MODULE['RESET']['151-200']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[151-200]_VIPG", $PANELUSER_MODULE['RESET']['151-200']['LevelReset'][2]);
            $ldTpl->set("LevelReset[151-200]_VIP3", $PANELUSER_MODULE['RESET']['151-200']['LevelReset'][3]);
            $ldTpl->set("LevelReset[151-200]_VIP4", $PANELUSER_MODULE['RESET']['151-200']['LevelReset'][4]);
			$ldTpl->set("LevelReset[151-200]_VIP5", $PANELUSER_MODULE['RESET']['151-200']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[151-200]_FREE", $PANELUSER_MODULE['RESET']['151-200']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[151-200]_VIPS", $PANELUSER_MODULE['RESET']['151-200']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[151-200]_VIPG", $PANELUSER_MODULE['RESET']['151-200']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[151-200]_VIP3", $PANELUSER_MODULE['RESET']['151-200']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[151-200]_VIP4", $PANELUSER_MODULE['RESET']['151-200']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[151-200]_VIP5", $PANELUSER_MODULE['RESET']['151-200']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[151-200]_FREE", $PANELUSER_MODULE['RESET']['151-200']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[151-200]_VIPS", $PANELUSER_MODULE['RESET']['151-200']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[151-200]_VIPG", $PANELUSER_MODULE['RESET']['151-200']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[151-200]_VIP3", $PANELUSER_MODULE['RESET']['151-200']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[151-200]_VIP4", $PANELUSER_MODULE['RESET']['151-200']['ZenRequire'][4]);
            $ldTpl->set("ZenRequire[151-200]_VIP5", $PANELUSER_MODULE['RESET']['151-200']['ZenRequire'][5]); 
        
			
			$ldTpl->set("Points[151-200]_FREE", $PANELUSER_MODULE['RESET']['151-200']['Points'][0]);	
			$ldTpl->set("Points[151-200]_VIPS", $PANELUSER_MODULE['RESET']['151-200']['Points'][1]);	
            $ldTpl->set("Points[151-200]_VIPG", $PANELUSER_MODULE['RESET']['151-200']['Points'][2]);
            $ldTpl->set("Points[151-200]_VIP3", $PANELUSER_MODULE['RESET']['151-200']['Points'][3]);
            $ldTpl->set("Points[151-200]_VIP4", $PANELUSER_MODULE['RESET']['151-200']['Points'][4]);
			$ldTpl->set("Points[151-200]_VIP5", $PANELUSER_MODULE['RESET']['151-200']['Points'][5]);
			
			$ldTpl->set("CleanItens[151-200]_FREE", ($PANELUSER_MODULE['RESET']['151-200']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[151-200]_VIPS", ($PANELUSER_MODULE['RESET']['151-200']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[151-200]_VIPG", ($PANELUSER_MODULE['RESET']['151-200']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[151-200]_VIP3", ($PANELUSER_MODULE['RESET']['151-200']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[151-200]_VIP4", ($PANELUSER_MODULE['RESET']['151-200']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[151-200]_VIP5", ($PANELUSER_MODULE['RESET']['151-200']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[151-200]_FREE", ($PANELUSER_MODULE['RESET']['151-200']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[151-200]_VIPS", ($PANELUSER_MODULE['RESET']['151-200']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[151-200]_VIPG", ($PANELUSER_MODULE['RESET']['151-200']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[151-200]_VIP3", ($PANELUSER_MODULE['RESET']['151-200']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[151-200]_VIP4", ($PANELUSER_MODULE['RESET']['151-200']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[151-200]_VIP5", ($PANELUSER_MODULE['RESET']['151-200']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[151-200]_FREE", ($PANELUSER_MODULE['RESET']['151-200']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[151-200]_VIPS", ($PANELUSER_MODULE['RESET']['151-200']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[151-200]_VIPG", ($PANELUSER_MODULE['RESET']['151-200']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[151-200]_VIP3", ($PANELUSER_MODULE['RESET']['151-200']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[151-200]_VIP4", ($PANELUSER_MODULE['RESET']['151-200']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[151-200]_VIP5", ($PANELUSER_MODULE['RESET']['151-200']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LevelReset[201-300]_FREE", $PANELUSER_MODULE['RESET']['201-300']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[201-300]_VIPS", $PANELUSER_MODULE['RESET']['201-300']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[201-300]_VIPG", $PANELUSER_MODULE['RESET']['201-300']['LevelReset'][2]);
            $ldTpl->set("LevelReset[201-300]_VIP3", $PANELUSER_MODULE['RESET']['201-300']['LevelReset'][3]);
            $ldTpl->set("LevelReset[201-300]_VIP4", $PANELUSER_MODULE['RESET']['201-300']['LevelReset'][4]);
			$ldTpl->set("LevelReset[201-300]_VIP5", $PANELUSER_MODULE['RESET']['201-300']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[201-300]_FREE", $PANELUSER_MODULE['RESET']['201-300']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[201-300]_VIPS", $PANELUSER_MODULE['RESET']['201-300']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[201-300]_VIPG", $PANELUSER_MODULE['RESET']['201-300']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[201-300]_VIP3", $PANELUSER_MODULE['RESET']['201-300']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[201-300]_VIP4", $PANELUSER_MODULE['RESET']['201-300']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[201-300]_VIP5", $PANELUSER_MODULE['RESET']['201-300']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[201-300]_FREE", $PANELUSER_MODULE['RESET']['201-300']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[201-300]_VIPS", $PANELUSER_MODULE['RESET']['201-300']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[201-300]_VIPG", $PANELUSER_MODULE['RESET']['201-300']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[201-300]_VIP3", $PANELUSER_MODULE['RESET']['201-300']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[201-300]_VIP4", $PANELUSER_MODULE['RESET']['201-300']['ZenRequire'][4]);
			$ldTpl->set("ZenRequire[201-300]_VIP5", $PANELUSER_MODULE['RESET']['201-300']['ZenRequire'][5]);
			
			$ldTpl->set("Points[201-300]_FREE", $PANELUSER_MODULE['RESET']['201-300']['Points'][0]);	
			$ldTpl->set("Points[201-300]_VIPS", $PANELUSER_MODULE['RESET']['201-300']['Points'][1]);	
            $ldTpl->set("Points[201-300]_VIPG", $PANELUSER_MODULE['RESET']['201-300']['Points'][2]);
            $ldTpl->set("Points[201-300]_VIP3", $PANELUSER_MODULE['RESET']['201-300']['Points'][3]);
            $ldTpl->set("Points[201-300]_VIP4", $PANELUSER_MODULE['RESET']['201-300']['Points'][4]);
			$ldTpl->set("Points[201-300]_VIP5", $PANELUSER_MODULE['RESET']['201-300']['Points'][5]);
			
			$ldTpl->set("CleanItens[201-300]_FREE", ($PANELUSER_MODULE['RESET']['201-300']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[201-300]_VIPS", ($PANELUSER_MODULE['RESET']['201-300']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[201-300]_VIPG", ($PANELUSER_MODULE['RESET']['201-300']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[201-300]_VIP3", ($PANELUSER_MODULE['RESET']['201-300']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[201-300]_VIP4", ($PANELUSER_MODULE['RESET']['201-300']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[201-300]_VIP5", ($PANELUSER_MODULE['RESET']['201-300']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[201-300]_FREE", ($PANELUSER_MODULE['RESET']['201-300']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[201-300]_VIPS", ($PANELUSER_MODULE['RESET']['201-300']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[201-300]_VIPG", ($PANELUSER_MODULE['RESET']['201-300']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[201-300]_VIP3", ($PANELUSER_MODULE['RESET']['201-300']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[201-300]_VIP4", ($PANELUSER_MODULE['RESET']['201-300']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[201-300]_VIP5", ($PANELUSER_MODULE['RESET']['201-300']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[201-300]_FREE", ($PANELUSER_MODULE['RESET']['201-300']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[201-300]_VIPS", ($PANELUSER_MODULE['RESET']['201-300']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[201-300]_VIPG", ($PANELUSER_MODULE['RESET']['201-300']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[201-300]_VIP3", ($PANELUSER_MODULE['RESET']['201-300']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[201-300]_VIP4", ($PANELUSER_MODULE['RESET']['201-300']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[201-300]_VIP5", ($PANELUSER_MODULE['RESET']['201-300']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("LevelReset[301-XXX]_FREE", $PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'][0]);	
			$ldTpl->set("LevelReset[301-XXX]_VIPS", $PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'][1]);	
            $ldTpl->set("LevelReset[301-XXX]_VIPG", $PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'][2]);
            $ldTpl->set("LevelReset[301-XXX]_VIP3", $PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'][3]);
            $ldTpl->set("LevelReset[301-XXX]_VIP4", $PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'][4]);
			$ldTpl->set("LevelReset[301-XXX]_VIP5", $PANELUSER_MODULE['RESET']['301-XXX']['LevelReset'][5]);
			
			$ldTpl->set("LevelAfter[301-XXX]_FREE", $PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'][0]);	
			$ldTpl->set("LevelAfter[301-XXX]_VIPS", $PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'][1]);	
            $ldTpl->set("LevelAfter[301-XXX]_VIPG", $PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'][2]);
            $ldTpl->set("LevelAfter[301-XXX]_VIP3", $PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'][3]);
            $ldTpl->set("LevelAfter[301-XXX]_VIP4", $PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'][4]);
			$ldTpl->set("LevelAfter[301-XXX]_VIP5", $PANELUSER_MODULE['RESET']['301-XXX']['LevelAfter'][5]);
			
			$ldTpl->set("ZenRequire[301-XXX]_FREE", $PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'][0]);	
			$ldTpl->set("ZenRequire[301-XXX]_VIPS", $PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'][1]);	
            $ldTpl->set("ZenRequire[301-XXX]_VIPG", $PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'][2]);
            $ldTpl->set("ZenRequire[301-XXX]_VIP3", $PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'][3]);
            $ldTpl->set("ZenRequire[301-XXX]_VIP4", $PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'][4]);
			$ldTpl->set("ZenRequire[301-XXX]_VIP5", $PANELUSER_MODULE['RESET']['301-XXX']['ZenRequire'][5]);
			
			$ldTpl->set("Points[301-XXX]_FREE", $PANELUSER_MODULE['RESET']['301-XXX']['Points'][0]);	
			$ldTpl->set("Points[301-XXX]_VIPS", $PANELUSER_MODULE['RESET']['301-XXX']['Points'][1]);	
            $ldTpl->set("Points[301-XXX]_VIPG", $PANELUSER_MODULE['RESET']['301-XXX']['Points'][2]);
            $ldTpl->set("Points[301-XXX]_VIP3", $PANELUSER_MODULE['RESET']['301-XXX']['Points'][3]);
            $ldTpl->set("Points[301-XXX]_VIP4", $PANELUSER_MODULE['RESET']['301-XXX']['Points'][4]);
			$ldTpl->set("Points[301-XXX]_VIP5", $PANELUSER_MODULE['RESET']['301-XXX']['Points'][5]);
			
			$ldTpl->set("CleanItens[301-XXX]_FREE", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanItens[301-XXX]_VIPS", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanItens[301-XXX]_VIPG", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[301-XXX]_VIP3", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanItens[301-XXX]_VIP4", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanItens[301-XXX]_VIP5", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanItens'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanMagics[301-XXX]_FREE", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanMagics[301-XXX]_VIPS", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanMagics[301-XXX]_VIPG", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[301-XXX]_VIP3", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanMagics[301-XXX]_VIP4", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanMagics[301-XXX]_VIP5", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanMagics'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			
			$ldTpl->set("CleanQuests[301-XXX]_FREE", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'][0] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
			$ldTpl->set("CleanQuests[301-XXX]_VIPS", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'][1] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));	
            $ldTpl->set("CleanQuests[301-XXX]_VIPG", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'][2] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[301-XXX]_VIP3", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'][3] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
            $ldTpl->set("CleanQuests[301-XXX]_VIP4", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'][4] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
			$ldTpl->set("CleanQuests[301-XXX]_VIP5", ($PANELUSER_MODULE['RESET']['301-XXX']['CleanQuests'][5] == false ? "<span style=\"color:#40B60E\">".VIPS_NOT."</span>":"<span style=\"color:#FF0000\">".VIPS_YES."</span>"));
		}
		public function loadHowToBuyVips()
		{
			global $ldTpl;
			global $PANELUSER_MODULE; 
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][0]);
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][1]);
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][2]);
			$ldTpl->set("CASH_AMOUNT_VIPSILVER_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_1'][3]);
            
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][0]);
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][1]);
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][2]);
            $ldTpl->set("CASH_AMOUNT_VIPGOLD_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_2'][3]);
            
            $ldTpl->set("CASH_AMOUNT_VIP3_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][0]);
            $ldTpl->set("CASH_AMOUNT_VIP3_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][1]);
            $ldTpl->set("CASH_AMOUNT_VIP3_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][2]);
            $ldTpl->set("CASH_AMOUNT_VIP3_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_3'][3]);
            
            $ldTpl->set("CASH_AMOUNT_VIP4_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][0]);
            $ldTpl->set("CASH_AMOUNT_VIP4_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][1]);
            $ldTpl->set("CASH_AMOUNT_VIP4_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][2]);
            $ldTpl->set("CASH_AMOUNT_VIP4_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_4'][3]);
			
			$ldTpl->set("CASH_AMOUNT_VIP5_30_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][0]);
			$ldTpl->set("CASH_AMOUNT_VIP5_90_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][1]);
			$ldTpl->set("CASH_AMOUNT_VIP5_180_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][2]);
			$ldTpl->set("CASH_AMOUNT_VIP5_365_DAYS",$PANELUSER_MODULE['BUY_VIPS']['PRICE']['VIP_5'][3]);
		}
	}	
}

?>