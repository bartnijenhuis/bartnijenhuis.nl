<?php

// Gutenberg disable
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

function deregister_block_css(){
wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'deregister_block_css', 100 );


/*
// Deregister stock jQuery
function deregister_jquery() {
    wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'deregister_jquery' ); 
*/


// Deregister Contact Form 7 CSS
function deregister_contact_form_css() {
    wp_deregister_style( 'contact-form-7' );
}
add_action( 'wp_print_styles', 'deregister_contact_form_css', 100 );

// Enqueue style.css
function enqueue_style_min_css() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_style_min_css' );

// Add theme support for Featured Images
add_theme_support( 'post-thumbnails', array (
    'post',
    'page',
    'custom-post-type-name',
    'portfolio',
    )
);

// Add title attribute
add_theme_support( 'title-tag' );

// SVG Support
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

// Register menu's
register_nav_menu( 'main_menu', __( 'main menu', 'bartnijenhuis' ) );
register_nav_menu( 'mobile_menu', __( 'mobile menu', 'bartnijenhuis' ) );

// Portfolio
function portfolio_custom_post_type() {
    $labels = array(
        'name'                => __( 'Portfolio' ),
        'singular_name'       => __( 'Portfolio'),
        'menu_name'           => __( 'Portfolio'),
        'parent_item_colon'   => __( 'Portfolio'),
        'all_items'           => __( 'Portfolio'),
        'view_item'           => __( 'Bekijk Portfolio'),
        'add_new_item'        => __( 'Nieuw Portfolio item'),
        'add_new'             => __( 'Nieuw'),
        'edit_item'           => __( 'Wijzigen'),
        'update_item'         => __( 'Updaten'),
        'search_items'        => __( 'Zoeken'),
        'not_found'           => __( 'Niet gevonden'),
        'not_found_in_trash'  => __( 'Niet gevonden in de prullenbak')
    );
    $args = array(
        'label'               => __( 'Portfolio'),
        'description'         => __( 'Portfolio items'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'public'              => true,
        'hierarchical'        => true,
        'menu_icon'           => 'dashicons-media-code',
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'can_export'          => true,
        'exclude_from_search' => false,
        'yarpp_support'       => true,
        'taxonomies'          => array('werkzaamheden'),
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
);
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_custom_post_type', 0 );
 
// Categorieën voor Portfolio
function portfolio_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'werkzaamheden', 'taxonomy general name' ),
    'singular_name' => _x( 'werkzaamheden', 'taxonomy singular name' ),
    'search_items' =>  __( 'Zoeken' ),
    'all_items' => __( 'Alle werkzaamheden' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Bewerken' ), 
    'update_item' => __( 'Updaten' ),
    'add_new_item' => __( 'Nieuwe werkzaamheid' ),
    'new_item_name' => __( 'Nieuwe naam' ),
    'menu_name' => __( 'Portfolio werkzaamheden' ),
  );    
 
  register_taxonomy('werkzaamheden',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'rewrite' => array( 'slug' => 'werkzaamheden' ),
  ));
}
add_action( 'init', 'portfolio_custom_taxonomy', 0 );

// Active menu CPT
function custom_active_item_classes($classes = array(), $menu_item = false){            
        global $post;
        $classes[] = ($menu_item->url == get_post_type_archive_link($post->post_type)) ? 'current-menu-item active' : '';
        return $classes;
    }
add_filter( 'nav_menu_css_class', 'custom_active_item_classes', 10, 2 );

/*
// Minify HTML
class FLHM_HTML_Compression
{
protected $flhm_compress_css = true;
protected $flhm_compress_js = true;
protected $flhm_info_comment = true;
protected $flhm_remove_comments = true;
protected $html;
public function __construct($html)
{
if (!empty($html))
{
$this->flhm_parseHTML($html);
}
}
public function __toString()
{
return $this->html;
}
protected function flhm_bottomComment($raw, $compressed)
{
$raw = strlen($raw);
$compressed = strlen($compressed);
$savings = ($raw-$compressed) / $raw * 100;
$savings = round($savings, 2);
return '<!--HTML compressed, size saved '.$savings.'%. From '.$raw.' bytes, now '.$compressed.' bytes-->';
}
protected function flhm_minifyHTML($html)
{
$pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
$overriding = false;
$raw_tag = false;
$html = '';
foreach ($matches as $token)
{
$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
$content = $token[0];
if (is_null($tag))
{
if ( !empty($token['script']) )
{
$strip = $this->flhm_compress_js;
}
else if ( !empty($token['style']) )
{
$strip = $this->flhm_compress_css;
}
else if ($content == '<!--wp-html-compression no compression-->')
{
$overriding = !$overriding; 
continue;
}
else if ($this->flhm_remove_comments)
{
if (!$overriding && $raw_tag != 'textarea')
{
$content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
}
}
}
else
{
if ($tag == 'pre' || $tag == 'textarea')
{
$raw_tag = $tag;
}
else if ($tag == '/pre' || $tag == '/textarea')
{
$raw_tag = false;
}
else
{
if ($raw_tag || $overriding)
{
$strip = false;
}
else
{
$strip = true; 
$content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content); 
$content = str_replace(' />', '/>', $content);
}
}
} 
if ($strip)
{
$content = $this->flhm_removeWhiteSpace($content);
}
$html .= $content;
} 
return $html;
} 
public function flhm_parseHTML($html)
{
$this->html = $this->flhm_minifyHTML($html);
if ($this->flhm_info_comment)
{
$this->html .= "\n" . $this->flhm_bottomComment($html, $this->html);
}
}
protected function flhm_removeWhiteSpace($str)
{
$str = str_replace("\t", ' ', $str);
$str = str_replace("\n",  '', $str);
$str = str_replace("\r",  '', $str);
while (stristr($str, '  '))
{
$str = str_replace('  ', ' ', $str);
}   
return $str;
}
}
function flhm_wp_html_compression_finish($html)
{
return new FLHM_HTML_Compression($html);
}
function flhm_wp_html_compression_start()
{
ob_start('flhm_wp_html_compression_finish');
}
add_action('get_header', 'flhm_wp_html_compression_start');
*/