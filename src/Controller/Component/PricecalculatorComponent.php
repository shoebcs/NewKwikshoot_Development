<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class PricecalculatorComponent extends Component{
    
    public function getExtraPrice($fields){
        
        $fields = $this->fetchExtraFields($fields);
        $amount = 0;
        if(is_array($fields)){
            
            foreach($fields as $key =>$value){
                
               $amount += $this->getSinglePrice($key,$value);
            }
            return $amount;
        }else{
            return false;
        }
    }
    
    Public function getSinglePrice($key,$value){
        $PriceInformation = array('required_video_length'=>25,
                                    'raw_video_length'=>1,
                                    'extra_custom_title_page'=>5,
                                    'extra_single_graphic_overlay'=>25,
                                    'extra_green_screen_keying'=>100,
                                    'extra_music_overlay'=>75,
                                    'extra_image_screen_takeover'=>10,
                                    'extra_image_overlay_on_screen'=>25,
                                    'extra_minimum_for_subtitles'=>20);
        
        if(!empty($key) && !empty($value)) {
            
           return $PriceInformation[$key]*$value;
        }       
    }
    
    public function fetchExtraFields($request){
        
       $PriceInformation = array('required_video_length'=>25,
                                    'raw_video_length'=>1,
                                    'extra_custom_title_page'=>5,
                                    'extra_single_graphic_overlay'=>25,
                                    'extra_green_screen_keying'=>100,
                                    'extra_music_overlay'=>75,
                                    'extra_image_screen_takeover'=>10,
                                    'extra_image_overlay_on_screen'=>25,
                                    'extra_minimum_for_subtitles'=>20); 
       
       foreach($PriceInformation as $key=>$value){
           if(array_key_exists($key, $request) && $request[$key]>=1 ){
               
               switch($key){
                   case "required_video_length":
                       $value = ($request[$key]>3)?($request[$key]-3):0;
                        break;
                   case "raw_video_length":
                         $value = ($request[$key]>10)?($request[$key]-10):0;
                        break;
                   default:
                    $value = 1;
                   
                       
               }
               $fileds[$key] = $value;
           }
       }
       if(is_array($fileds) and count($fileds)>0){
           return $fileds;
       }
       return false;
       
    }
    
}