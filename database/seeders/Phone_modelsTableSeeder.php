<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Phone_modelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone_models')->insert( [
            'id'=>1,
            'url_hash'=>'9ff118f1352e19ee1d356e5af65662a7',
            'phone_brand_id'=>1,
            'name'=>'Nokia 3210',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no3210b.gif',
            'released_at'=>'Released 1999',
            'body'=>'151g, 22.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"123.8 x 50.5 x 16.7-22.5 mm\",\"Weight\":\"151 g (5.33 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Smart messaging (Over the Air SMS) \\r\\n  Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"8 dialed, 8 received, 8 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Rotation, Snake, and Memory\",\"Languages\":\"11 from 35 total\",\"Java\":\"No\",\"Colors\":\"User exchangeable front and back covers\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:03:57',
            'updated_at'=>'2021-09-07 08:03:57'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>2,
            'url_hash'=>'3cbffc0058e76c90be37d04f06c4ce95',
            'phone_brand_id'=>1,
            'name'=>'Nokia 5110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no5110b.gif',
            'released_at'=>'Released 1998',
            'body'=>'170g, 31mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 47.5 x 31 mm, 143 cc (5.20 x 1.87 x 1.22 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Closed user group\\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"8 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 (Memory, Snake, Logic)\",\"Languages\":\"28\",\"Java\":\"No\",\"Stand-by\":\"60-270 h\",\"Talk time\":\"3-5 h\",\"Colors\":\"Xpress-On covers, 4 basic, 7 metallic\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:00',
            'updated_at'=>'2021-09-07 08:04:00'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>3,
            'url_hash'=>'d24ad4c15310f8b4fde41259f72986bf',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6110b.gif',
            'released_at'=>'Released 1998',
            'body'=>'137g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 47 x 28 mm, 130 cc (5.12 x 1.85 x 1.10 in)\",\"Weight\":\"137 g (4.83 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"60-270 h\",\"Talk time\":\"3-5 h\",\"Colors\":\"2\",\"SAR\":\"1.25 W\\/kg (head)     0.51 W\\/kg (body)     \",\"SAR EU\":\"1.52 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:02',
            'updated_at'=>'2021-09-07 08:04:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>4,
            'url_hash'=>'a3565650d264cbdca415cbd80caaee9f',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6130',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6130b.gif',
            'released_at'=>'Released 1998',
            'body'=>'152g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"141 x 48 x 25 mm (5.55 x 1.89 x 0.98 in)\",\"Weight\":\"152 g (5.36 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 600 mAh battery (BPS-1)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"125\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Languages\":\"15\",\"Java\":\"No\",\"Stand-by\":\"60-230 h\",\"Talk time\":\"3-5 h\",\"Colors\":\"2\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:04',
            'updated_at'=>'2021-09-07 08:04:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>5,
            'url_hash'=>'87ab7958ec6abe0bf2f94e27070f277b',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6150',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6150b.gif',
            'released_at'=>'Released 1998',
            'body'=>'141g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 47 x 28 mm, 130 cc (5.08 x 1.85 x 1.10 in)\",\"Weight\":\"141 g (4.97 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 600 mAh battery (BPS-1)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"150\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Languages\":\"31 total\",\"Java\":\"No\",\"Stand-by\":\"50-250 h\",\"Talk time\":\"2 h 30 min - 4 h 30\",\"Colors\":\"2\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:07',
            'updated_at'=>'2021-09-07 08:04:07'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>6,
            'url_hash'=>'91e9ffc16933a4e508ead0fba7e7213d',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8110b.gif',
            'released_at'=>'Released 1996',
            'body'=>'152g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x13 characters',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'400 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"141 x 48 x 25 mm (5.55 x 1.89 x 0.98 in)\",\"Weight\":\"152 g (5.36 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 400 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 13 characters\",\" \":\"Conference calling (1+5 persons)\",\"Card slot\":\"No\",\"Phonebook\":\"125\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"31 total\",\"Java\":\"No\",\"Stand-by\":\"80 - 150 h\",\"Talk time\":\"3 - 5 h\",\"Colors\":\"black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:09',
            'updated_at'=>'2021-09-07 08:04:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>7,
            'url_hash'=>'a160d140753583cc9184af13eed3d492',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6210',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6210b.gif',
            'released_at'=>'Released 2000',
            'body'=>'114g, 18.8mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x60 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1050 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"129.5 x 47.3 x 18.8 mm, 95 cc (5.10 x 1.86 x 0.74 in)\",\"Weight\":\"114 g (4.02 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1050 mAh battery (BLS-2N)\",\"Size\":\"\",\"Resolution\":\"96 x 60 pixels, 6 lines, 16:10 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Infrared transfer of data between compatible phones\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 Games (Snake II, Opposite, Pairs II)\",\"Languages\":\"Major European and Asian languages\",\"Java\":\"No\",\"Stand-by\":\"Up to 310 h\",\"Talk time\":\"Up to 5 h 30 min\",\"Colors\":\"Black Night, Grey Dusk and Red Sunset\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:12',
            'updated_at'=>'2021-09-07 08:04:12'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>8,
            'url_hash'=>'05099c8e5e559f49daa69b612f91be0c',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6250',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6250b.gif',
            'released_at'=>'Released 2000',
            'body'=>'167g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x60 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1200 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"142 x 50-58 x 23-27 mm, 159 cc\",\"Weight\":\"167 g (5.89 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1200 mAh battery (BLL-2)\",\"Size\":\"\",\"Resolution\":\"96 x 60 pixels, 6 lines, 16:10 ratio\",\" \":\"Voice recognition\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Infrared transfer of data between compatible phones\\r\\n  Task journal \\r\\n  Stopwatch\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"Sound level meter\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 Games (Snake II, Opposite, Pairs II)\",\"Languages\":\"Major European and Asian languages\",\"Java\":\"No\",\"Stand-by\":\"Up to 336 h\",\"Talk time\":\"Up to 5 h 50 min\",\"Colors\":\"Black Night, Grey Dusk and Red Sunset\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:14',
            'updated_at'=>'2021-09-07 08:04:14'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>9,
            'url_hash'=>'bcee1e302feb9ced1bbabdd1529cd10a',
            'phone_brand_id'=>1,
            'name'=>'Nokia 7110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no7110b.gif',
            'released_at'=>'Released ',
            'body'=>'141g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x65 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"\",\"Status\":\"Discontinued\",\"Dimensions\":\"125 x 53 x 24 mm, 125 cc (4.92 x 2.09 x 0.94 in)\",\"Weight\":\"141 g (4.97 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 600 mAh battery (BPS-1)\",\"Size\":\"\",\"Resolution\":\"96 x 65 pixels, 6 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  Navi roller\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4\",\"Languages\":\"34 total\",\"Java\":\"No\",\"Stand-by\":\"Up to 260 h\",\"Talk time\":\"Up to 4 h 30 min\",\"Colors\":\"Dark green\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:17',
            'updated_at'=>'2021-09-07 08:04:17'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>10,
            'url_hash'=>'66fbbf5272b05547b8904066ad78391e',
            'phone_brand_id'=>1,
            'name'=>'Nokia 9000 Communicator',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no9000b.gif',
            'released_at'=>'Released 1998',
            'body'=>'397g, 38mm thickness',
            'os'=>'Feature phone',
            'storage'=>'8MB storage, no card slot',
            'display_size'=>' ',
            'display_resolution'=>'640x200 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"173 x 64 x 38 mm (6.81 x 2.52 x 1.50 in)\",\"Weight\":\"397 g (14.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"640 x 200 pixels\",\" \":\"Telnet\\r\\n  Terminal\\r\\n  Organizer\\r\\n  Ringing tone composer\\r\\n  Help\\r\\n  System & security\",\"CPU\":\"Intel 386\",\"Card slot\":\"No\",\"Phonebook\":\"200\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Internal\":\"8MB\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email, Fax\",\"Browser\":\"HTML\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"35 h\",\"Talk time\":\"3 h\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:19',
            'updated_at'=>'2021-09-07 08:04:19'
        ] );


        DB::table('phone_models')->insert( [
            'id'=>11,
            'url_hash'=>'60429dc10cdebf711c27bd65287a28dc',
            'phone_brand_id'=>1,
            'name'=>'Nokia 9110i Communicator',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no9110ib.gif',
            'released_at'=>'Released 1999',
            'body'=>'253g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'8MB storage, MMC slot',
            'display_size'=>'4.5\"',
            'display_resolution'=>'640x200 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1100 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"158 x 56 x 27 mm, 218 cc (6.22 x 2.20 x 1.06 in)\",\"Weight\":\"253 g (8.92 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1100 mAh battery (BLN-3)\",\"Size\":\"4.5 inches, 110 x 35 mm, 37.2 cm2 (~42.0% screen-to-body ratio)\",\"Resolution\":\"640 x 200 pixels (~149 ppi density)\",\" \":\"Telnet\\r\\n  Terminal\\r\\n  Organizer\\r\\n  Help\\r\\n  System & security\",\"CPU\":\"AMD 486\",\"Card slot\":\"MMC\",\"Phonebook\":\"Many\",\"Call records\":\"Yes\",\"Internal\":\"8MB\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email, Fax\",\"Browser\":\"WAP, HTML\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Available separately\",\"Java\":\"No\",\"Stand-by\":\"60 - 170 h\",\"Talk time\":\"3 - 6 h\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:21',
            'updated_at'=>'2021-09-07 08:04:21'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>12,
            'url_hash'=>'85c6581785b225952147813b5055aa99',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8210',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8210t.gif',
            'released_at'=>'Released 1999',
            'body'=>'79g, 17.4mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"101.5 x 44.5 x 17.4 mm, 66 cc (4.00 x 1.75 x 0.69 in)\",\"Weight\":\"79 g (2.79 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Picture messaging\\r\\n  Predictive text input\\r\\n  Over-the-air activation for sending\\/receiving phone numbers\\r\\n  Business card sending\\/receiving\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4\",\"Languages\":\"32 total\",\"Java\":\"No\",\"Stand-by\":\"50 - 150 h\",\"Talk time\":\"2 h - 3 h 20 min\",\"Colors\":\"6 Xpress-on covers\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:24',
            'updated_at'=>'2021-09-07 08:04:24'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>13,
            'url_hash'=>'e497825628ab4046bd3473fdd44bb22e',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8810',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8810t.gif',
            'released_at'=>'Released 1998',
            'body'=>'118g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"107 x 46 x 18 mm, 74 cc (4.21 x 1.81 x 0.71 in)\",\"Weight\":\"118 g (4.16 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery (BMP-1A)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Smart messaging\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"32 total\",\"Java\":\"No\",\"Stand-by\":\"15 - 60 h\",\"Talk time\":\"30 min-1 h\",\"Colors\":\"Metallic\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:26',
            'updated_at'=>'2021-09-07 08:04:26'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>14,
            'url_hash'=>'35cefb37d4feb93aede47240ee578a6b',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8850',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8850t.gif',
            'released_at'=>'Released 1999',
            'body'=>'91g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"100 x 44 x 17 mm, 70 cc (3.94 x 1.73 x 0.67 in)\",\"Weight\":\"91 g (3.21 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 830 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Picture messaging\\r\\n  Predictive text input\\r\\n  Smart Messaging\\r\\n  Organizer\\r\\n  Infrared transfer of names and phone numbers\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"Yes\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Languages\":\"32 total\",\"Java\":\"No\",\"Stand-by\":\"50 - 150 h\",\"Talk time\":\"2 h - 3 h 20 min\",\"Colors\":\"Metallic\",\"SAR EU\":\"0.43 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:29',
            'updated_at'=>'2021-09-07 08:04:29'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>15,
            'url_hash'=>'34d33a761c561998e62eab2240a34ecf',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8890',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8890t.gif',
            'released_at'=>'Released 2000',
            'body'=>'91g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"100 x 44 x 18 mm, 70 cc (3.94 x 1.73 x 0.71 in)\",\"Weight\":\"91 g (3.21 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 830 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Picture messaging\\r\\n  Predictive text input\\r\\n  Smart Messaging\\r\\n  Organizer\\r\\n  Infrared transfer of names and phone numbers\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4\",\"Languages\":\"23\",\"Java\":\"No\",\"Stand-by\":\"50 - 150 h\",\"Talk time\":\"2 h - 3 h 20 min\",\"Colors\":\"Metallic\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:31',
            'updated_at'=>'2021-09-07 08:04:31'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>16,
            'url_hash'=>'7f3631091ec7330b0dc2e8e44742b115',
            'phone_brand_id'=>1,
            'name'=>'Nokia 3110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no3110b.gif',
            'released_at'=>'Released 1997',
            'body'=>'146g with slim battery, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x13 characters',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'400 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"136 x 45 x 21 mm, 139 cc (5.35 x 1.77 x 0.83 in)\",\"Weight\":\"146 g with slim battery (5.15 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 400 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 13 characters\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"40 - 95 h\",\"Talk time\":\"1 h 30 min - 2 h 45\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:34',
            'updated_at'=>'2021-09-07 08:04:34'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>17,
            'url_hash'=>'8e22880617e5778116a9685c12ccf68a',
            'phone_brand_id'=>1,
            'name'=>'Nokia 2110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no2110b.gif',
            'released_at'=>'Released 1995',
            'body'=>'236g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x13 characters',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"148 x 56 x 25 mm (5.83 x 2.20 x 0.98 in)\",\"Weight\":\"236g (8.32 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 13 characters\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM card + 125 entries\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"30 h\",\"Talk time\":\"2 h 40 min\",\"Colors\":\"Black\",\"SAR\":\"1.48 W\\/kg (head)     0.13 W\\/kg (body)     \",\"SAR EU\":\"0.85 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:36',
            'updated_at'=>'2021-09-07 08:04:36'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>18,
            'url_hash'=>'80b9949d4970d3257046af01ee058253',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Club db',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alclub2b.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"122 x 48 x 25 mm, 160 cc (4.80 x 1.89 x 0.98 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 130 h\",\"Talk time\":\"up to 4 h 45 min\",\"Colors\":\"Lapis Grey, Agate Grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:38',
            'updated_at'=>'2021-09-07 08:04:38'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>19,
            'url_hash'=>'6ac4b63ce2daa2986fb3fd6a2070e6ac',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Easy db',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/aleasy2b.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"122 x 48 x 25 mm, 160 cc (4.80 x 1.89 x 0.98 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 130 h\",\"Talk time\":\"up to 4 h 45 min\",\"Colors\":\"9 (Atoll Blue, Havana Brown, ...)\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:41',
            'updated_at'=>'2021-09-07 08:04:41'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>20,
            'url_hash'=>'b17d0ec63fd33c92a0a59f26ef7559d1',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Max db',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/almax2b.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"122 x 48 x 25 mm, 160 cc (4.80 x 1.89 x 0.98 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 130 h\",\"Talk time\":\"up to 4 h 45 min\",\"Colors\":\"Denim Blue, Lolita, Grey, Gala Black, Ranger Green, Techno White\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:43',
            'updated_at'=>'2021-09-07 08:04:43'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>21,
            'url_hash'=>'1f8fd04feb570549a052b1d5b3405853',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT View db',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alview2b.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 5x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 25 mm, 142 cc (5.24 x 2.13 x 0.98 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 5 x 15 chars, 3:2 ratio\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 130 h\",\"Talk time\":\"up to 4 h 45 min\",\"Colors\":\"Jade, Obsidian Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:45',
            'updated_at'=>'2021-09-07 08:04:45'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>22,
            'url_hash'=>'bb0f7e7f8b9ccacbf3fd42129be3164b',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT View db @',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alview3b.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 5x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 25 mm, 142 cc (5.24 x 2.13 x 0.98 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 5 x 15 chars, 3:2 ratio\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 130 h\",\"Talk time\":\"up to 4 h 45 min\",\"Colors\":\"Jade, Obsidian Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:48',
            'updated_at'=>'2021-09-07 08:04:48'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>23,
            'url_hash'=>'9dadeb7da6aff7d420f766aa2dda8445',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Pocket',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alpockb.gif',
            'released_at'=>'Released 1999',
            'body'=>'125g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 5x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 65 x 19 mm (4.57 x 2.56 x 0.75 in)\",\"Weight\":\"125 g (4.41 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 5 x 15 chars, 3:2 ratio\",\" \":\"Internet ready\\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"350\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 80 h\",\"Talk time\":\"up to 3 h 30 min\",\"Colors\":\"Gray\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:50',
            'updated_at'=>'2021-09-07 08:04:50'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>24,
            'url_hash'=>'88c74b81b2bb1e0e7882bba71ccf1efc',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT COM',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alcomb.gif',
            'released_at'=>'Released 1998',
            'body'=>'230g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'512 KB storage, no card slot',
            'display_size'=>' ',
            'display_resolution'=>'160x239 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'880 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"151 x 62 x 24 mm (5.94 x 2.44 x 0.94 in)\",\"Weight\":\"230 g (8.11 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 880 mAh battery\",\"Size\":\"\",\"Resolution\":\"160 x 239 pixels, 3:2 ratio\",\" \":\"Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"A lot\",\"Call records\":\"20 dialed, 20 received, 20 missed calls\",\"Internal\":\"512 KB\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Languages\":\"4\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"2 h\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:53',
            'updated_at'=>'2021-09-07 08:04:53'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>25,
            'url_hash'=>'ca6aaaa7d8b8a27cd67839ad864a00ae',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Pro',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alprob.gif',
            'released_at'=>'Released 1998',
            'body'=>'145g, 15mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 15 mm (5.24 x 2.13 x 0.59 in)\",\"Weight\":\"145 g (5.11 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"150 min\",\"Colors\":\"Gray\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:55',
            'updated_at'=>'2021-09-07 08:04:55'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>26,
            'url_hash'=>'f952bdc9a1d157f65901e443aa8f95fa',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Easy HF',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/aleasyb.gif',
            'released_at'=>'Released 1998',
            'body'=>'160g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 25 mm, 160 cc (5.24 x 2.13 x 0.98 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"6 h\",\"Colors\":\"Many\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:04:58',
            'updated_at'=>'2021-09-07 08:04:58'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>27,
            'url_hash'=>'1a2f4cde1d61ebff4b62dc6e1ed1ece2',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Easy',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/aleasy1b.gif',
            'released_at'=>'Released 1998',
            'body'=>'160g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 25 mm, 160 cc (5.24 x 2.13 x 0.98 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"6 h\",\"Colors\":\"Many\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:00',
            'updated_at'=>'2021-09-07 08:05:00'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>28,
            'url_hash'=>'12a9b942bbf80f1b5fd682b781e5e6dd',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Club',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alclubb.gif',
            'released_at'=>'Released 1998',
            'body'=>'160g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 28 mm, 160 cc (5.24 x 2.13 x 1.10 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"6 h\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:02',
            'updated_at'=>'2021-09-07 08:05:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>29,
            'url_hash'=>'9acbd58af0cc76216d117eeb13388b86',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Club +',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alclubpb.gif',
            'released_at'=>'Released 1998',
            'body'=>'160g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 28 mm, 160 cc (5.24 x 2.13 x 1.10 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"6 h\",\"Colors\":\"Gray\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:05',
            'updated_at'=>'2021-09-07 08:05:05'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>30,
            'url_hash'=>'5c6f294fd38bdb7444cb20e225a1ce10',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Max',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/almaxb.gif',
            'released_at'=>'Released 1998',
            'body'=>'160g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 25 mm, 160 cc (5.24 x 2.13 x 0.98 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Works with AAA batteries\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"6 h\",\"Colors\":\"Many\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:08',
            'updated_at'=>'2021-09-07 08:05:08'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>31,
            'url_hash'=>'a4ad39399c485cda69d7f0e3ec92d52a',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT View',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alviewb.gif',
            'released_at'=>'Released 1998',
            'body'=>'160g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"133 x 54 x 25 mm, 160 cc (5.24 x 2.13 x 0.98 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 15 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Organizer\\r\\n  Chinese and Arabic characters\\r\\n  Works with AAA batteries\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"6 h\",\"Colors\":\"5 colors\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:10',
            'updated_at'=>'2021-09-07 08:05:10'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>32,
            'url_hash'=>'0a4e3f6d23db7a31f0b3bb7315be5818',
            'phone_brand_id'=>2,
            'name'=>'alcatel HC 1000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alh1000b.gif',
            'released_at'=>'Released 1997',
            'body'=>'172g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"143 x 60 x 23 mm (5.63 x 2.36 x 0.91 in)\",\"Weight\":\"172 g (6.07 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"28 h\",\"Talk time\":\"80 min\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:12',
            'updated_at'=>'2021-09-07 08:05:12'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>33,
            'url_hash'=>'4f468329b61739ccacb11a43f74c203d',
            'phone_brand_id'=>2,
            'name'=>'alcatel HC 800',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alh800b.gif',
            'released_at'=>'Released 1997',
            'body'=>'172g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"143 x 60 x 23 mm (5.63 x 2.36 x 0.91 in)\",\"Weight\":\"172 g (6.07 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:15',
            'updated_at'=>'2021-09-07 08:05:15'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>34,
            'url_hash'=>'39d2e9220608ad7016dc38f7b126beb4',
            'phone_brand_id'=>3,
            'name'=>'Benefon Twin',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/betwinb.gif',
            'released_at'=>'Released 2000',
            'body'=>'105g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x48 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 49 x 27 mm, 115 cc (4.41 x 1.93 x 1.06 in)\",\"Weight\":\"105 g (3.70 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 48 pixels, 6 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Phone ON\\/OFF timers\\r\\n  User-changeable display masks\",\"Card slot\":\"No\",\"Phonebook\":\"255\",\"Call records\":\"15 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Wall breaker, Galactic gunner, Labyrinth\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"9 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:17',
            'updated_at'=>'2021-09-07 08:05:17'
        ] );
        DB::table('phone_models')->insert( [
            'id'=>35,
            'url_hash'=>'5a11fe8633bd93bba5c51fefa24e67fe',
            'phone_brand_id'=>3,
            'name'=>'Benefon Q',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/beqb.gif',
            'released_at'=>'Released 2000',
            'body'=>'89g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x48 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'620 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"100 x 46 x 18 mm, 74 cc (3.94 x 1.81 x 0.71 in)\",\"Weight\":\"89 g (3.14 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 620 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 48 pixels, 6 lines\",\" \":\"TCP\\/IP support\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Phone ON\\/OFF timers\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.1, HTMP(MS)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"5 h 20 min\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:20',
            'updated_at'=>'2021-09-07 08:05:20'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>36,
            'url_hash'=>'d5831d2410d8b248892888cd8e12bbb8',
            'phone_brand_id'=>3,
            'name'=>'Benefon Track',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/belocub.gif',
            'released_at'=>'Released 2000',
            'body'=>'149g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x48 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 49 x 23 mm, 132 cc (5.08 x 1.93 x 0.91 in)\",\"Weight\":\"149 g (5.26 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 48 pixels, 5 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Phone ON\\/OFF timers\",\"Card slot\":\"No\",\"Phonebook\":\"255\",\"Call records\":\"15 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"Yes\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"240 h\",\"Talk time\":\"10 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:22',
            'updated_at'=>'2021-09-07 08:05:22'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>37,
            'url_hash'=>'8dc786f799752fb5b18e652fa46b1c3d',
            'phone_brand_id'=>3,
            'name'=>'Benefon Esc!',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/beescb.gif',
            'released_at'=>'Released 1999',
            'body'=>'150g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x160 pixels, 20 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 49 x 23 mm, 138 cc (5.08 x 1.93 x 0.91 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 160 pixels, 20 lines, 16:10 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Phone ON\\/OFF timers\",\"Card slot\":\"No\",\"Phonebook\":\"255\",\"Call records\":\"15 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"Yes\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"240 h\",\"Talk time\":\"10 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:24',
            'updated_at'=>'2021-09-07 08:05:24'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>38,
            'url_hash'=>'9a7e56aa41c8b474ebb197181567bbf9',
            'phone_brand_id'=>3,
            'name'=>'Benefon iO',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/beiob.gif',
            'released_at'=>'Released 1999',
            'body'=>'167g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"122 x 56 x 24 mm (4.80 x 2.20 x 0.94 in)\",\"Weight\":\"167 g (5.89 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"6 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Phone ON\\/OFF timers\\r\\n  Temperature indicator\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"15 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"5 h\",\"Colors\":\"6\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:27',
            'updated_at'=>'2021-09-07 08:05:27'
        ] );




        DB::table('phone_models')->insert( [
            'id'=>39,
            'url_hash'=>'798ae57677a6b5031fe76cc40696fecc',
            'phone_brand_id'=>3,
            'name'=>'Benefon Vega',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/bevegab.gif',
            'released_at'=>'Released 1999',
            'body'=>'190g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"145 x 56 x 23 mm (5.71 x 2.20 x 0.91 in)\",\"Weight\":\"190 g (6.70 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"6 lines\",\" \":\"Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"15 dialed, 12 received, 12 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"3 - 6 days\",\"Talk time\":\"4 - 10 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:29',
            'updated_at'=>'2021-09-07 08:05:29'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>40,
            'url_hash'=>'3ae199901017ed62d5adf04ff6c649eb',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-250',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss250b.gif',
            'released_at'=>'Released 1996',
            'body'=>'179g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"124 x 48 x 25 mm (4.88 x 1.89 x 0.98 in)\",\"Weight\":\"179 g (6.31 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"40 h\",\"Talk time\":\"2 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:31',
            'updated_at'=>'2021-09-07 08:05:31'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>41,
            'url_hash'=>'7a5566ef776b4c3945ca22a89c174cdd',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-500',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss500b.gif',
            'released_at'=>'Released 1998',
            'body'=>'115g with slim battery, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'78x42 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 48 x 19 mm (4.41 x 1.89 x 0.75 in)\",\"Weight\":\"115g with slim battery (4.06 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"78 x 42 pixels, 4 lines, 17:9 ratio\",\" \":\"Voice dial\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"11 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"2 h 30 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:34',
            'updated_at'=>'2021-09-07 08:05:34'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>42,
            'url_hash'=>'71fee0753f7677f91b3dfad949835bb6',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-600',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss600b.gif',
            'released_at'=>'Released 1999',
            'body'=>'95g with slim battery, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"108 x 44 x 21 mm (4.25 x 1.73 x 0.83 in)\",\"Weight\":\"95 g with slim battery (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 lines\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Scratch pad memo\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"65 h\",\"Talk time\":\"3 h 30 min\",\"Colors\":\"2\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:36',
            'updated_at'=>'2021-09-07 08:05:36'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>43,
            'url_hash'=>'c77b8d8c0aa4ce6f69d3d2a693ae2ef7',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-800',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss800b.gif',
            'released_at'=>'Released 2000',
            'body'=>'104g with slim battery, 23.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels, 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"88 x 50 x 23.5 mm (3.46 x 1.97 x 0.93 in)\",\"Weight\":\"104 g with slim battery (3.67 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 8 lines, 18:9 ratio\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Scratch pad memo\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"8 ( Casino \\/ Roulette \\/ Black Jack \\/ Racing \\/ Smiper \\/ Snake \\/ Mole \\/ Othello )\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:39',
            'updated_at'=>'2021-09-07 08:05:39'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>44,
            'url_hash'=>'2aa344c974a0ee06417f631591ce3e6b',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-810',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss810b.gif',
            'released_at'=>'Released 2000',
            'body'=>'104g with slim battery, 23.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels, 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"88 x 50 x 23.5 mm (3.46 x 1.97 x 0.93 in)\",\"Weight\":\"104 g with slim battery (3.67 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 8 lines, 18:9 ratio\",\" \":\"Organizer\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Scratch pad memo\\r\\n  Melody creation\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"8 ( Casino \\/ Roulette \\/ Black Jack \\/ Racing \\/ Smiper \\/ Snake \\/ Mole \\/ Othello )\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:41',
            'updated_at'=>'2021-09-07 08:05:41'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>45,
            'url_hash'=>'a2a20fe7e2952cc56e3b0833905b953e',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-2100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss2110b.gif',
            'released_at'=>'Released 1999',
            'body'=>'111g with slim battery, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'115x60 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 24 mm (4.57 x 1.77 x 0.94 in)\",\"Weight\":\"111 g with slim battery (3.92 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"115 x 60 pixels, 4 lines, 19:10 ratio\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"85 h\",\"Talk time\":\"3.5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:43',
            'updated_at'=>'2021-09-07 08:05:43'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>46,
            'url_hash'=>'c90190121122f08997aa0302a1c05496',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-2200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss2200b.gif',
            'released_at'=>'Released 1999',
            'body'=>'111g with slim battery, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'115x60 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 44 x 22 mm (3.86 x 1.73 x 0.87 in)\",\"Weight\":\"111 g with slim battery (3.92 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"115 x 60 pixels, 4 lines, 19:10 ratio\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Manner Function\\r\\n  Built-in type ear microphone\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"14\",\"Java\":\"No\",\"Stand-by\":\"125 h\",\"Talk time\":\"3.5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:46',
            'updated_at'=>'2021-09-07 08:05:46'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>47,
            'url_hash'=>'d1373f4ef6c60377bd40bbd48cfb65d8',
            'phone_brand_id'=>4,
            'name'=>'Samsung SGH-2400',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ss2400b.gif',
            'released_at'=>'Released 1999',
            'body'=>'90g with slim battery, 18.8mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'115x60 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"108 x 45 x 18.8 mm (4.25 x 1.77 x 0.74 in)\",\"Weight\":\"90 g with slim battery (3.17 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"115 x 60 pixels, 4 lines, 19:10 ratio\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Built-in type ear microphone\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"76 h\",\"Talk time\":\"4 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:48',
            'updated_at'=>'2021-09-07 08:05:48'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>48,
            'url_hash'=>'456a01b572308375591f46b6db62ef9b',
            'phone_brand_id'=>4,
            'name'=>'Samsung A100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssa100b.gif',
            'released_at'=>'Released 2000',
            'body'=>'87g with slim battery, 22.9mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'115x60 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"80 x 42 x 22.9 mm (3.15 x 1.65 x 0.90 in)\",\"Weight\":\"87 g with slim battery (3.07 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion\",\"Size\":\"\",\"Resolution\":\"115 x 60 pixels, 4 lines, 19:10 ratio\",\" \":\"Organizer\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3.5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:51',
            'updated_at'=>'2021-09-07 08:05:51'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>49,
            'url_hash'=>'47b1d5830b0cd81e67674a1bdf3be643',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Galaxy',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/migalab.gif',
            'released_at'=>'Released 1999',
            'body'=>'149g, 29mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 49 x 29 mm, 140 cc (5.20 x 1.93 x 1.14 in)\",\"Weight\":\"149 g (5.26 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:53',
            'updated_at'=>'2021-09-07 08:05:53'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>50,
            'url_hash'=>'e6eaa92d413c158878c496090fc25d97',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Astral',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/miastrb.gif',
            'released_at'=>'Released 1999',
            'body'=>'149g, 29mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 49 x 29 mm, 140 cc (5.20 x 1.93 x 1.14 in)\",\"Weight\":\"149 g (5.26 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:56',
            'updated_at'=>'2021-09-07 08:05:56'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>51,
            'url_hash'=>'a91c6f0cf0826bb77f3543f6bf6eafbf',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Geo',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/migeob.gif',
            'released_at'=>'Released 1999',
            'body'=>'149g, 29mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 49 x 29 mm, 140 cc (5.20 x 1.93 x 1.14 in)\",\"Weight\":\"149 g (5.26 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:05:58',
            'updated_at'=>'2021-09-07 08:05:58'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>52,
            'url_hash'=>'688538980d78d35242b83a2a4391869e',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Geo-@',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/migeo2b.gif',
            'released_at'=>'Released 1999',
            'body'=>'149g, 29mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 49 x 29 mm, 140 cc (5.20 x 1.93 x 1.14 in)\",\"Weight\":\"149 g (5.26 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"2 - Wine red & Dark grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:02',
            'updated_at'=>'2021-09-07 08:06:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>53,
            'url_hash'=>'7ad88a59e35fdf26836f93f7a0b78108',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Aria',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/miariab.gif',
            'released_at'=>'Released 2000',
            'body'=>'90g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'580 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"123 x 40 x 23 mm, 90 cc (4.84 x 1.57 x 0.91 in)\",\"Weight\":\"90 g (3.17 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 580 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Predictive text input for 5 languages\\r\\n  Organizer\\r\\n  Auto On\\/Off switch\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"200\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"75 h\",\"Talk time\":\"2 h\",\"Colors\":\"2\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:04',
            'updated_at'=>'2021-09-07 08:06:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>54,
            'url_hash'=>'82f5d38fe8a1eb9f0efdb90d133e7416',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Cosmo',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/micosmb.gif',
            'released_at'=>'Released 2000',
            'body'=>'69g, 16mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"103 x 51 x 16 mm, 72 cc (4.06 x 2.01 x 0.63 in)\",\"Weight\":\"69 g (2.43 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 540 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Predictive text input for 5 languages\\r\\n  Calculator\\r\\n  Auto On\\/Off switch\\r\\n  Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"3 h\",\"Colors\":\"2\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:06',
            'updated_at'=>'2021-09-07 08:06:06'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>55,
            'url_hash'=>'f08d75f34f91b75df7a07d6d62b0dce7',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium fx',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mifxb.gif',
            'released_at'=>'Released 2000',
            'body'=>'120g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 50 x 28 mm (4.72 x 1.97 x 1.10 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:09',
            'updated_at'=>'2021-09-07 08:06:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>56,
            'url_hash'=>'f67f3a9136b9d25ba1f31a7c54ce3488',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium xs',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mixsb.gif',
            'released_at'=>'Released 2000',
            'body'=>'120g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 50 x 28 mm (4.72 x 1.97 x 1.10 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:11',
            'updated_at'=>'2021-09-07 08:06:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>57,
            'url_hash'=>'b0a2ca0c3ab4ff287f0dcd60f7b5ca5a',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Mondo',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mimondb.gif',
            'released_at'=>'Released 2000',
            'body'=>'200g, 19mm thickness',
            'os'=>'Microsoft Windows PocketPC',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'240x320 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"139.5 x 84 x 19 mm (5.49 x 3.31 x 0.75 in)\",\"Weight\":\"200 g (7.05 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"240 x 320 pixels, 4:3 ratio\",\"OS\":\"Microsoft Windows PocketPC\",\"CPU\":\"64-bit NEC VR4131 166 MHz\",\"Card slot\":\"No\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  PDA compatible\\r\\n  MP3 reader\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Languages\":\"8\",\"Stand-by\":\"100 h\",\"Talk time\":\"2 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:14',
            'updated_at'=>'2021-09-07 08:06:14'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>58,
            'url_hash'=>'de0ad22ef5494ad483930896c16088ca',
            'phone_brand_id'=>6,
            'name'=>'Motorola M3888',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mom3888b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 25 mm, 150 cc (5.51 x 1.97 x 0.98 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:16',
            'updated_at'=>'2021-09-07 08:06:16'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>59,
            'url_hash'=>'44a22c2d9a78e91dab2f2a38812694b8',
            'phone_brand_id'=>6,
            'name'=>'Motorola M3788',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mom3788b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 25 mm, 150 cc (5.51 x 1.97 x 0.98 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:18',
            'updated_at'=>'2021-09-07 08:06:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>60,
            'url_hash'=>'97cb9f947f799adb180cebf6b07225a4',
            'phone_brand_id'=>6,
            'name'=>'Motorola M3688',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mom3688b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 25 mm, 150 cc (5.51 x 1.97 x 0.98 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:21',
            'updated_at'=>'2021-09-07 08:06:21'
        ] );





        DB::table('phone_models')->insert( [
            'id'=>61,
            'url_hash'=>'ee40e4a2ed39839a7fcf0c2719dd7c5e',
            'phone_brand_id'=>6,
            'name'=>'Motorola M3588',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mom3588b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 25 mm, 150 cc (5.51 x 1.97 x 0.98 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:23',
            'updated_at'=>'2021-09-07 08:06:23'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>62,
            'url_hash'=>'df8f0f94952ab587d057fbec8e0feef8',
            'phone_brand_id'=>6,
            'name'=>'Motorola M3288',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mom3288b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 25 mm, 150 cc (5.51 x 1.97 x 0.98 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"27\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:25',
            'updated_at'=>'2021-09-07 08:06:25'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>63,
            'url_hash'=>'384e9180c7f79ef3c3505ba40ac0e81e',
            'phone_brand_id'=>6,
            'name'=>'Motorola M3188',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mom3188b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 25 mm, 150 cc (5.51 x 1.97 x 0.98 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:28',
            'updated_at'=>'2021-09-07 08:06:28'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>64,
            'url_hash'=>'8e1e922d1517fd05950dd4a967e55d36',
            'phone_brand_id'=>6,
            'name'=>'Motorola cd920',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mocd920b.gif',
            'released_at'=>'Released 1998',
            'body'=>'120g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1000 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 55 x 27 mm (5.08 x 2.17 x 1.06 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1000 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 x 12 chars\",\" \":\"Voice note ( 3 min )\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"105 h\",\"Talk time\":\"270 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:30',
            'updated_at'=>'2021-09-07 08:06:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>65,
            'url_hash'=>'b9f33ca788de5eb1b45b679688beebec',
            'phone_brand_id'=>6,
            'name'=>'Motorola cd930',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mocd930b.gif',
            'released_at'=>'Released 1998',
            'body'=>'120g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1000 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 55 x 27 mm (5.08 x 2.17 x 1.06 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1000 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 x 12 chars\",\" \":\"Voice note ( 3 min )\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"105 h\",\"Talk time\":\"270 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:33',
            'updated_at'=>'2021-09-07 08:06:33'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>66,
            'url_hash'=>'69de66b00d91c1e029b8c8983b115165',
            'phone_brand_id'=>6,
            'name'=>'Motorola StarTAC 130',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/most130b.gif',
            'released_at'=>'Released 1998',
            'body'=>'95g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"94 x 55 x 19 mm (3.70 x 2.17 x 0.75 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 15 chars\",\" \":\"Voice note ( 3 min )\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"50 h\",\"Talk time\":\"140 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:35',
            'updated_at'=>'2021-09-07 08:06:35'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>67,
            'url_hash'=>'b852e69dac38786d61d28deeed733fd2',
            'phone_brand_id'=>6,
            'name'=>'Motorola StarTAC 85',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/most85b.gif',
            'released_at'=>'Released 1997',
            'body'=>'112g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 57 x 23 mm (3.86 x 2.24 x 0.91 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 15 chars\",\" \":\"Voice note ( 3 min )\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"75 h\",\"Talk time\":\"230 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:37',
            'updated_at'=>'2021-09-07 08:06:37'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>68,
            'url_hash'=>'88e3d65e3c8160e4ea9630fc150ca344',
            'phone_brand_id'=>6,
            'name'=>'Motorola StarTAC 75+',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/most75pb.gif',
            'released_at'=>'Released 1997',
            'body'=>'112g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 57 x 23 mm (3.86 x 2.24 x 0.91 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"40 h\",\"Talk time\":\"120 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:40',
            'updated_at'=>'2021-09-07 08:06:40'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>69,
            'url_hash'=>'668d54cfa995c25e37d2e488ec27e8d9',
            'phone_brand_id'=>6,
            'name'=>'Motorola StarTAC 75',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/most75b.gif',
            'released_at'=>'Released 1997',
            'body'=>'112g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 57 x 23 mm (3.86 x 2.24 x 0.91 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"40 h\",\"Talk time\":\"120 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:42',
            'updated_at'=>'2021-09-07 08:06:42'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>70,
            'url_hash'=>'db29d0faaa41191c2539c7a670d30469',
            'phone_brand_id'=>6,
            'name'=>'Motorola StarTAC Rainbow',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mostrbb.gif',
            'released_at'=>'Released 1997',
            'body'=>'112g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 57 x 23 mm (3.86 x 2.24 x 0.91 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"16\",\"Java\":\"No\",\"Stand-by\":\"40 h\",\"Talk time\":\"120 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:44',
            'updated_at'=>'2021-09-07 08:06:44'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>71,
            'url_hash'=>'c59650839aa1b221209c1e3d9aae77fa',
            'phone_brand_id'=>6,
            'name'=>'Motorola SlimLite',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mosliteb.gif',
            'released_at'=>'Released 1997',
            'body'=>'141g, 16mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"143 x 57 x 16 mm (5.63 x 2.24 x 0.63 in)\",\"Weight\":\"141 g (4.97 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"52 h\",\"Talk time\":\"160 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:47',
            'updated_at'=>'2021-09-07 08:06:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>72,
            'url_hash'=>'b84b1b2ccd7fc04945a4d9ff9511acf7',
            'phone_brand_id'=>6,
            'name'=>'Motorola V3688',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mov3688b.gif',
            'released_at'=>'Released 1998',
            'body'=>'83g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"83 x 44 x 25 mm (3.27 x 1.73 x 0.98 in)\",\"Weight\":\"83 g (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 5 lines, 3:2 ratio\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"200 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:49',
            'updated_at'=>'2021-09-07 08:06:49'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>73,
            'url_hash'=>'160a2c00a8075d6a08a3f546dd86c19d',
            'phone_brand_id'=>6,
            'name'=>'Motorola Timeport L7089',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mol7089b.gif',
            'released_at'=>'Released 2000',
            'body'=>'140g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 46 x 23 mm (5.12 x 1.81 x 0.91 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Voice note\\r\\n  Voice activation\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"27\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"210 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:51',
            'updated_at'=>'2021-09-07 08:06:51'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>74,
            'url_hash'=>'d26d43f11d610ce58e9ca49b9137b610',
            'phone_brand_id'=>6,
            'name'=>'Motorola Timeport P7389',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mop7389b.gif',
            'released_at'=>'Released 2000',
            'body'=>'140g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 46 x 23 mm (5.12 x 1.81 x 0.91 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Voice note\\r\\n  Voice activation\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"27\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"210 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:54',
            'updated_at'=>'2021-09-07 08:06:54'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>75,
            'url_hash'=>'510a36d3f6e3397d3c18ef2d3f0ff1f5',
            'phone_brand_id'=>6,
            'name'=>'Motorola Talkabout T2288',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mot2288b.gif',
            'released_at'=>'Released 2000',
            'body'=>'140g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 47 x 27 mm (5.12 x 1.85 x 1.06 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 4 lines, 3:2 ratio\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"30\",\"Java\":\"No\",\"Stand-by\":\"135 h\",\"Talk time\":\"210 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:57',
            'updated_at'=>'2021-09-07 08:06:57'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>76,
            'url_hash'=>'f5b9d2585fb232badee01483ff35f9bb',
            'phone_brand_id'=>6,
            'name'=>'Motorola d520',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mod520b.gif',
            'released_at'=>'Released 1998',
            'body'=>'170g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 27 mm (5.51 x 1.97 x 1.06 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"180 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:06:59',
            'updated_at'=>'2021-09-07 08:06:59'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>77,
            'url_hash'=>'807a18202be51614c146165a02ba9e88',
            'phone_brand_id'=>7,
            'name'=>'Siemens C10',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic10b.gif',
            'released_at'=>'Released 1998',
            'body'=>'165g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"137 x 55 x 22 mm, 149 cc (5.39 x 2.17 x 0.87 in)\",\"Weight\":\"165 g (5.82 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"5 dialed, 4 received, 4 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"5 h\",\"Colors\":\"3 - blue, red, grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:02',
            'updated_at'=>'2021-09-07 08:07:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>78,
            'url_hash'=>'4468831be4d0b94d8bdb6c751bd00f9f',
            'phone_brand_id'=>7,
            'name'=>'Siemens C11',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic11b.gif',
            'released_at'=>'Released 1998',
            'body'=>'165g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"137 x 55 x 22 mm, 149 cc (5.39 x 2.17 x 0.87 in)\",\"Weight\":\"165 g (5.82 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"5 dialed, 4 received, 4 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"5 h\",\"Colors\":\"3 - blue, red, grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:04',
            'updated_at'=>'2021-09-07 08:07:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>79,
            'url_hash'=>'771ce597db4964804ebd76bcf6af459e',
            'phone_brand_id'=>7,
            'name'=>'Siemens S10',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis10b.gif',
            'released_at'=>'Released 1998',
            'body'=>'185g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x54 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"147 x 46 x 25 mm, 160 cc (5.79 x 1.81 x 0.98 in)\",\"Weight\":\"185 g (6.53 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1800 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 54 pixels, 6 lines, 16:9 ratio\",\" \":\"Voice memo (20 sec)\\r\\n  Help function\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"10 h\",\"Colors\":\"Anthracite\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:06',
            'updated_at'=>'2021-09-07 08:07:06'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>80,
            'url_hash'=>'e5da50f66004c962bf6bb039fc62f126',
            'phone_brand_id'=>7,
            'name'=>'Siemens S11',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis11b.gif',
            'released_at'=>'Released 1998',
            'body'=>'185g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x54 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"147 x 46 x 25 mm, 160 cc (5.79 x 1.81 x 0.98 in)\",\"Weight\":\"185 g (6.53 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1800 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 54 pixels, 6 lines, 16:9 ratio\",\" \":\"Voice memo (20 sec)\\r\\n  Help function\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"10 h\",\"Colors\":\"Anthracite\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:09',
            'updated_at'=>'2021-09-07 08:07:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>81,
            'url_hash'=>'9386b7bf256167a217e27decffd3c6ab',
            'phone_brand_id'=>7,
            'name'=>'Siemens S10 active',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis10ab.gif',
            'released_at'=>'Released 1998',
            'body'=>'185g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x54 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"150 x 49 x 25 mm, 170 cc (5.91 x 1.93 x 0.98 in)\",\"Weight\":\"185 g (6.53 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1800 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 54 pixels, 6 lines, 16:9 ratio\",\" \":\"Voice memo (20 sec)\\r\\n  Help function\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"10 h\",\"Colors\":\"3 - Green, Grey, Red\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:11',
            'updated_at'=>'2021-09-07 08:07:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>82,
            'url_hash'=>'c91e94e66acb1a33d6a68c455a276a1e',
            'phone_brand_id'=>7,
            'name'=>'Siemens SL10',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sisl10b.gif',
            'released_at'=>'Released 1999',
            'body'=>'138g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x54 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 50 x 26 mm, 121 cc (5.08 x 1.97 x 1.02 in)\",\"Weight\":\"138 g (4.87 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"97 x 54 pixels, 6 lines, 16:9 ratio\",\" \":\"ProSLIDE system\\r\\n  Help function\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"46 h\",\"Talk time\":\"3 h\",\"Colors\":\"Anthracite\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:13',
            'updated_at'=>'2021-09-07 08:07:13'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>83,
            'url_hash'=>'1a7b9dad72b3e9150d421dc0d970b3ca',
            'phone_brand_id'=>7,
            'name'=>'Siemens S25',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis25b.gif',
            'released_at'=>'Released 1999',
            'body'=>'125g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x54 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"117 x 47 x 23 mm, 108 cc (4.61 x 1.85 x 0.91 in)\",\"Weight\":\"125 g (4.41 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 54 pixels, 6 lines, 16:9 ratio\",\" \":\"Voice memo (20 sec)\\r\\n  Organizer\\r\\n  e-business card\\r\\n  Help function\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"60 h - 200 h\",\"Talk time\":\"300 min\",\"Colors\":\"Mid-Silver Grey (Titanium) \\/ Blue Metallic \\/ Dark Grey \\/ Green Metallic\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:16',
            'updated_at'=>'2021-09-07 08:07:16'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>84,
            'url_hash'=>'00d489861775dc503df4ecf4f3abba3d',
            'phone_brand_id'=>7,
            'name'=>'Siemens C25',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic25b.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"117 x 47 x 27 mm, 120 cc (4.61 x 1.85 x 1.06 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"DJ sounds\\r\\n  1 self-composable ringer tone\",\"Card slot\":\"No\",\"Phonebook\":\"8\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"160 h\",\"Talk time\":\"300 min\",\"Colors\":\"5 - Classic Green, Blue, Anthracite, Bright Blue, Yellow\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:18',
            'updated_at'=>'2021-09-07 08:07:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>85,
            'url_hash'=>'d654010a8226d8e8791fbe6305457367',
            'phone_brand_id'=>7,
            'name'=>'Siemens C35',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic35b.gif',
            'released_at'=>'Released 2000',
            'body'=>'110g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x54 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 46 x 21 mm, 88 cc (4.65 x 1.81 x 0.83 in)\",\"Weight\":\"110 g (3.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 54 pixels, 5 lines, 17:9 ratio\",\" \":\"Predictive text input\\r\\n  Currency converter\\r\\n  Calculator\\r\\n  Stopwatch\",\"Card slot\":\"No\",\"Phonebook\":\"20\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Wayout, Reversi, Quattropoli, Minesweeper\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"50 h - 180 h\",\"Talk time\":\"90 min - 300 min\",\"Colors\":\"7 -  Anthracite, Steel Grey, Classic blue ...\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:21',
            'updated_at'=>'2021-09-07 08:07:21'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>86,
            'url_hash'=>'f1e53200fa94eddaf1ddab66ec6956b3',
            'phone_brand_id'=>7,
            'name'=>'Siemens C35i',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic35ib.gif',
            'released_at'=>'Released 2000',
            'body'=>'110g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x54 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 46 x 21 mm, 88 cc (4.65 x 1.81 x 0.83 in)\",\"Weight\":\"110 g (3.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 54 pixels, 5 lines, 17:9 ratio\",\" \":\"Predictive text input\\r\\n  Currency converter\\r\\n  Calculator\\r\\n  Stopwatch\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Wayout, Reversi, Quattropoli, Minesweeper\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"50 h - 180 h\",\"Talk time\":\"90 min - 300 min\",\"Colors\":\"7 -  Anthracite, Steel Grey, Classic blue ...\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:23',
            'updated_at'=>'2021-09-07 08:07:23'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>87,
            'url_hash'=>'e9bb56ec566bf2b54b3be0718902ca9b',
            'phone_brand_id'=>7,
            'name'=>'Siemens M35i',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sim35ib.gif',
            'released_at'=>'Released 2000',
            'body'=>'125g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x54 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 47 x 22 mm, 99 cc (4.65 x 1.85 x 0.87 in)\",\"Weight\":\"125 g (4.41 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 54 pixels, 5 lines, 17:9 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Stopwatch\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Wayout, Reversi, Quattropoli, Minesweeper\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"50 h - 180 h\",\"Talk time\":\"90 min - 300 min\",\"Colors\":\"3 - Hurricane Yellow, Half Pipe Blue, Summit Grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:25',
            'updated_at'=>'2021-09-07 08:07:25'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>88,
            'url_hash'=>'db5883184bc9b7aa8dd4b6d6d700ff0f',
            'phone_brand_id'=>7,
            'name'=>'Siemens S35i',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis35ib.gif',
            'released_at'=>'Released 2000',
            'body'=>'99g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x80 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 46 x 21 mm, 89 cc (4.65 x 1.81 x 0.83 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 80 pixels, 7 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Stopwatch\\r\\n  Voice dial\\r\\n  Voice memo (20 sec)\\r\\n  User profiles\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Wayout, Reversi, Quattropoli, Minesweeper\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"60 h - 220 h\",\"Talk time\":\"100 min - 360 min\",\"Colors\":\"3 - Emerald\\/Black, Titanium\\/Black, Titanium\\/Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:28',
            'updated_at'=>'2021-09-07 08:07:28'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>89,
            'url_hash'=>'0c30507baae89fedfd55fc34a7316f3a',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GH 218',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergh218b.gif',
            'released_at'=>'Released 1994',
            'body'=>'36mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1 line',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1994\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 36 mm (5.12 x 1.93 x 1.42 in)\",\"Weight\":\"\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"1 line\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"47 h\",\"Talk time\":\"2 h 40 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:30',
            'updated_at'=>'2021-09-07 08:07:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>90,
            'url_hash'=>'ffe05d71ea2a54adf420e5a18ca4a3d9',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GO 118',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergo118b.gif',
            'released_at'=>'Released 1995',
            'body'=>'215g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1200 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"145 x 59 x 18 mm (5.71 x 2.32 x 0.71 in)\",\"Weight\":\"215 g (7.58 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 1200 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"12\",\"Java\":\"No\",\"Stand-by\":\"36 h\",\"Talk time\":\"180 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:32',
            'updated_at'=>'2021-09-07 08:07:32'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>91,
            'url_hash'=>'8b029b8cbcb57d1d4671a2e505928cf9',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GS 18',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergs18b.gif',
            'released_at'=>'Released 1996',
            'body'=>'215g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1200 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"147 x 60 x 24 mm (5.79 x 2.36 x 0.94 in)\",\"Weight\":\"215 g (7.58 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 1200 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Radio link protocol\\r\\n  Serial port\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"12\",\"Java\":\"No\",\"Stand-by\":\"36 h\",\"Talk time\":\"180 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:35',
            'updated_at'=>'2021-09-07 08:07:35'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>92,
            'url_hash'=>'9770c61f4505515242b52d56281e89e4',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GA 318',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/erga318b.gif',
            'released_at'=>'Released 1995',
            'body'=>'248g, 32mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1200 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 32 mm (5.12 x 1.93 x 1.26 in)\",\"Weight\":\"248 g (8.75 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 1200 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 12 chars\",\" \":\"Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"No\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS(Receive only)\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"12\",\"Java\":\"No\",\"Stand-by\":\"67 h\",\"Talk time\":\"200 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:37',
            'updated_at'=>'2021-09-07 08:07:37'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>93,
            'url_hash'=>'88bb7dee751b2d2d3057411ee0c52493',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GH 337',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergh337b.gif',
            'released_at'=>'Released 1995',
            'body'=>'193g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'915 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 24 mm (5.12 x 1.93 x 0.94 in)\",\"Weight\":\"193 g (6.81 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 915 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"No\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS(Receive only)\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"25 h\",\"Talk time\":\"110 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:39',
            'updated_at'=>'2021-09-07 08:07:39'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>94,
            'url_hash'=>'bce47d9c013923c2cf9aba1f6647dd33',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GF 337',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergf337b.gif',
            'released_at'=>'Released 1995',
            'body'=>'193g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'915 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 24 mm (5.12 x 1.93 x 0.94 in)\",\"Weight\":\"193 g (6.81 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 915 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"No\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS(Receive only)\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"25 h\",\"Talk time\":\"110 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:42',
            'updated_at'=>'2021-09-07 08:07:42'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>95,
            'url_hash'=>'8628fac8a2dc5e694ebc94fad261018d',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GS 337',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergs337b.gif',
            'released_at'=>'Released 1995',
            'body'=>'193g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'915 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 24 mm (5.12 x 1.93 x 0.94 in)\",\"Weight\":\"193 g (6.81 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 915 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"No\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS(Receive only)\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"25 h\",\"Talk time\":\"110 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:44',
            'updated_at'=>'2021-09-07 08:07:44'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>96,
            'url_hash'=>'13e9b9e181f5e8371027596420bc200e',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GH 388',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergh388b.gif',
            'released_at'=>'Released 1995',
            'body'=>'170g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'915 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 23 mm (5.12 x 1.93 x 0.91 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 915 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"37 h\",\"Talk time\":\"125 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:47',
            'updated_at'=>'2021-09-07 08:07:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>97,
            'url_hash'=>'9302a2ff2cc84366846b3ff5d1b9bb19',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GF 388',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergf388b.gif',
            'released_at'=>'Released 1995',
            'body'=>'170g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'915 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1995\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 23 mm (5.12 x 1.93 x 0.91 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 915 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"37 h\",\"Talk time\":\"125 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:49',
            'updated_at'=>'2021-09-07 08:07:49'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>98,
            'url_hash'=>'8256b22acc0f1a06a5cafffe2b4b681c',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GA 628',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/erga628b.gif',
            'released_at'=>'Released 1996',
            'body'=>'160g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1000 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 28 mm (5.12 x 1.93 x 1.10 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 1000 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 12 chars\",\" \":\"Scratchpad\\r\\n  Replaceable front panel\",\"Card slot\":\"No\",\"Phonebook\":\"No\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"83 h\",\"Talk time\":\"125 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:51',
            'updated_at'=>'2021-09-07 08:07:51'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>99,
            'url_hash'=>'9a280c8c04b30562149acd175e9ff7e2',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GH 688',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergh688b.gif',
            'released_at'=>'Released 1996',
            'body'=>'160g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1200 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 23 mm (5.12 x 1.93 x 0.91 in)\",\"Weight\":\"160 g (5.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 1200 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Scratchpad\\r\\n  Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"19\",\"Java\":\"No\",\"Stand-by\":\"96 h\",\"Talk time\":\"240 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:54',
            'updated_at'=>'2021-09-07 08:07:54'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>100,
            'url_hash'=>'cda20d24add7835d4b446f7217e0dad7',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GF 768',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergf768b.gif',
            'released_at'=>'Released 1997',
            'body'=>'135g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x10 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 23 mm (4.13 x 1.93 x 0.91 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 10 chars\",\" \":\"Volume keys\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"19\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"180 min\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:56',
            'updated_at'=>'2021-09-07 08:07:56'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>101,
            'url_hash'=>'a9a3075855ecc518ac22ee6dfe570186',
            'phone_brand_id'=>8,
            'name'=>'Ericsson PF 768',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/erpf768b.gif',
            'released_at'=>'Released 1997',
            'body'=>'135g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x10 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 23 mm (4.13 x 1.93 x 0.91 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 10 chars\",\" \":\"Volume keys\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"19\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"180 min\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:07:58',
            'updated_at'=>'2021-09-07 08:07:58'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>102,
            'url_hash'=>'1dd67e2cd1479a53b482b4a33763788b',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GF 788',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ergf788b.gif',
            'released_at'=>'Released 1997',
            'body'=>'135g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x10 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 24 mm (4.13 x 1.93 x 0.94 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 10 chars\",\" \":\"Customizable menu\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"19\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"180 min\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:01',
            'updated_at'=>'2021-09-07 08:08:01'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>103,
            'url_hash'=>'a8dc2f4b84c66794751f98fe1e89258c',
            'phone_brand_id'=>8,
            'name'=>'Ericsson GF 788e',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/erg788eb.gif',
            'released_at'=>'Released 1997',
            'body'=>'135g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x10 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 24 mm (4.13 x 1.93 x 0.94 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 10 chars\",\" \":\"Customizable menu\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"19\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"180 min\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:03',
            'updated_at'=>'2021-09-07 08:08:03'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>104,
            'url_hash'=>'2b5313715ebfa04b6d77733c50d5a889',
            'phone_brand_id'=>8,
            'name'=>'Ericsson S 868',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ers868b.gif',
            'released_at'=>'Released 1998',
            'body'=>'172g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 21 mm (5.12 x 1.93 x 0.83 in)\",\"Weight\":\"172 g (6.07 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"265 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:06',
            'updated_at'=>'2021-09-07 08:08:06'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>105,
            'url_hash'=>'9aaf184a10da555fc0c30615cce8c8fc',
            'phone_brand_id'=>8,
            'name'=>'Ericsson SH 888',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ersh888b.gif',
            'released_at'=>'Released 1998',
            'body'=>'195g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 22 mm (5.12 x 1.93 x 0.87 in)\",\"Weight\":\"195 g (6.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Serial port\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"265 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:08',
            'updated_at'=>'2021-09-07 08:08:08'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>106,
            'url_hash'=>'c8461706e74baa15d130f85f76ffeacc',
            'phone_brand_id'=>8,
            'name'=>'Ericsson I 888',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/eri888b.gif',
            'released_at'=>'Released 1999',
            'body'=>'195g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 22 mm (5.12 x 1.93 x 0.87 in)\",\"Weight\":\"195 g (6.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Serial port\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"265 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:10',
            'updated_at'=>'2021-09-07 08:08:10'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>107,
            'url_hash'=>'0c22c369999143388ea6931d1a519d1e',
            'phone_brand_id'=>8,
            'name'=>'Ericsson A1018s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/er1018sb.gif',
            'released_at'=>'Released 1999',
            'body'=>'163g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 49 x 27 mm (5.12 x 1.93 x 1.06 in)\",\"Weight\":\"163 g (5.75 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"No\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"265 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:13',
            'updated_at'=>'2021-09-07 08:08:13'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>108,
            'url_hash'=>'194577fc8e6ad9a54adf5f58bea07faf',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T10s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert10sb.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 24 mm (4.13 x 1.93 x 0.94 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 750 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:18',
            'updated_at'=>'2021-09-07 08:08:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>109,
            'url_hash'=>'e6e048996b50fdb410df65ab1efd810c',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T18s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert18sb.gif',
            'released_at'=>'Released 1999',
            'body'=>'146g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 24 mm (4.13 x 1.93 x 0.94 in)\",\"Weight\":\"146 g (5.15 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 750 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\" \":\"Voice dialing\\r\\n  Voice answering\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:20',
            'updated_at'=>'2021-09-07 08:08:20'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>110,
            'url_hash'=>'0e965096c02eaa82d4aee927d11d76ac',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T28s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert28sb.gif',
            'released_at'=>'Released 1999',
            'body'=>'83g, 15mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 50 x 15 mm (3.82 x 1.97 x 0.59 in)\",\"Weight\":\"83 g (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\" \":\"Voice dialing\\r\\n  Voice answering\\r\\n  Profiles\\r\\n  Helptexts and shortcuts\\r\\n  Active flip\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2 - Tetris, Solitarie\",\"Languages\":\"37\",\"Java\":\"No\",\"Stand-by\":\"65 h\",\"Talk time\":\"4 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:22',
            'updated_at'=>'2021-09-07 08:08:22'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>111,
            'url_hash'=>'155526bcfc29d5bfb0fc85c24ff285f1',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T28 World',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert28wb.gif',
            'released_at'=>'Released 1999',
            'body'=>'83g, 15mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 50 x 15 mm (3.82 x 1.97 x 0.59 in)\",\"Weight\":\"83 g (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\" \":\"Voice dialing\\r\\n  Voice answering\\r\\n  Profiles\\r\\n  Helptexts and shortcuts\\r\\n  Active flip\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2 - Tetris, Solitarie\",\"Languages\":\"37\",\"Java\":\"No\",\"Stand-by\":\"65 h\",\"Talk time\":\"4 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:25',
            'updated_at'=>'2021-09-07 08:08:25'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>112,
            'url_hash'=>'961a97767814f2fd0b2de26fe6953611',
            'phone_brand_id'=>8,
            'name'=>'Ericsson R250s PRO',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/err250sb.gif',
            'released_at'=>'Released 2000',
            'body'=>'330g, 32mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"148 x 59 x 32 mm (5.83 x 2.32 x 1.26 in)\",\"Weight\":\"330 g (11.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"Private Mobile Radio (PMR)\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"5 h\",\"Colors\":\"2 - Bright Orange, Iron Green\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:27',
            'updated_at'=>'2021-09-07 08:08:27'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>113,
            'url_hash'=>'b6ee6933f0cc461438c64fd6426f674a',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT Gum db',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/algum2b.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"122 x 48 x 25 mm, 160 cc (4.80 x 1.89 x 0.98 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"Works with AAA batteries\\r\\n  Stickers\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"up to 130 h\",\"Talk time\":\"up to 4 h 45 min\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:29',
            'updated_at'=>'2021-09-07 08:08:29'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>114,
            'url_hash'=>'3590407b7d9c48e76ddbf8ee1efeee12',
            'phone_brand_id'=>9,
            'name'=>'Panasonic G600',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pag600b.gif',
            'released_at'=>'Released 1998',
            'body'=>'128g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 45 x 18 mm (5.20 x 1.77 x 0.71 in)\",\"Weight\":\"128 g (4.52 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Voice memo (40 sec)\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"2 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:32',
            'updated_at'=>'2021-09-07 08:08:32'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>115,
            'url_hash'=>'e4f5fcc12eb68a583316e584b2eaa494',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD30',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd30b.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"135 x 45 x 20 mm (5.31 x 1.77 x 0.79 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"\",\" \":\"On\\/off timers\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"90 h\",\"Talk time\":\"180 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:34',
            'updated_at'=>'2021-09-07 08:08:34'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>116,
            'url_hash'=>'88668b69506a5284ae77ff2732804b79',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD70',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd70b.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"135 x 45 x 20 mm (5.31 x 1.77 x 0.79 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\" \":\"Voice memo (50 sec)\\r\\n  On\\/off timers\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"3 ( titan, green and blue )\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:37',
            'updated_at'=>'2021-09-07 08:08:37'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>117,
            'url_hash'=>'81056c76ee555eab72ae43afd884615d',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD90',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd90b.gif',
            'released_at'=>'Released 1999',
            'body'=>'88g, 16.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 42 x 16.5 mm (4.65 x 1.65 x 0.65 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Voice memo (2x15 sec)\\r\\n  On\\/off timers\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"95 h\",\"Talk time\":\"210 min\",\"Colors\":\"3 (silver, dark blue, anthracite\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:39',
            'updated_at'=>'2021-09-07 08:08:39'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>118,
            'url_hash'=>'7f79e57d1c1020fa537dedddd89bac05',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD92',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd92b.gif',
            'released_at'=>'Released 2000',
            'body'=>'77g, 16.4mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"118.1 x 40.5 x 16.4 mm (4.65 x 1.59 x 0.65 in)\",\"Weight\":\"77 g (2.72 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"6 lines\",\" \":\"Predictive text input\\r\\n  Voice memo\\r\\n  On\\/off timers\\r\\n  Dictaphone\\r\\n  Ring Tone Composer\\r\\n  CallerID graphics\\r\\n  Calculator\\r\\n  2 vibration types\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"160 h\",\"Talk time\":\"210 min\",\"Colors\":\"2 ( gun metallic and blue )\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:41',
            'updated_at'=>'2021-09-07 08:08:41'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>119,
            'url_hash'=>'8393425498334a8e73d9276f1ce6e8ed',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD93',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd93b.gif',
            'released_at'=>'Released 2000',
            'body'=>'80g, 16.4mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 45 x 16.4 mm (4.72 x 1.77 x 0.65 in)\",\"Weight\":\"80 g (2.82 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"6 lines\",\" \":\"Predictive text input\\r\\n  Voice memo\\r\\n  On\\/off timers\\r\\n  Dictaphone\\r\\n  Ring Tone Composer\\r\\n  CallerID graphics\\r\\n  Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic, recorded ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"170 h\",\"Talk time\":\"200 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:44',
            'updated_at'=>'2021-09-07 08:08:44'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>120,
            'url_hash'=>'0035b61d6ffd1cae63edde53f141f39d',
            'phone_brand_id'=>10,
            'name'=>'Sony CM-DX 1000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sox1000b.gif',
            'released_at'=>'Released 1997',
            'body'=>'235g, 32mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1350 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"150 x 45 x 32 mm (5.91 x 1.77 x 1.26 in)\",\"Weight\":\"235 g (8.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1350 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"10 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:47',
            'updated_at'=>'2021-09-07 08:08:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>121,
            'url_hash'=>'7127f1da0d1a12d37fc6b6d9b190e824',
            'phone_brand_id'=>10,
            'name'=>'Sony CM-DX 2000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sox2000b.gif',
            'released_at'=>'Released 1997',
            'body'=>'185g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x33 pixels, 4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"147 x 46 x 27 mm, 155 cc (5.79 x 1.81 x 1.06 in)\",\"Weight\":\"185 g (6.53 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1800 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 33 pixels, 4 x 16 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"10 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:49',
            'updated_at'=>'2021-09-07 08:08:49'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>122,
            'url_hash'=>'a999a124c04862006b8a754becdb8c42',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD Z1',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soz1b.gif',
            'released_at'=>'Released 1997',
            'body'=>'220g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x32 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'730 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"99 x 64 x 24 mm, 120 cc (3.90 x 2.52 x 0.94 in)\",\"Weight\":\"220 g (7.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 730 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 32 pixels, 5 lines\",\" \":\"Voice memo (20 sec)\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"10 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:51',
            'updated_at'=>'2021-09-07 08:08:51'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>123,
            'url_hash'=>'36a3942dee7ac309d43d4a3758252f0d',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD Z1 plus',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soz1pb.gif',
            'released_at'=>'Released 1997',
            'body'=>'195g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x32 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 60 x 26 mm, 120 cc (3.86 x 2.36 x 1.02 in)\",\"Weight\":\"195 g (6.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 32 pixels, 5 lines\",\" \":\"Voice memo (20 sec)\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"50 h\",\"Talk time\":\"8 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:54',
            'updated_at'=>'2021-09-07 08:08:54'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>124,
            'url_hash'=>'5599af82dac432ffd6aa8b107ae02b52',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD C1',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soc1b.gif',
            'released_at'=>'Released 1999',
            'body'=>'107g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x32 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"139 x 45 x 26 mm (5.47 x 1.77 x 1.02 in)\",\"Weight\":\"107 g (3.77 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 32 pixels, 4 lines\",\" \":\"Internal antena\",\"Card slot\":\"No\",\"Phonebook\":\"80\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"115 h\",\"Talk time\":\"5 h\",\"Colors\":\"Several\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:56',
            'updated_at'=>'2021-09-07 08:08:56'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>125,
            'url_hash'=>'c0c1b169d3e3728e182b561762e8c695',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD CD5',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/socd5b.gif',
            'released_at'=>'Released 2000',
            'body'=>'139g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x32 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"139 x 45 x 26 mm, 120 cc (5.47 x 1.77 x 1.02 in)\",\"Weight\":\"139 g (4.90 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"97 x 32 pixels, 4 lines\",\" \":\"Predictive text input\\r\\n  2 vibration types\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"50 - 180 h\",\"Talk time\":\"4 - 6 h\",\"Colors\":\"3 (Silver, Metallic Blue and Metallic Black)\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:08:59',
            'updated_at'=>'2021-09-07 08:08:59'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>126,
            'url_hash'=>'9ffbbe25c029f805d3057db5e5567844',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD Z5',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soz5b.gif',
            'released_at'=>'Released 2000',
            'body'=>'82g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x72 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"88 x 49 x 21 mm (3.46 x 1.93 x 0.83 in)\",\"Weight\":\"82 g (2.89 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"96x72 pixels, 5 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice Memo (14x20 sec)\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2 - Clay pigeon shooting and Fishing\",\"Java\":\"No\",\"Stand-by\":\"50 - 180 h\",\"Talk time\":\"4 - 6 h\",\"Colors\":\"3 (Silver, Metallic Blue and Metallic Black)\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:01',
            'updated_at'=>'2021-09-07 08:09:01'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>127,
            'url_hash'=>'d0033ee8cba6c902b27e440ca2c81864',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 207',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc207b.gif',
            'released_at'=>'Released 1997',
            'body'=>'179g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x10 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"147 x 56 x 23 mm (5.79 x 2.20 x 0.91 in)\",\"Weight\":\"179 g (6.31 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 10 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"85 h\",\"Talk time\":\"2 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:03',
            'updated_at'=>'2021-09-07 08:09:03'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>128,
            'url_hash'=>'0caff762ca74c4e5fd1d3eaff267e537',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 607',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc607b.gif',
            'released_at'=>'Released 1997',
            'body'=>'189g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 53 x 17 mm (5.28 x 2.09 x 0.67 in)\",\"Weight\":\"189 g (6.67 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:06',
            'updated_at'=>'2021-09-07 08:09:06'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>129,
            'url_hash'=>'270fa71dbd7f53ce43370561e5459fa7',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 608',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc608b.gif',
            'released_at'=>'Released 1999',
            'body'=>'169g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 53 x 24 mm (5.28 x 2.09 x 0.94 in)\",\"Weight\":\"169 g (5.96 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"50 h\",\"Talk time\":\"130 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:08',
            'updated_at'=>'2021-09-07 08:09:08'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>130,
            'url_hash'=>'efc8fa98b4a97dc82413afb274965da7',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 906',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc906b.gif',
            'released_at'=>'Released 1996',
            'body'=>'145g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"144 x 57 x 19 mm (5.67 x 2.24 x 0.75 in)\",\"Weight\":\"145 g (5.11 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 15 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"30 h\",\"Talk time\":\"75 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:11',
            'updated_at'=>'2021-09-07 08:09:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>131,
            'url_hash'=>'fe08b2801683af16bd4cff52fe7580cb',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 738',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc738b.gif',
            'released_at'=>'Released 1996',
            'body'=>'189g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"142 x 53 x 18 mm (5.59 x 2.09 x 0.71 in)\",\"Weight\":\"189 g (6.67 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"200 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:13',
            'updated_at'=>'2021-09-07 08:09:13'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>132,
            'url_hash'=>'f6e28eafdce406a11136b479e019f6ad',
            'phone_brand_id'=>11,
            'name'=>'Bosch World 718',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/bow718b.gif',
            'released_at'=>'Released 1996',
            'body'=>'189g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"142 x 53 x 18 mm (5.59 x 2.09 x 0.71 in)\",\"Weight\":\"189 g (6.67 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"200 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:15',
            'updated_at'=>'2021-09-07 08:09:15'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>133,
            'url_hash'=>'85ec9e3b4ae1739b57665c75d3c4c2bc',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 509',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc509b.gif',
            'released_at'=>'Released 1999',
            'body'=>'150g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 53 x 23 mm (5.28 x 2.09 x 0.91 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"87 h\",\"Talk time\":\"4 h\",\"Colors\":\"Several, half transparent\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:18',
            'updated_at'=>'2021-09-07 08:09:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>134,
            'url_hash'=>'79e91d29760c93e211b6b81350f6c91a',
            'phone_brand_id'=>11,
            'name'=>'Bosch Com 908',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc908b.gif',
            'released_at'=>'Released 1998',
            'body'=>'99g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 50 x 17 mm (4.41 x 1.97 x 0.67 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Calculator\\r\\n  Integrated PCMCIA\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:20',
            'updated_at'=>'2021-09-07 08:09:20'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>135,
            'url_hash'=>'05190ef6c411f66829d87984d0b66e8e',
            'phone_brand_id'=>11,
            'name'=>'Bosch 909 Dual',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc909b.gif',
            'released_at'=>'Released 1999',
            'body'=>'99g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 50 x 17 mm (4.41 x 1.97 x 0.67 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 16 chars\",\" \":\"Calculator\\r\\n  Integrated PCMCIA\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:22',
            'updated_at'=>'2021-09-07 08:09:22'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>136,
            'url_hash'=>'6d02df71594f142e02d78ea5ce357c2c',
            'phone_brand_id'=>12,
            'name'=>'Philips Fizz',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phfizzb.gif',
            'released_at'=>'Released 1996',
            'body'=>'169g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1996\",\"Status\":\"Discontinued\",\"Dimensions\":\"162 x 60 x 17 mm (6.38 x 2.36 x 0.67 in)\",\"Weight\":\"169 g (5.96 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Ni-Cd battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"45 h\",\"Talk time\":\"60 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:25',
            'updated_at'=>'2021-09-07 08:09:25'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>137,
            'url_hash'=>'d57a236c3d1ec5204de77128efd47c85',
            'phone_brand_id'=>12,
            'name'=>'Philips Spark',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phsparkb.gif',
            'released_at'=>'Released 1997',
            'body'=>'129g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'4000 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"139 x 56 x 23 mm (5.47 x 2.20 x 0.91 in)\",\"Weight\":\"129 g (4.55 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 4000 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"350 h\",\"Talk time\":\"6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:27',
            'updated_at'=>'2021-09-07 08:09:27'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>138,
            'url_hash'=>'1095b77e24cf3a873bf06144746f0dc2',
            'phone_brand_id'=>12,
            'name'=>'Philips Diga',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phdigab.gif',
            'released_at'=>'Released 1997',
            'body'=>'179g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'1x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"147 x 56 x 19 mm (5.79 x 2.20 x 0.75 in)\",\"Weight\":\"179 g (6.31 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"1 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"5 dialed, 0 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"85 h\",\"Talk time\":\"130 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:30',
            'updated_at'=>'2021-09-07 08:09:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>139,
            'url_hash'=>'e1c820c3c7402fe8709188c303e78422',
            'phone_brand_id'=>12,
            'name'=>'Philips Savvy',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phsavvyb.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x15 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 50 x 26 mm, 137 cc (5.20 x 1.97 x 1.02 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 15 chars\",\" \":\"Calculator\\r\\n  Picture messaging\\r\\n  Analog clock\\r\\n  Timer\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"130 - 250 h\",\"Talk time\":\"2 - 4 h\",\"Colors\":\"Yellow, Golf Green, Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:32',
            'updated_at'=>'2021-09-07 08:09:32'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>140,
            'url_hash'=>'93d4b5de9119eed51bfaabbddf79068c',
            'phone_brand_id'=>12,
            'name'=>'Philips Genie',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phgenieb.gif',
            'released_at'=>'Released 1999',
            'body'=>'99g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 54 x 20 mm, 99 cc (4.33 x 2.13 x 0.79 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 64 pixels, 6 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Voice dial\\r\\n  ToDo list\\r\\n  \",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"525 h\",\"Talk time\":\"8 h\",\"Colors\":\"Several\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:34',
            'updated_at'=>'2021-09-07 08:09:34'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>141,
            'url_hash'=>'574a37f514d8d722abf42ad0ed81b3da',
            'phone_brand_id'=>12,
            'name'=>'Philips Genie Sport',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phgensb.gif',
            'released_at'=>'Released 1999',
            'body'=>'99g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 54 x 20 mm, 99 cc (4.33 x 2.13 x 0.79 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 64 pixels, 6 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Voice dial\\r\\n  ToDo list\\r\\n  \",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"525 h\",\"Talk time\":\"8 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:37',
            'updated_at'=>'2021-09-07 08:09:37'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>142,
            'url_hash'=>'5a63fadb9d0a9bd4dbcdcb0c8f0a06a3',
            'phone_brand_id'=>12,
            'name'=>'Philips Genie db',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phgendbb.gif',
            'released_at'=>'Released 1999',
            'body'=>'95g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 54 x 20 mm, 99 cc (4.33 x 2.13 x 0.79 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 64 pixels, 6 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Voice dial\\r\\n  ToDo list\\r\\n  \",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"525 h\",\"Talk time\":\"8 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:39',
            'updated_at'=>'2021-09-07 08:09:39'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>143,
            'url_hash'=>'7d80110b73a403061c2a82aef57e5d82',
            'phone_brand_id'=>12,
            'name'=>'Philips Savvy Vogue',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phsavvob.gif',
            'released_at'=>'Released 2000',
            'body'=>'140g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 48 x 24 mm, 140 cc (5.08 x 1.89 x 0.94 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"2 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Voice dial\\r\\n  Picture messaging\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"120 - 200 h\",\"Talk time\":\"2 - 4 h\",\"Colors\":\"4 - Light Blue, Aqua Green, Navy Blue, Coral Bronze\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:41',
            'updated_at'=>'2021-09-07 08:09:41'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>144,
            'url_hash'=>'b4e8b4761ae77a0f100191f85da19a11',
            'phone_brand_id'=>12,
            'name'=>'Philips Savvy DB',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phsavdbb.gif',
            'released_at'=>'Released 1999',
            'body'=>'140g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 48 x 24 mm, 140 cc (5.08 x 1.89 x 0.94 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"2 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Voice dial\\r\\n  Picture messaging\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"120 - 200 h\",\"Talk time\":\"2 - 4 h\",\"Colors\":\"3 - Galaxy Black, Azur Nuit, Lune Galet\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:44',
            'updated_at'=>'2021-09-07 08:09:44'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>145,
            'url_hash'=>'e18beb0c3b1e72bf212d96e5db979bb2',
            'phone_brand_id'=>12,
            'name'=>'Philips Ozeo',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phozeob.gif',
            'released_at'=>'Released 2000',
            'body'=>'128g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"114 x 51 x 24 mm, 119 cc (4.49 x 2.01 x 0.94 in)\",\"Weight\":\"128 g (4.52 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Bricks\",\"Java\":\"No\",\"Stand-by\":\"120 - 300 h\",\"Talk time\":\"3 - 5 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:46',
            'updated_at'=>'2021-09-07 08:09:46'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>146,
            'url_hash'=>'3363cc6138cab27c684da091926bd083',
            'phone_brand_id'=>12,
            'name'=>'Philips Xenium',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phxenib.gif',
            'released_at'=>'Released 2000',
            'body'=>'95g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 41 x 22 mm, 85 cc (4.29 x 1.61 x 0.87 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"up to 500 h\",\"Talk time\":\"3 - 6 h\",\"Colors\":\"3 models, 3 colors each\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:50',
            'updated_at'=>'2021-09-07 08:09:50'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>147,
            'url_hash'=>'2aab2ad6aa9164742f2968447bb3bc06',
            'phone_brand_id'=>13,
            'name'=>'NEC G9D+',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/neg9dpb.gif',
            'released_at'=>'Released 1997',
            'body'=>'200g, 22.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"145 x 49 x 22.5 mm (5.71 x 1.93 x 0.89 in)\",\"Weight\":\"200 g (7.05 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"56 h\",\"Talk time\":\"210 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:52',
            'updated_at'=>'2021-09-07 08:09:52'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>148,
            'url_hash'=>'4aa86321f6fed65fdec05938b40fd732',
            'phone_brand_id'=>13,
            'name'=>'NEC DB500',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/nedb500b.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 48 x 26 mm, 120 cc (5.28 x 1.89 x 1.02 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Organizer\\r\\n  Scratchpad\\r\\n  Interchangeable front covers\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"130 - 150 h\",\"Talk time\":\"120 - 400 min\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:55',
            'updated_at'=>'2021-09-07 08:09:55'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>149,
            'url_hash'=>'dad8a6714a912b6952d42b5404ca9331',
            'phone_brand_id'=>13,
            'name'=>'NEC DB2000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ned2000b.gif',
            'released_at'=>'Released 1999',
            'body'=>'130g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"131 x 41 x 19 mm, 100 cc (5.16 x 1.61 x 0.75 in)\",\"Weight\":\"130 g (4.59 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Organizer\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"5 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"17\",\"Java\":\"No\",\"Stand-by\":\"150 - 300 h\",\"Talk time\":\"200 - 480 min\",\"Colors\":\"Metallic\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:57',
            'updated_at'=>'2021-09-07 08:09:57'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>150,
            'url_hash'=>'0421c7ee0cac6204e5ae326a19dd137f',
            'phone_brand_id'=>13,
            'name'=>'NEC DB4000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ned4000b.gif',
            'released_at'=>'Released 2000',
            'body'=>'99g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x59 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 42 x 22 mm, 89 cc (4.72 x 1.65 x 0.87 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"97 x 59 pixels, 5:3 ratio\",\" \":\"Profiles\\r\\n  Organizer\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"18\",\"Java\":\"No\",\"Stand-by\":\"195 h\",\"Talk time\":\"330 min\",\"Colors\":\"Metallic\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:09:59',
            'updated_at'=>'2021-09-07 08:09:59'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>151,
            'url_hash'=>'2eb0fb6ef3ed0ac5b7f15f3323ee38e3',
            'phone_brand_id'=>14,
            'name'=>'Sagem RC 730',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sarc730b.gif',
            'released_at'=>'Released 1997',
            'body'=>'158g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1997\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 21 mm (5.51 x 1.97 x 0.83 in)\",\"Weight\":\"158 g (5.57 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"150 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:02',
            'updated_at'=>'2021-09-07 08:10:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>152,
            'url_hash'=>'2a9fa73c645c0f6d9ccbef04afb824be',
            'phone_brand_id'=>14,
            'name'=>'Sagem RC 750',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sarc750b.gif',
            'released_at'=>'Released 1998',
            'body'=>'158g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 50 x 21 mm (5.51 x 1.97 x 0.83 in)\",\"Weight\":\"158 g (5.57 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Calculator\\r\\n  Voice memo\\r\\n  Serial cable\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"150 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:04',
            'updated_at'=>'2021-09-07 08:10:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>153,
            'url_hash'=>'aa28106f7b59cbf459ba4000a56697a9',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 820',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc820b.gif',
            'released_at'=>'Released 1998',
            'body'=>'135g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 50 x 26 mm (5.12 x 1.97 x 1.02 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"90 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:07',
            'updated_at'=>'2021-09-07 08:10:07'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>154,
            'url_hash'=>'37b5d3a2d4f6d18dc78ca4eb05d67e15',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 825 FM',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sa825fmb.gif',
            'released_at'=>'Released 1998',
            'body'=>'152g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 50 x 26 mm (5.20 x 1.97 x 1.02 in)\",\"Weight\":\"152 g (5.36 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"90 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:09',
            'updated_at'=>'2021-09-07 08:10:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>155,
            'url_hash'=>'7ff1efa27b575ffe127a718ecca29b1c',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 850',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc850b.gif',
            'released_at'=>'Released 1998',
            'body'=>'137g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1998\",\"Status\":\"Discontinued\",\"Dimensions\":\"132 x 50 x 21 mm (5.20 x 1.97 x 0.83 in)\",\"Weight\":\"137 g (4.83 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"5 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:11',
            'updated_at'=>'2021-09-07 08:10:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>156,
            'url_hash'=>'79c2bf6909631a7f67489bf170d90c91',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 912',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc912b.gif',
            'released_at'=>'Released 1999',
            'body'=>'117g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 22 mm (4.57 x 1.77 x 0.87 in)\",\"Weight\":\"117 g (4.13 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:14',
            'updated_at'=>'2021-09-07 08:10:14'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>157,
            'url_hash'=>'3e9ecaa753ee34a18f6aef486ff468e6',
            'phone_brand_id'=>14,
            'name'=>'Sagem RC 922',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sarc922b.gif',
            'released_at'=>'Released 1999',
            'body'=>'121g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x 12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"121 g (4.27 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"3x 12 chars\",\" \":\"Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:16',
            'updated_at'=>'2021-09-07 08:10:16'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>158,
            'url_hash'=>'51b6827139b94e9f633219dc1372c91b',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 932',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc932b.gif',
            'released_at'=>'Released 1999',
            'body'=>'117g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"117 g (4.13 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:19',
            'updated_at'=>'2021-09-07 08:10:19'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>159,
            'url_hash'=>'42b70f488013fc5bc77050b1ef1efa33',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 940',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc940b.gif',
            'released_at'=>'Released 2000',
            'body'=>'117g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"117 g (4.13 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"160 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:21',
            'updated_at'=>'2021-09-07 08:10:21'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>160,
            'url_hash'=>'676a71cff3588354a75da2d5de59abf2',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 959',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc959b.gif',
            'released_at'=>'Released 2000',
            'body'=>'95g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\\r\\n  Active flip\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:23',
            'updated_at'=>'2021-09-07 08:10:23'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>161,
            'url_hash'=>'bf503e460850ba9c22168fdc4f5fe77c',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 950',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc950b.gif',
            'released_at'=>'Released 2000',
            'body'=>'95g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:26',
            'updated_at'=>'2021-09-07 08:10:26'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>162,
            'url_hash'=>'8fa4f3352d8060efd483569523ecb2d0',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-3204',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma3204b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"131 x 45 x 21 mm (5.16 x 1.77 x 0.83 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"50 h\",\"Talk time\":\"2 h\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:28',
            'updated_at'=>'2021-09-07 08:10:28'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>163,
            'url_hash'=>'f6cdd3b5e35d13a44bb40464337031ff',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-3205F',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma3205b.gif',
            'released_at'=>'Released 1999',
            'body'=>'170g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"131 x 45 x 21 mm (5.16 x 1.77 x 0.83 in)\",\"Weight\":\"170 g (6.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"50 h\",\"Talk time\":\"2 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:30',
            'updated_at'=>'2021-09-07 08:10:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>164,
            'url_hash'=>'ab41735777131cddc74219d20d363dd8',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6804',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6804b.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 43 x 20 mm (4.29 x 1.69 x 0.79 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"Tetris\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:33',
            'updated_at'=>'2021-09-07 08:10:33'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>165,
            'url_hash'=>'104791a8cf4ba4225e4c52d15e921310',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6805',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6805b.gif',
            'released_at'=>'Released 1999',
            'body'=>'135g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 43 x 21 mm (4.29 x 1.69 x 0.83 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"Tetris\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:35',
            'updated_at'=>'2021-09-07 08:10:35'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>166,
            'url_hash'=>'efce114a9049ae443c42b686342bd327',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6810',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6810b.gif',
            'released_at'=>'Released 1999',
            'body'=>'96g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 20 mm (4.33 x 1.81 x 0.79 in)\",\"Weight\":\"96 g (3.39 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"5 h\",\"Colors\":\"6\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:38',
            'updated_at'=>'2021-09-07 08:10:38'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>167,
            'url_hash'=>'566893a7c1e553c2ec85a5c0d46ae4ba',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6811',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6811b.gif',
            'released_at'=>'Released 1999',
            'body'=>'96g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 23 mm (4.33 x 1.81 x 0.91 in)\",\"Weight\":\"96 g (3.39 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"5 h\",\"Colors\":\"6\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:40',
            'updated_at'=>'2021-09-07 08:10:40'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>168,
            'url_hash'=>'314686cbe34735d51dd8749d88929490',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6814',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6814b.gif',
            'released_at'=>'Released 1999',
            'body'=>'96g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'850 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 23 mm (4.33 x 1.81 x 0.91 in)\",\"Weight\":\"96 g (3.39 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 850 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:42',
            'updated_at'=>'2021-09-07 08:10:42'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>169,
            'url_hash'=>'d333c7dd88ec7fcdc4f53919471f0be0',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6815',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6815b.gif',
            'released_at'=>'Released 1999',
            'body'=>'96g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'850 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 23 mm (4.33 x 1.81 x 0.91 in)\",\"Weight\":\"96 g (3.39 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 850 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:45',
            'updated_at'=>'2021-09-07 08:10:45'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>170,
            'url_hash'=>'1a79cbef899705cf4a5d53929a1c7eec',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6869',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6869b.gif',
            'released_at'=>'Released 2000',
            'body'=>'135g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 43 x 20 mm (4.33 x 1.69 x 0.79 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:47',
            'updated_at'=>'2021-09-07 08:10:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>171,
            'url_hash'=>'99edbb8010d28df8ac37fd2e517e0fd5',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6879',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6879b.gif',
            'released_at'=>'Released 2000',
            'body'=>'135g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 43 x 22 mm (4.33 x 1.69 x 0.87 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:50',
            'updated_at'=>'2021-09-07 08:10:50'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>172,
            'url_hash'=>'2752a5eeca37dc17430bd39c439e7df4',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6877',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6877b.gif',
            'released_at'=>'Released 2000',
            'body'=>'135g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 43 x 22 mm (4.33 x 1.69 x 0.87 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:52',
            'updated_at'=>'2021-09-07 08:10:52'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>173,
            'url_hash'=>'ca838efdac7d75cb1418477d5c56ccd0',
            'phone_brand_id'=>15,
            'name'=>'Maxon MX-6899',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ma6899b.gif',
            'released_at'=>'Released 2000',
            'body'=>'130g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 43 x 22 mm (4.29 x 1.69 x 0.87 in)\",\"Weight\":\"130 g (4.59 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 x 12 chars\",\" \":\"Predictive text input\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"20 dialed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:55',
            'updated_at'=>'2021-09-07 08:10:55'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>174,
            'url_hash'=>'86c0ebac9290cbade3792f59a9518842',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 936',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc936b.gif',
            'released_at'=>'Released 2000',
            'body'=>'117g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"117 g (4.13 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:57',
            'updated_at'=>'2021-09-07 08:10:57'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>175,
            'url_hash'=>'0f64f11271b31c36211317df1b9352b8',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 939 WAP',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc939b.gif',
            'released_at'=>'Released 2000',
            'body'=>'117g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"116 x 45 x 18 mm (4.57 x 1.77 x 0.71 in)\",\"Weight\":\"117 g (4.13 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:10:59',
            'updated_at'=>'2021-09-07 08:10:59'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>176,
            'url_hash'=>'262a1981db7cc9c476babcb563c34ec0',
            'phone_brand_id'=>11,
            'name'=>'Bosch 909 Dual S',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/boc909sb.gif',
            'released_at'=>'Released 1999',
            'body'=>'109g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x32 pixels, 4x16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"122 x 50 x 17 mm (4.80 x 1.97 x 0.67 in)\",\"Weight\":\"109 g (3.84 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 32 pixels, 4 x 16 chars\",\" \":\"Calculator\\r\\n  Integrated PCMCIA\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"180 h\",\"Talk time\":\"5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:02',
            'updated_at'=>'2021-09-07 08:11:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>177,
            'url_hash'=>'4a614657bb6d273a6f524dc5b8072fd0',
            'phone_brand_id'=>16,
            'name'=>'Kyocera TG 200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/kytg200b.gif',
            'released_at'=>'Released 2000',
            'body'=>'75g, 16mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 40 x 16 mm (4.72 x 1.57 x 0.63 in)\",\"Weight\":\"75 g (2.65 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"110 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:04',
            'updated_at'=>'2021-09-07 08:11:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>178,
            'url_hash'=>'7e2994fa373a895b9e608a65cc44fcf3',
            'phone_brand_id'=>17,
            'name'=>'Telit GM 410',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/tegm410b.gif',
            'released_at'=>'Released 1999',
            'body'=>'115g, 15mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 48 x 15 mm (5.12 x 1.89 x 0.59 in)\",\"Weight\":\"115 g (4.06 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"96 h\",\"Talk time\":\"4 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:07',
            'updated_at'=>'2021-09-07 08:11:07'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>179,
            'url_hash'=>'e577e41b59ea73d727068d80a45c17f7',
            'phone_brand_id'=>17,
            'name'=>'Telit GM 710',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/tegm710b.gif',
            'released_at'=>'Released 1999',
            'body'=>'105g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"117 x 51 x 18 mm (4.61 x 2.01 x 0.71 in)\",\"Weight\":\"105 g (3.70 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"48 h\",\"Talk time\":\"4 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:09',
            'updated_at'=>'2021-09-07 08:11:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>180,
            'url_hash'=>'ab6b7a11a3302715946481bb93a55314',
            'phone_brand_id'=>17,
            'name'=>'Telit Estremo',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/teestreb.gif',
            'released_at'=>'Released 1999',
            'body'=>'176g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1000 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 53 x 24 mm (5.28 x 2.09 x 0.94 in)\",\"Weight\":\"176 g (6.21 oz)\",\"SIM\":\"Mini-SIM\",\" \":\"No\",\"Type\":\"Removable Li-Ion 1000 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:11',
            'updated_at'=>'2021-09-07 08:11:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>181,
            'url_hash'=>'b048cba6110ba0bc77cb984d7bd12e23',
            'phone_brand_id'=>17,
            'name'=>'Telit GM 810',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/tegm810b.gif',
            'released_at'=>'Released 1999',
            'body'=>'105g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"117 x 51 x 18 mm (4.61 x 2.01 x 0.71 in)\",\"Weight\":\"105 g (3.70 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"52 h\",\"Talk time\":\"4 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:14',
            'updated_at'=>'2021-09-07 08:11:14'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>182,
            'url_hash'=>'093768a3ee97e9bbc0b73fcdb91e5381',
            'phone_brand_id'=>17,
            'name'=>'Telit GM 830',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/tegm830b.gif',
            'released_at'=>'Released 1999',
            'body'=>'105g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"117 x 51 x 20 mm (4.61 x 2.01 x 0.79 in)\",\"Weight\":\"105 g (3.70 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"52 h\",\"Talk time\":\"4 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:16',
            'updated_at'=>'2021-09-07 08:11:16'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>183,
            'url_hash'=>'cd3308af0133e06521f6dbc82ca220a8',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T36',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert36b.gif',
            'released_at'=>'Cancelled',
            'body'=>'88g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Cancelled\",\"Dimensions\":\"105 x 49 x 24 mm (4.13 x 1.93 x 0.94 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"\",\" \":\"Predictive text input\\r\\n  High speed data transfers\\r\\n  Voice dialing\\r\\n  Voice answering\\r\\n  Profiles\\r\\n  Helptexts and shortcuts\\r\\n  Active flip\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"Yes\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"37\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"7 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:19',
            'updated_at'=>'2021-09-07 08:11:19'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>184,
            'url_hash'=>'ed601d908f952e64fe7cc76beb38fa2e',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT 700',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alot700b.gif',
            'released_at'=>'Released 2000',
            'body'=>'88g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'780 mAh ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"103 x 42 x 20 mm, 79 cc (4.06 x 1.65 x 0.79 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po 780 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 8 lines, 3:2 ratio\",\" \":\"Voice memo (3 min)\\r\\n  Organizer\\r\\n  Active flip\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"30 received, dialed and missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"320 h\",\"Talk time\":\"5 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:22',
            'updated_at'=>'2021-09-07 08:11:22'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>185,
            'url_hash'=>'7c4961082e21c5aa3ae16fbff643eb36',
            'phone_brand_id'=>1,
            'name'=>'Nokia 3310',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no3310b.gif',
            'released_at'=>'Released 2000',
            'body'=>'133g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"113 x 48 x 22 mm, 97 cc (4.45 x 1.89 x 0.87 in)\",\"Weight\":\"133 g (4.69 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 900 mAh battery (BMC-3)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Smart messaging\\r\\n  Calculator\\r\\n  Voice Dial\\r\\n  Mobile Chat mode for SMS\\r\\n  Profiles\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"8 dialed, 8 received, 8 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 ( Snake II, Pairs II, Space Impact, Bantumi )\",\"Languages\":\"17 for menu, 11 for T9\",\"Java\":\"No\",\"Stand-by\":\"55 h to 245 h\",\"Talk time\":\"2 h 30 min to 4 h 30\",\"Colors\":\"User exchangeable front and back covers\",\"SAR EU\":\"0.96 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:24',
            'updated_at'=>'2021-09-07 08:11:24'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>186,
            'url_hash'=>'a7cb5c8301b645ec7c56d8c4b68b7421',
            'phone_brand_id'=>8,
            'name'=>'Ericsson A2618',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/era2618b.gif',
            'released_at'=>'Released 2000',
            'body'=>'140g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"131 x 51 x 25 mm (5.16 x 2.01 x 0.98 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"30 received, dialed and missed calls\",\" \":\" Voice dial\\r\\n  - Voice answer\\r\\n  - Custom pictures\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Tetris, Erix, Labirinth\",\"Java\":\"No\",\"Stand-by\":\"195 h\",\"Talk time\":\"7 h\",\"Colors\":\"Exchangeable covers\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:27',
            'updated_at'=>'2021-09-07 08:11:27'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>187,
            'url_hash'=>'838943754455e2b49d907de2d579a918',
            'phone_brand_id'=>8,
            'name'=>'Ericsson R320',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/err320b.gif',
            'released_at'=>'Released 2000',
            'body'=>'99g, 15mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 51 x 15 mm (5.12 x 2.01 x 0.59 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"30 received, dialed and missed calls\",\" \":\"Voice dial\\r\\n  Voice answer\\r\\n  Voice memo\\r\\n  Calculator\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"104 h\",\"Talk time\":\"4 h 30 min\",\"Colors\":\"Atlantic Blue, Rock Red and Stone Purple\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:29',
            'updated_at'=>'2021-09-07 08:11:29'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>188,
            'url_hash'=>'d23170cf67659486200259f611c8900d',
            'phone_brand_id'=>8,
            'name'=>'Ericsson R380',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/err380b.gif',
            'released_at'=>'Released 2000',
            'body'=>'164g, 26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'Big',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 50 x 26 mm (5.12 x 1.97 x 1.02 in)\",\"Weight\":\"164 g (5.78 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"Big\",\" \":\"EPOC operating system\\r\\n  Organizer\\r\\n  Voice dial\\r\\n  Voice answer\\r\\n  Voice memo\\r\\n  Calculator\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"Advanced\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:31',
            'updated_at'=>'2021-09-07 08:11:31'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>189,
            'url_hash'=>'84923ac0cfc649f618fad124155a3d4a',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT 500',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alot500b.jpg',
            'released_at'=>'Released 2000',
            'body'=>'103g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 8x20 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"103 x 42 x 23 mm, 89 cc (4.06 x 1.65 x 0.91 in)\",\"Weight\":\"103 g (3.63 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 8 x 20 chars, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  SATK\\r\\n  Voice memo (60 sec)\\r\\n  Voice recognition\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"30 received, dialed and missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP (for 501)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"320 h\",\"Talk time\":\"5 h\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:34',
            'updated_at'=>'2021-09-07 08:11:34'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>190,
            'url_hash'=>'8a963652b9f877400f60d2934ed12bdd',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT 300',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alot300b.jpg',
            'released_at'=>'Released 2000',
            'body'=>'103g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 45 x 22 mm, 91 cc (4.29 x 1.77 x 0.87 in)\",\"Weight\":\"103 g (3.63 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  SATK\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP (for 301,302,303)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Puzzle, Music, Logics\",\"Java\":\"No\",\"Stand-by\":\"165 h\",\"Talk time\":\"4 h 45 min\",\"Colors\":\"5\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:38',
            'updated_at'=>'2021-09-07 08:11:38'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>191,
            'url_hash'=>'0cf551abf449222765425ce4fda76120',
            'phone_brand_id'=>7,
            'name'=>'Siemens SL45',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sisl45b.gif',
            'released_at'=>'Released 2000',
            'body'=>'88g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'MMC slot',
            'display_size'=>'1.5\"',
            'display_resolution'=>'101x80 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 46 x 17 mm, 69 cc (4.13 x 1.81 x 0.67 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 540 mAh battery\",\"Size\":\"1.5 inches, 24 x 29 mm, 7.1 cm2 (~14.6% screen-to-body ratio)\",\"Resolution\":\"101 x 80 pixels, 7 lines (~86 ppi density)\",\" \":\"MP3 player\\r\\n  Predictive text input\\r\\n  Voice memo (300 min)\\r\\n  Organizer\\r\\n  Stopwatch\\r\\n  Voice dial\\r\\n  Comes with headset and datacable\\r\\n  User profiles\",\"Card slot\":\"MMC, 32 MB included\",\"Phonebook\":\"500, 14 fields each\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"7\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"60 - 170 h\",\"Talk time\":\"1 - 4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:40',
            'updated_at'=>'2021-09-07 08:11:40'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>192,
            'url_hash'=>'aa7a40fb5fd61937c78c6343464c3714',
            'phone_brand_id'=>8,
            'name'=>'Ericsson R520m',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/err520m.gif',
            'released_at'=>'Released Q2 2001 ?',
            'body'=>'105g, 16mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Yes\",\"EDGE\":\"No\",\"Announced\":\"Q2 2001 ?\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 50 x 16 mm (5.12 x 1.97 x 0.63 in)\",\"Weight\":\"105 g (3.70 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\"Card slot\":\"No\",\"Phonebook\":\"500+\",\"Call records\":\"\",\" \":\"Predictive text input\\r\\n  Code memo\\r\\n  Voice dial\\r\\n  Voice answer\\r\\n  Voice memo\\r\\n  Calculator\\r\\n  Speaker with proximity switch\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"1.0b\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"7 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:43',
            'updated_at'=>'2021-09-07 08:11:43'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>193,
            'url_hash'=>'2ea1c200ea0122cbeab8333a4ec42fae',
            'phone_brand_id'=>8,
            'name'=>'Ericsson R310s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/err310s.gif',
            'released_at'=>'Released 2000',
            'body'=>'173g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"131 x 53 x 25 mm (5.16 x 2.09 x 0.98 in)\",\"Weight\":\"173 g (6.10 oz)\",\"SIM\":\"Mini-SIM\",\" \":\"Calculator\\r\\n  Voice memo\\/dial\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"160 h\",\"Talk time\":\"6 h 48 min\",\"Colors\":\"Bright Orange, Nautic Blue, Aquatic Green and Peak Yellow\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:45',
            'updated_at'=>'2021-09-07 08:11:45'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>194,
            'url_hash'=>'4eec25ee2b568171682f434b4d935886',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD J5',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soj5.gif',
            'released_at'=>'Released 2000',
            'body'=>'85g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x92 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"123 x 45 x 20 mm (4.84 x 1.77 x 0.79 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 92 pixels, 6 lines, 1:1 ratio\",\" \":\"Predictive text input \\r\\n  Organizer\\r\\n  Recordable sounds for calls and events\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Polyphonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML (MS)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Bannanas, PicPuz, MindBlaster, SandArt\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"3 h\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:48',
            'updated_at'=>'2021-09-07 08:11:48'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>195,
            'url_hash'=>'317424b3a089bb5763463e8fce861792',
            'phone_brand_id'=>6,
            'name'=>'Motorola A6188',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/moa6188.gif',
            'released_at'=>'Released 2000',
            'body'=>'137g, 29mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'240x320 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 60 x 29 mm (3.86 x 2.36 x 1.14 in)\",\"Weight\":\"137 g (4.83 oz)\",\"SIM\":\"Dual (Mini-SIM)\",\"Type\":\"Removable Li-Ion 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"240 x 320 pixels, 4:3 ratio\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"20 dialed, 20 received, 20 missed calls\",\" \":\"Active flip\\r\\n  Organizer\\r\\n  Scratch memo\\r\\n  Voice memo (3 min)\\r\\n  TrueSync\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"Stereo FM radio, RDS\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"3\",\"Languages\":\"30\",\"Java\":\"No\",\"Stand-by\":\"90 h\",\"Talk time\":\"5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:50',
            'updated_at'=>'2021-09-07 08:11:50'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>196,
            'url_hash'=>'ff689ba3c7ff9f4cb54334d372363b3c',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Mars',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mimars.gif',
            'released_at'=>'Released 2000',
            'body'=>'120g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 50 x 28 mm (4.72 x 1.97 x 1.10 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Predictive text input\\r\\n  Scratchpad\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:52',
            'updated_at'=>'2021-09-07 08:11:52'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>197,
            'url_hash'=>'d83ab93e65ee5f6cda7148f5ebe5414f',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Neptune',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/minept.gif',
            'released_at'=>'Released 2000',
            'body'=>'120g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 50 x 28 mm (4.72 x 1.97 x 1.10 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Predictive text input\\r\\n  Scratchpad\\r\\n  Currency converter\\r\\n  Active flip\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"130 h\",\"Talk time\":\"3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:55',
            'updated_at'=>'2021-09-07 08:11:55'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>198,
            'url_hash'=>'a570701b7011834f6f35d583ab88a560',
            'phone_brand_id'=>13,
            'name'=>'NEC DB4100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/nedb4100.gif',
            'released_at'=>'Released 2000',
            'body'=>'99g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x59 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 42 x 22 mm, 89 cc (4.72 x 1.65 x 0.87 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"97 x 59 pixels, 5:3 ratio\",\" \":\"Profiles\\r\\n  Organizer\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"18\",\"Java\":\"No\",\"Stand-by\":\"195 h\",\"Talk time\":\"330 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:11:57',
            'updated_at'=>'2021-09-07 08:11:57'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>199,
            'url_hash'=>'8356495d7d08f149a237c3bdf785e607',
            'phone_brand_id'=>12,
            'name'=>'Philips Azalis 238',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phazalis.gif',
            'released_at'=>'Released 2000',
            'body'=>'125g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"114 x 51 x 24 mm, 119 cc (4.49 x 2.01 x 0.94 in)\",\"Weight\":\"125 g (4.41 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"up to 500 h\",\"Talk time\":\"6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:00',
            'updated_at'=>'2021-09-07 08:12:00'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>200,
            'url_hash'=>'6117ae760f6fdb57d2eebdff4e915bcf',
            'phone_brand_id'=>4,
            'name'=>'Samsung A110',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssa110.gif',
            'released_at'=>'Released 2000',
            'body'=>'87g with slim battery, 22.9mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'115x60 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"80 x 42 x 22.9 mm (3.15 x 1.65 x 0.90 in)\",\"Weight\":\"87 g with slim battery (3.07 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion\",\"Size\":\"\",\"Resolution\":\"115 x 60 pixels, 4 lines, 19:10 ratio\",\" \":\"Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3.5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:02',
            'updated_at'=>'2021-09-07 08:12:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>201,
            'url_hash'=>'9429d95360af882a65130c439d7c6e44',
            'phone_brand_id'=>4,
            'name'=>'Samsung M100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssm100.gif',
            'released_at'=>'Released 2000',
            'body'=>'97g, 19.3mm thickness',
            'os'=>'Feature phone',
            'storage'=>'32MB storage, no card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"106 x 44 x 19.3 mm (4.17 x 1.73 x 0.76 in)\",\"Weight\":\"97 g (3.42 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 4 lines, 18:9 ratio\",\" \":\"MP3 player\\r\\n  Organizer\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Remote control\\r\\n  Headset included\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Internal\":\"32MB\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"40 h\",\"Talk time\":\"2 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:05',
            'updated_at'=>'2021-09-07 08:12:05'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>202,
            'url_hash'=>'009e5e3e882916b654a2842cbdb4c3ba',
            'phone_brand_id'=>3,
            'name'=>'Benefon Twin+',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/betwinb.gif',
            'released_at'=>'Released 2000',
            'body'=>'105g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x48 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 49 x 27 mm, 115 cc (4.41 x 1.93 x 1.06 in)\",\"Weight\":\"105 g (3.70 oz)\",\"SIM\":\"Dual SIM (Mini-SIM)\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 48 pixels, 6 lines\",\" \":\"Location-based services support\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Phone ON\\/OFF timers\\r\\n  User-changeable display masks\",\"Card slot\":\"No\",\"Phonebook\":\"255\",\"Call records\":\"15 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"Stereo FM radio, RDS\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Wall breaker, Galactic gunner, Labyrinth\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"9 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:07',
            'updated_at'=>'2021-09-07 08:12:07'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>203,
            'url_hash'=>'09024117e9d2096c0b3617d368dd2b5e',
            'phone_brand_id'=>1,
            'name'=>'Nokia 9210 Communicator',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no9210.gif',
            'released_at'=>'Released 2000',
            'body'=>'244g, 27mm thickness',
            'os'=>'Open Symbian, based on Symbian v6.0',
            'storage'=>'MMC slot',
            'display_size'=>'4.5\"',
            'display_resolution'=>'640x200 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1300 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"158 x 56 x 27 mm (6.22 x 2.20 x 1.06 in)\",\"Weight\":\"244 g (8.61 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1300 mAh battery (BLL-3)\",\"Size\":\"4.5 inches, 110 x 35 mm, 37.2 cm2 (~42.0% screen-to-body ratio)\",\"Resolution\":\"640 x 200 pixels (~149 ppi density)\",\" \":\"Attachment viewers\\r\\n  Video player\\r\\n  Document viewer (Word, Excel, PowerPoint, PDF)\\r\\n  All PDA functions\\r\\n  Imaging (Digital camera connectivity)\",\"OS\":\"Open Symbian, based on Symbian v6.0, Series 80 UI\",\"CPU\":\"52 MHz ARM 9\",\"Card slot\":\"MMC, 16 MB included\",\"Loudspeaker \":\"No\",\"Alert types\":\"Downloadable monophonic, WAV ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Browser\":\"WAP, HTML\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Stand-by\":\"Up to 230 h\",\"Talk time\":\"Up to 4 - 10 h\",\"Colors\":\"Black\",\"SAR EU\":\"0.34 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:09',
            'updated_at'=>'2021-09-07 08:12:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>204,
            'url_hash'=>'48285a382af47f0e7c20079aac6ac3b0',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T20s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert20s.gif',
            'released_at'=>'Released 2000',
            'body'=>'128g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1300 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"101 x 54 x 28 mm (3.98 x 2.13 x 1.10 in)\",\"Weight\":\"128 g (4.52 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"Swatch Internet Time\\r\\n  Voice dial\\r\\n  Voice answer\\r\\n  Calculator\\r\\n  Stopwatch\\r\\n  Start-up shut-down shows\\r\\n  Profiles\\r\\n  Active flip\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Tetris, Erix, E-maze, Ballpop\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"10 h\",\"Colors\":\"4 - Blue Whirl, Lime Twist, Silver Weave, Beige Harmony\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:12',
            'updated_at'=>'2021-09-07 08:12:12'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>205,
            'url_hash'=>'5f0930abf8a0ec0edd4218c68b038d03',
            'phone_brand_id'=>4,
            'name'=>'Samsung N100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssn100.gif',
            'released_at'=>'Released 2000',
            'body'=>'83g with slim battery, 17.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'124x64 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1300 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 42 x 17.5 mm (4.13 x 1.65 x 0.69 in)\",\"Weight\":\"83 g with slim battery (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"124 x 64 pixels, 4 lines\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Built-in type ear microphone\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"11\",\"Java\":\"No\",\"Stand-by\":\"55 h\",\"Talk time\":\"2 h 30 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:15',
            'updated_at'=>'2021-09-07 08:12:15'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>206,
            'url_hash'=>'deaf298d26be9f2f831fb01803a24ccf',
            'phone_brand_id'=>6,
            'name'=>'Motorola V3690',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mov3690.gif',
            'released_at'=>'Released 1999',
            'body'=>'83g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'98x64 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"1999\",\"Status\":\"Discontinued\",\"Dimensions\":\"83 x 44 x 25 mm (3.27 x 1.73 x 0.98 in)\",\"Weight\":\"83 g (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 500 mAh battery\",\"Size\":\"\",\"Resolution\":\"98 x 64 pixels, 5 lines, 3:2 ratio\",\" \":\"Voice memo\\r\\n  Voice dial\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"55 h - 125 h\",\"Talk time\":\"130 min - 200 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:18',
            'updated_at'=>'2021-09-07 08:12:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>207,
            'url_hash'=>'4c8a25c04ee6aa7d1d5105a98a57e2a1',
            'phone_brand_id'=>7,
            'name'=>'Siemens A36',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sia36.gif',
            'released_at'=>'Released 2000',
            'body'=>'120g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 46 x 21 mm (4.65 x 1.81 x 0.83 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 0 received, 5 missed calls\",\" \":\"No\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"60 h - 150 h\",\"Talk time\":\"90 min - 240 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:20',
            'updated_at'=>'2021-09-07 08:12:20'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>208,
            'url_hash'=>'218e4b3957d92e34a9dffd1998e063a3',
            'phone_brand_id'=>7,
            'name'=>'Siemens C28',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic28.gif',
            'released_at'=>'Released 2000',
            'body'=>'135g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"117 x 47 x 27 mm, 120 cc (4.61 x 1.85 x 1.06 in)\",\"Weight\":\"135 g (4.76 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"3 x 12 chars\",\" \":\"DJ sounds\\r\\n  1 self-composable ringer tone\",\"Card slot\":\"No\",\"Phonebook\":\"8\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"160 h\",\"Talk time\":\"300 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:23',
            'updated_at'=>'2021-09-07 08:12:23'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>209,
            'url_hash'=>'d891aac5bb78756c01631c60a04666ac',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8250',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8250.gif',
            'released_at'=>'Released 2000',
            'body'=>'81g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'84x48 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"102.5 x 45 x 19 mm, 69 cc (4.04 x 1.77 x 0.75 in)\",\"Weight\":\"81 g (2.86 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 830 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"84 x 48 pixels, 5 lines, 16:9 ratio\",\" \":\"SMS chat\\r\\n  Predictive text input\\r\\n  Over-the-air activation for sending\\/receiving phone numbers\\r\\n  Business card sending\\/receiving\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"20 dialed, 20 received, 20 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Memory, Snake, Logic, Opposite\",\"Java\":\"No\",\"Stand-by\":\"50 h - 150 h\",\"Talk time\":\"2 h - 3 h 20 min\",\"Colors\":\"Xpress-on covers\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:25',
            'updated_at'=>'2021-09-07 08:12:25'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>210,
            'url_hash'=>'8a1ac6af12f7974970dde56e8af1d53c',
            'phone_brand_id'=>18,
            'name'=>'Sendo D800',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sed800.gif',
            'released_at'=>'Released 2000',
            'body'=>'68g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"102 x 44 x 19 mm, 69 cc (4.02 x 1.73 x 0.75 in)\",\"Weight\":\"68 g (2.40 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 6 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  Battery backup\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - FlippIT, Quaddro, Scizzors, Splash\",\"Java\":\"No\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:27',
            'updated_at'=>'2021-09-07 08:12:27'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>211,
            'url_hash'=>'fff0802697379ab1d934de70b85a048f',
            'phone_brand_id'=>7,
            'name'=>'Siemens M30',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sim30.gif',
            'released_at'=>'Released 2000',
            'body'=>'110g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"124 x 44 x 24 mm, 99 cc (4.88 x 1.73 x 0.94 in)\",\"Weight\":\"110 g (3.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"Up to 180 hours\",\"Talk time\":\"Up to 6 hours\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:30',
            'updated_at'=>'2021-09-07 08:12:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>212,
            'url_hash'=>'df278af917957cd9efe144c1f0d767c1',
            'phone_brand_id'=>7,
            'name'=>'Siemens S40',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis40.gif',
            'released_at'=>'Released 2001',
            'body'=>'97g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 44 x 22 mm, 85 cc (4.41 x 1.73 x 0.87 in)\",\"Weight\":\"97 g (3.42 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"6 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice memo (5 min)\\r\\n  Data cable included\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"10 dialed, 10 received, 20 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"260 h\",\"Talk time\":\"380 min\",\"Colors\":\"Silver only\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:32',
            'updated_at'=>'2021-09-07 08:12:32'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>213,
            'url_hash'=>'0936f8f9ff1b38c626aa33af82d8d829',
            'phone_brand_id'=>6,
            'name'=>'Motorola V2288',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mov2288.gif',
            'released_at'=>'Released 2000',
            'body'=>'150g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"137 x 50 x 23 mm (5.39 x 1.97 x 0.91 in)\",\"Weight\":\"150 g (5.29 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 5 lines, 3:2 ratio\",\" \":\"2 Coloured PhoneWraps (included)\\r\\n  Handsfree Stereo Headset (included)\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"30\",\"Java\":\"No\",\"Stand-by\":\"135 h\",\"Talk time\":\"210 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:34',
            'updated_at'=>'2021-09-07 08:12:34'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>214,
            'url_hash'=>'5586bbadac5ad6f679d981753484ac3b',
            'phone_brand_id'=>6,
            'name'=>'Motorola T180',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mot180.gif',
            'released_at'=>'Released 2000',
            'body'=>'140g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 47 x 27 mm (5.12 x 1.85 x 1.06 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 12 chars\",\" \":\"No\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"No\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"30\",\"Java\":\"No\",\"Stand-by\":\"135 h\",\"Talk time\":\"210 min\",\"Colors\":\"4 - volt blue, lavender, kingfisher and ash black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:37',
            'updated_at'=>'2021-09-07 08:12:37'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>215,
            'url_hash'=>'1709a50c6832dceee863435b676dd73b',
            'phone_brand_id'=>6,
            'name'=>'Motorola V50',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mov50.gif',
            'released_at'=>'Released 2000',
            'body'=>'83g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x54 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"83 x 44 x 25 mm (3.27 x 1.73 x 0.98 in)\",\"Weight\":\"83 g (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 54 pixels, 5 lines, 16:9 ratio\",\" \":\"Predictive text input (iTAP)\\r\\n  Voice memo\\r\\n  Voice dial\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"55 h - 125 h\",\"Talk time\":\"130 min - 200 min\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:39',
            'updated_at'=>'2021-09-07 08:12:39'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>216,
            'url_hash'=>'a4f2a8b1be4586e3c3534799b05b5590',
            'phone_brand_id'=>6,
            'name'=>'Motorola V.box(V100)',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/movbox.gif',
            'released_at'=>'Released 2000',
            'body'=>'83g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'126x64 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"83 x 44 x 25 mm (3.27 x 1.73 x 0.98 in)\",\"Weight\":\"83 g (2.93 oz)\",\"Keyboard\":\"QWERTY\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"126 x 64 pixels, 7 lines\",\" \":\"Voice memo\\r\\n  Voice dial\\r\\n  Smart button \\r\\n  Volume keys\\r\\n  NavDisc\\r\\n  Write and read SMS hot keys\\r\\n  OK button on outside\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"3\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"3 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:42',
            'updated_at'=>'2021-09-07 08:12:42'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>217,
            'url_hash'=>'b3d72b5e1d8a882b0bc50cce845ca96b',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T29s',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert29.gif',
            'released_at'=>'Released 2001, February',
            'body'=>'95g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, February\",\"Status\":\"Discontinued\",\"Dimensions\":\"101 x 49 x 20 mm (3.98 x 1.93 x 0.79 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"200\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"Predictive text input\\r\\n  Voice dialing\\r\\n  Voice answering\\r\\n  Profiles]\\r\\n  Helptexts and shortcuts\\r\\n  Active flip\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"5\",\"Languages\":\"English + many Asian\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"7 h\",\"Colors\":\"2 - Amethyst Purple and Sapphire Blue\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:45',
            'updated_at'=>'2021-09-07 08:12:45'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>218,
            'url_hash'=>'6b6943c5f515e61516652832f54b13e0',
            'phone_brand_id'=>8,
            'name'=>'Ericsson A2628',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/era2628.gif',
            'released_at'=>'Released 2001',
            'body'=>'140g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"131 x 51 x 25 mm (5.16 x 2.01 x 0.98 in)\",\"Weight\":\"140 g (4.94 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"Voice dial\\r\\n  Voice answer\\r\\n  Custom pictures\\r\\n  Stopwatch\\r\\n  Profiles\\r\\n  Calculator\\r\\n  Snap-On Covers\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"30 received, dialed and missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Tetris, Erix, Labirinth\",\"Java\":\"No\",\"Stand-by\":\"235 h\",\"Talk time\":\"11 h\",\"Colors\":\"4 - Astral Blue, Pistachio Yellow, Green Pepper, Celestial black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:47',
            'updated_at'=>'2021-09-07 08:12:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>219,
            'url_hash'=>'a4ade577ab1fb655321fd7a3d87cddb4',
            'phone_brand_id'=>18,
            'name'=>'Sendo S200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ses200.gif',
            'released_at'=>'Released 2001, Q2',
            'body'=>'98g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q2\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 50 x 22 mm, 89 cc (4.13 x 1.97 x 0.87 in)\",\"Weight\":\"98 g (3.46 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 6 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  User changeable front housing, back housing and keypad\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - FlippIT, Quaddro, Scizzors, Splash\",\"Java\":\"No\",\"Stand-by\":\"300 h\",\"Talk time\":\"3 h\",\"Colors\":\"4 - Midnight, Ink Blue, Frosty Mint and Pepper Red\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:49',
            'updated_at'=>'2021-09-07 08:12:49'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>220,
            'url_hash'=>'b1c6383523ab518b67b95bf6b7bf150d',
            'phone_brand_id'=>18,
            'name'=>'Sendo Z100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sez100.gif',
            'released_at'=>'Cancelled',
            'body'=>'99g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'MMC slot',
            'display_size'=>'2.2\"',
            'display_resolution'=>'176x220 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Yes\",\"EDGE\":\"No\",\"Announced\":\"Never\",\"Status\":\"Cancelled\",\"Dimensions\":\"126 x 48 x 17 mm, 99 cc (4.96 x 1.89 x 0.67 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"2.2 inches, 35 x 44 mm, 15.2 cm2 (~25.2% screen-to-body ratio)\",\"Resolution\":\"176 x 220 pixels (~128 ppi density)\",\"Card slot\":\"MMC\",\"Phonebook\":\"\",\"Call records\":\"\",\" \":\"Advanced mobile Internet\\r\\n  Organizer\\r\\n  MP3 and WMA player\\r\\n  RS-232 connectivity\\r\\n  MMC card slot\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  RS-232 connectivity\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"Proprietary\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:52',
            'updated_at'=>'2021-09-07 08:12:52'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>221,
            'url_hash'=>'45b65e9ce3f2b10628324df62f40f176',
            'phone_brand_id'=>4,
            'name'=>'Samsung Q100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/saq100.gif',
            'released_at'=>'Released 2001',
            'body'=>'85g, 18.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x128 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 42 x 18.5 mm (4.41 x 1.65 x 0.73 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 128 pixels, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  PC synchronisation\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Built-in Ear Microphone\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"WAP Interactive game\",\"Java\":\"No\",\"Stand-by\":\"90 h\",\"Talk time\":\"3 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:54',
            'updated_at'=>'2021-09-07 08:12:54'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>222,
            'url_hash'=>'b65d2ac22502251c87a87ff95fed8eee',
            'phone_brand_id'=>13,
            'name'=>'NEC DB5000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/nedb5000.gif',
            'released_at'=>'Released 2001',
            'body'=>'99g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'97x59 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"90 x 46 x 23 mm, 85 cc (3.54 x 1.81 x 0.91 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"97 x 59 pixels, 5:3 ratio\",\" \":\"Predictive text input\\r\\n  Profiles\\r\\n  Organizer\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"18\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"5 h\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:56',
            'updated_at'=>'2021-09-07 08:12:56'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>223,
            'url_hash'=>'92d2fa3258229d7b639e77b159e8c37a',
            'phone_brand_id'=>13,
            'name'=>'NEC DB6000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/nedb6000.gif',
            'released_at'=>'Released 2001',
            'body'=>'26mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'120x160 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"94 x 50 x 26 mm, 100 cc (3.70 x 1.97 x 1.02 in)\",\"Weight\":\"\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"120 x 160 pixels, 4:3 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice memo\\r\\n  Profiles\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Languages\":\"18\",\"Java\":\"No\",\"Stand-by\":\"195 h\",\"Talk time\":\"5 h\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:12:59',
            'updated_at'=>'2021-09-07 08:12:59'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>224,
            'url_hash'=>'cf06ae6bda168d1eea4abca0065d91d4',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD MZ5',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sony-cmd-mz5.jpg',
            'released_at'=>'Released May 2001',
            'body'=>'110g, 30mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x72 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'620 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"May 2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"90 x 49 x 30 mm, 100 cc (3.54 x 1.93 x 1.18 in)\",\"Weight\":\"110 g (3.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 620 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 72 pixels, 5 lines, 4:3 ratio\",\" \":\"MP3 player\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Answering machine\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Sport Fishing, Disc Golf, Clay Shooting, Mole Hitting\",\"Java\":\"No\",\"Stand-by\":\"30 h - 150 h\",\"Talk time\":\"90 min - 220 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:01',
            'updated_at'=>'2021-09-07 08:13:01'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>225,
            'url_hash'=>'42dc0d6f1b3d5d41b16929f13cac39df',
            'phone_brand_id'=>12,
            'name'=>'Philips Ozeo 8@8',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phoz8a8.gif',
            'released_at'=>'Released 2000',
            'body'=>'128g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'670 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"114 x 51 x 24 mm, 119 cc (4.49 x 2.01 x 0.94 in)\",\"Weight\":\"128 g (4.52 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 670 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Bricks\",\"Java\":\"No\",\"Stand-by\":\"120 - 300 h\",\"Talk time\":\"3 - 5 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:04',
            'updated_at'=>'2021-09-07 08:13:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>226,
            'url_hash'=>'d0e16364055ea2afb511113f0a2f5350',
            'phone_brand_id'=>12,
            'name'=>'Philips Azalis 268',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phaz268.gif',
            'released_at'=>'Released 2000',
            'body'=>'99g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"119 x 44 x 22 mm (4.69 x 1.73 x 0.87 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Bricks\",\"Java\":\"No\",\"Stand-by\":\"up to 300 h\",\"Talk time\":\"up to 4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:06',
            'updated_at'=>'2021-09-07 08:13:06'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>227,
            'url_hash'=>'f32b96ca7c86f2c2e6b1bcaceadb377a',
            'phone_brand_id'=>12,
            'name'=>'Philips Xenium 9@9',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phxe9a9.gif',
            'released_at'=>'Released 2000',
            'body'=>'95g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 41 x 22 mm, 85 cc (4.29 x 1.61 x 0.87 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Bricks\",\"Java\":\"No\",\"Stand-by\":\"up to 600 h\",\"Talk time\":\"3 - 7 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:09',
            'updated_at'=>'2021-09-07 08:13:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>228,
            'url_hash'=>'7b56cece56291a953067c970ee8e6563',
            'phone_brand_id'=>12,
            'name'=>'Philips Fisio 610',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phfi610.gif',
            'released_at'=>'Released 2001',
            'body'=>'90g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 45 x 18 mm (4.33 x 1.77 x 0.71 in)\",\"Weight\":\"90 g (3.17 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Picture messaging\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"100 h\",\"Talk time\":\"4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:11',
            'updated_at'=>'2021-09-07 08:13:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>229,
            'url_hash'=>'b46f2866925a248f1f6528da0622f7ab',
            'phone_brand_id'=>12,
            'name'=>'Philips Genie 2000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/phge2000.gif',
            'released_at'=>'Released 2000',
            'body'=>'99g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'100x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2000\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 54 x 20 mm, 99 cc (4.33 x 2.13 x 0.79 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 550 mAh battery\",\"Size\":\"\",\"Resolution\":\"100 x 64 pixels, 6 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Voice dial\\r\\n  Voice command\\r\\n  Organizer\\r\\n  \\r\\n  \",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"1\",\"Java\":\"No\",\"Stand-by\":\"220 - 260 h\",\"Talk time\":\"3 - 4 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:13',
            'updated_at'=>'2021-09-07 08:13:13'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>230,
            'url_hash'=>'eb1a614187bd8db6418ffb3673326753',
            'phone_brand_id'=>1,
            'name'=>'Nokia 3330',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no3330.gif',
            'released_at'=>'Released 2001',
            'body'=>'133g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"113 x 48 x 22 mm, 97 cc (4.45 x 1.89 x 0.87 in)\",\"Weight\":\"133 g (2.86 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 900 mAh battery (BMC-3)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Downloadable game packs via WAP\\r\\n  Predictive text input\\r\\n  Smart messaging\\r\\n  Calculator\\r\\n  Voice Dial\\r\\n  Mobile Chat mode for SMS\\r\\n  Profiles\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"5 ( Snake II, Pairs II, Space Impact, Bantumi, Bumper )\",\"Languages\":\"17 for menu, 11 for T9\",\"Java\":\"No\",\"Stand-by\":\"55 h to 245 h\",\"Talk time\":\"2 h 30 min to 4 h 30\",\"Colors\":\"User exchangeable front and back covers\",\"SAR EU\":\"0.96 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:16',
            'updated_at'=>'2021-09-07 08:13:16'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>231,
            'url_hash'=>'11d63d849da605fe83fec8b419826ca5',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6310',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6310.gif',
            'released_at'=>'Released 2001',
            'body'=>'111g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x65 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1050 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"129 x 47 x 19 mm, 97 cc (5.08 x 1.85 x 0.75 in)\",\"Weight\":\"111 g (3.92 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1050 mAh battery (BLS-2N)\",\"Size\":\"\",\"Resolution\":\"96 x 65 pixels, 6 lines, 3:2 ratio\",\" \":\"SyncML\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Voice record\\r\\n  Voice command\\r\\n  Infrared transfer of data between compatible phones\\r\\n  Profile Selection\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"1.1\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 Games (Snake II, Opposite, Pairs II)\",\"Languages\":\"Major European and Asian languages\",\"Java\":\"No\",\"Stand-by\":\"Up to 430 h\",\"Talk time\":\"Up to 5 h 30 min\",\"Colors\":\"3 - Jet Black, Lightening Silver and Laser Red\",\"SAR EU\":\"0.81 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:18',
            'updated_at'=>'2021-09-07 08:13:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>232,
            'url_hash'=>'045b2b40f83e0e26473cc0ddf7d0570d',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8310',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8310.gif',
            'released_at'=>'Released 2001',
            'body'=>'84g, 19mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 43 x 19 mm, 66 cc (3.82 x 1.69 x 0.75 in)\",\"Weight\":\"84 g (2.96 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 830 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"2 Coloured PhoneWraps (included)\\r\\n  Handsfree Stereo Headset (included)\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Snake II, Bumper, Pairs II, Snowboard\",\"Languages\":\"32 total\",\"Java\":\"No\",\"Stand-by\":\"100 - 400 h\",\"Talk time\":\"2 - 4 h\",\"Colors\":\"9 Xpress-on covers\",\"SAR EU\":\"0.82 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:21',
            'updated_at'=>'2021-09-07 08:13:21'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>233,
            'url_hash'=>'577fb0ffa0ecae99d03d4986ca09783c',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD95',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd95.gif',
            'released_at'=>'Released 2001',
            'body'=>'85g, 14mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'11 linesx16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'690 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8 (GD96 only)\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 45 x 14 mm, 90 cc (4.72 x 1.77 x 0.55 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 690 mAh battery\",\"Size\":\"\",\"Resolution\":\"11 lines x 16 chars\",\" \":\"Predictive text input\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Dictaphone\",\"Card slot\":\"No\",\"Phonebook\":\"200\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2\",\"Java\":\"No\",\"Stand-by\":\"up to 90 h\",\"Talk time\":\"up to 5 h\",\"Colors\":\"2\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:23',
            'updated_at'=>'2021-09-07 08:13:23'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>234,
            'url_hash'=>'3cce18459b310b9c645bdeaf48005d74',
            'phone_brand_id'=>7,
            'name'=>'Siemens S45',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sis45.gif',
            'released_at'=>'Released 2001',
            'body'=>'93g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x80 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'850 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 46 x 20 mm, 69 cc (4.29 x 1.81 x 0.79 in)\",\"Weight\":\"93 g (3.28 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 850 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 80 pixels, 7 lines\",\" \":\"Predictive text input\\r\\n  Stopwatch\\r\\n  Organizer\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  User profiles\",\"Card slot\":\"No\",\"Phonebook\":\"500 x 14 fields\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"up to 300 h\",\"Talk time\":\"up to 6 h\",\"Colors\":\"2 - diamond silver, sapphire blue\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:25',
            'updated_at'=>'2021-09-07 08:13:25'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>235,
            'url_hash'=>'2691fbd5471acd8561d2ea560239902a',
            'phone_brand_id'=>14,
            'name'=>'Sagem MC 3000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samc3000.gif',
            'released_at'=>'Released 2001',
            'body'=>'112g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'850 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 45 x 18 mm, 79 cc (4.13 x 1.77 x 0.71 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"40\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"140 h\",\"Talk time\":\"105 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:28',
            'updated_at'=>'2021-09-07 08:13:28'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>236,
            'url_hash'=>'fd0a6f20de0a34eb3c16fdd0caafefae',
            'phone_brand_id'=>14,
            'name'=>'Sagem MW 3020',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samw3020.gif',
            'released_at'=>'Released 2001',
            'body'=>'112g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'850 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 45 x 18 mm, 79 cc (4.13 x 1.77 x 0.71 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"up to 7 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"170 h\",\"Talk time\":\"130 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:30',
            'updated_at'=>'2021-09-07 08:13:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>237,
            'url_hash'=>'257b5b0bcd30813490798f20039be180',
            'phone_brand_id'=>14,
            'name'=>'Sagem WA 3050',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sawa3050.gif',
            'released_at'=>'Released 2001',
            'body'=>'198g, 17mm thickness',
            'os'=>'Microsoft Windows PocketPC',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'240x320 pixels, 60x80 mm',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'850 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Yes (for the GPRS model)\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 80 x 17 mm (5.12 x 3.15 x 0.67 in)\",\"Weight\":\"198 g (6.98 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"240 x 320 pixels, 60 x 80 mm, 4:3 ratio\",\"OS\":\"Microsoft Windows PocketPC\",\"CPU\":\"206 MHz ARM SA-1110\",\"Card slot\":\"No\",\" \":\"MP3 player\\r\\n  Predictive text input\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Stand-by\":\"170 h\",\"Talk time\":\"130 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:33',
            'updated_at'=>'2021-09-07 08:13:33'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>238,
            'url_hash'=>'7178b938ffbe69cd0b2c266604efa0c9',
            'phone_brand_id'=>14,
            'name'=>'Sagem MW X1',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samwx1.gif',
            'released_at'=>'Released 2001',
            'body'=>'180g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'124x68 pixels, up to 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"140 x 57 x 20 mm (5.51 x 2.24 x 0.79 in)\",\"Weight\":\"180 g (6.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"124 x 68 pixels, up to 8 lines, 17:9 ratio\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\\r\\n  \\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"20 dialed, 20 received, 20 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"600 h (35 g+)\",\"Talk time\":\"-\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:35',
            'updated_at'=>'2021-09-07 08:13:35'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>239,
            'url_hash'=>'b9fa1acb8b3788583f4380f40954ff55',
            'phone_brand_id'=>6,
            'name'=>'Motorola Accompli 009',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/moa009.gif',
            'released_at'=>'Released 2001',
            'body'=>'216.5g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'240x160 pixels, 55x35 mm',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"92 x 72 x 27 mm, 150 cc (3.62 x 2.83 x 1.06 in)\",\"Weight\":\"216.5g (7.62 oz)\",\"Keyboard\":\"QWERTY\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"240 x 160 pixels, 55 x 35 mm, 3:2 ratio\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\" \":\"PDA\\r\\n  Organizer\\r\\n  Voice memo\\r\\n  Voice dial\\r\\n  Smart button \\r\\n  NavDisc\\r\\n  Write and read SMS hot keys\\r\\n  OK button on outside\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"26\",\"Java\":\"No\",\"Stand-by\":\"80 h - 130 h\",\"Talk time\":\"120 min - 160 min\",\"Colors\":\"2 - Radar Blue, Accompli Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:38',
            'updated_at'=>'2021-09-07 08:13:38'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>240,
            'url_hash'=>'07d1e147bbe5f4fe65ed04aaf3bbcf17',
            'phone_brand_id'=>6,
            'name'=>'Motorola Timeport 280',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mot280.gif',
            'released_at'=>'Released 2001',
            'body'=>'109g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x100 pixels, 7 linesx16 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"125 x 49 x 24 mm, 98 cc (4.92 x 1.93 x 0.94 in)\",\"Weight\":\"109 g (3.84 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"128 x 100 pixels, 7 lines x 16 chars\",\"Card slot\":\"No\",\"Phonebook\":\"1000\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\" \":\"Organizer\\r\\n  Voice note\\r\\n  Voice activation\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"150 h - 250 h\",\"Talk time\":\"3 h - 4 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:40',
            'updated_at'=>'2021-09-07 08:13:40'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>241,
            'url_hash'=>'731a0202c4c39da0363712da680c38eb',
            'phone_brand_id'=>6,
            'name'=>'Motorola V66',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mov66.gif',
            'released_at'=>'Released 2001',
            'body'=>'79g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x54 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"84 x 44 x 21 mm (3.31 x 1.73 x 0.83 in)\",\"Weight\":\"79 g (2.79 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 500 mAh battery (SNN5611)\",\"Size\":\"\",\"Resolution\":\"96 x 54 pixels, 5 lines, 16:9 ratio\",\" \":\"Predictive text input (iTAP)\\r\\n  Organizer\\r\\n  Voice memo\\r\\n  Voice dial\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"40 h - 100 h\",\"Talk time\":\"2 h - 3 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:42',
            'updated_at'=>'2021-09-07 08:13:42'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>242,
            'url_hash'=>'c6c91525947c26671f370d4edd670266',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T20e',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert20e.gif',
            'released_at'=>'Released 2001',
            'body'=>'128g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x33 pixels, 3x12 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"101 x 54 x 28 mm (3.98 x 2.13 x 1.10 in)\",\"Weight\":\"128 g (4.52 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"101 x 33 pixels, 3 x 12 chars\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"Mobile chat\\r\\n  Swatch Internet Time\\r\\n  Voice dial\\r\\n  Voice answer\\r\\n  Calculator\\r\\n  Stopwatch\\r\\n  Pictures and sound in SMS\\r\\n  Start-up shut-down shows\\r\\n  Profiles\\r\\n  Active flip\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP with added security\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"5\",\"Languages\":\"24\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"10 h\",\"Colors\":\"5 - Purple Wild, Blue Whirl, Lime Twist, Silver Weave, Beige Harmony\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:45',
            'updated_at'=>'2021-09-07 08:13:45'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>243,
            'url_hash'=>'d811cbb6cfbb59bcdadb70e5ee245111',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T39',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert39.gif',
            'released_at'=>'Released 2001',
            'body'=>'86g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x54 pixels, 4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Yes\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"96 x 50 x 18 mm (3.78 x 1.97 x 0.71 in)\",\"Weight\":\"86 g (3.03 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"101 x 54 pixels, 4 lines, 17:9 ratio\",\"Card slot\":\"No\",\"Phonebook\":\"510\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice dialing\\r\\n  Voice answering\\r\\n  Profiles\\r\\n  Helptexts and shortcuts\\r\\n  Active flip\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"1.0b\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Languages\":\"37\",\"Java\":\"No\",\"Stand-by\":\"up to 29 days\",\"Talk time\":\"up to 25 h\",\"Colors\":\"3 - Classic Blue, Icecap Blue, Rose White\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:47',
            'updated_at'=>'2021-09-07 08:13:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>244,
            'url_hash'=>'b39a23b78521b6f2b34980cd57796827',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T68',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert68.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'84g, 19.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x80 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Yes\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"101 x 48 x 19.5 mm (3.98 x 1.89 x 0.77 in)\",\"Weight\":\"84 g (2.96 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery (BST-14)\",\"Size\":\"\",\"Resolution\":\"101 x 80 pixels\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice dialing\\r\\n  Voice answering\\r\\n  Profiles\",\"Card slot\":\"No\",\"Phonebook\":\"500 x 8 fields\",\"Call records\":\" 10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"1.0b\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS, MMS, Email\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"6 - Erix, Ripple, Tetris, Game, Q, Solitaire\",\"Java\":\"No\",\"Stand-by\":\"up to 29 days\",\"Talk time\":\"up to 25 h\",\"Colors\":\"2 - Ziroc\\u00f1an Gold, Lunar Grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:50',
            'updated_at'=>'2021-09-07 08:13:50'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>245,
            'url_hash'=>'2a17c71d8dfc90d3a12329a9f3a192eb',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Sirius',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/misiri.gif',
            'released_at'=>'Released Mid 2001',
            'body'=>'75g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5x13 to 25 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 2\",\"EDGE\":\"No\",\"Announced\":\"Mid 2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"104 x 53 x 22 mm (4.09 x 2.09 x 0.87 in)\",\"Weight\":\"75 g (2.65 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"5 x 13 to 25 chars\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Business card exchange via IrDA\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Scratchpad\\r\\n  Active flip\",\"Card slot\":\"No\",\"Phonebook\":\"250 x 5 fields\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2\",\"Languages\":\"8\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:52',
            'updated_at'=>'2021-09-07 08:13:52'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>246,
            'url_hash'=>'800281a15deda4101d2249f7a0cb82c6',
            'phone_brand_id'=>5,
            'name'=>'Mitsubishi Trium Eclipse',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/miecli.gif',
            'released_at'=>'Released 2001, Q3',
            'body'=>'110g, 29mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'120x143 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'500 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001, Q3\",\"Status\":\"Discontinued\",\"Dimensions\":\"123 x 48 x 29 mm, 100 cc (4.84 x 1.89 x 1.14 in)\",\"Weight\":\"110 g (3.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"120 x 143 pixels\",\" \":\"Business card exchange via IrDA\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"250 x 5 fields\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable polyphonic, monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2 - Rayman Bowling, Rayman Garden\",\"Java\":\"No\",\"Stand-by\":\"180 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:55',
            'updated_at'=>'2021-09-07 08:13:55'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>247,
            'url_hash'=>'06e0b611e5cae03f2e4c5f57d7bdadb5',
            'phone_brand_id'=>6,
            'name'=>'Motorola Timeport 250',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mot250.gif',
            'released_at'=>'Released 2001',
            'body'=>'97g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'98x64 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"130 x 46 x 23 mm (5.12 x 1.81 x 0.91 in)\",\"Weight\":\"97 g (3.42 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"98 x 64 pixels, 5 lines, 3:2 ratio\",\" \":\"Voice note\\r\\n  Voice activation\\r\\n  Answering machine\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"300\",\"Call records\":\"10 dialed, 5 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Languages\":\"16 + 11\",\"Java\":\"No\",\"Stand-by\":\"up to 110 h\",\"Talk time\":\"up to 210 min\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:57',
            'updated_at'=>'2021-09-07 08:13:57'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>248,
            'url_hash'=>'6777ef6ed4bac1f1e2bea6a7d78bfb8e',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT 511',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alot511.gif',
            'released_at'=>'Released 2001',
            'body'=>'75g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 6x20 chars',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"9600 bps\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 42 x 20 mm, 71 cc (3.82 x 1.65 x 0.79 in)\",\"Weight\":\"75 g (2.65 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 6 x 20 chars, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  Voice memo\\r\\n  Voice dial\",\"Card slot\":\"No\",\"Phonebook\":\"?\",\"Call records\":\"10 received, dialed and missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable polyphonic, monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"up to 280 h\",\"Talk time\":\"up to 6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:13:59',
            'updated_at'=>'2021-09-07 08:13:59'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>249,
            'url_hash'=>'0cf6b3574a99d8fdb8e6314fe3e4a5b7',
            'phone_brand_id'=>14,
            'name'=>'Sagem MW 3040',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samw3040.gif',
            'released_at'=>'Released 2001',
            'body'=>'97g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 45 x 18 mm, 79 cc (4.13 x 1.77 x 0.71 in)\",\"Weight\":\"97 g (3.42 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"up to 8 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\\r\\n  Interchangeable front covers\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"170 h\",\"Talk time\":\"4 h 30 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:02',
            'updated_at'=>'2021-09-07 08:14:02'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>250,
            'url_hash'=>'33c4fbada4ab0903a59a925ed4503e07',
            'phone_brand_id'=>4,
            'name'=>'Samsung A200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssa200.gif',
            'released_at'=>'Released 2001',
            'body'=>'77g with slim battery, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"79 x 38 x 23 mm (3.11 x 1.50 x 0.91 in)\",\"Weight\":\"77 g with slim battery (2.72 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 18:9 ratio\",\" \":\"Voice commands and dial\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100 entries, 5 contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"3 h 30 min\",\"Colors\":\"3 - White Pearl, Champaign Gold, Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:04',
            'updated_at'=>'2021-09-07 08:14:04'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>251,
            'url_hash'=>'6f1176e2970568563db82f0d54ff639e',
            'phone_brand_id'=>4,
            'name'=>'Samsung A300',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssa300.gif',
            'released_at'=>'Released 2001',
            'body'=>'77g with slim battery, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x128 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"81 x 42 x 22 mm (3.19 x 1.65 x 0.87 in)\",\"Weight\":\"77 g with slim battery (2.72 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"128 x 128 pixels, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100 entries, 5 contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"50 h\",\"Talk time\":\"2.5 h\",\"Colors\":\"3 - Champaign Gold, Metallic Silver, Rich Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:06',
            'updated_at'=>'2021-09-07 08:14:06'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>252,
            'url_hash'=>'a3bc7655e3d922f59a3c1b517627ccd6',
            'phone_brand_id'=>4,
            'name'=>'Samsung N300',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssn300.gif',
            'released_at'=>'Released 2001',
            'body'=>'85g, 18.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'124x64 pixels, 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 42 x 18.5 mm (4.41 x 1.65 x 0.73 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"124 x 64 pixels, 8 lines\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Built-in type ear microphone\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"11\",\"Java\":\"No\",\"Stand-by\":\"65 h\",\"Talk time\":\"2 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:09',
            'updated_at'=>'2021-09-07 08:14:09'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>253,
            'url_hash'=>'0a4357acf820652bea0f62a7ee56106a',
            'phone_brand_id'=>8,
            'name'=>'Ericsson A3618',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/era3618.gif',
            'released_at'=>'Released 2001, Q3',
            'body'=>'86g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q3\",\"Status\":\"Discontinued\",\"Dimensions\":\"111 x 47 x 22 mm (4.37 x 1.85 x 0.87 in)\",\"Weight\":\"86 g (3.03 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"Predictive text input\\r\\n  Stopwatch\\r\\n  Profiles\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"99\",\"Call records\":\"20 received, dialed and missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Tetris, Erix, Pulldown\",\"Languages\":\"4\",\"Java\":\"No\",\"Stand-by\":\"90 - 155 h\",\"Talk time\":\"2.5 - 4 h\",\"Colors\":\"2 - Icy Silver, Graphite Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:11',
            'updated_at'=>'2021-09-07 08:14:11'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>254,
            'url_hash'=>'eed31237e0dbb9d9e379327a15a70958',
            'phone_brand_id'=>7,
            'name'=>'Siemens ME45',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sime45.gif',
            'released_at'=>'Released 2001',
            'body'=>'99g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x80 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'840 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 46 x 21 mm, 76 cc (4.29 x 1.81 x 0.83 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\" \":\"Organizer\\r\\n  Stopwatch\\r\\n  Voice memo\\/dial\\r\\n  Predictive text input\",\"Type\":\"Removable Li-Ion 840 mAh battery\",\"Size\":\"\",\"Resolution\":\"101 x 80 pixels, 7 lines\",\"Card slot\":\"No\",\"Phonebook\":\"500 x 14 entries\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"60 - 300 h\",\"Talk time\":\"100 - 300 min\",\"Colors\":\"2 - Pebble Grey and Safari Grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:14',
            'updated_at'=>'2021-09-07 08:14:14'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>255,
            'url_hash'=>'6ec6cdceaac5ee03ef42854ae81cafcd',
            'phone_brand_id'=>7,
            'name'=>'Siemens SL42',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sisl42.gif',
            'released_at'=>'Released 2001',
            'body'=>'88g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'MMC slot',
            'display_size'=>'1.5\"',
            'display_resolution'=>'101x80 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 46 x 17 mm, 69 cc (4.13 x 1.81 x 0.67 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 540 mAh battery\",\"Size\":\"1.5 inches, 24 x 29 mm, 7.1 cm2 (~14.6% screen-to-body ratio)\",\"Resolution\":\"101 x 80 pixels, 7 lines (~86 ppi density)\",\" \":\"MP3 player \\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Stopwatch\\r\\n  Reminder list\\r\\n  Voice dial\\r\\n  Voice memo (150 min)\\r\\n  User profiles\",\"Card slot\":\"MMC, 16 MB included\",\"Phonebook\":\"500, 14 fields each\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"7\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"up to 350 h\",\"Talk time\":\"up to 7 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:16',
            'updated_at'=>'2021-09-07 08:14:16'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>256,
            'url_hash'=>'9f130aad64fa955f5a816b2a6249ef24',
            'phone_brand_id'=>7,
            'name'=>'Siemens SL45i',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sisl45i.gif',
            'released_at'=>'Released 2001',
            'body'=>'88g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'MMC slot',
            'display_size'=>'1.5\"',
            'display_resolution'=>'101x80 pixels, 7 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 46 x 17 mm, 69 cc (4.13 x 1.81 x 0.67 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 540 mAh battery\",\"Size\":\"1.5 inches, 24 x 29 mm, 7.1 cm2 (~14.6% screen-to-body ratio)\",\"Resolution\":\"101 x 80 pixels, 7 lines (~86 ppi density)\",\" \":\"MP3 player\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Stopwatch\\r\\n  Reminder list\\r\\n  Voice dial\\r\\n  Voice memo (300 min)\\r\\n  User profiles\",\"Card slot\":\"MMC, 32 MB included\",\"Phonebook\":\"500, 14 fields each\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Downloadable Java games\",\"Languages\":\"20\",\"Java\":\"Yes\",\"Stand-by\":\"up to 350 h\",\"Talk time\":\"up to 7 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:18',
            'updated_at'=>'2021-09-07 08:14:18'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>257,
            'url_hash'=>'6cc3714d897471e39c64437235d74a9a',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T65',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert65.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'94g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines, 101x67 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'540 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Yes\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 49 x 21 mm (4.13 x 1.93 x 0.83 in)\",\"Weight\":\"94 g (3.32 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"6 lines, 101 x 67 pixels\",\" \":\"SMS chat\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Profiles\",\"Card slot\":\"No\",\"Phonebook\":\"300 x 11 fields\",\"Call records\":\"30 received, dialed and missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email, EMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"160 h - 300 h\",\"Talk time\":\"2.5 h - 11 h\",\"Colors\":\"3 - Cosmic Blue, Stardust Yellow, Polar Blue\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:21',
            'updated_at'=>'2021-09-07 08:14:21'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>258,
            'url_hash'=>'7f68520200e60dfd543b2544c9b04e86',
            'phone_brand_id'=>6,
            'name'=>'Motorola Talkabout T191',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mot191.gif',
            'released_at'=>'Released 2001',
            'body'=>'80g, 15mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'98x64 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"106 x 40 x 15 mm, 66 cc (4.17 x 1.57 x 0.59 in)\",\"Weight\":\"80 g (2.82 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"98 x 64 pixels, 5 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  Voice note\\r\\n  Voice activation\\r\\n  Organizer\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Languages\":\"16 + 11\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"3 h\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:23',
            'updated_at'=>'2021-09-07 08:14:23'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>259,
            'url_hash'=>'74818c9b8049c1b83d7e6774e3fcc81b',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD35',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd35.gif',
            'released_at'=>'Released 2001',
            'body'=>'109g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 46 x 20 mm (4.72 x 1.81 x 0.79 in)\",\"Weight\":\"109 g (3.84 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  On\\/off timers\\r\\n  Alert Profiling\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"1 -\",\"Java\":\"No\",\"Stand-by\":\"up to 175 h\",\"Talk time\":\"2 h - 4 h\",\"Colors\":\"3 - Winter White, Black Ice, Cool Blue\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:26',
            'updated_at'=>'2021-09-07 08:14:26'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>260,
            'url_hash'=>'3d0679b9df0bcf3c4a1ad514abb3d648',
            'phone_brand_id'=>9,
            'name'=>'Panasonic GD75',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/pagd75.gif',
            'released_at'=>'Released 2001',
            'body'=>'82g, 16mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Yes (GD76 Only)\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"106 x 46 x 16 mm, 75 cc (4.17 x 1.81 x 0.63 in)\",\"Weight\":\"82 g (2.89 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"6 lines\",\" \":\"Organizer\\r\\n  Predictive text input\\r\\n  Voice dial\\r\\n  Dictaphone\\r\\n  On\\/off timers\\r\\n  CallerID graphics\",\"Card slot\":\"No\",\"Phonebook\":\"200\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable polyphonic, monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"up to 150 h\",\"Talk time\":\"up to 6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:28',
            'updated_at'=>'2021-09-07 08:14:28'
        ] );


        DB::table('phone_models')->insert( [
            'id'=>261,
            'url_hash'=>'7ed5b9f1ca3750e48b226fe50c69d1cb',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD J6',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soj6.gif',
            'released_at'=>'Released 2001',
            'body'=>'82g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x92 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"123 x 43 x 20 mm (4.84 x 1.69 x 0.79 in)\",\"Weight\":\"82 g (2.89 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 92 pixels, 6 lines, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Recordable sounds for calls and events\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML (MS)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Bannanas, PicPuz, MindBlaster, SandArt\",\"Java\":\"No\",\"Stand-by\":\"120 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:30',
            'updated_at'=>'2021-09-07 08:14:30'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>262,
            'url_hash'=>'76bdab3803b1920eb036d5d403dde371',
            'phone_brand_id'=>14,
            'name'=>'Sagem MW 3042',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samw3042.gif',
            'released_at'=>'Released 2001',
            'body'=>'97g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 45 x 18 mm, 79 cc (4.13 x 1.77 x 0.71 in)\",\"Weight\":\"97 g (3.42 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"up to 8 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\\r\\n  Interchangeable front covers\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"207 h\",\"Talk time\":\"3 h 45 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:33',
            'updated_at'=>'2021-09-07 08:14:33'
        ] );





        DB::table('phone_models')->insert( [
            'id'=>263,
            'url_hash'=>'f5794348f9c3538532d46cf89f03cff3',
            'phone_brand_id'=>14,
            'name'=>'Sagem MW 3052',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samw3052.gif',
            'released_at'=>'Released 2001',
            'body'=>'100g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 50 x 23 mm (4.13 x 1.97 x 0.91 in)\",\"Weight\":\"100 g (3.53 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"up to 8 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:35',
            'updated_at'=>'2021-09-07 08:14:35'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>264,
            'url_hash'=>'baecc0245e2941ab3d090ea91d90cea4',
            'phone_brand_id'=>14,
            'name'=>'Sagem MW 3026',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/samw3026.gif',
            'released_at'=>'Released 2001',
            'body'=>'112g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'up to 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 50 x 23 mm (4.13 x 1.97 x 0.91 in)\",\"Weight\":\"112 g (3.95 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"up to 8 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Curency converter\",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"185 h\",\"Talk time\":\"3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:37',
            'updated_at'=>'2021-09-07 08:14:37'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>265,
            'url_hash'=>'930eaffe83f7cb6c58e03db75cbdce4e',
            'phone_brand_id'=>18,
            'name'=>'Sendo P200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sep200.gif',
            'released_at'=>'Released 2001, Q3',
            'body'=>'98g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q3\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 50 x 22 mm, 89 cc (4.13 x 1.97 x 0.87 in)\",\"Weight\":\"98 g (3.46 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 6 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  User changeable front housing, back housing and keypad\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - FlippIT, Quaddro, Scizzors, Splash\",\"Java\":\"No\",\"Stand-by\":\"170 h - 360 h\",\"Talk time\":\"2.5 h - 3.5 h\",\"Colors\":\"3 - Midnight Blue, Ink Blue, Forest Green\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:40',
            'updated_at'=>'2021-09-07 08:14:40'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>266,
            'url_hash'=>'99914373b45e3ea3e76f16cb730abbf4',
            'phone_brand_id'=>18,
            'name'=>'Sendo J520',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sej520.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'75g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"113 x 50 x 25 mm, 79 cc (4.45 x 1.97 x 0.98 in)\",\"Weight\":\"75 g (2.65 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 6 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  User changeable front housing, back housing and keypad\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - FlippIT, Quaddro, Scizzors, Splash\",\"Java\":\"No\",\"Stand-by\":\"up to 300 h\",\"Talk time\":\"up to 3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:42',
            'updated_at'=>'2021-09-07 08:14:42'
        ] );





        DB::table('phone_models')->insert( [
            'id'=>267,
            'url_hash'=>'ea7e109e7e4d04713797c8e13d0f200c',
            'phone_brand_id'=>4,
            'name'=>'Samsung A400',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssa400.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'80g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x 96 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"70 x 48 x 20 mm (2.76 x 1.89 x 0.79 in)\",\"Weight\":\"80 g (2.82 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x  96 pixels, 6 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\",\"Card slot\":\"No\",\"Phonebook\":\"100 entries, 5 contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"70 h\",\"Talk time\":\"2.5 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:44',
            'updated_at'=>'2021-09-07 08:14:44'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>268,
            'url_hash'=>'61ca9280a75ac84876709959e1571ade',
            'phone_brand_id'=>4,
            'name'=>'Samsung N400',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssn400.gif',
            'released_at'=>'Released 2001',
            'body'=>'91g, 18mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x128 pixels, 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 45 x 18 mm (4.41 x 1.77 x 0.71 in)\",\"Weight\":\"91 g (3.21 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 128 pixels, 8 lines, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Built-in type ear microphone\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"11\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"6 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:47',
            'updated_at'=>'2021-09-07 08:14:47'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>269,
            'url_hash'=>'05e41365056747484b61a297fb5bc35b',
            'phone_brand_id'=>7,
            'name'=>'Siemens C45',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sic45.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'107g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x64 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"109 x 46 x 23 mm, 82 cc (4.29 x 1.81 x 0.91 in)\",\"Weight\":\"107 g (3.77 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"101 x 64 pixels, 5 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Exchangeable Clip-it covers\\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"50\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Stack Attack, Balloon Shooter, BattleMail\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"up to 200 h\",\"Talk time\":\"up to 5 h\",\"Colors\":\"2 - Oriental Blue and African Grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:49',
            'updated_at'=>'2021-09-07 08:14:49'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>270,
            'url_hash'=>'85de97f56d2c948a4630502636debc51',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD J7',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soj7.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'92g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x92 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"113 x 44 x 21 mm (4.45 x 1.73 x 0.83 in)\",\"Weight\":\"92 g (3.25 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 92 pixels, 6 lines, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Recordable sounds for calls and events\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Downloadable polyphonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML (MS)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"3 h 20 min - 6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:51',
            'updated_at'=>'2021-09-07 08:14:51'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>271,
            'url_hash'=>'4cc661d5b4ac1a06691fb6c64c71b578',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD J70',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soj70.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'92g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x92 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"113 x 44 x 21 mm (4.45 x 1.73 x 0.83 in)\",\"Weight\":\"92 g (3.25 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"96 x 92 pixels, 6 lines, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Recordable sounds for calls and events\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Downloadable polyphonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML (MS)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"200 h\",\"Talk time\":\"3 h 20 min - 6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:54',
            'updated_at'=>'2021-09-07 08:14:54'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>272,
            'url_hash'=>'bebad7917fd8a7b24f0942a4024a4480',
            'phone_brand_id'=>10,
            'name'=>'Sony CMD Z7',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/soz7.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'95g, 25mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x92 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Po',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"91 x 50 x 25 mm, 90 cc (3.58 x 1.97 x 0.98 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Po battery\",\"Size\":\"\",\"Resolution\":\"96 x 92 pixels, 6 lines, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice Memo\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Downloadable polyphonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, HTML (MS)\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"135 h - 240 h\",\"Talk time\":\"3 h - 5 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:56',
            'updated_at'=>'2021-09-07 08:14:56'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>273,
            'url_hash'=>'2b484e69f924c4e6bcf3c74341b9e0d6',
            'phone_brand_id'=>8,
            'name'=>'Ericsson T66',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ert66.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'59g, 17.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"92 x 41 x 17.5 mm (3.62 x 1.61 x 0.69 in)\",\"Weight\":\"59 g (2.08 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH battery\",\"Size\":\"\",\"Resolution\":\"5 lines\",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 received, dialed and missed calls\",\" \":\"SMS chat\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Profiles\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"2 h - 5 h\",\"Colors\":\"2 - Purple Passion, Silver Supreme\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:14:58',
            'updated_at'=>'2021-09-07 08:14:58'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>274,
            'url_hash'=>'8d1116a52e5071cd05ad6c82d3a1449f',
            'phone_brand_id'=>8,
            'name'=>'Ericsson R600',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/err600.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'82g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Yes\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 45 x 20 mm (4.13 x 1.77 x 0.79 in)\",\"Weight\":\"82 g (2.89 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion (BST-20)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"SMS chat\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Profiles\",\"Card slot\":\"No\",\"Phonebook\":\"200\",\"Call records\":\"10 received, dialed and missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 - Erix, Catcher, Pathy and Ripple\",\"Java\":\"No\",\"Stand-by\":\"90 h - 150 h\",\"Talk time\":\"2 h - 4 h\",\"Colors\":\"2 - Ice Blue, Luminous Champagne\",\"SAR EU\":\"0.89 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:01',
            'updated_at'=>'2021-09-07 08:15:01'
        ] );





        DB::table('phone_models')->insert( [
            'id'=>275,
            'url_hash'=>'e07b6109979e60dfdf6531f19a6ed276',
            'phone_brand_id'=>1,
            'name'=>'Nokia 5510',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no5510.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'155g, 28mm thickness',
            'os'=>'Feature phone',
            'storage'=>'64MB storage, no card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'950 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 58 x 28 mm, 165 cc (5.28 x 2.28 x 1.10 in)\",\"Weight\":\"155 g (5.47 oz)\",\"Keyboard\":\"QWERTY\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 950 mAh battery (BLC-2)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"MP3 player and recorder\\r\\n  Smart messaging\\r\\n  Calculator\\r\\n  Voice Dial\\r\\n  Mobile chat\\r\\n  Profiles\\r\\n  Currency converter\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"8 dialed, 8 received, 8 missed calls\",\"Internal\":\"64MB\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"Stereo FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"5 ( Snake II, Pairs II, Space Impact, Bantumi, Bumper )\",\"Languages\":\"23\",\"Java\":\"No\",\"Stand-by\":\"55 h - 260 h\",\"Talk time\":\"2 h 30 min - 4 h 30\",\"Colors\":\"2 - Groove Red and Melody Blue\",\"SAR EU\":\"0.74 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:03',
            'updated_at'=>'2021-09-07 08:15:03'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>276,
            'url_hash'=>'567b68ee936bbcd64d30e3934328c141',
            'phone_brand_id'=>2,
            'name'=>'alcatel OT 311',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/alot311.gif',
            'released_at'=>'Released 2001',
            'body'=>'99g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x65 pixels, 6 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"103 x 44 x 24 mm, 87 cc (4.06 x 1.73 x 0.94 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 700 mAh battery\",\"Size\":\"\",\"Resolution\":\"96 x 65 pixels, 6 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  Euro currency converter and calculator\\r\\n  Changeable front panels\",\"Card slot\":\"No\",\"Phonebook\":\"250  x 3 numbers\",\"Call records\":\"30 received, dialed and missed calls\",\"Loudspeaker \":\"Yes\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - on some versions\",\"Java\":\"No\",\"Stand-by\":\"up to 300 h\",\"Talk time\":\"up to 5 h\",\"Colors\":\"4\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:05',
            'updated_at'=>'2021-09-07 08:15:05'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>277,
            'url_hash'=>'eeb7bc57f00281955abbc7425d703c85',
            'phone_brand_id'=>1,
            'name'=>'Nokia 5210',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no5210.gif',
            'released_at'=>'Released 2002, Q1',
            'body'=>'92g, 22.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002, Q1\",\"Status\":\"Discontinued\",\"Dimensions\":\"105.5 x 47.5 x 22.5 mm, 83 cc (4.15 x 1.87 x 0.89 in)\",\"Weight\":\"92 g (3.25 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 750 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Downloadable game packs via WAP\\r\\n  Predictive text input\\r\\n  Smart messaging\\r\\n  Organizer\\r\\n  Voice Dial\\r\\n  Mobile Chat mode for SMS\\r\\n  Profiles\\r\\n  Improved Durability\\r\\n  Picture messaging(10 predefined + 1 empty)\\r\\n  Photo editor\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"Thermometer\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"5 ( Snake II, Pairs II, Space Impact, Bantumi, Bumper )\",\"Languages\":\"17 for menu, 11 for T9\",\"Java\":\"No\",\"Stand-by\":\"Up to 170 h\",\"Talk time\":\"Up to 3 h 50 min\",\"Colors\":\"Burned Orange, four Xpress-on shells as accessories\",\"SAR EU\":\"0.62 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:08',
            'updated_at'=>'2021-09-07 08:15:08'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>278,
            'url_hash'=>'c3c5341879d9c162c15a9769b820a672',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6510',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6510.gif',
            'released_at'=>'Released 2002, Q1',
            'body'=>'84g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x60 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2002, Q1\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 43 x 20 mm, 67 cc (3.82 x 1.69 x 0.79 in)\",\"Weight\":\"84 g (2.96 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 750 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"96 x 60 pixels, 5 lines, 16:10 ratio\",\" \":\"Electronic wallet\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Profile Selection\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 Games (Snake II, Pairs II, Space Impact, Bumper)\",\"Languages\":\"Major European and Asian languages\",\"Java\":\"No\",\"Stand-by\":\"up to 12 days\",\"Talk time\":\"up to 3 h 30 min\",\"Colors\":\"Beige, four Xpress-on front-back covers as accessories\",\"SAR EU\":\"0.81 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:10',
            'updated_at'=>'2021-09-07 08:15:10'
        ] );

        DB::table('phone_models')->insert( [
            'id'=>279,
            'url_hash'=>'1ad35e66345b128179b8adf71b40aef4',
            'phone_brand_id'=>1,
            'name'=>'Nokia 7650',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no7650.gif',
            'released_at'=>'Released 2002, Q1',
            'body'=>'154g, 26mm thickness',
            'os'=>'Symbian 6.1, Series 60 v1.0 UI',
            'storage'=>'4MB storage, no card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x60 pixels, 5 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2002, Q1\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 43 x 20 mm, 67 cc (3.82 x 1.69 x 0.79 in)\",\"Weight\":\"84 g (2.96 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 750 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"96 x 60 pixels, 5 lines, 16:10 ratio\",\" \":\"Electronic wallet\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Voice dial\\r\\n  Voice command\\r\\n  Profile Selection\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 Games (Snake II, Pairs II, Space Impact, Bumper)\",\"Languages\":\"Major European and Asian languages\",\"Java\":\"No\",\"Stand-by\":\"up to 12 days\",\"Talk time\":\"up to 3 h 30 min\",\"Colors\":\"Beige, four Xpress-on front-back covers as accessories\",\"SAR EU\":\"0.81 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:10',
            'updated_at'=>'2021-09-07 08:15:10'
        ] );


        DB::table('phone_models')->insert( [
            'id'=>280,
            'url_hash'=>'d1e485686803fa9711c1ea6f5e9ff023',
            'phone_brand_id'=>4,
            'name'=>'Samsung R200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssr200.gif',
            'released_at'=>'Released 2001',
            'body'=>'99g, 23.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 23.5 mm (4.33 x 1.81 x 0.93 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 18:9 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Casino , Mole, Hexa\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"5 h\",\"Colors\":\"3 - Navy Blue, Green, Dark Gray\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:15',
            'updated_at'=>'2021-09-07 08:15:15'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>281,
            'url_hash'=>'f570a4972cfdaba8c49c543a0f522de6',
            'phone_brand_id'=>4,
            'name'=>'Samsung R210',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssr210.gif',
            'released_at'=>'Released 2001',
            'body'=>'99g, 23.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 23.5 mm (4.33 x 1.81 x 0.93 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 18:9 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Casino , Mole, Hexa\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"5 h\",\"Colors\":\"3 - Navy Blue, Green, Dark Gray\",\"SAR EU\":\"1.49 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:17',
            'updated_at'=>'2021-09-07 08:15:17'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>282,
            'url_hash'=>'ea127c72ebe70d20afa90c8c217d044c',
            'phone_brand_id'=>4,
            'name'=>'Samsung R220',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssr220.gif',
            'released_at'=>'Released 2001',
            'body'=>'99g, 23.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"110 x 46 x 23.5 mm (4.33 x 1.81 x 0.93 in)\",\"Weight\":\"99 g (3.49 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 18:9 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Casino , Mole, Hexa\",\"Java\":\"No\",\"Stand-by\":\"150 h\",\"Talk time\":\"5 h\",\"Colors\":\"3 - Navy Blue, Green, Dark Gray\",\"SAR EU\":\"1.49 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:20',
            'updated_at'=>'2021-09-07 08:15:20'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>283,
            'url_hash'=>'924aa4bcf50dc0c86c5b65447c8c71b7',
            'phone_brand_id'=>4,
            'name'=>'Samsung N105',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssn105.gif',
            'released_at'=>'Released 2001',
            'body'=>'83g with slim battery, 17.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'124x64 pixels, 5 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"105 x 42 x 17.5 mm (4.13 x 1.65 x 0.69 in)\",\"Weight\":\"83 g with slim battery (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"124 x 64 pixels, 5 lines\",\" \":\"Voice dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Built-in type ear microphone\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"11\",\"Java\":\"No\",\"Stand-by\":\"up to 120 h\",\"Talk time\":\"up to 250 min\",\"Colors\":\"Champagne\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:22',
            'updated_at'=>'2021-09-07 08:15:22'
        ] );



        DB::table('phone_models')->insert( [
            'id'=>284,
            'url_hash'=>'764629b0729cefb4650d135edbb53f74',
            'phone_brand_id'=>4,
            'name'=>'Samsung Q105',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssq105.gif',
            'released_at'=>'Released 2001',
            'body'=>'85g, 18.5mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x128 pixels, 6 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'900 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"112 x 42 x 18.5 mm (4.41 x 1.65 x 0.73 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 900 mAh battery\",\"Size\":\"\",\"Resolution\":\"128 x 128 pixels, 6 lines, 1:1 ratio\",\" \":\"Predictive text input\\r\\n  PC synchronisation\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Built-in Ear Microphone\",\"Card slot\":\"No\",\"Phonebook\":\"100\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"WAP Interactive game\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"2 h\",\"Colors\":\"Blue, Dark Gray, Green, Wine Red\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:24',
            'updated_at'=>'2021-09-07 08:15:24'
        ] );
        Phonemodel::create( [
            'id'=>285,
            'url_hash'=>'b62c87b597b112bed7ae692fc5c6d618',
            'phone_brand_id'=>1,
            'name'=>'Nokia 3350',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no3350.gif',
            'released_at'=>'Released 2001',
            'body'=>'108g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x65 pixels, 5 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1000 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"113 x 49 x 23 mm, 98 cc (4.45 x 1.93 x 0.91 in)\",\"Weight\":\"108 g (3.81 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1000 mAh battery (BLC-2)\",\"Size\":\"\",\"Resolution\":\"96 x 65 pixels, 5 lines, 3:2 ratio\",\" \":\"Downloadable game packs via WAP\\r\\n  Predictive text input\\r\\n  Smart messaging\\r\\n  Calculator\\r\\n  Voice Dial\\r\\n  Mobile Chat mode for SMS\\r\\n  Profiles\\r\\n  Currency converter\\r\\n  Photo editor\",\"Card slot\":\"No\",\"Phonebook\":\"150\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"6 - Bumper, Dance 2 Music, Link5, Magic Draw, Snake II, Space Impact\",\"Java\":\"No\",\"Stand-by\":\"Up to 260 h\",\"Talk time\":\"Up to 4 h 45 min\",\"Colors\":\"User exchangeable front and back covers\",\"SAR EU\":\"0.52 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:27',
            'updated_at'=>'2021-09-07 08:15:27'
        ] );



        Phonemodel::create( [
            'id'=>286,
            'url_hash'=>'474c657047cfb9251bb0575e271278c8',
            'phone_brand_id'=>1,
            'name'=>'Nokia 6500',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no6500.gif',
            'released_at'=>'Released 2002, Q1',
            'body'=>'88g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x60 pixels, 5 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2002, Q1\",\"Status\":\"Discontinued\",\"Dimensions\":\"97 x 43 x 21 mm, 75 cc (3.82 x 1.69 x 0.83 in)\",\"Weight\":\"88 g (3.10 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 750 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"96 x 60 pixels, 5 lines, 16:10 ratio\",\" \":\"Electronic wallet\\r\\n  Predictive text input\\r\\n  Organizer\\r\\n  Voice record\\r\\n  Voice command\\r\\n  Profile Selection\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"FM radio\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 Games (Snake II, Pairs II, Space Impact, Bumper)\",\"Java\":\"No\",\"Stand-by\":\"100 h - 350 h\",\"Talk time\":\"2 h 15 min - 4 h\",\"Colors\":\"Beige, four Xpress-on front-back covers as accessories\",\"SAR\":\"1.28 W\\/kg (head)     0.94 W\\/kg (body)     \",\"SAR EU\":\"0.92 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:29',
            'updated_at'=>'2021-09-07 08:15:29'
        ] );



        Phonemodel::create( [
            'id'=>287,
            'url_hash'=>'f9b1a7e379939e11c16b64249a51a702',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8855',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8855.gif',
            'released_at'=>'Released 2002, Q1',
            'body'=>'98g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'5 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1000 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002, Q1\",\"Status\":\"Discontinued\",\"Dimensions\":\"102 x 46 x 21 mm, 85 cc (4.02 x 1.81 x 0.83 in)\",\"Weight\":\"98 g (3.46 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1000 mAh battery (BLB-3)\",\"Size\":\"\",\"Resolution\":\"5 lines\",\" \":\"Picture messaging\\r\\n  Predictive text input\\r\\n  Smart Messaging\\r\\n  Organizer\\r\\n  Infrared transfer of names and phone numbers\\r\\n  Analog clock\\r\\n  Full display Profile Logos\",\"Card slot\":\"No\",\"Phonebook\":\"250\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"75 h \\u2013 225 h\",\"Talk time\":\"3h 20min - 4h 15min\",\"Colors\":\"Black\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:31',
            'updated_at'=>'2021-09-07 08:15:31'
        ] );



        Phonemodel::create( [
            'id'=>288,
            'url_hash'=>'be598f08e6cc8fce0b5851782a904787',
            'phone_brand_id'=>6,
            'name'=>'Motorola Talkabout T192',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mot192.gif',
            'released_at'=>'Released 2001',
            'body'=>'117g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'98x64 pixels, 5 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"120 x 46 x 23 mm, 93 cc (4.72 x 1.81 x 0.91 in)\",\"Weight\":\"117 g (4.13 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"98 x 64 pixels, 5 lines, 3:2 ratio\",\" \":\"Predictive text input\\r\\n  Voice note\\r\\n  Voice activation\\r\\n  Calculator\\r\\n  Interchangeable Bezel\\/Lens\\r\\n  \",\"Card slot\":\"No\",\"Phonebook\":\"\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"Up to 180 h\",\"Talk time\":\"Up to 300 min\",\"Colors\":\"3 - Silver Mist, Magic Green, Graphite Grey\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:34',
            'updated_at'=>'2021-09-07 08:15:34'
        ] );



        Phonemodel::create( [
            'id'=>289,
            'url_hash'=>'b00f89bf98977da83304ae51fa693261',
            'phone_brand_id'=>6,
            'name'=>'Motorola V60',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/mov60.gif',
            'released_at'=>'Released 2001, Q4',
            'body'=>'109g, 24mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'96x64 pixels',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'700 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2001, Q4\",\"Status\":\"Discontinued\",\"Dimensions\":\"87 x 45 x 24 mm, 73 cc (3.43 x 1.77 x 0.94 in)\",\"Weight\":\"109 g (3.84 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 700 mAh battery Removable Li-Ion (SNN5704)\",\"Size\":\"\",\"Resolution\":\"96 x 64 pixels, 3:2 ratio\",\" \":\"Predictive text input (iTAP)\\r\\n  Organizer\\r\\n  Voice memo\\r\\n  Voice dial\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10  received + missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"On some versions\",\"Java\":\"No\",\"Stand-by\":\"Up to 130 h\",\"Talk time\":\"Up to 3 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:36',
            'updated_at'=>'2021-09-07 08:15:36'
        ] );



        Phonemodel::create( [
            'id'=>290,
            'url_hash'=>'2226eef0db733a3dcd63aca6383b4179',
            'phone_brand_id'=>7,
            'name'=>'Siemens A40',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sia40.gif',
            'released_at'=>'Released 2001',
            'body'=>'122g, 27mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'2x16 chars',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'600 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"118 x 46 x 27 mm, 106 cc (4.65 x 1.81 x 1.06 in)\",\"Weight\":\"122 g (4.30 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMH 600 mAh battery\",\"Size\":\"\",\"Resolution\":\"2 x 16 chars\",\" \":\"Exchangeable covers\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 0 received, 5 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"No\",\"Games\":\"No\",\"Languages\":\"20\",\"Java\":\"No\",\"Stand-by\":\"60 h - 150 h\",\"Talk time\":\"90 min - 240 min\",\"Colors\":\"7 - Royal Blue, Anthracite, Raspberry Red...\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:38',
            'updated_at'=>'2021-09-07 08:15:38'
        ] );



        Phonemodel::create( [
            'id'=>291,
            'url_hash'=>'fc3a5c672d31a93a83cda57420223955',
            'phone_brand_id'=>7,
            'name'=>'Siemens SX45',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/six45.gif',
            'released_at'=>'Released 2001',
            'body'=>'330g, 26mm thickness',
            'os'=>'Microsoft Windows CE 3.0 for PocketPC',
            'storage'=>'32MB storage, no card slot',
            'display_size'=>' ',
            'display_resolution'=>'240x320 pixels',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2001\",\"Status\":\"Discontinued\",\"Dimensions\":\"134 x 87 x 26 mm, 309 cc (5.28 x 3.43 x 1.02 in)\",\"Weight\":\"330 g (11.64 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 1550 mAh battery\",\"Size\":\"\",\"Resolution\":\"240 x 320 pixels, 4:3 ratio\",\" \":\"Full PocketPC functionality\\r\\n  Media player (MP3)\",\"OS\":\"Microsoft Windows CE 3.0 for PocketPC\",\"CPU\":\"64-bit NEC VR4122 150 MHz\",\"Card slot\":\"No\",\"Internal\":\"32MB\",\"Loudspeaker \":\"No\",\"Alert types\":\"Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Browser\":\"WAP 1.2, HTML\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Stand-by\":\"Up to 150 h\",\"Talk time\":\"Up to 2 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:41',
            'updated_at'=>'2021-09-07 08:15:41'
        ] );



        Phonemodel::create( [
            'id'=>292,
            'url_hash'=>'2d36702309a0ed83d3913a77b10f10d0',
            'phone_brand_id'=>13,
            'name'=>'NEC DB7000',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/nedb7000.gif',
            'released_at'=>'Released 2002',
            'body'=>'120g, 24.7mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'120x160 pixels',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"102 x 52 x 24.7 mm (4.02 x 2.05 x 0.97 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"120 x 160 pixels, 4:3 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice memo \\r\\n  Profiles\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"165 h\",\"Talk time\":\"3 h\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:43',
            'updated_at'=>'2021-09-07 08:15:43'
        ] );



        Phonemodel::create( [
            'id'=>293,
            'url_hash'=>'55d5e719a089b31b38032d801bdbc7cb',
            'phone_brand_id'=>13,
            'name'=>'NEC N21i',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/nen21i.gif',
            'released_at'=>'Released 2002',
            'body'=>'120g, 24.7mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'120x160 pixels, 10 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'1550 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"102 x 52 x 24.7 mm (4.02 x 2.05 x 0.97 in)\",\"Weight\":\"120 g (4.23 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"120 x 160 pixels, 10 lines, 4:3 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice memo\\/dial\\r\\n  Profiles\\r\\n  Scratchpad\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable polyphonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP, iMode\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"2 - Thief, Rolling Band\",\"Java\":\"No\",\"Stand-by\":\"165 h\",\"Talk time\":\"3 h\",\"Colors\":\"Silver\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:46',
            'updated_at'=>'2021-09-07 08:15:46'
        ] );



        Phonemodel::create( [
            'id'=>294,
            'url_hash'=>'86a50a7b88ef3bd52601ee0843edec17',
            'phone_brand_id'=>12,
            'name'=>'Philips Fisio 120',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ph120.gif',
            'released_at'=>'Released 2002',
            'body'=>'95g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"106 x 49 x 22 mm, 79 cc (4.17 x 1.93 x 0.87 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMh 750 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Euro converter\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"350 h\",\"Talk time\":\"4 h\",\"Colors\":\"3 - Storm Black, Whale blue, Opal white\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:48',
            'updated_at'=>'2021-09-07 08:15:48'
        ] );



        Phonemodel::create( [
            'id'=>295,
            'url_hash'=>'f5c3a436eddaecc203adc06d98ee9280',
            'phone_brand_id'=>12,
            'name'=>'Philips Fisio 121',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ph121.gif',
            'released_at'=>'Released 2002',
            'body'=>'95g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'750 mAh ',
            'battery_type'=>'NiMH',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"106 x 49 x 22 mm, 79 cc (4.17 x 1.93 x 0.87 in)\",\"Weight\":\"95 g (3.35 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable NiMh 750 mAh battery\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"Predictive text input\\r\\n  Calculator\\r\\n  Euro converter\\r\\n  Snap-in front cover\",\"Card slot\":\"No\",\"Phonebook\":\"SIM only\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"350 h\",\"Talk time\":\"4 h\",\"Colors\":\"3 - Storm Black, Whale blue, Opal white\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:50',
            'updated_at'=>'2021-09-07 08:15:50'
        ] );



        Phonemodel::create( [
            'id'=>296,
            'url_hash'=>'e75dc1fc612513999bd06ecce94973e5',
            'phone_brand_id'=>12,
            'name'=>'Philips Fisio 620',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ph620.gif',
            'released_at'=>'Released 2002',
            'body'=>'85g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'101x80 pixels, 8 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 10\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"104 x 46 x 20 mm, 73 cc (4.09 x 1.81 x 0.79 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"101 x 80 pixels, 8 lines\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Snap-in front cover\",\"Card slot\":\"No\",\"Phonebook\":\"300\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"330 h\",\"Talk time\":\"5 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:53',
            'updated_at'=>'2021-09-07 08:15:53'
        ] );



        Phonemodel::create( [
            'id'=>297,
            'url_hash'=>'e8923a627deb815d14892f26499ba962',
            'phone_brand_id'=>12,
            'name'=>'Philips Fisio 820',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ph820.gif',
            'released_at'=>'Released 2002',
            'body'=>'85g, 21mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'120x130 pixels, 9 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>' ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 10\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"98 x 47 x 21 mm (3.86 x 1.85 x 0.83 in)\",\"Weight\":\"85 g (3.00 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"120 x 130 pixels, 9 lines\",\"Card slot\":\"No\",\"Phonebook\":\"500 entries, Photo call\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\" \":\"Predictive text input\\r\\n  Voice dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Snap-in front cover\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"Yes\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, Email\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"No\",\"Java\":\"No\",\"Stand-by\":\"400 h\",\"Talk time\":\"5 h\",\"Colors\":\"3\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:55',
            'updated_at'=>'2021-09-07 08:15:55'
        ] );



        Phonemodel::create( [
            'id'=>298,
            'url_hash'=>'f0b84bd2409644951f299c18a02a0bcc',
            'phone_brand_id'=>4,
            'name'=>'Samsung Q200',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssq200.gif',
            'released_at'=>'Released 2002',
            'body'=>'90g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x128 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'650 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"85 x 48 x 20 mm (3.35 x 1.89 x 0.79 in)\",\"Weight\":\"90 g (3.17 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 650 mAh battery\",\"Size\":\"\",\"Resolution\":\"128 x 128 pixels, 1:1 ratio\",\" \":\"Voice commands and dial\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100 entries, contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:15:58',
            'updated_at'=>'2021-09-07 08:15:58'
        ] );



        Phonemodel::create( [
            'id'=>299,
            'url_hash'=>'e1ce811d3ef84eb3819ecdabea213207',
            'phone_brand_id'=>4,
            'name'=>'Samsung T100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sst100.gif',
            'released_at'=>'Released 2002',
            'body'=>'94g, 22mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x160 pixels, 12 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'720 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"88 x 50 x 22 mm (3.46 x 1.97 x 0.87 in)\",\"Weight\":\"94 g (3.32 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 720 mAh battery\",\"Size\":\"\",\"Resolution\":\"128 x 160 pixels, 12 lines\",\" \":\"Predictive text input\\r\\n  Voice commands and dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Nokia compatible melodies\",\"Card slot\":\"No\",\"Phonebook\":\"500 entries, contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable polyphonic, monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3\",\"Java\":\"No\",\"Stand-by\":\"60 h\",\"Talk time\":\"80 min\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:00',
            'updated_at'=>'2021-09-07 08:16:00'
        ] );



        Phonemodel::create( [
            'id'=>300,
            'url_hash'=>'04e458d901c2c8526d7c2aaa90aaa890',
            'phone_brand_id'=>4,
            'name'=>'Samsung N620',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssn620.gif',
            'released_at'=>'Released 2002',
            'body'=>'83g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x64 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"100 x 43 x 20 mm (3.94 x 1.69 x 0.79 in)\",\"Weight\":\"83 g (2.93 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"128 x 64 pixels, 18:9 ratio\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  Picture Messaging\",\"Card slot\":\"No\",\"Phonebook\":\"500\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable polyphonic, monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"3 - Ice cave, Fortress, Squares\",\"Java\":\"No\",\"Stand-by\":\"Up to 90 h\",\"Talk time\":\"Up to 2 h 20 min\",\"Colors\":\"4 - White pearl, Black, Sky blue, Silver\",\"SAR EU\":\"0.88 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:02',
            'updated_at'=>'2021-09-07 08:16:02'
        ] );



        Phonemodel::create( [
            'id'=>301,
            'url_hash'=>'9a38f90953671e077c05d6598cd22f7b',
            'phone_brand_id'=>1,
            'name'=>'Nokia 8910',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/no8910.gif',
            'released_at'=>'Released 2002, Q2',
            'body'=>'110g, 20mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'4 lines',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 4\",\"EDGE\":\"No\",\"Announced\":\"2002, Q2\",\"Status\":\"Discontinued\",\"Dimensions\":\"103 x 46 x 20 mm, 83 cc (4.06 x 1.81 x 0.79 in)\",\"Weight\":\"110 g (3.88 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 830 mAh battery (BLB-2)\",\"Size\":\"\",\"Resolution\":\"4 lines\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Voice record\\r\\n  Voice command\\r\\n  Mobile Chat\\r\\n  Titanium casing\\r\\n  Downloadable game levels\\r\\n  Profile Selection\",\"Card slot\":\"No\",\"Phonebook\":\"500 names x3 numbers\",\"Call records\":\"20 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable monophonic ringtones\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"1.1\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"4 Games (Snowboarding, Snake II, Bantumi, Pairs II)\",\"Languages\":\"Major European and Asian languages\",\"Java\":\"No\",\"Stand-by\":\"100 - 300 h\",\"Talk time\":\"2 - 4 h\",\"Colors\":\"2 - Natural Titanium and Black\",\"SAR EU\":\"0.52 W\\/kg (head)     \"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:05',
            'updated_at'=>'2021-09-07 08:16:05'
        ] );



        Phonemodel::create( [
            'id'=>302,
            'url_hash'=>'5caad4161d1e9fcbcd9b46e60de6b7ab',
            'phone_brand_id'=>4,
            'name'=>'Samsung A500',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssa500.gif',
            'released_at'=>'Released 2002',
            'body'=>'75g, 17mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x 128 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'830 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"No\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"80 x 39 x 17 mm (3.15 x 1.54 x 0.67 in)\",\"Weight\":\"75 g (2.65 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x  128 pixels\",\" \":\"Predictive text input\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\",\"Card slot\":\"No\",\"Phonebook\":\"100 entries, 5 contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Monophonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Stand-by\":\"80 h\",\"Talk time\":\"2 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:08',
            'updated_at'=>'2021-09-07 08:16:08'
        ] );



        Phonemodel::create( [
            'id'=>303,
            'url_hash'=>'8a7ce1c151205c106740075e91dc9a19',
            'phone_brand_id'=>4,
            'name'=>'Samsung Q300',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssq300.gif',
            'released_at'=>'Released 2002',
            'body'=>'89g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'16 lines, 128x128 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"85 x 48 x 23 mm (3.35 x 1.89 x 0.91 in)\",\"Weight\":\"89 g (3.14 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion 800 mAh battery\",\"Size\":\"\",\"Resolution\":\"16 lines, 128 x 128 pixels\",\" \":\"Voice commands and dial\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\",\"Card slot\":\"No\",\"Phonebook\":\"100 entries, contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Polyphonic(16) ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.2\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:10',
            'updated_at'=>'2021-09-07 08:16:10'
        ] );



        Phonemodel::create( [
            'id'=>304,
            'url_hash'=>'1919a611889a10ec684e4a70087360bb',
            'phone_brand_id'=>4,
            'name'=>'Samsung S100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/sss100.gif',
            'released_at'=>'Released 2002',
            'body'=>'92g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'128x160 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"89 x 47 x 23 mm, 94 cc (3.50 x 1.85 x 0.91 in)\",\"Weight\":\"92 g (3.25 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"128 x 160 pixels\",\" \":\"Predictive text input\\r\\n  Voice commands and dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Nokia compatible melodies\",\"Card slot\":\"No\",\"Phonebook\":\"500 entries, contact groups\",\"Call records\":\"20 dialed, 20 received, 20 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Downloadable polyphonic ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"Yes\",\"Stand-by\":\"180 h\",\"Talk time\":\"6 h\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:12',
            'updated_at'=>'2021-09-07 08:16:12'
        ] );



        Phonemodel::create( [
            'id'=>305,
            'url_hash'=>'d45bef8131827d53edd01dfcdaf86c48',
            'phone_brand_id'=>4,
            'name'=>'Samsung V100',
            'picture'=>'https://fdn2.gsmarena.com/vv/bigpic/ssv100.gif',
            'released_at'=>'Released 2002',
            'body'=>'97g, 23mm thickness',
            'os'=>'Feature phone',
            'storage'=>'No card slot',
            'display_size'=>' ',
            'display_resolution'=>'176x220 pixels',
            'camera_pixels'=>'NO         ',
            'video_pixels'=>'No video recorder',
            'ram'=>'  ',
            'chipset'=>'',
            'battery_size'=>'800 mAh ',
            'battery_type'=>'Li-Ion',
            'specifications'=>'{\"Technology\":\"GSM\",\"2G bands\":\"GSM 900 \\/ 1800 \\/ 1900 \",\"GPRS\":\"Class 8\",\"EDGE\":\"No\",\"Announced\":\"2002\",\"Status\":\"Discontinued\",\"Dimensions\":\"88 x 48 x 23 mm (3.46 x 1.89 x 0.91 in)\",\"Weight\":\"97 g (3.42 oz)\",\"SIM\":\"Mini-SIM\",\"Type\":\"Removable Li-Ion battery\",\"Size\":\"\",\"Resolution\":\"176 x 220 pixels\",\" \":\"Video On Demand (VOD)\\r\\n  MP4 and MP3 decoders\\r\\n  Predictive text input\\r\\n  Voice commands and dial\\r\\n  Voice memo\\r\\n  Organizer\\r\\n  Speed dial\\r\\n  Menu shortcuts\\r\\n  World clock\\r\\n  Nokia compatible melodies\\r\\n  RS232\",\"Card slot\":\"No\",\"Phonebook\":\"500 entries, contact groups\",\"Call records\":\"10 dialed, 10 received, 10 missed calls\",\"Loudspeaker \":\"No\",\"Alert types\":\"Vibration; Polyphonic(16) ringtones, composer\",\"3.5mm jack \":\"No\",\"WLAN\":\"No\",\"Bluetooth\":\"No\",\"GPS\":\"No\",\"Infrared port\":\"Yes\",\"Radio\":\"No\",\"USB\":\"\",\"Sensors\":\"\",\"Messaging\":\"SMS, EMS\",\"Browser\":\"WAP 1.2.1\",\"Clock\":\"Yes\",\"Alarm\":\"Yes\",\"Games\":\"Yes\",\"Java\":\"No\",\"Colors\":\"\"}',
            'deleted_at'=>NULL,
            'created_at'=>'2021-09-07 08:16:15',
            'updated_at'=>'2021-09-07 08:16:15'
        ] );




    }
}
