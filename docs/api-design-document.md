# API設計書 (API Design Document)

## 対象: 記事へのコメント (Comments on Article)

| API ID | 対象画面 | API名 | 概要 | Phase | HTTPメソッド | URL | APIエンドポイント | コントローラー名 |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| API-001 | 記事へのコメント | Comment_Get | コメント一覧取得 | 1 | GET | `http://localhost/api/comments` | `/api/comments` | CommentController |
| API-002 | 記事へのコメント | Comment_Post | コメントを投稿 | 2 | POST | `http://localhost/api/comments` | `/api/comments` | CommentController |
| API-003 | 記事へのコメント | Comment_Put | コメントの更新 | 3 | PUT | `http://localhost/api/comments/{comment}` | `/api/comments/{comment}` | CommentController |
| API-004 | 記事へのコメント | Comment_Delete | コメントの削除 | 4 | DELETE | `http://localhost/api/comments/{comment}` | `/api/comments/{comment}` | CommentController |
