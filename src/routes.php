<?php


Route::group(["middleware" => 'web'], function () {
    Route::get("/livetool/room/{hash_id?}", "Zeruiedu\LiveTool\Controllers\LiveController@getRoom");
    Route::post("/livetool/errors", "Zeruiedu\LiveTool\Controllers\LiveController@postErrors");
    Route::post("/livetool/room/start", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomStart");
    Route::post("/livetool/room/end", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomEnd");
    Route::post("/livetool/room/type", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomType");
    Route::post("/livetool/room/chat", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomChat");
    Route::post("/livetool/room/speak", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomSpeak");
    Route::post("/livetool/room/hand", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomHand");
    Route::post("/livetool/room/kick", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomKick");
    Route::post("/livetool/room/word", "Zeruiedu\LiveTool\Controllers\LiveController@postRoomWord");
    Route::post("/livetool/operate", "Zeruiedu\LiveTool\Controllers\LiveController@postOperate");
    Route::post("/livetool/online", "Zeruiedu\LiveTool\Controllers\LiveController@postOnline");
    Route::get("/livetool/check", "Zeruiedu\LiveTool\Controllers\LiveController@getCheck");
    Route::post("/livetool/record", "Zeruiedu\LiveTool\Controllers\LiveController@postRecord");
    Route::post("/livetool/record/callback", "Zeruiedu\LiveTool\Controllers\LiveController@postRecordCallBack");
    Route::get("/livetool/browser", "Zeruiedu\LiveTool\Controllers\LiveController@getBrowser");
    Route::get("/livetool/clearredis", "Zeruiedu\LiveTool\Controllers\LiveController@clearRedis");
});
