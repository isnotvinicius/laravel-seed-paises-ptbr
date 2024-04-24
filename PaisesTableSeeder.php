<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PaisesTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('paises')->truncate();
        Schema::enableForeignKeyConstraints();
      
        $paises = [
            ['nome' => 'Afeganistão', 'sigla' => 'AFG'],
            ['nome' => 'Albânia', 'sigla' => 'ALB'],
            ['nome' => 'Alemanha', 'sigla' => 'DEU'],
            ['nome' => 'Andorra', 'sigla' => 'AND'],
            ['nome' => 'Angola', 'sigla' => 'AGO'],
            ['nome' => 'Antígua e Barbuda', 'sigla' => 'ATG'],
            ['nome' => 'Arábia Saudita', 'sigla' => 'SAU'],
            ['nome' => 'Argélia', 'sigla' => 'DZA'],
            ['nome' => 'Argentina', 'sigla' => 'ARG'],
            ['nome' => 'Armênia', 'sigla' => 'ARM'],
            ['nome' => 'Austrália', 'sigla' => 'AUS'],
            ['nome' => 'Áustria', 'sigla' => 'AUT'],
            ['nome' => 'Azerbaijão', 'sigla' => 'AZE'],
            ['nome' => 'Bahamas', 'sigla' => 'BHS'],
            ['nome' => 'Bangladexe', 'sigla' => 'BGD'],
            ['nome' => 'Barbados', 'sigla' => 'BRB'],
            ['nome' => 'Barém', 'sigla' => 'BHR'],
            ['nome' => 'Bélgica', 'sigla' => 'BEL'],
            ['nome' => 'Belize', 'sigla' => 'BLZ'],
            ['nome' => 'Benim', 'sigla' => 'BEN'],
            ['nome' => 'Bielorrússia', 'sigla' => 'BLR'],
            ['nome' => 'Bolívia', 'sigla' => 'BOL'],
            ['nome' => 'Bósnia e Herzegovina', 'sigla' => 'BIH'],
            ['nome' => 'Botsuana', 'sigla' => 'BWA'],
            ['nome' => 'Brasil', 'sigla' => 'BRA'],
            ['nome' => 'Brunei', 'sigla' => 'BRN'],
            ['nome' => 'Bulgária', 'sigla' => 'BGR'],
            ['nome' => 'Burquina Faso', 'sigla' => 'BFA'],
            ['nome' => 'Burúndi', 'sigla' => 'BDI'],
            ['nome' => 'Butão', 'sigla' => 'BTN'],
            ['nome' => 'Cabo Verde', 'sigla' => 'CPV'],
            ['nome' => 'Camarões', 'sigla' => 'CMR'],
            ['nome' => 'Camboja', 'sigla' => 'KHM'],
            ['nome' => 'Canadá', 'sigla' => 'CAN'],
            ['nome' => 'Catar', 'sigla' => 'QAT'],
            ['nome' => 'Cazaquistão', 'sigla' => 'KAZ'],
            ['nome' => 'Chade', 'sigla' => 'TCD'],
            ['nome' => 'Chile', 'sigla' => 'CHL'],
            ['nome' => 'China', 'sigla' => 'CHN'],
            ['nome' => 'Chipre', 'sigla' => 'CYP'],
            ['nome' => 'Cingapura', 'sigla' => 'SGP'],
            ['nome' => 'Colômbia', 'sigla' => 'COL'],
            ['nome' => 'Comores', 'sigla' => 'COM'],
            ['nome' => 'Congo', 'sigla' => 'COG'],
            ['nome' => 'Coreia do Norte', 'sigla' => 'PRK'],
            ['nome' => 'Coreia do Sul', 'sigla' => 'KOR'],
            ['nome' => 'Costa do Marfim', 'sigla' => 'CIV'],
            ['nome' => 'Costa Rica', 'sigla' => 'CRI'],
            ['nome' => 'Croácia', 'sigla' => 'HRV'],
            ['nome' => 'Cuba', 'sigla' => 'CUB'],
            ['nome' => 'Dinamarca', 'sigla' => 'DNK'],
            ['nome' => 'Djibuti', 'sigla' => 'DJI'],
            ['nome' => 'Dominica', 'sigla' => 'DMA'],
            ['nome' => 'Egito', 'sigla' => 'EGY'],
            ['nome' => 'El Salvador', 'sigla' => 'SLV'],
            ['nome' => 'Emirados Árabes Unidos', 'sigla' => 'ARE'],
            ['nome' => 'Equador', 'sigla' => 'ECU'],
            ['nome' => 'Eritreia', 'sigla' => 'ERI'],
            ['nome' => 'Eslováquia', 'sigla' => 'SVK'],
            ['nome' => 'Eslovênia', 'sigla' => 'SVN'],
            ['nome' => 'Espanha', 'sigla' => 'ESP'],
            ['nome' => 'Estados Unidos', 'sigla' => 'USA'],
            ['nome' => 'Estônia', 'sigla' => 'EST'],
            ['nome' => 'Etiópia', 'sigla' => 'ETH'],
            ['nome' => 'Fiji', 'sigla' => 'FJI'],
            ['nome' => 'Filipinas', 'sigla' => 'PHL'],
            ['nome' => 'Finlândia', 'sigla' => 'FIN'],
            ['nome' => 'França', 'sigla' => 'FRA'],
            ['nome' => 'Gabão', 'sigla' => 'GAB'],
            ['nome' => 'Gâmbia', 'sigla' => 'GMB'],
            ['nome' => 'Gana', 'sigla' => 'GHA'],
            ['nome' => 'Geórgia', 'sigla' => 'GEO'],
            ['nome' => 'Granada', 'sigla' => 'GRD'],
            ['nome' => 'Grécia', 'sigla' => 'GRC'],
            ['nome' => 'Guatemala', 'sigla' => 'GTM'],
            ['nome' => 'Guiana', 'sigla' => 'GUY'],
            ['nome' => 'Guiné', 'sigla' => 'GIN'],
            ['nome' => 'Guiné Equatorial', 'sigla' => 'GNQ'],
            ['nome' => 'Guiné Bissau', 'sigla' => 'GNB'],
            ['nome' => 'Haiti', 'sigla' => 'HTI'],
            ['nome' => 'Holanda', 'sigla' => 'NLD'],
            ['nome' => 'Honduras', 'sigla' => 'HND'],
            ['nome' => 'Hungria', 'sigla' => 'HUN'],
            ['nome' => 'Iémen', 'sigla' => 'YEM'],
            ['nome' => 'Ilhas Cook', 'sigla' => 'COK'],
            ['nome' => 'Ilhas Marshall', 'sigla' => 'MHL'],
            ['nome' => 'Ilhas Salomão', 'sigla' => 'SLB'],
            ['nome' => 'Índia', 'sigla' => 'IND'],
            ['nome' => 'Indonésia', 'sigla' => 'IDN'],
            ['nome' => 'Irã', 'sigla' => 'IRN'],
            ['nome' => 'Iraque', 'sigla' => 'IRQ'],
            ['nome' => 'Irlanda', 'sigla' => 'IRL'],
            ['nome' => 'Islândia', 'sigla' => 'ISL'],
            ['nome' => 'Israel', 'sigla' => 'ISR'],
            ['nome' => 'Itália', 'sigla' => 'ITA'],
            ['nome' => 'Jamaica', 'sigla' => 'JAM'],
            ['nome' => 'Japão', 'sigla' => 'JPN'],
            ['nome' => 'Jordânia', 'sigla' => 'JOR'],
            ['nome' => 'Kosovo', 'sigla' => 'XKX'],
            ['nome' => 'Kuwait', 'sigla' => 'KWT'],
            ['nome' => 'Laos', 'sigla' => 'LAO'],
            ['nome' => 'Lesoto', 'sigla' => 'LSO'],
            ['nome' => 'Letônia', 'sigla' => 'LVA'],
            ['nome' => 'Líbano', 'sigla' => 'LBN'],
            ['nome' => 'Libéria', 'sigla' => 'LBR'],
            ['nome' => 'Líbia', 'sigla' => 'LBY'],
            ['nome' => 'Liechtenstein', 'sigla' => 'LIE'],
            ['nome' => 'Lituânia', 'sigla' => 'LTU'],
            ['nome' => 'Luxemburgo', 'sigla' => 'LUX'],
            ['nome' => 'Macedônia do Norte', 'sigla' => 'MKD'],
            ['nome' => 'Madagascar', 'sigla' => 'MDG'],
            ['nome' => 'Malásia', 'sigla' => 'MYS'],
            ['nome' => 'Malaui', 'sigla' => 'MWI'],
            ['nome' => 'Maldivas', 'sigla' => 'MDV'],
            ['nome' => 'Mali', 'sigla' => 'MLI'],
            ['nome' => 'Malta', 'sigla' => 'MLT'],
            ['nome' => 'Marrocos', 'sigla' => 'MAR'],
            ['nome' => 'Maurício', 'sigla' => 'MUS'],
            ['nome' => 'Mauritânia', 'sigla' => 'MRT'],
            ['nome' => 'México', 'sigla' => 'MEX'],
            ['nome' => 'Mianmar', 'sigla' => 'MMR'],
            ['nome' => 'Micronésia', 'sigla' => 'FSM'],
            ['nome' => 'Moçambique', 'sigla' => 'MOZ'],
            ['nome' => 'Moldávia', 'sigla' => 'MDA'],
            ['nome' => 'Mônaco', 'sigla' => 'MCO'],
            ['nome' => 'Mongólia', 'sigla' => 'MNG'],
            ['nome' => 'Montenegro', 'sigla' => 'MNE'],
            ['nome' => 'Namíbia', 'sigla' => 'NAM'],
            ['nome' => 'Nauru', 'sigla' => 'NRU'],
            ['nome' => 'Nepal', 'sigla' => 'NPL'],
            ['nome' => 'Nicarágua', 'sigla' => 'NIC'],
            ['nome' => 'Níger', 'sigla' => 'NER'],
            ['nome' => 'Nigéria', 'sigla' => 'NGA'],
            ['nome' => 'Niue', 'sigla' => 'NIU'],
            ['nome' => 'Noruega', 'sigla' => 'NOR'],
            ['nome' => 'Nova Zelândia', 'sigla' => 'NZL'],
            ['nome' => 'Omã', 'sigla' => 'OMN'],
            ['nome' => 'Palau', 'sigla' => 'PLW'],
            ['nome' => 'Palestina', 'sigla' => 'PSE'],
            ['nome' => 'Panamá', 'sigla' => 'PAN'],
            ['nome' => 'Papua Nova Guiné', 'sigla' => 'PNG'],
            ['nome' => 'Paquistão', 'sigla' => 'PAK'],
            ['nome' => 'Paraguai', 'sigla' => 'PRY'],
            ['nome' => 'Peru', 'sigla' => 'PER'],
            ['nome' => 'Polônia', 'sigla' => 'POL'],
            ['nome' => 'Portugal', 'sigla' => 'PRT'],
            ['nome' => 'Quênia', 'sigla' => 'KEN'],
            ['nome' => 'Quirguistão', 'sigla' => 'KGZ'],
            ['nome' => 'Reino Unido', 'sigla' => 'GBR'],
            ['nome' => 'República Centro Africana', 'sigla' => 'CAF'],
            ['nome' => 'República Democrática do Congo', 'sigla' => 'COD'],
            ['nome' => 'República Dominicana', 'sigla' => 'DOM'],
            ['nome' => 'República Tcheca', 'sigla' => 'CZE'],
            ['nome' => 'Romênia', 'sigla' => 'ROU'],
            ['nome' => 'Ruanda', 'sigla' => 'RWA'],
            ['nome' => 'Rússia', 'sigla' => 'RUS'],
            ['nome' => 'Samoa', 'sigla' => 'WSM'],
            ['nome' => 'San Marino', 'sigla' => 'SMR'],
            ['nome' => 'Santa Lúcia', 'sigla' => 'LCA'],
            ['nome' => 'São Cristóvão e Nevis', 'sigla' => 'KNA'],
            ['nome' => 'São Tomé e Príncipe', 'sigla' => 'STP'],
            ['nome' => 'São Vicente e Granadinas', 'sigla' => 'VCT'],
            ['nome' => 'Seicheles', 'sigla' => 'SYC'],
            ['nome' => 'Senegal', 'sigla' => 'SEN'],
            ['nome' => 'Serra Leoa', 'sigla' => 'SLE'],
            ['nome' => 'Sérvia', 'sigla' => 'SRB'],
            ['nome' => 'Síria', 'sigla' => 'SYR'],
            ['nome' => 'Somália', 'sigla' => 'SOM'],
            ['nome' => 'Sri Lanka', 'sigla' => 'LKA'],
            ['nome' => 'Suazilândia', 'sigla' => 'SWZ'],
            ['nome' => 'Sudão', 'sigla' => 'SDN'],
            ['nome' => 'Sudão do Sul', 'sigla' => 'SSD'],
            ['nome' => 'Suécia', 'sigla' => 'SWE'],
            ['nome' => 'Suíça', 'sigla' => 'CHE'],
            ['nome' => 'Surinome', 'sigla' => 'SUR'],
            ['nome' => 'Tailândia', 'sigla' => 'THA'],
            ['nome' => 'Taiwan', 'sigla' => 'TWN'],
            ['nome' => 'Tajiquistão', 'sigla' => 'TJK'],
            ['nome' => 'Tanzânia', 'sigla' => 'TZA'],
            ['nome' => 'Timor Leste', 'sigla' => 'TLS'],
            ['nome' => 'Togo', 'sigla' => 'TGO'],
            ['nome' => 'Tonga', 'sigla' => 'TON'],
            ['nome' => 'Trinidad e Tobago', 'sigla' => 'TTO'],
            ['nome' => 'Tunísia', 'sigla' => 'TUN'],
            ['nome' => 'Turcomenistão', 'sigla' => 'TKM'],
            ['nome' => 'Turquia', 'sigla' => 'TUR'],
            ['nome' => 'Tuvalu', 'sigla' => 'TUV'],
            ['nome' => 'Ucrânia', 'sigla' => 'UKR'],
            ['nome' => 'Uganda', 'sigla' => 'UGA'],
            ['nome' => 'Uruguai', 'sigla' => 'URY'],
            ['nome' => 'Uzbequistão', 'sigla' => 'UZB'],
            ['nome' => 'Vanuatu', 'sigla' => 'VUT'],
            ['nome' => 'Vaticano', 'sigla' => 'VAT'],
            ['nome' => 'Venezuela', 'sigla' => 'VEN'],
            ['nome' => 'Vietnã', 'sigla' => 'VNM'],
            ['nome' => 'Zâmbia', 'sigla' => 'ZMB'],
            ['nome' => 'Zimbábue', 'sigla' => 'ZWE']
        ];
  
        DB::table('paises')->insert($paises);
    }
} 
