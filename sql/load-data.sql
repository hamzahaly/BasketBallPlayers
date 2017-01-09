load data local infile '/Users/iguest/BasketBallPlayers/data/2015-2016.nba.stats.csv'
into table players
fields terminated by ','
optionally enclosed by '"'
ignore 1 lines;