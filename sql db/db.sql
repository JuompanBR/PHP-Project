-- Providing a 1 - N relationship with partial participation on the 1 side
CREATE TABLE Player (
    p_id VARCHAR(50) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE Bug (
    b_id VARCHAR(50) PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    p_id VARCHAR(50) NOT NULL,
    FOREIGN KEY (p_id) REFERENCES Player(p_id)
);
