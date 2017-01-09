load data local infile '/Users/iguest/BasketBallPlayers/data/StatsCleaned.csv'
into table players
fields terminated by ','
optionally enclosed by '"'
ignore 1 lines;