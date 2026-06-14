# Partsone バックエンド研修課題リポジトリ

## 📌 APIドキュメント (Swagger)の確認方法
本課題のAPI設計書はSwaggerを使用して作成しています。
以下の手順でAPI仕様を確認・テストすることができます。

1. プロジェクトのルートディレクトリで以下を実行してキャッシュをクリアしてください:
   `./sail artisan optimize:clear`
2. ブラウザで以下のURLにアクセスしてください:
   `http://localhost:8002/`

*※注: 環境構築時、`.env` ファイルの `OPENAPI_FILE_NAME` が実際の設定ファイル（`api-docs.yml`）と一致しているかご確認ください。*
