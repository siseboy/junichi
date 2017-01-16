<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	$slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, NULL, _t('logo下边的标语'), _t('在这里输入标语'));
	$form->addInput($slogan);

	//图片设置
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon'), _t('在这里输入 Favicon 链接,带http:// ,不填则使用主题自带的图片'));
	$form->addInput($favicon);
	$touxiang = new Typecho_Widget_Helper_Form_Element_Text('touxiang', NULL, NULL, _t('头像'), _t('在这里输入头像链接,带http:// ,不填则使用主题自带的图片'));
	$form->addInput($touxiang);
	$iosicon = new Typecho_Widget_Helper_Form_Element_Text('iosicon', NULL, NULL, _t('左侧背景图'), _t('在这里输入背景图链接,带http:// ,不填则使用主题自带的图片'));
	$form->addInput($iosicon);
    
	//Pjax加速
	$search_form = new Typecho_Widget_Helper_Form_Element_Checkbox('search_form',
	array('Pjax' => _t('启用Pjax加速站点,勾上即可，为使原生评论生效需要到设置-评论，去掉开启垃圾评论过滤'),),array('ShowSearch'), _t('设置开启Pjax'));
	$form->addInput($search_form->multiMode());

	//社交链接
	$socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接,带http://'));
	$form->addInput($socialweibo);
	$socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('输入GitHub链接'), _t('在这里输入GitHub链接,带http://'));
	$form->addInput($socialgithub);
	$socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('输入Twitter链接'), _t('在这里输入twitter链接,带http://'));
	$form->addInput($socialtwitter);
	$socialgoogle = new Typecho_Widget_Helper_Form_Element_Text('socialgoogle', NULL, NULL, _t('输入Google +链接'), _t('在这里输入Google +链接,带http://'));
	$form->addInput($socialgoogle);
	$socialwechat = new Typecho_Widget_Helper_Form_Element_Text('socialwechat', NULL, NULL, _t('输入微信二维码链接'), _t('在这里输入微信二维码链接,带http://'));
	$form->addInput($socialwechat);
	$socialqq = new Typecho_Widget_Helper_Form_Element_Text('socialqq', NULL, NULL, _t('输入QQ号码'), _t('在这里输入QQ号码'));
	$form->addInput($socialqq);
	$socialmusic = new Typecho_Widget_Helper_Form_Element_Text('socialmusic', NULL, NULL, _t('输入音乐链接'), _t('在这里输入音乐链接,带http://'));
	$form->addInput($socialmusic);
    
	//附件源地址
	$src_address = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('替换前地址'), _t('即你的附件存放链接，如http://www.yourblog.com/usr/uploads/'));
	$form->addInput($src_address);
	//替换后地址
	$cdn_address = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('替换后'), _t('即你的七牛云存储域名，如http://yourblog.qiniudn.com/'));
	$form->addInput($cdn_address);

}

/**
 * 解析内容以实现附件加速
 * @access public
 * @param string $content 文章正文
 * @param Widget_Abstract_Contents $obj
 */
function parseContent($obj){
    $options = Typecho_Widget::widget('Widget_Options');
    if(!empty($options->src_add) && !empty($options->cdn_add)){
        $obj->content = str_ireplace($options->src_add,$options->cdn_add,$obj->content);
    }
    echo trim($obj->content);
}

//阅读数
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}

//获取评论的锚点链接
function get_comment_at($coid)
{
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
                                     ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        echo $href;
    } else {
        echo '';
    }
}
//输出评论内容
function get_filtered_comment($coid){
    $db   = Typecho_Db::get();
    $rs=$db->fetchRow($db->select('text')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $content=$rs['text'];
    echo $content;
}