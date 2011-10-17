<?php defined('SYSPATH') or die('No direct script access.');

return array(
    
    'VK_APP_ID'             => 'APP ID', // ID приложения
    
    'VK_APP_SECRET'         => 'APP SECRET', // Защищенный ключ
    
    'REDIRECT_URI'          => 'http://kohana.local/login/vk/',
    
    'DISPLAY'               => 'page', // page OR popup OR touch OR wap
    
    'SCOPE'                 => array(
            'notify', // Пользователь разрешил отправлять ему уведомления.
            //'friends', // Доступ к друзьям. 
            //'photos', // Доступ к фотографиям. 
            //'audio', // Доступ к аудиозаписям. 
            //'video', // Доступ к видеозаписям.
            //'docs', // Доступ к документам.
            //'notes', // Доступ заметкам пользователя. 
            //'pages', // Доступ к wiki-страницам. 
            //'wall', // Доступ к обычным и расширенным методам работы со стеной. 
            //'groups', // Доступ к группам пользователя. 
            //'ads', // Доступ к расширенным методам работы с рекламным API. 
            //'offline' // Доступ к API в любое время со стороннего сервера. 
    ), 
    
    'VK_URI_METHOD'         => 'https://api.vkontakte.ru/method/{METHOD_NAME}?{PARAMETRS}&access_token={ACCESS_TOKEN}',
    'VK_URI_AUTH'           => 'http://api.vk.com/oauth/authorize?client_id={CLIENT_ID}&redirect_uri={REDIRECT_URI}&scope={SCOPE}&display={DISPLAY}',
    'VK_URI_ACCESS_TOKEN'   => 'https://api.vkontakte.ru/oauth/access_token?client_id={CLIENT_ID}&client_secret={APP_SECRET}&code={CODE}',
    'VK_URI_METHOD'         => 'https://api.vkontakte.ru/method/{METHOD_NAME}?{PARAMETERS}&access_token={ACCESS_TOKEN}',
);