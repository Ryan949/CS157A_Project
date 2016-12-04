The website is functional only after running CreateDB.php followed by InsertIntoDB.php (both found in ./src/config). The
files were kept separate because they both delete / drop any respective pre-existing information (Dropping the database
and delete from all the tables respectively).

Output on the webpage is rendered at the bottom of the page and all queries automatically jump down there.