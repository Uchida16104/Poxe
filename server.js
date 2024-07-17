import express from 'express';
import sqlite from 'sqlite3';
const sqlite3 = sqlite.verbose();
const app = express();
const port = process.env.PORT || 3000;
const db = new sqlite3.Database('./database.sqlite');
db.serialize(() => {
  db.run("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT)");
  db.run("INSERT INTO users (name) VALUES ('Alice'), ('Bob')");
});
app.get('/', (req, res) => {
  res.send('Hello, World!');
});
app.get('/users', (req, res) => {
  db.all("SELECT * FROM users", [], (err, rows) => {
    if (err) {
      res.status(500).json({error: err.message});
      return;
    }
    res.json({users: rows});
  });
});
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
