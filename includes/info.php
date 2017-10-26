<?php

function custom_dashboard_help() {
echo '
<p>
<ol><li>主题安装后，会在WP后台的左侧工具条上增加【<a href=/wp-admin/admin.php?page=theme_options>主题选项</a>】设置，这是主题的核心设置，请知悉！</li>
<li>主题安装好第一件事不是去设置主题选项，而是创建好你们的<a href=/wp-admin/edit-tags.php?taxonomy=category>分类</a>和<a href=/wp-admin/edit.php?post_type=page>页面</a>！（已有分类和页面的老站除外）。</li>
<li>在<a href=/wp-admin/admin.php?page=theme_options>主题选项</a>里选择调用分类时，没有显示你的分类名？那是因为该分类下无任何文章，写一篇<a href=/wp-admin/post-new.php>测试文章</a>到该分类下，即可在主题选项出现该分类！</li>
<li>通过编辑<a href=/wp-admin/edit-tags.php?taxonomy=category>分类目录</a>，可以看到分类目录的模板和图像设置，这将实现产品或新闻分类的不同样式！</li>
<li>通过<a href=/wp-admin/nav-menus.php>菜单</a>的<a href=/wp-admin/nav-menus.php?action=edit&menu=0>创建</a>功能可以创建出很多的菜单组，设置好菜单组，选择好菜单所要显示的位置！</li>

<br>
<li>以上是主题使用方面最基础的操作，如需要修改主题里写死了的文字或链接，可以尝试下外观里的【<a href=/wp-admin/theme-editor.php>编辑</a>】 来进行修改！</li>

<li>最后，技术交流QQ：<a href=http://www.bevisz.com/ target=_blank>5013321</a>  欢迎勾搭！</li></ol>

</p>';
}
function example_add_dashboard_widgets() {
    wp_add_dashboard_widget('custom_help_widget', 'Bevis博客作品', 'custom_dashboard_help');
}
add_action('wp_dashboard_setup', 'example_add_dashboard_widgets' );

//删除仪表盘模块
function example_remove_dashboard_widgets() {
    // Globalize the metaboxes array, this holds all the widgets for wp-admin
    global $wp_meta_boxes;
    // 以下这一行代码将删除 "快速发布" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    // 以下这一行代码将删除 "引入链接" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    // 以下这一行代码将删除 "插件" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    // 以下这一行代码将删除 "近期评论" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    // 以下这一行代码将删除 "近期草稿" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // 以下这一行代码将删除 "WordPress 开发日志" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    // 以下这一行代码将删除 "其它 WordPress 新闻" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    // 以下这一行代码将删除 "概况" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );
remove_action('welcome_panel', 'wp_welcome_panel');

function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//3.8版开始
}
add_action( 'admin_init', 'remove_dashboard_meta' );

//自定义后台版权
function remove_footer_admin () {
echo '感谢 <a href="http://www.bevisz.com/" target="_blank">Bevis</a> 感谢你的来访！</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//custom admin logo
function custom_logo() {
  echo '<style type="text/css">
    #wp-admin-bar-wp-logo { display: none !important; }
    </style>';
}
add_action('admin_head', 'custom_logo');