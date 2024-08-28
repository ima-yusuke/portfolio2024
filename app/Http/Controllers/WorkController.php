<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public $personalWorkData = [
        [
            "id" => 1,
            "name" => "英単語帳",
            "overview" => "英単語を覚えるためのアプリ",
            "background" => "自分だけのアプリが欲しかった",
            "language" => ["HTML", "CSS", "JavaScript", "PHP", "MySQL"],
            "image" => "work-english.png",
            "url" => "https://imai.gummy-tech.com"
        ],
        [
            "id" => 2,
            "name" => "Rehabiridge",
            "overview" => "理学療法についてのまとめサイト。管理画面も作成したので、記事の追加、編集、削除ができる。またlaravel permissionを使用し、権限管理も実装。",
            "background" => "友人からの依頼",
            "language" => ["HTML", "CSS", "JavaScript", "PHP"],
            "image" => "work-rehabiridge.png",
            "url" => "https://rehabiridge.gummy-tech.com/"
        ],
        [
            "id" => 3,
            "name" => "面接技術的質問集",
            "overview" => "エンジニア就活時に聞かれた技術的な質問をまとめたサイト。",
            "background" => "面接時に聞かれて答えれなかったため、面接終了時に調べて、まとめ、面接をしてくれた企業に送っていたのが始まり。",
            "language" => ["Next.js","Vercel"],
            "image" => "work-interview.png",
            "url" => "https://varinterview.vercel.app/"
        ],
        [
        "id" => 4,
        "name" => "オセロ",
        "overview" => "アルゴリズムの学習のために作成。対戦まではできないが、オセロの動作は再現。",
        "background" => "アルゴリズムの学習",
        "language" => ["Next.js"],
        "image" => "work-othello.png",
        "url" => "https://ima-yusuke.github.io/othello/"
        ],
        [
            "id" => 5,
            "name" => "アルサーガパートナーズ",
            "overview" => "模写",
            "background" => "内定先のHPの模写",
            "language" => ["React"],
            "image" => "work-arsaga.png",
            "url" =>false
        ]
    ];

    public $businessWorkData = [
        [
            "id" => 1,
            "name" => "キクカワエンタープライズ（株）",
            "overview" => "LP。Quillを使用し、簡単に更新できるように設計。",
            "background" => "採用サイトが古くなってきており更新したい。",
            "language" => ["Laravel","Quill"],
            "image" => "work-kikukawa.png",
            "url" => "https://kikukawa.jobcruise.jp/"
        ],
        [
            "id" => 2,
            "name" => "（株）三秀",
            "overview" => "LP。採用サイト。",
            "background" => "採用サイトを更新する予定のクライアント。学習を兼ねて現在のサイトを模写。",
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
