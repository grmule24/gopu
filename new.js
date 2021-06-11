const http = require('http');

const hostname = 'DESKTOP-PVK20CS',
    port = 3000;

http.createServer((req, res) => {

    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/html');

    res.end("<body><form><input type='text' name='text'><br><input type='submit' onclick = 'add_data()' ></form></body><script>function add_data(){alert('success...!');}</script >");



}).listen(port)


database(sql = "show databases")


function database(sql) {

    var mysql = require('mysql');

    var con = mysql.createConnection({ hostname, user: 'root', pass: '' });

    con.connect((err) => {
        if (err) throw err;
        console.log('Connected...!');
        con.query(sql, (err, result) => {

            if (err) throw err;

            console.log(result);

        });
    });

}