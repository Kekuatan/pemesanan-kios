<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\PriceList;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class History20221210 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $historys = [
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600524",
                "tu_no" => "A.L00.BSB.100",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 10  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "CASHANDCHEQUE47396175426052693"
            ],
            [
                "siho_name" => " DEDE  RAMLAN  WH ",
                "briva" => "115110211600287",
                "tu_no" => "A.L00.GSB.138",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 10  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234404425627340002"
            ],
            [
                "siho_name" => " DEDE  RAMLAN  WH ",
                "briva" => "115110211600288",
                "tu_no" => "A.L00.GSB.139",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 10  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234404425627340001"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600523",
                "tu_no" => "A.L00.BSB.099",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE13097880111128752"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600522",
                "tu_no" => "A.L00.BSB.098",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE145224045270913322"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600521",
                "tu_no" => "A.L00.BSB.097",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE106573404206679149"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600520",
                "tu_no" => "A.L00.BSB.096",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE129223509261777698"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600519",
                "tu_no" => "A.L00.BSB.095",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE180592826748932212"
            ],
            [
                "siho_name" => " DENDY  KURNIAWAN ",
                "briva" => "115110211602219",
                "tu_no" => "A.L00.ASB.186",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE130031269342041743"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600518",
                "tu_no" => "A.L00.DSB.082",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE107074583826060793"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600517",
                "tu_no" => "A.L00.DSB.081",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE130860736487935309"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600516",
                "tu_no" => "A.L00.DSB.080",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "CASHANDCHEQUE24411986278585502"
            ],
            [
                "siho_name" => " H.  ABDULLAH  TAQWIN ",
                "briva" => "115110211600515",
                "tu_no" => "A.L00.DSB.079",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE143754247583322965"
            ],
            [
                "siho_name" => "ABROZI",
                "briva" => "115110211600031",
                "tu_no" => "A.L00.DSB.111",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE197961316549746004"
            ],
            [
                "siho_name" => "ABROZI",
                "briva" => "115110211600030",
                "tu_no" => "A.L00.DSB.110",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE141712028261167611"
            ],
            [
                "siho_name" => " MAD  SOLHAN ",
                "briva" => "115110211601300",
                "tu_no" => "A.L00.FSB.298",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234304425617060003"
            ],
            [
                "siho_name" => " MAD  SOLHAN ",
                "briva" => "115110211601301",
                "tu_no" => "A.L00.FSB.299",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234304425617360003"
            ],
            [
                "siho_name" => "SALMAN",
                "briva" => "115110211601757",
                "tu_no" => "A.L00.ESB.290",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234304425617020002"
            ],
            [
                "siho_name" => "SALMAN",
                "briva" => "115110211601756",
                "tu_no" => "A.L00.ESB.289",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234304425617060002"
            ],
            [
                "siho_name" => "SALMAN",
                "briva" => "115110211601755",
                "tu_no" => "A.L00.ESB.288",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234304425617400001"
            ],
            [
                "siho_name" => "NURHAYATI",
                "briva" => "115110211601523",
                "tu_no" => "A.L00.CSB.157",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1439354049"
            ],
            [
                "siho_name" => "NURHAYATI",
                "briva" => "115110211601524",
                "tu_no" => "A.L00.CSB.158",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1439351542"
            ],
            [
                "siho_name" => "NURHAYATI",
                "briva" => "115110211601525",
                "tu_no" => "A.L00.CSB.159",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 14452200,
                "transaction_id" => "BRIVA-1439346436"
            ],
            [
                "siho_name" => " SETIO  MULYO ",
                "briva" => "115110211601805",
                "tu_no" => "A.L00.FSB.294",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234304425617420003"
            ],
            [
                "siho_name" => " SETIO  MULYO ",
                "briva" => "115110211601804",
                "tu_no" => "A.L00.FSB.293",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234304425617420002"
            ],
            [
                "siho_name" => " TUTI  RAHAYU ",
                "briva" => "115110211601858",
                "tu_no" => "A.L00.ESB.089",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 14163156,
                "transaction_id" => "CASHANDCHEQUE105263715738611252"
            ],
            [
                "siho_name" => " FATKUL  MAJID ",
                "briva" => "115110211600451",
                "tu_no" => "A.L00.ESB.276",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1439098176"
            ],
            [
                "siho_name" => " MUHAMAD  SHOKIB ",
                "briva" => "115110211601403",
                "tu_no" => "A.L00.ESB.277",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234304425617360002"
            ],
            [
                "siho_name" => " ABDUL  ROCHIM ",
                "briva" => "115110211600017",
                "tu_no" => "A.L00.HSB.188",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1439052363"
            ],
            [
                "siho_name" => "ROSMANTO",
                "briva" => "115110211601708",
                "tu_no" => "A.L00.ASB.083",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234304425617020001"
            ],
            [
                "siho_name" => "ROSMANTO",
                "briva" => "115110211601707",
                "tu_no" => "A.L00.ASB.082",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234304425617420001"
            ],
            [
                "siho_name" => "SUMIATI",
                "briva" => "115110211602217",
                "tu_no" => "A.L00.GSB.162",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2234304425627060001"
            ],
            [
                "siho_name" => "SUMIATI",
                "briva" => "115110211601942",
                "tu_no" => "A.L00.GSB.251",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234304425627020002"
            ],
            [
                "siho_name" => "CACA",
                "briva" => "115110211600250",
                "tu_no" => "A.L00.ESB.281",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE178285072531092930"
            ],
            [
                "siho_name" => "CACA",
                "briva" => "115110211600249",
                "tu_no" => "A.L00.ESB.280",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE12479108150177524"
            ],
            [
                "siho_name" => "CACA",
                "briva" => "115110211600248",
                "tu_no" => "A.L00.ESB.279",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 09  Dec  2022 ",
                "amount" => 41188700,
                "transaction_id" => "CASHANDCHEQUE144523648657809089"
            ],
            [
                "siho_name" => " RAFLI  FEBRIYANTO ",
                "briva" => "115110211601625",
                "tu_no" => "A.L00.ESB.099",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "CASHANDCHEQUE2399315838345454"
            ],
            [
                "siho_name" => "SADENI",
                "briva" => "115110211602213",
                "tu_no" => "A.L00.GSB.035",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 15000000,
                "transaction_id" => "BRIVA-2234204425617000008"
            ],
            [
                "siho_name" => "MURWANINGSIH",
                "briva" => "115110211601446",
                "tu_no" => "A.L00.CSB.169",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 42489468,
                "transaction_id" => "BRIVA-2234288882150063186"
            ],
            [
                "siho_name" => " EDI  SUDRAJAT ",
                "briva" => "115110211600383",
                "tu_no" => "A.L00.DSB.100",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1437523571"
            ],
            [
                "siho_name" => " EDI  SUDRAJAT ",
                "briva" => "115110211600382",
                "tu_no" => "A.L00.DSB.099",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27001557,
                "transaction_id" => "BRIVA-1437520198"
            ],
            [
                "siho_name" => "BARIANTO",
                "briva" => "115110211600225",
                "tu_no" => "A.L00.BSB.018",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "BRIVA-2234204425617280005"
            ],
            [
                "siho_name" => "BARIANTO",
                "briva" => "115110211600224",
                "tu_no" => "A.L00.BSB.017",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 42874860,
                "transaction_id" => "BRIVA-2234204425617020006"
            ],
            [
                "siho_name" => "BARIANTO",
                "briva" => "115110211600223",
                "tu_no" => "A.L00.BSB.016",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617280004"
            ],
            [
                "siho_name" => " SUTIK  SURYANI ",
                "briva" => "115110211601993",
                "tu_no" => "A.L00.ASB.227",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28422660,
                "transaction_id" => "BRIVA-2234204425617260007"
            ],
            [
                "siho_name" => " SUTIK  SURYANI ",
                "briva" => "115110211601994",
                "tu_no" => "A.L00.ASB.228",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617320006"
            ],
            [
                "siho_name" => " SUTIK  SURYANI ",
                "briva" => "115110211601995",
                "tu_no" => "A.L00.BSB.022",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617060005"
            ],
            [
                "siho_name" => "RISWANDI",
                "briva" => "115110211601679",
                "tu_no" => "A.L00.BSB.019",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "BRIVA-2234204425617000007"
            ],
            [
                "siho_name" => " H.  AULIA  HENDRI ",
                "briva" => "115110211600585",
                "tu_no" => "A.L00.ASB.172",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617320005"
            ],
            [
                "siho_name" => " H.  AULIA  HENDRI ",
                "briva" => "115110211600584",
                "tu_no" => "A.L00.ASB.171",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617300009"
            ],
            [
                "siho_name" => " NY.  HJ.  KARTI  MARNI ",
                "briva" => "115110211601546",
                "tu_no" => "A.L00.ASB.170",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617040007"
            ],
            [
                "siho_name" => " NY.  HJ.  KARTI  MARNI ",
                "briva" => "115110211601545",
                "tu_no" => "A.L00.ASB.169",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234204425617260006"
            ],
            [
                "siho_name" => " SHOHIBUL  WASIB ",
                "briva" => "115110211601808",
                "tu_no" => "A.L00.DSB.186",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE169174679903365598"
            ],
            [
                "siho_name" => " ANIK  PUJI  ASTUTI ",
                "briva" => "115110211600139",
                "tu_no" => "A.L00.DSB.185",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "CASHANDCHEQUE85334704274799636"
            ],
            [
                "siho_name" => " ANIK  PUJI  ASTUTI ",
                "briva" => "115110211600138",
                "tu_no" => "A.L00.DSB.184",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE6310800736581037"
            ],
            [
                "siho_name" => " SHOHIBUL  WASIB ",
                "briva" => "115110211601809",
                "tu_no" => "A.L00.DSB.187",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE83533084815274935"
            ],
            [
                "siho_name" => " SHOHIBUL  WASIB ",
                "briva" => "115110211601810",
                "tu_no" => "A.L00.DSB.188",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE45216298951981638"
            ],
            [
                "siho_name" => " SHOHIBUL  WASIB ",
                "briva" => "115110211601811",
                "tu_no" => "A.L00.DSB.189",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE75851318107273945"
            ],
            [
                "siho_name" => " SHOHIBUL  WASIB ",
                "briva" => "115110211601812",
                "tu_no" => "A.L00.DSB.202",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE158074943495642880"
            ],
            [
                "siho_name" => " SHOHIBUL  WASIB ",
                "briva" => "115110211601813",
                "tu_no" => "A.L00.DSB.203",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE174982001743923320"
            ],
            [
                "siho_name" => " RINA  NOVIYANTI ",
                "briva" => "115110211601655",
                "tu_no" => "A.L00.BSB.123",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE77584396573984701"
            ],
            [
                "siho_name" => " RINA  NOVIYANTI ",
                "briva" => "115110211601654",
                "tu_no" => "A.L00.BSB.122",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE131620166074599209"
            ],
            [
                "siho_name" => " MUHAMMAD  ANIQ ",
                "briva" => "115110211601415",
                "tu_no" => "A.L00.DSB.262",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234204425617040006"
            ],
            [
                "siho_name" => " MUHAMMAD  ANIQ ",
                "briva" => "115110211601414",
                "tu_no" => "A.L00.DSB.261",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234204425617320003"
            ],
            [
                "siho_name" => " MUHAMMAD  FAIS  JAUHARI ",
                "briva" => "115110211601419",
                "tu_no" => "A.L00.DSB.277",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE115327149097417510"
            ],
            [
                "siho_name" => " MUHAMMAD  FAIS  JAUHARI ",
                "briva" => "115110211601418",
                "tu_no" => "A.L00.DSB.276",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE146160727122836086"
            ],
            [
                "siho_name" => " MUHAMMAD  FAIS  JAUHARI ",
                "briva" => "115110211601417",
                "tu_no" => "A.L00.DSB.275",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE192284498327903276"
            ],
            [
                "siho_name" => " RINA  NOVIYANTI ",
                "briva" => "115110211601659",
                "tu_no" => "A.L00.BSB.217",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "CASHANDCHEQUE13665265805179578"
            ],
            [
                "siho_name" => "RAMBAT",
                "briva" => "115110211601633",
                "tu_no" => "A.L00.ASB.222",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234204425617300006"
            ],
            [
                "siho_name" => "RAMBAT",
                "briva" => "115110211601634",
                "tu_no" => "A.L00.ASB.223",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617060004"
            ],
            [
                "siho_name" => " RINA  NOVIYANTI ",
                "briva" => "115110211601658",
                "tu_no" => "A.L00.BSB.216",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE20710436577749919"
            ],
            [
                "siho_name" => " RINA  NOVIYANTI ",
                "briva" => "115110211601657",
                "tu_no" => "A.L00.BSB.215",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE64406910159143529"
            ],
            [
                "siho_name" => " ALI  IMRON ",
                "briva" => "115110211600104",
                "tu_no" => "A.L00.DSB.180",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234204425617260004"
            ],
            [
                "siho_name" => " ALI  IMRON ",
                "briva" => "115110211600103",
                "tu_no" => "A.L00.DSB.179",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617300005"
            ],
            [
                "siho_name" => "ERNINGSIH",
                "briva" => "115110211601076",
                "tu_no" => "A.L00.DSB.156",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617280003"
            ],
            [
                "siho_name" => "ERNINGSIH",
                "briva" => "115110211601077",
                "tu_no" => "A.L00.DSB.157",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617040005"
            ],
            [
                "siho_name" => " SARIP  HIDAYATULLAH ",
                "briva" => "115110211601770",
                "tu_no" => "A.L00.ESB.091",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425627040006"
            ],
            [
                "siho_name" => " SARIP  HIDAYATULLAH ",
                "briva" => "115110211601771",
                "tu_no" => "A.L00.ESB.092",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425627000003"
            ],
            [
                "siho_name" => " SARIP  HIDAYATULLAH ",
                "briva" => "115110211601772",
                "tu_no" => "A.L00.GSB.231",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234204425627020002"
            ],
            [
                "siho_name" => " ASTRIA  NINGSIH ",
                "briva" => "115110211600208",
                "tu_no" => "A.L00.GSB.232",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425627040005"
            ],
            [
                "siho_name" => " H.  SHONHAJI ",
                "briva" => "115110211600780",
                "tu_no" => "A.L00.BSB.197",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1437291888"
            ],
            [
                "siho_name" => " H.  SHONHAJI ",
                "briva" => "115110211600781",
                "tu_no" => "A.L00.BSB.198",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1437285225"
            ],
            [
                "siho_name" => " RINA  NOVIYANTI ",
                "briva" => "115110211601656",
                "tu_no" => "A.L00.BSB.214",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234288882599240446"
            ],
            [
                "siho_name" => " HJ.  YANTI  WINARTO ",
                "briva" => "115110211601049",
                "tu_no" => "A.L00.HSB.217",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-1437233491"
            ],
            [
                "siho_name" => " H.  ASEP  MUKTI  SUHARTO ",
                "briva" => "115110211600578",
                "tu_no" => "A.L00.HSB.218",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-1437233295"
            ],
            [
                "siho_name" => "SARPIN",
                "briva" => "115110211600773",
                "tu_no" => "A.L00.BSB.093",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2234204425617020003"
            ],
            [
                "siho_name" => "PARNOTO",
                "briva" => "115110211601575",
                "tu_no" => "A.L00.BSB.094",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617000003"
            ],
            [
                "siho_name" => " H.  KADARISMAN ",
                "briva" => "115110211600644",
                "tu_no" => "A.L00.ASB.017",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 26151600,
                "transaction_id" => "BRIVA-2234204425617300004"
            ],
            [
                "siho_name" => " H.  KADARISMAN ",
                "briva" => "115110211600643",
                "tu_no" => "A.L00.ASB.016",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234204425617320002"
            ],
            [
                "siho_name" => " H.  KADARISMAN ",
                "briva" => "115110211600645",
                "tu_no" => "A.L00.ASB.018",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 21738518,
                "transaction_id" => "BRIVA-2234204425617000002"
            ],
            [
                "siho_name" => " SRI  WAHYUNINGSIH ",
                "briva" => "115110211601868",
                "tu_no" => "A.L00.ASB.019",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617020002"
            ],
            [
                "siho_name" => " H.  KADARISMAN ",
                "briva" => "115110211600646",
                "tu_no" => "A.L00.ASB.038",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617020001"
            ],
            [
                "siho_name" => " H.  KADARISMAN ",
                "briva" => "115110211600647",
                "tu_no" => "A.L00.ASB.039",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234204425617320001"
            ],
            [
                "siho_name" => "ZAINUDIN",
                "briva" => "115110211602194",
                "tu_no" => "A.L00.FSB.171",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-1437174483"
            ],
            [
                "siho_name" => " H.  KADARISMAN ",
                "briva" => "115110211600642",
                "tu_no" => "A.L00.ASB.015",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 40731117,
                "transaction_id" => "BRIVA-2234204425617040004"
            ],
            [
                "siho_name" => " YULIA  YASMI ",
                "briva" => "115110211602179",
                "tu_no" => "A.L00.HSB.051",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "CASHANDCHEQUE168665663046884548"
            ],
            [
                "siho_name" => " YULIA  YASMI ",
                "briva" => "115110211602178",
                "tu_no" => "A.L00.HSB.021",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "CASHANDCHEQUE39357381086267593"
            ],
            [
                "siho_name" => "ZAINUDIN",
                "briva" => "115110211602193",
                "tu_no" => "A.L00.ESB.050",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-1437170357"
            ],
            [
                "siho_name" => " YULIA  YASMI ",
                "briva" => "115110211602177",
                "tu_no" => "A.L00.HSB.020",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "CASHANDCHEQUE114148952588603515"
            ],
            [
                "siho_name" => " H.  NAWAWI ",
                "briva" => "115110211600719",
                "tu_no" => "A.L00.FSB.093",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234204425627260003"
            ],
            [
                "siho_name" => " ARIF  PURWADI ",
                "briva" => "115110211600163",
                "tu_no" => "A.L00.CSB.106",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 1000000,
                "transaction_id" => "CASHANDCHEQUE38771961831224980"
            ],
            [
                "siho_name" => " SITI  SOPIYAH ",
                "briva" => "115110211601837",
                "tu_no" => "A.L00.DSB.046",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "BRIVA-2234204425627000001"
            ],
            [
                "siho_name" => " SITI  SOPIYAH ",
                "briva" => "115110211601836",
                "tu_no" => "A.L00.DSB.045",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "BRIVA-2234204425627320001"
            ],
            [
                "siho_name" => " HANU  PRAMONO ",
                "briva" => "115110211600907",
                "tu_no" => "A.L00.CSB.108",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE100227991745393804"
            ],
            [
                "siho_name" => " HANU  PRAMONO ",
                "briva" => "115110211600906",
                "tu_no" => "A.L00.CSB.107",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE159077594050412095"
            ],
            [
                "siho_name" => " ARIF  PURWADI ",
                "briva" => "115110211600163",
                "tu_no" => "A.L00.CSB.106",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "CASHANDCHEQUE3298662549973086"
            ],
            [
                "siho_name" => " H.  YAYA  TARYA ",
                "briva" => "115110211600878",
                "tu_no" => "A.L00.ESB.094",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234204425617260002"
            ],
            [
                "siho_name" => " H.  YAYA  TARYA ",
                "briva" => "115110211600879",
                "tu_no" => "A.L00.ESB.095",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234204425617300003"
            ],
            [
                "siho_name" => " ARIF  PURWADI ",
                "briva" => "115110211600162",
                "tu_no" => "A.L00.CSB.105",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE110761391694760881"
            ],
            [
                "siho_name" => " PUPU  PUZIANA ",
                "briva" => "115110211601602",
                "tu_no" => "A.L00.ESB.100",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234204425617040003"
            ],
            [
                "siho_name" => " PUPU  PUZIANA ",
                "briva" => "115110211601603",
                "tu_no" => "A.L00.ESB.101",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234204425617040002"
            ],
            [
                "siho_name" => " GOGOT  DWI  SUSANTO ",
                "briva" => "115110211600471",
                "tu_no" => "A.L00.CSB.104",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE106159764572871298"
            ],
            [
                "siho_name" => " GOGOT  DWI  SUSANTO ",
                "briva" => "115110211600470",
                "tu_no" => "A.L00.CSB.103",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE88008124099796907"
            ],
            [
                "siho_name" => " DIDI  SANTOSO ",
                "briva" => "115110211600323",
                "tu_no" => "A.L00.CSB.102",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE51497977653870595"
            ],
            [
                "siho_name" => " DIDI  SANTOSO ",
                "briva" => "115110211600322",
                "tu_no" => "A.L00.CSB.101",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE88939272341134277"
            ],
            [
                "siho_name" => " DIDI  SANTOSO ",
                "briva" => "115110211600321",
                "tu_no" => "A.L00.CSB.100",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE5694897496901080"
            ],
            [
                "siho_name" => "SUMARNO",
                "briva" => "115110211601935",
                "tu_no" => "A.L00.FSB.308",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425627040002"
            ],
            [
                "siho_name" => " BUDI  RAHMAN ",
                "briva" => "115110211600237",
                "tu_no" => "A.L00.FSB.123",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234204425617000001"
            ],
            [
                "siho_name" => "SUMARNO",
                "briva" => "115110211601933",
                "tu_no" => "A.L00.FSB.306",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425627300001"
            ],
            [
                "siho_name" => " DRS.  BAMBANG  IRAWAN ",
                "briva" => "115110211600356",
                "tu_no" => "A.L00.ESB.021",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 91530600,
                "transaction_id" => "BRIVA-2234288884430001491"
            ],
            [
                "siho_name" => " U'UNG  SUTARI ",
                "briva" => "115110211602124",
                "tu_no" => "A.L00.BSB.063",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234204425617060002"
            ],
            [
                "siho_name" => " EDI  SURADI ",
                "briva" => "115110211600384",
                "tu_no" => "A.L00.GSB.219",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 08  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234288885988260335"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602063,
                "tu_no" => "A.L00.BSB.001",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 13729590,
                "transaction_id" => "CASHANDCHEQUE18953782052048208"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602068,
                "tu_no" => "A.L00.BSB.075",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 13729590,
                "transaction_id" => "CASHANDCHEQUE164880123442609650"
            ],
            [
                "siho_name" => " RIANTI  IRAWATI ",
                "briva" => "115110211601652",
                "tu_no" => "A.L00.BSB.077",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE83708792548450668"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602064,
                "tu_no" => "A.L00.BSB.002",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE18551225137409924"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602065,
                "tu_no" => "A.L00.BSB.003",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE12191996880842300"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602071,
                "tu_no" => "A.L00.BSB.079",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE70717752328102461"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602072,
                "tu_no" => "A.L00.BSB.080",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE143432580241560548"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602066,
                "tu_no" => "A.L00.BSB.004",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE84919590827293549"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602067,
                "tu_no" => "A.L00.BSB.005",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE114006092944141251"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602070,
                "tu_no" => "A.L00.BSB.078",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE184054354466473239"
            ],
            [
                "siho_name" => " TITUS  WAHYUDI  JP, SE",
                "briva" => 115110211602069,
                "tu_no" => "A.L00.BSB.076",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "CASHANDCHEQUE91809093860365871"
            ],
            [
                "siho_name" => " SAYID  ABDULLAH ",
                "briva" => "115110211601792",
                "tu_no" => "A.L00.ASB.209",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE38254815858745042"
            ],
            [
                "siho_name" => " SAYID  ABDULLAH ",
                "briva" => "115110211601791",
                "tu_no" => "A.L00.ASB.208",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE111417467311956263"
            ],
            [
                "siho_name" => " SAYID  ABDULLAH ",
                "briva" => "115110211601790",
                "tu_no" => "A.L00.ASB.207",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE98096268236709599"
            ],
            [
                "siho_name" => " SAYID  ABDULLAH ",
                "briva" => "115110211601789",
                "tu_no" => "A.L00.ASB.206",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "CASHANDCHEQUE94495167878099317"
            ],
            [
                "siho_name" => " HJ.  SAADAH ",
                "briva" => "115110211601021",
                "tu_no" => "A.L00.HSB.126",
                "note" => " ANGSURAN  3  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 19269600,
                "transaction_id" => "BRIVA-2234104425627420002"
            ],
            [
                "siho_name" => "HUFRON",
                "briva" => "115110211601066",
                "tu_no" => "A.L00.BSB.133",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617460006"
            ],
            [
                "siho_name" => "PUJIYANTO",
                "briva" => "115110211601599",
                "tu_no" => "A.L00.ESB.232",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617380005"
            ],
            [
                "siho_name" => "JAHENDAR",
                "briva" => "115110211601163",
                "tu_no" => "A.L00.FSB.026",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617460005"
            ],
            [
                "siho_name" => "JAHENDAR",
                "briva" => "115110211601162",
                "tu_no" => "A.L00.FSB.025",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440010"
            ],
            [
                "siho_name" => "ATMA",
                "briva" => "115110211600212",
                "tu_no" => "A.L00.FSB.017",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2234109313517400006"
            ],
            [
                "siho_name" => " MADE  ARYA  DHARMA  RADITYA ",
                "briva" => "115110211601303",
                "tu_no" => "A.L00.FSB.100",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617380004"
            ],
            [
                "siho_name" => " I  MADE  MARTIANA ",
                "briva" => "115110211601071",
                "tu_no" => "A.L00.ESB.033",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 40731117,
                "transaction_id" => "BRIVA-2234104425617420005"
            ],
            [
                "siho_name" => " I  MADE  MARTIANA ",
                "briva" => "115110211601070",
                "tu_no" => "A.L00.ESB.028",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440009"
            ],
            [
                "siho_name" => " I  MADE  MARTIANA ",
                "briva" => "115110211601069",
                "tu_no" => "A.L00.ESB.027",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617480007"
            ],
            [
                "siho_name" => " MADE  ARYA  DHARMA  RADITYA ",
                "briva" => "115110211601304",
                "tu_no" => "A.L00.FSB.101",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617420004"
            ],
            [
                "siho_name" => " LUH  PUTU  SINARIYATI ",
                "briva" => "115110211601279",
                "tu_no" => "A.L00.FSB.246",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617460004"
            ],
            [
                "siho_name" => " LUH  PUTU  WIDHIA  KRISTIANTI ",
                "briva" => "115110211601282",
                "tu_no" => "A.L00.FSB.237",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617420003"
            ],
            [
                "siho_name" => " LUH  PUTU  WIDHIA  KRISTIANTI ",
                "briva" => "115110211601281",
                "tu_no" => "A.L00.FSB.236",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2234104425617360008"
            ],
            [
                "siho_name" => " LUH  PUTU  WIDHIA  KRISTIANTI ",
                "briva" => "115110211601280",
                "tu_no" => "A.L00.FSB.235",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500012"
            ],
            [
                "siho_name" => " LUH  PUTU  SINARIYATI ",
                "briva" => "115110211601277",
                "tu_no" => "A.L00.FSB.145",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617460003"
            ],
            [
                "siho_name" => " LUH  PUTU  SINARIYATI ",
                "briva" => "115110211601278",
                "tu_no" => "A.L00.FSB.146",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500011"
            ],
            [
                "siho_name" => " MADE  ARYA  DHARMA  RADITYA ",
                "briva" => "115110211601302",
                "tu_no" => "A.L00.FSB.095",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440008"
            ],
            [
                "siho_name" => "SUBIYARNO",
                "briva" => "115110211601875",
                "tu_no" => "A.L00.GSB.168",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440007"
            ],
            [
                "siho_name" => "SUBIYARNO",
                "briva" => "115110211601876",
                "tu_no" => "A.L00.HSB.196",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500010"
            ],
            [
                "siho_name" => "SUBIYARNO",
                "briva" => "115110211601877",
                "tu_no" => "A.L00.HSB.221",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500009"
            ],
            [
                "siho_name" => "PUJIYANTO",
                "briva" => "115110211601601",
                "tu_no" => "A.L00.ESB.234",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617360007"
            ],
            [
                "siho_name" => "PUJIYANTO",
                "briva" => "115110211601600",
                "tu_no" => "A.L00.ESB.233",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617480006"
            ],
            [
                "siho_name" => " EKO  HARDIANSYAH ",
                "briva" => "115110211600407",
                "tu_no" => "A.L00.FSB.287",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440006"
            ],
            [
                "siho_name" => " EKO  HARDIANSYAH ",
                "briva" => "115110211600405",
                "tu_no" => "A.L00.FSB.076",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2234104425617460002"
            ],
            [
                "siho_name" => " EKO  HARDIANSYAH ",
                "briva" => "115110211600406",
                "tu_no" => "A.L00.FSB.286",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617380003"
            ],
            [
                "siho_name" => "NURJANAH",
                "briva" => "115110211601529",
                "tu_no" => "A.L00.GSB.239",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617360006"
            ],
            [
                "siho_name" => "NURJANAH",
                "briva" => "115110211601530",
                "tu_no" => "A.L00.GSB.240",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2234104425617500008"
            ],
            [
                "siho_name" => "NURJANAH",
                "briva" => "115110211601528",
                "tu_no" => "A.L00.GSB.053",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500007"
            ],
            [
                "siho_name" => " GEDE  AGUS  PUTRA  ATMAJA ",
                "briva" => "115110211600468",
                "tu_no" => "A.L00.ESB.070",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500006"
            ],
            [
                "siho_name" => " GEDE  AGUS  PUTRA  ATMAJA ",
                "briva" => "115110211600467",
                "tu_no" => "A.L00.ESB.069",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440005"
            ],
            [
                "siho_name" => " GEDE  AGUS  PUTRA  ATMAJA ",
                "briva" => "115110211600466",
                "tu_no" => "A.L00.ESB.007",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617480005"
            ],
            [
                "siho_name" => " HJ.  SAADAH ",
                "briva" => "115110211601021",
                "tu_no" => "A.L00.HSB.126",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234104425627480001"
            ],
            [
                "siho_name" => "DUROKIM",
                "briva" => "115110211600379",
                "tu_no" => "A.L00.GSB.216",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617360005"
            ],
            [
                "siho_name" => "DUROKIM",
                "briva" => "115110211600380",
                "tu_no" => "A.L00.GSB.217",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617360004"
            ],
            [
                "siho_name" => " MARGANDA  PURBA ",
                "briva" => "115110211601320",
                "tu_no" => "A.L00.FSB.096",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-1435687217"
            ],
            [
                "siho_name" => " NURMALA  L.  GAOL ",
                "briva" => "115110211601539",
                "tu_no" => "A.L00.GSB.115",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1435683948"
            ],
            [
                "siho_name" => " HANAFI.  H ",
                "briva" => "115110211600258",
                "tu_no" => "A.L00.BSB.132",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 40731117,
                "transaction_id" => "BRIVA-2234104425617500005"
            ],
            [
                "siho_name" => "JUANDA",
                "briva" => "115110211601194",
                "tu_no" => "A.L00.GSB.056",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9284735,
                "transaction_id" => "BRIVA-2234104425617420002"
            ],
            [
                "siho_name" => "JUANDA",
                "briva" => "115110211601191",
                "tu_no" => "A.L00.ESB.108",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9284735,
                "transaction_id" => "BRIVA-2234104425617420001"
            ],
            [
                "siho_name" => "JUANDA",
                "briva" => "115110211601193",
                "tu_no" => "A.L00.GSB.037",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 14230599,
                "transaction_id" => "BRIVA-2234104425617400002"
            ],
            [
                "siho_name" => " MIMANTO  ADI ",
                "briva" => "115110211601373",
                "tu_no" => "A.L00.DSB.265",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 2480,
                "transaction_id" => "BRIVA-2234188881820482781"
            ],
            [
                "siho_name" => " MIMANTO  ADI ",
                "briva" => "115110211601374",
                "tu_no" => "A.L00.DSB.266",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "CASHANDCHEQUE113531368224827768"
            ],
            [
                "siho_name" => " MIMANTO  ADI ",
                "briva" => "115110211601376",
                "tu_no" => "A.L00.DSB.268",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "CASHANDCHEQUE26598304617247136"
            ],
            [
                "siho_name" => " MIMANTO  ADI ",
                "briva" => "115110211601375",
                "tu_no" => "A.L00.DSB.267",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "CASHANDCHEQUE46072648567838811"
            ],
            [
                "siho_name" => " MIMANTO  ADI ",
                "briva" => "115110211601377",
                "tu_no" => "A.L00.DSB.269",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 411887700,
                "transaction_id" => "CASHANDCHEQUE74539124626742445"
            ],
            [
                "siho_name" => " MIMANTO  ADI ",
                "briva" => "115110211601373",
                "tu_no" => "A.L00.DSB.265",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 274589320,
                "transaction_id" => "CASHANDCHEQUE24580893327297700"
            ],
            [
                "siho_name" => "JUANDA",
                "briva" => "115110211601192",
                "tu_no" => "A.L00.ESB.113",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234104425617380002"
            ],
            [
                "siho_name" => "JUANDA",
                "briva" => "115110211601195",
                "tu_no" => "A.L00.GSB.249",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234104425617460001"
            ],
            [
                "siho_name" => " M.TOHIR  BIN  AMRAN ",
                "briva" => "115110211601295",
                "tu_no" => "A.L00.HSB.098",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "CASHANDCHEQUE118423461427023417"
            ],
            [
                "siho_name" => " H.  M.  TOHIR ",
                "briva" => "115110211600664",
                "tu_no" => "A.L00.HSB.026",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "CASHANDCHEQUE81320203328683533"
            ],
            [
                "siho_name" => "KHOLIFAH",
                "briva" => "115110211601224",
                "tu_no" => "A.L00.ESB.029",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 10000000,
                "transaction_id" => "CASHANDCHEQUE190131525622813763"
            ],
            [
                "siho_name" => " TAMINTA  SUNULINGGA ",
                "briva" => "115110211602028",
                "tu_no" => "A.L00.ASB.190",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE188293879141664963"
            ],
            [
                "siho_name" => " TAMINTA  SUNULINGGA ",
                "briva" => "115110211602030",
                "tu_no" => "A.L00.ASB.192",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE91086564071605952"
            ],
            [
                "siho_name" => " TAMINTA  SUNULINGGA ",
                "briva" => "115110211602029",
                "tu_no" => "A.L00.ASB.191",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE31627257928691896"
            ],
            [
                "siho_name" => " H  HABIBULLAH ",
                "briva" => "115110211602206",
                "tu_no" => "A.L00.GSB.172",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE148220758849324983"
            ],
            [
                "siho_name" => " H  HABIBULLAH ",
                "briva" => "115110211602207",
                "tu_no" => "A.L00.GSB.173",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE92321854991333856"
            ],
            [
                "siho_name" => " HOTLER  MANALU ",
                "briva" => "115110211601064",
                "tu_no" => "A.L00.GSB.030",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617500004"
            ],
            [
                "siho_name" => " H.  SUHANAN ",
                "briva" => "115110211600797",
                "tu_no" => "A.L00.ESB.251",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617380001"
            ],
            [
                "siho_name" => " H.  SUHANAN ",
                "briva" => "115110211600796",
                "tu_no" => "A.L00.ESB.250",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617480004"
            ],
            [
                "siho_name" => " A.  FARHAN ",
                "briva" => "115110211600480",
                "tu_no" => "A.L00.CSB.150",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "BRIVA-2234104425617440004"
            ],
            [
                "siho_name" => " A.  FARHAN ",
                "briva" => "115110211600482",
                "tu_no" => "A.L00.CSB.152",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234104425617360003"
            ],
            [
                "siho_name" => " H.  MUDHOFIR  AULIA ",
                "briva" => "115110211600707",
                "tu_no" => "A.L00.CSB.119",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440003"
            ],
            [
                "siho_name" => " H.  MUDHOFIR  AULIA ",
                "briva" => "115110211600706",
                "tu_no" => "A.L00.CSB.118",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500003"
            ],
            [
                "siho_name" => " H.  MUDHOFIR  AULIA ",
                "briva" => "115110211600705",
                "tu_no" => "A.L00.CSB.117",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617360002"
            ],
            [
                "siho_name" => " H.  MUDHOFIR  AULIA ",
                "briva" => "115110211600704",
                "tu_no" => "A.L00.CSB.116",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500002"
            ],
            [
                "siho_name" => " H.  MUDHOFIR  AULIA ",
                "briva" => "115110211600703",
                "tu_no" => "A.L00.CSB.115",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234104425617360001"
            ],
            [
                "siho_name" => "SUHARTANTA",
                "briva" => "115110211601907",
                "tu_no" => "A.L00.ESB.046",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234188883190481580"
            ],
            [
                "siho_name" => "WAHYUDIN",
                "briva" => "115110211602138",
                "tu_no" => "A.L00.FSB.203",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234188884600361563"
            ],
            [
                "siho_name" => "WAHYUDIN",
                "briva" => "115110211602139",
                "tu_no" => "A.L00.FSB.205",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234188882570441547"
            ],
            [
                "siho_name" => "WAHYUDIN",
                "briva" => "115110211602140",
                "tu_no" => "A.L00.FSB.206",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 42489468,
                "transaction_id" => "BRIVA-2234188883290441551"
            ],
            [
                "siho_name" => " IMRON  MASHADI  SKM ",
                "briva" => "115110211600610",
                "tu_no" => "A.L00.GSB.171",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617440002"
            ],
            [
                "siho_name" => " HJ.  SUBA'IDAH ",
                "briva" => "115110211601026",
                "tu_no" => "A.L00.GSB.221",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28662500,
                "transaction_id" => "CASHANDCHEQUE195518068146854158"
            ],
            [
                "siho_name" => " ALSUDIN  SIMAMORA ",
                "briva" => "115110211600114",
                "tu_no" => "A.L00.GSB.069",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1435286987"
            ],
            [
                "siho_name" => " HJ.  SUBA'IDAH ",
                "briva" => "115110211601025",
                "tu_no" => "A.L00.GSB.220",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 28662500,
                "transaction_id" => "CASHANDCHEQUE129109743706734073"
            ],
            [
                "siho_name" => " RITA  YULIATI ",
                "briva" => "115110211601681",
                "tu_no" => "A.L00.BSB.106",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE46711282774529386"
            ],
            [
                "siho_name" => " RITA  YULIATI ",
                "briva" => "115110211601680",
                "tu_no" => "A.L00.BSB.105",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE115831401447302330"
            ],
            [
                "siho_name" => " IMRON  MASHADI  SKM ",
                "briva" => "115110211600611",
                "tu_no" => "A.L00.GSB.172",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617480003"
            ],
            [
                "siho_name" => " IMRON  MASHADI  SKM ",
                "briva" => "115110211600612",
                "tu_no" => "A.L00.GSB.173",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234104425617500001"
            ],
            [
                "siho_name" => " H.  HARI  SUDARJA ",
                "briva" => "115110211600617",
                "tu_no" => "A.L00.BSB.061",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "CASHANDCHEQUE82212393340742017"
            ],
            [
                "siho_name" => " H.  HARI  SUDARJA ",
                "briva" => "115110211600616",
                "tu_no" => "A.L00.BSB.060",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "CASHANDCHEQUE126945852987394939"
            ],
            [
                "siho_name" => " H.  HARI  SUDARJA ",
                "briva" => "115110211600615",
                "tu_no" => "A.L00.BSB.059",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "CASHANDCHEQUE66013199707487743"
            ],
            [
                "siho_name" => " H.  HARI  SUDARJA ",
                "briva" => "115110211600614",
                "tu_no" => "A.L00.BSB.058",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "CASHANDCHEQUE67107547018197943"
            ],
            [
                "siho_name" => " DEDY  ARIFUDDIN, SE",
                "briva" => 115110211600291,
                "tu_no" => "A.L00.BSB.102",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE57725520198208679"
            ],
            [
                "siho_name" => " DEDY  ARIFUDDIN, SE",
                "briva" => 115110211600290,
                "tu_no" => "A.L00.BSB.101",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "CASHANDCHEQUE195561979301702613"
            ],
            [
                "siho_name" => "PASENO",
                "briva" => "115110211601580",
                "tu_no" => "A.L00.BSB.066",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234188880920421155"
            ],
            [
                "siho_name" => "PASENO",
                "briva" => "115110211601579",
                "tu_no" => "A.L00.BSB.065",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234188884840381075"
            ],
            [
                "siho_name" => "PASENO",
                "briva" => "115110211601578",
                "tu_no" => "A.L00.BSB.064",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 07  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234188884760441118"
            ],
            [
                "siho_name" => " H.  JAMALUDIN ",
                "briva" => "115110211600635",
                "tu_no" => "A.L00.DSB.075",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088882220445639"
            ],
            [
                "siho_name" => " H.  JAMALUDIN ",
                "briva" => "115110211600634",
                "tu_no" => "A.L00.DSB.074",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088882729321250"
            ],
            [
                "siho_name" => " H.  JAMALUDIN ",
                "briva" => "115110211600633",
                "tu_no" => "A.L00.DSB.073",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 18190297,
                "transaction_id" => "BRIVA-2234088885290385430"
            ],
            [
                "siho_name" => " YAYAN  WIJAYA ",
                "briva" => "115110211600880",
                "tu_no" => "A.L00.ESB.120",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617400008"
            ],
            [
                "siho_name" => " DODI  ARI  RACHMAN ",
                "briva" => "115110211602204",
                "tu_no" => "A.L00.ESB.123",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617440004"
            ],
            [
                "siho_name" => " YAYAN  WIJAYA ",
                "briva" => "115110211600881",
                "tu_no" => "A.L00.ESB.121",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617480010"
            ],
            [
                "siho_name" => " H.  SUNARSO ",
                "briva" => "115110211600823",
                "tu_no" => "A.L00.ASB.101",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1434015447"
            ],
            [
                "siho_name" => " H.  SUNARSO ",
                "briva" => "115110211600819",
                "tu_no" => "A.L00.ASB.012",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1433974809"
            ],
            [
                "siho_name" => " H.  SUNARSO ",
                "briva" => "115110211600822",
                "tu_no" => "A.L00.ASB.100",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1433971287"
            ],
            [
                "siho_name" => " YAYAN  WIJAYA ",
                "briva" => "115110211602161",
                "tu_no" => "A.L00.ESB.014",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 14163156,
                "transaction_id" => "BRIVA-2234004425617380007"
            ],
            [
                "siho_name" => " MOHAMMAD  YAHUD ",
                "briva" => "115110211601387",
                "tu_no" => "A.L00.ESB.090",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 224591800,
                "transaction_id" => "CASHANDCHEQUE51335778791066183"
            ],
            [
                "siho_name" => " DODI  ARI  RACHMAN ",
                "briva" => "115110211600333",
                "tu_no" => "A.L00.ESB.122",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617520008"
            ],
            [
                "siho_name" => " H.  SUNARSO ",
                "briva" => "115110211600821",
                "tu_no" => "A.L00.ASB.014",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1433949150"
            ],
            [
                "siho_name" => " H.  SUNARSO ",
                "briva" => "115110211600820",
                "tu_no" => "A.L00.ASB.013",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1433939263"
            ],
            [
                "siho_name" => " SUKATMA  JUMRI ",
                "briva" => "115110211601925",
                "tu_no" => "A.L00.HSB.059",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234004425617480009"
            ],
            [
                "siho_name" => " HJ.  TRIMURTI ",
                "briva" => "115110211601039",
                "tu_no" => "A.L00.CSB.029",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 13729590,
                "transaction_id" => "BRIVA-2234004425617380006"
            ],
            [
                "siho_name" => " HJ.  TRIMURTI ",
                "briva" => "115110211601040",
                "tu_no" => "A.L00.CSB.030",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "BRIVA-2234004425617400007"
            ],
            [
                "siho_name" => " HJ.  TRIMURTI ",
                "briva" => "115110211601043",
                "tu_no" => "A.L00.CSB.033",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "BRIVA-2234004425617480008"
            ],
            [
                "siho_name" => " HJ.  TRIMURTI ",
                "briva" => "115110211601042",
                "tu_no" => "A.L00.CSB.032",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "BRIVA-2234004425617440003"
            ],
            [
                "siho_name" => " HJ.  TRIMURTI ",
                "briva" => "115110211601041",
                "tu_no" => "A.L00.CSB.031",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9153060,
                "transaction_id" => "BRIVA-1433869254"
            ],
            [
                "siho_name" => " JUMBERES  PURBA ",
                "briva" => "115110211601196",
                "tu_no" => "A.L00.FSB.097",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-1433857258"
            ],
            [
                "siho_name" => " NURMALA  L.  GAOL ",
                "briva" => "115110211601541",
                "tu_no" => "A.L00.GSB.117",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-1433853785"
            ],
            [
                "siho_name" => " LAMTIO  PURBA ",
                "briva" => "115110211601251",
                "tu_no" => "A.L00.HSB.209",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433849465"
            ],
            [
                "siho_name" => " NURMALA  L.  GAOL ",
                "briva" => "115110211601538",
                "tu_no" => "A.L00.FSB.046",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433843910"
            ],
            [
                "siho_name" => " NURMALA  L.  GAOL ",
                "briva" => "115110211601537",
                "tu_no" => "A.L00.FSB.045",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433841200"
            ],
            [
                "siho_name" => " SAHAT  PURBA ",
                "briva" => "115110211601747",
                "tu_no" => "A.L00.GSB.120",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433838547"
            ],
            [
                "siho_name" => " SAHAT  PURBA ",
                "briva" => "115110211601746",
                "tu_no" => "A.L00.GSB.119",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433835786"
            ],
            [
                "siho_name" => " SAHAT  PURBA ",
                "briva" => "115110211601745",
                "tu_no" => "A.L00.GSB.118",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433832772"
            ],
            [
                "siho_name" => " MOHAMMAD  YAHUD ",
                "briva" => "115110211601387",
                "tu_no" => "A.L00.ESB.090",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 50000000,
                "transaction_id" => "BRIVA-1433822701"
            ],
            [
                "siho_name" => " SRI  WANTO ",
                "briva" => "115110211601870",
                "tu_no" => "A.L00.ASB.127",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE167298547972447698"
            ],
            [
                "siho_name" => " SRI  WANTO ",
                "briva" => "115110211601869",
                "tu_no" => "A.L00.ASB.126",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE105327585324966857"
            ],
            [
                "siho_name" => " NURMALA  L.  GAOL ",
                "briva" => "115110211601540",
                "tu_no" => "A.L00.GSB.116",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433795500"
            ],
            [
                "siho_name" => " ARTA  BANGUN ",
                "briva" => "115110211600180",
                "tu_no" => "A.L00.BSB.240",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE154792203004842736"
            ],
            [
                "siho_name" => " ARTA  BANGUN ",
                "briva" => "115110211600179",
                "tu_no" => "A.L00.BSB.239",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE166159837744863988"
            ],
            [
                "siho_name" => " ARTA  BANGUN ",
                "briva" => "115110211600178",
                "tu_no" => "A.L00.BSB.238",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "CASHANDCHEQUE45310281822164650"
            ],
            [
                "siho_name" => " AGUS  SUNARYO ",
                "briva" => "115110211600058",
                "tu_no" => "A.L00.FSB.031",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617400006"
            ],
            [
                "siho_name" => " NI  WISTRI  NOVIANDRI ",
                "briva" => "115110211601494",
                "tu_no" => "A.L00.ASB.026",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "BRIVA-2234004425617380005"
            ],
            [
                "siho_name" => " VONY  SETIANI  PRATIWI ",
                "briva" => "115110211602130",
                "tu_no" => "A.L00.HSB.101",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617520007"
            ],
            [
                "siho_name" => " VONY  SETIANI  PRATIWI ",
                "briva" => "115110211602131",
                "tu_no" => "A.L00.HSB.103",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617500003"
            ],
            [
                "siho_name" => "SETIATI",
                "briva" => "115110211601801",
                "tu_no" => "A.L00.HSB.197",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2234004425617420007"
            ],
            [
                "siho_name" => " H.  AJID ",
                "briva" => "115110211600557",
                "tu_no" => "A.L00.FSB.020",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433646698"
            ],
            [
                "siho_name" => " SRI  MURTINI ",
                "briva" => "115110211601864",
                "tu_no" => "A.L00.GSB.047",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433635365"
            ],
            [
                "siho_name" => " HEDRON  BUTAR  BUTAR ",
                "briva" => "115110211600926",
                "tu_no" => "A.L00.FSB.032",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617520006"
            ],
            [
                "siho_name" => " SRI  MURTINI ",
                "briva" => "115110211601865",
                "tu_no" => "A.L00.GSB.048",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433632696"
            ],
            [
                "siho_name" => "DIMAN",
                "briva" => "115110211600328",
                "tu_no" => "A.L00.GSB.020",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617480006"
            ],
            [
                "siho_name" => " LIBERT  ROSMERI ",
                "briva" => "115110211601267",
                "tu_no" => "A.L00.HSB.213",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425627480006"
            ],
            [
                "siho_name" => "DIMAN",
                "briva" => "115110211600327",
                "tu_no" => "A.L00.GSB.019",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2234004425617480005"
            ],
            [
                "siho_name" => " LIBERT  ROSMERI ",
                "briva" => "115110211601266",
                "tu_no" => "A.L00.GSB.004",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425627500001"
            ],
            [
                "siho_name" => " RUSLIN  PARDEDE ",
                "briva" => "115110211601730",
                "tu_no" => "A.L00.ESB.224",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 14291620,
                "transaction_id" => "BRIVA-1433613067"
            ],
            [
                "siho_name" => "WINOTO",
                "briva" => "115110211602152",
                "tu_no" => "A.L00.CSB.243",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 411887700,
                "transaction_id" => "BRIVA-1433597445"
            ],
            [
                "siho_name" => "SUKAHAR",
                "briva" => "115110211601913",
                "tu_no" => "A.L00.DSB.116",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234004425617520005"
            ],
            [
                "siho_name" => " H.  MOCH  TAUFIK  ALATAS ",
                "briva" => "115110211600695",
                "tu_no" => "A.L00.BSB.041",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "BRIVA-2234004425627380006"
            ],
            [
                "siho_name" => "WINOTO",
                "briva" => "115110211602148",
                "tu_no" => "A.L00.CSB.239",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433594991"
            ],
            [
                "siho_name" => "WINOTO",
                "briva" => "115110211602149",
                "tu_no" => "A.L00.CSB.240",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433592043"
            ],
            [
                "siho_name" => "SUKAHAR",
                "briva" => "115110211601914",
                "tu_no" => "A.L00.DSB.117",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617400005"
            ],
            [
                "siho_name" => " H.  ABDULLAH ",
                "briva" => "115110211600512",
                "tu_no" => "A.L00.BSB.043",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "BRIVA-2234004425627460005"
            ],
            [
                "siho_name" => "SUKAHAR",
                "briva" => "115110211601915",
                "tu_no" => "A.L00.DSB.118",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617400004"
            ],
            [
                "siho_name" => "SUKAHAR",
                "briva" => "115110211601916",
                "tu_no" => "A.L00.DSB.119",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617460003"
            ],
            [
                "siho_name" => "WINOTO",
                "briva" => "115110211602150",
                "tu_no" => "A.L00.CSB.241",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433587438"
            ],
            [
                "siho_name" => "WINOTO",
                "briva" => "115110211602151",
                "tu_no" => "A.L00.CSB.242",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433585247"
            ],
            [
                "siho_name" => " AHMAD  MUNAJI ",
                "briva" => "115110211600078",
                "tu_no" => "A.L00.ASB.011",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433585149"
            ],
            [
                "siho_name" => " AHMAD  MUNAJI ",
                "briva" => "115110211600077",
                "tu_no" => "A.L00.ASB.010",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-1433580829"
            ],
            [
                "siho_name" => " H.  ABDULLAH ",
                "briva" => "115110211600513",
                "tu_no" => "A.L00.BSB.044",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "BRIVA-2234004425627440003"
            ],
            [
                "siho_name" => " H.  MOCH  TAUFIK  ALATAS ",
                "briva" => "115110211600696",
                "tu_no" => "A.L00.BSB.042",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "BRIVA-2234004425627420003"
            ],
            [
                "siho_name" => " M.  HARTO  BIN  KARYO ",
                "briva" => "115110211601289",
                "tu_no" => "A.L00.BSB.045",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "BRIVA-2234004425627480004"
            ],
            [
                "siho_name" => " M.  HARTO  BIN  KARYO ",
                "briva" => "115110211601290",
                "tu_no" => "A.L00.BSB.046",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 100000000,
                "transaction_id" => "BRIVA-2234004425627460004"
            ],
            [
                "siho_name" => " BINAHAR  PANJAITAN ",
                "briva" => "115110211600235",
                "tu_no" => "A.L00.ESB.102",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234009313517440008"
            ],
            [
                "siho_name" => "KISROWIYAH",
                "briva" => "115110211601229",
                "tu_no" => "A.L00.DSB.282",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 411887700,
                "transaction_id" => "BRIVA-2234009320527460009"
            ],
            [
                "siho_name" => "KISROWIYAH",
                "briva" => "115110211601228",
                "tu_no" => "A.L00.CSB.248",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2234009320527420011"
            ],
            [
                "siho_name" => "KISROWIYAH",
                "briva" => "115110211601227",
                "tu_no" => "A.L00.CSB.247",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2234009320527460008"
            ],
            [
                "siho_name" => " SONDANG  PRAYUDI ",
                "briva" => "115110211602203",
                "tu_no" => "A.L00.HSB.076",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617380003"
            ],
            [
                "siho_name" => " UJUM  JUNAEDI ",
                "briva" => "115110211602105",
                "tu_no" => "A.L00.FSB.051",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2234004425617520004"
            ],
            [
                "siho_name" => " DRA.SAMA  EMBIRING ",
                "briva" => "115110211600352",
                "tu_no" => "A.L00.BSB.207",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1433521633"
            ],
            [
                "siho_name" => " H.  ALI  FATONI ",
                "briva" => "115110211600563",
                "tu_no" => "A.L00.DSB.102",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234004425627400001"
            ],
            [
                "siho_name" => " DRA.SAMA  EMBIRING ",
                "briva" => "115110211600351",
                "tu_no" => "A.L00.BSB.206",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1433516722"
            ],
            [
                "siho_name" => " H.  ALI  FATONI ",
                "briva" => "115110211600562",
                "tu_no" => "A.L00.DSB.101",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425627380005"
            ],
            [
                "siho_name" => " H.  ACHMAD  TASLIHAN ",
                "briva" => "115110211600534",
                "tu_no" => "A.L00.BSB.157",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088883330421861"
            ],
            [
                "siho_name" => " H.  ALI  FATONI ",
                "briva" => "115110211600561",
                "tu_no" => "A.L00.DSB.098",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425627380004"
            ],
            [
                "siho_name" => " MIFTAHUL  ULUM ",
                "briva" => "115110211601372",
                "tu_no" => "A.L00.BSB.155",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088883969300468"
            ],
            [
                "siho_name" => " H.  ALI  FATONI ",
                "briva" => "115110211600560",
                "tu_no" => "A.L00.DSB.097",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425627420002"
            ],
            [
                "siho_name" => " MIFTAHUL  ULUM ",
                "briva" => "115110211601371",
                "tu_no" => "A.L00.BSB.154",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088881858280600"
            ],
            [
                "siho_name" => " H.  ALI  FATONI ",
                "briva" => "115110211600559",
                "tu_no" => "A.L00.DSB.078",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425627480002"
            ],
            [
                "siho_name" => " AHMAD  BUSRO ",
                "briva" => "115110211600072",
                "tu_no" => "A.L00.BSB.234",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2234088880818260617"
            ],
            [
                "siho_name" => " H.  ALI  FATONI ",
                "briva" => "115110211600558",
                "tu_no" => "A.L00.DSB.077",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234004425627480001"
            ],
            [
                "siho_name" => " AHMAD  BUSRO ",
                "briva" => "115110211600071",
                "tu_no" => "A.L00.BSB.233",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459800,
                "transaction_id" => "BRIVA-2234088885780421796"
            ],
            [
                "siho_name" => " AHMAD  BUSRO ",
                "briva" => "115110211600070",
                "tu_no" => "A.L00.BSB.232",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234088880560441803"
            ],
            [
                "siho_name" => " AHMAD  BUSRO ",
                "briva" => "115110211600069",
                "tu_no" => "A.L00.BSB.231",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234088884290381791"
            ],
            [
                "siho_name" => " H.  BENI ",
                "briva" => "115110211600593",
                "tu_no" => "A.L00.ESB.049",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617420006"
            ],
            [
                "siho_name" => "NGATIMAN",
                "briva" => "115110211601493",
                "tu_no" => "A.L00.CSB.087",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234009310527520006"
            ],
            [
                "siho_name" => "NGATIMAN",
                "briva" => "115110211601491",
                "tu_no" => "A.L00.CSB.085",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234009310527520005"
            ],
            [
                "siho_name" => "NGATIMAN",
                "briva" => "115110211601492",
                "tu_no" => "A.L00.CSB.086",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234009310527440006"
            ],
            [
                "siho_name" => " H.  SHONHAJI ",
                "briva" => "115110211600782",
                "tu_no" => "A.L00.BSB.199",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433457773"
            ],
            [
                "siho_name" => "KAMSUDIN",
                "briva" => "115110211601205",
                "tu_no" => "A.L00.HSB.074",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617420005"
            ],
            [
                "siho_name" => " H.  SHONHAJI ",
                "briva" => "115110211600783",
                "tu_no" => "A.L00.BSB.200",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1433450399"
            ],
            [
                "siho_name" => "ERNAWATI, SH",
                "briva" => 115110211600428,
                "tu_no" => "A.L00.BSB.161",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1433411728"
            ],
            [
                "siho_name" => "ERNAWATI, SH",
                "briva" => 115110211600427,
                "tu_no" => "A.L00.BSB.160",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1433408776"
            ],
            [
                "siho_name" => " H.  M.SUTRISNO ",
                "briva" => "115110211600669",
                "tu_no" => "A.L00.BSB.088",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 14163156,
                "transaction_id" => "BRIVA-2234004425617520003"
            ],
            [
                "siho_name" => " H.  M.SUTRISNO ",
                "briva" => "115110211600670",
                "tu_no" => "A.L00.BSB.089",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617400003"
            ],
            [
                "siho_name" => " H.  M.SUTRISNO ",
                "briva" => "115110211600671",
                "tu_no" => "A.L00.BSB.090",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617380002"
            ],
            [
                "siho_name" => " VIRA  AMALIA ",
                "briva" => "115110211602129",
                "tu_no" => "A.L00.CSB.001",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617480003"
            ],
            [
                "siho_name" => " SITI  ASMA  ULFAH ",
                "briva" => "115110211601825",
                "tu_no" => "A.L00.CSB.002",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617520002"
            ],
            [
                "siho_name" => " H.  M.  SUTRISNO ",
                "briva" => "115110211600663",
                "tu_no" => "A.L00.CSB.003",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425617440002"
            ],
            [
                "siho_name" => " NURLITA  TAMPUBOLON ",
                "briva" => "115110211601536",
                "tu_no" => "A.L00.FSB.137",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234088882130381433"
            ],
            [
                "siho_name" => " MUH  SUJOKO ",
                "briva" => "115110211601392",
                "tu_no" => "A.L00.BSB.056",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617420004"
            ],
            [
                "siho_name" => " MUH  SUJOKO ",
                "briva" => "115110211601393",
                "tu_no" => "A.L00.BSB.057",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617400002"
            ],
            [
                "siho_name" => " HJ.  KHUMAEDAH ",
                "briva" => "115110211600985",
                "tu_no" => "A.L00.ASB.205",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1433352754"
            ],
            [
                "siho_name" => " HJ.  KHUMAEDAH ",
                "briva" => "115110211600983",
                "tu_no" => "A.L00.ASB.203",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1433351650"
            ],
            [
                "siho_name" => " ENY  FAIZAITUN ",
                "briva" => "115110211600421",
                "tu_no" => "A.L00.BSB.129",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1433347990"
            ],
            [
                "siho_name" => " HJ.  KHUMAEDAH ",
                "briva" => "115110211600984",
                "tu_no" => "A.L00.ASB.204",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1433347884"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600749",
                "tu_no" => "A.L00.CSB.180",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234004425617460002"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600750",
                "tu_no" => "A.L00.ASB.073",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617420003"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600754",
                "tu_no" => "A.L00.ASB.077",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425618240001"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600753",
                "tu_no" => "A.L00.ASB.076",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617500002"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600752",
                "tu_no" => "A.L00.ASB.075",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617480002"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600751",
                "tu_no" => "A.L00.ASB.074",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617420002"
            ],
            [
                "siho_name" => " H.  SAHID ",
                "briva" => "115110211600755",
                "tu_no" => "A.L00.ASB.078",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234004425617520001"
            ],
            [
                "siho_name" => " TEDY  YAKUP  SUKIRNO ",
                "briva" => "115110211602040",
                "tu_no" => "A.L00.DSB.050",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234088880560441251"
            ],
            [
                "siho_name" => " TEDY  YAKUP  SUKIRNO ",
                "briva" => "115110211602038",
                "tu_no" => "A.L00.DSB.048",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088881510521217"
            ],
            [
                "siho_name" => " HJ.  NASPIAH ",
                "briva" => "115110211601000",
                "tu_no" => "A.L00.CSB.179",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617480001"
            ],
            [
                "siho_name" => " TEDY  YAKUP  SUKIRNO ",
                "briva" => "115110211602039",
                "tu_no" => "A.L00.DSB.049",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088884180421220"
            ],
            [
                "siho_name" => " HJ.  NASPIAH ",
                "briva" => "115110211600999",
                "tu_no" => "A.L00.CSB.178",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617400001"
            ],
            [
                "siho_name" => " HJ.  NASPIAH ",
                "briva" => "115110211600998",
                "tu_no" => "A.L00.CSB.177",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234004425617420001"
            ],
            [
                "siho_name" => " AHMAD  NABIL ",
                "briva" => "115110211600080",
                "tu_no" => "A.L00.BSB.128",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433324957"
            ],
            [
                "siho_name" => " AHMAD  NABIL ",
                "briva" => "115110211600079",
                "tu_no" => "A.L00.BSB.127",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1433324857"
            ],
            [
                "siho_name" => " ROBERT  SILABAN ",
                "briva" => "115110211601683",
                "tu_no" => "A.L00.GSB.041",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2234004425617500001"
            ],
            [
                "siho_name" => " MUHAMMAD  TAUFIK  ISMAIL ",
                "briva" => "115110211601426",
                "tu_no" => "A.L00.BSB.037",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2234004425627440001"
            ],
            [
                "siho_name" => " MUHAMMAD  TAUFIK  ISMAIL ",
                "briva" => "115110211601425",
                "tu_no" => "A.L00.BSB.036",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 14163156,
                "transaction_id" => "BRIVA-2234004425627460001"
            ],
            [
                "siho_name" => "SAHROJI",
                "briva" => "115110211601751",
                "tu_no" => "A.L00.ASB.044",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234004425617380001"
            ],
            [
                "siho_name" => "SAHROJI",
                "briva" => "115110211601750",
                "tu_no" => "A.L00.ASB.043",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27854207,
                "transaction_id" => "BRIVA-2234004425617440001"
            ],
            [
                "siho_name" => "SAHROJI",
                "briva" => "115110211601752",
                "tu_no" => "A.L00.ASB.045",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2234004425617460001"
            ],
            [
                "siho_name" => " MUSLIM  MUDAKIR ",
                "briva" => "115110211601453",
                "tu_no" => "A.L00.ASB.210",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2234088884750480636"
            ],
            [
                "siho_name" => " ARIF  MUARIF ",
                "briva" => "115110211600159",
                "tu_no" => "A.L00.ASB.084",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088880820480619"
            ],
            [
                "siho_name" => " ARIF  MUARIF ",
                "briva" => "115110211600161",
                "tu_no" => "A.L00.ASB.086",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088882260380663"
            ],
            [
                "siho_name" => " ARIF  MUARIF ",
                "briva" => "115110211600160",
                "tu_no" => "A.L00.ASB.085",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 06  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2234088885650440610"
            ],
            [
                "siho_name" => " AMIN  SETYORINI ",
                "briva" => "115110211600119",
                "tu_no" => "A.L00.DSB.232",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE138064659798561667"
            ],
            [
                "siho_name" => " MOCHAMAD  NUR  ARIFIN ",
                "briva" => "115110211601384",
                "tu_no" => "A.L00.CSB.208",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE126685078156357744"
            ],
            [
                "siho_name" => " MOCHAMAD  NUR  ARIFIN ",
                "briva" => "115110211601383",
                "tu_no" => "A.L00.CSB.207",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE177667799391110959"
            ],
            [
                "siho_name" => " DEA  PUTRI  RHIZENDA ",
                "briva" => "115110211600284",
                "tu_no" => "A.L00.CSB.206",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE184393488526180094"
            ],
            [
                "siho_name" => " AMIN  SETYORINI ",
                "briva" => "115110211600118",
                "tu_no" => "A.L00.DSB.231",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "CASHANDCHEQUE97850282545743299"
            ],
            [
                "siho_name" => " DEA  PUTRI  RHIZENDA ",
                "briva" => "115110211600283",
                "tu_no" => "A.L00.CSB.205",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE34568549438974662"
            ],
            [
                "siho_name" => " AMIN  SETYORINI ",
                "briva" => "115110211600119",
                "tu_no" => "A.L00.DSB.232",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE93207442183684268"
            ],
            [
                "siho_name" => " AMIN  SETYORINI ",
                "briva" => "115110211600120",
                "tu_no" => "A.L00.DSB.233",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE141274768364695634"
            ],
            [
                "siho_name" => " ASING  IRAWAN ",
                "briva" => "115110211600202",
                "tu_no" => "A.L00.CSB.196",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE141236642725997981"
            ],
            [
                "siho_name" => " AMIN  SETYORINI ",
                "briva" => "115110211600121",
                "tu_no" => "A.L00.DSB.234",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 16568426,
                "transaction_id" => "CASHANDCHEQUE67519487613326996"
            ],
            [
                "siho_name" => " ABDULLAH  KHAFID ",
                "briva" => "115110211600026",
                "tu_no" => "A.L00.DSB.146",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE76239131656654579"
            ],
            [
                "siho_name" => " ASING  IRAWAN ",
                "briva" => "115110211600201",
                "tu_no" => "A.L00.CSB.195",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "CASHANDCHEQUE182298236503990046"
            ],
            [
                "siho_name" => " ASING  IRAWAN ",
                "briva" => "115110211600198",
                "tu_no" => "A.L00.CSB.192",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 15000000,
                "transaction_id" => "CASHANDCHEQUE2696476769974623"
            ],
            [
                "siho_name" => " USMAN  HUDI ",
                "briva" => "115110211602122",
                "tu_no" => "A.L00.CSB.191",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 15000000,
                "transaction_id" => "CASHANDCHEQUE88340901052014986"
            ],
            [
                "siho_name" => " BIMA  EKA  RESTU  IRAWAN ",
                "briva" => "115110211600234",
                "tu_no" => "A.L00.BSB.035",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 15000000,
                "transaction_id" => "CASHANDCHEQUE175123901281140879"
            ],
            [
                "siho_name" => " ASING  IRAWAN ",
                "briva" => "115110211600200",
                "tu_no" => "A.L00.CSB.194",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE115067759798197773"
            ],
            [
                "siho_name" => " RIO  SAMPANI ",
                "briva" => "115110211601672",
                "tu_no" => "A.L00.CSB.190",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE113692032421642382"
            ],
            [
                "siho_name" => " RIO  SAMPANI ",
                "briva" => "115110211601671",
                "tu_no" => "A.L00.CSB.189",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE32310672738167879"
            ],
            [
                "siho_name" => " BIMA  EKA  RESTU  IRAWAN ",
                "briva" => "115110211600233",
                "tu_no" => "A.L00.BSB.034",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE155446863893822132"
            ],
            [
                "siho_name" => " ASING  IRAWAN ",
                "briva" => "115110211600199",
                "tu_no" => "A.L00.CSB.193",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE178313101882046152"
            ],
            [
                "siho_name" => " NENG  WAGINAH ",
                "briva" => "115110211601484",
                "tu_no" => "A.L00.ASB.063",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 75000000,
                "transaction_id" => "CASHANDCHEQUE10107731090167767"
            ],
            [
                "siho_name" => " NENG  WAGINAH ",
                "briva" => "115110211601486",
                "tu_no" => "A.L00.CSB.110",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 75000000,
                "transaction_id" => "CASHANDCHEQUE78337671005131420"
            ],
            [
                "siho_name" => " NENG  WAGINAH ",
                "briva" => "115110211601483",
                "tu_no" => "A.L00.ASB.062",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 75000000,
                "transaction_id" => "CASHANDCHEQUE129098777893083464"
            ],
            [
                "siho_name" => " NENG  WAGINAH ",
                "briva" => "115110211601485",
                "tu_no" => "A.L00.CSB.109",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 75000000,
                "transaction_id" => "CASHANDCHEQUE142744733895668061"
            ],
            [
                "siho_name" => " LINA  WIJAYA ",
                "briva" => "115110211601274",
                "tu_no" => "A.L00.HSB.121",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE127345168404556646"
            ],
            [
                "siho_name" => " LINA  WIJAYA ",
                "briva" => "115110211601273",
                "tu_no" => "A.L00.HSB.120",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 14452200,
                "transaction_id" => "CASHANDCHEQUE187053664341048632"
            ],
            [
                "siho_name" => " H.  ABDUL  MUIS  SIRAN ",
                "briva" => "115110211600496",
                "tu_no" => "A.L00.BSB.244",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988884710346473"
            ],
            [
                "siho_name" => " H.  ABDUL  MUIS  SIRAN ",
                "briva" => "115110211600495",
                "tu_no" => "A.L00.BSB.243",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883939301486"
            ],
            [
                "siho_name" => " H.  ALI  FIKRI ",
                "briva" => "115110211600566",
                "tu_no" => "A.L00.BSB.203",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988885080324950"
            ],
            [
                "siho_name" => " H.  ALI  FIKRI ",
                "briva" => "115110211600565",
                "tu_no" => "A.L00.BSB.202",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988882480384985"
            ],
            [
                "siho_name" => " H.  ALI  FIKRI ",
                "briva" => "115110211600564",
                "tu_no" => "A.L00.BSB.201",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233988885450444947"
            ],
            [
                "siho_name" => "LURYANA",
                "briva" => "115110211601283",
                "tu_no" => "A.L00.GSB.218",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617460009"
            ],
            [
                "siho_name" => " PUTU  MASRONO ",
                "briva" => "115110211601621",
                "tu_no" => "A.L00.ASB.020",
                "note" => " ANGSURAN  2  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 2890440,
                "transaction_id" => "BRIVA-2233904425617340008"
            ],
            [
                "siho_name" => " H.  SOEPARI  TJIPTO  RAHARDJO ",
                "briva" => "115110211600788",
                "tu_no" => "A.L00.CSB.058",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883200424182"
            ],
            [
                "siho_name" => " H.  SOEPARI  TJIPTO  RAHARDJO ",
                "briva" => "115110211600787",
                "tu_no" => "A.L00.CSB.057",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988884920364162"
            ],
            [
                "siho_name" => " H.  SOEPARI  TJIPTO  RAHARDJO ",
                "briva" => "115110211600786",
                "tu_no" => "A.L00.CSB.056",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988881440324144"
            ],
            [
                "siho_name" => " H.  SOEPARI  TJIPTO  RAHARDJO ",
                "briva" => "115110211600785",
                "tu_no" => "A.L00.CSB.055",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883750344173"
            ],
            [
                "siho_name" => " SRI  KUSWATI  RESMININGSIH. ",
                "briva" => "115110211601859",
                "tu_no" => "A.L00.CSB.094",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233988884350404128"
            ],
            [
                "siho_name" => " H.  ABDUL  HAMID  KHASAN ",
                "briva" => "115110211600489",
                "tu_no" => "A.L00.BSB.126",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE109771531689403922"
            ],
            [
                "siho_name" => " SRI  KUSWATI  RESMININGSIH. ",
                "briva" => "115110211601860",
                "tu_no" => "A.L00.CSB.095",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988884860464105"
            ],
            [
                "siho_name" => " SRI  KUSWATI  RESMININGSIH. ",
                "briva" => "115110211601861",
                "tu_no" => "A.L00.CSB.096",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988881090444122"
            ],
            [
                "siho_name" => " H.  ABDUL  HAMID  KHASAN ",
                "briva" => "115110211600488",
                "tu_no" => "A.L00.BSB.125",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "CASHANDCHEQUE56517718087430638"
            ],
            [
                "siho_name" => " TASKANA  JEMY ",
                "briva" => "115110211602031",
                "tu_no" => "A.L00.FSB.169",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617460008"
            ],
            [
                "siho_name" => " TASKANA  JEMY ",
                "briva" => "115110211602032",
                "tu_no" => "A.L00.FSB.170",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617340007"
            ],
            [
                "siho_name" => " H.  SOEPARI  TJIPTO  RAHARDJO ",
                "briva" => "115110211600784",
                "tu_no" => "A.L00.ASB.202",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233988885820364051"
            ],
            [
                "siho_name" => " WIENDARKO  JOKO  SANTOSO ",
                "briva" => "115110211602147",
                "tu_no" => "A.L00.ASB.201",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233988885990324081"
            ],
            [
                "siho_name" => " WIENDARKO  JOKO  SANTOSO ",
                "briva" => "115110211602146",
                "tu_no" => "A.L00.ASB.200",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 14452200,
                "transaction_id" => "BRIVA-2233988885590344021"
            ],
            [
                "siho_name" => " H.  MUNTAHA  MUNDAYIN ",
                "briva" => "115110211600712",
                "tu_no" => "A.L00.DSB.288",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 250000000,
                "transaction_id" => "CASHANDCHEQUE67260715340676219"
            ],
            [
                "siho_name" => " H.  MUNTAHA  MUNDAYIN ",
                "briva" => "115110211600711",
                "tu_no" => "A.L00.DSB.281",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 250000000,
                "transaction_id" => "CASHANDCHEQUE149972431670600986"
            ],
            [
                "siho_name" => " H.  DALIUS ",
                "briva" => "115110211600595",
                "tu_no" => "A.L00.HSB.006",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 14792347,
                "transaction_id" => "CASHANDCHEQUE62968496978168273"
            ],
            [
                "siho_name" => " SITI  MUNAJAH ",
                "briva" => "115110211601830",
                "tu_no" => "A.L00.ASB.168",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627320003"
            ],
            [
                "siho_name" => " MOH.  SAM'AN ",
                "briva" => "115110211601386",
                "tu_no" => "A.L00.BSB.139",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988880240363960"
            ],
            [
                "siho_name" => " SITI  MUNAJAH ",
                "briva" => "115110211601829",
                "tu_no" => "A.L00.ASB.167",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627360005"
            ],
            [
                "siho_name" => " MOH.  SAM'AN ",
                "briva" => "115110211601385",
                "tu_no" => "A.L00.BSB.138",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988880940323954"
            ],
            [
                "siho_name" => " SITI  MUNAJAH ",
                "briva" => "115110211601828",
                "tu_no" => "A.L00.ASB.166",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627400005"
            ],
            [
                "siho_name" => " SITI  MUNAJAH ",
                "briva" => "115110211601827",
                "tu_no" => "A.L00.ASB.153",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627360004"
            ],
            [
                "siho_name" => " SITI  MUNAJAH ",
                "briva" => "115110211601826",
                "tu_no" => "A.L00.ASB.152",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627340004"
            ],
            [
                "siho_name" => " PUTU  MASRONO ",
                "briva" => "115110211601622",
                "tu_no" => "A.L00.ASB.021",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE7899551618092069"
            ],
            [
                "siho_name" => " PUTU  MASRONO ",
                "briva" => "115110211601621",
                "tu_no" => "A.L00.ASB.020",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 26013960,
                "transaction_id" => "CASHANDCHEQUE65169849869320412"
            ],
            [
                "siho_name" => "BAHRUDDIN",
                "briva" => "115110211600216",
                "tu_no" => "A.L00.ASB.109",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627440003"
            ],
            [
                "siho_name" => "DALIUS",
                "briva" => "115110211600269",
                "tu_no" => "A.L00.HSB.065",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE194964939296882278"
            ],
            [
                "siho_name" => "SARIMAH",
                "briva" => "115110211602202",
                "tu_no" => "A.L00.FSB.043",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2233904425617340006"
            ],
            [
                "siho_name" => "BAHRUDDIN",
                "briva" => "115110211600218",
                "tu_no" => "A.L00.ASB.111",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627340003"
            ],
            [
                "siho_name" => "BAHRUDDIN",
                "briva" => "115110211600217",
                "tu_no" => "A.L00.ASB.110",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627340002"
            ],
            [
                "siho_name" => "LAELIYAH",
                "briva" => "115110211601250",
                "tu_no" => "A.L00.ASB.042",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1431820700"
            ],
            [
                "siho_name" => "SOLEKAN",
                "briva" => "115110211601854",
                "tu_no" => "A.L00.FSB.077",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988882590423929"
            ],
            [
                "siho_name" => "BAHRUDIN",
                "briva" => "115110211600219",
                "tu_no" => "A.L00.ASB.150",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627360003"
            ],
            [
                "siho_name" => " H.  NURYADI  LONJONG ",
                "briva" => "115110211600731",
                "tu_no" => "A.L00.HSB.028",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617420006"
            ],
            [
                "siho_name" => "BAHRUDIN",
                "briva" => "115110211600220",
                "tu_no" => "A.L00.ASB.151",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627400004"
            ],
            [
                "siho_name" => " NURUL  AZIS ",
                "briva" => "115110211601542",
                "tu_no" => "A.L00.ESB.239",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 14452200,
                "transaction_id" => "BRIVA-1431788931"
            ],
            [
                "siho_name" => " SRI  WAHYUNI  RAHAYU ",
                "briva" => "115110211601867",
                "tu_no" => "A.L00.HSB.023",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617460007"
            ],
            [
                "siho_name" => "TRIYANI",
                "briva" => "115110211602079",
                "tu_no" => "A.L00.ESB.238",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1431782202"
            ],
            [
                "siho_name" => " NINUUK  SUPRIHATININGSIH ",
                "briva" => "115110211601504",
                "tu_no" => "A.L00.DSB.031",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 10000000,
                "transaction_id" => "CASHANDCHEQUE85587280999489591"
            ],
            [
                "siho_name" => " H.  AROFIK  ISTIAWAN ",
                "briva" => "115110211600577",
                "tu_no" => "A.L00.DSB.174",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617420005"
            ],
            [
                "siho_name" => " H.  AROFIK  ISTIAWAN ",
                "briva" => "115110211600576",
                "tu_no" => "A.L00.DSB.173",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617400004"
            ],
            [
                "siho_name" => " ROSMINTA  BR  SEMBRING ",
                "briva" => "115110211601711",
                "tu_no" => "A.L00.BSB.211",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883620363711"
            ],
            [
                "siho_name" => " ROSMINTA  BR  SEMBRING ",
                "briva" => "115110211602199",
                "tu_no" => "A.L00.BSB.210",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988884540383717"
            ],
            [
                "siho_name" => " ALDES  SITORUS ",
                "briva" => "115110211600100",
                "tu_no" => "A.L00.ESB.225",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1431763476"
            ],
            [
                "siho_name" => " RUSLI  GINTING  BE",
                "briva" => 115110211601727,
                "tu_no" => "A.L00.CSB.226",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233904425617340005"
            ],
            [
                "siho_name" => " RUSLI  GINTING  BE",
                "briva" => 115110211601726,
                "tu_no" => "A.L00.CSB.225",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233904425617320003"
            ],
            [
                "siho_name" => " RUSLI  GINTING  BE",
                "briva" => 115110211601729,
                "tu_no" => "A.L00.ASB.181",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233904425617440004"
            ],
            [
                "siho_name" => " RUSLI  GINTING  BE",
                "briva" => 115110211601728,
                "tu_no" => "A.L00.ASB.180",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233904425617360004"
            ],
            [
                "siho_name" => "SUTAMI",
                "briva" => "115110211601985",
                "tu_no" => "A.L00.ESB.254",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617380005"
            ],
            [
                "siho_name" => "RUSCHAN",
                "briva" => "115110211601723",
                "tu_no" => "A.L00.ASB.137",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627460002"
            ],
            [
                "siho_name" => "SUTAMI",
                "briva" => "115110211601984",
                "tu_no" => "A.L00.ESB.253",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617320002"
            ],
            [
                "siho_name" => " UJANG  HOPID ",
                "briva" => "115110211602103",
                "tu_no" => "A.L00.ASB.122",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233904425617340004"
            ],
            [
                "siho_name" => " UJANG  HOPID ",
                "briva" => "115110211602102",
                "tu_no" => "A.L00.ASB.121",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9474220,
                "transaction_id" => "BRIVA-2233904425617340003"
            ],
            [
                "siho_name" => " UJANG  HOPID ",
                "briva" => "115110211602101",
                "tu_no" => "A.L00.ASB.120",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233904425617400003"
            ],
            [
                "siho_name" => " ASEP  SUDRAJAT ",
                "briva" => "115110211600191",
                "tu_no" => "A.L00.ASB.123",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233904425617340002"
            ],
            [
                "siho_name" => "DARWANTO",
                "briva" => "115110211600276",
                "tu_no" => "A.L00.HSB.231",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 19110000,
                "transaction_id" => "CASHANDCHEQUE1312770012625964"
            ],
            [
                "siho_name" => " WAWAN  SETIAWAN ",
                "briva" => "115110211602145",
                "tu_no" => "A.L00.ESB.008",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617340001"
            ],
            [
                "siho_name" => " RIRIN  KUSUMANINGRUM ",
                "briva" => "115110211601673",
                "tu_no" => "A.L00.ESB.106",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233908160517380034"
            ],
            [
                "siho_name" => " RIRIN  KUSUMANINGRUM ",
                "briva" => "115110211601674",
                "tu_no" => "A.L00.ESB.109",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233908160517380033"
            ],
            [
                "siho_name" => " RIRIN  KUSUMANINGRUM ",
                "briva" => "115110211601675",
                "tu_no" => "A.L00.FSB.126",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233908160517460018"
            ],
            [
                "siho_name" => "MUINUDIN",
                "briva" => "115110211601429",
                "tu_no" => "A.L00.CSB.276",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233904425617440003"
            ],
            [
                "siho_name" => "RUSCHAN",
                "briva" => "115110211601724",
                "tu_no" => "A.L00.ASB.138",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431678540"
            ],
            [
                "siho_name" => "MUINUDIN",
                "briva" => "115110211601430",
                "tu_no" => "A.L00.CSB.277",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233904425617380004"
            ],
            [
                "siho_name" => "PURJIYO",
                "briva" => "115110211601604",
                "tu_no" => "A.L00.GSB.248",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 19110000,
                "transaction_id" => "CASHANDCHEQUE57618660205070244"
            ],
            [
                "siho_name" => "RUSCHAN",
                "briva" => "115110211601725",
                "tu_no" => "A.L00.ASB.139",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431676234"
            ],
            [
                "siho_name" => " RAHMAH  ISTIKOMAH ",
                "briva" => "115110211601628",
                "tu_no" => "A.L00.HSB.129",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431658072"
            ],
            [
                "siho_name" => " MUSLIM  MUDAKIR ",
                "briva" => "115110211601452",
                "tu_no" => "A.L00.ASB.003",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988886038260835"
            ],
            [
                "siho_name" => " MUSLIM  MUDAKIR ",
                "briva" => "115110211601451",
                "tu_no" => "A.L00.ASB.002",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883308300849"
            ],
            [
                "siho_name" => "KARTONO",
                "briva" => "115110211601212",
                "tu_no" => "A.L00.CSB.273",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988882070463270"
            ],
            [
                "siho_name" => " MUSLIM  MUDAKIR ",
                "briva" => "115110211601450",
                "tu_no" => "A.L00.ASB.001",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988885428240842"
            ],
            [
                "siho_name" => "KARTONO",
                "briva" => "115110211601213",
                "tu_no" => "A.L00.CSB.274",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988881830443262"
            ],
            [
                "siho_name" => "KARTONO",
                "briva" => "115110211601214",
                "tu_no" => "A.L00.CSB.275",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988881160383327"
            ],
            [
                "siho_name" => " H.  SAID  BIN  ILI ",
                "briva" => "115110211600756",
                "tu_no" => "A.L00.HSB.061",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617380003"
            ],
            [
                "siho_name" => " H.  SAID  BIN  ILI ",
                "briva" => "115110211600757",
                "tu_no" => "A.L00.HSB.075",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617460006"
            ],
            [
                "siho_name" => " WAHYU  HIDAYAT ",
                "briva" => "115110211602132",
                "tu_no" => "A.L00.FSB.018",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431623167"
            ],
            [
                "siho_name" => "BUDIYONO",
                "briva" => "115110211600241",
                "tu_no" => "A.L00.BSB.006",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE131282814261370374"
            ],
            [
                "siho_name" => "BUDIYONO",
                "briva" => "115110211600242",
                "tu_no" => "A.L00.BSB.007",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE137991223600633975"
            ],
            [
                "siho_name" => " MUHAMMAD  AMAMI ",
                "briva" => "115110211601413",
                "tu_no" => "A.L00.FSB.084",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431502778"
            ],
            [
                "siho_name" => " INDAH  WAHYUNINGSIH ",
                "briva" => "115110211601094",
                "tu_no" => "A.L00.ESB.155",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1431502675"
            ],
            [
                "siho_name" => " ANGGIT  ANGGORO ",
                "briva" => "115110211600134",
                "tu_no" => "A.L00.ASB.040",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617460005"
            ],
            [
                "siho_name" => " ANGGIT  ANGGORO ",
                "briva" => "115110211600135",
                "tu_no" => "A.L00.ASB.041",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617400002"
            ],
            [
                "siho_name" => " ROCHWI  SAYOTO ",
                "briva" => "115110211601686",
                "tu_no" => "A.L00.ASB.064",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617360003"
            ],
            [
                "siho_name" => " ROCHWI  SAYOTO ",
                "briva" => "115110211601687",
                "tu_no" => "A.L00.ASB.065",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617380002"
            ],
            [
                "siho_name" => " H.  HARJA  S ",
                "briva" => "115110211600618",
                "tu_no" => "A.L00.HSB.094",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233909310517400011"
            ],
            [
                "siho_name" => "HARIYANTO",
                "briva" => "115110211600916",
                "tu_no" => "A.L00.ASB.214",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233988883520322586"
            ],
            [
                "siho_name" => "HARIYANTO",
                "briva" => "115110211600915",
                "tu_no" => "A.L00.ASB.213",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233988882780402619"
            ],
            [
                "siho_name" => " NURI  B.  SUTRIMAN ",
                "briva" => "115110211601526",
                "tu_no" => "A.L00.DSB.257",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883350362512"
            ],
            [
                "siho_name" => " H.  MUSTAJIB ",
                "briva" => "115110211600716",
                "tu_no" => "A.L00.CSB.093",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 34000000,
                "transaction_id" => "CASHANDCHEQUE41655425164207996"
            ],
            [
                "siho_name" => " MUHAMAD  ALIMRON ",
                "briva" => "115110211601398",
                "tu_no" => "A.L00.HSB.034",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 10000000,
                "transaction_id" => "CASHANDCHEQUE79854776234798408"
            ],
            [
                "siho_name" => "DARTO",
                "briva" => "115110211600275",
                "tu_no" => "A.L00.GSB.213",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617440002"
            ],
            [
                "siho_name" => " IIP  KOWASI,   S.Pd.I ",
                "briva" => 115110211601083,
                "tu_no" => "A.L00.HSB.095",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233909310517340009"
            ],
            [
                "siho_name" => " MUHAMAD  ALIMRON ",
                "briva" => "115110211601399",
                "tu_no" => "A.L00.HSB.035",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 10000000,
                "transaction_id" => "CASHANDCHEQUE178736477912757600"
            ],
            [
                "siho_name" => " H.  MUSTAJIB ",
                "briva" => "115110211600715",
                "tu_no" => "A.L00.CSB.092",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 34000000,
                "transaction_id" => "CASHANDCHEQUE132075137538119867"
            ],
            [
                "siho_name" => " H.  SUDJIARSO ",
                "briva" => "115110211600795",
                "tu_no" => "A.L00.HSB.084",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233909313517440006"
            ],
            [
                "siho_name" => " H.  MUSTAJIB ",
                "briva" => "115110211600714",
                "tu_no" => "A.L00.CSB.091",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 34000000,
                "transaction_id" => "CASHANDCHEQUE132194717981736823"
            ],
            [
                "siho_name" => " KATIDJO  SISWANTO ",
                "briva" => "115110211601219",
                "tu_no" => "A.L00.FSB.120",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617460004"
            ],
            [
                "siho_name" => " NURI  B.  SUTRIMAN ",
                "briva" => "115110211601527",
                "tu_no" => "A.L00.DSB.258",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883490422442"
            ],
            [
                "siho_name" => " KATIDJO  SISWANTO ",
                "briva" => "115110211601220",
                "tu_no" => "A.L00.FSB.121",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617460003"
            ],
            [
                "siho_name" => " MUHAMMAD  HAIDIR ",
                "briva" => "115110211601421",
                "tu_no" => "A.L00.CSB.127",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627400002"
            ],
            [
                "siho_name" => " MUHAMMAD  HAIDIR ",
                "briva" => "115110211601420",
                "tu_no" => "A.L00.CSB.126",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627360002"
            ],
            [
                "siho_name" => "HARIANTO",
                "briva" => "115110211600909",
                "tu_no" => "A.L00.DSB.247",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 21095600,
                "transaction_id" => "CASHANDCHEQUE117758198151456643"
            ],
            [
                "siho_name" => " HJ.  YOSSIDA ",
                "briva" => "115110211601055",
                "tu_no" => "A.L00.BSB.092",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627320002"
            ],
            [
                "siho_name" => "HARIANTO",
                "briva" => "115110211600910",
                "tu_no" => "A.L00.DSB.248",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE150754991536348657"
            ],
            [
                "siho_name" => " HJ.  YOSSIDA ",
                "briva" => "115110211601054",
                "tu_no" => "A.L00.BSB.013",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425627420002"
            ],
            [
                "siho_name" => "HARIANTO",
                "briva" => "115110211600912",
                "tu_no" => "A.L00.DSB.250",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE138178809565738802"
            ],
            [
                "siho_name" => "HARIANTO",
                "briva" => "115110211600911",
                "tu_no" => "A.L00.DSB.249",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE58249263723976532"
            ],
            [
                "siho_name" => " FAHMI  ZAKRI  ZIKRI ",
                "briva" => "115110211600440",
                "tu_no" => "A.L00.BSB.091",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627420001"
            ],
            [
                "siho_name" => " H.  SUAIB ",
                "briva" => "115110211600791",
                "tu_no" => "A.L00.HSB.053",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233904425617420004"
            ],
            [
                "siho_name" => "JOHARLIS",
                "briva" => "115110211600638",
                "tu_no" => "A.L00.HSB.123",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE17707308329823295"
            ],
            [
                "siho_name" => "JOHARLIS",
                "briva" => "115110211600637",
                "tu_no" => "A.L00.HSB.005",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE74732804341006515"
            ],
            [
                "siho_name" => "SLAMET",
                "briva" => "115110211601841",
                "tu_no" => "A.L00.BSB.140",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 55000000,
                "transaction_id" => "BRIVA-2233904425617400001"
            ],
            [
                "siho_name" => "JOHARLIS",
                "briva" => "115110211601182",
                "tu_no" => "A.L00.HSB.064",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "CASHANDCHEQUE66539712476732570"
            ],
            [
                "siho_name" => " H.  MOCH.HATTA  SALAM ",
                "briva" => "115110211600702",
                "tu_no" => "A.L00.BSB.012",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627440001"
            ],
            [
                "siho_name" => "SUGIYANTO",
                "briva" => "115110211601901",
                "tu_no" => "A.L00.GSB.207",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-1431358316"
            ],
            [
                "siho_name" => " MUSTAIN  ALFARIZ ",
                "briva" => "115110211601457",
                "tu_no" => "A.L00.CSB.260",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-1431355469"
            ],
            [
                "siho_name" => " H.  SUDHARTO ",
                "briva" => "115110211600794",
                "tu_no" => "A.L00.ASB.081",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988880710462078"
            ],
            [
                "siho_name" => " H.  MOCH.HATTA  SALAM ",
                "briva" => "115110211600701",
                "tu_no" => "A.L00.BSB.153",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627340001"
            ],
            [
                "siho_name" => "SARTANI",
                "briva" => "115110211601773",
                "tu_no" => "A.L00.HSB.104",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233904425617420003"
            ],
            [
                "siho_name" => " H.  SUDHARTO ",
                "briva" => "115110211600793",
                "tu_no" => "A.L00.ASB.080",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988882750422141"
            ],
            [
                "siho_name" => " H.  SUDHARTO ",
                "briva" => "115110211600792",
                "tu_no" => "A.L00.ASB.079",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233988885370322124"
            ],
            [
                "siho_name" => " JAHISAR  ARITONANG ",
                "briva" => "115110211601164",
                "tu_no" => "A.L00.GSB.055",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988885408300531"
            ],
            [
                "siho_name" => " H.  MOCH.HATTA  SALAM ",
                "briva" => "115110211600700",
                "tu_no" => "A.L00.BSB.152",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425627320001"
            ],
            [
                "siho_name" => " H.  KARSIM ",
                "briva" => "115110211600653",
                "tu_no" => "A.L00.GSB.147",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988882990322045"
            ],
            [
                "siho_name" => "BUHORI",
                "briva" => "115110211600245",
                "tu_no" => "A.L00.HSB.045",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 10000000,
                "transaction_id" => "CASHANDCHEQUE70548464444014787"
            ],
            [
                "siho_name" => " AHMAD  HADI  SULTON ",
                "briva" => "115110211600075",
                "tu_no" => "A.L00.ASB.113",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233908886886386952"
            ],
            [
                "siho_name" => " SITI  TITIK  MUZAROH ",
                "briva" => "115110211601839",
                "tu_no" => "A.L00.ASB.112",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233908886896386900"
            ],
            [
                "siho_name" => "ZULFIARDI",
                "briva" => "115110211602195",
                "tu_no" => "A.L00.ESB.076",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 14163156,
                "transaction_id" => "BRIVA-2233904425617320001"
            ],
            [
                "siho_name" => " MAT  SOLEH ",
                "briva" => "115110211601360",
                "tu_no" => "A.L00.FSB.253",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431286606"
            ],
            [
                "siho_name" => " H.  KARSIM ",
                "briva" => "115110211600650",
                "tu_no" => "A.L00.GSB.065",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988880510461879"
            ],
            [
                "siho_name" => " AHMAD  SAHRONI ",
                "briva" => "115110211600086",
                "tu_no" => "A.L00.GSB.209",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233904425617460002"
            ],
            [
                "siho_name" => " H.  KARSIM ",
                "briva" => "115110211600649",
                "tu_no" => "A.L00.GSB.051",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988882310361923"
            ],
            [
                "siho_name" => " H.  KARSIM ",
                "briva" => "115110211600652",
                "tu_no" => "A.L00.GSB.146",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988880300461855"
            ],
            [
                "siho_name" => " H.  KARSIM ",
                "briva" => "115110211600651",
                "tu_no" => "A.L00.GSB.066",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883740321883"
            ],
            [
                "siho_name" => " DENI  WARDENI ",
                "briva" => "115110211600301",
                "tu_no" => "A.L00.HSB.186",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988885330341862"
            ],
            [
                "siho_name" => " DENI  WARDENI ",
                "briva" => "115110211600300",
                "tu_no" => "A.L00.HSB.185",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988885470341842"
            ],
            [
                "siho_name" => " H.  NURHADI ",
                "briva" => "115110211600725",
                "tu_no" => "A.L00.BSB.190",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617420002"
            ],
            [
                "siho_name" => " H.  NURHADI ",
                "briva" => "115110211600724",
                "tu_no" => "A.L00.BSB.189",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617420001"
            ],
            [
                "siho_name" => " YUYUN  KARYUNI ",
                "briva" => "115110211602185",
                "tu_no" => "A.L00.ESB.043",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988881760381863"
            ],
            [
                "siho_name" => " MAT  SOLEH ",
                "briva" => "115110211601361",
                "tu_no" => "A.L00.FSB.254",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431256991"
            ],
            [
                "siho_name" => " H.  NURHADI ",
                "briva" => "115110211600723",
                "tu_no" => "A.L00.BSB.188",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617380001"
            ],
            [
                "siho_name" => " ABDUR  ROHIM ",
                "briva" => "115110211600029",
                "tu_no" => "A.L00.FSB.252",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431251876"
            ],
            [
                "siho_name" => " YUYUN  KARYUNI ",
                "briva" => "115110211602184",
                "tu_no" => "A.L00.ESB.042",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233988883860421859"
            ],
            [
                "siho_name" => " YUYUN  KARYUNI ",
                "briva" => "115110211602186",
                "tu_no" => "A.L00.ESB.044",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988881730361788"
            ],
            [
                "siho_name" => " H.  MOCH.HATTA  SALAM ",
                "briva" => "115110211600699",
                "tu_no" => "A.L00.BSB.151",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431242930"
            ],
            [
                "siho_name" => " DENI  WARDENI ",
                "briva" => "115110211600299",
                "tu_no" => "A.L00.GSB.031",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 42489468,
                "transaction_id" => "BRIVA-2233988880610401789"
            ],
            [
                "siho_name" => " HJ.  KUSTIANTI ",
                "briva" => "115110211600988",
                "tu_no" => "A.L00.BSB.145",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431239023"
            ],
            [
                "siho_name" => "RIANITA",
                "briva" => "115110211601651",
                "tu_no" => "A.L00.ESB.283",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2233988883520461715"
            ],
            [
                "siho_name" => " HJ.  NURYATI ",
                "briva" => "115110211601009",
                "tu_no" => "A.L00.BSB.062",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617360002"
            ],
            [
                "siho_name" => " MUDJIHADI  EFFENDI ",
                "briva" => "115110211601391",
                "tu_no" => "A.L00.BSB.110",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431218970"
            ],
            [
                "siho_name" => " MUDJIHADI  EFFENDI ",
                "briva" => "115110211601390",
                "tu_no" => "A.L00.BSB.109",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431214328"
            ],
            [
                "siho_name" => "HAFIDHI",
                "briva" => "115110211600903",
                "tu_no" => "A.L00.ASB.037",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883150441637"
            ],
            [
                "siho_name" => "HAFIDHI",
                "briva" => "115110211600902",
                "tu_no" => "A.L00.ASB.036",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2233988885160361670"
            ],
            [
                "siho_name" => "HAFIDHI",
                "briva" => "115110211600901",
                "tu_no" => "A.L00.ASB.035",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988884610421672"
            ],
            [
                "siho_name" => "HAFIDHI",
                "briva" => "115110211600900",
                "tu_no" => "A.L00.ASB.034",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233988883160461612"
            ],
            [
                "siho_name" => " H.  M.YUNUS  SALEH ",
                "briva" => "115110211600673",
                "tu_no" => "A.L00.BSB.087",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233904425617360001"
            ],
            [
                "siho_name" => " H.  M.YUNUS  SALEH ",
                "briva" => "115110211600672",
                "tu_no" => "A.L00.BSB.086",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233904425617440001"
            ],
            [
                "siho_name" => " H.  M.ASRORI, SE",
                "briva" => 115110211600665,
                "tu_no" => "A.L00.BSB.054",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2233909313517380001"
            ],
            [
                "siho_name" => " H.  M.ASRORI, SE",
                "briva" => 115110211600666,
                "tu_no" => "A.L00.BSB.055",
                "note" => " ANGSURAN  2  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 8326312,
                "transaction_id" => "BRIVA-2233909313517420003"
            ],
            [
                "siho_name" => " BUNGA  SEMBIRING ",
                "briva" => "115110211600247",
                "tu_no" => "A.L00.ESB.045",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1431135427"
            ],
            [
                "siho_name" => " H.  AJID ",
                "briva" => "115110211600556",
                "tu_no" => "A.L00.FSB.019",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 05  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-1431089501"
            ],
            [
                "siho_name" => " H.  HERMAN ",
                "briva" => "115110211600619",
                "tu_no" => "A.L00.FSB.189",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "CASHANDCHEQUE17071488367451818"
            ],
            [
                "siho_name" => " H.  HERMAN ",
                "briva" => "115110211600620",
                "tu_no" => "A.L00.GSB.163",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "CASHANDCHEQUE43477025048826799"
            ],
            [
                "siho_name" => "NOPINDI",
                "briva" => "115110211600571",
                "tu_no" => "A.L00.FSB.152",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "CASHANDCHEQUE108153962301325350"
            ],
            [
                "siho_name" => " H.  JAMALUDIN ",
                "briva" => "115110211600636",
                "tu_no" => "A.L00.DSB.076",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "CASHANDCHEQUE103885932227412497"
            ],
            [
                "siho_name" => " H.  JAMALUDIN ",
                "briva" => "115110211600633",
                "tu_no" => "A.L00.DSB.073",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 8811230,
                "transaction_id" => "CASHANDCHEQUE190621495794148320"
            ],
            [
                "siho_name" => " CEPI  SUPRIYADI ",
                "briva" => "115110211600257",
                "tu_no" => "A.L00.FSB.038",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627120005"
            ],
            [
                "siho_name" => " KORTINA  SIREGAR ",
                "briva" => "115110211601240",
                "tu_no" => "A.L00.GSB.077",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627020007"
            ],
            [
                "siho_name" => " HEMAWATI  BR  PANDIA ",
                "briva" => "115110211600946",
                "tu_no" => "A.L00.BSB.081",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788881330103465"
            ],
            [
                "siho_name" => " HEMAWATI  BR  PANDIA ",
                "briva" => "115110211600948",
                "tu_no" => "A.L00.BSB.083",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788886050023316"
            ],
            [
                "siho_name" => " HEMAWATI  BR  PANDIA ",
                "briva" => "115110211600947",
                "tu_no" => "A.L00.BSB.082",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788880600063372"
            ],
            [
                "siho_name" => " H.  KASMUNI ",
                "briva" => "115110211600655",
                "tu_no" => "A.L00.ASB.225",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2233704425627020006"
            ],
            [
                "siho_name" => " H.  KASMUNI ",
                "briva" => "115110211600654",
                "tu_no" => "A.L00.ASB.224",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627000003"
            ],
            [
                "siho_name" => " H.  KASMUNI ",
                "briva" => "115110211600656",
                "tu_no" => "A.L00.ASB.226",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2233704425627020005"
            ],
            [
                "siho_name" => "TAFTAZANI",
                "briva" => "115110211602020",
                "tu_no" => "A.L00.CSB.045",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2233704425627080007"
            ],
            [
                "siho_name" => " HJ.  ASA'ADAH ",
                "briva" => "115110211600960",
                "tu_no" => "A.L00.CSB.044",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627000002"
            ],
            [
                "siho_name" => " H.  IRSYAD ",
                "briva" => "115110211600631",
                "tu_no" => "A.L00.CSB.043",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627100003"
            ],
            [
                "siho_name" => " KARDIMAN  S  TAMBAH ",
                "briva" => "115110211601209",
                "tu_no" => "A.L00.CSB.129",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788884210083214"
            ],
            [
                "siho_name" => " H.  IRSYAD ",
                "briva" => "115110211600630",
                "tu_no" => "A.L00.CSB.042",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233704425627080006"
            ],
            [
                "siho_name" => " KARDIMAN  S  TAMBAH ",
                "briva" => "115110211601208",
                "tu_no" => "A.L00.CSB.128",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788885400123217"
            ],
            [
                "siho_name" => " KARDIMAN  S  TAMBAH ",
                "briva" => "115110211601210",
                "tu_no" => "A.L00.CSB.130",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788883850123039"
            ],
            [
                "siho_name" => "SUYATNO",
                "briva" => "115110211602016",
                "tu_no" => "A.L00.ASB.133",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233788883330062980"
            ],
            [
                "siho_name" => "SUYATNO",
                "briva" => "115110211602017",
                "tu_no" => "A.L00.ASB.134",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233788883040062936"
            ],
            [
                "siho_name" => " TALMALINA  SIHALOHO ",
                "briva" => "115110211602027",
                "tu_no" => "A.L00.GSB.078",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "CASHANDCHEQUE128664102995540893"
            ],
            [
                "siho_name" => "SOBIRIN",
                "briva" => "115110211601848",
                "tu_no" => "A.L00.CSB.278",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788884128280570"
            ],
            [
                "siho_name" => "SOBIRIN",
                "briva" => "115110211601849",
                "tu_no" => "A.L00.CSB.279",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233788880730122632"
            ],
            [
                "siho_name" => " DEDI  MANIHURUK ",
                "briva" => "115110211601576",
                "tu_no" => "A.L00.GSB.079",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1427654668"
            ],
            [
                "siho_name" => "SETIATI",
                "briva" => "115110211601800",
                "tu_no" => "A.L00.HSB.003",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627080005"
            ],
            [
                "siho_name" => "PURWADI",
                "briva" => "115110211601608",
                "tu_no" => "A.L00.FSB.066",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 65000000,
                "transaction_id" => "BRIVA-2233704425627140002"
            ],
            [
                "siho_name" => " DEDI  MANIHURUK ",
                "briva" => "115110211601576",
                "tu_no" => "A.L00.GSB.079",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627140001"
            ],
            [
                "siho_name" => "SUMINAR",
                "briva" => "115110211601944",
                "tu_no" => "A.L00.GSB.241",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233704425627020003"
            ],
            [
                "siho_name" => " H.  JUHERI ",
                "briva" => "115110211600641",
                "tu_no" => "A.L00.GSB.152",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1427541029"
            ],
            [
                "siho_name" => " ASEP  ROKHMAT ",
                "briva" => "115110211600187",
                "tu_no" => "A.L00.FSB.044",
                "note" => " CICILAN  1  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "CASHANDCHEQUE128895997250182955"
            ],
            [
                "siho_name" => " H.  JUHERI ",
                "briva" => "115110211600640",
                "tu_no" => "A.L00.GSB.148",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1427518799"
            ],
            [
                "siho_name" => " SITI  UMI  ASIH ",
                "briva" => "115110211601840",
                "tu_no" => "A.L00.GSB.200",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627060001"
            ],
            [
                "siho_name" => " ASEP  ROKHMAT ",
                "briva" => "115110211600186",
                "tu_no" => "A.L00.FSB.043",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9634800,
                "transaction_id" => "BRIVA-2233704425627020002"
            ],
            [
                "siho_name" => " H.  ARMAT ",
                "briva" => "115110211600575",
                "tu_no" => "A.L00.ESB.068",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 50000000,
                "transaction_id" => "BRIVA-2233704425627040002"
            ],
            [
                "siho_name" => " H.  ARMAT ",
                "briva" => "115110211600574",
                "tu_no" => "A.L00.ESB.067",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 50000000,
                "transaction_id" => "BRIVA-2233704425627040001"
            ],
            [
                "siho_name" => " HJ.  KUSTIANTI ",
                "briva" => "115110211600986",
                "tu_no" => "A.L00.BSB.143",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627020001"
            ],
            [
                "siho_name" => " H.  MOCH.HATTA  SALAM ",
                "briva" => "115110211600698",
                "tu_no" => "A.L00.BSB.150",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627000001"
            ],
            [
                "siho_name" => " TEST  BAYAR ",
                "briva" => "115110211602200",
                "tu_no" => " test  1 ",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 100000,
                "transaction_id" => "BRIVA-1427436023"
            ],
            [
                "siho_name" => " H.  MOCH.HATTA  SALAM ",
                "briva" => "115110211600697",
                "tu_no" => "A.L00.BSB.149",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233704425627080002"
            ],
            [
                "siho_name" => " HJ.  KUSTIANTI ",
                "briva" => "115110211600987",
                "tu_no" => "A.L00.BSB.144",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233704425627080001"
            ],
            [
                "siho_name" => " SETU  ARIFIN ",
                "briva" => "115110211601806",
                "tu_no" => "A.L00.ASB.179",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233788885600001666"
            ],
            [
                "siho_name" => "MARIYANA",
                "briva" => "115110211601324",
                "tu_no" => "A.L00.FSB.122",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233788881359240076"
            ],
            [
                "siho_name" => "MARIYANA",
                "briva" => "115110211601323",
                "tu_no" => "A.L00.FSB.058",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 03  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233788881559280068"
            ],
            [
                "siho_name" => " DRS.  NGGELUH  BANGUN   SMHK",
                "briva" => " 115110211600363",
                "tu_no" => "A.L00.CSB.258",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 91530600,
                "transaction_id" => "CASHANDCHEQUE153510480479463642"
            ],
            [
                "siho_name" => " DRS.  NGGELUH  BANGUN   SMHK",
                "briva" => 115110211600364,
                "tu_no" => "A.L00.CSB.259",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 91530600,
                "transaction_id" => "CASHANDCHEQUE33841382516406600"
            ],
            [
                "siho_name" => " DRS.  NGGELUH  BANGUN   SMHK",
                "briva" => 115110211600362,
                "tu_no" => "A.L00.CSB.257",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 91530600,
                "transaction_id" => "CASHANDCHEQUE133705087374240213"
            ],
            [
                "siho_name" => "MUJIYEM",
                "briva" => "115110211601431",
                "tu_no" => "A.L00.HSB.070",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 58000000,
                "transaction_id" => "CASHANDCHEQUE134307462623100799"
            ],
            [
                "siho_name" => "MUJIYEM",
                "briva" => "115110211601432",
                "tu_no" => "A.L00.HSB.071",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 58000000,
                "transaction_id" => "CASHANDCHEQUE194211301215354148"
            ],
            [
                "siho_name" => " NONI  MULIAWATI ",
                "briva" => "115110211601511",
                "tu_no" => "A.L00.FSB.196",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617040016"
            ],
            [
                "siho_name" => " NONI  MULIAWATI ",
                "briva" => "115110211601510",
                "tu_no" => "A.L00.FSB.195",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617020010"
            ],
            [
                "siho_name" => " NONI  MULIAWATI ",
                "briva" => "115110211601509",
                "tu_no" => "A.L00.FSB.194",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233604425617060006"
            ],
            [
                "siho_name" => " NINA  LASTIYANA ",
                "briva" => "115110211601498",
                "tu_no" => "A.L00.FSB.158",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-2233604425617040015"
            ],
            [
                "siho_name" => " NINA  LASTIYANA ",
                "briva" => "115110211601497",
                "tu_no" => "A.L00.FSB.157",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617060005"
            ],
            [
                "siho_name" => "YULIANTO",
                "briva" => "115110211602180",
                "tu_no" => "A.L00.CSB.137",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1426082796"
            ],
            [
                "siho_name" => "YULIANTO",
                "briva" => "115110211602181",
                "tu_no" => "A.L00.CSB.138",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-1426077562"
            ],
            [
                "siho_name" => "SUAIB",
                "briva" => "115110211601872",
                "tu_no" => "A.L00.HSB.124",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2233604425617140009"
            ],
            [
                "siho_name" => "NOFRIANTO",
                "briva" => "115110211601507",
                "tu_no" => "A.L00.GSB.155",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617100011"
            ],
            [
                "siho_name" => " IR.  NAZIHUN  NAFS ",
                "briva" => "115110211601125",
                "tu_no" => "A.L00.ESB.097",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617100010"
            ],
            [
                "siho_name" => " IWAN  SETIAWAN ",
                "briva" => "115110211601155",
                "tu_no" => "A.L00.CSB.089",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1426039819"
            ],
            [
                "siho_name" => " IR.  NAZIHUN  NAFS ",
                "briva" => "115110211601124",
                "tu_no" => "A.L00.ESB.096",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617000008"
            ],
            [
                "siho_name" => " IWAN  SETIAWAN ",
                "briva" => "115110211601153",
                "tu_no" => "A.L00.CSB.097",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-1426035525"
            ],
            [
                "siho_name" => " IWAN  SETIAWAN ",
                "briva" => "115110211601154",
                "tu_no" => "A.L00.CSB.088",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1426032447"
            ],
            [
                "siho_name" => " IIN  INDARTI ",
                "briva" => "115110211601082",
                "tu_no" => "A.L00.CSB.090",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27001527,
                "transaction_id" => "BRIVA-1426028565"
            ],
            [
                "siho_name" => "JUNARSIH",
                "briva" => "115110211601199",
                "tu_no" => "A.L00.DSB.002",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617020009"
            ],
            [
                "siho_name" => "JUNARSIH",
                "briva" => "115110211601198",
                "tu_no" => "A.L00.DSB.001",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233604425617100009"
            ],
            [
                "siho_name" => "SARUN",
                "briva" => "115110211601777",
                "tu_no" => "A.L00.FSB.296",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-1425962864"
            ],
            [
                "siho_name" => "SARUN",
                "briva" => "115110211601778",
                "tu_no" => "A.L00.FSB.297",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1425958980"
            ],
            [
                "siho_name" => " DHIMAS  SETYANIK ",
                "briva" => "115110211600307",
                "tu_no" => "A.L00.ASB.212",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 274591800,
                "transaction_id" => "BRIVA-2233688884000084745"
            ],
            [
                "siho_name" => " H.  M.ASRORI, SE",
                "briva" => 115110211600666,
                "tu_no" => "A.L00.BSB.055",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "Cash",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 20000000,
                "transaction_id" => "CASHANDCHEQUE93776963504573934"
            ],
            [
                "siho_name" => "MASNA",
                "briva" => "115110211601348",
                "tu_no" => "A.L00.ESB.018",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 329510160,
                "transaction_id" => "BRIVA-2233604425617040011"
            ],
            [
                "siho_name" => " ANTONI  SITEPU ",
                "briva" => "115110211600143",
                "tu_no" => "A.L00.BSB.196",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617080004"
            ],
            [
                "siho_name" => " BOY  TARNAMA ",
                "briva" => "115110211600236",
                "tu_no" => "A.L00.HSB.182",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 18884208,
                "transaction_id" => "BRIVA-1425849792"
            ],
            [
                "siho_name" => " MUH  SUKRI ",
                "briva" => "115110211601609",
                "tu_no" => "A.L00.CSB.022",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617100008"
            ],
            [
                "siho_name" => " MUH  SUKRI ",
                "briva" => "115110211601610",
                "tu_no" => "A.L00.CSB.023",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617000007"
            ],
            [
                "siho_name" => " ANTONI  SITEPU ",
                "briva" => "115110211600142",
                "tu_no" => "A.L00.BSB.195",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617040009"
            ],
            [
                "siho_name" => " SAPRIL      I ",
                "briva" => "115110211601768",
                "tu_no" => "A.L00.ESB.005",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233604425617100007"
            ],
            [
                "siho_name" => " ARIEF  MUSLIH ",
                "briva" => "115110211600155",
                "tu_no" => "A.L00.HSB.141",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617100006"
            ],
            [
                "siho_name" => " SAPRIL      I ",
                "briva" => "115110211601769",
                "tu_no" => "A.L00.HSB.057",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617020008"
            ],
            [
                "siho_name" => "SISENO",
                "briva" => "115110211601819",
                "tu_no" => "A.L00.CSB.036",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233604425617140008"
            ],
            [
                "siho_name" => "SISENO",
                "briva" => "115110211601821",
                "tu_no" => "A.L00.CSB.038",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233604425617140007"
            ],
            [
                "siho_name" => "SISENO",
                "briva" => "115110211601820",
                "tu_no" => "A.L00.CSB.037",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233604425617140006"
            ],
            [
                "siho_name" => " JAMSON  SITEPU ",
                "briva" => "115110211601171",
                "tu_no" => "A.L00.FSB.005",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 58000000,
                "transaction_id" => "BRIVA-2233604425617000006"
            ],
            [
                "siho_name" => " JAMSON  SITEPU ",
                "briva" => "115110211601170",
                "tu_no" => "A.L00.FSB.004",
                "note" => " CASH  KERAS  LUNAS ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 270015270,
                "transaction_id" => "BRIVA-2233604425617020006"
            ],
            [
                "siho_name" => " FITRA  LUSI  APRIANA ",
                "briva" => "115110211600461",
                "tu_no" => "A.L00.CSB.017",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617080003"
            ],
            [
                "siho_name" => " FITRA  LUSI  APRIANA ",
                "briva" => "115110211600460",
                "tu_no" => "A.L00.CSB.016",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617020004"
            ],
            [
                "siho_name" => " FITRA  LUSI  APRIANA ",
                "briva" => "115110211600459",
                "tu_no" => "A.L00.CSB.015",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617000004"
            ],
            [
                "siho_name" => " H.  IRSYAD ",
                "briva" => "115110211600629",
                "tu_no" => "A.L00.ASB.199",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617100005"
            ],
            [
                "siho_name" => " H.  IRSYAD ",
                "briva" => "115110211600628",
                "tu_no" => "A.L00.ASB.198",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617140004"
            ],
            [
                "siho_name" => " H.  IRSYAD ",
                "briva" => "115110211600627",
                "tu_no" => "A.L00.ASB.197",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617100004"
            ],
            [
                "siho_name" => " H.  IRSYAD ",
                "briva" => "115110211600626",
                "tu_no" => "A.L00.ASB.196",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617080002"
            ],
            [
                "siho_name" => " HJ.  ASA'ADAH ",
                "briva" => "115110211600961",
                "tu_no" => "A.L00.ASB.195",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617040007"
            ],
            [
                "siho_name" => "FARIHIN",
                "briva" => "115110211600450",
                "tu_no" => "A.L00.ASB.177",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617000003"
            ],
            [
                "siho_name" => " ENUNG  NURLAELA ",
                "briva" => "115110211601186",
                "tu_no" => "A.L00.HSB.044",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1425510323"
            ],
            [
                "siho_name" => "FARIHIN",
                "briva" => "115110211600449",
                "tu_no" => "A.L00.ASB.176",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617000002"
            ],
            [
                "siho_name" => "FARIHIN",
                "briva" => "115110211600448",
                "tu_no" => "A.L00.ASB.175",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617040006"
            ],
            [
                "siho_name" => "FARIHIN",
                "briva" => "115110211600447",
                "tu_no" => "A.L00.ASB.174",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617140003"
            ],
            [
                "siho_name" => "FARIHIN",
                "briva" => "115110211600446",
                "tu_no" => "A.L00.ASB.173",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 76923076,
                "transaction_id" => "BRIVA-2233604425617080001"
            ],
            [
                "siho_name" => "RELA",
                "briva" => "115110211601623",
                "tu_no" => "A.L00.HSB.206",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233688885090142768"
            ],
            [
                "siho_name" => " H.  ABDUL  HARIS ",
                "briva" => "115110211600490",
                "tu_no" => "A.L00.HSB.207",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-2233688882680142760"
            ],
            [
                "siho_name" => "DARGA",
                "briva" => "115110211600270",
                "tu_no" => "A.L00.HSB.125",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2233604425617040004"
            ],
            [
                "siho_name" => " TATANG  RIKI ",
                "briva" => "115110211602036",
                "tu_no" => "A.L00.GSB.135",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 20000000,
                "transaction_id" => "BRIVA-2233604425617140002"
            ],
            [
                "siho_name" => " TATANG  RIKI ",
                "briva" => "115110211602037",
                "tu_no" => "A.L00.GSB.137",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 20000000,
                "transaction_id" => "BRIVA-2233604425617020003"
            ],
            [
                "siho_name" => " INTO  SITEPU ",
                "briva" => "115110211601105",
                "tu_no" => "A.L00.BSB.213",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233688883499280499"
            ],
            [
                "siho_name" => " H.  ADANG  ABIDIN ",
                "briva" => "115110211600542",
                "tu_no" => "A.L00.DSB.053",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 18884208,
                "transaction_id" => "BRIVA-1425412885"
            ],
            [
                "siho_name" => " INTO  SITEPU ",
                "briva" => "115110211601104",
                "tu_no" => "A.L00.BSB.212",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233688883068320530"
            ],
            [
                "siho_name" => " IDHARUL  HAQ ",
                "briva" => "115110211601080",
                "tu_no" => "A.L00.BSB.014",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 14163156,
                "transaction_id" => "BRIVA-1425395179"
            ],
            [
                "siho_name" => " H.  ARIS  SAMINO ",
                "briva" => "115110211600573",
                "tu_no" => "A.L00.HSB.115",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP  dan  ... ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 18884208,
                "transaction_id" => "BRIVA-2233604425617040002"
            ],
            [
                "siho_name" => "KANDEK",
                "briva" => "115110211601207",
                "tu_no" => "A.L00.HSB.208",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233688882160022438"
            ],
            [
                "siho_name" => "KANDEK",
                "briva" => "115110211601206",
                "tu_no" => "A.L00.HSB.118",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233688880698280488"
            ],
            [
                "siho_name" => " KHOLASOTUN  NUR ",
                "briva" => "115110211601223",
                "tu_no" => "A.L00.BSB.015",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 9442104,
                "transaction_id" => "BRIVA-1425369857"
            ],
            [
                "siho_name" => "KARYADI",
                "briva" => "115110211601215",
                "tu_no" => "A.L00.CSB.020",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1425366523"
            ],
            [
                "siho_name" => "KARYADI",
                "briva" => "115110211601216",
                "tu_no" => "A.L00.CSB.021",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1425360059"
            ],
            [
                "siho_name" => " CAROLIN  GINTING ",
                "briva" => "115110211600256",
                "tu_no" => "A.L00.DSB.296",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 43356600,
                "transaction_id" => "BRIVA-2233604425617020002"
            ],
            [
                "siho_name" => "RUSMAN",
                "briva" => "115110211601731",
                "tu_no" => "A.L00.HSB.060",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 10000000,
                "transaction_id" => "BRIVA-2233604425617120002"
            ],
            [
                "siho_name" => "IRCHAM",
                "briva" => "115110211601130",
                "tu_no" => "A.L00.ASB.114",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233688885640022298"
            ],
            [
                "siho_name" => "IRCHAM",
                "briva" => "115110211601131",
                "tu_no" => "A.L00.ASB.115",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233688883960142357"
            ],
            [
                "siho_name" => " RAHMAT  SUBANA ",
                "briva" => "115110211601631",
                "tu_no" => "A.L00.ESB.266",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 35000000,
                "transaction_id" => "BRIVA-2233604425617100003"
            ],
            [
                "siho_name" => " H.  TARSA ",
                "briva" => "115110211600841",
                "tu_no" => "A.L00.BSB.038",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-1425320482"
            ],
            [
                "siho_name" => " ODING  SYAHRUDIN ",
                "briva" => "115110211601563",
                "tu_no" => "A.L00.GSB.229",
                "note" => " ANGSURAN  3  CASH  KERAS  (LUNAS) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233604425617140001"
            ],
            [
                "siho_name" => " HJ.  ASTUTI ",
                "briva" => "115110211600962",
                "tu_no" => "A.L00.DSB.284",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 21678300,
                "transaction_id" => "BRIVA-2233604425617120001"
            ],
            [
                "siho_name" => "SURYAMAN",
                "briva" => "115110211601976",
                "tu_no" => "A.L00.CSB.261",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28422660,
                "transaction_id" => "BRIVA-2233604425617040001"
            ],
            [
                "siho_name" => "SURYAMAN",
                "briva" => "115110211601977",
                "tu_no" => "A.L00.CSB.262",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233604425617020001"
            ],
            [
                "siho_name" => "NGADONO",
                "briva" => "115110211601490",
                "tu_no" => "A.L00.BSB.227",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 28326312,
                "transaction_id" => "BRIVA-2233604425617100002"
            ],
            [
                "siho_name" => "NGADONO",
                "briva" => "115110211601489",
                "tu_no" => "A.L00.BSB.226",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 42489468,
                "transaction_id" => "BRIVA-2233604425617100001"
            ],
            [
                "siho_name" => " EUIS  SUPRIATI,   S.KP.MKM ",
                "briva" => 115110211602198,
                "tu_no" => "A.L00.CSB.084",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 02  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233688883719300309"
            ],
            [
                "siho_name" => " EUIS  SUPRIATI,   S.KP.MKM ",
                "briva" => 115110211600439,
                "tu_no" => "A.L00.CSB.083",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233588882710025508"
            ],
            [
                "siho_name" => " EUIS  SUPRIATI,   S.KP.MKM ",
                "briva" => 115110211600438,
                "tu_no" => "A.L00.CSB.082",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 27459180,
                "transaction_id" => "BRIVA-2233588885060125653"
            ],
            [
                "siho_name" => " EUIS  SUPRIATI,   S.KP.MKM ",
                "briva" => 115110211600437,
                "tu_no" => "A.L00.CSB.081",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 41188770,
                "transaction_id" => "BRIVA-2233588883530105675"
            ],
            [
                "siho_name" => " H.  SAMAN ",
                "briva" => "115110211600765",
                "tu_no" => "A.L00.ESB.093",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617000003"
            ],
            [
                "siho_name" => "ASIH",
                "briva" => "115110211600193",
                "tu_no" => "A.L00.ESB.157",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617040005"
            ],
            [
                "siho_name" => "ASIH",
                "briva" => "115110211600194",
                "tu_no" => "A.L00.ESB.158",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54003054,
                "transaction_id" => "BRIVA-2233504425617120006"
            ],
            [
                "siho_name" => "MUHERI",
                "briva" => "115110211601427",
                "tu_no" => "A.L00.GSB.181",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617080005"
            ],
            [
                "siho_name" => " RAMSES  PURBA ",
                "briva" => "115110211601639",
                "tu_no" => "A.L00.FSB.102",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617080004"
            ],
            [
                "siho_name" => " ROMAIDA  SIHITE ",
                "briva" => "115110211601694",
                "tu_no" => "A.L00.GSB.214",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54003054,
                "transaction_id" => "BRIVA-2233504425617120005"
            ],
            [
                "siho_name" => " ROMAIDA  SIHITE ",
                "briva" => "115110211601695",
                "tu_no" => "A.L00.GSB.215",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617140003"
            ],
            [
                "siho_name" => " ANGGIAT  MANIMPAN  P. ",
                "briva" => "115110211600132",
                "tu_no" => "A.L00.GSB.090",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617100007"
            ],
            [
                "siho_name" => " ANGGIAT  MANIMPAN  P. ",
                "briva" => "115110211602197",
                "tu_no" => "A.L00.GSB.081",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617100006"
            ],
            [
                "siho_name" => " RAMSES  PURBA ",
                "briva" => "115110211601641",
                "tu_no" => "A.L00.GSB.050",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617120004"
            ],
            [
                "siho_name" => " RAMSES  PURBA ",
                "briva" => "115110211601640",
                "tu_no" => "A.L00.FSB.187",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617140002"
            ],
            [
                "siho_name" => " ADANG  NUGRAHA ",
                "briva" => "115110211600044",
                "tu_no" => "A.L00.GSB.203",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 19269600,
                "transaction_id" => "BRIVA-2233588885880044412"
            ],
            [
                "siho_name" => " ADANG  NUGRAHA ",
                "briva" => "115110211600045",
                "tu_no" => "A.L00.GSB.204",
                "note" => " ANGSURAN  1  DP  CASH  BERTAHAP ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 28904400,
                "transaction_id" => "BRIVA-2233588886020084482"
            ],
            [
                "siho_name" => " MUH  ZUHRI ",
                "briva" => "115110211601394",
                "tu_no" => "A.L00.FSB.138",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617020001"
            ],
            [
                "siho_name" => " MUH  ZUHRI ",
                "briva" => "115110211601395",
                "tu_no" => "A.L00.HSB.052",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617100003"
            ],
            [
                "siho_name" => " RUDI  RUSADI ",
                "briva" => "115110211601713",
                "tu_no" => "A.L00.GSB.167",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 99900000,
                "transaction_id" => "BRIVA-1423556319"
            ],
            [
                "siho_name" => " RUDI  RUSADI ",
                "briva" => "115110211601712",
                "tu_no" => "A.L00.GSB.166",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 99900000,
                "transaction_id" => "BRIVA-1423553667"
            ],
            [
                "siho_name" => "MASNA",
                "briva" => "115110211601348",
                "tu_no" => "A.L00.ESB.018",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 82377540,
                "transaction_id" => "BRIVA-2233588883300083374"
            ],
            [
                "siho_name" => " ROBERT  SILABAN ",
                "briva" => "115110211601682",
                "tu_no" => "A.L00.GSB.040",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 82377540,
                "transaction_id" => "BRIVA-1423475203"
            ],
            [
                "siho_name" => " LILI  SUTARLI ",
                "briva" => "115110211601081",
                "tu_no" => "A.L00.GSB.187",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 99900000,
                "transaction_id" => "BRIVA-2233504425627100001"
            ],
            [
                "siho_name" => " MANGASA    TUA  SIMAMORA ",
                "briva" => "115110211602196",
                "tu_no" => "A.L00.GSB.093",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617080003"
            ],
            [
                "siho_name" => " MANGASA    TUA  SIMAMORA ",
                "briva" => "115110211601314",
                "tu_no" => "A.L00.FSB.191",
                "note" => " ANGSURAN  1  CASH  KERAS  (DP) ",
                "payment_provider_id" => "BRIVA",
                "kwitansi_date" => " 01  Dec  2022 ",
                "amount" => 54918360,
                "transaction_id" => "BRIVA-2233504425617080002"
            ]
        ];


        $user = User::where('email','admin@admin.com')->first();
            foreach ($historys as $history) {

                $product = Product::where('tu_no', $history['tu_no'])->first();
                if($history['payment_provider_id'] == "BRIVA"){
                    $history['payment_provider_id'] = 3;
                }
                if($history['payment_provider_id'] == "Cash"){
                    $history['payment_provider_id'] = 5;
                }

                $payment_method_id ='aaaa';

                if (str_contains(strtolower($history['note']),'keras')){
                    $payment_method_id = 1;
                }

                if (str_contains(strtolower($history['note']),'bertahap')){
                    $payment_method_id = 2;
                }

                if(blank($product)){

                        if($history['tu_no'] == " test  1 "){
                            return;
                        }
                        dd($history['briva'], $history['tu_no']);
                        Log::info('not found '. $history['briva']. $history['tu_no']);


                } else{
                    $priceList = PriceList::where('area',$product->tu_area)->where('payment_method_id', $payment_method_id)->first();
                    if(blank($priceList)){
                        dd($history['tu_no'],strtolower($history['note']), $history['note'],$payment_method_id, $product->tu_area);
                        Log::info('not found price list '. $history['briva']. $history['tu_no']);
                    } else{
                        $product->update([
                            "price_list_id" => $priceList->id,
                            "briva" => $history['briva'],
                            "siho_name" => $history['siho_name'],
                        ]);
                        Payment::create([
                            'product_id' => $product->id,
                            'note' => $history['note'],
                            'kwitansi_date' => (new Carbon($history['kwitansi_date']))->format('Y-m-d'),
                            'payment_provider_id' => $history['payment_provider_id'],
                            'amount' => $history['amount'],
                            'transaction_id' => $history['transaction_id'],
                            'user_id' => $user->id
                        ]);
                    }

                }
            }
    }
}
