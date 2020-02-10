<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Products([
            'imagePath'=> 'https://images.timberland.com/is/image/TimberlandEU/A1K3Z662-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR2Ig6WhURGgz5DNOSRc7556P-MKlRwXbUtx1cdSBbY16AbScBtU7acpYcs',
            'title'=> 'BOTA PREMIUM 6 INCH PARA HOMEM EM AMARELO',
            'description'=> 'Botas Timberland para homem, prefeitas para não molhar os pés no Inverno',
            'price'=> 80,
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath'=> 'https://images.timberland.com/is/image/TimberlandEU/A1RBJ015-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR0MzUJ4yQ2_P-e5R0ptR-GLoEsizswmE93fmEWcyu0VYOXJB4apynDbNnQ',
            'title'=> 'CHELSEA LONDON SQUARE PARA MULHER EM PRETO',
            'description'=> 'Para mulheres que querem sentir o mesmo que os homens e ter os pés bem seguros',
            'price'=> 65,
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath'=> 'https://images.timberland.com/is/image/TimberlandEU/8329R231-hero?%24PDP-FULL-IMAGE%24&fbclid=IwAR0HjQAUEKNbKbK2fTTD8vEi98xcjE_6BqHCfEm_C1OhjeCOzFrQM1TEVX4s',
            'title'=> 'BOTA AUTHENTICS TEDDY FLEECE PARA MULHER EM AMARELO',
            'description'=> 'Botas mais curtas mas com o mesmo conforto',
            'price'=> 45,
        ]);
        $product->save();

        //2nd row

        $product = new \App\Products([
            'imagePath'=> 'https://www.sportzone.pt/i/49b0633676e1adf3e1489108a03b27469b5a0c16.jpg?fbclid=IwAR1QJvexunSXfjvls1-GEPuA-fzc_VMcndsB4cFza4lsLtoTL0k9eX-sJVw',
            'title'=> 'NIKE REVOLUT 4 ',
            'description'=> 'Sapatilha de ginásio ou outdoors',
            'price'=> 75,
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath'=> 'https://www.sportzone.pt/i/dfcd585466749f87f8b2126cd948c333a9eebc87.jpg?fbclid=IwAR0fSHMs_lE4b2A-dIiyX8ZlU36gulinBhAq4EbIXJfB5lzoeoWYwKG1jcs',
            'title'=> 'PUMA NRGY COMET',
            'description'=> 'Sapatilhas PUMA para atletas de corrida',
            'price'=> 50,
        ]);
        $product->save();

        $product = new \App\Products([
            'imagePath'=> 'https://www.sportzone.pt/i/16cd92f423d50febb74f7956696b3bad252ed716.jpg?fbclid=IwAR2RLAW-VB6L1MqBi7nmPF9Ov-gpSfnuM8sfLG2ltO_nZp8WdzqZtAER5SA',
            'title'=> 'NIKE DOWNSHIFTER 8',
            'description'=> 'Sapatilhas de alta categoria, perfeitas para caminhadas',
            'price'=> 60,
        ]);
        $product->save();
    }

}
