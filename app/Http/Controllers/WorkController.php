<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public $personalWorkData = [
        [
            "id" => 1,
            "name" => "英単語学習サービス開発",
            "overview" => "英単語学習サービス。英単語を入力するだけで、AIが発音・品詞・意味を自動取得。辞書を引く時間が90%削減され、10秒で登録完了。また、登録した単語から4択クイズを自動生成。ゲーム感覚で楽しく学習でき、自分の理解度を確認できます。さらに実際に英語でメッセージを送る時用に、登録した単語を使った自然な英語の返信文をAIが生成することも可。覚えた単語を実際の会話で使える形で練習できます。",
            "background" => "洋画を見ている時に分からない単語をiphoneのメモに書いていた。しかし、単語数が増えてきて、メモが見づらくなったため、自分で作成することを思い立った。",
            "language" => ["Laravel"],
            "image" => "work-vocabuddy.webp",
            "url" => "https://imai.gummy-tech.com/"
        ],
        [
            "id" => 2,
            "name" => "訪日外国人向けサービス開発",
            "overview" => "訪⽇外国⼈向けのサービスを個⼈で開発中。旅⾏業界での実務経験と英語⼒を活かし、外国⼈ユーザーの利⽤シーンを想定した設計・開発を進めている。インバウンド領域の課題に対し、⾃らサービスを企画・構築できることを⽰す取り組み。",
            "background" => "生まれ故郷である三重県を世界にPRしたいと思い、訪日外国人向けのサービスを開発することを思い立った。",
            "language" => ["Laravel","React"],
            "image" => "work-compass.webp",
            "url" => "https://compass.gummy-tech.com/"
        ],
        [
            "id" => 3,
            "name" => "IT用語学習サービス開発",
            "overview" => "プログラミング初学者のための技術用語辞典。難しい技術用語を、わかりやすく丁寧に解説。基礎から学べる記事で、学習をサポート。",
            "background" => "自分がプログラミングを学び始めた頃、技術用語が難しくて理解するのに苦労した経験がある。そこで、同じような悩みを持つ人のために、わかりやすく丁寧に解説した技術用語辞典を作成しようと思い立った。",
            "language" => ["Laravel"],
            "image" => "work-tech-children.webp",
            "url" => "https://tech-children.gummy-tech.com/"
        ],
        [
            "id" => 4,
            "name" => "Wagyu By Masa（海外向けサイト）",
            "overview" => "和牛農家を営む友人のために作成したサイト。海外向けに和牛の魅力を発信しており、Instagramのフォロワーが10万人を超えてきて、より詳細な情報をまとめるためのサイトを作成したいとのこと。LPの画像やお知らせは管理画面より登録できるようにして、友人が簡単に更新できるように設計。",
            "background" => "友人からの依頼。海外向けに和牛の魅力を発信しており、より詳細な情報をまとめるためのサイトを作成したいとのこと。",
            "language" => ["Laravel","React","Claude Code"],
            "image" => "work-wagyu-by-masa.webp",
            "url" => "https://wagyu.gummy-tech.com/"
        ],
        [
            "id" => 5,
            "name" => "模写",
            "overview" => "模写",
            "background" => "内定先のホームページの模写。この会社がReactを使用していることを知り、Reactの学習も兼ねて模写。",
            "language" => ["React"],
            "image" => "work-arsaga.webp",
            "url" =>null
        ]
    ];

    public $businessWorkData = [
        [
            "id" => 1,
            "name" => "合説システム開発",
            "overview" => "⾃社で運営する合同説明会「FUNction」のシステム開発と営業を、開発・営業の両⾯で⼀貫して担当。開発ではAIコーディング⽀援に Claude Code を活⽤し、開発を効率化している。営業では、企業向けにアポ取りから商談、イベント当⽇の対応まで⼀貫して担当。昨年からの定期開催で1⽇あたり約3社が出展し、これまで計約50社が出展、累計参加学⽣数は約350名にのぼる。⾃ら開発したプロダクトを、⾃ら営業して顧客に届ける⼀連の経験を積んでいる。",
            "background" =>"自社で三重大学生専用フリースペースを運営しており、そこで開催しているイベントの1つ。IT会社のため自社で学生と企業を繋ぐプラットフォームを構築",
            "language" => ["Laravel","React","Claude Code"],
            "image" => "work-function.webp",
            "url" => "https://mie-function.com/"
        ],
        [
            "id" => 2,
            "name" => "花屋システム開発",
            "overview" => "花屋さんからの依頼。ユーザーは花束を購⼊後、受取⽇・受取場所を選択し、当⽇ロッカーでQRを読み取ると、商品が⼊った棚の扉が⾃動で開く̶̶という⼀連の流れを実現した。決済には Square を採⽤し、Square から商品情報を取得してユーザーページに表⽰。購⼊から受け取りまでの⼀連のフローを実装。店舗側の管理画⾯では、注⽂⼀覧やLINE通知機能なども実装し、運⽤⾯まで⼀貫して対応した。",
            "background" =>"以前、別プロジェクトで担当させてもらったクライアントからの依頼。前回のプロジェクトで、クライアントの要望をしっかりヒアリングし、デザインから開発まで一貫して担当。頻繁な訪問などし、クライアントの満足度を高め、今回新たに依頼を受けることができた。",
            "language" => ["Laravel","React","Square API"],
            "image" => "work-flower-locker.webp",
            "url" => null
        ],
        [
            "id" => 3,
            "name" => "動画一覧システム開発",
            "overview" => "インタビュー動画⼀覧→YouTube再⽣システムを開発し、フロントエンドを担当。ユーザーは、インタビュー動画の一覧から視聴したい動画を選択し、YouTubeの埋め込みプレーヤーで動画を再生できる。管理画面では、動画の追加・編集・削除が可能で、クライアントが簡単に動画コンテンツを管理できるよう設計",
            "background" =>"愛知県の高校からの依頼。OBやOGのインタビュー動画をまとめて、在校生が見れるようにしたいとのこと。",
            "language" => ["Laravel"],
            "image" => "work-atsuta-hs.webp",
            "url" => "https://atsuta-hs.mie-projectm.com/"
        ],
        [
            "id" => 4,
            "name" => "ホームページ制作",
            "overview" => "大学の教授からの依頼で、研究室のホームページが古くなってきているので、新たに作成したいとのこと。現役大学生にどのようなホームページを求めているかヒアリングしコンテンツを企画。また教授が一番大事にしている『心に響く機械』という言葉をキーワードに、TOPページの画像は機械を機械的に並べて、それぞれの機械にハート（心）を持たせ、心が響いているようなデザインで作成した。※現在も開発中。",
            "background" =>"今回の案件とは別に、以前同じ教授から別のホームページ制作の依頼を受けた。その際に、要望をしっかりヒアリングし、デザインからStudio構築まで一貫して担当。頻繁な訪問などし、教授の満足度を高め、今回新たに依頼を受けることができた。",
            "language" => ["Studio"],
            "image" => "work-mieu.webp",
            "url" => null
        ],
        [
            "id" => 5,
            "name" => "デザイン_チラシ",
            "overview" => "前職の旅行会社で勤務していた時に困っていたことを、現在のWebエンジニアとしてのスキルを活かして解決できないかと考え、企画・デザインしたチラシ。今回のシステムはスマホでも使えるというのが営業職をしていた自分には大きな魅力で、スマホをデザインに全面に出した。実際に本部長まで話が通り、プレゼンを実施。現在も開発中。",
            "background" =>"前職の旅行会社で勤務していた時に困っていたことを、現在のWebエンジニアとしてのスキルを活かして解決できないかと考え、企画・デザインした。",
            "language" => ["Canva"],
            "image" => "work-flyer-3.webp",
            "url" => "https://www.canva.com/design/DAGfgVN0sA4/xyrvBU8xtnuj8H606io9Zw/view?utm_content=DAGfgVN0sA4&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=he46223c782"
        ],
        [
            "id" => 6,
            "name" => "デザイン_チラシ",
            "overview" => "まず電気料金を見直す層は中年代女性が多いと仮説を立て、母親にJAでんきの話をした。するとJAがでんきを扱っていることを知らなかった。そこで、JAはお米だけでなくでんきも扱ってることを前面に出し、目を引くようなデザインにした。",
            "background" =>"JAでんき様より、電気料金見直しの説明会を開催するためのチラシデザインを依頼され作成。",
            "language" => ["Canva"],
            "image" => "work-flyer-2.webp",
            "url" => "https://www.canva.com/design/DAGxo2e94u0/qAXXjglb5Q3Tyds42PgXMw/view?utm_content=DAGxo2e94u0&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h59c6f16591"
        ],
        [
            "id" => 7,
            "name" => "デザイン_チラシ",
            "overview" => "近年合同説明会への需要が低くなってきているため、大学生が『お！なにこれ！』と興味を持ってもらう最初のきっかけとなるようなデザインを意識して作成。おいしい就職情報も得れる、そして美味しい食事や景品もゲットできるようにし、『おいしいシューカツ』という名でブランディングした。",
            "background" =>"大学にて開催される合同説明会のチラシデザインを依頼され作成。",
            "language" => ["Canva"],
            "image" => "work-flyer-1.webp",
            "url" => "https://www.canva.com/design/DAGnZ_rIFKo/J4dgevgdlg-nQZQ4UE_gXw/view?utm_content=DAGnZ_rIFKo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h7ee4eb1dc6"
        ],
        [
            "id" => 8,
            "name" => "デザイン_アイコン",
            "overview" => "就活に勝つという文言からシュークリームにカツを挟んだシューカツをモチーフにデザイン。諸事情で実現しなかったが、実際にシューカツを販売することも検討されていた。",
            "background" =>"上記シューカツのデザインと同時にアイコン画像も依頼があり作成。",
            "language" => ["Canva"],
            "image" => "work-icon-1.webp",
            "url" => "https://www.canva.com/design/DAGnZ_rIFKo/J4dgevgdlg-nQZQ4UE_gXw/view?utm_content=DAGnZ_rIFKo&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h7ee4eb1dc6"
        ],
        [
            "id" => 9,
            "name" => "花の適性診断システム",
            "overview" => "ユーザーがいくつかの質問に答えていくと、性格や好みに合った“ぴったりの花”を診断して提案するWebアプリを開発。
            クライアントは質問や回答内容、診断結果の編集を自由に行えるCMS機能を通じて、専門知識がなくても簡単にコンテンツを更新可能。結果画面に花の画像・説明・関連リンクなどを表示し、購入への導線を設計。",
            "background" =>"事業再構築補助金を活用して新規事業を立ち上げるクライアントの依頼。新規顧客獲得のため、ユーザーに楽しんでもらいながら商品を知ってもらうことを目的に企画・開発。",
            "language" => ["Laravel"],
            "image" => "work-rio-flower.webp",
            "url" => "https://flaver-rio.com/"
        ],
        [
            "id" => 10,
            "name" => "採用サイト",
            "overview" => "企業の採用活動をサポートする特設サイトを開発。テキスト・画像の編集を管理画面からのデータ操作（登録・編集・削除）でノーコードで実現できるよう設計し、顧客自身がコードを書くことなくサイト内容を自由に更新可能な管理画面を実装した。",
            "background" => "採用サイトが古くなってきており更新したい。",
            "language" => ["Laravel","Quill"],
            "image" => "work-kikukawa.webp",
            "url" => "https://kikukawa.jobcruise.jp/"
        ],
    ];

    public function ShowWork()
    {
        $personalWorkData = $this->personalWorkData;
        $businessWorkData = $this->businessWorkData;
        return view('work-page',compact('personalWorkData','businessWorkData'));
    }

}
