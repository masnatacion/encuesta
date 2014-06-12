<?php

/*
 *    author:		Kyle Gadd
 *    documentation:	http://www.php-ease.com/classes/sitemap.html
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class Sitemap {
/**
 *https://support.google.com/webmasters/answer/74288?hl=es NOTICIAS
 https://support.google.com/webmasters/answer/178636?hl=en&ref_topic=20986 IMAGES
 http://www.distilled.net/blog/video/creating-video-sitemaps-for-each-video-hosting-platform/#youtube // VIDEO
 */
  private $compress;
  private $page = 'index';
  private $index = 1;
  private $count = 1;
  private $urls = array();
  
  public function __construct ($compress=true) {
    ini_set('memory_limit', '75M'); // 50M required per tests
    $this->compress = ($compress) ? '.gz' : '';
  }
  
  public function page ($name) {
    $this->save();
    $this->page = $name;
    $this->index = 1;
  }
  
  public function url ($url, $lastmod='', $changefreq='', $priority='',$header='') {
   // $url = htmlspecialchars(BASE_URL . $url);
    $lastmod = (!empty($lastmod)) ? date('Y-m-d', strtotime($lastmod)) : false;
    $changefreq = (!empty($changefreq) && in_array(strtolower($changefreq), array('always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never'))) ? strtolower($changefreq) : false;
    $priority = (!empty($priority) && is_numeric($priority) && abs($priority) <= 1) ? round(abs($priority), 1) : false;
    if (!$lastmod && !$changefreq && !$priority) {
      $this->urls[] = $url;
    } else {
      //$url = array('loc'=>$url['loc']);
      if ($lastmod !== false) $url['lastmod'] = $lastmod;
      if ($changefreq !== false) $url['changefreq'] = $changefreq;
      if ($priority !== false) $url['priority'] = ($priority < 1) ? $priority : '1.0';
      $this->urls[] = $url;
    }
    if ($this->count == 50000) {
      $this->save($header);
    } else {
      $this->count++;
    }
  }
  
  public function close($header) {
    $this->save($header);
    //$this->ping_search_engines();
  }
  
  
  
  private function save ($header) {
    if (empty($this->urls)) return;
    
    $file = "sitemap-{$this->page}-{$this->index}.xml{$this->compress}";
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
    
    if($header =='videos')
      $xml .= '    xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
    elseif($header =='news')
      $xml .= '    xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">';
    elseif($header =='images')
      $xml .= '    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
      
      
    $xml .= '>' . "\n";
    
    
    foreach ($this->urls as $url) {
      $xml .= '  <url>' . "\n";
      if (is_array($url)) {
        $xml .= array2xml($url);
        //print_r($url);
        //foreach ($url as $key => $value) $xml .= "    <{$key}>{$value}</{$key}>\n";
      } else {
        $xml .= "    <loc>{$url}</loc>\n";
      }
      
      
      $xml .= '  </url>' . "\n";
    }
    $xml .= '</urlset>' . "\n";
    echo $xml;
    $this->urls = array();
    die;
    if (!empty($this->compress)) $xml = gzencode($xml, 9);
    $fp = fopen(BASE_PATH . $file, 'wb');
    fwrite($fp, $xml);
    fclose($fp);
    $this->index++;
    $this->count = 1;
    $num = $this->index; // should have already been incremented
    while (file_exists(BASE_PATH . "sitemap-{$this->page}-{$num}.xml{$this->compress}")) {
      unlink(BASE_PATH . "sitemap-{$this->page}-{$num}.xml{$this->compress}");
      $num++;
    }
    $this->index($file);
  }
  
  private function index ($file) {
    $sitemaps = array();
    $index = "sitemap-index.xml{$this->compress}";
    if (file_exists(BASE_PATH . $index)) {
      $xml = (!empty($this->compress)) ? gzfile(BASE_PATH . $index) : file(BASE_PATH . $index);
      $tags = $this->xml_tag(implode('', $xml), array('sitemap'));
      foreach ($tags as $xml) {
        $loc = str_replace(BASE_URL, '', $this->xml_tag($xml, 'loc'));
        $lastmod = $this->xml_tag($xml, 'lastmod');
        $lastmod = ($lastmod) ? date('Y-m-d', strtotime($lastmod)) : date('Y-m-d');
        if (file_exists(BASE_PATH . $loc)) $sitemaps[$loc] = $lastmod;
      }
    }
    $sitemaps[$file] = date('Y-m-d');
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($sitemaps as $loc => $lastmod) {
      $xml .= '  <sitemap>' . "\n";
      $xml .= '    <loc>' . BASE_URL . $loc . '</loc>' . "\n";
      $xml .= '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
      $xml .= '  </sitemap>' . "\n";
    }
    $xml .= '</sitemapindex>' . "\n";
    if (!empty($this->compress)) $xml = gzencode($xml, 9);
    $fp = fopen(BASE_PATH . $index, 'wb');
    fwrite($fp, $xml);
    fclose($fp);
  }
  
  private function xml_tag ($xml, $tag, &$end='') {
    if (is_array($tag)) {
      $tags = array();
      while ($value = $this->xml_tag($xml, $tag[0], $end)) {
        $tags[] = $value;
        $xml = substr($xml, $end);
      }
      return $tags;
    }
    $pos = strpos($xml, "<{$tag}>");
    if ($pos === false) return false;
    $start = strpos($xml, '>', $pos) + 1;
    $length = strpos($xml, "</{$tag}>", $start) - $start;
    $end = strpos($xml, '>', $start + $length) + 1;
    return ($end !== false) ? substr($xml, $start, $length) : false;
  }
  
  public function ping_search_engines () {
    $sitemap = BASE_URL . 'sitemap-index.xml' . $this->compress;
    $engines = array();
    $engines['www.google.com'] = '/webmasters/tools/ping?sitemap=' . urlencode($sitemap);
    $engines['www.bing.com'] = '/webmaster/ping.aspx?siteMap=' . urlencode($sitemap);
    $engines['submissions.ask.com'] = '/ping?sitemap=' . urlencode($sitemap);
    foreach ($engines as $host => $path) {
      if ($fp = fsockopen($host, 80)) {
        $send = "HEAD $path HTTP/1.1\r\n";
        $send .= "HOST: $host\r\n";
        $send .= "CONNECTION: Close\r\n\r\n";
        fwrite($fp, $send);
        $http_response = fgets($fp, 128);
        fclose($fp);
        list($response, $code) = explode (' ', $http_response);
        if ($code != 200) trigger_error ("{$host} ping was unsuccessful.<br />Code: {$code}<br />Response: {$response}");
      }
    }
  }
  
  public function __destruct () {
    $this->save();
  }

}

?>