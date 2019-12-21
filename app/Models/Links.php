<?php

namespace App\Models;

use Eloquent as Model;
use Log;
// use Embed;
use Cohensive\Embed\Facades\Embed;
/**
 * Class Links
 * @package App\Models
 * @version December 21, 2019, 2:19 pm UTC
 *
 * @property string title
 * @property string contents
 * @property integer links
 * @property string linkType
 */
class Links extends Model
{

    public $table = 'links';
    


    public $fillable = [
        'title',
        'contents',
        'links',
        'linkType'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'links' => 'string',
        'linkType' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function getLinksHtmlAttribute()
    {
        if($this->linkType === 'youtube'){
            
            $embed = Embed::make($this->links)->parseUrl();
           
            if (!$embed)
                return '';

            $embed->setAttribute([
                'width' => '100%',
                'height' => 300,
                'frameborder' => 0,
                'allowfullscreen' => true
                ]);
           
            return $embed->getHtml();

        }else{
            return $this->links;
        }
       
    }
}
