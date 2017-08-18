# geoip2
Full package for GeoIP2-PHP

This library is a wrapper of https://github.com/maxmind/GeoIP2-php which uses to get geo information from IP.
The database file is included. No need to download the database file (http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.tar.gz) and construct the Reader instance with the file path.

```
  use Tuandm\Database\Reader;
  
  include_once "vendor/autoload.php";
  
  $reader = new Reader();
  // Or construct with mmdb file
  // $reader = new Reader('/path/to/mmdb_file');
  $record = $reader->city('52.192.103.163');

  echo $record->city->name; // Tokyo
```
