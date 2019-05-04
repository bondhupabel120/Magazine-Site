<?php

Route::get('/',[
   'uses' => 'ProjectController@index',
    'as'  => '/'
]);

Route::get('/category-news/{name}/{id}',[
   'uses' => 'ProjectController@categoryNews',
    'as'  => 'category-news'
]);

Route::get('/news-details/{id}',[
   'uses' => 'ProjectController@newsDetails',
    'as'  => 'news-details'
]);

Route::get('/sign-up',[
   'uses' => 'SignUpController@signUp',
    'as'  => 'sign-up'
]);

Route::post('/new-sign-up',[
   'uses' => 'SignUpController@newSignUp',
    'as'  => 'new-sign-up'
]);

Route::post('/visitor-logout',[
   'uses' => 'SignUpController@visitorLogout',
    'as'  => 'visitor-logout'
]);

Route::get('/visitor-login',[
   'uses' => 'SignUpController@visitorLogin',
    'as'  => 'visitor-login'
]);

Route::post('/visitor-sign-in',[
   'uses' => 'SignUpController@visitorSignIn',
    'as'  => 'visitor-sign-in'
]);

Route::get('/email-check/{email}',[
   'uses' => 'SignUpController@emailCheck',
    'as'  => 'email-check'
]);

Route::post('/new-comment',[
   'uses' => 'CommentController@newComment',
   'as'   => 'new-comment'
]);

Route::get('/about',[
   'uses' => 'AboutController@about',
   'as'   => 'about'
]);

Route::get('/contact',[
   'uses' => 'ContactController@Contact',
   'as'   => 'contact'
]);

Route::post('/new-contact',[
   'uses' => 'ContactController@newContact',
   'as'   => 'new-contact'
]);

//For Student section

Route::group(['middleware' => 'visitorLock'], function (){

    Route::get('/students/view-story',[
        'uses' => 'ViewPostController@viewStory',
        'as'   => 'view-story'
    ]);

    Route::get('/students/story-details/{id}',[
        'uses' => 'ViewPostController@storyDetails',
        'as'   => 'story-details'
    ]);

    Route::get('/students/view-poem',[
        'uses' => 'ViewPostController@viewPoem',
        'as'   => 'view-poem'
    ]);

    Route::get('/students/poem-details/{id}',[
        'uses' => 'ViewPostController@poemDetails',
        'as'   => 'poem-details'
    ]);

    Route::get('/students/view-joke',[
        'uses' => 'ViewPostController@viewJoke',
        'as'   => 'view-joke'
    ]);

    Route::get('/students/joke-details/{id}',[
        'uses' => 'ViewPostController@jokeDetails',
        'as'   => 'joke-details'
    ]);



    Route::get('/students/written-story',[
        'uses' => 'WrittenPostController@writtenStory',
        'as'   => 'written-story'
    ]);

    Route::post('/students/new-written-story',[
        'uses' => 'WrittenPostController@newWrittenStory',
        'as'   => 'new-written-story'
    ]);





    Route::get('/students/written-poem',[
        'uses' => 'WrittenPostController@writtenPoem',
        'as'   => 'written-poem'
    ]);

    Route::post('/students/new-written-poem',[
        'uses' => 'WrittenPostController@newWrittenPoem',
        'as'   => 'new-written-poem'
    ]);





    Route::get('/students/written-joke',[
        'uses' => 'WrittenPostController@writtenJoke',
        'as'   => 'written-joke'
    ]);

    Route::post('/students/new-written-joke',[
        'uses' => 'WrittenPostController@newWrittenJoke',
        'as'   => 'new-written-joke'
    ]);

});





//Admin Panel
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'test'], function (){

    Route::get('/register-admin',[
        'uses' => 'RegisterController@registerAdmin',
        'as'   => 'register-admin'
    ]);

    Route::post('/delete-register',[
        'uses' => 'RegisterController@deleteRegister',
        'as'   => 'delete-register'
    ]);

    Route::get('/register-user',[
        'uses' => 'RegisterController@registerUser',
        'as'   => 'register-user'
    ]);

    Route::post('/delete-user',[
        'uses' => 'RegisterController@deleteUser',
        'as'   => 'delete-user'
    ]);

    Route::get('/category/add-category',[
        'uses' => 'CategoryController@addCategory',
        'as'   => 'add-category'
    ]);

    Route::post('/category/new-category',[
        'uses' => 'CategoryController@newCategory',
        'as'   => 'new-category'
    ]);

    Route::get('/category/manage-category',[
        'uses' => 'CategoryController@manageCategory',
        'as'   => 'manage-category'
    ]);

    Route::get('/category/edit-category/{id}',[
        'uses' => 'CategoryController@editCategory',
        'as'   => 'edit-category'
    ]);

    Route::post('/category/update-category',[
        'uses' => 'CategoryController@updateCategory',
        'as'   => 'update-category'
    ]);

    Route::post('/category/delete-category',[
        'uses' => 'CategoryController@deleteCategory',
        'as'   => 'delete-category'
    ]);

    Route::get('/news/add-news',[
        'uses' => 'NewsController@addNews',
        'as'   => 'add-news'
    ]);

    Route::post('/news/new-news',[
        'uses' => 'NewsController@newNews',
        'as'   => 'new-news'
    ]);

    Route::get('/news/manage-news',[
        'uses' => 'NewsController@manageNews',
        'as'   => 'manage-news'
    ]);

    Route::get('/news/edit-news/{id}',[
        'uses' => 'NewsController@editNews',
        'as'   => 'edit-news'
    ]);

    Route::post('/news/update-news',[
        'uses' => 'NewsController@updateNews',
        'as'   => 'update-news'
    ]);

    Route::post('/news/delete-news',[
        'uses' => 'NewsController@deleteNews',
        'as'   => 'delete-news'
    ]);

    Route::get('/manage-comment',[
        'uses' => 'CommentController@manageComment',
        'as'   => 'manage-comment'
    ]);

    Route::get('/published-comment/{id}',[
        'uses' => 'CommentController@publishedComment',
        'as'   => 'published-comment'
    ]);

    Route::get('/unpublished-comment/{id}',[
        'uses' => 'CommentController@unpublishedComment',
        'as'   => 'unpublished-comment'
    ]);

    Route::post('/delete-comment',[
        'uses' => 'CommentController@deleteComment',
        'as'   => 'delete-comment'
    ]);

    Route::get('/manage-contact',[
        'uses' => 'ContactController@manageContact',
        'as'   => 'manage-contact'
    ]);

    Route::post('/delete-contact',[
        'uses' => 'ContactController@deleteContact',
        'as'   => 'delete-contact'
    ]);

    Route::get('/published-message/{id}',[
        'uses' => 'ContactController@publishedMessage',
        'as'   => 'published-message'
    ]);

    Route::get('/unpublished-message/{id}',[
        'uses' => 'ContactController@unpublishedMessage',
        'as'   => 'unpublished-message'
    ]);



    Route::get('/students/manage-story',[
        'uses' => 'WrittenPostController@manageStory',
        'as'   => 'manage-story'
    ]);

    Route::get('/students/published-story/{id}',[
        'uses' => 'WrittenPostController@publishedStory',
        'as'   => 'published-story'
    ]);

    Route::get('/students/unpublished-story/{id}',[
        'uses' => 'WrittenPostController@unpublishedStory',
        'as'   => 'unpublished-story'
    ]);

    Route::post('/students/delete-story',[
        'uses' => 'WrittenPostController@deleteStory',
        'as'   => 'delete-story'
    ]);



    Route::get('/students/manage-poem',[
        'uses' => 'WrittenPostController@managePoem',
        'as'   => 'manage-poem'
    ]);

    Route::get('/students/published-poem/{id}',[
        'uses' => 'WrittenPostController@publishedPoem',
        'as'   => 'published-poem'
    ]);

    Route::get('/students/unpublished-poem/{id}',[
        'uses' => 'WrittenPostController@unpublishedPoem',
        'as'   => 'unpublished-poem'
    ]);

    Route::post('/students/delete-poem',[
        'uses' => 'WrittenPostController@deletePoem',
        'as'   => 'delete-poem'
    ]);



    Route::get('/students/manage-joke',[
        'uses' => 'WrittenPostController@manageJoke',
        'as'   => 'manage-joke'
    ]);

    Route::get('/students/published-joke/{id}',[
        'uses' => 'WrittenPostController@publishedJoke',
        'as'   => 'published-joke'
    ]);

    Route::get('/students/unpublished-joke/{id}',[
        'uses' => 'WrittenPostController@unpublishedJoke',
        'as'   => 'unpublished-joke'
    ]);

    Route::post('/students/delete-joke',[
        'uses' => 'WrittenPostController@deleteJoke',
        'as'   => 'delete-joke'
    ]);

});
