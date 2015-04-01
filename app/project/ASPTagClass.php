<%
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 4/1/15
 * Time: 10:23 AM
 */

namespace project;


class ASPTagClass extends TagClass {

    protected $tagType = 'ASP tags';

    public function __construct()
    {
        $ASPTagConfigurationSetting = ini_get('asp_tags');

        if(!$ASPTagConfigurationSetting)
        {
            $this->enableASPTags();
        }
    }

    public function enableASPTags()
    {
        ini_set('asp_tags', '1');
    }
}



%>