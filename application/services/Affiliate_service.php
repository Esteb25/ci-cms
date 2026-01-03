<?php
class Affiliate_service {

    protected $CI;

    public function __construct(){
        $this->CI =& get_instance();
    }

    public function injectLinks($content){
        $keywords = $this->CI->db->get('affiliate_keywords')->result();

        foreach($keywords as $k){
            // Matches keyword even with punctuation, HTML tags, multiple occurrences
            $pattern = '/(' . preg_quote($k->keyword, '/') . ')/i';
            $replace = '<a href="'.$k->affiliate_url.'" target="_blank" rel="nofollow">$1</a>';
            $content = preg_replace($pattern, $replace, $content, 1); // 1 = first occurrence only
        }

        return $content;
    }
}
