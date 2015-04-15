create table if not exists `tasks` (
  `id`              int auto_increment primary key,
  `name`            varchar(255) not null,
  `created_at`      datetime,
  `updated_at`      datetime
) engine=InnoDB default charset=utf8mb4;
