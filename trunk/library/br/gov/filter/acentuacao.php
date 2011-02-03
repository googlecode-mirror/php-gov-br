<?php
/**
 * Classe Filter Acentuacao
 *
 * @category   
 * @package    
 * @subpackage 
 * @copyright  Copyright (c) 2011 php.Gov-BR (http://code.google.com/p/php-gov-br/)
 * @autor      Ricardo Maia <ricardo.maia@infusesoftware.com>
 * @version    $Id:$
 * @uses       Zend_Filter_Interface
 * @todo 
 */
namespace br\gov\filter;
class Acentuacao implements \Zend_Filter_Interface
{
    public function filter($value)
    {
        $withoutAccents = $this->replaceAccents($value);
        
        $valueFiltered = str_replace("[^ A-Za-z0-9_]", "", $withoutAccents);

        return $valueFiltered;
    }


    private function replaceAccents($str)
    {

        $replace = array(
            'a' => array('á','à','ã','â','ä'),
            'e' => array('é','è','ë','ê'),
            'i' => array('í','ì'),
            'o' => array('ó','ò','õ','ô','ö'),
            'u' => array('ú','ù','ü'),
            'A' => array('Á','À','Ã','Â','Ä'),    
            'E' => array('É','È'),
            'I' => array('Í','Ì'),
            'O' => array('Ó','Ò','Õ','Ô','Ö'),
            'U' => array('Ú','Ù','Ü'),
            'c' => array('ç'),
            'C' => array('Ç')
        );

        foreach ($replace as $by=>$what) {
            $str = str_replace($what,$by,$str);
        }

        return $str;
    }
    
}