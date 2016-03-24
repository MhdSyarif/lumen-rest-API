<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

$app->group(['namespace' => 'App\Http\Controllers'] , function($app){
    $api = 'api';
    $app->get($api.'/', ['uses' => 'ArticleController@getArticles', 'as' => 'allArticles']);
    $app->get($api.'/article/{id}', ['uses' => 'ArticleController@getArticle', 'as' => 'singleArticle']);
    $app->post($api.'/article', ['uses' => 'ArticleController@saveArticle', 'as' => 'saveArticle']);
    $app->put($api.'/article/{id}', ['uses' => 'ArticleController@updateArticle', 'as' => 'updateArticle']);
    $app->delete($api.'/article/{id}', ['uses' => 'ArticleController@deleteArticle', 'as' => 'deleteArticle']);
});