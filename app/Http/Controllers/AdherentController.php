<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdherentController extends Controller
{
    private function randomDate()
    {
        $timestamp = rand( strtotime("Jan 01 2020"), strtotime("May 01 2023") );
        $random_Date = date("d.m.Y", $timestamp );
        return $random_Date;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activities=[
            ['intitule'=>'Ajout d\'un adhérent','date'=>$this->randomDate(),'description'=>'0769097991'],
            ['intitule'=>'Suppression d\'un adhérent','date'=>$this->randomDate(),'description'=>'Manque d\'activité'],
            ['intitule'=>'Paiement','date'=>$this->randomDate(),'description'=>'Enregistrement d\'un paiement Pour la formation'],
            ['intitule'=>'Mise à jour d\'un adherent','date'=>$this->randomDate(),'description'=>'Changement de son adresse'],
            ['intitule'=>'Formation','date'=> $this->randomDate(),'description'=>'Inscription à une formation'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'Enregistrement d\'un enfant'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'MAJ des information d\'un enfant'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'Enregistrement d\'un enfant'],
            ['intitule'=>'Adhérent','date'=>$this->randomDate(),'description'=>'MAJ des information d\'un enfant']
        ];
        $adherents = DB::table('adherent')->get();
        //$adherents=Adherent::all();
        return view('adherent.index',['activities'=>$activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(){
        $countries = DB::table('country')->get();
        /*$countries = array(
            array('value'=>'AFG','label'=>'Afghanistan'),
            array('value'=>'ALB','label'=>'Albanie'),
            array('value'=>'DZA','label'=>'Algérie'),
            array('value'=>'DEU','label'=>'Allemagne'),
            array('value'=>'AND','label'=>'Andorre'),
            array('value'=>'AGO','label'=>'Angola'),
            array('value'=>'ATG','label'=>'Antigua-et-Barbuda'),
            array('value'=>'SAU','label'=>'Arabie saoudite'),
            array('value'=>'ARG','label'=>'Argentine'),
            array('value'=>'ARM','label'=>'Arménie'),
            array('value'=>'AUS','label'=>'Australie'),
            array('value'=>'AUT','label'=>'Autriche'),
            array('value'=>'AZE','label'=>'Azerbaïdjan'),
            array('value'=>'BHS','label'=>'Bahamas'),
            array('value'=>'BHR','label'=>'Bahreïn'),
            array('value'=>'BGD','label'=>'Bangladesh'),
            array('value'=>'BRB','label'=>'Barbade'),
            array('value'=>'BLR','label'=>'Bélarus'),
            array('value'=>'BEL','label'=>'Belgique'),
            array('value'=>'BLZ','label'=>'Belize'),
            array('value'=>'BEN','label'=>'Bénin'),
            array('value'=>'BTN','label'=>'Bhoutan'),
            array('value'=>'BOL','label'=>'Bolivie'),
            array('value'=>'BIH','label'=>'Bosnie-Herzégovine'),
            array('value'=>'BWA','label'=>'Botswana'),
            array('value'=>'BRA','label'=>'Brésil'),
            array('value'=>'GBR','label'=>'Royaume-Uni'),
            array('value'=>'BRN','label'=>'Brunéi Darussalam'),
            array('value'=>'BGR','label'=>'Bulgarie'),
            array('value'=>'BFA','label'=>'Burkina Faso'),
            array('value'=>'BDI','label'=>'Burundi'),
            array('value'=>'KHM','label'=>'Cambodge'),
            array('value'=>'CMR','label'=>'Cameroun'),
            array('value'=>'CAN','label'=>'Canada'),
            array('value'=>'CPV','label'=>'Cabo Verde'),
            array('value'=>'CAF','label'=>'République centrafricaine'),
            array('value'=>'CHL','label'=>'Chili'),
            array('value'=>'CHN','label'=>'Chine'),
            array('value'=>'CYP','label'=>'Chypre'),
            array('value'=>'COL','label'=>'Colombie'),
            array('value'=>'COM','label'=>'Comores'),
            array('value'=>'COG','label'=>'Congo'),
            array('value'=>'PRK','label'=>'République populaire démocratique de Corée'),
            array('value'=>'KOR','label'=>'République de Corée'),
            array('value'=>'CRI','label'=>'Costa Rica'),
            array('value'=>'CIV','label'=>'Côte d\'Ivoire'),
            array('value'=>'HRV','label'=>'Croatie'),
            array('value'=>'CUB','label'=>'Cuba'),
            array('value'=>'DNK','label'=>'Danemark'),
            array('value'=>'DJI','label'=>'Djibouti'),
            array('value'=>'DMA','label'=>'Dominique'),
            array('value'=>'EGY','label'=>'Égypte'),
            array('value'=>'ARE','label'=>'Émirats arabes unis'),
            array('value'=>'ECU','label'=>'Équateur'),
            array('value'=>'ERI','label'=>'Érythrée'),
            array('value'=>'ESP','label'=>'Espagne'),
            array('value'=>'EST','label'=>'Estonie'),
            array('value'=>'USA','label'=>'États-Unis'),
            array('value'=>'ETH','label'=>'Éthiopie'),
            array('value'=>'FJI','label'=>'Fidji'),
            array('value'=>'FIN','label'=>'Finlande'),
            array('value'=>'FRA','label'=>'France'),
            array('value'=>'GAB','label'=>'Gabon'),
            array('value'=>'GMB','label'=>'Gambie'),
            array('value'=>'GEO','label'=>'Géorgie'),
            array('value'=>'GHA','label'=>'Ghana'),
            array('value'=>'GRC','label'=>'Grèce'),
            array('value'=>'GRD','label'=>'Grenade'),
            array('value'=>'GRL','label'=>'Groenland'),
            array('value'=>'GLP','label'=>'Guadeloupe'),
            array('value'=>'GUM','label'=>'Guam'),
            array('value'=>'GTM','label'=>'Guatemala'),
            array('value'=>'GGY','label'=>'Guernesey'),
            array('value'=>'GIN','label'=>'Guinée'),
            array('value'=>'GNB','label'=>'Guinée-Bissau'),
            array('value'=>'GNQ','label'=>'Guinée équatoriale'),
            array('value'=>'GUY','label'=>'Guyana'),
            array('value'=>'HTI','label'=>'Haïti'),
            array('value'=>'HND','label'=>'Honduras'),
            array('value'=>'HKG','label'=>'Hong Kong'),
            array('value'=>'HUN','label'=>'Hongrie'),
            array('value'=>'CXR','label'=>'Île Christmas'),
            array('value'=>'CCK','label'=>'Îles Cocos'),
            array('value'=>'COK','label'=>'Îles Cook'),
            array('value'=>'FRO','label'=>'Îles Féroé'),
            array('value'=>'FLK','label'=>'Îles Malouines'),
            array('value'=>'MNP','label'=>'Îles Mariannes du Nord'),
            array('value'=>'MHL','label'=>'Îles Marshall'),
            array('value'=>'PCN','label'=>'Îles Pitcairn'),
            array('value'=>'SLB','label'=>'Îles Salomon'),
            array('value'=>'VGB','label'=>'Îles Vierges britanniques'),
            array('value'=>'VIR','label'=>'Îles Vierges des États-Unis'),
            array('value'=>'IND','label'=>'Inde'),
            array('value'=>'IDN','label'=>'Indonésie'),
            array('value'=>'IRQ','label'=>'Irak'),
            array('value'=>'IRN','label'=>'Iran'),
            array('value'=>'IRL','label'=>'Irlande'),
            array('value'=>'ISL','label'=>'Islande'),
            array('value'=>'ISR','label'=>'Israël'),
            array('value'=>'ITA','label'=>'Italie'),
            array('value'=>'JAM','label'=>'Jamaïque'),
            array('value'=>'JPN','label'=>'Japon'),
            array('value'=>'JEY','label'=>'Jersey'),
            array('value'=>'JOR','label'=>'Jordanie'),
            array('value'=>'KAZ','label'=>'Kazakhstan'),
            array('value'=>'KEN','label'=>'Kenya'),
            array('value'=>'KGZ','label'=>'Kirghizistan'),
            array('value'=>'KIR','label'=>'Kiribati'),
            array('value'=>'KWT','label'=>'Koweït'),
            array('value'=>'LAO','label'=>'Laos'),
            array('value'=>'LSO','label'=>'Lesotho'),
            array('value'=>'LVA','label'=>'Lettonie'),
            array('value'=>'LBN','label'=>'Liban'),
            array('value'=>'LBR','label'=>'Liberia'),
            array('value'=>'LBY','label'=>'Libye'),
            array('value'=>'LIE','label'=>'Liechtenstein'),
            array('value'=>'LTU','label'=>'Lituanie'),
            array('value'=>'LUX','label'=>'Luxembourg'),
            array('value'=>'MAC','label'=>'Macao'),
            array('value'=>'MKD','label'=>'Macédoine'),
            array('value'=>'MDG','label'=>'Madagascar'),
            array('value'=>'MYS','label'=>'Malaisie'),
            array('value'=>'MWI','label'=>'Malawi'),
            array('value'=>'MDV','label'=>'Maldives'),
            array('value'=>'MLI','label'=>'Mali'),
            array('value'=>'MLT','label'=>'Malte'),
            array('value'=>'MAR','label'=>'Maroc'),
            array('value'=>'MTQ','label'=>'Martinique'),
            array('value'=>'MUS','label'=>'Maurice'),
            array('value'=>'MRT','label'=>'Mauritanie'),
            array('value'=>'MYT','label'=>'Mayotte'),
            array('value'=>'MEX','label'=>'Mexique'),
            array('value'=>'FSM','label'=>'Micronésie'),
            array('value'=>'MDA','label'=>'Moldavie'),
            array('value'=>'MCO','label'=>'Monaco'),
            array('value'=>'MNG','label'=>'Mongolie'),
            array('value'=>'MNE','label'=>'Monténégro'),
            array('value'=>'MSR','label'=>'Montserrat'),
            array('value'=>'MOZ','label'=>'Mozambique'),
            array('value'=>'MMR','label'=>'Myanmar'),
            array('value'=>'NAM','label'=>'Namibie'),
            array('value'=>'NRU','label'=>'Nauru'),
            array('value'=>'NPL','label'=>'Népal'),
            array('value'=>'NIC','label'=>'Nicaragua'),
            array('value'=>'NER','label'=>'Niger'),
            array('value'=>'NGA','label'=>'Nigeria'),
            array('value'=>'NIU','label'=>'Niue'),
            array('value'=>'NFK','label'=>'Norfolk'),
            array('value'=>'NOR','label'=>'Norvège'),
            array('value'=>'NCL','label'=>'Nouvelle-Calédonie'),
            array('value'=>'NZL','label'=>'Nouvelle-Zélande'),
            array('value'=>'OMN','label'=>'Oman'),
            array('value'=>'UGA','label'=>'Ouganda'),
            array('value'=>'UZB','label'=>'Ouzbékistan'),
            array('value'=>'PAK','label'=>'Pakistan'),
            array('value'=>'PLW','label'=>'Palaos'),
            array('value'=>'PSE','label'=>'Palestine'),
            array('value'=>'PAN','label'=>'Panama'),
            array('value'=>'PNG','label'=>'Papouasie-Nouvelle-Guinée'),
            array('value'=>'PRY','label'=>'Paraguay'),
            array('value'=>'NLD','label'=>'Pays-Bas'),
            array('value'=>'PER','label'=>'Pérou'),
            array('value'=>'PHL','label'=>'Philippines'),
            array('value'=>'PCN','label'=>'Pitcairn'),
            array('value'=>'POL','label'=>'Pologne'),
            array('value'=>'PYF','label'=>'Polynésie française'),
            array('value'=>'PRI','label'=>'Porto Rico'),
            array('value'=>'PRT','label'=>'Portugal'),
            array('value'=>'QAT','label'=>'Qatar'),
            array('value'=>'CAF','label'=>'République centrafricaine'),
            array('value'=>'DOM','label'=>'République dominicaine'),
            array('value'=>'CZE','label'=>'République tchèque'),
            array('value'=>'REU','label'=>'Réunion'),
            array('value'=>'ROU','label'=>'Roumanie'),
            array('value'=>'GBR','label'=>'Royaume-Uni'),
            array('value'=>'RUS','label'=>'Russie'),
            array('value'=>'RWA','label'=>'Rwanda'),
            array('value'=>'ESH','label'=>'Sahara occidental'),
            array('value'=>'BLM','label'=>'Saint-Barthélemy'),
            array('value'=>'KNA','label'=>'Saint-Kitts-et-Nevis'),
            array('value'=>'LCA','label'=>'Sainte-Lucie'),
            array('value'=>'MAF','label'=>'Saint-Martin'),
            array('value'=>'SXM','label'=>'Saint-Martin (partie néerlandaise)'),
            array('value'=>'VCT','label'=>'Saint-Vincent-et-les-Grenadines'),
            array('value'=>'SLB','label'=>'Salomon'),
            array('value'=>'WSM','label'=>'Samoa'),
            array('value'=>'ASM','label'=>'Samoa américaines'),
            array('value'=>'STP','label'=>'Sao Tomé-et-Principe'),
            array('value'=>'SEN','label'=>'Sénégal'),
            array('value'=>'SRB','label'=>'Serbie'),
            array('value'=>'SYC','label'=>'Seychelles'),
            array('value'=>'SLE','label'=>'Sierra Leone'),
            array('value'=>'SGP','label'=>'Singapour'),
            array('value'=>'SVK','label'=>'Slovaquie'),
            array('value'=>'SVN','label'=>'Slovénie'),
            array('value'=>'SOM','label'=>'Somalie'),
            array('value'=>'SSD','label'=>'Soudan du Sud'),
            array('value'=>'SDN','label'=>'Soudan'),
            array('value'=>'SWZ','label'=>'Eswatini'),
            array('value'=>'SYR','label'=>'Syrie'),
            array('value'=>'TJK','label'=>'Tadjikistan'),
            array('value'=>'TZA','label'=>'Tanzanie'),
            array('value'=>'TCD','label'=>'Tchad'),
            array('value'=>'CZE','label'=>'République tchèque'),
            array('value'=>'THA','label'=>'Thaïlande'),
            array('value'=>'TLS','label'=>'Timor-Leste'),
            array('value'=>'TGO','label'=>'Togo'),
            array('value'=>'TON','label'=>'Tonga'),
            array('value'=>'TTO','label'=>'Trinité-et-Tobago'),
            array('value'=>'TUN','label'=>'Tunisie'),
            array('value'=>'TKM','label'=>'Turkménistan'),
            array('value'=>'TUR','label'=>'Turquie'),
            array('value'=>'TUV','label'=>'Tuvalu'),
            array('value'=>'UKR','label'=>'Ukraine'),
            array('value'=>'URY','label'=>'Uruguay'),
            array('value'=>'VUT','label'=>'Vanuatu'),
            array('value'=>'VAT','label'=>'Vatican'),
            array('value'=>'VEN','label'=>'Venezuela'),
            array('value'=>'VNM','label'=>'Vietnam'),
            array('value'=>'YEM','label'=>'Yémen'),
            array('value'=>'ZMB','label'=>'Zambie'),
            array('value'=>'ZWE','label'=>'Zimbabwe')
        );*/

        $marital_statuses= DB::table('marital_status')->get();
        /*$marital_statuses=array(
            array('label'=>'single','value'=>'Célibataire'),
            array('label'=>'married','value'=>'Marié(e)'),
            array('label'=>'divorced','value'=>'Divorcé(e)'),
            array('label'=>'widowed','value'=>'Veuf(ve)'),
        );*/
        /*$income_types =array(
            array('value'=>'salary','label'=>'Salarié(e)'),
            array('value'=>'job_seeker','label'=>'Demandeur d\'emploi'),
            array('value'=>'student','label'=>'Etudiant(e)'),
            array('value'=>'retired','label'=>'Retraité(e)'),
            array('value'=>'invalid','label'=>'Invalide'),
            array('value'=>'retired','label'=>'Retraité(e)'),
            array('value'=>'rsa','label'=>'RSA'),
            array('value'=>'scholarship','label'=>'Bourse d\'études'),
            array('value'=>'partner','label'=>'Conjoint(e) salarié(e)'),
        );*/
        $income_types=DB::table('income_type')->get();

        ///TODO Replace this data with database data
        /*$age_gaps=DB::table('age_gap')->get();*/
        $age_gaps=array(
            array('value'=>'18_25','label'=>'de 18 à 25 ans'),
            array('value'=>'26_64','label'=>'de 26 à 64 ans'),
            array('value'=>'other','label'=>'plus de 64 ans')
        );

        return view('adherent.create',['countries'=>$countries,'marital_statuses'=>$marital_statuses,'income_types'=>$income_types,'age_gaps'=>$age_gaps]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('adherent.show',['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

