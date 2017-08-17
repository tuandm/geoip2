<?php
namespace Tuandm\Database;

/**
 * Instances of this class provide a reader for the GeoIP2 database format.
 * IP addresses can be looked up using the database specific methods.
 *
 * ## Usage ##
 *
 * The basic API for this class is the same for every database. First, you
 * create a reader object, specifying a file name. You then call the method
 * corresponding to the specific database, passing it the IP address you want
 * to look up.
 *
 * If the request succeeds, the method call will return a model class for
 * the method you called. This model in turn contains multiple record classes,
 * each of which represents part of the data returned by the database. If
 * the database does not contain the requested information, the attributes
 * on the record class will have a `null` value.
 *
 * If the address is not in the database, an
 * {@link \GeoIp2\Exception\AddressNotFoundException} exception will be
 * thrown. If an invalid IP address is passed to one of the methods, a
 * SPL {@link \InvalidArgumentException} will be thrown. If the database is
 * corrupt or invalid, a {@link \MaxMind\Db\Reader\InvalidDatabaseException}
 * will be thrown.
 */
class Reader extends \GeoIp2\Database\Reader
{
    /**
     * Reader constructor.
     * @param null $filename
     * @param array $locales
     */
    public function __construct($filename = null, array $locales = ['en'])
    {
        if ($filename === null) {
            $filename = dirname(__FILE__) . '/../../resources/GeoLite2-City.mmdb';
        }

        parent::__construct($filename, $locales);
    }
}
