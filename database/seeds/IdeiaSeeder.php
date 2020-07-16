<?php

use App\Ideia;
use Illuminate\Database\Seeder;

class IdeiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ideia::create(['title' => 'Programação', 'category' => 'Estudo', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729007.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.udemy.com/']);
        Ideia::create(['title' => 'Yoga', 'category' => 'Passa Tempo', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729069.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://medium.com/@laralobom/15-coisas-que-voc%C3%AA-precisa-saber-sobre-a-pr%C3%A1tica-do-yoga-250c01f883c0']);
        Ideia::create(['title' => 'Comer', 'category' => 'Alimentação', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729013.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://entretenimento.band.uol.com.br/masterchef/']);
        Ideia::create(['title' => 'Dormir', 'category' => 'Descanso', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729070.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.letras.mus.br/blog/musicas-para-relaxar/']);
        Ideia::create(['title' => 'Pintar', 'category' => 'Passa Tempo', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729038.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://novo.belasartes.br/']);
        Ideia::create(['title' => 'Meditação', 'category' => 'Mentalidade', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729027.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.minhavida.com.br/bem-estar/tudo-sobre/1042-meditacao']);
        Ideia::create(['title' => 'Jogue Video-Jogos', 'category' => 'Diversão', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729021.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://store.steampowered.com/']);
        Ideia::create(['title' => 'Jogue Jogos', 'category' => 'Diversão', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729030.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.jspuzzles.com/indexpt.php']);
        Ideia::create(['title' => 'Assista Televisão', 'category' => 'Lazer', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729042.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.netflix.com/']);
        Ideia::create(['title' => 'Karaoke', 'category' => 'Diversão', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729032.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.spotify.com/']);
        Ideia::create(['title' => 'Converse Virtualmente', 'category' => 'Comunicação', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729034.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://facebook.com/']);
        Ideia::create(['title' => 'Cursos Online', 'category' => 'Estudo', 'image' => 'https://image.flaticon.com/icons/svg/2729/2729036.svg', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'link' => 'https://www.udemy.com/']);
    }
}
