import express from 'express';
import sqlite from 'sqlite3';
import fs from 'fs';
import { parse } from 'json2csv';

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
      res.status(500).json({ error: err.message });
      return;
    }

    const csv = parse(rows);

    const filePath = './users.csv';
    fs.writeFile(filePath, csv, (writeErr) => {
      if (writeErr) {
        res.status(500).json({ error: writeErr.message });
        return;
      }

      res.download(filePath, 'users.csv', (downloadErr) => {
        if (downloadErr) {
          res.status(500).json({ error: downloadErr.message });
        } else {
          fs.unlink(filePath, (unlinkErr) => {
            if (unlinkErr) console.error('Error deleting CSV file:', unlinkErr.message);
          });
        }
      });
    });
  });
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
