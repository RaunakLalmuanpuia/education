<?php
use Illuminate\Database\Seeder;

class LocationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Village
         */
        DB::table('districts')->insert($this->getDistricts());
        DB::table('villages')->insert($this->getVillages());
        DB::table('clusters')->insert($this->getClusters());
        DB::table('constituencies')->insert($this->getConstituencies());
        DB::table('educational_blocks')->insert($this->getEducationalBlocks());
        DB::table('habitations')->insert($this->getHabitations());
        DB::table('panchayats')->insert($this->getPanchayats());

    }

    private function getDistricts()
    {
        return [
            [
                "code"=>"1501",
                "name" =>"MAMIT"
            ],
            [
                "code"=>"1502",
                "name" =>"KOLASIB"
            ],
            [
                "code"=>"1503",
                "name" =>"AIZAWL"
            ],
            [
                "code"=>"1504",
                "name" =>"CHAMPHAI"
            ],
            [
                "code"=>"1505",
                "name" =>"SERCHHIP"
            ],
            [
                "code"=>"1506",
                "name" =>"LUNGLEI"
            ],
            [
                "code"=>"1507",
                "name" =>"LAWNGTLAI"
            ],
            [
                "code"=>"1508",
                "name" =>"SAIHA"
            ],
        ];
    }

    private function getVillages()
    {
        return [
            [
                "code"=>"150307001",
                "name" =>"AIBAWK"
            ],
            [
                "code"=>"150307002",
                "name" =>"CHAWILUNG"
            ],
            [
                "code"=>"150307003",
                "name" =>"CHAMRING"
            ],
            [
                "code"=>"150307004",
                "name" =>"FALKAWN"
            ],
            [
                "code"=>"150307005",
                "name" =>"HMUIFANG"
            ],
            [
                "code"=>"150307006",
                "name" =>"HUALNGOHMUN"
            ],
            [
                "code"=>"150307007",
                "name" =>"KELSIH"
            ],
            [
                "code"=>"150307008",
                "name" =>"LAMCHHIP"
            ],
            [
                "code"=>"150307009",
                "name" =>"LUNGSAI"
            ],
            [
                "code"=>"150307010",
                "name" =>"LUNGSEI"
            ],
            [
                "code"=>"150307011",
                "name" =>"MAUBUANG"
            ],
            [
                "code"=>"150307012",
                "name" =>"MELRIAT"
            ],
            [
                "code"=>"150307013",
                "name" =>"MUALLUNGTHU"
            ],
            [
                "code"=>"150307014",
                "name" =>"PHULPUI"
            ],
            [
                "code"=>"150307015",
                "name" =>"SAILAM"
            ],
            [
                "code"=>"150307016",
                "name" =>"SAMLUKHAI"
            ],
            [
                "code"=>"150307017",
                "name" =>"SATEEK"
            ],
            [
                "code"=>"150307018",
                "name" =>"SIALSUK"
            ],
            [
                "code"=>"150307019",
                "name" =>"SUMSUIH"
            ],
            [
                "code"=>"150307020",
                "name" =>"TACHHIP"
            ],
            [
                "code"=>"150307021",
                "name" =>"THIAK"
            ],
            [
                "code"=>"150304001",
                "name" =>"MUANNA VENG"
            ],
            [
                "code"=>"150304002",
                "name" =>"ZUANGTUI"
            ],
            [
                "code"=>"150304003",
                "name" =>"THUAMPUI"
            ],
            [
                "code"=>"150304004",
                "name" =>"ZEMABAWK"
            ],
            [
                "code"=>"150304005",
                "name" =>"ZEMABAWK 'N'"
            ],
            [
                "code"=>"150304006",
                "name" =>"FALKLAND"
            ],
            [
                "code"=>"150304007",
                "name" =>"BUNGBANGLA"
            ],
            [
                "code"=>"150304008",
                "name" =>"TUIRIAL AIRFIELD"
            ],
            [
                "code"=>"150304009",
                "name" =>"TUIRIAL LEIKAI"
            ],
            [
                "code"=>"150304010",
                "name" =>"KEIFANG"
            ],
            [
                "code"=>"150304011",
                "name" =>"RULCHAWM"
            ],
            [
                "code"=>"150304012",
                "name" =>"RUALLUNG"
            ],
            [
                "code"=>"150304013",
                "name" =>"MUALPHENG"
            ],
            [
                "code"=>"150304014",
                "name" =>"TAWIZO"
            ],
            [
                "code"=>"150304015",
                "name" =>"LENCHIM"
            ],
            [
                "code"=>"150304016",
                "name" =>"MAITE"
            ],
            [
                "code"=>"150304018",
                "name" =>"BERAWLUI"
            ],
            [
                "code"=>"150304019",
                "name" =>"TNT"
            ],
            [
                "code"=>"150305001",
                "name" =>"SAITUAL"
            ],
            [
                "code"=>"150305002",
                "name" =>"SIHFA"
            ],
            [
                "code"=>"150305003",
                "name" =>"DILKHAN"
            ],
            [
                "code"=>"150305004",
                "name" =>"TUALBUNG"
            ],
            [
                "code"=>"150305005",
                "name" =>"BUHBAN"
            ],
            [
                "code"=>"150305006",
                "name" =>"N.LUNGPHER"
            ],
            [
                "code"=>"150305007",
                "name" =>"THANGLAILUNG"
            ],
            [
                "code"=>"150305008",
                "name" =>"PHULLEN"
            ],
            [
                "code"=>"150305009",
                "name" =>"LUANGPAWN"
            ],
            [
                "code"=>"150305010",
                "name" =>"ZAWNGIN"
            ],
            [
                "code"=>"150305011",
                "name" =>"PHUAIBUANG"
            ],
            [
                "code"=>"150305012",
                "name" =>"KHAWLIAN"
            ],
            [
                "code"=>"150305013",
                "name" =>"N.E.TLANGNUAM"
            ],
            [
                "code"=>"150305014",
                "name" =>"DAIDO"
            ],
            [
                "code"=>"150309001",
                "name" =>"BAWNGKAWN"
            ],
            [
                "code"=>"150309002",
                "name" =>"BAWNGKAWN CHHIMVENG"
            ],
            [
                "code"=>"150309003",
                "name" =>"DURTLANG LEITAN"
            ],
            [
                "code"=>"150309004",
                "name" =>"DURTLANG"
            ],
            [
                "code"=>"150309005",
                "name" =>"DURTLANG NORTH"
            ],
            [
                "code"=>"150309006",
                "name" =>"SELESIH"
            ],
            [
                "code"=>"150309007",
                "name" =>"MUTHI"
            ],
            [
                "code"=>"150309008",
                "name" =>"SIHPHIR"
            ],
            [
                "code"=>"150309009",
                "name" =>"SIHPHIR VENGHLUN"
            ],
            [
                "code"=>"150309010",
                "name" =>"NAUSEL"
            ],
            [
                "code"=>"150309011",
                "name" =>"SESAWNG"
            ],
            [
                "code"=>"150302017",
                "name" =>"REPUBLIC VENGTHLANG"
            ],
            [
                "code"=>"150310014",
                "name" =>"UPPER SAKAWRDAI"
            ],
            [
                "code"=>"150310015",
                "name" =>"ZOHMUN"
            ],
            [
                "code"=>"150310016",
                "name" =>"PALSANG"
            ],
            [
                "code"=>"150310017",
                "name" =>"MAUCHAR"
            ],
            [
                "code"=>"150310018",
                "name" =>"N.TINGHMUN"
            ],
            [
                "code"=>"150310019",
                "name" =>"ZOKHAWTHIANG"
            ],
            [
                "code"=>"150311001",
                "name" =>"KHAWRUHLIAN"
            ],
            [
                "code"=>"150311002",
                "name" =>"HMUNNGHAK"
            ],
            [
                "code"=>"150311003",
                "name" =>"KHANPUI"
            ],
            [
                "code"=>"150311004",
                "name" =>"LAILAK"
            ],
            [
                "code"=>"150311005",
                "name" =>"PEHLAWN"
            ],
            [
                "code"=>"150311006",
                "name" =>"E.PHAILENG"
            ],
            [
                "code"=>"150311007",
                "name" =>"KEPRAN"
            ],
            [
                "code"=>"150311008",
                "name" =>"SAWLENG"
            ],
            [
                "code"=>"150311009",
                "name" =>"CHHANCHHUAHNA KHAWPUI"
            ],
            [
                "code"=>"150311010",
                "name" =>"SUANGPUILAWN"
            ],
            [
                "code"=>"150311011",
                "name" =>"LAMHERH"
            ],
            [
                "code"=>"150311012",
                "name" =>"VANBAWNG"
            ],
            [
                "code"=>"150311013",
                "name" =>"N.KHAWLEK"
            ],
            [
                "code"=>"150306001",
                "name" =>"CHANMARI"
            ],
            [
                "code"=>"150306002",
                "name" =>"CHANMARI WEST"
            ],
            [
                "code"=>"150306003",
                "name" =>"DINTHAR"
            ],
            [
                "code"=>"150306004",
                "name" =>"DAWRPUI VENGTHAR"
            ],
            [
                "code"=>"150306005",
                "name" =>"HUNTHAR"
            ],
            [
                "code"=>"150306006",
                "name" =>"EDENTHAR"
            ],
            [
                "code"=>"150306007",
                "name" =>"KHATLA"
            ],
            [
                "code"=>"150306008",
                "name" =>"KHATLA SOUTH"
            ],
            [
                "code"=>"150306009",
                "name" =>"KULIKAWN"
            ],
            [
                "code"=>"150306010",
                "name" =>"LUNGLENG I"
            ],
            [
                "code"=>"150306011",
                "name" =>"MELTHUM"
            ],
            [
                "code"=>"150306012",
                "name" =>"MISSION VENGTHLANG"
            ],
            [
                "code"=>"150306013",
                "name" =>"MISSION VENG"
            ],
            [
                "code"=>"150306014",
                "name" =>"N LUNGLENG"
            ],
            [
                "code"=>"150306015",
                "name" =>"SAIKHAMAKAWN"
            ],
            [
                "code"=>"150306016",
                "name" =>"SAMTLANG"
            ],
            [
                "code"=>"150306017",
                "name" =>"HLIMEN"
            ],
            [
                "code"=>"150306018",
                "name" =>"TLANGNUAM"
            ],
            [
                "code"=>"150306019",
                "name" =>"TUIKUAL NORTH"
            ],
            [
                "code"=>"150306020",
                "name" =>"TUIKUAL SOUTH"
            ],
            [
                "code"=>"150306021",
                "name" =>"VAIVAKAWN"
            ],
            [
                "code"=>"150306022",
                "name" =>"TUIKHUAHTLANG"
            ],
            [
                "code"=>"150306023",
                "name" =>"MODEL VENG"
            ],
            [
                "code"=>"150308024",
                "name" =>"AICS"
            ],
            [
                "code"=>"150306024",
                "name" =>"KHATLA EAST"
            ],
            [
                "code"=>"150308001",
                "name" =>"BUNGKAWN"
            ],
            [
                "code"=>"150308002",
                "name" =>"BUNGKAWN VENGTHAR"
            ],
            [
                "code"=>"150308003",
                "name" =>"NURSERY"
            ],
            [
                "code"=>"150308004",
                "name" =>"CHAWLHHMUN"
            ],
            [
                "code"=>"150308005",
                "name" =>"TUIVAMIT"
            ],
            [
                "code"=>"150308006",
                "name" =>"CENTRAL JAIL"
            ],
            [
                "code"=>"150308007",
                "name" =>"CHAWNPUI"
            ],
            [
                "code"=>"150308008",
                "name" =>"GOVT. COMPLEX"
            ],
            [
                "code"=>"150308009",
                "name" =>"KANAN"
            ],
            [
                "code"=>"150308010",
                "name" =>"LAWIPU"
            ],
            [
                "code"=>"150308011",
                "name" =>"LENGPUI"
            ],
            [
                "code"=>"150308012",
                "name" =>"LUANGMUAL"
            ],
            [
                "code"=>"150308013",
                "name" =>"MAUBAWK"
            ],
            [
                "code"=>"150308014",
                "name" =>"PHUNCHAWNG"
            ],
            [
                "code"=>"150308015",
                "name" =>"LUNGVERH"
            ],
            [
                "code"=>"150308016",
                "name" =>"RANGVAMUAL"
            ],
            [
                "code"=>"150308017",
                "name" =>"SAKAWRTUICHHUN"
            ],
            [
                "code"=>"150308018",
                "name" =>"SAIRANG"
            ],
            [
                "code"=>"150308019",
                "name" =>"SAIRANG DINTHAR"
            ],
            [
                "code"=>"150308020",
                "name" =>"SAIRANG SIHHMUI"
            ],
            [
                "code"=>"150308021",
                "name" =>"TANHRIL"
            ],
            [
                "code"=>"150308022",
                "name" =>"ZONUAM"
            ],
            [
                "code"=>"150308023",
                "name" =>"ZOTLANG"
            ],
            [
                "code"=>"150301001",
                "name" =>"LAIPUITLANG"
            ],
            [
                "code"=>"150301002",
                "name" =>"CHALTLANG"
            ],
            [
                "code"=>"150301003",
                "name" =>"RAMHLUN NORTH "
            ],
            [
                "code"=>"150302001",
                "name" =>"ZARKAWT"
            ],
            [
                "code"=>"150302002",
                "name" =>"DAWRPUI"
            ],
            [
                "code"=>"150302003",
                "name" =>"SARON"
            ],
            [
                "code"=>"150302004",
                "name" =>"TUITHIANG"
            ],
            [
                "code"=>"150302005",
                "name" =>"VENGHLUI"
            ],
            [
                "code"=>"150302006",
                "name" =>"REPUBLIC"
            ],
            [
                "code"=>"150302007",
                "name" =>"UPPER REPUBLIC"
            ],
            [
                "code"=>"150302008",
                "name" =>"COLLEGE VENG"
            ],
            [
                "code"=>"150302009",
                "name" =>"ITI"
            ],
            [
                "code"=>"150302010",
                "name" =>"MUALPUI"
            ],
            [
                "code"=>"150302011",
                "name" =>"BETHLEHEM"
            ],
            [
                "code"=>"150302012",
                "name" =>"BETHLEHEM VENGTHLANG"
            ],
            [
                "code"=>"150302013",
                "name" =>"THAKTHING"
            ],
            [
                "code"=>"150302014",
                "name" =>"DAM VENG "
            ],
            [
                "code"=>"150302015",
                "name" =>"VENGHNUAI"
            ],
            [
                "code"=>"150302016",
                "name" =>"SALEM"
            ],
            [
                "code"=>"150303001",
                "name" =>"TUIKHURHLU"
            ],
            [
                "code"=>"150303002",
                "name" =>"SELING"
            ],
            [
                "code"=>"150303003",
                "name" =>"THINGSULTHLIAH"
            ],
            [
                "code"=>"150303004",
                "name" =>"THINGSUL TLANGNUAM"
            ],
            [
                "code"=>"150303005",
                "name" =>"DARLAWNG"
            ],
            [
                "code"=>"150303006",
                "name" =>"TLUNGVEL"
            ],
            [
                "code"=>"150303007",
                "name" =>"PHULMAWI"
            ],
            [
                "code"=>"150310001",
                "name" =>"DARLAWN"
            ],
            [
                "code"=>"150310002",
                "name" =>"N.SERZAWL"
            ],
            [
                "code"=>"150310003",
                "name" =>"SUNHLUCHHIP"
            ],
            [
                "code"=>"150310004",
                "name" =>"SAILUTAR"
            ],
            [
                "code"=>"150310005",
                "name" =>"RATU"
            ],
            [
                "code"=>"150310006",
                "name" =>"LUNGSUM"
            ],
            [
                "code"=>"150310007",
                "name" =>"NEW VERVEK"
            ],
            [
                "code"=>"150310008",
                "name" =>"DAMDIAI"
            ],
            [
                "code"=>"150310009",
                "name" =>"THINGSAT"
            ],
            [
                "code"=>"150310010",
                "name" =>"SAKAWRDAI"
            ],
            [
                "code"=>"150310011",
                "name" =>"N.KHAWDUNGSEI"
            ],
            [
                "code"=>"150310012",
                "name" =>"VAITIN"
            ],
            [
                "code"=>"150310013",
                "name" =>"KHAWPUAR"
            ],
            [
                "code"=>"150301004",
                "name" =>"RAMHLUN VENGTHAR"
            ],
            [
                "code"=>"150301005",
                "name" =>"RAMHLUN VENGLAI"
            ],
            [
                "code"=>"150301006",
                "name" =>"RAMHLUN SPORT COMPLEX"
            ],
            [
                "code"=>"150301007",
                "name" =>"RAMHLUN SOUTH "
            ],
            [
                "code"=>"150301008",
                "name" =>"RAMTHAR NORTH "
            ],
            [
                "code"=>"150301009",
                "name" =>"RAMTHAR"
            ],
            [
                "code"=>"150301010",
                "name" =>"AIZAWL VENGLAI"
            ],
            [
                "code"=>"150301011",
                "name" =>"ELECTRIC"
            ],
            [
                "code"=>"150301012",
                "name" =>"CHHINGA VENG"
            ],
            [
                "code"=>"150301013",
                "name" =>"ARMED VENG"
            ],
            [
                "code"=>"150301014",
                "name" =>"ARMED VENG SOUTH"
            ],
            [
                "code"=>"150301015",
                "name" =>"CHITE"
            ],
            [
                "code"=>"150301018",
                "name" =>"CHALTLANG NORTH"
            ],
            [
                "code"=>"150401001",
                "name" =>"CHAMPHAI I"
            ],
            [
                "code"=>"150401002",
                "name" =>"CHAMPHAI II"
            ],
            [
                "code"=>"150401003",
                "name" =>"CHAMPHAI III"
            ],
            [
                "code"=>"150401004",
                "name" =>"CHAMPHAI IV"
            ],
            [
                "code"=>"150401005",
                "name" =>"CHAMPHAI V"
            ],
            [
                "code"=>"150401006",
                "name" =>"CHAMPHAI VI"
            ],
            [
                "code"=>"150401007",
                "name" =>"CHAMPHAI VII"
            ],
            [
                "code"=>"150401008",
                "name" =>"CHAMPHAI VIII"
            ],
            [
                "code"=>"150401009",
                "name" =>"HMUNHMELTHA"
            ],
            [
                "code"=>"150401010",
                "name" =>"N.KHAWBUNG"
            ],
            [
                "code"=>"150401011",
                "name" =>"CHHUNGTE"
            ],
            [
                "code"=>"150401012",
                "name" =>"TUIPUI"
            ],
            [
                "code"=>"150401013",
                "name" =>"N.CHAMPHAI"
            ],
            [
                "code"=>"150401014",
                "name" =>"RUANTLANG"
            ],
            [
                "code"=>"150401015",
                "name" =>"ZOTLANG"
            ],
            [
                "code"=>"150401016",
                "name" =>"MELBUK"
            ],
            [
                "code"=>"150401017",
                "name" =>"ZOKHAWTHAR"
            ],
            [
                "code"=>"150401018",
                "name" =>"MUALKAWI"
            ],
            [
                "code"=>"150401019",
                "name" =>"ZOTE"
            ],
            [
                "code"=>"150401020",
                "name" =>"TLANGSAM"
            ],
            [
                "code"=>"150401021",
                "name" =>"NGUR"
            ],
            [
                "code"=>"150401022",
                "name" =>"HNAHLAN"
            ],
            [
                "code"=>"150401023",
                "name" =>"N.DILTLANG"
            ],
            [
                "code"=>"150401024",
                "name" =>"VAIKHAWTLANG"
            ],
            [
                "code"=>"150401025",
                "name" =>"VAPAR"
            ],
            [
                "code"=>"150401026",
                "name" =>"KHUANGPHAH"
            ],
            [
                "code"=>"150401027",
                "name" =>"TUALCHENG"
            ],
            [
                "code"=>"150401028",
                "name" =>"MURLEN"
            ],
            [
                "code"=>"150401029",
                "name" =>"LUNGPHUNLIAN"
            ],
            [
                "code"=>"150401030",
                "name" =>"PAMCHUNG"
            ],
            [
                "code"=>"150401031",
                "name" =>"DINTHAR"
            ],
            [
                "code"=>"150401032",
                "name" =>"VENGTHLANG NORTH"
            ],
            [
                "code"=>"150401033",
                "name" =>"ZION"
            ],
            [
                "code"=>"150402001",
                "name" =>"KHAWZAWL I"
            ],
            [
                "code"=>"150402002",
                "name" =>"KHAWZAWL II"
            ],
            [
                "code"=>"150402003",
                "name" =>"KHAWZAWL III"
            ],
            [
                "code"=>"150402004",
                "name" =>"KHAWZAWL IV"
            ],
            [
                "code"=>"150402005",
                "name" =>"KHAWZAWL V"
            ],
            [
                "code"=>"150402006",
                "name" =>"TUALPUI"
            ],
            [
                "code"=>"150402007",
                "name" =>"NGAIZAWL"
            ],
            [
                "code"=>"150402008",
                "name" =>"ARRO"
            ],
            [
                "code"=>"150402009",
                "name" =>"HMUNCHENG"
            ],
            [
                "code"=>"150402010",
                "name" =>"TUALTE"
            ],
            [
                "code"=>"150402011",
                "name" =>"NEIHDAWN"
            ],
            [
                "code"=>"150402012",
                "name" =>"CHAWNGTLAI"
            ],
            [
                "code"=>"150402013",
                "name" =>"RABUNG"
            ],
            [
                "code"=>"150402014",
                "name" =>"KHUALEN"
            ],
            [
                "code"=>"150402015",
                "name" =>"AIDUZAWL"
            ],
            [
                "code"=>"150402016",
                "name" =>"KHAWHAI"
            ],
            [
                "code"=>"150402017",
                "name" =>"CHALRANG"
            ],
            [
                "code"=>"150402018",
                "name" =>"N.CHALRANG"
            ],
            [
                "code"=>"150402019",
                "name" =>"VANGTLANG"
            ],
            [
                "code"=>"150402020",
                "name" =>"LUNGTAN"
            ],
            [
                "code"=>"150402021",
                "name" =>"SIALHAWK"
            ],
            [
                "code"=>"150402022",
                "name" =>"BIATE"
            ],
            [
                "code"=>"150402023",
                "name" =>"RIANGTLEI"
            ],
            [
                "code"=>"150402024",
                "name" =>"TLANGPUI"
            ],
            [
                "code"=>"150402025",
                "name" =>"TLANGMAWI"
            ],
            [
                "code"=>"150402026",
                "name" =>"HERMON "
            ],
            [
                "code"=>"150402027",
                "name" =>"KAWNZAR"
            ],
            [
                "code"=>"150403001",
                "name" =>"KELKANG"
            ],
            [
                "code"=>"150403002",
                "name" =>"DILKAWN"
            ],
            [
                "code"=>"150403003",
                "name" =>"BUANG"
            ],
            [
                "code"=>"150403004",
                "name" =>"HRUAIKAWN"
            ],
            [
                "code"=>"150403005",
                "name" =>"N.HRUAIKAWN"
            ],
            [
                "code"=>"150403006",
                "name" =>"KHUANGLENG"
            ],
            [
                "code"=>"150403007",
                "name" =>"SAZEP"
            ],
            [
                "code"=>"150403008",
                "name" =>"SESIH"
            ],
            [
                "code"=>"150403009",
                "name" =>"BULFEKZAWL"
            ],
            [
                "code"=>"150403010",
                "name" =>"VANGCHHIA"
            ],
            [
                "code"=>"150403011",
                "name" =>"LEISENZO"
            ],
            [
                "code"=>"150403012",
                "name" =>"LIANPUI"
            ],
            [
                "code"=>"150403013",
                "name" =>"BUNGZUNG"
            ],
            [
                "code"=>"150403014",
                "name" =>"VANZAU"
            ],
            [
                "code"=>"150403015",
                "name" =>"LEITHUM"
            ],
            [
                "code"=>"150403016",
                "name" =>"ZAWNGTETUI"
            ],
            [
                "code"=>"150403017",
                "name" =>"KHAWBUNG"
            ],
            [
                "code"=>"150403018",
                "name" =>"KHUANGTHING"
            ],
            [
                "code"=>"150403019",
                "name" =>"ZAWLSEI"
            ],
            [
                "code"=>"150403020",
                "name" =>"DUNGTLANG"
            ],
            [
                "code"=>"150403021",
                "name" =>"VAPHAI"
            ],
            [
                "code"=>"150403022",
                "name" =>"SAMTHANG"
            ],
            [
                "code"=>"150403024",
                "name" =>"CHAWNGTUI 'E'"
            ],
            [
                "code"=>"150403025",
                "name" =>"FARKAWN"
            ],
            [
                "code"=>"150403026",
                "name" =>"KHANKAWN"
            ],
            [
                "code"=>"150403027",
                "name" =>"THEKPUI"
            ],
            [
                "code"=>"150403028",
                "name" =>"THEKTE"
            ],
            [
                "code"=>"150404001",
                "name" =>"NGOPA"
            ],
            [
                "code"=>"150404002",
                "name" =>"N.E.KHAWDUNGSEI"
            ],
            [
                "code"=>"150404003",
                "name" =>"CHIAHPUI"
            ],
            [
                "code"=>"150404004",
                "name" =>"KHAWKAWN"
            ],
            [
                "code"=>"150404005",
                "name" =>"LAMZAWL"
            ],
            [
                "code"=>"150404006",
                "name" =>"TEIKHANG"
            ],
            [
                "code"=>"150404007",
                "name" =>"MIMBUNG"
            ],
            [
                "code"=>"150404008",
                "name" =>"KAWLBEM"
            ],
            [
                "code"=>"150404009",
                "name" =>"HRIANGHMUN"
            ],
            [
                "code"=>"150404010",
                "name" =>"SELAM"
            ],
            [
                "code"=>"150404011",
                "name" =>"HLIAPPUI"
            ],
            [
                "code"=>"150404012",
                "name" =>"SAICHAL"
            ],
            [
                "code"=>"150404013",
                "name" =>"PAWLRANG"
            ],
            [
                "code"=>"150404014",
                "name" =>"CHANGZAWL"
            ],
            [
                "code"=>"150404015",
                "name" =>"KAWLKULH"
            ],
            [
                "code"=>"150404016",
                "name" =>"DULTE"
            ],
            [
                "code"=>"150404017",
                "name" =>"PUILO"
            ],
            [
                "code"=>"150404018",
                "name" =>"CHHAWRTUI"
            ],
            [
                "code"=>"150404019",
                "name" =>"VANKAL"
            ],
            [
                "code"=>"150404020",
                "name" =>"VANCHENGPUI"
            ],
            [
                "code"=>"150201001",
                "name" =>"KOLASIB - I"
            ],
            [
                "code"=>"150201002",
                "name" =>"KOLASIB - II"
            ],
            [
                "code"=>"150201003",
                "name" =>"KOLASIB - III"
            ],
            [
                "code"=>"150201004",
                "name" =>"KOLASIB - IV"
            ],
            [
                "code"=>"150201005",
                "name" =>"KOLASIB - V"
            ],
            [
                "code"=>"150201006",
                "name" =>"KOLASIB - VI"
            ],
            [
                "code"=>"150201007",
                "name" =>"KOLASIB - VII"
            ],
            [
                "code"=>"150201008",
                "name" =>"BUILUM"
            ],
            [
                "code"=>"150201009",
                "name" =>"MEIDUM (ZODIN)"
            ],
            [
                "code"=>"150201010",
                "name" =>"BAIRABI (LENHMUIKAWN)"
            ],
            [
                "code"=>"150201011",
                "name" =>"PANGBALKAWN (S.CHHIMLUANG)"
            ],
            [
                "code"=>"150201012",
                "name" =>"RENGTEKAWN"
            ],
            [
                "code"=>"150201013",
                "name" =>"COLLEGE VENG"
            ],
            [
                "code"=>"150201038",
                "name" =>"PROJECT VENG"
            ],
            [
                "code"=>"150202001",
                "name" =>"KAWNPUI II"
            ],
            [
                "code"=>"150202002",
                "name" =>"KAWNPUI I"
            ],
            [
                "code"=>"150202003",
                "name" =>"THINGDAWL (SETHAWN)"
            ],
            [
                "code"=>"150202004",
                "name" =>"BUALPUI `N"
            ],
            [
                "code"=>"150202005",
                "name" =>"ZANLAWN"
            ],
            [
                "code"=>"150202006",
                "name" =>"SERKHAN"
            ],
            [
                "code"=>"150202007",
                "name" =>"LUNGDAI"
            ],
            [
                "code"=>"150202008",
                "name" =>"NISAPUI"
            ],
            [
                "code"=>"150202009",
                "name" =>"LUNGMUAT"
            ],
            [
                "code"=>"150202010",
                "name" =>"N.CHALTLANG"
            ],
            [
                "code"=>"150202011",
                "name" =>"BUKPUI"
            ],
            [
                "code"=>"150202012",
                "name" =>"THINGTHELH"
            ],
            [
                "code"=>"150202013",
                "name" =>"N.HLIMEN"
            ],
            [
                "code"=>"150202014",
                "name" =>"KHAMRANG"
            ],
            [
                "code"=>"150202015",
                "name" =>"MUALKHANG"
            ],
            [
                "code"=>"150202016",
                "name" =>"HORTOKI"
            ],
            [
                "code"=>"150203001",
                "name" =>"BILKHAWTHLIR N"
            ],
            [
                "code"=>"150203002",
                "name" =>"N.CHAWNPUI"
            ],
            [
                "code"=>"150203003",
                "name" =>"BUHCHANGPHAI"
            ],
            [
                "code"=>"150203004",
                "name" =>"SAIHAPUI `K"
            ],
            [
                "code"=>"150203005",
                "name" =>"PHAISEN"
            ],
            [
                "code"=>"150203006",
                "name" =>"N.CHHIMLUANG"
            ],
            [
                "code"=>"150203007",
                "name" =>"VAIRENGTE - I"
            ],
            [
                "code"=>"150203008",
                "name" =>"VAIRENGTE - II"
            ],
            [
                "code"=>"150203009",
                "name" =>"PHAINUAM"
            ],
            [
                "code"=>"150203010",
                "name" =>"SAIHAPUI `V"
            ],
            [
                "code"=>"150203011",
                "name" =>"BUKVANNEI"
            ],
            [
                "code"=>"150203012",
                "name" =>"THINGLIAN"
            ],
            [
                "code"=>"150203013",
                "name" =>"BILKHAWTHLIR S"
            ],
            [
                "code"=>"150203014",
                "name" =>"SAIPUM"
            ],
            [
                "code"=>"150203015",
                "name" =>"SAIPHAI"
            ],
            [
                "code"=>"150701001",
                "name" =>"BUNGTLANG 'S'"
            ],
            [
                "code"=>"150701002",
                "name" =>"HMUNNUAM"
            ],
            [
                "code"=>"150701003",
                "name" =>"DILTLANG"
            ],
            [
                "code"=>"150701004",
                "name" =>"CHAWNGTELUI"
            ],
            [
                "code"=>"150701005",
                "name" =>"KAWRTHINDENG"
            ],
            [
                "code"=>"150701006",
                "name" =>"SAIKHAWTHLIR"
            ],
            [
                "code"=>"150701007",
                "name" =>"TUITHUMHNAR"
            ],
            [
                "code"=>"150701008",
                "name" =>"LUNGHAUKA"
            ],
            [
                "code"=>"150701009",
                "name" =>"HMAWNGBU"
            ],
            [
                "code"=>"150701010",
                "name" =>"HMAWNGBUCHHUAH"
            ],
            [
                "code"=>"150701011",
                "name" =>"SABUALTLANG"
            ],
            [
                "code"=>"150701012",
                "name" =>"KAKICHHUAH"
            ],
            [
                "code"=>"150701013",
                "name" =>"HRUITEZAWL"
            ],
            [
                "code"=>"150701014",
                "name" =>"NGENGPUITLANG"
            ],
            [
                "code"=>"150701015",
                "name" =>"TUIDANGTLANG"
            ],
            [
                "code"=>"150701017",
                "name" =>"M.KAWNPUI"
            ],
            [
                "code"=>"150701018",
                "name" =>"SAIBAWIH"
            ],
            [
                "code"=>"150701019",
                "name" =>"CHIKHURLUI"
            ],
            [
                "code"=>"150701020",
                "name" =>"NGHALIMLUI"
            ],
            [
                "code"=>"150701021",
                "name" =>"VASEIKAI"
            ],
            [
                "code"=>"150701022",
                "name" =>"FANGFARLUI"
            ],
            [
                "code"=>"150701023",
                "name" =>"DAMLUI"
            ],
            [
                "code"=>"150701025",
                "name" =>"VATHUAMPUI"
            ],
            [
                "code"=>"150701026",
                "name" =>"CHAMDURTLANG"
            ],
            [
                "code"=>"150701027",
                "name" =>"CHAMDUR 'P'"
            ],
            [
                "code"=>"150701028",
                "name" =>"BOLISORA"
            ],
            [
                "code"=>"150701029",
                "name" =>"MAUTLANG"
            ],
            [
                "code"=>"150701030",
                "name" =>"TUICHAWNGTLANG"
            ],
            [
                "code"=>"150701031",
                "name" =>"NGUNLINGAKHUA"
            ],
            [
                "code"=>"150701033",
                "name" =>"SAKEILUI"
            ],
            [
                "code"=>"150701034",
                "name" =>"JOGNASURY"
            ],
            [
                "code"=>"150701035",
                "name" =>"SUMSILUI"
            ],
            [
                "code"=>"150701036",
                "name" =>"KARLUI"
            ],
            [
                "code"=>"150701037",
                "name" =>"PANDAWNGLUI"
            ],
            [
                "code"=>"150701038",
                "name" =>"CHAWNGTE 'P'"
            ],
            [
                "code"=>"150701039",
                "name" =>"HMUNLAI"
            ],
            [
                "code"=>"150701040",
                "name" =>"MUALBU 'L'"
            ],
            [
                "code"=>"150701041",
                "name" =>"TUIKHURLUI"
            ],
            [
                "code"=>"150701042",
                "name" =>"DARNAMTLANG"
            ],
            [
                "code"=>"150701043",
                "name" =>"T.DUMZAU"
            ],
            [
                "code"=>"150701044",
                "name" =>"ZOCHACHHUAH"
            ],
            [
                "code"=>"150701045",
                "name" =>"LAITLANG"
            ],
            [
                "code"=>"150701046",
                "name" =>"DUMZAUTLANG"
            ],
            [
                "code"=>"150701047",
                "name" =>"TUISENTLANG"
            ],
            [
                "code"=>"150701048",
                "name" =>"SEDAILUI"
            ],
            [
                "code"=>"150701049",
                "name" =>"SEKULH"
            ],
            [
                "code"=>"150701050",
                "name" =>"NGENGPUICHHUAH"
            ],
            [
                "code"=>"150701051",
                "name" =>"NGENGPUIKAI"
            ],
            [
                "code"=>"150701053",
                "name" =>"BUNGTLANG S - II"
            ],
            [
                "code"=>"150701054",
                "name" =>"KARLUI-II"
            ],
            [
                "code"=>"150701055",
                "name" =>"KHAWNKHUA"
            ],
            [
                "code"=>"150702001",
                "name" =>"THINGKAH"
            ],
            [
                "code"=>"150702002",
                "name" =>"A.O.C"
            ],
            [
                "code"=>"150702003",
                "name" =>"LAWNGTLAI-III"
            ],
            [
                "code"=>"150702004",
                "name" =>"LAWNGTLAI VENGPUI"
            ],
            [
                "code"=>"150702005",
                "name" =>"MAMPUI"
            ],
            [
                "code"=>"150702006",
                "name" =>"BAZAR"
            ],
            [
                "code"=>"150702007",
                "name" =>"COUNCIL VENG"
            ],
            [
                "code"=>"150702008",
                "name" =>"CHANDMARY-I"
            ],
            [
                "code"=>"150702009",
                "name" =>"CHANDMARY-II"
            ],
            [
                "code"=>"150702010",
                "name" =>"COLLEGE VENG"
            ],
            [
                "code"=>"150702011",
                "name" =>"CHAWNHU"
            ],
            [
                "code"=>"150702013",
                "name" =>"PAITHAR"
            ],
            [
                "code"=>"150702014",
                "name" =>"SAIKAH"
            ],
            [
                "code"=>"150702015",
                "name" =>"CHAWNTLANGPUI"
            ],
            [
                "code"=>"150702016",
                "name" =>"SIHTLANGPUI"
            ],
            [
                "code"=>"150702017",
                "name" =>"KAWLCHAW 'W'"
            ],
            [
                "code"=>"150702018",
                "name" =>"R.VANHNE"
            ],
            [
                "code"=>"150702019",
                "name" =>"RULKUAL"
            ],
            [
                "code"=>"150702020",
                "name" =>"SAIZAWH 'E'"
            ],
            [
                "code"=>"150702021",
                "name" =>"ELECTRIC VENG"
            ],
            [
                "code"=>"150702023",
                "name" =>"LAWNGTLAI VENGPUI-II"
            ],
            [
                "code"=>"150703001",
                "name" =>"SANGAU-I"
            ],
            [
                "code"=>"150703002",
                "name" =>"SANGAU-II"
            ],
            [
                "code"=>"150703003",
                "name" =>"PANGKHUA"
            ],
            [
                "code"=>"150703004",
                "name" =>"THALTLANG"
            ],
            [
                "code"=>"150703005",
                "name" =>"SENTETFIANG"
            ],
            [
                "code"=>"150703006",
                "name" =>"LUNGPHER"
            ],
            [
                "code"=>"150703007",
                "name" =>"VAWMBUK"
            ],
            [
                "code"=>"150703008",
                "name" =>"ARCHHUANG"
            ],
            [
                "code"=>"150703009",
                "name" =>"TIALDAWNGLUNG"
            ],
            [
                "code"=>"150703010",
                "name" =>"SIACHANGKAWN"
            ],
            [
                "code"=>"150703011",
                "name" =>"BUALPUI 'NG'-I"
            ],
            [
                "code"=>"150703012",
                "name" =>"BUALPUI 'NG'-II"
            ],
            [
                "code"=>"150703013",
                "name" =>"LUNGZARTUM"
            ],
            [
                "code"=>"150703014",
                "name" =>"LUNGTIAN"
            ],
            [
                "code"=>"150703015",
                "name" =>"FUNGKAH"
            ],
            [
                "code"=>"150703016",
                "name" =>"CHEURAL"
            ],
            [
                "code"=>"150703017",
                "name" =>"VARTEKKAI"
            ],
            [
                "code"=>"150703018",
                "name" =>"VARTEK"
            ],
            [
                "code"=>"150703019",
                "name" =>"RAWLBUK"
            ],
            [
                "code"=>"150703020",
                "name" =>"VAWMBUK-II"
            ],
            [
                "code"=>"150703021",
                "name" =>"LUNGTIAN-II"
            ],
            [
                "code"=>"150703022",
                "name" =>"SANGAU-III"
            ],
            [
                "code"=>"150703023",
                "name" =>"SANGAU-IV"
            ],
            [
                "code"=>"150704001",
                "name" =>"KAMALANAGAR-I"
            ],
            [
                "code"=>"150704002",
                "name" =>"KAMALANAGAR-II"
            ],
            [
                "code"=>"150704003",
                "name" =>"KAMALANAGAR-III"
            ],
            [
                "code"=>"150704004",
                "name" =>"KAMALANAGAR-IV"
            ],
            [
                "code"=>"150704005",
                "name" =>"BAJEISORA"
            ],
            [
                "code"=>"150704006",
                "name" =>"BAGANPARA"
            ],
            [
                "code"=>"150704007",
                "name" =>"UGUDASURY 'N'"
            ],
            [
                "code"=>"150704008",
                "name" =>"SAIZAWH 'W'"
            ],
            [
                "code"=>"150704009",
                "name" =>"MONTOLA"
            ],
            [
                "code"=>"150704010",
                "name" =>"RAJMANDAL"
            ],
            [
                "code"=>"150704011",
                "name" =>"NALBANYA"
            ],
            [
                "code"=>"150704012",
                "name" =>"UDALTANA-I"
            ],
            [
                "code"=>"150704013",
                "name" =>"UDALTANA-II"
            ],
            [
                "code"=>"150704014",
                "name" =>"ADUBANGASORA"
            ],
            [
                "code"=>"150704015",
                "name" =>"JAMERSURY"
            ],
            [
                "code"=>"150704016",
                "name" =>"ULUSURY"
            ],
            [
                "code"=>"150704017",
                "name" =>"MONDIRASORA"
            ],
            [
                "code"=>"150704018",
                "name" =>"AJASORA-II"
            ],
            [
                "code"=>"150704019",
                "name" =>"AJASORA-I"
            ],
            [
                "code"=>"150704020",
                "name" =>"AJASORA-III"
            ],
            [
                "code"=>"150704021",
                "name" =>"BARKALAK"
            ],
            [
                "code"=>"150704022",
                "name" =>"SEMEISURY"
            ],
            [
                "code"=>"150704023",
                "name" =>"GOLASURY"
            ],
            [
                "code"=>"150704024",
                "name" =>"BETBANYA"
            ],
            [
                "code"=>"150704025",
                "name" =>"LONGPUIGHAT"
            ],
            [
                "code"=>"150704026",
                "name" =>"VASEITLANG-I"
            ],
            [
                "code"=>"150704027",
                "name" =>"VASEITLANG-II"
            ],
            [
                "code"=>"150704028",
                "name" =>"CHARLUITLANG"
            ],
            [
                "code"=>"150704029",
                "name" =>"DEVASORA 'N'"
            ],
            [
                "code"=>"150704030",
                "name" =>"NEW JAGANASURY-I"
            ],
            [
                "code"=>"150704031",
                "name" =>"NEW JAGANASURY-II"
            ],
            [
                "code"=>"150704032",
                "name" =>"CHOTAGUISURY-I"
            ],
            [
                "code"=>"150704033",
                "name" =>"CHOTAGUISURY-II"
            ],
            [
                "code"=>"150704034",
                "name" =>"BARAGUISURY"
            ],
            [
                "code"=>"150704035",
                "name" =>"FULTULI"
            ],
            [
                "code"=>"150704036",
                "name" =>"FULSORA"
            ],
            [
                "code"=>"150704037",
                "name" =>"DURSORA"
            ],
            [
                "code"=>"150704038",
                "name" =>"BILLOSORA"
            ],
            [
                "code"=>"150704039",
                "name" =>"SILOSORA"
            ],
            [
                "code"=>"150704040",
                "name" =>"DEVASORA 'S'"
            ],
            [
                "code"=>"150704041",
                "name" =>"PARVA-II"
            ],
            [
                "code"=>"150704042",
                "name" =>"PARVA-I"
            ],
            [
                "code"=>"150704043",
                "name" =>"PARVA-III"
            ],
            [
                "code"=>"150704044",
                "name" =>"BONDUKBANGA"
            ],
            [
                "code"=>"150704045",
                "name" =>"GOBASURY"
            ],
            [
                "code"=>"150704046",
                "name" =>"KAMTULI"
            ],
            [
                "code"=>"150704047",
                "name" =>"SIMINASORA"
            ],
            [
                "code"=>"150704048",
                "name" =>"CHAMINISORA"
            ],
            [
                "code"=>"150704049",
                "name" =>"OLD BAJEISORA"
            ],
            [
                "code"=>"150704050",
                "name" =>"SAMUKSORA"
            ],
            [
                "code"=>"150704051",
                "name" =>"ARATINAGAR"
            ],
            [
                "code"=>"150704052",
                "name" =>"PARVA-IV"
            ],
            [
                "code"=>"150704053",
                "name" =>"MASSURY"
            ],
            [
                "code"=>"150704054",
                "name" =>"PALENOSORA"
            ],
            [
                "code"=>"150704055",
                "name" =>"LONGPUIGHAT-II"
            ],
            [
                "code"=>"150704056",
                "name" =>"NEW JAGNASURY-III"
            ],
            [
                "code"=>"150705001",
                "name" =>"BARAPANSURY-I"
            ],
            [
                "code"=>"150705002",
                "name" =>"KURBALOVASORA"
            ],
            [
                "code"=>"150705003",
                "name" =>"BARAPANSURY-II"
            ],
            [
                "code"=>"150705004",
                "name" =>"SILSURY"
            ],
            [
                "code"=>"150705005",
                "name" =>"UGALSURY"
            ],
            [
                "code"=>"150705006",
                "name" =>"CHOTAPANSURY"
            ],
            [
                "code"=>"150705007",
                "name" =>"GULSINGBAPSORA"
            ],
            [
                "code"=>"150705008",
                "name" =>"NAGDARASORA"
            ],
            [
                "code"=>"150705009",
                "name" =>"GERAKULUKSORA"
            ],
            [
                "code"=>"150705010",
                "name" =>"JARULSURY"
            ],
            [
                "code"=>"150705011",
                "name" =>"UGUDASURY 'S'"
            ],
            [
                "code"=>"150705012",
                "name" =>"KUKURDULEYA"
            ],
            [
                "code"=>"150705013",
                "name" =>"MAINABAPSORA"
            ],
            [
                "code"=>"150705014",
                "name" =>"MAINABAPSORA-II"
            ],
            [
                "code"=>"150705015",
                "name" =>"BARKABAKHALI-I"
            ],
            [
                "code"=>"150705016",
                "name" =>"JARUDUBOSORA"
            ],
            [
                "code"=>"150705017",
                "name" =>"RENGKASHYA"
            ],
            [
                "code"=>"150705018",
                "name" =>"FUTSURY"
            ],
            [
                "code"=>"150705019",
                "name" =>"LUDISORA"
            ],
            [
                "code"=>"150705020",
                "name" =>"LOKKISURY"
            ],
            [
                "code"=>"150705021",
                "name" =>"BOROITULI"
            ],
            [
                "code"=>"150705022",
                "name" =>"GERASURY"
            ],
            [
                "code"=>"150705023",
                "name" =>"BARUNASURY"
            ],
            [
                "code"=>"150705024",
                "name" =>"TUNGOSORA"
            ],
            [
                "code"=>"150705025",
                "name" =>"SANGRASURY"
            ],
            [
                "code"=>"150705026",
                "name" =>"BORAKABAKHALI-II"
            ],
            [
                "code"=>"150705027",
                "name" =>"JARULSURY-II"
            ],
            [
                "code"=>"150602044",
                "name" =>"TAWIPUI 'N'-I"
            ],
            [
                "code"=>"150602045",
                "name" =>"HMUNTLANG"
            ],
            [
                "code"=>"150603001",
                "name" =>"CHAWNGTE 'L'"
            ],
            [
                "code"=>"150603003",
                "name" =>"MAUTLANG"
            ],
            [
                "code"=>"150603004",
                "name" =>"VAISAM"
            ],
            [
                "code"=>"150603006",
                "name" =>"THANGTE"
            ],
            [
                "code"=>"150603008",
                "name" =>"RUALALUNG"
            ],
            [
                "code"=>"150603009",
                "name" =>"LUNGRANG `S`"
            ],
            [
                "code"=>"150603010",
                "name" =>"ZEHTET"
            ],
            [
                "code"=>"150603011",
                "name" =>"BUKNUAM"
            ],
            [
                "code"=>"150603012",
                "name" =>"CHITHAR"
            ],
            [
                "code"=>"150603013",
                "name" =>"PUKPUI"
            ],
            [
                "code"=>"150603014",
                "name" =>"ZOTLANG"
            ],
            [
                "code"=>"150603015",
                "name" =>"SERKAWN"
            ],
            [
                "code"=>"150603016",
                "name" =>"ZOHNUAI"
            ],
            [
                "code"=>"150603017",
                "name" =>"BAZAR"
            ],
            [
                "code"=>"150603018",
                "name" =>"COLLEGE VENG"
            ],
            [
                "code"=>"150603019",
                "name" =>"LUNGSEN"
            ],
            [
                "code"=>"150603020",
                "name" =>"RANGTE"
            ],
            [
                "code"=>"150603021",
                "name" =>"TIPPERAGHAT"
            ],
            [
                "code"=>"150603022",
                "name" =>"KHOJOISURI"
            ],
            [
                "code"=>"150603023",
                "name" =>"TABLABAGH"
            ],
            [
                "code"=>"150603024",
                "name" =>"SILKUR"
            ],
            [
                "code"=>"150603025",
                "name" =>"KALAPANI"
            ],
            [
                "code"=>"150603026",
                "name" =>"TUIKAWI"
            ],
            [
                "code"=>"150603027",
                "name" =>"PUANKHAI"
            ],
            [
                "code"=>"150603028",
                "name" =>"SAMUKSURI"
            ],
            [
                "code"=>"150603029",
                "name" =>"DIBLIBAGH"
            ],
            [
                "code"=>"150603030",
                "name" =>"TUICHAWNG"
            ],
            [
                "code"=>"150603031",
                "name" =>"ZODIN, TLABUNG"
            ],
            [
                "code"=>"150603032",
                "name" =>"TLABUNG"
            ],
            [
                "code"=>"150603033",
                "name" =>"NUNSURI"
            ],
            [
                "code"=>"150603034",
                "name" =>"HMUNDO"
            ],
            [
                "code"=>"150603035",
                "name" =>"CHAWILUNG"
            ],
            [
                "code"=>"150603036",
                "name" =>"MAUZAM"
            ],
            [
                "code"=>"150603038",
                "name" =>"MATISORA"
            ],
            [
                "code"=>"150603039",
                "name" =>"SUMASUMI"
            ],
            [
                "code"=>"150603040",
                "name" =>"MALSURI"
            ],
            [
                "code"=>"150603041",
                "name" =>"MARPARA SOUTH"
            ],
            [
                "code"=>"150604001",
                "name" =>"VENGLAI"
            ],
            [
                "code"=>"150604002",
                "name" =>"VENGHLUN"
            ],
            [
                "code"=>"150604003",
                "name" =>"RAHSIVENG"
            ],
            [
                "code"=>"150604004",
                "name" =>"HAURUANG"
            ],
            [
                "code"=>"150604005",
                "name" =>"RUNTUNG"
            ],
            [
                "code"=>"150604006",
                "name" =>"VANHNE"
            ],
            [
                "code"=>"150604007",
                "name" =>"THEHLEP"
            ],
            [
                "code"=>"150604008",
                "name" =>"THUAMPUI"
            ],
            [
                "code"=>"150604009",
                "name" =>"LUNGDAI 'S'"
            ],
            [
                "code"=>"150604010",
                "name" =>"SERTE"
            ],
            [
                "code"=>"150604011",
                "name" =>"SERTLANGPUI"
            ],
            [
                "code"=>"150604012",
                "name" =>"BUARPUI"
            ],
            [
                "code"=>"150604013",
                "name" =>"S. KHAWLEK"
            ],
            [
                "code"=>"150604014",
                "name" =>"DENGSUR"
            ],
            [
                "code"=>"150604015",
                "name" =>"BUNGTLANG 'W'"
            ],
            [
                "code"=>"150604016",
                "name" =>"KAWLHAWK"
            ],
            [
                "code"=>"150604017",
                "name" =>"THENHLUM"
            ],
            [
                "code"=>"150604019",
                "name" =>"KAWNPUI 'W'"
            ],
            [
                "code"=>"150604020",
                "name" =>"DARNGAWN 'W'"
            ],
            [
                "code"=>"150604021",
                "name" =>"CHANGPUI"
            ],
            [
                "code"=>"150604022",
                "name" =>"LUNGCHEM"
            ],
            [
                "code"=>"150604023",
                "name" =>"PHAIRUANGKAI"
            ],
            [
                "code"=>"150604025",
                "name" =>"BELTHEI"
            ],
            [
                "code"=>"150604026",
                "name" =>"PANGTLANG(NEW VUALMUAL)"
            ],
            [
                "code"=>"150604027",
                "name" =>"PUTLUNGASIH"
            ],
            [
                "code"=>"150604028",
                "name" =>"ZAWLPUI"
            ],
            [
                "code"=>"150604029",
                "name" =>"KAUCHHUAH"
            ],
            [
                "code"=>"150604030",
                "name" =>"BOLIA VENG"
            ],
            [
                "code"=>"150604032",
                "name" =>"TUISEN"
            ],
            [
                "code"=>"150604033",
                "name" =>"BUNGHMUN"
            ],
            [
                "code"=>"150604035",
                "name" =>"SESAWM"
            ],
            [
                "code"=>"150604036",
                "name" =>"LAISAWRAL"
            ],
            [
                "code"=>"150604037",
                "name" =>"OLD SACHAN"
            ],
            [
                "code"=>"150604038",
                "name" =>"SAZAIKAWN"
            ],
            [
                "code"=>"150601001",
                "name" =>"PANGZAWL"
            ],
            [
                "code"=>"150601002",
                "name" =>"RAWPUI"
            ],
            [
                "code"=>"150601003",
                "name" =>"LUNGMAWI"
            ],
            [
                "code"=>"150601004",
                "name" =>"HNAHTHIAL 'N'"
            ],
            [
                "code"=>"150601005",
                "name" =>"AITHUR"
            ],
            [
                "code"=>"150601006",
                "name" =>"HNAHTHIAL 'S'"
            ],
            [
                "code"=>"150601007",
                "name" =>"ROTLANG 'E'"
            ],
            [
                "code"=>"150601008",
                "name" =>"LEITE"
            ],
            [
                "code"=>"150601009",
                "name" =>"CHAWNGTUI 'S'"
            ],
            [
                "code"=>"150601010",
                "name" =>"TARPHO"
            ],
            [
                "code"=>"150601011",
                "name" =>"KHAWHRI"
            ],
            [
                "code"=>"150601012",
                "name" =>"THILTLANG"
            ],
            [
                "code"=>"150601013",
                "name" =>"S. VANLAIPHAI"
            ],
            [
                "code"=>"150601014",
                "name" =>"LUNGLENG 'S'"
            ],
            [
                "code"=>"150601015",
                "name" =>"MUALLIANPUI"
            ],
            [
                "code"=>"150601016",
                "name" =>"TUIPUI 'D'"
            ],
            [
                "code"=>"150601017",
                "name" =>"DARZO"
            ],
            [
                "code"=>"150601018",
                "name" =>"LUNGPUITLANG"
            ],
            [
                "code"=>"150601019",
                "name" =>"CHERHLUN"
            ],
            [
                "code"=>"150601020",
                "name" =>"NEW NGHARCHHIP"
            ],
            [
                "code"=>"150601021",
                "name" =>"NGHARCHHIP"
            ],
            [
                "code"=>"150601022",
                "name" =>"THINGSAI"
            ],
            [
                "code"=>"150601023",
                "name" =>"BUALPUI 'H'"
            ],
            [
                "code"=>"150601024",
                "name" =>"PHAILENG 'S'"
            ],
            [
                "code"=>"150602001",
                "name" =>"ELECTRIC VENG"
            ],
            [
                "code"=>"150602002",
                "name" =>"CHANMARI"
            ],
            [
                "code"=>"150602003",
                "name" =>"FARM VENG"
            ],
            [
                "code"=>"150602004",
                "name" =>"SALEM"
            ],
            [
                "code"=>"150602005",
                "name" =>"LUNGLAWN"
            ],
            [
                "code"=>"150602006",
                "name" =>"RAMTHAR"
            ],
            [
                "code"=>"150602007",
                "name" =>"SETHLUN"
            ],
            [
                "code"=>"150602008",
                "name" =>"LUANGMUAL"
            ],
            [
                "code"=>"150602009",
                "name" =>"THEIRIAT"
            ],
            [
                "code"=>"150602010",
                "name" =>"HAULAWNG"
            ],
            [
                "code"=>"150602013",
                "name" =>"MAUSEN"
            ],
            [
                "code"=>"150602014",
                "name" =>"MUALTHUAM 'N'"
            ],
            [
                "code"=>"150602015",
                "name" =>"SEKHUM"
            ],
            [
                "code"=>"150602016",
                "name" =>"RAMLAITUI"
            ],
            [
                "code"=>"150602017",
                "name" =>"KANGHMUN  'S'"
            ],
            [
                "code"=>"150602018",
                "name" =>"CHHIPPHIR"
            ],
            [
                "code"=>"150602019",
                "name" =>"ZOTE 'S'"
            ],
            [
                "code"=>"150602020",
                "name" =>"BUALPUI 'V'"
            ],
            [
                "code"=>"150602021",
                "name" =>"TAWIPUI 'S'"
            ],
            [
                "code"=>"150602022",
                "name" =>"MUALCHENG 'S'"
            ],
            [
                "code"=>"150602024",
                "name" =>"TAWIPUI 'N' - II"
            ],
            [
                "code"=>"150602025",
                "name" =>"THUALTHU"
            ],
            [
                "code"=>"150602026",
                "name" =>"MUALTHUAM 'S'"
            ],
            [
                "code"=>"150602027",
                "name" =>"KHAWMAWI"
            ],
            [
                "code"=>"150602028",
                "name" =>"THLENGANG"
            ],
            [
                "code"=>"150602029",
                "name" =>"MAMTE"
            ],
            [
                "code"=>"150602030",
                "name" =>"THINGFAL"
            ],
            [
                "code"=>"150602031",
                "name" =>"HRANGCHALKAWN"
            ],
            [
                "code"=>"150602032",
                "name" =>"LUNGPUIZAWL"
            ],
            [
                "code"=>"150602033",
                "name" =>"SAIREP"
            ],
            [
                "code"=>"150602034",
                "name" =>"HLUMTE"
            ],
            [
                "code"=>"150602035",
                "name" =>"ZOBAWK"
            ],
            [
                "code"=>"150602036",
                "name" =>"DAWN"
            ],
            [
                "code"=>"150602037",
                "name" =>"RALVAWNG"
            ],
            [
                "code"=>"150602039",
                "name" =>"BUALTE"
            ],
            [
                "code"=>"150602040",
                "name" =>"THAIZAWL"
            ],
            [
                "code"=>"150602041",
                "name" =>"CHENGPUI"
            ],
            [
                "code"=>"150602042",
                "name" =>"ZOTUITLANG"
            ],
            [
                "code"=>"150602043",
                "name" =>"CHENGPUI"
            ],
            [
                "code"=>"150101001",
                "name" =>"MAMIT BAZAR VENG"
            ],
            [
                "code"=>"150101002",
                "name" =>"MAMIT VENGHLUN"
            ],
            [
                "code"=>"150101003",
                "name" =>"N.SABUAL"
            ],
            [
                "code"=>"150101004",
                "name" =>"SUARHLIAP"
            ],
            [
                "code"=>"150101005",
                "name" =>"BAWNGVA"
            ],
            [
                "code"=>"150101006",
                "name" =>"DARLAK"
            ],
            [
                "code"=>"150101007",
                "name" =>"NEW MAMIT"
            ],
            [
                "code"=>"150101008",
                "name" =>"PHAIZAU"
            ],
            [
                "code"=>"150101009",
                "name" =>"K. SARALI"
            ],
            [
                "code"=>"150101010",
                "name" =>"KAWRTHAH"
            ],
            [
                "code"=>"150101011",
                "name" =>"RENGDIL"
            ],
            [
                "code"=>"150101012",
                "name" =>"TUIDAM"
            ],
            [
                "code"=>"150101013",
                "name" =>"KAWRTETHAWVENG"
            ],
            [
                "code"=>"150101016",
                "name" =>"THAIDAWR"
            ],
            [
                "code"=>"150101017",
                "name" =>"W. BUNGHMUN"
            ],
            [
                "code"=>"150101018",
                "name" =>"W. SERHMUN"
            ],
            [
                "code"=>"150101019",
                "name" =>"BAWRAI"
            ],
            [
                "code"=>"150101020",
                "name" =>"ZAWLNUAM THUAMPUI"
            ],
            [
                "code"=>"150101021",
                "name" =>"ZAWLNUAM VENGPUI"
            ],
            [
                "code"=>"150101022",
                "name" =>"ZAWLPUI"
            ],
            [
                "code"=>"150101024",
                "name" =>"BUNGTHUAM"
            ],
            [
                "code"=>"150101025",
                "name" =>"KANHMUN"
            ],
            [
                "code"=>"150101026",
                "name" =>"LUIMAWI"
            ],
            [
                "code"=>"150101027",
                "name" =>"THINGHLUN"
            ],
            [
                "code"=>"150101028",
                "name" =>"CHUHVEL"
            ],
            [
                "code"=>"150101029",
                "name" =>"HRIPHAW"
            ],
            [
                "code"=>"150101030",
                "name" =>"KANANTHAR"
            ],
            [
                "code"=>"150101031",
                "name" =>"SAIKHAWTHLIR"
            ],
            [
                "code"=>"150101032",
                "name" =>"ZAMUANG"
            ],
            [
                "code"=>"150101033",
                "name" =>"MAMIT HMARVENG"
            ],
            [
                "code"=>"150101038",
                "name" =>"HMUNTHATLANG"
            ],
            [
                "code"=>"150101043",
                "name" =>"MAMIT CHHIM VENG"
            ],
            [
                "code"=>"150101050",
                "name" =>"SERHMUN"
            ],
            [
                "code"=>"150101055",
                "name" =>"SIHTHIANG"
            ],
            [
                "code"=>"150101056",
                "name" =>"KOLALIAN"
            ],
            [
                "code"=>"150101057",
                "name" =>"BAZIRUNGPA"
            ],
            [
                "code"=>"150102001",
                "name" =>"HNAHVA"
            ],
            [
                "code"=>"150102002",
                "name" =>"SILSURY"
            ],
            [
                "code"=>"150102003",
                "name" =>"PUKZING VENGTHAR"
            ],
            [
                "code"=>"150102004",
                "name" =>"PUKZING"
            ],
            [
                "code"=>"150102005",
                "name" =>"CHHIPPUI"
            ],
            [
                "code"=>"150102006",
                "name" =>"LALLEN"
            ],
            [
                "code"=>"150102007",
                "name" =>"PARVATUI"
            ],
            [
                "code"=>"150102008",
                "name" =>"PHULDUNGSEI"
            ],
            [
                "code"=>"150102009",
                "name" =>"SAITHAH"
            ],
            [
                "code"=>"150102010",
                "name" =>"W.PHULPUI"
            ],
            [
                "code"=>"150102011",
                "name" =>"ANDERMANIK"
            ],
            [
                "code"=>"150102012",
                "name" =>"BELKHAI"
            ],
            [
                "code"=>"150102013",
                "name" =>"KHANTLANG"
            ],
            [
                "code"=>"150102015",
                "name" =>"TUIPUIBARI-I"
            ],
            [
                "code"=>"150102016",
                "name" =>"TUIPUIBARI-II"
            ],
            [
                "code"=>"150102017",
                "name" =>"TEIREI FOREST"
            ],
            [
                "code"=>"150102018",
                "name" =>"W.PHAILENG"
            ],
            [
                "code"=>"150102020",
                "name" =>"DAMPARENGPUI"
            ],
            [
                "code"=>"150102021",
                "name" =>"TUIRUM"
            ],
            [
                "code"=>"150102022",
                "name" =>"KHAWHNAI"
            ],
            [
                "code"=>"150102027",
                "name" =>"W.PHAILENG DINTHAR"
            ],
            [
                "code"=>"150102031",
                "name" =>"TARABONIA"
            ],
            [
                "code"=>"150102034",
                "name" =>"ZOPUI"
            ],
            [
                "code"=>"150102035",
                "name" =>"MARPARA"
            ],
            [
                "code"=>"150102036",
                "name" =>"HRUIDUK"
            ],
            [
                "code"=>"150103001",
                "name" =>"LENGTE"
            ],
            [
                "code"=>"150103002",
                "name" =>"HMUNPUI"
            ],
            [
                "code"=>"150103003",
                "name" =>"NGHALCHAWM"
            ],
            [
                "code"=>"150103004",
                "name" =>"SAITLAW"
            ],
            [
                "code"=>"150103005",
                "name" =>"W. SERZAWL"
            ],
            [
                "code"=>"150103006",
                "name" =>"DAMPUI"
            ],
            [
                "code"=>"150103007",
                "name" =>"DAPCHHUAH"
            ],
            [
                "code"=>"150103008",
                "name" =>"TUAHZAWL"
            ],
            [
                "code"=>"150103009",
                "name" =>"RAWPUICHHIP"
            ],
            [
                "code"=>"150104001",
                "name" =>"REIEK"
            ],
            [
                "code"=>"150104002",
                "name" =>"AILAWNG"
            ],
            [
                "code"=>"150104003",
                "name" =>"BAWNGTHAH"
            ],
            [
                "code"=>"150104004",
                "name" =>"BAWLTE"
            ],
            [
                "code"=>"150104005",
                "name" =>"CHUNGTLANG"
            ],
            [
                "code"=>"150104006",
                "name" =>"DARLUNG"
            ],
            [
                "code"=>"150104007",
                "name" =>"HREICHUK"
            ],
            [
                "code"=>"150104008",
                "name" =>"KANGHMUN"
            ],
            [
                "code"=>"150104009",
                "name" =>"KHAWRIHNIM"
            ],
            [
                "code"=>"150104010",
                "name" =>"LUNGPHUN"
            ],
            [
                "code"=>"150104011",
                "name" =>"S.SABUAL"
            ],
            [
                "code"=>"150104012",
                "name" =>"RULPUIHLIM"
            ],
            [
                "code"=>"150104013",
                "name" =>"W.LUNGDAR"
            ],
            [
                "code"=>"150801001",
                "name" =>"SIAHA VAIHPI - I"
            ],
            [
                "code"=>"150801002",
                "name" =>"MEISAVAIH 'E'"
            ],
            [
                "code"=>"150801003",
                "name" =>"MEISATLAH I"
            ],
            [
                "code"=>"150801005",
                "name" =>"THOSAIH"
            ],
            [
                "code"=>"150801006",
                "name" =>"NEW SAIHA 'W'"
            ],
            [
                "code"=>"150801007",
                "name" =>"N.SAIHA 'E'"
            ],
            [
                "code"=>"150801009",
                "name" =>"COUNCIL VAIH"
            ],
            [
                "code"=>"150801011",
                "name" =>"AMOTLAH"
            ],
            [
                "code"=>"150801012",
                "name" =>"THIAHRA"
            ],
            [
                "code"=>"150801013",
                "name" =>"TIPI FERRY"
            ],
            [
                "code"=>"150801014",
                "name" =>"TISOPI I"
            ],
            [
                "code"=>"150801015",
                "name" =>"RIASIKAH"
            ],
            [
                "code"=>"150801016",
                "name" =>"AMOBYU 'B'"
            ],
            [
                "code"=>"150801017",
                "name" =>"AMOBYU 'CH'"
            ],
            [
                "code"=>"150801018",
                "name" =>"THEIVA"
            ],
            [
                "code"=>"150801019",
                "name" =>"KAOCHAO 'E' I"
            ],
            [
                "code"=>"150801020",
                "name" =>"AMOBYU 'ZERO'"
            ],
            [
                "code"=>"150801021",
                "name" =>"CHHAOLO - I"
            ],
            [
                "code"=>"150801022",
                "name" =>"LOBO - I"
            ],
            [
                "code"=>"150801023",
                "name" =>"NOAOTLAH - I"
            ],
            [
                "code"=>"150801024",
                "name" =>"CHHAOLO - II"
            ],
            [
                "code"=>"150801025",
                "name" =>"IANA"
            ],
            [
                "code"=>"150801026",
                "name" =>"SIATA I"
            ],
            [
                "code"=>"150801029",
                "name" =>"NEW COLONY-I"
            ],
            [
                "code"=>"150801030",
                "name" =>"NEW COLONY-II"
            ],
            [
                "code"=>"150801031",
                "name" =>"NEW COLONY-III"
            ],
            [
                "code"=>"150801032",
                "name" =>"ECM VAIH"
            ],
            [
                "code"=>"150801036",
                "name" =>"COLLEGE VAIH-II"
            ],
            [
                "code"=>"150801037",
                "name" =>"SIAHATLAH-I"
            ],
            [
                "code"=>"150801038",
                "name" =>"SIAHATLAH-II"
            ],
            [
                "code"=>"150801040",
                "name" =>"NOAOTLAH - III"
            ],
            [
                "code"=>"150801041",
                "name" =>"COLLEGE VAIH-I"
            ],
            [
                "code"=>"150801043",
                "name" =>"SIAHATLAH-III"
            ],
            [
                "code"=>"150801046",
                "name" =>"MEISATLAH - II"
            ],
            [
                "code"=>"150801047",
                "name" =>"MEISAVAIH 'W'"
            ],
            [
                "code"=>"150801048",
                "name" =>"TISOPI II"
            ],
            [
                "code"=>"150801049",
                "name" =>"KAOCHAO 'E' II"
            ],
            [
                "code"=>"150801050",
                "name" =>"NOAOTLAH II"
            ],
            [
                "code"=>"150801051",
                "name" =>"SIATA II"
            ],
            [
                "code"=>"150802002",
                "name" =>"TIPA 'D' II"
            ],
            [
                "code"=>"150802003",
                "name" =>"TIPA 'L'"
            ],
            [
                "code"=>"150802004",
                "name" =>"SAIKAO"
            ],
            [
                "code"=>"150802005",
                "name" =>"N. SAIKAO"
            ],
            [
                "code"=>"150802006",
                "name" =>"THEIRI"
            ],
            [
                "code"=>"150802007",
                "name" =>"TISI"
            ],
            [
                "code"=>"150802008",
                "name" =>"ZYHNO"
            ],
            [
                "code"=>"150802009",
                "name" =>"LOTO VAIH"
            ],
            [
                "code"=>"150802010",
                "name" =>"SIATLAI"
            ],
            [
                "code"=>"150802011",
                "name" =>"AHMYPI"
            ],
            [
                "code"=>"150802012",
                "name" =>"KHOPAI"
            ],
            [
                "code"=>"150802013",
                "name" =>"LAKI"
            ],
            [
                "code"=>"150802014",
                "name" =>"LOPU"
            ],
            [
                "code"=>"150802018",
                "name" =>"MIEPU I"
            ],
            [
                "code"=>"150802019",
                "name" =>"PHURA 'S'"
            ],
            [
                "code"=>"150802020",
                "name" =>"PALA(LAWNGBAN)"
            ],
            [
                "code"=>"150802022",
                "name" =>"VAHIA"
            ],
            [
                "code"=>"150802023",
                "name" =>"KIASIE"
            ],
            [
                "code"=>"150802024",
                "name" =>"MAISA"
            ],
            [
                "code"=>"150802025",
                "name" =>"LATY"
            ],
            [
                "code"=>"150802026",
                "name" =>"NEW LATY"
            ],
            [
                "code"=>"150802027",
                "name" =>"TOKALO"
            ],
            [
                "code"=>"150802028",
                "name" =>"LODAWH"
            ],
            [
                "code"=>"150802029",
                "name" =>"LOMASU"
            ],
            [
                "code"=>"150802030",
                "name" =>"BYMARI"
            ],
            [
                "code"=>"150802031",
                "name" =>"CHAKHEI - I"
            ],
            [
                "code"=>"150802032",
                "name" =>"CHAPI-I"
            ],
            [
                "code"=>"150802033",
                "name" =>"MAWHRO"
            ],
            [
                "code"=>"150802034",
                "name" =>"SIASI"
            ],
            [
                "code"=>"150802035",
                "name" =>"CHHEIHLU"
            ],
            [
                "code"=>"150802037",
                "name" =>"CHAKHEITLAH"
            ],
            [
                "code"=>"150802038",
                "name" =>"TIPA 'V'-II"
            ],
            [
                "code"=>"150802039",
                "name" =>"TIPA 'V'-I"
            ],
            [
                "code"=>"150802041",
                "name" =>"CHAPI-II"
            ],
            [
                "code"=>"150802042",
                "name" =>"LORRAIN VILLES"
            ],
            [
                "code"=>"150802044",
                "name" =>"NAZARETH VAIH (CHAKHEI-II)"
            ],
            [
                "code"=>"150802045",
                "name" =>"CHAPUI-III"
            ],
            [
                "code"=>"150802046",
                "name" =>"PHURA 'N'"
            ],
            [
                "code"=>"150802047",
                "name" =>"TIPA D-I"
            ],
            [
                "code"=>"150802048",
                "name" =>"MIEPU II"
            ],
            [
                "code"=>"150802049",
                "name" =>"TIPA 'V' III"
            ],
            [
                "code"=>"150802050",
                "name" =>"LOPE"
            ],
            [
                "code"=>"150802051",
                "name" =>"SUPHA"
            ],
            [
                "code"=>"150802052",
                "name" =>"KHAIKHY"
            ],
            [
                "code"=>"150501001",
                "name" =>"SERCHHIP VC - 1"
            ],
            [
                "code"=>"150501002",
                "name" =>"SERCHHIP VC - 2"
            ],
            [
                "code"=>"150501003",
                "name" =>"SERCHHIP VC - 3"
            ],
            [
                "code"=>"150501004",
                "name" =>"SERCHHIP VC - 4"
            ],
            [
                "code"=>"150501005",
                "name" =>"NEW SERCHHIP"
            ],
            [
                "code"=>"150501006",
                "name" =>"CHHIAHTLANG"
            ],
            [
                "code"=>"150501007",
                "name" =>"SIALHAU"
            ],
            [
                "code"=>"150501008",
                "name" =>"VANCHENGTE"
            ],
            [
                "code"=>"150501009",
                "name" =>"THENZAWL 'E'"
            ],
            [
                "code"=>"150501010",
                "name" =>"THENZAWL 'W'"
            ],
            [
                "code"=>"150501011",
                "name" =>"THENZAWL VENGTHAR"
            ],
            [
                "code"=>"150501012",
                "name" =>"BUANGPUI"
            ],
            [
                "code"=>"150501014",
                "name" =>"NEIHLOH"
            ],
            [
                "code"=>"150501015",
                "name" =>"HRIANGTLANG"
            ],
            [
                "code"=>"150501017",
                "name" =>"SERCHHIP VC - 5"
            ],
            [
                "code"=>"150502001",
                "name" =>"N.VANLAIPHAI"
            ],
            [
                "code"=>"150502002",
                "name" =>"LUNGKAWLH"
            ],
            [
                "code"=>"150502003",
                "name" =>"BAWKTLANG"
            ],
            [
                "code"=>"150502004",
                "name" =>"MUALCHENG"
            ],
            [
                "code"=>"150502005",
                "name" =>"E.LUNGDAR"
            ],
            [
                "code"=>"150502006",
                "name" =>"LENG"
            ],
            [
                "code"=>"150502007",
                "name" =>"SAILULAK"
            ],
            [
                "code"=>"150502008",
                "name" =>"LUNGCHHUAN"
            ],
            [
                "code"=>"150502009",
                "name" =>"CHEKAWN"
            ],
            [
                "code"=>"150502010",
                "name" =>"SIALSIR"
            ],
            [
                "code"=>"150502011",
                "name" =>"KHAWLAILUNG"
            ],
            [
                "code"=>"150502012",
                "name" =>"PILER"
            ],
            [
                "code"=>"150502013",
                "name" =>"KEITUM"
            ],
            [
                "code"=>"150502014",
                "name" =>"BUNGTLANG"
            ],
            [
                "code"=>"150502015",
                "name" =>"HMUNZAWL"
            ],
            [
                "code"=>"150503001",
                "name" =>"LUNGPHO"
            ],
            [
                "code"=>"150503002",
                "name" =>"RULLAM"
            ],
            [
                "code"=>"150503003",
                "name" =>"CHHINGCHHIP"
            ],
            [
                "code"=>"150503004",
                "name" =>"CHHINGCHHIP MUALPUI"
            ],
            [
                "code"=>"150503006",
                "name" =>"HMUNTHA"
            ],
            [
                "code"=>"150503007",
                "name" =>"KHAWBEL"
            ],
            [
                "code"=>"150503008",
                "name" =>"NGENTIANG"
            ],
            [
                "code"=>"150503009",
                "name" =>"THENTLANG"
            ],
            [
                "code"=>"150503011",
                "name" =>"HUALTU"
            ],
            [
                "code"=>"150503012",
                "name" =>"THINGLIAN"
            ],
            [
                "code"=>"150503013",
                "name" =>"BAKTAWNG"
            ],
            [
                "code"=>"150503014",
                "name" =>"BAKTAWNG TLANGNUAM"
            ],
            [
                "code"=>"150503015",
                "name" =>"KHUMTUNG"
            ],
            [
                "code"=>"150503016",
                "name" =>"HMAWNG KAWN"
            ],
            [
                "code"=>"150503018",
                "name" =>"BUHKANGKAWN"
            ],
        ];
    }

    private function getClusters()
    {
        return [
            [
                "code" => "1503010001",
                "name" => "CHALTLANG"
            ],
            [
                "code" => "1503010002",
                "name" => "RAMHLUN"
            ],
            [
                "code" => "1503010003",
                "name" => "ELECTRIC"
            ],
            [
                "code" => "1503010004",
                "name" => "ARMED VENG "
            ],
            [
                "code" => "1503020001",
                "name" => "DAWRPUI"
            ],
            [
                "code" => "1503020002",
                "name" => "VENGHLUI"
            ],
            [
                "code" => "1503020003",
                "name" => "BETHLEHEM"
            ],
            [
                "code" => "1503020004",
                "name" => "THAKTHING"
            ],
            [
                "code" => "1503030001",
                "name" => "THINGSULTHLIAH "
            ],
            [
                "code" => "1503030002",
                "name" => "TLUNGVEL"
            ],
            [
                "code" => "1503040001",
                "name" => "THUAMPUI"
            ],
            [
                "code" => "1503040002",
                "name" => "ZEMABAWK"
            ],
            [
                "code" => "1503040003",
                "name" => "TUIRIAL"
            ],
            [
                "code" => "1503040004",
                "name" => "TAWITLANG"
            ],
            [
                "code" => "1503050001",
                "name" => "SAITUAL"
            ],
            [
                "code" => "1503050002",
                "name" => "TAMDIL"
            ],
            [
                "code" => "1503050003",
                "name" => "PHULLEN"
            ],
            [
                "code" => "1503050004",
                "name" => "TUIVAI"
            ],
            [
                "code" => "1503060001",
                "name" => "CHANMARI"
            ],
            [
                "code" => "1503060002",
                "name" => "VAIVAKAWN"
            ],
            [
                "code" => "1503060003",
                "name" => "DINTHAR"
            ],
            [
                "code" => "1503060004",
                "name" => "KHATLA"
            ],
            [
                "code" => "1503060005",
                "name" => "MISSION VENG"
            ],
            [
                "code" => "1503060006",
                "name" => "KULIKAWN"
            ],
            [
                "code" => "1503060007",
                "name" => "HLIMEN"
            ],
            [
                "code" => "1503070001",
                "name" => "LAMCHHIP"
            ],
            [
                "code" => "1503070002",
                "name" => "MUALLUNGTHU"
            ],
            [
                "code" => "1503070003",
                "name" => "MELRIAT"
            ],
            [
                "code" => "1503070004",
                "name" => "SUMSUIH"
            ],
            [
                "code" => "1503070005",
                "name" => "SATEEK"
            ],
            [
                "code" => "1503070006",
                "name" => "SIALSUK"
            ],
            [
                "code" => "1503080001",
                "name" => "BUNGKAWN"
            ],
            [
                "code" => "1503080002",
                "name" => "LUANGMUAL"
            ],
            [
                "code" => "1503080003",
                "name" => "CHAWNPUI"
            ],
            [
                "code" => "1503080004",
                "name" => "TANHRIL"
            ],
            [
                "code" => "1503080005",
                "name" => "RANGVAMUAL"
            ],
            [
                "code" => "1503080006",
                "name" => "SAIRANG"
            ],
            [
                "code" => "1503090001",
                "name" => "BAWNGKAWN"
            ],
            [
                "code" => "1503090002",
                "name" => "DURTLANG"
            ],
            [
                "code" => "1503090003",
                "name" => "SIHPHIR"
            ],
            [
                "code" => "1503090004",
                "name" => "SESAWNG"
            ],
            [
                "code" => "1503090005",
                "name" => "SAIPUM"
            ],
            [
                "code" => "1503100001",
                "name" => "DARLAWN"
            ],
            [
                "code" => "1503100002",
                "name" => "RATU"
            ],
            [
                "code" => "1503100003",
                "name" => "NEW VERVEK"
            ],
            [
                "code" => "1503100004",
                "name" => "SAKAWRDAI"
            ],
            [
                "code" => "1503100005",
                "name" => "VAITIN"
            ],
            [
                "code" => "1503100006",
                "name" => "ZOHMUN"
            ],
            [
                "code" => "1503110001",
                "name" => "KHAWRUHLIAN"
            ],
            [
                "code" => "1503110002",
                "name" => "KHANPUI"
            ],
            [
                "code" => "1503110003",
                "name" => "E.PHAILENG"
            ],
            [
                "code" => "1503110004",
                "name" => "SAWLENG"
            ],
            [
                "code" => "1503110005",
                "name" => "SUANGPUILAWN"
            ],
            [
                "code" => "1503110006",
                "name" => "VANBAWNG"
            ],
            [
                "code" => "1504010001",
                "name" => "CHAMPHAI A"
            ],
            [
                "code" => "1504010002",
                "name" => "CHAMPHAI B"
            ],
            [
                "code" => "1504010003",
                "name" => "RUANTLANG"
            ],
            [
                "code" => "1504010004",
                "name" => "ZOTE"
            ],
            [
                "code" => "1504010005",
                "name" => "HNAHLAN"
            ],
            [
                "code" => "1504010006",
                "name" => "TUALCHENG"
            ],
            [
                "code" => "1504020001",
                "name" => "KHAWZAWL A"
            ],
            [
                "code" => "1504020002",
                "name" => "KHAWZAWL B"
            ],
            [
                "code" => "1504020003",
                "name" => "RABUNG"
            ],
            [
                "code" => "1504020004",
                "name" => "KHAWHAI"
            ],
            [
                "code" => "1504020005",
                "name" => "SIALHAWK"
            ],
            [
                "code" => "1504030001",
                "name" => "KHAWBUNG"
            ],
            [
                "code" => "1504030002",
                "name" => "KELKANG"
            ],
            [
                "code" => "1504030003",
                "name" => "KHUANGLENG"
            ],
            [
                "code" => "1504030004",
                "name" => "BUNGZUNG"
            ],
            [
                "code" => "1504030005",
                "name" => "VAPHAI"
            ],
            [
                "code" => "1504030006",
                "name" => "FARKAWN"
            ],
            [
                "code" => "1504040001",
                "name" => "NGOPA"
            ],
            [
                "code" => "1504040002",
                "name" => "TEIKHANG"
            ],
            [
                "code" => "1504040003",
                "name" => "HLIAPPUI"
            ],
            [
                "code" => "1504040004",
                "name" => "KAWLKULH"
            ],
            [
                "code" => "1504040005",
                "name" => "PUILO"
            ],
            [
                "code" => "1504040006",
                "name" => "N.E.KHAWDUNGSEI"
            ],
            [
                "code" => "1502010001",
                "name" => "KOLASIB"
            ],
            [
                "code" => "1502010002",
                "name" => "BAIRABI"
            ],
            [
                "code" => "1502010003",
                "name" => "KAWNPUI"
            ],
            [
                "code" => "1502010004",
                "name" => "LUNGDAI"
            ],
            [
                "code" => "1502010005",
                "name" => "BUKPUI"
            ],
            [
                "code" => "1502010006",
                "name" => "NISAPUI"
            ],
            [
                "code" => "1502010007",
                "name" => "VAIRENGTE"
            ],
            [
                "code" => "1502010008",
                "name" => "BILKHAWTHLIR"
            ],
            [
                "code" => "1502010009",
                "name" => "BAIRABI"
            ],
            [
                "code" => "1502010010",
                "name" => "BUHCHANGPHAI"
            ],
            [
                "code" => "1502020001",
                "name" => "THINGDAWL (SETHAWN)"
            ],
            [
                "code" => "1502020002",
                "name" => "KAWNPUI"
            ],
            [
                "code" => "1502020003",
                "name" => "LUNGDAI"
            ],
            [
                "code" => "1502020004",
                "name" => "BUKPUI"
            ],
            [
                "code" => "1502020005",
                "name" => "NISAPUI"
            ],
            [
                "code" => "1502020006",
                "name" => "MARPARA"
            ],
            [
                "code" => "1502030001",
                "name" => "VAIRENGTE"
            ],
            [
                "code" => "1502030002",
                "name" => "BILKHAWTHLIR"
            ],
            [
                "code" => "1502030003",
                "name" => "BUHCHANG"
            ],
            [
                "code" => "1502040001",
                "name" => "REIEK"
            ],
            [
                "code" => "1502040002",
                "name" => "DARLUNG"
            ],
            [
                "code" => "1507010001",
                "name" => "CRC BUNGTLANG"
            ],
            [
                "code" => "1507010002",
                "name" => "CRC TUITHUMHNAR"
            ],
            [
                "code" => "1507010003",
                "name" => "CRC M.KAWNPUI"
            ],
            [
                "code" => "1507010004",
                "name" => "CRC VATHUAMPUI"
            ],
            [
                "code" => "1507010005",
                "name" => "CRC SAKEILUI"
            ],
            [
                "code" => "1507010006",
                "name" => "CRC CHAWNGTE"
            ],
            [
                "code" => "1507020001",
                "name" => "CRC THINGKAH"
            ],
            [
                "code" => "1507020002",
                "name" => "CRC BAZAR"
            ],
            [
                "code" => "1507020003",
                "name" => "CRC PAITHAR"
            ],
            [
                "code" => "1507030001",
                "name" => "CRC SANGAU"
            ],
            [
                "code" => "1507030002",
                "name" => "CRC LUNGPHER"
            ],
            [
                "code" => "1507030003",
                "name" => "CRC LUNGTIAN"
            ],
            [
                "code" => "1507040001",
                "name" => "CRC KAMALANAGAR"
            ],
            [
                "code" => "1507040002",
                "name" => "CRC LONGPUIGHAT"
            ],
            [
                "code" => "1507040003",
                "name" => "CRC NEW JAGANASURY"
            ],
            [
                "code" => "1507040004",
                "name" => "CRC PARVA"
            ],
            [
                "code" => "1507050001",
                "name" => "CRC BARAPANSURY"
            ],
            [
                "code" => "1507050002",
                "name" => "CRC UGUDASURY 'S'"
            ],
            [
                "code" => "1507050003",
                "name" => "CRC MAINABAPSORA"
            ],
            [
                "code" => "1506010001",
                "name" => "PANGZAWL"
            ],
            [
                "code" => "1506010002",
                "name" => "HNAHTHIAL"
            ],
            [
                "code" => "1506010003",
                "name" => "S. VANLAIPHAI"
            ],
            [
                "code" => "1506010004",
                "name" => "CHERHLUN"
            ],
            [
                "code" => "1506010005",
                "name" => "TARPHO"
            ],
            [
                "code" => "1506020001",
                "name" => "LUNGLEI"
            ],
            [
                "code" => "1506020002",
                "name" => "HAULAWNG"
            ],
            [
                "code" => "1506020003",
                "name" => "TAWIPUI"
            ],
            [
                "code" => "1506020004",
                "name" => "ZOBAWK"
            ],
            [
                "code" => "1506020005",
                "name" => "THEIRIAT"
            ],
            [
                "code" => "1506020006",
                "name" => "CHHIPPHIR"
            ],
            [
                "code" => "1506030001",
                "name" => "BAZAR"
            ],
            [
                "code" => "1506030002",
                "name" => "TIPPERAGHAT"
            ],
            [
                "code" => "1506030003",
                "name" => "CHAWNGTE"
            ],
            [
                "code" => "1506030004",
                "name" => "TLABUNG"
            ],
            [
                "code" => "1506030005",
                "name" => "LUNGSEN"
            ],
            [
                "code" => "1506030006",
                "name" => "TUICHAWNG"
            ],
            [
                "code" => "1506030007",
                "name" => "VAISAM"
            ],
            [
                "code" => "1506030008",
                "name" => "KALAPANI"
            ],
            [
                "code" => "1506040001",
                "name" => "VENGLAI"
            ],
            [
                "code" => "1506040002",
                "name" => "BUARPUI"
            ],
            [
                "code" => "1506040003",
                "name" => "PHAIRUANGKAI"
            ],
            [
                "code" => "1506040004",
                "name" => "BUNGHMUN"
            ],
            [
                "code" => "1506040005",
                "name" => "VANHNE"
            ],
            [
                "code" => "1506040006",
                "name" => "THENHLUM"
            ],
            [
                "code" => "1501010001",
                "name" => "MAMIT"
            ],
            [
                "code" => "1501010002",
                "name" => "MAMIT VENGHLUN"
            ],
            [
                "code" => "1501010003",
                "name" => "MAMIT BAZAR VENG"
            ],
            [
                "code" => "1501010004",
                "name" => "MAMIT CHHIM VENG"
            ],
            [
                "code" => "1501010005",
                "name" => "NEW MAMIT"
            ],
            [
                "code" => "1501010006",
                "name" => "KAWRTETHAWVENG"
            ],
            [
                "code" => "1501010007",
                "name" => "KAWRTHAH"
            ],
            [
                "code" => "1501010008",
                "name" => "ZAMUANG"
            ],
            [
                "code" => "1501010009",
                "name" => "ZAWLNUAM"
            ],
            [
                "code" => "1501010010",
                "name" => "KANHMUN"
            ],
            [
                "code" => "1501010011",
                "name" => "MAMIT"
            ],
            [
                "code" => "1501010012",
                "name" => "SAIKHAWTHLIR"
            ],
            [
                "code" => "1501020001",
                "name" => "W.PHAILENG"
            ],
            [
                "code" => "1501020002",
                "name" => "DAMPARENGPUI"
            ],
            [
                "code" => "1501020003",
                "name" => "TUIPUIBARI"
            ],
            [
                "code" => "1501020004",
                "name" => "PHULDUNGSEI"
            ],
            [
                "code" => "1501020005",
                "name" => "PUKZING"
            ],
            [
                "code" => "1501020006",
                "name" => "MARPARA"
            ],
            [
                "code" => "1501030001",
                "name" => "RAWPUICHHIP"
            ],
            [
                "code" => "1501030002",
                "name" => "LENGTE"
            ],
            [
                "code" => "1501040001",
                "name" => "REIEK"
            ],
            [
                "code" => "1501040002",
                "name" => "DARLUNG"
            ],
            [
                "code" => "1501040003",
                "name" => "KANGHMUN"
            ],
            [
                "code" => "1501IP0001",
                "name" => "RAWPUICHHIP"
            ],
            [
                "code" => "1508010001",
                "name" => "OLD SAIHA"
            ],
            [
                "code" => "1508010002",
                "name" => "CHHAOLO"
            ],
            [
                "code" => "1508010003",
                "name" => "N.SAIHA"
            ],
            [
                "code" => "1508010004",
                "name" => "MAUBAWK"
            ],
            [
                "code" => "1508010005",
                "name" => "RAWMIBAWK"
            ],
            [
                "code" => "1508020001",
                "name" => "TUIPANG"
            ],
            [
                "code" => "1508020002",
                "name" => "ZAWNGLING"
            ],
            [
                "code" => "1508020003",
                "name" => "LAKI"
            ],
            [
                "code" => "1508020004",
                "name" => "PHURA"
            ],
            [
                "code" => "1508020005",
                "name" => "TONGKALONG"
            ],
            [
                "code" => "1508020006",
                "name" => "CHAKHANG"
            ],
            [
                "code" => "1505010001",
                "name" => "SERCHHIP NORTH"
            ],
            [
                "code" => "1505010002",
                "name" => "CHHIAHTLANG"
            ],
            [
                "code" => "1505010003",
                "name" => "THENZAWL"
            ],
            [
                "code" => "1505010004",
                "name" => "SERCHHIP SOUTH"
            ],
            [
                "code" => "1505020001",
                "name" => "N.VANLAIPHAI"
            ],
            [
                "code" => "1505020002",
                "name" => "E.LUNGDAR"
            ],
            [
                "code" => "1505020003",
                "name" => "KHAWLAILUNG"
            ],
            [
                "code" => "1505020004",
                "name" => "BUNGTLANG"
            ],
            [
                "code" => "1505030001",
                "name" => "LUNGPHO"
            ],
            [
                "code" => "1505030002",
                "name" => "HMUNTHA"
            ],
            [
                "code" => "1505030003",
                "name" => "CHHINGCHHIP"
            ],
            [
                "code" => "1505030005",
                "name" => "KHUMTUNG"
            ],
        ];
    }

    private function getConstituencies(){
        return [
            [
                "code" => "1503001",
                "name" => "Aizawl North-I"
            ],
            [
                "code" => "1503002",
                "name" => "Aizawl North-II"
            ],
            [
                "code" => "1503003",
                "name" => "Aizawl North-III"
            ],
            [
                "code" => "1503004",
                "name" => "Aizawl East-I"
            ],
            [
                "code" => "1503005",
                "name" => "Aizawl East-II"
            ],
            [
                "code" => "1503006",
                "name" => "Aizawl West-I"
            ],
            [
                "code" => "1503007",
                "name" => "Aizawl West-II"
            ],
            [
                "code" => "1503008",
                "name" => "Aizawl West-III"
            ],
            [
                "code" => "1503009",
                "name" => "Aizawl South-I"
            ],
            [
                "code" => "1503010",
                "name" => "Aizawl South-II"
            ],
            [
                "code" => "1503011",
                "name" => "Aizawl South-III"
            ],
            [
                "code" => "1503012",
                "name" => "Tuivawl"
            ],
            [
                "code" => "1503013",
                "name" => "Chalfilh"
            ],
            [
                "code" => "1503014",
                "name" => "Tawi"
            ],
            [
                "code" => "1503015",
                "name" => "Dampa"
            ],
            [
                "code" => "1503016",
                "name" => "Mamit"
            ],
            [
                "code" => "1503017",
                "name" => "Tuivawl"
            ],
            [
                "code" => "1503018",
                "name" => "Kawnpui"
            ],
            [
                "code" => "1503019",
                "name" => "Suangpuilawn"
            ],
            [
                "code" => "1503020",
                "name" => "Chalfilh"
            ],
            [
                "code" => "1503021",
                "name" => "Suangpuilawn"
            ],
            [
                "code" => "1503022",
                "name" => "Tuikum"
            ],
            [
                "code" => "1504001",
                "name" => "CHAMPHAI NORTH"
            ],
            [
                "code" => "1504002",
                "name" => "CHAMPHAI SOUTH"
            ],
            [
                "code" => "1504003",
                "name" => "TUICHANG"
            ],
            [
                "code" => "1504004",
                "name" => "EAST TUIPUI"
            ],
            [
                "code" => "1504005",
                "name" => "LENGTENG"
            ],
            [
                "code" => "1504006",
                "name" => "EAST TUIPUI BLOCK"
            ],
            [
                "code" => "1504007",
                "name" => "LENGTENG"
            ],
            [
                "code" => "1504008",
                "name" => "TUICHANG"
            ],
            [
                "code" => "1502001",
                "name" => "KOLASIB"
            ],
            [
                "code" => "1502002",
                "name" => "SERLUI"
            ],
            [
                "code" => "1502003",
                "name" => "TUIRIAL"
            ],
            [
                "code" => "1507001",
                "name" => "Lawngtlai East Constituency"
            ],
            [
                "code" => "1507002",
                "name" => "Lawngtlai West Constituency"
            ],
            [
                "code" => "1507003",
                "name" => "Tuichawng Constituency"
            ],
            [
                "code" => "1506001",
                "name" => "SOUTH TUIPUI"
            ],
            [
                "code" => "1506002",
                "name" => "LUNGLEI NORTH"
            ],
            [
                "code" => "1506003",
                "name" => "LUNGLEI EAST"
            ],
            [
                "code" => "1506004",
                "name" => "LUNGLEI WEST"
            ],
            [
                "code" => "1506005",
                "name" => "LUNGLEI SOUTH"
            ],
            [
                "code" => "1506006",
                "name" => "THORANG"
            ],
            [
                "code" => "1506007",
                "name" => "WEST TUIPUI"
            ],
            [
                "code" => "1501001",
                "name" => "MAMIT"
            ],
            [
                "code" => "1501002",
                "name" => "ZAWLNUAM"
            ],
            [
                "code" => "1501003",
                "name" => "PHULDUNGSEI"
            ],
            [
                "code" => "1501004",
                "name" => "KAWRTHAH"
            ],
            [
                "code" => "1501005",
                "name" => "HACHHEK"
            ],
            [
                "code" => "1501006",
                "name" => "DAMPA"
            ],
            [
                "code" => "1501007",
                "name" => "THORANG"
            ],
            [
                "code" => "1508001",
                "name" => "Saiha"
            ],
            [
                "code" => "1508002",
                "name" => "Palak"
            ],
            [
                "code" => "1508003",
                "name" => "West - I"
            ],
            [
                "code" => "1508004",
                "name" => "West - II"
            ],
            [
                "code" => "1508005",
                "name" => "South - I"
            ],
            [
                "code" => "1508006",
                "name" => "South - II"
            ],
            [
                "code" => "1508008",
                "name" => "Sateek"
            ],
            [
                "code" => "1508010",
                "name" => "Tlungvel"
            ],
            [
                "code" => "1508011",
                "name" => "Serchhip"
            ],
            [
                "code" => "1508012",
                "name" => "Ratu"
            ],
            [
                "code" => "1508013",
                "name" => "Saitual"
            ],
            [
                "code" => "1508014",
                "name" => "North - I"
            ],
            [
                "code" => "1508015",
                "name" => "North - II"
            ],
            [
                "code" => "1508016",
                "name" => "Mamit"
            ],
            [
                "code" => "1508017",
                "name" => "Tuivawl"
            ],
            [
                "code" => "1508018",
                "name" => "Kawnpui"
            ],
            [
                "code" => "1508019",
                "name" => "Suangpuilawn"
            ],
            [
                "code" => "1508020",
                "name" => "Chalfilh"
            ],
            [
                "code" => "1508021",
                "name" => "Suangpuilawn"
            ],
            [
                "code" => "1508022",
                "name" => "Palak"
            ],
            [
                "code" => "1505001",
                "name" => "SERCHHIP"
            ],
            [
                "code" => "1505002",
                "name" => "TUIKUM"
            ],
            [
                "code" => "1505003",
                "name" => "HRANGTURZO"
            ],
        ];
    }

    private function getEducationalBlocks(){
        return [
            [
                "code" => "150301",
                "name" =>"SDEO, Aizawl East"
            ],
            [
                "code" => "150302",
                "name" =>"SDEO, Aizawl West"
            ],
            [
                "code" => "150303",
                "name" =>"SDEO, Aizawl South"
            ],
            [
                "code" => "150304",
                "name" =>"SDEO, Saitual"
            ],
            [
                "code" => "150305",
                "name" =>"SDEO, Darlawn"
            ],
            [
                "code" => "150306",
                "name" =>"DEO, Aizawl"
            ],
            [
                "code" => "150401",
                "name" =>"SDEO, Champhai"
            ],
            [
                "code" => "150402",
                "name" =>"SDEO, Khawzawl"
            ],
            [
                "code" => "150403",
                "name" =>"DEO, Champhai"
            ],
            [
                "code" => "150201",
                "name" =>"SDEO, Kolasib"
            ],
            [
                "code" => "150202",
                "name" =>"SDEO, Kawnpui"
            ],
            [
                "code" => "150203",
                "name" =>"DEO, Kolasib"
            ],
            [
                "code" => "150701",
                "name" =>"EO, CADC"
            ],
            [
                "code" => "150704",
                "name" =>"EO, LADC"
            ],
            [
                "code" => "150705",
                "name" =>"EO, Lawngtlai"
            ],
            [
                "code" => "150601",
                "name" =>"SDEO, Lunglei North"
            ],
            [
                "code" => "150602",
                "name" =>"SDEO, Lunglei South"
            ],
            [
                "code" => "150603",
                "name" =>"SDEO, Lungsen"
            ],
            [
                "code" => "150604",
                "name" =>"SDEO, Hnahthial "
            ],
            [
                "code" => "150605",
                "name" =>"SDEO, Thenzawl"
            ],
            [
                "code" => "150606",
                "name" =>"DEO, Lunglei"
            ],
            [
                "code" => "150101",
                "name" =>"SDEO, Mamit"
            ],
            [
                "code" => "150102",
                "name" =>"SDEO, Kawrthah"
            ],
            [
                "code" => "150103",
                "name" =>"SDEO, West Phaileng"
            ],
            [
                "code" => "150104",
                "name" =>"SDEO, Aizawl West"
            ],
            [
                "code" => "150105",
                "name" =>"SDEO, Aizawl East"
            ],
            [
                "code" => "150106",
                "name" =>"DEO, Mamit"
            ],
            [
                "code" => "150107",
                "name" =>"DEO, Aizawl"
            ],
            [
                "code" => "150801",
                "name" =>"MADC"
            ],
            [
                "code" => "150802",
                "name" =>"DEO, Saiha"
            ],
            [
                "code" => "150501",
                "name" =>"SDEO, Serchhip"
            ],
            [
                "code" => "150502",
                "name" =>"SDEO, N. Vanlaiphai"
            ],
            [
                "code" => "150503",
                "name" =>"SDEO, Thenzawl"
            ],
            [
                "code" => "150504",
                "name" =>"DEO, Serchhip"
            ]
        ];
    }

    private function getHabitations(){
        return [
            [
                "code" => "15030100101",
                "name" => "LAIPUITLANG"
            ],
            [
                "code" => "15030100201",
                "name" => "CHALTLANG"
            ],
            [
                "code" => "15030100301",
                "name" => "RAMHLUN NORTH "
            ],
            [
                "code" => "15030100401",
                "name" => "RAMHLUN VENGTHAR"
            ],
            [
                "code" => "15030100501",
                "name" => "RAMHLUN VENGLAI"
            ],
            [
                "code" => "15030100601",
                "name" => "RAMHLUN SPORT COMPLEX"
            ],
            [
                "code" => "15030100701",
                "name" => "RAMHLUN SOUTH "
            ],
            [
                "code" => "15030100801",
                "name" => "RAMTHAR NORTH "
            ],
            [
                "code" => "15030100901",
                "name" => "RAMTHAR"
            ],
            [
                "code" => "15030101001",
                "name" => "AIZAWL VENGLAI"
            ],
            [
                "code" => "15030101101",
                "name" => "ELECTRIC"
            ],
            [
                "code" => "15030101201",
                "name" => "CHHINGA VENG "
            ],
            [
                "code" => "15030101301",
                "name" => "ARMED VENG "
            ],
            [
                "code" => "15030101401",
                "name" => "ARMED VENG SOUTH "
            ],
            [
                "code" => "15030101501",
                "name" => "CHITE"
            ],
            [
                "code" => "15030101801",
                "name" => "CHALTLANG NORTH"
            ],
            [
                "code" => "15030200101",
                "name" => "ZARKAWT"
            ],
            [
                "code" => "15030200201",
                "name" => "DAWRPUI"
            ],
            [
                "code" => "15030200301",
                "name" => "SARON"
            ],
            [
                "code" => "15030200401",
                "name" => "TUITHIANG"
            ],
            [
                "code" => "15030200501",
                "name" => "VENGHLUI"
            ],
            [
                "code" => "15030200601",
                "name" => "REPUBLIC"
            ],
            [
                "code" => "15030200701",
                "name" => "UPPER REPUBLIC"
            ],
            [
                "code" => "15030200801",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "15030200901",
                "name" => "ITI"
            ],
            [
                "code" => "15030201001",
                "name" => "MUALPUI"
            ],
            [
                "code" => "15030201101",
                "name" => "BETHLEHEM"
            ],
            [
                "code" => "15030201201",
                "name" => "BETHLEHEM VENGTHLANG"
            ],
            [
                "code" => "15030201301",
                "name" => "THAKTHING"
            ],
            [
                "code" => "15030201401",
                "name" => "DAM VENG"
            ],
            [
                "code" => "15030201501",
                "name" => "VENGHNUAI"
            ],
            [
                "code" => "15030201601",
                "name" => "SALEM"
            ],
            [
                "code" => "15030201701",
                "name" => "REPUBLIC VENGTHLANG"
            ],
            [
                "code" => "15030300101",
                "name" => "TUIKHURHLU"
            ],
            [
                "code" => "15030300201",
                "name" => "SELING"
            ],
            [
                "code" => "15030300301",
                "name" => "THINGSULTHLIAH "
            ],
            [
                "code" => "15030300401",
                "name" => "THINGSUL TLANGNUAM"
            ],
            [
                "code" => "15030300501",
                "name" => "DARLAWNG"
            ],
            [
                "code" => "15030300601",
                "name" => "TLUNGVEL"
            ],
            [
                "code" => "15030300701",
                "name" => "PHULMAWI"
            ],
            [
                "code" => "15030400101",
                "name" => "MUANNA VENG"
            ],
            [
                "code" => "15030400201",
                "name" => "ZUANGTUI"
            ],
            [
                "code" => "15030400301",
                "name" => "THUAMPUI"
            ],
            [
                "code" => "15030400401",
                "name" => "ZEMABAWK"
            ],
            [
                "code" => "15030400501",
                "name" => "ZEMABAWK 'N'"
            ],
            [
                "code" => "15030400601",
                "name" => "FALKLAND"
            ],
            [
                "code" => "15030400701",
                "name" => "BUNGBANGLA"
            ],
            [
                "code" => "15030400801",
                "name" => "TUIRIAL AIRFIELD"
            ],
            [
                "code" => "15030400901",
                "name" => "TUIRIAL LEIKAI"
            ],
            [
                "code" => "15030401001",
                "name" => "KEIFANG"
            ],
            [
                "code" => "15030401101",
                "name" => "RULCHAWM"
            ],
            [
                "code" => "15030401201",
                "name" => "RUALLUNG"
            ],
            [
                "code" => "15030401301",
                "name" => "MUALPHENG"
            ],
            [
                "code" => "15030401401",
                "name" => "TAWIZO"
            ],
            [
                "code" => "15030401501",
                "name" => "LENCHIM"
            ],
            [
                "code" => "15030401601",
                "name" => "MAITE"
            ],
            [
                "code" => "15030401801",
                "name" => "BERAWLUI"
            ],
            [
                "code" => "15030401901",
                "name" => "TNT"
            ],
            [
                "code" => "15030500101",
                "name" => "SAITUAL"
            ],
            [
                "code" => "15030500201",
                "name" => "SIHFA"
            ],
            [
                "code" => "15030500301",
                "name" => "DILKHAN"
            ],
            [
                "code" => "15030500401",
                "name" => "TUALBUNG"
            ],
            [
                "code" => "15030500501",
                "name" => "BUHBAN"
            ],
            [
                "code" => "15030500601",
                "name" => "N.LUNGPHER"
            ],
            [
                "code" => "15030500701",
                "name" => "THANGLAILUNG"
            ],
            [
                "code" => "15030500801",
                "name" => "PHULLEN"
            ],
            [
                "code" => "15030500901",
                "name" => "LUANGPAWN"
            ],
            [
                "code" => "15030501001",
                "name" => "ZAWNGIN"
            ],
            [
                "code" => "15030501101",
                "name" => "PHUAIBUANG"
            ],
            [
                "code" => "15030501201",
                "name" => "KHAWLIAN"
            ],
            [
                "code" => "15030501301",
                "name" => "N.E.TLANGNUAM"
            ],
            [
                "code" => "15030501401",
                "name" => "DAIDO"
            ],
            [
                "code" => "15030600101",
                "name" => "CHANMARI"
            ],
            [
                "code" => "15030600201",
                "name" => "CHANAMRI WEST"
            ],
            [
                "code" => "15030600301",
                "name" => "DINTHAR"
            ],
            [
                "code" => "15030600401",
                "name" => "DAWRPUI VENGTHAR"
            ],
            [
                "code" => "15030600501",
                "name" => "HUNTHAR"
            ],
            [
                "code" => "15030600601",
                "name" => "EDENTHAR"
            ],
            [
                "code" => "15030600701",
                "name" => "KHATLA"
            ],
            [
                "code" => "15030600801",
                "name" => "KHATLA SOUTH"
            ],
            [
                "code" => "15030600901",
                "name" => "KULIKAWN"
            ],
            [
                "code" => "15030601001",
                "name" => "LUNGLENG I"
            ],
            [
                "code" => "15030601101",
                "name" => "MELTHUM"
            ],
            [
                "code" => "15030601201",
                "name" => "MISSION VENGTHLANG"
            ],
            [
                "code" => "15030601301",
                "name" => "MISSION VENG"
            ],
            [
                "code" => "15030601401",
                "name" => "N LUNGLENG"
            ],
            [
                "code" => "15030601501",
                "name" => "SAIKHAMAKAWN"
            ],
            [
                "code" => "15030601601",
                "name" => "SAMTLANG"
            ],
            [
                "code" => "15030601701",
                "name" => "HLIMEN"
            ],
            [
                "code" => "15030601801",
                "name" => "TLANGNUAM"
            ],
            [
                "code" => "15030601901",
                "name" => "TUIKUAL NORTH"
            ],
            [
                "code" => "15030602001",
                "name" => "TUIKUAL SOUTH"
            ],
            [
                "code" => "15030602101",
                "name" => "VAIVAKAWN"
            ],
            [
                "code" => "15030602201",
                "name" => "TUIKHUAHTLANG"
            ],
            [
                "code" => "15030602301",
                "name" => "MODEL VENG"
            ],
            [
                "code" => "15030602401",
                "name" => "KHATLA EAST"
            ],
            [
                "code" => "15030700101",
                "name" => "AIBAWK"
            ],
            [
                "code" => "15030700202",
                "name" => "CHAWILUNG"
            ],
            [
                "code" => "15030700301",
                "name" => "CHAMRING"
            ],
            [
                "code" => "15030700401",
                "name" => "FALKAWN"
            ],
            [
                "code" => "15030700501",
                "name" => "HMUIFANG"
            ],
            [
                "code" => "15030700601",
                "name" => "HUALNGOHMUN"
            ],
            [
                "code" => "15030700701",
                "name" => "KELSIH"
            ],
            [
                "code" => "15030700801",
                "name" => "LAMCHHIP"
            ],
            [
                "code" => "15030700901",
                "name" => "LUNGSAI"
            ],
            [
                "code" => "15030701001",
                "name" => "LUNGSEI"
            ],
            [
                "code" => "15030701101",
                "name" => "MAUBUANG"
            ],
            [
                "code" => "15030701201",
                "name" => "MELRIAT"
            ],
            [
                "code" => "15030701301",
                "name" => "MUALLUNGTHU"
            ],
            [
                "code" => "15030701401",
                "name" => "PHULPUI"
            ],
            [
                "code" => "15030701501",
                "name" => "SAILAM"
            ],
            [
                "code" => "15030701601",
                "name" => "SAMLUKHAI"
            ],
            [
                "code" => "15030701701",
                "name" => "SATEEK"
            ],
            [
                "code" => "15030701801",
                "name" => "SIALSUK"
            ],
            [
                "code" => "15030701901",
                "name" => "SUMSUIH"
            ],
            [
                "code" => "15030702001",
                "name" => "TACHHIP"
            ],
            [
                "code" => "15030702101",
                "name" => "THIAK"
            ],
            [
                "code" => "15030800101",
                "name" => "BUNGKAWN"
            ],
            [
                "code" => "15030800201",
                "name" => "BUNGKAWN VENGTHAR"
            ],
            [
                "code" => "15030800301",
                "name" => "NURSERY"
            ],
            [
                "code" => "15030800401",
                "name" => "CHAWLHHMUN"
            ],
            [
                "code" => "15030800501",
                "name" => "TUIVAMIT"
            ],
            [
                "code" => "15030800601",
                "name" => "CENTRAL JAIL"
            ],
            [
                "code" => "15030800701",
                "name" => "CHAWNPUI"
            ],
            [
                "code" => "15030800801",
                "name" => "GOVT. COMPLEX"
            ],
            [
                "code" => "15030800901",
                "name" => "KANAN"
            ],
            [
                "code" => "15030801001",
                "name" => "LAWIPU"
            ],
            [
                "code" => "15030801101",
                "name" => "LENGPUI"
            ],
            [
                "code" => "15030801201",
                "name" => "LUANGMUAL"
            ],
            [
                "code" => "15030801301",
                "name" => "MAUBAWK"
            ],
            [
                "code" => "15030801401",
                "name" => "PHUNCHAWNG"
            ],
            [
                "code" => "15030801501",
                "name" => "LUNGVERH"
            ],
            [
                "code" => "15030801601",
                "name" => "RANGVAMUAL"
            ],
            [
                "code" => "15030801701",
                "name" => "SAKAWRTUICHHUN"
            ],
            [
                "code" => "15030801801",
                "name" => "SAIRANG"
            ],
            [
                "code" => "15030801901",
                "name" => "SAIRANG DINTHAR"
            ],
            [
                "code" => "15030802001",
                "name" => "SAIRANG SIHHMUI"
            ],
            [
                "code" => "15030802101",
                "name" => "TANHRIL"
            ],
            [
                "code" => "15030802201",
                "name" => "ZONUAM"
            ],
            [
                "code" => "15030802301",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "15030802401",
                "name" => "AICS "
            ],
            [
                "code" => "15030900101",
                "name" => "BAWNGKAWN"
            ],
            [
                "code" => "15030900201",
                "name" => "BAWNGKAWN CHHIMVENG"
            ],
            [
                "code" => "15030900301",
                "name" => "DURTLANG LEITAN"
            ],
            [
                "code" => "15030900401",
                "name" => "DURTLANG"
            ],
            [
                "code" => "15030900501",
                "name" => "DURTLANG NORTH"
            ],
            [
                "code" => "15030900601",
                "name" => "SELESIH"
            ],
            [
                "code" => "15030900701",
                "name" => "MUTHI"
            ],
            [
                "code" => "15030900801",
                "name" => "SIHPHIR"
            ],
            [
                "code" => "15030900901",
                "name" => "SIHPHIR VENGHLUN"
            ],
            [
                "code" => "15030901001",
                "name" => "NAUSEL"
            ],
            [
                "code" => "15030901101",
                "name" => "SESAWNG"
            ],
            [
                "code" => "15030901102",
                "name" => "MUALMAM"
            ],
            [
                "code" => "15031000101",
                "name" => "DARLAWN"
            ],
            [
                "code" => "15031000201",
                "name" => "N.SERZAWL"
            ],
            [
                "code" => "15031000301",
                "name" => "SUNHLUCHHIP"
            ],
            [
                "code" => "15031000401",
                "name" => "SAILUTAR"
            ],
            [
                "code" => "15031000501",
                "name" => "RATU"
            ],
            [
                "code" => "15031000601",
                "name" => "LUNGSUM"
            ],
            [
                "code" => "15031000701",
                "name" => "NEW VERVEK"
            ],
            [
                "code" => "15031000801",
                "name" => "DAMDIAI"
            ],
            [
                "code" => "15031000901",
                "name" => "THINGSAT"
            ],
            [
                "code" => "15031001001",
                "name" => "SAKAWRDAI"
            ],
            [
                "code" => "15031001101",
                "name" => "N.KHAWDUNGSEI"
            ],
            [
                "code" => "15031001201",
                "name" => "VAITIN"
            ],
            [
                "code" => "15031001301",
                "name" => "KHAWPUAR"
            ],
            [
                "code" => "15031001401",
                "name" => "UPPER SAKAWRDAI"
            ],
            [
                "code" => "15031001501",
                "name" => "ZOHMUN"
            ],
            [
                "code" => "15031001601",
                "name" => "PALSANG"
            ],
            [
                "code" => "15031001701",
                "name" => "MAUCHAR"
            ],
            [
                "code" => "15031001801",
                "name" => "N.TINGHMUN"
            ],
            [
                "code" => "15031001901",
                "name" => "ZOKHAWTHIANG"
            ],
            [
                "code" => "15031100101",
                "name" => "KHAWRUHLIAN"
            ],
            [
                "code" => "15031100201",
                "name" => "HMUNNGHAK"
            ],
            [
                "code" => "15031100301",
                "name" => "KHANPUI"
            ],
            [
                "code" => "15031100401",
                "name" => "LAILAK"
            ],
            [
                "code" => "15031100501",
                "name" => "PEHLAWN"
            ],
            [
                "code" => "15031100601",
                "name" => "E.PHAILENG"
            ],
            [
                "code" => "15031100701",
                "name" => "KEPRAN"
            ],
            [
                "code" => "15031100801",
                "name" => "SAWLENG"
            ],
            [
                "code" => "15031100901",
                "name" => "CHHANCHHUAHNA KHAWPUI"
            ],
            [
                "code" => "15031101001",
                "name" => "SUANGPUILAWN"
            ],
            [
                "code" => "15031101101",
                "name" => "LAMHERH"
            ],
            [
                "code" => "15031101201",
                "name" => "VANBAWNG"
            ],
            [
                "code" => "15031101301",
                "name" => "N.KHAWLEK"
            ],
            [
                "code" => "15040100101",
                "name" => "VENGSANG"
            ],
            [
                "code" => "15040100102",
                "name" => "KEIFANG TLANG"
            ],
            [
                "code" => "15040100201",
                "name" => "KAHRAWT VENG"
            ],
            [
                "code" => "15040100301",
                "name" => "VENGTHLANG"
            ],
            [
                "code" => "15040100401",
                "name" => "KANAN"
            ],
            [
                "code" => "15040100501",
                "name" => "ELECTRIC VENG"
            ],
            [
                "code" => "15040100601",
                "name" => "VENGLAI"
            ],
            [
                "code" => "15040100701",
                "name" => "BETHEL"
            ],
            [
                "code" => "15040100801",
                "name" => "VENGTHAR"
            ],
            [
                "code" => "15040100802",
                "name" => "TLANGNUAM"
            ],
            [
                "code" => "15040100901",
                "name" => "HMUNHMELTHA"
            ],
            [
                "code" => "15040101001",
                "name" => "N.KHAWBUNG"
            ],
            [
                "code" => "15040101101",
                "name" => "CHHUNGTE"
            ],
            [
                "code" => "15040101201",
                "name" => "TUIPUI"
            ],
            [
                "code" => "15040101301",
                "name" => "N.CHAMPHAI"
            ],
            [
                "code" => "15040101401",
                "name" => "RUANTLANG"
            ],
            [
                "code" => "15040101501",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "15040101601",
                "name" => "MELBUK"
            ],
            [
                "code" => "15040101701",
                "name" => "ZOKHAWTHAR"
            ],
            [
                "code" => "15040101801",
                "name" => "MUALKAWI"
            ],
            [
                "code" => "15040101901",
                "name" => "ZOTE"
            ],
            [
                "code" => "15040102001",
                "name" => "TLANGSAM"
            ],
            [
                "code" => "15040102101",
                "name" => "NGUR"
            ],
            [
                "code" => "15040102201",
                "name" => "HNAHLAN"
            ],
            [
                "code" => "15040102202",
                "name" => "SARAWN VENG"
            ],
            [
                "code" => "15040102301",
                "name" => "DILTLANG"
            ],
            [
                "code" => "15040102401",
                "name" => "VAIKHAWTLANG"
            ],
            [
                "code" => "15040102501",
                "name" => "VAPAR"
            ],
            [
                "code" => "15040102601",
                "name" => "KHUANGPHAH"
            ],
            [
                "code" => "15040102701",
                "name" => "TUALCHENG"
            ],
            [
                "code" => "15040102801",
                "name" => "MURLEN"
            ],
            [
                "code" => "15040102901",
                "name" => "LUNGPHUNLIAN"
            ],
            [
                "code" => "15040103001",
                "name" => "PAMCHUNG"
            ],
            [
                "code" => "15040103101",
                "name" => "DINTHAR VENG"
            ],
            [
                "code" => "15040103201",
                "name" => "VENGTHLANG NORTH"
            ],
            [
                "code" => "15040103301",
                "name" => "ZION VENG"
            ],
            [
                "code" => "15040200101",
                "name" => "HERMON, ELECTRIC, KHAWPUITAN "
            ],
            [
                "code" => "15040200201",
                "name" => "VENGTHAR"
            ],
            [
                "code" => "15040200301",
                "name" => "DINTHAR"
            ],
            [
                "code" => "15040200401",
                "name" => "ZAINGEN, ZUCHHIP"
            ],
            [
                "code" => "15040200501",
                "name" => "DARNGAWN, LUNGVAR"
            ],
            [
                "code" => "15040200502",
                "name" => "2ND IR HEADQUARTERS"
            ],
            [
                "code" => "15040200601",
                "name" => "TUALPUI"
            ],
            [
                "code" => "15040200701",
                "name" => "NGAIZAWL"
            ],
            [
                "code" => "15040200801",
                "name" => "ARRO"
            ],
            [
                "code" => "15040200901",
                "name" => "HMUNCHENG"
            ],
            [
                "code" => "15040201001",
                "name" => "TUALTE"
            ],
            [
                "code" => "15040201101",
                "name" => "NEIHDAWN"
            ],
            [
                "code" => "15040201201",
                "name" => "CHAWNGTLAI"
            ],
            [
                "code" => "15040201301",
                "name" => "RABUNG"
            ],
            [
                "code" => "15040201401",
                "name" => "KHUALEN"
            ],
            [
                "code" => "15040201501",
                "name" => "AIDUZAWL"
            ],
            [
                "code" => "15040201601",
                "name" => "KHAWHAI"
            ],
            [
                "code" => "15040201701",
                "name" => "CHALRANG"
            ],
            [
                "code" => "15040201702",
                "name" => "CHALRANG MEL-2"
            ],
            [
                "code" => "15040201801",
                "name" => "N.CHALRANG"
            ],
            [
                "code" => "15040201901",
                "name" => "VANGTLANG"
            ],
            [
                "code" => "15040202001",
                "name" => "LUNGTAN"
            ],
            [
                "code" => "15040202101",
                "name" => "SIALHAWK"
            ],
            [
                "code" => "15040202201",
                "name" => "BIATE"
            ],
            [
                "code" => "15040202301",
                "name" => "RIANGTLEI"
            ],
            [
                "code" => "15040202401",
                "name" => "TLANGPUI"
            ],
            [
                "code" => "15040202501",
                "name" => "TLANGMAWI"
            ],
            [
                "code" => "15040202601",
                "name" => "HERMON VENG"
            ],
            [
                "code" => "15040202701",
                "name" => "KAWNZAR VENG"
            ],
            [
                "code" => "15040300101",
                "name" => "KELKANG"
            ],
            [
                "code" => "15040300201",
                "name" => "DILKAWN"
            ],
            [
                "code" => "15040300301",
                "name" => "BUANG"
            ],
            [
                "code" => "15040300401",
                "name" => "HRUAIKAWN"
            ],
            [
                "code" => "15040300501",
                "name" => "N.HRUAIKAWN"
            ],
            [
                "code" => "15040300601",
                "name" => "KHUANGLENG"
            ],
            [
                "code" => "15040300701",
                "name" => "SAZEP"
            ],
            [
                "code" => "15040300702",
                "name" => "THINGHRANGKAWN"
            ],
            [
                "code" => "15040300801",
                "name" => "SESIH"
            ],
            [
                "code" => "15040300901",
                "name" => "BULFEKZAWL"
            ],
            [
                "code" => "15040301001",
                "name" => "VANGCHHIA"
            ],
            [
                "code" => "15040301101",
                "name" => "LEISENZO"
            ],
            [
                "code" => "15040301201",
                "name" => "LIANPUI"
            ],
            [
                "code" => "15040301301",
                "name" => "BUNGZUNG"
            ],
            [
                "code" => "15040301401",
                "name" => "VANZAU"
            ],
            [
                "code" => "15040301501",
                "name" => "LEITHUM"
            ],
            [
                "code" => "15040301601",
                "name" => "ZAWNGTETUI"
            ],
            [
                "code" => "15040301701",
                "name" => "KHAWBUNG"
            ],
            [
                "code" => "15040301801",
                "name" => "KHUANGTHING"
            ],
            [
                "code" => "15040301901",
                "name" => "ZAWLSEI"
            ],
            [
                "code" => "15040302001",
                "name" => "DUNGTLANG"
            ],
            [
                "code" => "15040302101",
                "name" => "VAPHAI"
            ],
            [
                "code" => "15040302102",
                "name" => "SAIKHUMPHAI"
            ],
            [
                "code" => "15040302201",
                "name" => "SAMTHANG"
            ],
            [
                "code" => "15040302202",
                "name" => "N.SAMTHANG"
            ],
            [
                "code" => "15040302401",
                "name" => "CHAWNGTUI 'E'"
            ],
            [
                "code" => "15040302501",
                "name" => "FARKAWN"
            ],
            [
                "code" => "15040302601",
                "name" => "KHANKAWN"
            ],
            [
                "code" => "15040302701",
                "name" => "THEKPUI"
            ],
            [
                "code" => "15040302801",
                "name" => "THEKTE"
            ],
            [
                "code" => "15040400101",
                "name" => "NGOPA"
            ],
            [
                "code" => "15040400201",
                "name" => "N.E.KHAWDUNGSEI"
            ],
            [
                "code" => "15040400301",
                "name" => "CHIAHPUI"
            ],
            [
                "code" => "15040400401",
                "name" => "KHAWKAWN"
            ],
            [
                "code" => "15040400501",
                "name" => "LAMZAWL"
            ],
            [
                "code" => "15040400601",
                "name" => "TEIKHANG"
            ],
            [
                "code" => "15040400701",
                "name" => "MIMBUNG"
            ],
            [
                "code" => "15040400801",
                "name" => "KAWLBEM"
            ],
            [
                "code" => "15040400901",
                "name" => "HRIANGHMUN"
            ],
            [
                "code" => "15040401001",
                "name" => "SELAM"
            ],
            [
                "code" => "15040401101",
                "name" => "HLIAPPUI"
            ],
            [
                "code" => "15040401201",
                "name" => "SAICHAL"
            ],
            [
                "code" => "15040401301",
                "name" => "PAWLRANG"
            ],
            [
                "code" => "15040401401",
                "name" => "CHANGZAWL"
            ],
            [
                "code" => "15040401501",
                "name" => "KAWLKULH"
            ],
            [
                "code" => "15040401503",
                "name" => "TAITAWKAWN"
            ],
            [
                "code" => "15040401601",
                "name" => "DULTE"
            ],
            [
                "code" => "15040401701",
                "name" => "PUILO"
            ],
            [
                "code" => "15040401801",
                "name" => "CHHAWRTUI"
            ],
            [
                "code" => "15040401901",
                "name" => "VANKAL"
            ],
            [
                "code" => "15040402001",
                "name" => "VANCHENGPUI"
            ],
            [
                "code" => "15020100101",
                "name" => "KOLASIB I"
            ],
            [
                "code" => "15020100102",
                "name" => "VENGTHAR"
            ],
            [
                "code" => "15020100201",
                "name" => "KOLASIB II"
            ],
            [
                "code" => "15020100301",
                "name" => "KOLASIB III"
            ],
            [
                "code" => "15020100401",
                "name" => "SHALOM VENG"
            ],
            [
                "code" => "15020100402",
                "name" => "KOLASIB IV"
            ],
            [
                "code" => "15020100501",
                "name" => "RENGTEKAWNPUI"
            ],
            [
                "code" => "15020100502",
                "name" => "TUITHAVENG"
            ],
            [
                "code" => "15020100503",
                "name" => "KOLASIB V"
            ],
            [
                "code" => "15020100601",
                "name" => "KOLASIB VI"
            ],
            [
                "code" => "15020100701",
                "name" => "KOLASIB VII"
            ],
            [
                "code" => "15020100801",
                "name" => "BUILUM"
            ],
            [
                "code" => "15020100901",
                "name" => "ZODIN"
            ],
            [
                "code" => "15020100902",
                "name" => "MEIDUM"
            ],
            [
                "code" => "15020101001",
                "name" => "LENHMUIKAWN"
            ],
            [
                "code" => "15020101002",
                "name" => "ZOPHAI"
            ],
            [
                "code" => "15020101003",
                "name" => "BAIRABI"
            ],
            [
                "code" => "15020101101",
                "name" => "S.CHHIMLUANG"
            ],
            [
                "code" => "15020101102",
                "name" => "PANGBALKAWN"
            ],
            [
                "code" => "15020101201",
                "name" => "RENGTEKAWN"
            ],
            [
                "code" => "15020101301",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "15020103801",
                "name" => "Project Veng"
            ],
            [
                "code" => "15020200101",
                "name" => "MUALVUM"
            ],
            [
                "code" => "15020200102",
                "name" => "KANAAN"
            ],
            [
                "code" => "15020200103",
                "name" => "KAWNPUI II"
            ],
            [
                "code" => "15020200104",
                "name" => "CHANMARI"
            ],
            [
                "code" => "15020200201",
                "name" => "QUARY VENG "
            ],
            [
                "code" => "15020200202",
                "name" => "KAWNPUI I"
            ],
            [
                "code" => "15020200203",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "15020200301",
                "name" => "FARM VENG"
            ],
            [
                "code" => "15020200303",
                "name" => "SETHAWN"
            ],
            [
                "code" => "15020200304",
                "name" => "THINGDAWL"
            ],
            [
                "code" => "15020200401",
                "name" => "BUALPUI N"
            ],
            [
                "code" => "15020200501",
                "name" => "ZANLAWN"
            ],
            [
                "code" => "15020200601",
                "name" => "SERKHAN"
            ],
            [
                "code" => "15020200701",
                "name" => "LUNGDAI"
            ],
            [
                "code" => "15020200801",
                "name" => "NISAPUI"
            ],
            [
                "code" => "15020200901",
                "name" => "LUNGMUAT"
            ],
            [
                "code" => "15020201001",
                "name" => "N CHALTLANG"
            ],
            [
                "code" => "15020201101",
                "name" => "BUKPUI"
            ],
            [
                "code" => "15020201201",
                "name" => "THINGTHELH"
            ],
            [
                "code" => "15020201301",
                "name" => "N HLIMEN"
            ],
            [
                "code" => "15020201401",
                "name" => "KHAMRANG"
            ],
            [
                "code" => "15020201501",
                "name" => "MUALKHANG"
            ],
            [
                "code" => "15020201601",
                "name" => "DILZAU"
            ],
            [
                "code" => "15020201602",
                "name" => "HORTOKI"
            ],
            [
                "code" => "15020201603",
                "name" => "TIAUZAU"
            ],
            [
                "code" => "15020300101",
                "name" => "CHEMPHAI"
            ],
            [
                "code" => "15020300102",
                "name" => "BILKHAWTHLIR N"
            ],
            [
                "code" => "15020300103",
                "name" => "KHARZAWL"
            ],
            [
                "code" => "15020300201",
                "name" => "N CHAWNPUI"
            ],
            [
                "code" => "15020300301",
                "name" => "BUHCHANGPHAI"
            ],
            [
                "code" => "15020300401",
                "name" => "SAIHAPUI 'K'"
            ],
            [
                "code" => "15020300501",
                "name" => "PHAISEN"
            ],
            [
                "code" => "15020300601",
                "name" => "N CHHIMLUANG"
            ],
            [
                "code" => "15020300701",
                "name" => "VAIRENGTE I"
            ],
            [
                "code" => "15020300801",
                "name" => "VAIRENGTE II"
            ],
            [
                "code" => "15020300901",
                "name" => "CHITE"
            ],
            [
                "code" => "15020300902",
                "name" => "BUARCHEP"
            ],
            [
                "code" => "15020300903",
                "name" => "VAKULTUI"
            ],
            [
                "code" => "15020300904",
                "name" => "PHAINUAM"
            ],
            [
                "code" => "15020301001",
                "name" => "SAIHAPUI 'V'"
            ],
            [
                "code" => "15020301101",
                "name" => "BUKVANNEI"
            ],
            [
                "code" => "15020301201",
                "name" => "THINGLIAN"
            ],
            [
                "code" => "15020301301",
                "name" => "BILKHAWTHLIR S"
            ],
            [
                "code" => "15020301401",
                "name" => "SAIPUM"
            ],
            [
                "code" => "15020301501",
                "name" => "SAIPHAI"
            ],
            [
                "code" => "15070100101",
                "name" => "BUNGTLANG 'S'"
            ],
            [
                "code" => "15070100201",
                "name" => "HMUNNUAM"
            ],
            [
                "code" => "15070100301",
                "name" => "DILTLANG"
            ],
            [
                "code" => "15070100401",
                "name" => "CHAWNGTELUI"
            ],
            [
                "code" => "15070100501",
                "name" => "KAWRTHINDENG"
            ],
            [
                "code" => "15070100601",
                "name" => "SAIKHAWTHLIR"
            ],
            [
                "code" => "15070100701",
                "name" => "TUITHUMHNAR"
            ],
            [
                "code" => "15070100801",
                "name" => "LUNGHAUKA"
            ],
            [
                "code" => "15070100901",
                "name" => "HMAWNGBU"
            ],
            [
                "code" => "15070101001",
                "name" => "HMAWNGBUCHHUAH"
            ],
            [
                "code" => "15070101101",
                "name" => "SABUALTLANG"
            ],
            [
                "code" => "15070101201",
                "name" => "KAKICHHUAH"
            ],
            [
                "code" => "15070101301",
                "name" => "HRUITEZAWL"
            ],
            [
                "code" => "15070101401",
                "name" => "NGENGPUITLANG"
            ],
            [
                "code" => "15070101501",
                "name" => "TUIDANGTLANG"
            ],
            [
                "code" => "15070101701",
                "name" => "M.KAWNPUI"
            ],
            [
                "code" => "15070101801",
                "name" => "SAIBAWH"
            ],
            [
                "code" => "15070101901",
                "name" => "CHIKHURLUI"
            ],
            [
                "code" => "15070102001",
                "name" => "NGHALIMLUI"
            ],
            [
                "code" => "15070102101",
                "name" => "VASEIKAI"
            ],
            [
                "code" => "15070102201",
                "name" => "FANGFARLUI"
            ],
            [
                "code" => "15070102301",
                "name" => "DAMLUI"
            ],
            [
                "code" => "15070102501",
                "name" => "VATHUAMPUI"
            ],
            [
                "code" => "15070102503",
                "name" => "KAWNKHUA"
            ],
            [
                "code" => "15070102601",
                "name" => "CHAMDURTLANG"
            ],
            [
                "code" => "15070102701",
                "name" => "CHAMUR 'P'"
            ],
            [
                "code" => "15070102801",
                "name" => "BOLISORA"
            ],
            [
                "code" => "15070102901",
                "name" => "MAUTLANG "
            ],
            [
                "code" => "15070103001",
                "name" => "TUICHAWNGTLANG"
            ],
            [
                "code" => "15070103101",
                "name" => "NGUNLINGKHUA"
            ],
            [
                "code" => "15070103301",
                "name" => "SAKEILUI"
            ],
            [
                "code" => "15070103401",
                "name" => "JOGNASURY"
            ],
            [
                "code" => "15070103501",
                "name" => "SUMSILUI"
            ],
            [
                "code" => "15070103601",
                "name" => "KARLUI"
            ],
            [
                "code" => "15070103701",
                "name" => "PANDAWNGLUI"
            ],
            [
                "code" => "15070103801",
                "name" => "CHAWNGTE 'P'"
            ],
            [
                "code" => "15070103901",
                "name" => "HMUNLAI"
            ],
            [
                "code" => "15070104001",
                "name" => "MUALBU 'L'"
            ],
            [
                "code" => "15070104101",
                "name" => "TUIKHURLUI"
            ],
            [
                "code" => "15070104201",
                "name" => "DARNAMTLANG"
            ],
            [
                "code" => "15070104301",
                "name" => "T.DUMZAU"
            ],
            [
                "code" => "15070104401",
                "name" => "ZOCHACHHUAH"
            ],
            [
                "code" => "15070104501",
                "name" => "LAITLANG"
            ],
            [
                "code" => "15070104601",
                "name" => "DUMZAUTLANG"
            ],
            [
                "code" => "15070104701",
                "name" => "TUISENTLANG"
            ],
            [
                "code" => "15070104801",
                "name" => "SEDAILUI"
            ],
            [
                "code" => "15070104901",
                "name" => "SEKULH"
            ],
            [
                "code" => "15070105001",
                "name" => "NGENGPUICHHUAH"
            ],
            [
                "code" => "15070105101",
                "name" => "NGENGPUIKAI"
            ],
            [
                "code" => "15070105301",
                "name" => "BUNGTLANG 'S'-II"
            ],
            [
                "code" => "15070105401",
                "name" => "KARLUI-II"
            ],
            [
                "code" => "15070105501",
                "name" => "KAWNKHUA"
            ],
            [
                "code" => "15070200101",
                "name" => "THINGKAH"
            ],
            [
                "code" => "15070200201",
                "name" => "A.O.C"
            ],
            [
                "code" => "15070200301",
                "name" => "LAWNGTLAI-III"
            ],
            [
                "code" => "15070200401",
                "name" => "LAWNGTLAI VENGPUI"
            ],
            [
                "code" => "15070200501",
                "name" => "MAMPUI"
            ],
            [
                "code" => "15070200601",
                "name" => "BAZAR"
            ],
            [
                "code" => "15070200701",
                "name" => "COUNCIL VENG"
            ],
            [
                "code" => "15070200801",
                "name" => "CHANDMARY-I"
            ],
            [
                "code" => "15070200901",
                "name" => "CHANDMARY-II"
            ],
            [
                "code" => "15070201001",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "15070201101",
                "name" => "CHAWNHU"
            ],
            [
                "code" => "15070201301",
                "name" => "PAITHAR"
            ],
            [
                "code" => "15070201401",
                "name" => "SAIKAH"
            ],
            [
                "code" => "15070201501",
                "name" => "CHAWNTLANGPUI"
            ],
            [
                "code" => "15070201601",
                "name" => "SIHTLANGPUI"
            ],
            [
                "code" => "15070201701",
                "name" => "KAWLCHAW 'W'"
            ],
            [
                "code" => "15070201801",
                "name" => "R.VANHNE"
            ],
            [
                "code" => "15070201901",
                "name" => "RULKUAL"
            ],
            [
                "code" => "15070202001",
                "name" => "SAIZAWH 'E'"
            ],
            [
                "code" => "15070202101",
                "name" => "ELECTRIC VENG"
            ],
            [
                "code" => "15070202301",
                "name" => "LAWNGTLAI VENGPUI-II"
            ],
            [
                "code" => "15070300101",
                "name" => "SANGAU-I"
            ],
            [
                "code" => "15070300201",
                "name" => "SANGAU-II"
            ],
            [
                "code" => "15070300301",
                "name" => "PANGKHUA"
            ],
            [
                "code" => "15070300401",
                "name" => "THALTLANG"
            ],
            [
                "code" => "15070300501",
                "name" => "SENTETFIANG"
            ],
            [
                "code" => "15070300601",
                "name" => "LUNGPHER"
            ],
            [
                "code" => "15070300701",
                "name" => "VAWMBUK"
            ],
            [
                "code" => "15070300801",
                "name" => "ARCHHUANG"
            ],
            [
                "code" => "15070300901",
                "name" => "TIALDAWNGLUNG"
            ],
            [
                "code" => "15070301001",
                "name" => "SIACHANGKAWN"
            ],
            [
                "code" => "15070301101",
                "name" => "BUALPUI 'NG'-I"
            ],
            [
                "code" => "15070301201",
                "name" => "BUALPUI 'NG'-II"
            ],
            [
                "code" => "15070301301",
                "name" => "LUNGZARHTUM"
            ],
            [
                "code" => "15070301401",
                "name" => "LUNGTIAN"
            ],
            [
                "code" => "15070301501",
                "name" => "FUNGKAH"
            ],
            [
                "code" => "15070301601",
                "name" => "CHEURAL"
            ],
            [
                "code" => "15070301701",
                "name" => "VARTEKKAI"
            ],
            [
                "code" => "15070301801",
                "name" => "VARTEK"
            ],
            [
                "code" => "15070301901",
                "name" => "RAWLBUK"
            ],
            [
                "code" => "15070302001",
                "name" => "VAWMBUK-II"
            ],
            [
                "code" => "15070302101",
                "name" => "LUNGTIAN-II"
            ],
            [
                "code" => "15070302201",
                "name" => "SANGAU-III"
            ],
            [
                "code" => "15070302301",
                "name" => "SANGAU-IV"
            ],
            [
                "code" => "15070400101",
                "name" => "KAMALANAGAR-I"
            ],
            [
                "code" => "15070400201",
                "name" => "KAMALANAGAR-II"
            ],
            [
                "code" => "15070400301",
                "name" => "KAMALANAGAR-III"
            ],
            [
                "code" => "15070400401",
                "name" => "KAMALANAGAR-IV"
            ],
            [
                "code" => "15070400501",
                "name" => "BAJEISORA"
            ],
            [
                "code" => "15070400601",
                "name" => "BAGANPARA"
            ],
            [
                "code" => "15070400701",
                "name" => "UGUDASURY 'N'"
            ],
            [
                "code" => "15070400801",
                "name" => "SAIZAWH 'W'"
            ],
            [
                "code" => "15070400901",
                "name" => "MONTOLA"
            ],
            [
                "code" => "15070401001",
                "name" => "RAJMANDAL"
            ],
            [
                "code" => "15070401101",
                "name" => "NALBANYA"
            ],
            [
                "code" => "15070401201",
                "name" => "UDALTANA-I"
            ],
            [
                "code" => "15070401301",
                "name" => "UDALTANA-II"
            ],
            [
                "code" => "15070401401",
                "name" => "ADUBANGASORA"
            ],
            [
                "code" => "15070401501",
                "name" => "JAMERSURY"
            ],
            [
                "code" => "15070401601",
                "name" => "ULUSURY"
            ],
            [
                "code" => "15070401701",
                "name" => "MONDIRASORA"
            ],
            [
                "code" => "15070401801",
                "name" => "AJASORA-II"
            ],
            [
                "code" => "15070401901",
                "name" => "AJASORA-I"
            ],
            [
                "code" => "15070402001",
                "name" => "AJASORA-III"
            ],
            [
                "code" => "15070402101",
                "name" => "BARKALAK"
            ],
            [
                "code" => "15070402201",
                "name" => "SEMEISURY"
            ],
            [
                "code" => "15070402301",
                "name" => "GOLASURY"
            ],
            [
                "code" => "15070402401",
                "name" => "BETBANYA"
            ],
            [
                "code" => "15070402501",
                "name" => "LONGPUIGHAT"
            ],
            [
                "code" => "15070402601",
                "name" => "VASEITLANG-I"
            ],
            [
                "code" => "15070402701",
                "name" => "VASEITLANG-II"
            ],
            [
                "code" => "15070402801",
                "name" => "CHARLUITLANG"
            ],
            [
                "code" => "15070402901",
                "name" => "DEVASORA 'N'"
            ],
            [
                "code" => "15070403001",
                "name" => "NEW JAGANASURY-I"
            ],
            [
                "code" => "15070403101",
                "name" => "NEW JAGANASURY-II"
            ],
            [
                "code" => "15070403201",
                "name" => "CHOTAGUISURY-I"
            ],
            [
                "code" => "15070403301",
                "name" => "CHOTAGUISURY-II"
            ],
            [
                "code" => "15070403401",
                "name" => "BARAGUISURY"
            ],
            [
                "code" => "15070403501",
                "name" => "FULTULI"
            ],
            [
                "code" => "15070403601",
                "name" => "FULSORA"
            ],
            [
                "code" => "15070403701",
                "name" => "DURSORA"
            ],
            [
                "code" => "15070403801",
                "name" => "BILLOSORA"
            ],
            [
                "code" => "15070403901",
                "name" => "SILOSORA"
            ],
            [
                "code" => "15070404001",
                "name" => "DEVESORA 'S'"
            ],
            [
                "code" => "15070404101",
                "name" => "PARVA-II"
            ],
            [
                "code" => "15070404201",
                "name" => "PARVA-I"
            ],
            [
                "code" => "15070404301",
                "name" => "PARVA-III"
            ],
            [
                "code" => "15070404401",
                "name" => "BONDUKBANGA"
            ],
            [
                "code" => "15070404501",
                "name" => "GOBASURY"
            ],
            [
                "code" => "15070404601",
                "name" => "KAMTULI"
            ],
            [
                "code" => "15070404701",
                "name" => "SIMINASORA"
            ],
            [
                "code" => "15070404801",
                "name" => "CHAMINISORA"
            ],
            [
                "code" => "15070404901",
                "name" => "OLD BAJEISORA"
            ],
            [
                "code" => "15070405001",
                "name" => "SAMUKSORA"
            ],
            [
                "code" => "15070405101",
                "name" => "ARATINAGAR"
            ],
            [
                "code" => "15070405201",
                "name" => "PARVA-IV"
            ],
            [
                "code" => "15070405301",
                "name" => "MASSURY"
            ],
            [
                "code" => "15070405401",
                "name" => "PALENOSORA"
            ],
            [
                "code" => "15070405501",
                "name" => "LONGPUIGHAT-II"
            ],
            [
                "code" => "15070405601",
                "name" => "NEW JAGNASURY-III"
            ],
            [
                "code" => "15070500101",
                "name" => "BARAPANSURY-I"
            ],
            [
                "code" => "15070500201",
                "name" => "KURBALOVASORA"
            ],
            [
                "code" => "15070500301",
                "name" => "BARAPANSURY-II"
            ],
            [
                "code" => "15070500401",
                "name" => "SILSURY"
            ],
            [
                "code" => "15070500501",
                "name" => "UGULSURY"
            ],
            [
                "code" => "15070500601",
                "name" => "CHOTAPANSURY"
            ],
            [
                "code" => "15070500701",
                "name" => "GULSINGBAPSORA"
            ],
            [
                "code" => "15070500801",
                "name" => "NAGDARASORA"
            ],
            [
                "code" => "15070500901",
                "name" => "GERAKULUKSORA"
            ],
            [
                "code" => "15070501001",
                "name" => "JARULSURY"
            ],
            [
                "code" => "15070501101",
                "name" => "UGUDASURY 'S'"
            ],
            [
                "code" => "15070501201",
                "name" => "KUKURDULEYA"
            ],
            [
                "code" => "15070501301",
                "name" => "MOINABAPSORA"
            ],
            [
                "code" => "15070501401",
                "name" => "MOINBAPSORA-II"
            ],
            [
                "code" => "15070501501",
                "name" => "BARKABAKHALI"
            ],
            [
                "code" => "15070501601",
                "name" => "JARULDOBASORA"
            ],
            [
                "code" => "15070501701",
                "name" => "RENGKASHYA"
            ],
            [
                "code" => "15070501801",
                "name" => "FUTSURY"
            ],
            [
                "code" => "15070501901",
                "name" => "LUDISORA"
            ],
            [
                "code" => "15070502001",
                "name" => "LOKKHISURY"
            ],
            [
                "code" => "15070502101",
                "name" => "BOROITULI"
            ],
            [
                "code" => "15070502201",
                "name" => "GERASURY"
            ],
            [
                "code" => "15070502301",
                "name" => "BARUNASURY"
            ],
            [
                "code" => "15070502401",
                "name" => "TUNGOSORA"
            ],
            [
                "code" => "15070502501",
                "name" => "SANGRASURY"
            ],
            [
                "code" => "15070502601",
                "name" => "BORAKABAKHALI"
            ],
            [
                "code" => "15070502701",
                "name" => "JARULSURY-II"
            ],
            [
                "code" => "15060300602",
                "name" => "THANGPUI"
            ],
            [
                "code" => "15060300801",
                "name" => "VAIRAWKAI"
            ],
            [
                "code" => "15060300802",
                "name" => "RUALALUNG"
            ],
            [
                "code" => "15060300901",
                "name" => "LALNUTUI"
            ],
            [
                "code" => "15060300902",
                "name" => "THANZAMASORA"
            ],
            [
                "code" => "15060300903",
                "name" => "SEDAILUI"
            ],
            [
                "code" => "15060300904",
                "name" => "LUNGRANG"
            ],
            [
                "code" => "15060300905",
                "name" => "LUNGRANG 'S'"
            ],
            [
                "code" => "15060301001",
                "name" => "ZEHTET"
            ],
            [
                "code" => "15060301002",
                "name" => "SAILEN"
            ],
            [
                "code" => "15060301101",
                "name" => "BUKNUAM"
            ],
            [
                "code" => "15060301201",
                "name" => "CHITHAR"
            ],
            [
                "code" => "15060301301",
                "name" => "PUKPUI"
            ],
            [
                "code" => "15060301401",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "15060301501",
                "name" => "SERKAWN"
            ],
            [
                "code" => "15060301502",
                "name" => "KHAWIVA"
            ],
            [
                "code" => "15060301601",
                "name" => "ZOHNUAI"
            ],
            [
                "code" => "15060301701",
                "name" => "BAZAR"
            ],
            [
                "code" => "15060301801",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "15060301901",
                "name" => "UNDERMANIK"
            ],
            [
                "code" => "15060301902",
                "name" => "ROLUI"
            ],
            [
                "code" => "15060301903",
                "name" => "SIHPHIRTLANG"
            ],
            [
                "code" => "15060301904",
                "name" => "CHHUMKHUM"
            ],
            [
                "code" => "15060301905",
                "name" => "LUNGSEN"
            ],
            [
                "code" => "15060302001",
                "name" => "CHHUAHTHUM"
            ],
            [
                "code" => "15060302002",
                "name" => "RANGTE"
            ],
            [
                "code" => "15060302101",
                "name" => "TIPPERAGHAT - I"
            ],
            [
                "code" => "15060302102",
                "name" => "TIPPERAGHAT - II"
            ],
            [
                "code" => "15060302103",
                "name" => "TIPPERAGHAT - III"
            ],
            [
                "code" => "15060302201",
                "name" => "LETISURI"
            ],
            [
                "code" => "15060302202",
                "name" => "LAREIVENG"
            ],
            [
                "code" => "15060302203",
                "name" => "BORNASURI"
            ],
            [
                "code" => "15060302204",
                "name" => "KHOJOISURICHHUAH"
            ],
            [
                "code" => "15060302205",
                "name" => "KHOJOISURI"
            ],
            [
                "code" => "15060302206",
                "name" => "NEW KHOJOISURI"
            ],
            [
                "code" => "15060302302",
                "name" => "TABLABAGH - I"
            ],
            [
                "code" => "15060302303",
                "name" => "TABLABAGH - III"
            ],
            [
                "code" => "15060302304",
                "name" => "OLD BALUKIASURI"
            ],
            [
                "code" => "15060302306",
                "name" => "BINDASORA"
            ],
            [
                "code" => "15060303303",
                "name" => "NUNSURI - I"
            ],
            [
                "code" => "15060302307",
                "name" => "TABLABAGH - II"
            ],
            [
                "code" => "15060302401",
                "name" => "BULUNGSURI"
            ],
            [
                "code" => "15060302402",
                "name" => "JARULDUBASORA"
            ],
            [
                "code" => "15060302403",
                "name" => "KAWRPUICHHUAH"
            ],
            [
                "code" => "15060302404",
                "name" => "SILKUR"
            ],
            [
                "code" => "15060302501",
                "name" => "NEW BALUKSURI"
            ],
            [
                "code" => "15060302502",
                "name" => "GORASORA"
            ],
            [
                "code" => "15060302503",
                "name" => "KALAPANI"
            ],
            [
                "code" => "15060302601",
                "name" => "TUIKAWI"
            ],
            [
                "code" => "15060302706",
                "name" => "CHHOTABASTI"
            ],
            [
                "code" => "15060302707",
                "name" => "PUANKHAI"
            ],
            [
                "code" => "15060302801",
                "name" => "SAMUKSURI"
            ],
            [
                "code" => "15060302901",
                "name" => "SAZEKCHHUAH"
            ],
            [
                "code" => "15060302902",
                "name" => "SUKURBASORA"
            ],
            [
                "code" => "15060302903",
                "name" => "UGUDASURI"
            ],
            [
                "code" => "15060302904",
                "name" => "BELVACHHUAH"
            ],
            [
                "code" => "15060302905",
                "name" => "DIBLIBAGH"
            ],
            [
                "code" => "15060303001",
                "name" => "SIBINASORA"
            ],
            [
                "code" => "15060303002",
                "name" => "TUICHAWNGCHHUAH"
            ],
            [
                "code" => "15060303003",
                "name" => "TUICHAWNG"
            ],
            [
                "code" => "15060303101",
                "name" => "ZOHMUN"
            ],
            [
                "code" => "15060303102",
                "name" => "ZODIN, TLABUNG"
            ],
            [
                "code" => "15060303201",
                "name" => "MURISKATASORA"
            ],
            [
                "code" => "15060303202",
                "name" => "TLABUNG"
            ],
            [
                "code" => "15060303301",
                "name" => "SERHUAN"
            ],
            [
                "code" => "15060303302",
                "name" => "BASPATASORA"
            ],
            [
                "code" => "15060303304",
                "name" => "NUNSURI - II "
            ],
            [
                "code" => "15060303401",
                "name" => "SAISEN"
            ],
            [
                "code" => "15060303402",
                "name" => "BANDIASORA"
            ],
            [
                "code" => "15060303403",
                "name" => "NAKUKSORA"
            ],
            [
                "code" => "15060303404",
                "name" => "HMUNDO"
            ],
            [
                "code" => "15060303501",
                "name" => "CHAWILUNG VENGTHAR"
            ],
            [
                "code" => "15060303502",
                "name" => "CHAWILUNG"
            ],
            [
                "code" => "15060303601",
                "name" => "MAUZAM"
            ],
            [
                "code" => "15060304101",
                "name" => "MARPARA SOUTH"
            ],
            [
                "code" => "15060304102",
                "name" => "TERABONIA"
            ],
            [
                "code" => "15060400101",
                "name" => "VENGLAI"
            ],
            [
                "code" => "15060400201",
                "name" => "VENGHLUN"
            ],
            [
                "code" => "15060400301",
                "name" => "RAHSIVENG"
            ],
            [
                "code" => "15060400401",
                "name" => "PACHANG"
            ],
            [
                "code" => "15060400402",
                "name" => "HAURUANG"
            ],
            [
                "code" => "15060400501",
                "name" => "RUNTUNG"
            ],
            [
                "code" => "15060400601",
                "name" => "VANHNE"
            ],
            [
                "code" => "15060400701",
                "name" => "THEHLEP"
            ],
            [
                "code" => "15060400801",
                "name" => "THUAMPUI"
            ],
            [
                "code" => "15060400901",
                "name" => "LUNGDAI 'S'"
            ],
            [
                "code" => "15060401001",
                "name" => "SERTE"
            ],
            [
                "code" => "15060401101",
                "name" => "SERTLANGPUI"
            ],
            [
                "code" => "15060401201",
                "name" => "BUARPUI"
            ],
            [
                "code" => "15060401301",
                "name" => "NEW KHAWLEK"
            ],
            [
                "code" => "15060401302",
                "name" => "S. KHAWLEK"
            ],
            [
                "code" => "15060401401",
                "name" => "DENGSUR"
            ],
            [
                "code" => "15060401501",
                "name" => "BUNGTLANG 'W'"
            ],
            [
                "code" => "15060401601",
                "name" => "KAWLHAWK"
            ],
            [
                "code" => "15060401701",
                "name" => "THENHLUM"
            ],
            [
                "code" => "15060401901",
                "name" => "KAWNPUI 'W'"
            ],
            [
                "code" => "15060402001",
                "name" => "DARNGAWN 'W'"
            ],
            [
                "code" => "15060402101",
                "name" => "CHANGPUI"
            ],
            [
                "code" => "15060402201",
                "name" => "LUNGCHEM"
            ],
            [
                "code" => "15060402301",
                "name" => "PHAIRUANGKAI"
            ],
            [
                "code" => "15060402302",
                "name" => "ROTLANG 'W'"
            ],
            [
                "code" => "15060402303",
                "name" => "CHAWNPUI"
            ],
            [
                "code" => "15060402501",
                "name" => "BELTHEI"
            ],
            [
                "code" => "15060402502",
                "name" => "PHAIRUANGCHHUAH"
            ],
            [
                "code" => "15060402601",
                "name" => "PANGTLANG (NEW VUAKMUAL)"
            ],
            [
                "code" => "15060402701",
                "name" => "PUTLUNGASIH"
            ],
            [
                "code" => "15060402703",
                "name" => "VUAKMUAL"
            ],
            [
                "code" => "15060402801",
                "name" => "ZAWLPUI"
            ],
            [
                "code" => "15060402901",
                "name" => "KAUCHHUAH"
            ],
            [
                "code" => "15060403001",
                "name" => "BOLIA VENG"
            ],
            [
                "code" => "15060403201",
                "name" => "TUISEN"
            ],
            [
                "code" => "15060403301",
                "name" => "BUNGHMUN"
            ],
            [
                "code" => "15060403302",
                "name" => "TLEU"
            ],
            [
                "code" => "15060403501",
                "name" => "SESAWM"
            ],
            [
                "code" => "15060403601",
                "name" => "LAISAWRAL"
            ],
            [
                "code" => "15060403701",
                "name" => "OLD SACHAN"
            ],
            [
                "code" => "15060403702",
                "name" => "NEW SACHAN"
            ],
            [
                "code" => "15060403703",
                "name" => "PHAINUAM"
            ],
            [
                "code" => "15060403704",
                "name" => "SALMUR"
            ],
            [
                "code" => "15060403801",
                "name" => "SAZAIKAWN"
            ],
            [
                "code" => "15060100101",
                "name" => "PANGZAWL"
            ],
            [
                "code" => "15060100201",
                "name" => "RAWPUI"
            ],
            [
                "code" => "15060100301",
                "name" => "LUNGMAWI"
            ],
            [
                "code" => "15060100401",
                "name" => "HNAHTHIAL"
            ],
            [
                "code" => "15060100402",
                "name" => "DENLUNG"
            ],
            [
                "code" => "15060100501",
                "name" => "AITHUR"
            ],
            [
                "code" => "15060100601",
                "name" => "HNAHTHIAL 'S'"
            ],
            [
                "code" => "15060100701",
                "name" => "ROTLANG 'E'"
            ],
            [
                "code" => "15060100801",
                "name" => "LEITE"
            ],
            [
                "code" => "15060100802",
                "name" => "MAUDARH"
            ],
            [
                "code" => "15060100901",
                "name" => "CHAWNGTUI 'S'"
            ],
            [
                "code" => "15060101001",
                "name" => "TARPHO"
            ],
            [
                "code" => "15060101101",
                "name" => "KHAWHRI"
            ],
            [
                "code" => "15060101201",
                "name" => "THILTLANG"
            ],
            [
                "code" => "15060101301",
                "name" => "S. VANLAIPHAI"
            ],
            [
                "code" => "15060101401",
                "name" => "LUNGLENG 'S'"
            ],
            [
                "code" => "15060101501",
                "name" => "MUALLIANPUI"
            ],
            [
                "code" => "15060101601",
                "name" => "TUIPUI 'D'"
            ],
            [
                "code" => "15060101701",
                "name" => "DARZO"
            ],
            [
                "code" => "15060101801",
                "name" => "LUNGPUITLANG"
            ],
            [
                "code" => "15060101901",
                "name" => "CHERHLUN"
            ],
            [
                "code" => "15060102001",
                "name" => "NEW NGHARCHHIP"
            ],
            [
                "code" => "15060102101",
                "name" => "NGHARCHHIP"
            ],
            [
                "code" => "15060102201",
                "name" => "THINGSAI"
            ],
            [
                "code" => "15060102301",
                "name" => "BUALPUI 'H'"
            ],
            [
                "code" => "15060102401",
                "name" => "PHAILENG 'S'"
            ],
            [
                "code" => "15060200101",
                "name" => "ELECTRIC VENG"
            ],
            [
                "code" => "15060200201",
                "name" => "CHANMARI"
            ],
            [
                "code" => "15060200301",
                "name" => "FARM VENG"
            ],
            [
                "code" => "15060200401",
                "name" => "SALEM"
            ],
            [
                "code" => "15060200501",
                "name" => "LUNGLAWN"
            ],
            [
                "code" => "15060200601",
                "name" => "RAMTHAR"
            ],
            [
                "code" => "15060200701",
                "name" => "SETHLUN"
            ],
            [
                "code" => "15060200801",
                "name" => "LUANGMUAL"
            ],
            [
                "code" => "15060200901",
                "name" => "THEIRIAT"
            ],
            [
                "code" => "15060201001",
                "name" => "HAULAWNG"
            ],
            [
                "code" => "15060201002",
                "name" => "SAICHHOH"
            ],
            [
                "code" => "15060201301",
                "name" => "MAUSEN"
            ],
            [
                "code" => "15060201401",
                "name" => "MUALTHUAM 'N'"
            ],
            [
                "code" => "15060201501",
                "name" => "SEKHUM"
            ],
            [
                "code" => "15060201601",
                "name" => "RAMLAITUI"
            ],
            [
                "code" => "15060201701",
                "name" => "KANGHMUN 'S'"
            ],
            [
                "code" => "15060201801",
                "name" => "CHHIPPHIR"
            ],
            [
                "code" => "15060201901",
                "name" => "ZOTE 'S'"
            ],
            [
                "code" => "15060202001",
                "name" => "BUALPUI 'V'"
            ],
            [
                "code" => "15060202101",
                "name" => "TAWIPUI 'S'"
            ],
            [
                "code" => "15060202201",
                "name" => "MUALCHENG 'S'"
            ],
            [
                "code" => "15060202401",
                "name" => "TAWIPUI 'N' - II"
            ],
            [
                "code" => "15060202501",
                "name" => "THUALTHU"
            ],
            [
                "code" => "15060202601",
                "name" => "MUALTHUAM 'S'"
            ],
            [
                "code" => "15060202701",
                "name" => "KHAWMAWI"
            ],
            [
                "code" => "15060202801",
                "name" => "THLENGANG"
            ],
            [
                "code" => "15060202901",
                "name" => "MAMTE"
            ],
            [
                "code" => "15060203001",
                "name" => "THINGFAL"
            ],
            [
                "code" => "15060203101",
                "name" => "HRANGCHALKAWN"
            ],
            [
                "code" => "15060203201",
                "name" => "LUNGPUIZAWL"
            ],
            [
                "code" => "15060203301",
                "name" => "SAIREP"
            ],
            [
                "code" => "15060203401",
                "name" => "HLUMTE"
            ],
            [
                "code" => "15060203501",
                "name" => "ZOBAWK"
            ],
            [
                "code" => "15060203601",
                "name" => "DAWN"
            ],
            [
                "code" => "15060203701",
                "name" => "RALVAWNG"
            ],
            [
                "code" => "15060203702",
                "name" => "RALVAWNG VENGCHUNG"
            ],
            [
                "code" => "15060203901",
                "name" => "BUALTE"
            ],
            [
                "code" => "15060204001",
                "name" => "THAIZAWL"
            ],
            [
                "code" => "15060204201",
                "name" => "ZOTUITLANG"
            ],
            [
                "code" => "15060204301",
                "name" => "CHENGPUI"
            ],
            [
                "code" => "15060204401",
                "name" => "TAWIPUI 'N' - I"
            ],
            [
                "code" => "15060204501",
                "name" => "HMUNTLANG"
            ],
            [
                "code" => "15060303801",
                "name" => "EDOMUKTISORA"
            ],
            [
                "code" => "15060303802",
                "name" => "MATISORA"
            ],
            [
                "code" => "15060303901",
                "name" => "SUMASUMI"
            ],
            [
                "code" => "15060304001",
                "name" => "MALSURY I"
            ],
            [
                "code" => "15060304002",
                "name" => "MALSURY II"
            ],
            [
                "code" => "15060304003",
                "name" => "LOKHISURI"
            ],
            [
                "code" => "15060304006",
                "name" => "DEVASORA"
            ],
            [
                "code" => "15060304007",
                "name" => "DURSURI"
            ],
            [
                "code" => "15060300101",
                "name" => "GULSIL"
            ],
            [
                "code" => "15060300102",
                "name" => "NGIAUTLANG"
            ],
            [
                "code" => "15060300103",
                "name" => "CHAWNGTE 'L'"
            ],
            [
                "code" => "15060300104",
                "name" => "HMUNTHAR"
            ],
            [
                "code" => "15060300301",
                "name" => "MAUTLANG"
            ],
            [
                "code" => "15060300401",
                "name" => "VAISAM"
            ],
            [
                "code" => "15060300601",
                "name" => "THANGTE"
            ],
            [
                "code" => "15010100101",
                "name" => "MAMIT BAZAR VENG"
            ],
            [
                "code" => "15010100201",
                "name" => "MAMIT VENGHLUN"
            ],
            [
                "code" => "15010100301",
                "name" => "N.SABUAL"
            ],
            [
                "code" => "15010100401",
                "name" => "SUARHLIAP"
            ],
            [
                "code" => "15010100501",
                "name" => "BAWNGVA"
            ],
            [
                "code" => "15010100601",
                "name" => "DARLAK"
            ],
            [
                "code" => "15010100701",
                "name" => "NEW MAMIT"
            ],
            [
                "code" => "15010100702",
                "name" => "LUANGPAWL"
            ],
            [
                "code" => "15010100703",
                "name" => "NALZAWL"
            ],
            [
                "code" => "15010100801",
                "name" => "PHAIZAU"
            ],
            [
                "code" => "15010100901",
                "name" => "K.SARALI"
            ],
            [
                "code" => "15010101001",
                "name" => "KAWRTHAH"
            ],
            [
                "code" => "15010101101",
                "name" => "RENGDIL"
            ],
            [
                "code" => "15010101201",
                "name" => "TUIDAM"
            ],
            [
                "code" => "15010101202",
                "name" => "TUMPANGLUI"
            ],
            [
                "code" => "15010101203",
                "name" => "NEW EDEN"
            ],
            [
                "code" => "15010101301",
                "name" => "KAWRTETHAWVENG"
            ],
            [
                "code" => "15010101601",
                "name" => "THAIDAWR"
            ],
            [
                "code" => "15010101701",
                "name" => "W.BUNGHMUN"
            ],
            [
                "code" => "15010101702",
                "name" => "SOTAPA"
            ],
            [
                "code" => "15010101703",
                "name" => "MUALTHUAM"
            ],
            [
                "code" => "15010101801",
                "name" => "W.SERHMUN"
            ],
            [
                "code" => "15010101901",
                "name" => "BAWRAI"
            ],
            [
                "code" => "15010102001",
                "name" => "ZAWLNUAM THUAMPUI"
            ],
            [
                "code" => "15010102101",
                "name" => "ZAWLNUAM VENGPUI"
            ],
            [
                "code" => "15010102201",
                "name" => "ZAWLPUI"
            ],
            [
                "code" => "15010102401",
                "name" => "BUNGTHUAM"
            ],
            [
                "code" => "15010102501",
                "name" => "KANHMUN"
            ],
            [
                "code" => "15010102601",
                "name" => "LUIMAWI"
            ],
            [
                "code" => "15010102701",
                "name" => "THINGHLUN"
            ],
            [
                "code" => "15010102801",
                "name" => "CHUHVEL"
            ],
            [
                "code" => "15010102901",
                "name" => "HRIPHAW"
            ],
            [
                "code" => "15010103001",
                "name" => "KANANTHAR"
            ],
            [
                "code" => "15010103101",
                "name" => "SAIKHAWTHLIR"
            ],
            [
                "code" => "15010103201",
                "name" => "ZAMUANG"
            ],
            [
                "code" => "15010103301",
                "name" => "CHILUI"
            ],
            [
                "code" => "15010103302",
                "name" => "MAMIT HMAR VENG"
            ],
            [
                "code" => "15010103303",
                "name" => "TLANGKHANG"
            ],
            [
                "code" => "15010103304",
                "name" => "VAWNGAWNZO"
            ],
            [
                "code" => "15010103305",
                "name" => "DAMDIAI"
            ],
            [
                "code" => "15010103801",
                "name" => "HMUNTHATLANG"
            ],
            [
                "code" => "15010104301",
                "name" => "MAMIT CHHIM VENG"
            ],
            [
                "code" => "15010104303",
                "name" => "MAMIT HMUNSAM"
            ],
            [
                "code" => "15010105001",
                "name" => "SERHMUN"
            ],
            [
                "code" => "15010105501",
                "name" => "SIHTHIANG"
            ],
            [
                "code" => "15010105601",
                "name" => "KOLALIAN"
            ],
            [
                "code" => "15010105701",
                "name" => "BAZIRUNGPA"
            ],
            [
                "code" => "15010200101",
                "name" => "HNAHVA"
            ],
            [
                "code" => "15010200102",
                "name" => "LOKHISURY"
            ],
            [
                "code" => "15010200103",
                "name" => "DHANPARA"
            ],
            [
                "code" => "15010200201",
                "name" => "UGUDUASURY"
            ],
            [
                "code" => "15010200202",
                "name" => "SILSURY"
            ],
            [
                "code" => "15010200301",
                "name" => "PUKZING VENGTHAR"
            ],
            [
                "code" => "15010200401",
                "name" => "PUKZING"
            ],
            [
                "code" => "15010200501",
                "name" => "CHHIPPUI"
            ],
            [
                "code" => "15010200601",
                "name" => "LALLEN"
            ],
            [
                "code" => "15010200701",
                "name" => "PARVATUI"
            ],
            [
                "code" => "15010200801",
                "name" => "AIVAPUI"
            ],
            [
                "code" => "15010200803",
                "name" => "PHULDUNGSEI"
            ],
            [
                "code" => "15010200901",
                "name" => "SAITHAH"
            ],
            [
                "code" => "15010201001",
                "name" => "W. PHULPUI"
            ],
            [
                "code" => "15010201101",
                "name" => "PONSURY"
            ],
            [
                "code" => "15010201102",
                "name" => "BODOLSURY"
            ],
            [
                "code" => "15010201103",
                "name" => "DUAKILO"
            ],
            [
                "code" => "15010201104",
                "name" => "BORACHERRA"
            ],
            [
                "code" => "15010201105",
                "name" => "ANDERMANIK"
            ],
            [
                "code" => "15010201106",
                "name" => "ZOMUANTLANG"
            ],
            [
                "code" => "15010201201",
                "name" => "BELKHAI"
            ],
            [
                "code" => "15010201301",
                "name" => "KHANTLANG"
            ],
            [
                "code" => "15010201501",
                "name" => "TUIPUIBARI-I"
            ],
            [
                "code" => "15010201502",
                "name" => "UGUDASURY"
            ],
            [
                "code" => "15010201601",
                "name" => "TUIPUIBARI-II"
            ],
            [
                "code" => "15010201701",
                "name" => "TEIREI FOREST"
            ],
            [
                "code" => "15010201801",
                "name" => "W.PHAILENG"
            ],
            [
                "code" => "15010202001",
                "name" => "DAMPARENGPUI"
            ],
            [
                "code" => "15010202101",
                "name" => "TUIRUM"
            ],
            [
                "code" => "15010202201",
                "name" => "KHAWHNAI"
            ],
            [
                "code" => "15010202701",
                "name" => "W.PHAILENG DINTHAR"
            ],
            [
                "code" => "15010203101",
                "name" => "TARABONIA"
            ],
            [
                "code" => "15010203401",
                "name" => "ZOPUI"
            ],
            [
                "code" => "15010203501",
                "name" => "MARPARA"
            ],
            [
                "code" => "15010203601",
                "name" => "HRUIDUK"
            ],
            [
                "code" => "15010300101",
                "name" => "LENGTE"
            ],
            [
                "code" => "15010300201",
                "name" => "HMUNPUI"
            ],
            [
                "code" => "15010300301",
                "name" => "NGHALCHAWM"
            ],
            [
                "code" => "15010300401",
                "name" => "SAITLAW"
            ],
            [
                "code" => "15010300501",
                "name" => "W.SERZAWL"
            ],
            [
                "code" => "15010300601",
                "name" => "DAMPUI"
            ],
            [
                "code" => "15010300701",
                "name" => "DAPCHHUAH"
            ],
            [
                "code" => "15010300702",
                "name" => "DILZAWL"
            ],
            [
                "code" => "15010300801",
                "name" => "TUAHZAWL"
            ],
            [
                "code" => "15010300901",
                "name" => "RAWPUICHHIP"
            ],
            [
                "code" => "15010400101",
                "name" => "REIEK"
            ],
            [
                "code" => "15010400201",
                "name" => "AILAWNG"
            ],
            [
                "code" => "15010400301",
                "name" => "BAWNGTHAH"
            ],
            [
                "code" => "15010400401",
                "name" => "BAWLTE"
            ],
            [
                "code" => "15010400501",
                "name" => "CHUNGTLANG"
            ],
            [
                "code" => "15010400601",
                "name" => "DARLUNG"
            ],
            [
                "code" => "15010400701",
                "name" => "HREICHUK"
            ],
            [
                "code" => "15010400801",
                "name" => "KANGHMUN"
            ],
            [
                "code" => "15010400901",
                "name" => "KHAWRIHNIM"
            ],
            [
                "code" => "15010401001",
                "name" => "LUNGPHUN"
            ],
            [
                "code" => "15010401101",
                "name" => "S.SABUAL"
            ],
            [
                "code" => "15010401201",
                "name" => "RULPUIHLIM"
            ],
            [
                "code" => "15010401301",
                "name" => "W.LUNGDAR"
            ],
            [
                "code" => "15080100101",
                "name" => "SIAHA VAIHPI - I"
            ],
            [
                "code" => "15080100201",
                "name" => " MEISAVAIH 'E'"
            ],
            [
                "code" => "15080100301",
                "name" => "MEISATLAH - I"
            ],
            [
                "code" => "15080100501",
                "name" => "THOSAIH"
            ],
            [
                "code" => "15080100601",
                "name" => "N. SAIHA 'W'"
            ],
            [
                "code" => "15080100701",
                "name" => "N. SAIHA 'E'"
            ],
            [
                "code" => "15080100901",
                "name" => "COUNCIL VAIH"
            ],
            [
                "code" => "15080101101",
                "name" => "AMOTLAH"
            ],
            [
                "code" => "15080101201",
                "name" => "THIAHRA"
            ],
            [
                "code" => "15080101301",
                "name" => "TIPI FERRY"
            ],
            [
                "code" => "15080101401",
                "name" => "TISOPI"
            ],
            [
                "code" => "15080101501",
                "name" => "RIASIKAH"
            ],
            [
                "code" => "15080101601",
                "name" => "AMOBYU 'B'"
            ],
            [
                "code" => "15080101701",
                "name" => "AMOBYU 'CH'"
            ],
            [
                "code" => "15080101801",
                "name" => "THEIVA"
            ],
            [
                "code" => "15080101901",
                "name" => "KAOCHAO 'E'"
            ],
            [
                "code" => "15080102001",
                "name" => "AMOBYU 'ZERO'"
            ],
            [
                "code" => "15080102101",
                "name" => "CHHAOLO - I"
            ],
            [
                "code" => "15080102201",
                "name" => "LOBO - I"
            ],
            [
                "code" => "15080102301",
                "name" => "NOAOTLAH -I"
            ],
            [
                "code" => "15080102401",
                "name" => "CHHAOLO - II"
            ],
            [
                "code" => "15080102501",
                "name" => "IANA"
            ],
            [
                "code" => "15080102601",
                "name" => "SIATA"
            ],
            [
                "code" => "15080102901",
                "name" => "NEW COLONY -I"
            ],
            [
                "code" => "15080103001",
                "name" => "NEW COLONY -II"
            ],
            [
                "code" => "15080103101",
                "name" => "NEW COLONY -III"
            ],
            [
                "code" => "15080103201",
                "name" => "ECM VAIH"
            ],
            [
                "code" => "15080103601",
                "name" => "COLLEGE VAIH -II"
            ],
            [
                "code" => "15080103701",
                "name" => "SIAHATLAH - I"
            ],
            [
                "code" => "15080103801",
                "name" => "SIAHATLAH - II"
            ],
            [
                "code" => "15080104001",
                "name" => "NOAOTLAH - III"
            ],
            [
                "code" => "15080104101",
                "name" => "COLLEGE VAIH -I"
            ],
            [
                "code" => "15080104301",
                "name" => "SIAHATLAH -III"
            ],
            [
                "code" => "15080104601",
                "name" => "MEISATLAH - II"
            ],
            [
                "code" => "15080104701",
                "name" => "MEISAVAIH 'W'"
            ],
            [
                "code" => "15080104801",
                "name" => "TISOPI II"
            ],
            [
                "code" => "15080104901",
                "name" => "KAOCHAO 'E' II"
            ],
            [
                "code" => "15080105001",
                "name" => "NOAOTLAH II"
            ],
            [
                "code" => "15080105101",
                "name" => "SIATA II"
            ],
            [
                "code" => "15080200201",
                "name" => "TIPA 'D' II"
            ],
            [
                "code" => "15080200301",
                "name" => "TIPA 'L'"
            ],
            [
                "code" => "15080200401",
                "name" => "SAIKAO"
            ],
            [
                "code" => "15080200501",
                "name" => "N. SAIKAO"
            ],
            [
                "code" => "15080200601",
                "name" => "THEIRI"
            ],
            [
                "code" => "15080200701",
                "name" => "TISI"
            ],
            [
                "code" => "15080200801",
                "name" => "ZYHNO"
            ],
            [
                "code" => "15080200901",
                "name" => "LOTO VAIH"
            ],
            [
                "code" => "15080201001",
                "name" => "SIATLAI"
            ],
            [
                "code" => "15080201101",
                "name" => "AHMYPI"
            ],
            [
                "code" => "15080201201",
                "name" => "KHOPAI"
            ],
            [
                "code" => "15080201301",
                "name" => "LAKI"
            ],
            [
                "code" => "15080201401",
                "name" => "LOPU"
            ],
            [
                "code" => "15080201801",
                "name" => "MIEPU"
            ],
            [
                "code" => "15080201901",
                "name" => "PHURA 'S'"
            ],
            [
                "code" => "15080202001",
                "name" => "PALA"
            ],
            [
                "code" => "15080202201",
                "name" => "VAHIA"
            ],
            [
                "code" => "15080202301",
                "name" => "KIASIE"
            ],
            [
                "code" => "15080202401",
                "name" => "MAISA"
            ],
            [
                "code" => "15080202501",
                "name" => "LATY"
            ],
            [
                "code" => "15080202601",
                "name" => "NEW LATY"
            ],
            [
                "code" => "15080202701",
                "name" => "TOKALO"
            ],
            [
                "code" => "15080202801",
                "name" => "LODAWH"
            ],
            [
                "code" => "15080202901",
                "name" => "LOMASU"
            ],
            [
                "code" => "15080203001",
                "name" => "BYMARI"
            ],
            [
                "code" => "15080203101",
                "name" => "CHAKHEI - I"
            ],
            [
                "code" => "15080203201",
                "name" => "CHAPI - I"
            ],
            [
                "code" => "15080203301",
                "name" => "MAWHRO"
            ],
            [
                "code" => "15080203401",
                "name" => "SIASIH"
            ],
            [
                "code" => "15080203501",
                "name" => "CHHEIHLU"
            ],
            [
                "code" => "15080203701",
                "name" => "CHAKHEITLAH"
            ],
            [
                "code" => "15080203801",
                "name" => "TIPA 'V' - II"
            ],
            [
                "code" => "15080203901",
                "name" => "TIPA 'V'- I"
            ],
            [
                "code" => "15080204101",
                "name" => "CHAPI - II"
            ],
            [
                "code" => "15080204201",
                "name" => "LORRAIN VILLES"
            ],
            [
                "code" => "15080204401",
                "name" => "CHAKHEI - II"
            ],
            [
                "code" => "15080204501",
                "name" => "CHAPI-III"
            ],
            [
                "code" => "15080204601",
                "name" => "PHURA 'N'"
            ],
            [
                "code" => "15080204701",
                "name" => "TIPA D-I"
            ],
            [
                "code" => "15080204801",
                "name" => "MIEPU II"
            ],
            [
                "code" => "15080204901",
                "name" => "TIPA 'V' III"
            ],
            [
                "code" => "15080205001",
                "name" => "LOPE"
            ],
            [
                "code" => "15080205101",
                "name" => "SUPHA"
            ],
            [
                "code" => "15080205201",
                "name" => "KHAIKHY"
            ],
            [
                "code" => "15050100101",
                "name" => "SERCHHIP VC - 1"
            ],
            [
                "code" => "15050100201",
                "name" => "SERCHHIP VC - 2"
            ],
            [
                "code" => "15050100301",
                "name" => "SERCHHIP VC - 3"
            ],
            [
                "code" => "15050100401",
                "name" => "SERCHHIP VC - 4"
            ],
            [
                "code" => "15050100501",
                "name" => "NEW SERCHHIP"
            ],
            [
                "code" => "15050100601",
                "name" => "CHHIAHTLANG"
            ],
            [
                "code" => "15050100701",
                "name" => "SIALHAU"
            ],
            [
                "code" => "15050100801",
                "name" => "VANCHENGTE"
            ],
            [
                "code" => "15050100901",
                "name" => "THENZAWL 'E'"
            ],
            [
                "code" => "15050101001",
                "name" => "THENZAWL 'W'"
            ],
            [
                "code" => "15050101102",
                "name" => "THENZAWL VENGTHAR"
            ],
            [
                "code" => "15050101201",
                "name" => "BUANGPUI"
            ],
            [
                "code" => "15050101401",
                "name" => "NEIHLOH"
            ],
            [
                "code" => "15050101501",
                "name" => "HRIANGTLANG"
            ],
            [
                "code" => "15050101701",
                "name" => "SERCHHIP VC - 5 "
            ],
            [
                "code" => "15050200101",
                "name" => "N.VANLAIPHAI"
            ],
            [
                "code" => "15050200201",
                "name" => "LUNGKAWLH"
            ],
            [
                "code" => "15050200301",
                "name" => "BAWKTLANG"
            ],
            [
                "code" => "15050200401",
                "name" => "MUALCHENG"
            ],
            [
                "code" => "15050200501",
                "name" => "E.LUNGDAR"
            ],
            [
                "code" => "15050200601",
                "name" => "LENG"
            ],
            [
                "code" => "15050200701",
                "name" => "SAILULAK"
            ],
            [
                "code" => "15050200801",
                "name" => "LUNGCHHUAN"
            ],
            [
                "code" => "15050200901",
                "name" => "CHEKAWN"
            ],
            [
                "code" => "15050201001",
                "name" => "SIALSIR"
            ],
            [
                "code" => "15050201101",
                "name" => "KHAWLAILUNG"
            ],
            [
                "code" => "15050201201",
                "name" => "PILER"
            ],
            [
                "code" => "15050201301",
                "name" => "KEITUM"
            ],
            [
                "code" => "15050201401",
                "name" => "BUNGTLANG"
            ],
            [
                "code" => "15050201501",
                "name" => "HMUNZAWL"
            ],
            [
                "code" => "15050300101",
                "name" => "LUNGPHO"
            ],
            [
                "code" => "15050300201",
                "name" => "RULLAM"
            ],
            [
                "code" => "15050300301",
                "name" => "CHHINGCHHIP"
            ],
            [
                "code" => "15050300401",
                "name" => "CHHINGCHHIP MUALPUI"
            ],
            [
                "code" => "15050300601",
                "name" => "HMUNTHA"
            ],
            [
                "code" => "15050300701",
                "name" => "KHAWBEL"
            ],
            [
                "code" => "15050300801",
                "name" => "NGENTIANG"
            ],
            [
                "code" => "15050300901",
                "name" => "THENTLANG"
            ],
            [
                "code" => "15050301101",
                "name" => "HUALTU"
            ],
            [
                "code" => "15050301201",
                "name" => "THINGLIAN"
            ],
            [
                "code" => "15050301301",
                "name" => "BAKTAWNG"
            ],
            [
                "code" => "15050301401",
                "name" => "BAKTAWNG TLANGNUAM"
            ],
            [
                "code" => "15050301501",
                "name" => "KHUMTUNG"
            ],
            [
                "code" => "15050301601",
                "name" => "HMAWNG KAWN"
            ],
            [
                "code" => "15050301801",
                "name" => "BUHKANGKAWN"
            ]
        ];
    }

    private function getPanchayats(){
        return [
            [
                "code" => "150307001",
                "name" => "AIBAWK"
            ],
            [
                "code" => "150307002",
                "name" => "CHAWILUNG"
            ],
            [
                "code" => "150307003",
                "name" => "CHAMRING"
            ],
            [
                "code" => "150307004",
                "name" => "FALKAWN"
            ],
            [
                "code" => "150307005",
                "name" => "HMUIFANG"
            ],
            [
                "code" => "150307006",
                "name" => "HUALNGOHMUN"
            ],
            [
                "code" => "150307007",
                "name" => "KELSIH"
            ],
            [
                "code" => "150307008",
                "name" => "LAMCHHIP"
            ],
            [
                "code" => "150307009",
                "name" => "LUNGSAI"
            ],
            [
                "code" => "150307010",
                "name" => "LUNGSEI"
            ],
            [
                "code" => "150307011",
                "name" => "MAUBUANG"
            ],
            [
                "code" => "150307012",
                "name" => "MELRIAT"
            ],
            [
                "code" => "150307013",
                "name" => "MUALLUNGTHU"
            ],
            [
                "code" => "150307014",
                "name" => "PHULPUI"
            ],
            [
                "code" => "150307015",
                "name" => "SAILAM"
            ],
            [
                "code" => "150307016",
                "name" => "SAMLUKHAI"
            ],
            [
                "code" => "150307017",
                "name" => "SATEEK"
            ],
            [
                "code" => "150307018",
                "name" => "SIALSUK"
            ],
            [
                "code" => "150307019",
                "name" => "SUMSUIH"
            ],
            [
                "code" => "150307020",
                "name" => "TACHHIP"
            ],
            [
                "code" => "150307021",
                "name" => "THIAK"
            ],
            [
                "code" => "150304001",
                "name" => "MUANNA VENG"
            ],
            [
                "code" => "150304002",
                "name" => "ZUANGTUI"
            ],
            [
                "code" => "150304003",
                "name" => "THUAMPUI"
            ],
            [
                "code" => "150304004",
                "name" => "ZEMABAWK"
            ],
            [
                "code" => "150304005",
                "name" => "ZEMABAWK 'N'"
            ],
            [
                "code" => "150304006",
                "name" => "FALKLAND"
            ],
            [
                "code" => "150304007",
                "name" => "BUNGBANGLA"
            ],
            [
                "code" => "150304008",
                "name" => "TUIRIAL AIRFIELD"
            ],
            [
                "code" => "150304009",
                "name" => "TUIRIAL LEIKAI"
            ],
            [
                "code" => "150304010",
                "name" => "KEIFANG"
            ],
            [
                "code" => "150304011",
                "name" => "RULCHAWM"
            ],
            [
                "code" => "150304012",
                "name" => "RUALLUNG"
            ],
            [
                "code" => "150304013",
                "name" => "MUALPHENG"
            ],
            [
                "code" => "150304014",
                "name" => "TAWIZO"
            ],
            [
                "code" => "150304015",
                "name" => "LENCHIM"
            ],
            [
                "code" => "150309004",
                "name" => "DURTLANG"
            ],
            [
                "code" => "150309005",
                "name" => "DURTLANG NORTH"
            ],
            [
                "code" => "150309006",
                "name" => "SELESIH"
            ],
            [
                "code" => "150309007",
                "name" => "MUTHI"
            ],
            [
                "code" => "150309008",
                "name" => "SIHPHIR"
            ],
            [
                "code" => "150309009",
                "name" => "SIHPHIR VENGHLUN"
            ],
            [
                "code" => "150309010",
                "name" => "NAUSEL"
            ],
            [
                "code" => "150309011",
                "name" => "SESAWNG"
            ],
            [
                "code" => "150309012",
                "name" => "MUALMAM"
            ],
            [
                "code" => "150302001",
                "name" => "ZARKAWT"
            ],
            [
                "code" => "150302002",
                "name" => "DAWRPUI"
            ],
            [
                "code" => "150302003",
                "name" => "SARON"
            ],
            [
                "code" => "150302004",
                "name" => "TUITHIANG"
            ],
            [
                "code" => "150302005",
                "name" => "VENGHLUI"
            ],
            [
                "code" => "150302006",
                "name" => "REPUBLIC"
            ],
            [
                "code" => "150302007",
                "name" => "UPPER REPUBLIC"
            ],
            [
                "code" => "150302008",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "150302009",
                "name" => "ITI"
            ],
            [
                "code" => "150302010",
                "name" => "MUALPUI"
            ],
            [
                "code" => "150302011",
                "name" => "BETHLEHEM"
            ],
            [
                "code" => "150302012",
                "name" => "BETHLEHEM VENGTHLANG"
            ],
            [
                "code" => "150302013",
                "name" => "THAKTHING"
            ],
            [
                "code" => "150302014",
                "name" => "DAM VENG"
            ],
            [
                "code" => "150302015",
                "name" => "VENGHNUAI"
            ],
            [
                "code" => "150302016",
                "name" => "SALEM"
            ],
            [
                "code" => "150302017",
                "name" => "REPUBLIC VENGTHLANG"
            ],
            [
                "code" => "150303001",
                "name" => "TUIKHURHLU"
            ],
            [
                "code" => "150303002",
                "name" => "SELING"
            ],
            [
                "code" => "150303003",
                "name" => "THINGSULTHLIAH"
            ],
            [
                "code" => "150303004",
                "name" => "THINGSUL TLANGNUAM"
            ],
            [
                "code" => "150303005",
                "name" => "DARLAWNG"
            ],
            [
                "code" => "150303006",
                "name" => "TLUNGVEL"
            ],
            [
                "code" => "150303007",
                "name" => "PHULMAWI"
            ],
            [
                "code" => "150310001",
                "name" => "DARLAWN"
            ],
            [
                "code" => "150310002",
                "name" => "N.SERZAWL"
            ],
            [
                "code" => "150310003",
                "name" => "SUNHLUCHHIP"
            ],
            [
                "code" => "150310004",
                "name" => "SAILUTAR"
            ],
            [
                "code" => "150310005",
                "name" => "RATU"
            ],
            [
                "code" => "150310006",
                "name" => "LUNGSUM"
            ],
            [
                "code" => "150310007",
                "name" => "NEW VERVEK"
            ],
            [
                "code" => "150310008",
                "name" => "DAMDIAI"
            ],
            [
                "code" => "150310009",
                "name" => "THINGSAT"
            ],
            [
                "code" => "150310010",
                "name" => "SAKAWRDAI"
            ],
            [
                "code" => "150310011",
                "name" => "N.KHAWDUNGSEI"
            ],
            [
                "code" => "150310012",
                "name" => "VAITIN"
            ],
            [
                "code" => "150310013",
                "name" => "KHAWPUAR"
            ],
            [
                "code" => "150310014",
                "name" => "UPPER SAKAWRDAI"
            ],
            [
                "code" => "150310015",
                "name" => "ZOHMUN"
            ],
            [
                "code" => "150310016",
                "name" => "PALSANG"
            ],
            [
                "code" => "150310017",
                "name" => "MAUCHAR"
            ],
            [
                "code" => "150310018",
                "name" => "N.TINGHMUN"
            ],
            [
                "code" => "150310019",
                "name" => "ZOKHAWTHIANG"
            ],
            [
                "code" => "150311001",
                "name" => "KHAWRUHLIAN"
            ],
            [
                "code" => "150311002",
                "name" => "HMUNNGHAK"
            ],
            [
                "code" => "150311003",
                "name" => "KHANPUI"
            ],
            [
                "code" => "150311004",
                "name" => "LAILAK"
            ],
            [
                "code" => "150311005",
                "name" => "PEHLAWN"
            ],
            [
                "code" => "150311006",
                "name" => "E.PHAILENG"
            ],
            [
                "code" => "150311007",
                "name" => "KEPRAN"
            ],
            [
                "code" => "150311008",
                "name" => "SAWLENG"
            ],
            [
                "code" => "150311009",
                "name" => "CHHANCHHUAHNA KHAWPUI"
            ],
            [
                "code" => "150311010",
                "name" => "SUANGPUILAWN"
            ],
            [
                "code" => "150311011",
                "name" => "LAMHERH"
            ],
            [
                "code" => "150311012",
                "name" => "VANBAWNG"
            ],
            [
                "code" => "150311013",
                "name" => "N.KHAWLEK"
            ],
            [
                "code" => "150306001",
                "name" => "CHANMARI"
            ],
            [
                "code" => "150306002",
                "name" => "CHANMARI WEST"
            ],
            [
                "code" => "150306003",
                "name" => "DINTHAR"
            ],
            [
                "code" => "150306004",
                "name" => "DAWRPUI VENGTHAR"
            ],
            [
                "code" => "150306005",
                "name" => "HUNTHAR"
            ],
            [
                "code" => "150306006",
                "name" => "EDENTHAR"
            ],
            [
                "code" => "150306007",
                "name" => "KHATLA"
            ],
            [
                "code" => "150306008",
                "name" => "KHATLA SOUTH"
            ],
            [
                "code" => "150306009",
                "name" => "KULIKAWN"
            ],
            [
                "code" => "150306010",
                "name" => "LUNGLENG I"
            ],
            [
                "code" => "150306011",
                "name" => "MELTHUM"
            ],
            [
                "code" => "150306012",
                "name" => "MISSION VENGTHLANG"
            ],
            [
                "code" => "150306013",
                "name" => "MISSION VENG"
            ],
            [
                "code" => "150306014",
                "name" => "N.LUNGLENG"
            ],
            [
                "code" => "150306015",
                "name" => "SAIKHAMAKAWN"
            ],
            [
                "code" => "150306016",
                "name" => "SAMTLANG"
            ],
            [
                "code" => "150306017",
                "name" => "HLIMEN"
            ],
            [
                "code" => "150306018",
                "name" => "TLANGNUAM"
            ],
            [
                "code" => "150306019",
                "name" => "TUIKUAL NORTH"
            ],
            [
                "code" => "150306020",
                "name" => "TUIKUAL SOUTH"
            ],
            [
                "code" => "150306021",
                "name" => "VAIVAKAWN"
            ],
            [
                "code" => "150306022",
                "name" => "TUIKHUAHTLANG"
            ],
            [
                "code" => "150306023",
                "name" => "MODEL VENG"
            ],
            [
                "code" => "150306024",
                "name" => "KHATLA EAST"
            ],
            [
                "code" => "150308001",
                "name" => "BUNGKAWN"
            ],
            [
                "code" => "150308002",
                "name" => "BUNGKAWN VENGTHAR"
            ],
            [
                "code" => "150308003",
                "name" => "NURSERY"
            ],
            [
                "code" => "150308004",
                "name" => "CHAWLHHMUN"
            ],
            [
                "code" => "150308005",
                "name" => "TUIVAMIT"
            ],
            [
                "code" => "150308006",
                "name" => "CENTRAL JAIL"
            ],
            [
                "code" => "150308007",
                "name" => "CHAWNPUI"
            ],
            [
                "code" => "150308008",
                "name" => "GOVT. COMPLEX"
            ],
            [
                "code" => "150308009",
                "name" => "KANAN"
            ],
            [
                "code" => "150308010",
                "name" => "LAWIPU"
            ],
            [
                "code" => "150308011",
                "name" => "LENGPUI"
            ],
            [
                "code" => "150308012",
                "name" => "LUANGMUAL"
            ],
            [
                "code" => "150308013",
                "name" => "MAUBAWK"
            ],
            [
                "code" => "150308014",
                "name" => "PHUNCHAWNG"
            ],
            [
                "code" => "150308015",
                "name" => "LUNGVERH"
            ],
            [
                "code" => "150308016",
                "name" => "RANGVAMUAL"
            ],
            [
                "code" => "150308017",
                "name" => "SAKAWRTUICHHUN"
            ],
            [
                "code" => "150308018",
                "name" => "SAIRANG"
            ],
            [
                "code" => "150308019",
                "name" => "SAIRANG DINTHAR"
            ],
            [
                "code" => "150308020",
                "name" => "SAIRANG SIHHMUI"
            ],
            [
                "code" => "150308021",
                "name" => "TANHRIL"
            ],
            [
                "code" => "150308022",
                "name" => "ZONUAM"
            ],
            [
                "code" => "150308023",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "150308024",
                "name" => "AICS"
            ],
            [
                "code" => "150301001",
                "name" => "LAIPUITLANG"
            ],
            [
                "code" => "150301002",
                "name" => "CHALTLANG"
            ],
            [
                "code" => "150301003",
                "name" => "RAMHLUN NORTH"
            ],
            [
                "code" => "150301004",
                "name" => "RAMHLUN VENGTHAR"
            ],
            [
                "code" => "150301005",
                "name" => "RAMHLUN VENGLAI"
            ],
            [
                "code" => "150301006",
                "name" => "RAMHLUN SPORT COMPLEX"
            ],
            [
                "code" => "150301007",
                "name" => "RAMHLUN SOUTH"
            ],
            [
                "code" => "150301008",
                "name" => "RAMTHAR NORTH"
            ],
            [
                "code" => "150301009",
                "name" => "RAMTHAR"
            ],
            [
                "code" => "150301010",
                "name" => "AIZAWL VENGLAI"
            ],
            [
                "code" => "150301011",
                "name" => "ELECTRIC"
            ],
            [
                "code" => "150301012",
                "name" => "CHHINGA VENG"
            ],
            [
                "code" => "150301013",
                "name" => "ARMED VENG"
            ],
            [
                "code" => "150301014",
                "name" => "ARMED VENG SOUTH"
            ],
            [
                "code" => "150301015",
                "name" => "CHITE "
            ],
            [
                "code" => "150301016",
                "name" => "ASSAM RIFLES"
            ],
            [
                "code" => "150301017",
                "name" => "CHALTLANG NORTH"
            ],
            [
                "code" => "150304016",
                "name" => "MAITE"
            ],
            [
                "code" => "150304017",
                "name" => "BERAWLUI"
            ],
            [
                "code" => "150304018",
                "name" => "TNT"
            ],
            [
                "code" => "150305001",
                "name" => "SAITUAL"
            ],
            [
                "code" => "150305002",
                "name" => "SIHFA"
            ],
            [
                "code" => "150305003",
                "name" => "DILKHAN"
            ],
            [
                "code" => "150305004",
                "name" => "TUALBUNG"
            ],
            [
                "code" => "150305005",
                "name" => "BUHBAN"
            ],
            [
                "code" => "150305006",
                "name" => "N.LUNGPHER"
            ],
            [
                "code" => "150305007",
                "name" => "THANGLAILUNG"
            ],
            [
                "code" => "150305008",
                "name" => "PHULLEN"
            ],
            [
                "code" => "150305009",
                "name" => "LUANGPAWN"
            ],
            [
                "code" => "150305010",
                "name" => "ZAWNGIN"
            ],
            [
                "code" => "150305011",
                "name" => "PHUAIBUANG"
            ],
            [
                "code" => "150305012",
                "name" => "KHAWLIAN"
            ],
            [
                "code" => "150305013",
                "name" => "N.E.TLANGNUAM"
            ],
            [
                "code" => "150305014",
                "name" => "DAIDO"
            ],
            [
                "code" => "150309001",
                "name" => "BAWNGKAWN"
            ],
            [
                "code" => "150309002",
                "name" => "BAWNGKAWN CHHIMVENG"
            ],
            [
                "code" => "150309003",
                "name" => "DURTLANG LEITAN"
            ],
            [
                "code" => "150401001",
                "name" => "CHAMPHAI I"
            ],
            [
                "code" => "150401002",
                "name" => "CHAMPHAI II"
            ],
            [
                "code" => "150401003",
                "name" => "CHAMPHAI III"
            ],
            [
                "code" => "150401004",
                "name" => "CHAMPHAI IV"
            ],
            [
                "code" => "150401005",
                "name" => "CHAMPHAI V"
            ],
            [
                "code" => "150401006",
                "name" => "CHAMPHAI VI"
            ],
            [
                "code" => "150401007",
                "name" => "CHAMPHAI VII"
            ],
            [
                "code" => "150401008",
                "name" => "CHAMPHAI VIII"
            ],
            [
                "code" => "150401009",
                "name" => "HMUNHMELTHA"
            ],
            [
                "code" => "150401010",
                "name" => "N. KHAWBUNG"
            ],
            [
                "code" => "150401011",
                "name" => "CHHUNGTE"
            ],
            [
                "code" => "150401012",
                "name" => "TUIPUI"
            ],
            [
                "code" => "150401013",
                "name" => "N. CHAMPHAI"
            ],
            [
                "code" => "150401014",
                "name" => "RUANTLANG"
            ],
            [
                "code" => "150401015",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "150401016",
                "name" => "MELBUK"
            ],
            [
                "code" => "150401017",
                "name" => "ZOKHAWTHAR"
            ],
            [
                "code" => "150401018",
                "name" => "MUALKAWI"
            ],
            [
                "code" => "150401019",
                "name" => "ZOTE"
            ],
            [
                "code" => "150401020",
                "name" => "TLANGSAM"
            ],
            [
                "code" => "150401021",
                "name" => "NGUR"
            ],
            [
                "code" => "150401022",
                "name" => "HNAHLAN"
            ],
            [
                "code" => "150401023",
                "name" => "N. DILTLANG"
            ],
            [
                "code" => "150401024",
                "name" => "VAIKHAWTLANG"
            ],
            [
                "code" => "150401025",
                "name" => "VAPAR"
            ],
            [
                "code" => "150401026",
                "name" => "KHUANGPHAH"
            ],
            [
                "code" => "150401027",
                "name" => "TUALCHENG"
            ],
            [
                "code" => "150401028",
                "name" => "MURLEN"
            ],
            [
                "code" => "150401029",
                "name" => "LUNGPHUNLIAN"
            ],
            [
                "code" => "150401030",
                "name" => "PAMCHUNG"
            ],
            [
                "code" => "150401031",
                "name" => "DINTHAR"
            ],
            [
                "code" => "150401032",
                "name" => "VENGTHLANG NORTH"
            ],
            [
                "code" => "150401033",
                "name" => "ZION"
            ],
            [
                "code" => "150402001",
                "name" => "KHAWZAWL I"
            ],
            [
                "code" => "150402002",
                "name" => "KHAWZAWL II"
            ],
            [
                "code" => "150402003",
                "name" => "KHAWZAWL III"
            ],
            [
                "code" => "150402004",
                "name" => "KHAWZAWL IV"
            ],
            [
                "code" => "150402005",
                "name" => "KHAWZAWL V"
            ],
            [
                "code" => "150402006",
                "name" => "TUALPUI"
            ],
            [
                "code" => "150402007",
                "name" => "NGAIZAWL"
            ],
            [
                "code" => "150402008",
                "name" => "ARRO"
            ],
            [
                "code" => "150402009",
                "name" => "HMUNCHENG"
            ],
            [
                "code" => "150402010",
                "name" => "TUALTE"
            ],
            [
                "code" => "150402011",
                "name" => "NEIHDAWN"
            ],
            [
                "code" => "150402012",
                "name" => "CHAWNGTLAI"
            ],
            [
                "code" => "150402013",
                "name" => "RABUNG"
            ],
            [
                "code" => "150402014",
                "name" => "KHUALEN"
            ],
            [
                "code" => "150402015",
                "name" => "AIDUZAWL"
            ],
            [
                "code" => "150402016",
                "name" => "KHAWHAI"
            ],
            [
                "code" => "150402017",
                "name" => "CHALRANG"
            ],
            [
                "code" => "150402018",
                "name" => "N. CHALRANG"
            ],
            [
                "code" => "150402019",
                "name" => "VANGTLANG"
            ],
            [
                "code" => "150402020",
                "name" => "LUNGTAN"
            ],
            [
                "code" => "150402021",
                "name" => "SIALHAWK"
            ],
            [
                "code" => "150402022",
                "name" => "BIATE"
            ],
            [
                "code" => "150402023",
                "name" => "RIANGTLEI"
            ],
            [
                "code" => "150402024",
                "name" => "TLANGPUI"
            ],
            [
                "code" => "150402025",
                "name" => "TLANGMAWI"
            ],
            [
                "code" => "150402026",
                "name" => "HERMON"
            ],
            [
                "code" => "150402027",
                "name" => "KAWNZAR"
            ],
            [
                "code" => "150403001",
                "name" => "KELKANG"
            ],
            [
                "code" => "150403002",
                "name" => "DILKAWN"
            ],
            [
                "code" => "150403003",
                "name" => "BUANG"
            ],
            [
                "code" => "150403004",
                "name" => "HRUAIKAWN"
            ],
            [
                "code" => "150403005",
                "name" => "N. HRUAIKAWN"
            ],
            [
                "code" => "150403006",
                "name" => "KHUANGLENG"
            ],
            [
                "code" => "150403007",
                "name" => "SAZEP"
            ],
            [
                "code" => "150403008",
                "name" => "SESIH"
            ],
            [
                "code" => "150403009",
                "name" => "BULFEKZAWL"
            ],
            [
                "code" => "150403010",
                "name" => "VANGCHHIA"
            ],
            [
                "code" => "150403011",
                "name" => "LEISENZO"
            ],
            [
                "code" => "150403012",
                "name" => "LIANPUI"
            ],
            [
                "code" => "150403013",
                "name" => "BUNGZUNG"
            ],
            [
                "code" => "150403014",
                "name" => "VANZAU"
            ],
            [
                "code" => "150403015",
                "name" => "LEITHUM"
            ],
            [
                "code" => "150403016",
                "name" => "ZAWNGTETUI"
            ],
            [
                "code" => "150403017",
                "name" => "KHAWBUNG"
            ],
            [
                "code" => "150403018",
                "name" => "KHUANGTHING"
            ],
            [
                "code" => "150403019",
                "name" => "ZAWLSEI"
            ],
            [
                "code" => "150403020",
                "name" => "DUNGTLANG"
            ],
            [
                "code" => "150403021",
                "name" => "VAPHAI"
            ],
            [
                "code" => "150403022",
                "name" => "SAMTHANG"
            ],
            [
                "code" => "150403023",
                "name" => "CHAWNGTUI 'E'"
            ],
            [
                "code" => "150403024",
                "name" => "FARKAWN"
            ],
            [
                "code" => "150403025",
                "name" => "KHANKAWN"
            ],
            [
                "code" => "150403026",
                "name" => "THEKPUI"
            ],
            [
                "code" => "150403027",
                "name" => "THEKTE"
            ],
            [
                "code" => "150404001",
                "name" => "NGOPA"
            ],
            [
                "code" => "150404002",
                "name" => "N.E. KHAWDUNGSEI"
            ],
            [
                "code" => "150404003",
                "name" => "CHIAHPUI"
            ],
            [
                "code" => "150404004",
                "name" => "KHAWKAWN"
            ],
            [
                "code" => "150404005",
                "name" => "LAMZAWL"
            ],
            [
                "code" => "150404006",
                "name" => "TEIKHANG"
            ],
            [
                "code" => "150404007",
                "name" => "MIMBUNG"
            ],
            [
                "code" => "150404008",
                "name" => "KAWLBEM"
            ],
            [
                "code" => "150404009",
                "name" => "HRIANGHMUN"
            ],
            [
                "code" => "150404010",
                "name" => "SELAM"
            ],
            [
                "code" => "150404011",
                "name" => "HLIAPPUI"
            ],
            [
                "code" => "150404012",
                "name" => "SAICHAL"
            ],
            [
                "code" => "150404013",
                "name" => "PAWLRANG"
            ],
            [
                "code" => "150404014",
                "name" => "CHANGZAWL"
            ],
            [
                "code" => "150404015",
                "name" => "KAWLKULH"
            ],
            [
                "code" => "150404016",
                "name" => "DULTE"
            ],
            [
                "code" => "150404017",
                "name" => "PUILO"
            ],
            [
                "code" => "150404018",
                "name" => "CHHAWRTUI"
            ],
            [
                "code" => "150404019",
                "name" => "VANKAL"
            ],
            [
                "code" => "150404020",
                "name" => "VANCHENGPUI"
            ],
            [
                "code" => "150201001",
                "name" => "KOLASIB - I"
            ],
            [
                "code" => "150201002",
                "name" => "KOLASIB - II"
            ],
            [
                "code" => "150201003",
                "name" => "KOLASIB - III"
            ],
            [
                "code" => "150201004",
                "name" => "KOLASIB - IV"
            ],
            [
                "code" => "150201005",
                "name" => "KOLASIB - V"
            ],
            [
                "code" => "150201006",
                "name" => "KOLASIB - VI"
            ],
            [
                "code" => "150201007",
                "name" => "KOLASIB - VII"
            ],
            [
                "code" => "150201008",
                "name" => "BUILUM"
            ],
            [
                "code" => "150201009",
                "name" => "MEIDUM (ZODIN)"
            ],
            [
                "code" => "150201010",
                "name" => "BAIRABI (LENHMUIKAWN)"
            ],
            [
                "code" => "150201011",
                "name" => "PANGBALKAWN (S.CHHIMLUANG)"
            ],
            [
                "code" => "150201012",
                "name" => "RENGTEKAWN"
            ],
            [
                "code" => "150201013",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "150202001",
                "name" => "KAWNPUI II"
            ],
            [
                "code" => "150202002",
                "name" => "KAWNPUI I"
            ],
            [
                "code" => "150202003",
                "name" => "LUNGDAI"
            ],
            [
                "code" => "150202004",
                "name" => "SERKHAN"
            ],
            [
                "code" => "150202005",
                "name" => "NISAPUI"
            ],
            [
                "code" => "150202006",
                "name" => "LUNGMUAT"
            ],
            [
                "code" => "150202007",
                "name" => "N.CHALTLANG"
            ],
            [
                "code" => "150202008",
                "name" => "BUKPUI"
            ],
            [
                "code" => "150202009",
                "name" => "THINGTHELH"
            ],
            [
                "code" => "150202010",
                "name" => "N.HLIMEN"
            ],
            [
                "code" => "150202011",
                "name" => "BUALPUI `N"
            ],
            [
                "code" => "150202012",
                "name" => "KHAMRANG"
            ],
            [
                "code" => "150202013",
                "name" => "HORTOKI"
            ],
            [
                "code" => "150202014",
                "name" => "THINGDAWL"
            ],
            [
                "code" => "150202015",
                "name" => "ZANLAWN"
            ],
            [
                "code" => "150202016",
                "name" => "SETHAWN"
            ],
            [
                "code" => "150202017",
                "name" => "DILZAU"
            ],
            [
                "code" => "150202019",
                "name" => "MUALKHANG"
            ],
            [
                "code" => "150203001",
                "name" => "BILKHAWTHLIR N"
            ],
            [
                "code" => "150203002",
                "name" => "CHEMPHAI"
            ],
            [
                "code" => "150203003",
                "name" => "N.CHAWNPUI"
            ],
            [
                "code" => "150203004",
                "name" => "BUHCHANGPHAI "
            ],
            [
                "code" => "150203005",
                "name" => "SAIHAPUI `K"
            ],
            [
                "code" => "150203006",
                "name" => "PHAISEN"
            ],
            [
                "code" => "150203007",
                "name" => "N.CHHIMLUANG"
            ],
            [
                "code" => "150203008",
                "name" => "VAIRENGTE - I"
            ],
            [
                "code" => "150203009",
                "name" => "VAIRENGTE - II"
            ],
            [
                "code" => "150203010",
                "name" => "PHAINUAM"
            ],
            [
                "code" => "150203011",
                "name" => "SIHAPUI `V"
            ],
            [
                "code" => "150203012",
                "name" => "BUKVANNEI"
            ],
            [
                "code" => "150203013",
                "name" => "THINGLIAN"
            ],
            [
                "code" => "150203015",
                "name" => "BILKHAWTHLIR S"
            ],
            [
                "code" => "150203016",
                "name" => "SAIPHAI"
            ],
            [
                "code" => "150203017",
                "name" => "SAIPUM"
            ],
            [
                "code" => "150701001",
                "name" => "BUNGTLANG 'S'"
            ],
            [
                "code" => "150701002",
                "name" => "HMUNNUAM"
            ],
            [
                "code" => "150701003",
                "name" => "DILTLANG"
            ],
            [
                "code" => "150701004",
                "name" => "CHAWNGTELUI"
            ],
            [
                "code" => "150701005",
                "name" => "KAWRTHINDENG"
            ],
            [
                "code" => "150701006",
                "name" => "SAIKHAWTHLIR"
            ],
            [
                "code" => "150701007",
                "name" => "TUITHUMHNAR"
            ],
            [
                "code" => "150701008",
                "name" => "LUNGHAUKA"
            ],
            [
                "code" => "150701009",
                "name" => "HMAWNGBU"
            ],
            [
                "code" => "150701010",
                "name" => "HMAWNGBUCHHUAH"
            ],
            [
                "code" => "150701011",
                "name" => "SABUALTLANG"
            ],
            [
                "code" => "150701012",
                "name" => "KAKICHHUAH"
            ],
            [
                "code" => "150701013",
                "name" => "HRUITEZAWL"
            ],
            [
                "code" => "150701014",
                "name" => "NGENPUITLANG"
            ],
            [
                "code" => "150701015",
                "name" => "TUIDANGTLANG"
            ],
            [
                "code" => "150701016",
                "name" => "R.VANHNE"
            ],
            [
                "code" => "150701017",
                "name" => "M.KAWNPUI"
            ],
            [
                "code" => "150701018",
                "name" => "SAIBAWH"
            ],
            [
                "code" => "150701019",
                "name" => "CHIKHURHLU"
            ],
            [
                "code" => "150701020",
                "name" => "NGHALIMLUI"
            ],
            [
                "code" => "150701021",
                "name" => "VASEIKAI"
            ],
            [
                "code" => "150701022",
                "name" => "FANGFARLUI"
            ],
            [
                "code" => "150701023",
                "name" => "DAMLUI"
            ],
            [
                "code" => "150701024",
                "name" => "VATHUAMPUI"
            ],
            [
                "code" => "150701025",
                "name" => "KAWNKHUA"
            ],
            [
                "code" => "150701026",
                "name" => "CHAMDURTLANG"
            ],
            [
                "code" => "150701027",
                "name" => "CHAMDUR 'P'"
            ],
            [
                "code" => "150701028",
                "name" => "BOLISORA"
            ],
            [
                "code" => "150701029",
                "name" => "MAUTLANG"
            ],
            [
                "code" => "150701030",
                "name" => "TUICHAWNGTLANG"
            ],
            [
                "code" => "150701031",
                "name" => "NGUNLINGKHUA"
            ],
            [
                "code" => "150701032",
                "name" => "SAKEILUI"
            ],
            [
                "code" => "150701033",
                "name" => "JOGNASURY"
            ],
            [
                "code" => "150701034",
                "name" => "SUMSILUI"
            ],
            [
                "code" => "150701035",
                "name" => "KARLUI"
            ],
            [
                "code" => "150701036",
                "name" => "PANDAWNGLUI"
            ],
            [
                "code" => "150701037",
                "name" => "CHAWNGTE 'P'"
            ],
            [
                "code" => "150701038",
                "name" => "HMUNLAI"
            ],
            [
                "code" => "150701039",
                "name" => "MUALBU 'L'"
            ],
            [
                "code" => "150701040",
                "name" => "TUIKHURLUI"
            ],
            [
                "code" => "150701041",
                "name" => "DARNAMTLANG"
            ],
            [
                "code" => "150701042",
                "name" => "T.DUMZAU"
            ],
            [
                "code" => "150701043",
                "name" => "ZOCHACHHUAH"
            ],
            [
                "code" => "150701044",
                "name" => "LAITLANG"
            ],
            [
                "code" => "150701045",
                "name" => "DUMZAUTLANG"
            ],
            [
                "code" => "150701046",
                "name" => "TUISENTLANG"
            ],
            [
                "code" => "150701047",
                "name" => "SEDAILUI"
            ],
            [
                "code" => "150701048",
                "name" => "SEKULH"
            ],
            [
                "code" => "150701049",
                "name" => "NGENGPUICHHUAH"
            ],
            [
                "code" => "150701050",
                "name" => "NGENGPUIKAI"
            ],
            [
                "code" => "150701051",
                "name" => "BUNGTLANG 'S'-II"
            ],
            [
                "code" => "150701052",
                "name" => "KARLUI-II"
            ],
            [
                "code" => "150701053",
                "name" => "KAWNKHUA"
            ],
            [
                "code" => "150702001",
                "name" => "THINGKAH "
            ],
            [
                "code" => "150702002",
                "name" => "A.O.C"
            ],
            [
                "code" => "150702003",
                "name" => "LAWNGTLAI-III"
            ],
            [
                "code" => "150702004",
                "name" => "LAWNGTLAI VENGPUI"
            ],
            [
                "code" => "150702005",
                "name" => "MAMPUI"
            ],
            [
                "code" => "150702006",
                "name" => "BAZAR"
            ],
            [
                "code" => "150702007",
                "name" => "COUNCIL VENG"
            ],
            [
                "code" => "150702008",
                "name" => "CHANDMARY-I"
            ],
            [
                "code" => "150702009",
                "name" => "CHANDMARY-II"
            ],
            [
                "code" => "150702010",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "150702011",
                "name" => "CHAWNHU"
            ],
            [
                "code" => "150702012",
                "name" => "PAITHAR"
            ],
            [
                "code" => "150702013",
                "name" => "CHAWNTLANGPUI"
            ],
            [
                "code" => "150702014",
                "name" => "SIHTLANGPUI"
            ],
            [
                "code" => "150702015",
                "name" => "KAWLCHAW 'W'"
            ],
            [
                "code" => "150702016",
                "name" => "RULKUAL"
            ],
            [
                "code" => "150702017",
                "name" => "SAIZAWH 'E'"
            ],
            [
                "code" => "150702019",
                "name" => "SAIKAH"
            ],
            [
                "code" => "150702020",
                "name" => "ELECTRIC VENG"
            ],
            [
                "code" => "150702021",
                "name" => "LAWNGTLAI VENGPUI-II"
            ],
            [
                "code" => "150703001",
                "name" => "SANGAU"
            ],
            [
                "code" => "150703002",
                "name" => "SANGU-II"
            ],
            [
                "code" => "150703003",
                "name" => "PANGKHUA"
            ],
            [
                "code" => "150703004",
                "name" => "THALTLANG"
            ],
            [
                "code" => "150703005",
                "name" => "SENTETFIANG"
            ],
            [
                "code" => "150704004",
                "name" => "KAMALANAGAR-IV"
            ],
            [
                "code" => "150704005",
                "name" => "BAJEISORA"
            ],
            [
                "code" => "150704006",
                "name" => "BAGANPARA"
            ],
            [
                "code" => "150704007",
                "name" => "UGUDASURY 'N'"
            ],
            [
                "code" => "150704008",
                "name" => "SAIZAWH 'W'"
            ],
            [
                "code" => "150704009",
                "name" => "MONTOLA"
            ],
            [
                "code" => "150704010",
                "name" => "RAJMANDAL"
            ],
            [
                "code" => "150704011",
                "name" => "NALBANYA"
            ],
            [
                "code" => "150704012",
                "name" => "UDALTANA-I"
            ],
            [
                "code" => "150704013",
                "name" => "UDALTANA-II"
            ],
            [
                "code" => "150704014",
                "name" => "ADUBANGASORA"
            ],
            [
                "code" => "150704015",
                "name" => "JAMERSURY"
            ],
            [
                "code" => "150704016",
                "name" => "ULUSURY"
            ],
            [
                "code" => "150704017",
                "name" => "MONDIRASORA"
            ],
            [
                "code" => "150704018",
                "name" => "AJASORA-I"
            ],
            [
                "code" => "150704019",
                "name" => "AJASORA-II"
            ],
            [
                "code" => "150704020",
                "name" => "AJASORA-III"
            ],
            [
                "code" => "150704021",
                "name" => "BARKALAK"
            ],
            [
                "code" => "150704022",
                "name" => "SEMEISURY"
            ],
            [
                "code" => "150704023",
                "name" => "GOLASURY"
            ],
            [
                "code" => "150704024",
                "name" => "BETBANYA"
            ],
            [
                "code" => "150704025",
                "name" => "LONGPUIGHAT"
            ],
            [
                "code" => "150704026",
                "name" => "VASEITLANG-I"
            ],
            [
                "code" => "150704027",
                "name" => "VASEITLANG-II"
            ],
            [
                "code" => "150704028",
                "name" => "CHARLUITLANG"
            ],
            [
                "code" => "150704029",
                "name" => "DEVASORA 'N'"
            ],
            [
                "code" => "150704030",
                "name" => "NEW JAGANASURY-I"
            ],
            [
                "code" => "150704031",
                "name" => "NEW JAGANASURY-II"
            ],
            [
                "code" => "150704032",
                "name" => "CHOTAGUISURY-I"
            ],
            [
                "code" => "150704033",
                "name" => "CHOTAGUISURY-II"
            ],
            [
                "code" => "150704034",
                "name" => "BARAGUISURY"
            ],
            [
                "code" => "150704035",
                "name" => "FULTULI"
            ],
            [
                "code" => "150704036",
                "name" => "FULSORA"
            ],
            [
                "code" => "150704037",
                "name" => "DURSORA"
            ],
            [
                "code" => "150704038",
                "name" => "BILLOSORA"
            ],
            [
                "code" => "150704039",
                "name" => "SILOSORA"
            ],
            [
                "code" => "150704040",
                "name" => "DEVESORA 'S'"
            ],
            [
                "code" => "150704041",
                "name" => "PARVA-I"
            ],
            [
                "code" => "150704042",
                "name" => "PARVA-II"
            ],
            [
                "code" => "150704043",
                "name" => "PARVA-III"
            ],
            [
                "code" => "150704044",
                "name" => "BONDUKBANGA"
            ],
            [
                "code" => "150704045",
                "name" => "GOBASURY"
            ],
            [
                "code" => "150704046",
                "name" => "KAMTULI"
            ],
            [
                "code" => "150704047",
                "name" => "SIMINASORA"
            ],
            [
                "code" => "150704048",
                "name" => "LODISORA"
            ],
            [
                "code" => "150704049",
                "name" => "CHAMINISORA"
            ],
            [
                "code" => "150704050",
                "name" => "OLD BAJEISORA"
            ],
            [
                "code" => "150704051",
                "name" => "SAMUKSORA"
            ],
            [
                "code" => "150704052",
                "name" => "ARATINAGAR"
            ],
            [
                "code" => "150704053",
                "name" => "PARVA-IV"
            ],
            [
                "code" => "150704054",
                "name" => "MASSURY"
            ],
            [
                "code" => "150704055",
                "name" => "PALENOSORA"
            ],
            [
                "code" => "150704056",
                "name" => "LONGPUIGHAT-II"
            ],
            [
                "code" => "150704057",
                "name" => "NEW JAGNASURY-III"
            ],
            [
                "code" => "150705001",
                "name" => "BARAPANSURY-I"
            ],
            [
                "code" => "150705002",
                "name" => "BARAPANSURY-II"
            ],
            [
                "code" => "150705003",
                "name" => "KURBALOVASORA"
            ],
            [
                "code" => "150705004",
                "name" => "SILSURY"
            ],
            [
                "code" => "150705005",
                "name" => "UGULSURY"
            ],
            [
                "code" => "150705006",
                "name" => "CHOTAPANSURY"
            ],
            [
                "code" => "150705007",
                "name" => "GULSINGBAPSORA"
            ],
            [
                "code" => "150705008",
                "name" => "NAGDARASORA"
            ],
            [
                "code" => "150705009",
                "name" => "GERAKULUKSORA"
            ],
            [
                "code" => "150705010",
                "name" => "JARULSURY"
            ],
            [
                "code" => "150705011",
                "name" => "UGUDASURY 'S'"
            ],
            [
                "code" => "150705012",
                "name" => "KUKURDULEYA"
            ],
            [
                "code" => "150705013",
                "name" => "MOINABAPSORA"
            ],
            [
                "code" => "150705014",
                "name" => "MOINABAPSORA-II"
            ],
            [
                "code" => "150705015",
                "name" => "BARKABAKHALI"
            ],
            [
                "code" => "150705016",
                "name" => "JARULDOBASORA"
            ],
            [
                "code" => "150705017",
                "name" => "RENGKASHYA"
            ],
            [
                "code" => "150705018",
                "name" => "FUTSURY"
            ],
            [
                "code" => "150705019",
                "name" => "LUDISORA"
            ],
            [
                "code" => "150705020",
                "name" => "LOKKHISURY"
            ],
            [
                "code" => "150705021",
                "name" => "BOROITULI"
            ],
            [
                "code" => "150705022",
                "name" => "GERASURY"
            ],
            [
                "code" => "150705023",
                "name" => "BARUNASURY"
            ],
            [
                "code" => "150705024",
                "name" => "TUNGOSORA"
            ],
            [
                "code" => "150705025",
                "name" => "SANGRASURY"
            ],
            [
                "code" => "150705026",
                "name" => "BORAKABAKHALI-II"
            ],
            [
                "code" => "150705027",
                "name" => "JARULSURY-II"
            ],
            [
                "code" => "150703006",
                "name" => "LUNGPHER"
            ],
            [
                "code" => "150703007",
                "name" => "VAWMBUK"
            ],
            [
                "code" => "150703008",
                "name" => "ARCHHUANG"
            ],
            [
                "code" => "150703009",
                "name" => "TIALDAWNGLUNG"
            ],
            [
                "code" => "150703010",
                "name" => "SIACHANGKAWN"
            ],
            [
                "code" => "150703011",
                "name" => "BUALPUI 'NG'-I"
            ],
            [
                "code" => "150703012",
                "name" => "BUALPUI 'NG'-II"
            ],
            [
                "code" => "150703013",
                "name" => "LUNGZARHTUM"
            ],
            [
                "code" => "150703014",
                "name" => "LUNGTAN"
            ],
            [
                "code" => "150703015",
                "name" => "FUNGKAH"
            ],
            [
                "code" => "150703016",
                "name" => "CHEURAL"
            ],
            [
                "code" => "150703017",
                "name" => "VARTEKKAI"
            ],
            [
                "code" => "150703018",
                "name" => "VARTEK"
            ],
            [
                "code" => "150703019",
                "name" => "RAWLBUK"
            ],
            [
                "code" => "150703020",
                "name" => "VAWMBUK-II"
            ],
            [
                "code" => "150703021",
                "name" => "LUNGTIAN-II"
            ],
            [
                "code" => "150703022",
                "name" => "SANGAU-III"
            ],
            [
                "code" => "150703023",
                "name" => "SANGAU-IV"
            ],
            [
                "code" => "150704001",
                "name" => "KAMALANAGAR-I"
            ],
            [
                "code" => "150704002",
                "name" => "KAMALANAGAR-II"
            ],
            [
                "code" => "150704003",
                "name" => "KAMALANAGAR-III"
            ],
            [
                "code" => "150601001",
                "name" => "PANGZAWL"
            ],
            [
                "code" => "150601002",
                "name" => "RAWPUI"
            ],
            [
                "code" => "150601003",
                "name" => "LUNGMAWI"
            ],
            [
                "code" => "150601004",
                "name" => "HNAHTHIAL 'N'"
            ],
            [
                "code" => "150601005",
                "name" => "AITHUR"
            ],
            [
                "code" => "150601006",
                "name" => "HNAHTHIAL 'S'"
            ],
            [
                "code" => "150601007",
                "name" => "ROTLANG 'E'"
            ],
            [
                "code" => "150601008",
                "name" => "LEITE"
            ],
            [
                "code" => "150601009",
                "name" => "CHAWNGTUI 'S'"
            ],
            [
                "code" => "150601010",
                "name" => "TARPHO"
            ],
            [
                "code" => "150601011",
                "name" => "KHAWHRI"
            ],
            [
                "code" => "150601012",
                "name" => "THILTLANG"
            ],
            [
                "code" => "150601013",
                "name" => "S. VANLAIPHAI"
            ],
            [
                "code" => "150601014",
                "name" => "LUNGLENG 'S'"
            ],
            [
                "code" => "150601015",
                "name" => "MUALLIANPUI"
            ],
            [
                "code" => "150601016",
                "name" => "TUIPUI 'D'"
            ],
            [
                "code" => "150601017",
                "name" => "DARZO"
            ],
            [
                "code" => "150601018",
                "name" => "LUNGPUITLANG"
            ],
            [
                "code" => "150601019",
                "name" => "CHERHLUN"
            ],
            [
                "code" => "150601020",
                "name" => "NEW NGHARCHHIP"
            ],
            [
                "code" => "150601021",
                "name" => "NGHARCHHIP"
            ],
            [
                "code" => "150601022",
                "name" => "THINGSAI"
            ],
            [
                "code" => "150601023",
                "name" => "BUALPUI 'H'"
            ],
            [
                "code" => "150601024",
                "name" => "PHAILENG 'S'"
            ],
            [
                "code" => "150602001",
                "name" => "ELECTRIC VENG"
            ],
            [
                "code" => "150602002",
                "name" => "CHANMARI"
            ],
            [
                "code" => "150602003",
                "name" => "FARM VENG"
            ],
            [
                "code" => "150602004",
                "name" => "SALEM"
            ],
            [
                "code" => "150602005",
                "name" => "LUNGLAWN"
            ],
            [
                "code" => "150602006",
                "name" => "RAMTHAR"
            ],
            [
                "code" => "150602007",
                "name" => "SETHLUN"
            ],
            [
                "code" => "150602008",
                "name" => "LUANGMUAL"
            ],
            [
                "code" => "150602009",
                "name" => "THEIRIAT"
            ],
            [
                "code" => "150602010",
                "name" => "HAULAWNG"
            ],
            [
                "code" => "150602011",
                "name" => "MAUSEN"
            ],
            [
                "code" => "150602012",
                "name" => "MUALTHUAM 'N'"
            ],
            [
                "code" => "150602013",
                "name" => "SEKHUM"
            ],
            [
                "code" => "150602014",
                "name" => "RAMLAITUI"
            ],
            [
                "code" => "150602015",
                "name" => "KANGHMUN 'S'"
            ],
            [
                "code" => "150602016",
                "name" => "CHHIPPHIR"
            ],
            [
                "code" => "150602017",
                "name" => "ZOTE 'S'"
            ],
            [
                "code" => "150602018",
                "name" => "BUALPUI 'V'"
            ],
            [
                "code" => "150602019",
                "name" => "TAWIPUI 'S'"
            ],
            [
                "code" => "150602020",
                "name" => "MUALCHENG 'S'"
            ],
            [
                "code" => "150602021",
                "name" => "TAWIPUI 'N' - I"
            ],
            [
                "code" => "150602022",
                "name" => "TAWIPUI 'N' - II"
            ],
            [
                "code" => "150602023",
                "name" => "THUALTHU"
            ],
            [
                "code" => "150602024",
                "name" => "MUALTHUAM 'S'"
            ],
            [
                "code" => "150602025",
                "name" => "KHAWMAWI"
            ],
            [
                "code" => "150602026",
                "name" => "THLENGANG"
            ],
            [
                "code" => "150602027",
                "name" => "MAMTE"
            ],
            [
                "code" => "150602028",
                "name" => "THINGFAL"
            ],
            [
                "code" => "150602029",
                "name" => "HRANGCHALKAWN"
            ],
            [
                "code" => "150602030",
                "name" => "LUNGPUIZAWL"
            ],
            [
                "code" => "150602031",
                "name" => "SAIREP"
            ],
            [
                "code" => "150602032",
                "name" => "HLUMTE"
            ],
            [
                "code" => "150602033",
                "name" => "ZOBAWK"
            ],
            [
                "code" => "150602034",
                "name" => "DAWN"
            ],
            [
                "code" => "150602035",
                "name" => "RALVAWNG"
            ],
            [
                "code" => "150602036",
                "name" => "BUALTE"
            ],
            [
                "code" => "150602037",
                "name" => "THAIZAWL"
            ],
            [
                "code" => "150602039",
                "name" => "ZOTUITLANG"
            ],
            [
                "code" => "150602040",
                "name" => "CHENGPUI"
            ],
            [
                "code" => "150602041",
                "name" => "HMUNTLANG"
            ],
            [
                "code" => "150603001",
                "name" => "CHAWNGTE 'L'"
            ],
            [
                "code" => "150603002",
                "name" => "MAUTLANG"
            ],
            [
                "code" => "150603003",
                "name" => "VAISAM"
            ],
            [
                "code" => "150603004",
                "name" => "THANGTE"
            ],
            [
                "code" => "150603005",
                "name" => "RUALALUNG"
            ],
            [
                "code" => "150603006",
                "name" => "LUNGRANG `S`"
            ],
            [
                "code" => "150603007",
                "name" => "ZEHTET"
            ],
            [
                "code" => "150603008",
                "name" => "BUKNUAM"
            ],
            [
                "code" => "150603009",
                "name" => "CHITHAR"
            ],
            [
                "code" => "150603010",
                "name" => "PUKPUI"
            ],
            [
                "code" => "150603011",
                "name" => "ZOTLANG"
            ],
            [
                "code" => "150603012",
                "name" => "SERKAWN"
            ],
            [
                "code" => "150603013",
                "name" => "ZOHNUAI"
            ],
            [
                "code" => "150603014",
                "name" => "BAZAR"
            ],
            [
                "code" => "150603015",
                "name" => "COLLEGE VENG"
            ],
            [
                "code" => "150603016",
                "name" => "LUNGSEN"
            ],
            [
                "code" => "150603017",
                "name" => "RANGTE"
            ],
            [
                "code" => "150603018",
                "name" => "TIPPERAGHAT"
            ],
            [
                "code" => "150603019",
                "name" => "NEW KHOJOISURI"
            ],
            [
                "code" => "150603020",
                "name" => "TABLABAGH-II"
            ],
            [
                "code" => "150603021",
                "name" => "SILKUR"
            ],
            [
                "code" => "150603022",
                "name" => "KALAPANI"
            ],
            [
                "code" => "150603023",
                "name" => "TUIKAWI"
            ],
            [
                "code" => "150603024",
                "name" => "PUANKHAI"
            ],
            [
                "code" => "150603025",
                "name" => "SAMUKSURI"
            ],
            [
                "code" => "150603026",
                "name" => "DIBLIBAGH"
            ],
            [
                "code" => "150603027",
                "name" => "TUICHAWNG"
            ],
            [
                "code" => "150603028",
                "name" => "ZODIN, TLABUNG"
            ],
            [
                "code" => "150603029",
                "name" => "TLABUNG"
            ],
            [
                "code" => "150603030",
                "name" => "NUNSURI"
            ],
            [
                "code" => "150603031",
                "name" => "HMUNDO"
            ],
            [
                "code" => "150603032",
                "name" => "CHAWILUNG"
            ],
            [
                "code" => "150603033",
                "name" => "MAUZAM"
            ],
            [
                "code" => "150603034",
                "name" => "MATISORA"
            ],
            [
                "code" => "150603035",
                "name" => "SUMASUMI"
            ],
            [
                "code" => "150603036",
                "name" => "MALSURI II"
            ],
            [
                "code" => "150603037",
                "name" => "SAILEN"
            ],
            [
                "code" => "150604001",
                "name" => "VENGLAI"
            ],
            [
                "code" => "150604002",
                "name" => "VENGHLUN"
            ],
            [
                "code" => "150604003",
                "name" => "RAHSIVENG"
            ],
            [
                "code" => "150604004",
                "name" => "HAURUANG"
            ],
            [
                "code" => "150604005",
                "name" => "RUNTUNG"
            ],
            [
                "code" => "150604006",
                "name" => "VANHNE"
            ],
            [
                "code" => "150604007",
                "name" => "THEHLEP"
            ],
            [
                "code" => "150604008",
                "name" => "THUAMPUI"
            ],
            [
                "code" => "150604009",
                "name" => "LUNGDAI 'S'"
            ],
            [
                "code" => "150604010",
                "name" => "SERTE"
            ],
            [
                "code" => "150604011",
                "name" => "SERTLANGPUI"
            ],
            [
                "code" => "150604012",
                "name" => "BUARPUI"
            ],
            [
                "code" => "150604013",
                "name" => "S. KHAWLEK"
            ],
            [
                "code" => "150604014",
                "name" => "DENGSUR"
            ],
            [
                "code" => "150604015",
                "name" => "BUNGTLANG 'W'"
            ],
            [
                "code" => "150604016",
                "name" => "KAWLHAWK"
            ],
            [
                "code" => "150604017",
                "name" => "THENHLUM"
            ],
            [
                "code" => "150604018",
                "name" => "DAMPUI"
            ],
            [
                "code" => "150604019",
                "name" => "KAWNPUI 'W'"
            ],
            [
                "code" => "150604020",
                "name" => "DARNGAWN 'W'"
            ],
            [
                "code" => "150604021",
                "name" => "CHANGPUI"
            ],
            [
                "code" => "150604022",
                "name" => "LUNGCHEM"
            ],
            [
                "code" => "150604023",
                "name" => "PHAIRUANGKAI"
            ],
            [
                "code" => "150604024",
                "name" => "LUNGCHEM"
            ],
            [
                "code" => "150604025",
                "name" => "BELTHEI"
            ],
            [
                "code" => "150604026",
                "name" => "PANGTLANG"
            ],
            [
                "code" => "150604027",
                "name" => "PUTLUNGASIH"
            ],
            [
                "code" => "150604028",
                "name" => "ZAWLPUI"
            ],
            [
                "code" => "150604029",
                "name" => "KAUCHHUAH"
            ],
            [
                "code" => "150604030",
                "name" => "BOLIA VENG"
            ],
            [
                "code" => "150604031",
                "name" => "VUAKMUAL"
            ],
            [
                "code" => "150604032",
                "name" => "TUISEN"
            ],
            [
                "code" => "150604033",
                "name" => "BUNGHMUN"
            ],
            [
                "code" => "150604034",
                "name" => "TLEU"
            ],
            [
                "code" => "150604035",
                "name" => "SESAWM"
            ],
            [
                "code" => "150604036",
                "name" => "LAISAWRAL"
            ],
            [
                "code" => "150604037",
                "name" => "OLD SACHAN"
            ],
            [
                "code" => "150604038",
                "name" => "SAZAIKAWN"
            ],
            [
                "code" => "150604039",
                "name" => "LAISAWRAL"
            ],
            [
                "code" => "150604040",
                "name" => "SALMUR"
            ],
            [
                "code" => "150604041",
                "name" => "TERABONIA"
            ],
            [
                "code" => "150604042",
                "name" => "SACHAN"
            ],
            [
                "code" => "150604043",
                "name" => "NEW SACHAN"
            ],
            [
                "code" => "150604044",
                "name" => "MAR 'S'"
            ],
            [
                "code" => "150604045",
                "name" => "BUNGTLANG"
            ],
            [
                "code" => "150101001",
                "name" => "BAWNGVA"
            ],
            [
                "code" => "150101002",
                "name" => "DARLAK"
            ],
            [
                "code" => "150101003",
                "name" => "DAMPUI"
            ],
            [
                "code" => "150101004",
                "name" => "KAWRTETHAWVENG"
            ],
            [
                "code" => "150101005",
                "name" => "KAWRTHAH"
            ],
            [
                "code" => "150101007",
                "name" => "MAMIT BAZAR VENG"
            ],
            [
                "code" => "150101008",
                "name" => "MAMIT CHHIMVENG"
            ],
            [
                "code" => "150101009",
                "name" => "MAMIT HMARVENG"
            ],
            [
                "code" => "150101010",
                "name" => "MAMIT VENGHLUN"
            ],
            [
                "code" => "150101011",
                "name" => "NEW MAMIT"
            ],
            [
                "code" => "150101012",
                "name" => "LUIMAWI/MORAICHERRA"
            ],
            [
                "code" => "150101013",
                "name" => "PHAIZAU"
            ],
            [
                "code" => "150101014",
                "name" => "ZAMUANG"
            ],
            [
                "code" => "150101015",
                "name" => "ZAWLNUAM BORAI"
            ],
            [
                "code" => "150101016",
                "name" => "ZAWLNUAM THUAMPUI"
            ],
            [
                "code" => "150101017",
                "name" => "ZAWLNUAM VENGPUI"
            ],
            [
                "code" => "150101018",
                "name" => "ZAWLPUI"
            ],
            [
                "code" => "150101019",
                "name" => "N. SABUAL"
            ],
            [
                "code" => "150101020",
                "name" => "KANHMUN"
            ],
            [
                "code" => "150101021",
                "name" => "RENGDIL"
            ],
            [
                "code" => "150101022",
                "name" => "TUIDAM"
            ],
            [
                "code" => "150101023",
                "name" => "SAIKHAWTHLIR"
            ],
            [
                "code" => "150101024",
                "name" => "SUARHLIAP"
            ],
            [
                "code" => "150101025",
                "name" => "LUIMAWI"
            ],
            [
                "code" => "150101026",
                "name" => "THINGHLUN"
            ],
            [
                "code" => "150101027",
                "name" => "W. BUNGHMUN"
            ],
            [
                "code" => "150101028",
                "name" => "W. SERHMUN"
            ],
            [
                "code" => "150101029",
                "name" => "BUNGTHUAM"
            ],
            [
                "code" => "150101031",
                "name" => "BUNGHMUN"
            ],
            [
                "code" => "150101032",
                "name" => "THAIDAWR"
            ],
            [
                "code" => "150101033",
                "name" => "SERHMUN"
            ],
            [
                "code" => "150101034",
                "name" => "HRIPHAW"
            ],
            [
                "code" => "150101035",
                "name" => "KANANTHAR"
            ],
            [
                "code" => "150101036",
                "name" => "CHUHVEL"
            ],
            [
                "code" => "150101037",
                "name" => "TUMPANGLUI"
            ],
            [
                "code" => "150101038",
                "name" => "SIHTHIANG"
            ],
            [
                "code" => "150102001",
                "name" => "ANDERMANIK"
            ],
            [
                "code" => "150102004",
                "name" => "DAMPARENGPUI"
            ],
            [
                "code" => "150102005",
                "name" => "HRUIDUK"
            ],
            [
                "code" => "150102007",
                "name" => "KHANTLANG"
            ],
            [
                "code" => "150102008",
                "name" => "KHAWHNAI"
            ],
            [
                "code" => "150102009",
                "name" => "LALEN"
            ],
            [
                "code" => "150102011",
                "name" => "MARPARA MIZO VENG"
            ],
            [
                "code" => "150102012",
                "name" => "MARPARA NORTH"
            ],
            [
                "code" => "150102013",
                "name" => "MARPARA SOUTH"
            ],
            [
                "code" => "150102014",
                "name" => "PARVATUI"
            ],
            [
                "code" => "150102015",
                "name" => "PHULDUNGSEI"
            ],
            [
                "code" => "150102016",
                "name" => "W. PHULPUI"
            ],
            [
                "code" => "150102017",
                "name" => "PUKZING"
            ],
            [
                "code" => "150102018",
                "name" => "PUKZING VENGTHAR"
            ],
            [
                "code" => "150102019",
                "name" => "SAITHAH"
            ],
            [
                "code" => "150102021",
                "name" => "SILSURY"
            ],
            [
                "code" => "150102022",
                "name" => "THAIDOR"
            ],
            [
                "code" => "150102024",
                "name" => "TUIPUIBARI-I"
            ],
            [
                "code" => "150102025",
                "name" => "TUIPUIBARI-II"
            ],
            [
                "code" => "150102026",
                "name" => "TUIRUM"
            ],
            [
                "code" => "150102027",
                "name" => "W.PHAILENG DINTHAR"
            ],
            [
                "code" => "150102028",
                "name" => "W. PHAILENG"
            ],
            [
                "code" => "150102029",
                "name" => "CHHIPPUI"
            ],
            [
                "code" => "150102030",
                "name" => "HNAHVA"
            ],
            [
                "code" => "150102046",
                "name" => "ZOPUI"
            ],
            [
                "code" => "150102047",
                "name" => "TEIREI FOREST"
            ],
            [
                "code" => "150102048",
                "name" => "SALEMPARA"
            ],
            [
                "code" => "150102049",
                "name" => "DAMPARENGPUI HMAR VENG"
            ],
            [
                "code" => "150103001",
                "name" => "DAPCHHUAH"
            ],
            [
                "code" => "150103003",
                "name" => "HMUNPUI"
            ],
            [
                "code" => "150103004",
                "name" => "LENGTE"
            ],
            [
                "code" => "150103005",
                "name" => "W. SERZAWL"
            ],
            [
                "code" => "150103006",
                "name" => "NGHALCHAWM"
            ],
            [
                "code" => "150103007",
                "name" => "TUAHZAWL"
            ],
            [
                "code" => "150103008",
                "name" => "RAWPUICHHIP"
            ],
            [
                "code" => "150103009",
                "name" => "SAITLAW"
            ],
            [
                "code" => "150104001",
                "name" => "REIEK"
            ],
            [
                "code" => "150104002",
                "name" => "DARLUNG"
            ],
            [
                "code" => "150104003",
                "name" => "LUNGPHUN"
            ],
            [
                "code" => "150104004",
                "name" => "KANGHMUN"
            ],
            [
                "code" => "150104005",
                "name" => "CHUNGTLANG"
            ],
            [
                "code" => "150104006",
                "name" => "AILAWNG"
            ],
            [
                "code" => "150104007",
                "name" => "W LUNGDAR"
            ],
            [
                "code" => "150104008",
                "name" => "RULPUIHLIM"
            ],
            [
                "code" => "150104009",
                "name" => "KHAWRIHNIM"
            ],
            [
                "code" => "150104010",
                "name" => "S SABUAL"
            ],
            [
                "code" => "150104011",
                "name" => "BAWLTE"
            ],
            [
                "code" => "150104012",
                "name" => "BAWNGTHAH"
            ],
            [
                "code" => "150104013",
                "name" => "HREICHUK"
            ],
            [
                "code" => "1501EK001",
                "name" => "KANGHMUN"
            ],
            [
                "code" => "1501EK002",
                "name" => "CHUNGTLANG"
            ],
            [
                "code" => "1501EK003",
                "name" => "AILAWNG"
            ],
            [
                "code" => "1501EK004",
                "name" => "WEST LUNGDAR"
            ],
            [
                "code" => "1501EK005",
                "name" => "REIEK"
            ],
            [
                "code" => "1501EK006",
                "name" => "RULPUIHLIM"
            ],
            [
                "code" => "150801001",
                "name" => "SIAHA VAIHPI"
            ],
            [
                "code" => "150801002",
                "name" => "MEISAVAIH 'E'"
            ],
            [
                "code" => "150801003",
                "name" => "MEISATLAH"
            ],
            [
                "code" => "150801004",
                "name" => "THOSAIH"
            ],
            [
                "code" => "150801005",
                "name" => "N. SAIHA 'W'"
            ],
            [
                "code" => "150801006",
                "name" => "N. SAIHA 'E'"
            ],
            [
                "code" => "150801007",
                "name" => "COUNCIL VAIH"
            ],
            [
                "code" => "150801008",
                "name" => "AMOTLAH"
            ],
            [
                "code" => "150801009",
                "name" => "THIAHRA"
            ],
            [
                "code" => "150801010",
                "name" => "TIPI FERRY"
            ],
            [
                "code" => "150801011",
                "name" => "TISOPI"
            ],
            [
                "code" => "150801012",
                "name" => "RIASIKAH"
            ],
            [
                "code" => "150801013",
                "name" => "AMOBYU 'B' "
            ],
            [
                "code" => "150801014",
                "name" => "AMOBYU 'CH'"
            ],
            [
                "code" => "150801015",
                "name" => "THEIVA"
            ],
            [
                "code" => "150801016",
                "name" => "KAOCHAO 'E'"
            ],
            [
                "code" => "150801017",
                "name" => "AMOBYU 'ZERO'"
            ],
            [
                "code" => "150801018",
                "name" => "CHHAOLO - I"
            ],
            [
                "code" => "150801019",
                "name" => "LOBO - I"
            ],
            [
                "code" => "150801020",
                "name" => "NOAOTLAH - I"
            ],
            [
                "code" => "150801021",
                "name" => "CHHAOLO - II"
            ],
            [
                "code" => "150801022",
                "name" => "IANA"
            ],
            [
                "code" => "150801023",
                "name" => "SIATA"
            ],
            [
                "code" => "150801024",
                "name" => "NEW COLONY - I"
            ],
            [
                "code" => "150801025",
                "name" => "NEW COLONY - II"
            ],
            [
                "code" => "150801026",
                "name" => "NEW COLONY - III"
            ],
            [
                "code" => "150801027",
                "name" => "ECM VAIH"
            ],
            [
                "code" => "150801028",
                "name" => "COLLEGE VAIH - II"
            ],
            [
                "code" => "150801029",
                "name" => "SIAHATLAH - I"
            ],
            [
                "code" => "150801030",
                "name" => "SIAHATLAH - II"
            ],
            [
                "code" => "150801031",
                "name" => "NOAOTLAH - II"
            ],
            [
                "code" => "150801032",
                "name" => "COLLEGE VAIH - I"
            ],
            [
                "code" => "150801033",
                "name" => "SIAHATLAH - III"
            ],
            [
                "code" => "150801034",
                "name" => "MEISATLAH - II (JAIL VAIH)"
            ],
            [
                "code" => "150802001",
                "name" => "TIPA 'D' - II"
            ],
            [
                "code" => "150802002",
                "name" => "TIPA 'L'"
            ],
            [
                "code" => "150802003",
                "name" => "SAIKAO"
            ],
            [
                "code" => "150802004",
                "name" => "N. SAIKAO"
            ],
            [
                "code" => "150802005",
                "name" => "THEIRI"
            ],
            [
                "code" => "150802006",
                "name" => "TISI"
            ],
            [
                "code" => "150802007",
                "name" => "ZYHNO"
            ],
            [
                "code" => "150802008",
                "name" => "LOTO VAIH"
            ],
            [
                "code" => "150802009",
                "name" => "SIATLAI"
            ],
            [
                "code" => "150802010",
                "name" => "AHMYPI"
            ],
            [
                "code" => "150802011",
                "name" => "KHOPAI"
            ],
            [
                "code" => "150802012",
                "name" => "LAKI"
            ],
            [
                "code" => "150802013",
                "name" => "LOPU"
            ],
            [
                "code" => "150802014",
                "name" => "LOPE"
            ],
            [
                "code" => "150802015",
                "name" => "SUPHA"
            ],
            [
                "code" => "150802016",
                "name" => "KHAIKHY"
            ],
            [
                "code" => "150802017",
                "name" => "MIEPU"
            ],
            [
                "code" => "150802018",
                "name" => "PHURA"
            ],
            [
                "code" => "150802019",
                "name" => "PALA"
            ],
            [
                "code" => "150802020",
                "name" => "VAHIA"
            ],
            [
                "code" => "150802021",
                "name" => "KIASIE"
            ],
            [
                "code" => "150802022",
                "name" => "MAISA"
            ],
            [
                "code" => "150802023",
                "name" => "LATY"
            ],
            [
                "code" => "150802024",
                "name" => "N. LATY"
            ],
            [
                "code" => "150802025",
                "name" => "TOKALO"
            ],
            [
                "code" => "150802026",
                "name" => "LODAWH"
            ],
            [
                "code" => "150802027",
                "name" => "LOMASU"
            ],
            [
                "code" => "150802028",
                "name" => "BYMARI"
            ],
            [
                "code" => "150802029",
                "name" => "CHAKHEI - I"
            ],
            [
                "code" => "150802030",
                "name" => "CHAPI-I"
            ],
            [
                "code" => "150802031",
                "name" => "MAWHRO"
            ],
            [
                "code" => "150802032",
                "name" => "SIASI"
            ],
            [
                "code" => "150802033",
                "name" => "CHHEIHLU"
            ],
            [
                "code" => "150802034",
                "name" => "N. KHAIKHY"
            ],
            [
                "code" => "150802035",
                "name" => "CHAKHEITLAH"
            ],
            [
                "code" => "150802036",
                "name" => "TIPA 'V' - II"
            ],
            [
                "code" => "150802037",
                "name" => "TIPA 'V' - I"
            ],
            [
                "code" => "150802038",
                "name" => "CHAPI - II"
            ],
            [
                "code" => "150802039",
                "name" => "LORRAIN VILLES"
            ],
            [
                "code" => "150802040",
                "name" => "CHAKHEI - II"
            ],
            [
                "code" => "150802041",
                "name" => "CHAPI - III"
            ],
            [
                "code" => "150802042",
                "name" => "PHURA - II"
            ],
            [
                "code" => "150802043",
                "name" => "TIPA 'D' - I"
            ]
        ];
    }
}