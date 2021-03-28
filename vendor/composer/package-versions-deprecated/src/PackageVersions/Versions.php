<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.5.7@37b5edf50cc05299b12cb8982be3efa035d726ce',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.1@9e07bb1ff35d35d9ec4597b79e5d05502d7d4d43',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'laminas/laminas-code' => '3.5.0@cb90ef428da9260c2deaa827b037c20695f968ae',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/jwt' => '3.3.3@c1123697f6a2ec29162b82f170dd4a491f524773',
  'lexik/jwt-authentication-bundle' => 'v2.9.0@2c3448975c5560f4a29ac6f3bfc1fb24673609c0',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.1.0@be4d5824caebc86da9e224e935e02e1201b3ea54',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'ocramius/proxy-manager' => '2.10.0@f65ae0f9dcbdd9d6ad3abb721a9e09c3d7d868a4',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'symfony/asset' => 'v5.1.8@19c59713f750642206b21a1edec5c18dea80f979',
  'symfony/cache' => 'v5.1.8@d7bc33e9f9028f49f87057e7944c076d9593f046',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.8@11baeefa4c179d6908655a7b6be728f62367c193',
  'symfony/console' => 'v5.1.8@e0b2c29c0fa6a69089209bbe8fcff4df2a313d0e',
  'symfony/dependency-injection' => 'v5.1.8@829ca6bceaf68036a123a13a979f3c89289eae78',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.8@d01f0ec8b1225bd955d079f007c25191d93867d0',
  'symfony/dotenv' => 'v5.1.8@29ac2a3e538da61780a769827c716738ce7accbb',
  'symfony/error-handler' => 'v5.1.8@a154f2b12fd1ec708559ba73ed58bd1304e55718',
  'symfony/event-dispatcher' => 'v5.1.8@26f4edae48c913fc183a3da0553fe63bdfbd361a',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.1.8@2c3f5e7cf4495d9033cc2d212da6ccde0d22b067',
  'symfony/filesystem' => 'v5.1.8@df08650ea7aee2d925380069c131a66124d79177',
  'symfony/finder' => 'v5.1.8@e70eb5a69c2ff61ea135a13d2266e8914a67b3a0',
  'symfony/flex' => 'v1.10.0@e38520236bdc911c2f219634b485bc328746e980',
  'symfony/framework-bundle' => 'v5.1.8@b5f961afc6cd1923c49cac0993c65bf5eee27d86',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v5.1.8@a2860ec970404b0233ab1e59e0568d3277d32b6f',
  'symfony/http-kernel' => 'v5.1.8@a13b3c4d994a4fd051f4c6800c5e33c9508091dd',
  'symfony/maker-bundle' => 'v1.23.0@ffaee624a20a462ec2da82942d3c9d8fc8dd1421',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v5.1.8@5d77df9a88600797d02c7937c153965ba3537933',
  'symfony/property-info' => 'v5.1.8@fc15c51f829887b62a94a917ba793f51e80ea3e1',
  'symfony/routing' => 'v5.1.8@d6ceee2a37b61b41079005207bf37746d1bfe71f',
  'symfony/security-bundle' => 'v5.1.8@8921cdb1057f615b8340a352195f4a684c876893',
  'symfony/security-core' => 'v5.1.8@13f97112f3a7f7877460777602d4d1e7a21a5f39',
  'symfony/security-csrf' => 'v5.1.8@6d8ea23a4f0b88a13c254d007f3d814ed882f42a',
  'symfony/security-guard' => 'v5.1.8@076e2af7e61723ff50b281806b4d0f5e4df4e6b3',
  'symfony/security-http' => 'v5.1.8@01fc5b3a641ea851624555793c19e6cec11b596f',
  'symfony/serializer' => 'v5.1.8@20d3c6c58c41344a427488c0d2902bfbfbe17ddb',
  'symfony/serializer-pack' => 'v1.0.4@61173947057d5e1bf1c79e2a6ab6a8430be0602e',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.8@3d9f57c89011f0266e6b1d469e5c0110513859d5',
  'symfony/string' => 'v5.1.8@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v5.1.8@874735a8c97963af2009e0eaee55b17fc0846db2',
  'symfony/twig-bundle' => 'v5.1.8@370bb30a9e8dc2b0c29791eec300b0b529bd783f',
  'symfony/validator' => 'v5.1.8@360acadab7edcdca9005c4ad3b535f9c20db62fb',
  'symfony/var-dumper' => 'v5.1.8@4e13f3fcefb1fcaaa5efb5403581406f4e840b9a',
  'symfony/var-exporter' => 'v5.1.8@b4048bfc6248413592462c029381bdb2f7b6525f',
  'symfony/web-link' => 'v5.1.8@e805314ad8c4298d9bfc75335e35f83d6db2f43f',
  'symfony/yaml' => 'v5.1.8@f284e032c3cefefb9943792132251b79a6127ca6',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'doctrine/data-fixtures' => '1.4.4@16a03fadb5473f49aad70384002dfd5012fe680e',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
