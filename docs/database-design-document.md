# データベース設計書 (Database Design Document)

## テーブル定義 (Table Definitions)

### 1. users (ユーザー)
| カラム名 (Column) | データ型 (Type) | 制約 (Constraint) | 説明 (Description) |
| :--- | :--- | :--- | :--- |
| id | bigserial | PRIMARY KEY | ユーザーID |
| name | varchar | | ユーザー名 |
| created_at | timestamp | | 作成日時 |
| updated_at | timestamp | | 更新日時 |

### 2. articles (記事)
| カラム名 (Column) | データ型 (Type) | 制約 (Constraint) | 説明 (Description) |
| :--- | :--- | :--- | :--- |
| id | bigserial | PRIMARY KEY | 記事ID |
| content | text | | 記事の内容 |
| created_at | timestamp | | 作成日時 |
| updated_at | timestamp | | 更新日時 |

### 3. comments (コメント)
| カラム名 (Column) | データ型 (Type) | 制約 (Constraint) | 説明 (Description) |
| :--- | :--- | :--- | :--- |
| id | bigserial | PRIMARY KEY | コメントID |
| article_id | bigint | FOREIGN KEY | 対象の記事ID (`articles.id` に紐付け) |
| user_id | bigint | FOREIGN KEY | 投稿者のユーザーID (`users.id` に紐付け) |
| content | varchar(100) | NOT NULL, CHECK (CHAR_LENGTH(content) >= 10) | コメント内容（10文字〜100文字） |
| rating | int | NULL許容, CHECK (rating >= 1 AND rating <= 5) | 評価スコア（1〜5段階） |
| created_at | timestamp | | 作成日時 |
| updated_at | timestamp | | 更新日時 |

## リレーションシップ (Relationships)
* **User (1) 対 Comment (多):** 1人のユーザーは複数のコメントを投稿できる。
* **Article (1) 対 Comment (多):** 1つの記事には複数のコメントがつく。
* **評価の集計 (Rating Aggregation):** 記事の総合評価は、その記事に紐づくコメント群の `rating` カラムを集計（平均化など）することで算出可能。
