<?php

namespace App\DataFixtures;

use App\Entity\Cotation;
use App\Entity\Crypto;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**
         * Renvoie la valeur de mise sur le marché de la crypto monnaie
         * @param $cryptoname {string} Le nom de la crypto monnaie
         */
        function getFirstCotation($cryptoname)
        {
            return ord(substr($cryptoname, 0, 1)) + rand(0, 10);
        }

        /**
         * Renvoie la variation de cotation de la crypto monnaie sur un jour
         * @param $cryptoname {string} Le nom de la crypto monnaie
         */
        function getCotationFor($cryptoname)
        {
            return ((rand(0, 99) > 40) ? 1 : -1) * ((rand(0, 99) > 49) ? ord(substr($cryptoname, 0, 1)) : ord(substr($cryptoname, -1))) * (rand(1, 10) * .01);
        }

        for ($i = 0; $i < 10; $i++) {
            $crypto = new Crypto();
            $cryptoName = array(
                'BitCoin',
                'Ethereum',
                'Ripple',
                'Bitcoin Cash',
                'Cardano',
                'litecoin',
                'NEM',
                'Stellar',
                'IOTA',
                'Dash',
            );
            $crypto->setName($cryptoName[$i]);
            $cryptoLogo = array(
                'bitcoin.png',
                'ethereum.png',
                'ripple.png',
                'bitcoin-cash.png',
                'cardano.png',
                'litecoin.png',
                'nem.png',
                'stellar.png',
                'iota.png',
                'dash.png',
            );
            $crypto->setLogo($cryptoLogo[$i]);
            $cryptoSigle = array(
                'BTC',
                'ETH',
                'XRP',
                'BT',
                'ADA',
                'LTC',
                'NEM',
                'XLM',
                'IOT',
                'DAS',
            );
            $crypto->setSigle($cryptoSigle[$i]);

            $cotation = new Cotation();
            $cotation->setValeur(getFirstCotation($cryptoName[$i]));
            $cotation->setEvolution(getCotationFor($cryptoName[$i]));
            $cotation->setCours(0);
            $cotation->setDate(new \DateTime('06/04/2014'));
            $cotation->setCrypto(null);

            $manager->persist($crypto);
            $manager->persist($cotation);
        }

        $manager->flush();
    }
}
