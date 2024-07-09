# Laravel_Pratice_2024
株式会社ドリームキャリア新卒向きLaravel練習用問題集

原リポジトリ: https://github.com/Rio-Yamazakii/Laravel_practice_2024_SP

(アクセス権が必要です。以下の方に聞いてください:
山崎梨央: rio.yamazaki@g.dreamcareer.co.jp)

このリポジトリは、Laravel(+PHP、Javascript、JQuery)を練習したい人のため、こちらが用意する問題集です。

簡単な問題と複雑的な問題がありますが、各問題に回答方向を提示します。是非回答してみてください。

回答が出来たら、今後の開発は上手く行かなくても、複雑的バグ修正または機能実装ではないイシューであれば対応できるでしょう。

分からない場合はこちらに聞いてみてください: 楊 家祺 (ヨウ カキ) k.you@g.dreamcareer.co.jp 

練習用問題のDB定義書1(1問目- 16問目):
https://docs.google.com/spreadsheets/d/1SnmahR-sHjM2f9EfLmkMsH_2QdeH_r-I3tr4wbuMjlI/edit?usp=sharing

練習用問題のDB定義書2(17問目以降):
https://docs.google.com/spreadsheets/d/1Qfl5rbKn6lknWcaquT2lWzBd0TSj86yxr-JyF9ADmbQ/edit?usp=sharing

環境構築手順:
1. リポジトリをクローンします: https://github.com/raymondyeung2022/Laravel_Practice_2024.git
2. SampleApp202406フォルダ内の「.env.example」をコピーしてファイル名を「.env」に変更します(.envが存在しない場合)
3. VSCodeで「SampleApp202406」フォルダでターミナルを起動します
4. ```composer install```を実行します
5. ```php artisan admin:install```を実行します。```already exists. Want to replace```というキーワードが現れたら、全ての問題に「no」で入力します
6. ```php artisan migrate --seed```を実行します。データベース```sample_app_202406```が存在しない場合、問題に「Yes」で入力します
7. ```php artisan key:generate```を実行します。
8. ```php artisan serve```を実行します。コンソールで現れたURLにアクセス出来れば、ページが現れるはずです。

**注意: 以下のSeederクラスは、17問目に合わせるため、コメントアウトしています。必ず17問目を回答してから、コメントアウトを外して導入してください:**
```CategorySeeder::class,
TagSeeder::class,
CustomerSeeder::class,
ProductSeeder::class,
ProductTagSeeder::class,
OrderStatusSeeder::class,
OrderSeeder::class,
OrderProductSeeder::class,
```

URI:
```
問題1: /question1
問題2: /question2
問題3: /question3
問題4: /question4
問題5: /question5
問題6: /question6
問題7: /question7
問題8: /question8
問題9: /question9
問題10: /question10
問題11: /question11
問題12: /question12
問題13: /question13
問題14: /question14
問題15: /question15
問題16: /question16
問題17: /question17
問題18: /question18
問題19: /question19
問題20: /question20
問題21: /question21
問題22: /question22
問題23: /question23
問題24: /question24
問題25: /question25
問題26: /question26
```

**注意: 問題ページにアクセスする時、「Page Not Found」が表示されてしまいましたら、```php artisan optimize```を実行してから再度アクセスしてみてください**

そして問題を回答してみましょう。

回答する前に、作業ブランチの作成お願いします。ブランチ名に特にルールが無いので、何でも大丈夫です。

(なるべく分かりやすいブランチ名でお願いします)

**基本的にファイル内で「TODO」ところが回答する場所です。「TODO」ところがない問題がありますので、よく内容を確認してください**

**更新がある時、mainブランチでプルしてから、自分の作業ブランチにマージしてください: ```main```->```作業ブランチ```**

2024-06-10 18:53更新:
今のところで13問を用意しました。もしかしたら増やすかもしれません。

2024-06-11 15:19更新:
問題14-16を追加しました。

2024-06-12 15:16更新:
問題17-18を追加しました。

2024-06-13 14:08更新:
問題19-20を追加しました。

2024-06-21 12:43更新:
問題21-25を追加しました。

2024-06-28 17:06更新:
問題26を追加し、17問目の内容とDB定義書を修正しました。
