<?php /* Smarty version 2.6.26, created on 2017-06-12 14:09:38
         compiled from core:common/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:common/footer.tpl', 12, false),array('function', 'call_hook', 'core:common/footer.tpl', 14, false),array('function', 'get_debug_info', 'core:common/footer.tpl', 24, false),)), $this); ?>
<?php if ($this->_tpl_vars['displayCreativeCommons']): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?>

<?php endif; ?>
<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

<?php if ($this->_tpl_vars['pageFooter']): ?>
	<br /><br />

	<div id="pageFooter"><?php echo $this->_tpl_vars['pageFooter']; ?>
</div>
<?php endif; ?>
</div><!-- content -->
</div><!-- main -->
</div><!-- body -->
<div class="clear"></div>
<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<div id="hide-bottom-menu">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/navbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>


<div id="osuFooter">
  <a id="copyright" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/index.php/OSMP/about/submissions#copyrightNotice">
    <img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/public/osuImages/osu_CHS_side.png"/>
    <div class="clear"></div>
    <i class="fa fa-copyright" aria-hidden="true"></i> Okstate Copyright</a>
</div>

</div><!-- container -->
</body>
</html>