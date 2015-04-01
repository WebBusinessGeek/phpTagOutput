<?
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 4/1/15
 * Time: 10:23 AM
 */

namespace project;


class ShortTagClass extends TagClass {

    protected $tagType = 'short tags';
    
    public function __construct()
    {
        $shortTagConfiguredSetting = ini_get('short_open_tag');
        if(!$shortTagConfiguredSetting)
        {
          throw new \Exception('Short tags are not enabled.');
        }
    }



}