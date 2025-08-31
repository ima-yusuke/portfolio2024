<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public $personalWorkData = [
        [
            "id" => 1,
            "name" => "英単語帳",
            "overview" => "英単語を登録、削除できるメモサイト。ただし、ログインしないと新規で単語登録、削除が出来ない仕様。Laravel Permissionを使用し、ログインをすると、新規登録、削除が可能な権限を付与している。",
            "background" => "趣味である洋画を見ている時に分からない単語をiphoneのメモに書いていた。しかし、単語数が増えてきて、メモが見づらくなったため、自分で作成することを思い立った。",
            "language" => ["Laravel","Laravel Permission","MySQL"],
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
            "background" => "面接時に聞かれて答えれなかったため、面接終了後に調べて、まとめ、面接をしてくれた企業に送っていたのが始まり。また、スクールを卒業して間もなくだったため、周りの就活中の友人にも共有したいと思い、公開することにした。",
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
            "url" =>null
        ]
    ];

    public $businessWorkData = [
        [
            "id" => 1,
            "name" => "ホームページ制作",
            "overview" => "大学の教授からの依頼で、研究室のホームページが古くなってきているので、新たに作成したいとのこと。現役大学生にどのようなホームページを求めているかヒアリングしコンテンツを企画。また教授が一番大事にしている『心に響く機械』という言葉をキーワードに、TOPページの画像は機械を機械的に並べて、それぞれの機械にハート（心）を持たせ、心が響いているようなデザインで作成した。※現在も開発中。",
            "background" =>"今回の案件とは別に、以前同じ教授から別のホームページ制作の依頼を受けた。その際に、要望をしっかりヒアリングし、デザインからStudio構築まで一貫して担当。頻繁な訪問などし、教授の満足度を高め、今回新たに依頼を受けることができた。",
            "language" => ["Studio"],
            "image" => "work-mieu.png",
            "url" => null
        ],
        [
            "id" => 2,
            "name" => "デザイン_チラシ",
            "overview" => "前職の旅行会社で勤務していた時に困っていたことを、現在のWebエンジニアとしてのスキルを活かして解決できないかと考え、企画・デザインしたチラシ。今回のシステムはスマホでも使えるというのが営業職をしていた自分には大きな魅力で、スマホをデザインに全面に出した。実際に本部長まで話が通り、プレゼンを実施。現在も開発中。",
            "background" =>"前職の旅行会社で勤務していた時に困っていたことを、現在のWebエンジニアとしてのスキルを活かして解決できないかと考え、企画・デザインした。",
            "language" => ["Canva"],
            "image" => "work-flyer-3.png",
            "url" => "https://www.canva.com/design/DAGfgVN0sA4/xyrvBU8xtnuj8H606io9Zw/view?utm_content=DAGfgVN0sA4&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=he46223c782"
        ],
        [
            "id" => 3,
            "name" => "デザイン_チラシ",
            "overview" => "まず電気料金を見直す層は中年代女性が多いと仮説を立て、母親にJAでんきの話をした。するとJAがでんきを扱っていることを知らなかった。そこで、JAはお米だけでなくでんきも扱ってることを前面に出し、目を引くようなデザインにした。",
            "background" =>"JAでんき様より、電気料金見直しの説明会を開催するためのチラシデザインを依頼され作成。",
            "language" => ["Canva"],
            "image" => "work-flyer-2.png",
            "url" => "https://www.canva.com/design/DAGxo2e94u0/qAXXjglb5Q3Tyds42PgXMw/view?utm_content=DAGxo2e94u0&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h59c6f16591"
        ],
        [
            "id" => 4,
            "name" => "デザイン_チラシ",
            "overview" => "近年合同説明会への需要が低くなってきているため、大学生が『お！なにこれ！』と興味を持ってもらう最初のきっかけとなるようなデザインを意識して作成。おいしい就職情報も得れる、そして美味しい食事や景品もゲットできるようにし、『おいしいシューカツ』という名でブランディングした。",
            "background" =>"大学にて開催される合同説明会のチラシデザインを依頼され作成。",
            "language" => ["Canva"],
            "image" => "work-flyer-1.png",
            "url" => "https://www.canva.com/design/DAGnZ_rIFKo/J4dgevgdlg-nQZQ4UE_gXw/view?utm_content=DAGnZ_rIFKo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h7ee4eb1dc6"
        ],
        [
            "id" => 5,
            "name" => "デザイン_アイコン",
            "overview" => "就活に勝つという文言からシュークリームにカツを挟んだシューカツをモチーフにデザイン。諸事情で実現しなかったが、実際にシューカツを販売することも検討されていた。",
            "background" =>"上記シューカツのデザインと同時にアイコン画像も依頼があり作成。",
            "language" => ["Canva"],
            "image" => "work-icon-1.png",
            "url" => "https://www.canva.com/design/DAGnZ_rIFKo/J4dgevgdlg-nQZQ4UE_gXw/view?utm_content=DAGnZ_rIFKo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h7ee4eb1dc6"
        ],
        [
            "id" => 6,
            "name" => "花の適性診断システム",
            "overview" => "ユーザーがいくつかの質問に答えていくと、性格や好みに合った“ぴったりの花”を診断して提案するWebアプリを開発。
            クライアントは質問や回答内容、診断結果の編集を自由に行えるCMS機能を通じて、専門知識がなくても簡単にコンテンツを更新可能。結果画面に花の画像・説明・関連リンクなどを表示し、購入への導線を設計。",
            "background" =>"事業再構築補助金を活用して新規事業を立ち上げるクライアントの依頼。新規顧客獲得のため、ユーザーに楽しんでもらいながら商品を知ってもらうことを目的に企画・開発。",
            "language" => ["Laravel"],
            "image" => "work-rio-flower.png",
            "url" => "https://flaver-rio.com/"
        ],
        [
            "id" => 7,
            "name" => "採用サイト",
            "overview" => "企業の採用活動をサポートする特設サイトを開発。テキスト・画像の編集を管理画面からのデータ操作（登録・編集・削除）でノーコードで実現できるよう設計し、顧客自身がコードを書くことなくサイト内容を自由に更新可能な管理画面を実装した。",
            "background" => "採用サイトが古くなってきており更新したい。",
            "language" => ["Laravel","Quill"],
            "image" => "work-kikukawa.png",
            "url" => "https://kikukawa.jobcruise.jp/"
        ],
        [
            "id" => 8,
            "name" => "LP",
            "overview" => "LP。採用サイト。",
            "background" => "採用サイトを更新する予定のクライアント。新サイトが出来るまでのLPを作成。（現在のサイトを模写）。",
            "language" => ["Laravel"],
            "image" => "work-sansyu.png",
            "url" => "https://sansyu.jobcruise.jp/"
        ],

    ];

    public function ShowWork()
    {
        $personalWorkData = $this->personalWorkData;
        $businessWorkData = $this->businessWorkData;
        return view('work-page',compact('personalWorkData','businessWorkData'));
    }

}
