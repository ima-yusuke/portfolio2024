<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public $personalWorkData = [
        [
            "id" => 1,
            "name" => "英単語帳",
            "overview" => "英単語を登録、編集、削除できるメモサイト。",
            "background" => "趣味である洋画を見ている時に分からない単語をiphoneのメモに書いていた。しかし、単語数が増えてきて、メモが見づらくなったため、自分で作成することを思い立った。",
            "language" => ["Laravel", "MySQL"],
            "image" => "work-english.png",
            "url" => "https://imai.gummy-tech.com"
        ],
        [
            "id" => 2,
            "name" => "Rehabiridge",
            "overview" => "理学療法についてのまとめサイト。ユーザーはログインしないと記事の中身が見れない設定（Laravel Permission）。管理画面では記事の追加・編集・削除・権限付与ができる。",
            "background" => "友人からの依頼。SNSで情報発信をしているが、記事が増えてきたため、まとめるためのサイトを作成したいとのこと。会員制も現在検討中。",
            "language" => ["Laravel","Laravel Permission","MySQL"],
            "image" => "work-rehabiridge.png",
            "url" => "https://rehabiridge.gummy-tech.com/"
        ],
        [
            "id" => 3,
            "name" => "面接技術的質問集",
            "overview" => "エンジニア就活時に聞かれた技術的な質問を自分なりに後日調べてまとめたもの。",
            "background" => "面接時に聞かれて答えれなかったため、面接終了時に調べて、まとめ、面接をしてくれた企業に送っていたのが始まり。また、スクールを卒業して間もなくだったため、周りの就活中の友人にも共有したいと思い、公開することにした。",
            "language" => ["Next.js","Vercel"],
            "image" => "work-interview.png",
            "url" => "https://varinterview.vercel.app/"
        ],
        [
        "id" => 4,
        "name" => "オセロ",
        "overview" => "アルゴリズムの学習のために作成。対戦まではできないが、オセロの動作は再現。",
        "background" => "アルゴリズムの学習。ライブラリーなどを使用せず、素のJavaScriptのみで作成。",
        "language" => ["HTML","CSS","JavaScript"],
        "image" => "work-othello.png",
        "url" => "https://ima-yusuke.github.io/othello/"
        ],
        [
            "id" => 5,
            "name" => "模写",
            "overview" => "模写",
            "background" => "内定先のホームページの模写。この会社がReactを使用していることを知り、Reactの学習も兼ねて模写。",
            "language" => ["React"],
            "image" => "work-arsaga.png",
            "url" =>false
        ]
    ];

    public $businessWorkData = [
        [
            "id" => 1,
            "name" => "システム開発①",
            "overview" => "採用特設サイト。CMSも1から開発しており、プログラミングの知識が全くなくても、サイト（テキスト、画像）を簡単に作成、編集、管理できる。また、画像のトリミングやサイズ変更も可能。",
            "background" => "採用サイトが古くなってきており更新したい。",
            "language" => ["Laravel","Quill"],
            "image" => "work-kikukawa.png",
            "url" => "https://kikukawa.jobcruise.jp/"
        ],
        [
            "id" => 2,
            "name" => "LP①",
            "overview" => "LP。採用サイト。",
            "background" => "採用サイトを更新する予定のクライアント。新サイトが出来るまでのLPを作成。（現在のサイトを模写）。",
            "language" => ["Laravel"],
            "image" => "work-sansyu.png",
            "url" => "https://sansyu.jobcruise.jp/"
        ]
    ];

    public function ShowWork()
    {
        $personalWorkData = $this->personalWorkData;
        $businessWorkData = $this->businessWorkData;
        return view('work-page',compact('personalWorkData','businessWorkData'));
    }

}
