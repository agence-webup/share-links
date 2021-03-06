<?php

namespace Webup\ShareLinks;

class ShareLinks
{


    /**
    * Generate Twitter share link
    * @param  [string] $url
    * @param  [string] $text
    * @param  [string] $hashtags
    * @return [string]
    */
    public static function twitter($url = null, $text = null, $hashtags = null)
    {
        return self::links('https://twitter.com/share', ['url' => $url, 'text' => $text, 'hashtags' => $hashtags]);
    }

    /**
    * Generate Facebook share link
    * @param  [string] $url
    * @return [string]
    */
    public static function facebook($url = null)
    {
        return self::links('http://facebook.com/sharer.php', ['u' => $url]);
    }

    /**
    * Generate Google+ share link
    * @param  [string] $url
    * @return [string]
    */
    public static function googleplus($url = null)
    {
        return self::links('https://plus.google.com/share', ['url' => $url]);
    }

    /**
    * Generate Linkedin share link
    * @param  [string] $url
    * @param  [string] $title
    * @param  [string] $summary
    * @param  [string] $source
    * @return [string]
    */
    public static function linkedin($url = null, $title = null, $summary = null, $source = null)
    {
        return self::links('https://www.linkedin.com/shareArticle', [
            'mini' => 'true',
            'url' => $url,
            'title' => $title,
            'summary' => $summary,
            'source' => $source
        ]);
    }

    /**
     * Generate mailto link
     * @param  [type] $dest    [description]
     * @param  [type] $subject [description]
     * @param  [type] $body    [description]
     * @return [type]          [description]
     */
    public static function email($dest = null, $subject = null, $body = null)
    {
        return self::links('mailto:' . $dest, [
            'subject' => $subject,
            'body' => $body
        ]);
    }


    private static function links($baseUrl, $params)
    {
        $url = $baseUrl;
        $i = 0;

        $filteredParams = array_filter($params, 'strlen');
        $len = count($filteredParams);

        foreach ($filteredParams as $key => $value) {
            if($i == 0) {
                $url .= '?';
            }

            $url .= $key . '=' . urlencode($value) ;
            if($i < $len - 1) {
                $url .= '&';
            }

            $i++;
        }

        return $url;
    }
}
