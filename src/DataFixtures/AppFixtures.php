<?php

namespace App\DataFixtures;

use App\Entity\Crypto;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
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

            $manager->persist($crypto);
        }

        $manager->flush();
    }
}
