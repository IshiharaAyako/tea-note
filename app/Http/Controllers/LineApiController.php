<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineApiController extends Controller
{
    protected $access_token;
    protected $channel_secret;

    public function __construct()
    {
        // :point_down: アクセストークン
        $this->access_token = env('LINE_ACCESS_TOKEN');
        // :point_down: チャンネルシークレット
        $this->channel_secret = env('LINE_CHANNEL_SECRET');
    }

    // Webhook受取処理
    public function postWebhook(Request $request) {
        $input = $request->all();
        // ユーザーがどういう操作を行った処理なのかを取得
        $type  = $input['events'][0]['type'];
    
        // タイプごとに分岐
        switch ($type) {
            // メッセージ受信
            case 'message':
                // メッセージ受信
                break;
    
            // 友だち追加 or ブロック解除
            case 'follow':
                Log::info("ユーザーが追加されました。");
                break;
    
            // グループ・トークルーム参加
            case 'join':
                Log::info("グループ・トークルームに追加されました。");
                break;
    
            // グループ・トークルーム退出
            case 'leave':
                Log::info("グループ・トークルームから退出させられました。");
                break;
    
            // ブロック
            case 'unfollow':
                Log::info("ユーザーにブロックされました。");
                break;
    
            default:
                Log::info("the type is" . $type);
                break;
        }
    
        return;
    }

    // メッセージ送信用
    public function sendMessage(Request $request) {
        // ここに処理を書いていく
    }
}
