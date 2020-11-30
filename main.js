const mariadb = require('mariadb');
const pool = mariadb.createPool({
     host: '127.0.0.1', 
     user:'root', 
     password: 'root'
});

pool.getConnection()
    .then(conn => {
    
      conn.query("SELECT * FROM logs")
        .then((rows) => {
          console.log(rows); //[ {val: 1}, meta: ... ]
        })
        .then((res) => {
          console.log(res); // { affectedRows: 1, insertId: 1, warningStatus: 0 }
          conn.end();
        })
        .catch(err => {
          //handle error
          console.log(err); 
          conn.end();
        })
        
    }).catch(err => {
      //not connected
    });
