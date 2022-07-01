-- This file contains the SQL commands for the U-22 project.

-- users
CREATE TABLE `users` (
    id            INT     (4)   NOT NULL AUTO_INCREMENT,   -- PK    NN AI
    username      VARCHAR (255) NOT NULL,                  --       NN
    password      VARCHAR (255) NOT NULL,                  --       NN
    email         VARCHAR (255) NULL,                      --
    theme         CHAR    (6)   DEFAULT "1a1a1a" NOT NULL, --       NN
    genders_id    INT     (1)   NOT NULL,                  --    FK NN
    PRIMARY KEY (id)
    FOREIGN KEY (genders_id) REFERENCES genders(id)
)

-- genders
CREATE TABLE `genders` (
    id            INT     (1)   NOT NULL,                  -- PK
    name          VARCHAR (15)  NOT NULL,
    PRIMARY KEY (id)
)

-- questions
CREATE TABLE `questions` (
    id            INT     (4)   NOT NULL AUTO_INCREMENT,   -- PK    NN AI
    description   VARCHAR (255) NOT NULL,                  --       NN
    weight        INT     (2)   NOT NULL,                  --       NN
    PRIMARY KEY (id)
)

-- CREATE TABLE `choices` (
--     questions_id  INT     (4)   NOT NULL,
--     choise_one    String  (255) NOT NULL,
--     choise_two    String  (255) NOT NULL,
--     choise_three  String  (255) NOT NULL,
--     choise_four   String  (255) NOT NULL,
--     choise_five   String  (255) NOT NULL,
--     FOREIGN KEY (questions_id) REFERENCES questions(id)
-- )

CREATE TABLE `users_answers_questions` (
    id            INT     (6)   NOT NULL AUTO_INCREMENT,   -- PK    NN
    users_id      INT     (4)   NOT NULL,                  --    FK NN
    questions_id  INT     (4)   NOT NULL,                  --    FK NN
    answerdate    DATE    (6)   NOT NULL,                  --       NN
    choice        int     (1)   NOT NULL, 
    PRIMARY KEY (users_id, questions_id),
    FOREIGN KEY (users_id)     REFERENCES users(id),
    FOREIGN KEY (questions_id) REFERENCES questions(id)
)

-- secret questions
CREATE TABLE `secrets` (
    id            INT     (4)   NOT NULL AUTO_INCREMENT,   -- PK    NN AI
    description   VARCHAR (255) NOT NULL,                  --       NN
    PRIMARY KEY (id)
)

CREATE TABLE `secrets_users` (
    secrets_id    INT     (4)   NOT NULL,                  -- PK FK NN
    users_id      INT     (4)   NOT NULL,                  -- PK FK NN
    answer        VARCHAR (255) NOT NULL,                  --       NN
    PRIMARY KEY (users_id, secrets_id),
    FOREIGN KEY (users_id)     REFERENCES users(id),
    FOREIGN KEY (secrets_id)   REFERENCES secrets(id)
)

-- pet
CREATE TABLE `animals` (
    id            INT     (4)   NOT NULL,                  -- PK    NN
    name          VARCHAR (255) NOT NULL,                  --       NN
    PRIMARY KEY (id)
)

CREATE TABLE `animals_users` (
    animals_id    INT     (4)   NOT NULL,                  -- PK FK NN
    users_id      INT     (4)   NOT NULL,                  -- PK FK NN
    name          VARCHAR (255) NOT NULL,                  --       NN
    PRIMARY KEY (users_id, animals_id),
    FOREIGN KEY (users_id)     REFERENCES users(id),
    FOREIGN KEY (animals_id)   REFERENCES animals(id)
)

-- status

CREATE TABLE `status` (
    id            INT     (4)   NOT NULL,
    currentstatus INT     (4)   NOT NULL
)

CREATE TABLE `status_users` (
    status_id     INT     (4)   NOT NULL,
    users_id      INT     (4)   NOT NULL,
    PRIMARY KEY (status_id, users_id),
    FOREIGN KEY (status_id) REFERENCES status(id),
    FOREIGN KEY (users_id)  REFERENCES users(id)
)
