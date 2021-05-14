<?php

define("ROOT", "https://localhost/zucdeveloperbase");

define("SITE", "ZucDeveloper");

define("KEY", "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCh8MA5bNbRW73A
leiNyDgJhCgDdaLRvUG0Y+mlOEY5xS/a+0xopzdtqzkMHbfznT6SpSeBAiQEAbhB
lgN5aO7pf0rBW/JI95nyHYHp+EKQyuiv6/gu85F8uotkrKp2OVJAFbrDem44FfKH
aid7fKBQmN8F104Crqk8T+xvHfSgsLXWCYMKbYaLUJ6LBM5aBeSjWdD9tOssbGj7
DjzfMjKPShY7aucj+elRyLNT16niEVsOQoZJuzFcPfdTfqTGkZpdSxuRIZYolmio
0B6WeQi2muG5Ur8ZRDbEnIA+36y/6b7G6pFrEbnKyBy6LscKWxObGXwSxXbCiZPu
DBSZ2/xJAgMBAAECggEAEGyxomFmnE9YvIq3zoGLJXPw9wDcZbdzTY+AqBBAFyXn
x6cLReYH2iiunYr6GExPh2IW0p/b9UgTXxuO+KZq7OXLODdSKJJsW8EgZxGV9seN
uCIPxvtPOz5UWv6kP19q9zL9AUyOl0OqmI9st7qZK/OFUztWHzGF2qckjNSV9iIs
yg7x2jAZTmMuKwOn5k4tFkvY/hdjAlhUYJZ8eCqaEM6+8YZyG3sjbmHmkvsafLoI
BAGMtHUMSa8J4mX+abrNcefphNqzG4XmuqiBTorGmPRK24lkGS5VLlakX8pWqulX
q/kJTUM52iukYOmKXhjx6064gW19L2lohvsPCapfTQKBgQDTjYCqtWAV4rLMKbWK
cvL/v53vrkaCiK8oOHz4Qm1ugkPhVQ+wRlHQ07v1I9RlCjJZVbKvnGH43ydJzKRi
9ORYi5gH4Xm8paMiP1GoQX4fWdUbWTCuCsqo5+UirYOgeJ2shveVaZVOgPrXhRq7
IEul2iu+lx36/HNUh6omblEpTwKBgQDD9tGjo/gB6c0iNhqosbrChGpMEobSj/f/
NomGSp3H9qe0LUiMo3P9eWpVKl0aaGSLGPpquSSozf49AvyUetvaEx7SVmlEOWOS
L3HofAedndOIESurqqtgd5/11YBPZepDQ/c/s4Od4UHAvNeH51BS0qinaLSriNPQ
Y4KM+Otq5wKBgBiBw+4CpObkJCJSkp0/Q7cs03b4kWJ9wwy9vnxj9Zlfrc1ktTSO
cNvoK1XymKA71ilTLCf7zb2u3DZIZqKwC+PWB/6huCCKb6OAAk2jiKDJH07Tvjfr
OB7o/jpOL3lff6SE3hmI6ar2dhiRas9SpnDIHVku2GJC7HlWXfelv/ExAoGAarrN
JyEw/GnIbe+lyWczXqob8t7MS3ZaDcg4Usnk8XnnkPxw3RhRHia4wTXXi4B78j5i
dSntS3sWE0jDJGNdxoJPcSPbJWtUTdRFZ+fVhgTlpuAjNtY3jMzadFwaDCRn2Mb1
rN4quxxqYXz4rm5Pkyxk6vjeHebh5kesXPdd0NUCgYEAmPwF44iAfWMz31wV0WGS
uov8K+ZapP3J2N+V6fsTM2gjTsY/mz1VGyCUbATVrA7K1mWERanWjOTx+0m8uA+j
b832+z5XtroMvyryabgtQba3T95Zanwvhe/R7H5HCEffgSmyP61s6uVcRnb+/Dyg
PuWoR38hllN7IV49XTU+bsI=");

define("DATA_LAYER_CONFIG", [
  "driver" => "mysql",
  "host" => "localhost",
  "port" => "3306",
  "dbname" => "zucdata",
  "username" => "root",
  "passwd" => "",
  "options" => [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);


function url($uri = null):string
{
  if ($uri) {
    return ROOT . "{$uri}";
  }
  return ROOT;
}
