const mysql = require('mysql');

const con = mysql.createConnection({host: 'remotemysql.com', user: 'iGxjWW4tCk', password: 'HJhcXwdGmX', database: 'iGxjWW4tCk'});

const sql = `INSERT INTO Orders (user_id, goods, quantities, amount, payed) VALUES (112113, ${JSON.stringify([1, 2, 3])}, ${JSON.stringify([1, 2, 3])}, 100, 0)`;

if(post)
con.query(sql, (err) => {
    return err;
})