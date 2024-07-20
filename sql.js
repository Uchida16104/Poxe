alasql("CREATE TABLE cities (city string, pop number)");
alasql("INSERT INTO cities VALUES ('Paris',2249975),('Berlin',3517424),('Madrid',3041579)");
var res = alasql("SELECT * FROM cities WHERE pop < 3500000 ORDER BY pop DESC");
