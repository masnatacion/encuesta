<?

class HTMLPurifier_Filter_MyIframe extends HTMLPurifier_Filter
{

    public $name = 'CustomIframesSupport';

    public function preFilter($html, $config, $context) {
        $html = preg_replace('#<iframe([^>]+)>#i', '[[[custom-iframes-support $1]]]', $html);
        $html = preg_replace('#<\/iframe>#i', '', $html);
        return $html;
    }

    public function postFilter($html, $config, $context) {
        $post_regex = '#\[\[\[custom-iframes-support ([^<]+?)\]\]\]#';
        $html = preg_replace_callback($post_regex, array($this, 'postFilterCallback'), $html);
        return $html;
    }

    protected function postFilterCallback($matches) {
        return '<iframe'.$matches[1].'></iframe>';
    }
}
?>