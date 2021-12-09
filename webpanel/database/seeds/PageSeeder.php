<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{

    protected $page;

    /**
     * Class constructor.
     */
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->page->truncate();

        // Create Pages
        $this->createAboutUs();
        $this->createOurQualityPolicy();
        $this->createBoardOfDirectory();
        $this->createHumanResources();
        $this->createPressRoom();
        $this->createAdvertisingFilms();
    }

    private function createAboutUs(): void
    {
        $this->page->create([
            'title'       => [
                'tr' => 'Hakkımızda',
                'en' => 'About Us',
            ],
            'content' => "1985 yılında bir aile şirketi olarak kurulan Doğuş Çay, ilk yatırımını çay sektöründe gerçekleştirdi. Çay ile başlayan faaliyet alanı, ilerleyen yıllarda şeker ve konserve faaliyetleri ile devam etti. İleriyi görebilmek, değişen tüketici tercihleri karşısında doğru stratejiler belirleyip beklentilerin üzerinde ürünlerle piyasada yer almak ve temel ilkeler olarak görülen kalite ve dürüstlükten taviz vermeden büyümek, kurulduğu yıldan bu yana Doğuş Çay’ın gelişiminin temel dinamiklerini oluşturdu. Bu bakış açısıyla yapılan yatırımlarla, Doğuş Çay markası altında üretilen ürünler, oyun kurucu özellik taşıyarak bulundukları sektörde rekabetin belirleyici unsurları haline geldi.
            Doğuş Çay’ın üretim yolculuğu, Türkiye'de özel kuruluşlara üretim izni verilmesi ile başladı. İlk olarak dökme çay ile başlayan yatırımlar, ilerleyen yıllarda poşet çay, yeşil çay ve bitki-meyve çayları üretimleriyle devam etti. Yüksek hedefler doğrultusunda, standartlarını da yüksek tutan Doğuş Çay, 2000 yılından itibaren TSE, ISO 9001, ISO 22000, 15014001 ve OHSAS 18001 belgelerini aldı. AB normlarındaki hijyenik tesislerde el değmeden üretilen ve sürekli laboratuvar testlerinden geçirilen ürünler, Türk damak tadına uyan lezzeti, ideal rengi ve kendine özgü kokusuyla raflarda tüketicinin tercihine sunuldu. Rize'de 5 adet çay işleme ve Ordu'da 1 adet çay paketleme fabrikası ile yıllık 50.000 ton üretim kapasitesine sahip olan Doğuş Çay; yeniliklere hızla uyum sağlayan dinamik yapısı ve sürekli yükselen grafiği ile özel sektörün lider markası konumuna ulaştı. 1994 yılında alınan bir kararla, çay kategorisini desteklemek ve ürün portföyünü genişletmek amacıyla Doğuş Şeker üretimine başlandı. Doğuş Çay, çay ve şeker kategorilerindeki liderliğini gıdanın diğer kollarında da sürdürme ve gıda sektöründe büyüme kararı doğrultusunda, 2008 yılı itibariyle, Doğuş Bahçe markası altında domates salçası üretimi ile faaliyet alanını genişletti. Domates tarımı açısından en verimli arazilerin bulunduğu İzmir'in Ödemiş ilçesinde yer alan, 70 bin m2 üzerine kurulu 7 bin 500 m2 kapalı alana sahip Doğuş Bahçe Salça ve Konserve Fabrikası Türkiye’de en kaliteli domates tarımının gerçekleştirildiği, verimli tarım alanlarının merkezinde yer almaktadır.
            2013 yılında stratejik bir kararla, uluslararası bir satın alma işlemiyle cips kategorisine de giriş yapan Doğuş Çay, Aksaray Organize Sanayi Bölgesi’nde Türkiye’nin en modern cips fabrikalarından birini kurdu. Cips sektörüne yönelik alt yapı ve istihdam çalışmalarını hayata geçiren şirket, Patos, Cipso ve Çerezos markalarının yanı sıra marka portföyüne 2015 yılında ‘Chips Master’ı da ekledi. Cips üretimi halen Doğuş Yiyecek ve İçecek adı altında devam etmektedir.
            Gıda sektöründeki atılımlarını 2016 yılında da sürdüren Doğuş Çay, uzun soluklu ve yoğun bir Ar-Ge çalışmasının sonucunda soğuk çay kategorisine de giriş yaptı. 2015 yılı içerisinde İzmir ilinde 35 milyon TL yatırım yaparak hayata geçirdiği soğuk çay üretim tesisi ile birlikte Doğuş Çay, sıcak çaydaki uzmanlığını soğuk kategorisine taşımış oldu. Doğuş Soğuk Çay, 2016 Nisan itibariyle raflardaki yerini aldı.
            2018 yılında şeker kategorisindeki yatırımlarını sürdürme kararı alan Doğuş Çay, Türkiye’nin en yüksek kotaya sahip şeker fabrikalarından biri olan Afyon Şeker Fabrikası’nı bünyesine katarak faaliyete geçirdi.
            İş ortaklarına ve satış noktalarına en hızlı ve en doğru hizmeti verebilmek için oluşturduğu satış organizasyonu ile de tıpkı ürünlerinde olduğu gibi mükemmelliği hedefleyen Doğuş Çay, halen kalifiye satış ekibi, lojistik gücü, yaygın bayii ağı ve etkin dağıtım sistemiyle Türkiye'nin dört bir yanına ulaşıyor.
            Sorumluluk anlayışını sadece çalışanları, tüketiciler ve iş ortaklarıyla sınırlı tutmayan Doğuş Çay, içinde yaşadığımız toplumun ihtiyaçlarına karşı duyarlılığını kurulduğu günden bu yana muhafaza etmektedir. Doğuş Çay’ın kurucusu Karakan Ailesi’nin eğitim ve sağlık alanında gerçekleştirdiği hayır işleri arasında düzenli olarak üniversite öğrencilerine sağlanan bursun yanı sıra Rize’de Doğuş Çay İlk Öğretim Okulu, Recep Tayyip Erdoğan Üniversitesi ve en son olarak Doğuş Çay Hacer Karakan Onkoloji Hastanesi’nin inşa ve diğer tüm masraflarını karşılanması çalışmaları yer alıyor. Bunun yanı sıra Doğuş Çay’ın doğduğu topraklar olan Rize’de 2016 yılında Tema Vakfı işbirliği ile başlattığı ‘Her Dem Toprak İçin’ projesi de, Rize’nin doğal zenginliği ve en önemli geçim kaynağı olan çayın en iyi şartlarda yetiştirilmesi, aynı lezzet ve kalitede üretilebilmesi için eğitim ve farkındalık çalışmalarını kapsıyor.
            1985'ten itibaren güvenilir bir şirket olarak sektörde var olan Doğuş Çay; sahip çıktığı ilke ve değerleriyle, standartlara ve insan sağlığına gösterdiği özenle, yenilikçi yaklaşımı, rekabetçi yapısı ve kalitesi ile adını gelecekte de yaşatmak için çalışmalarına aralıksız devam ediyor."
        ]);
    }

    private function createOurQualityPolicy(): void
    {
        $this->page->create([
            'title'       => [
                'tr' => 'Kalite Politikamız',
                'en' => 'Our quality policy',
            ],
            'content' => '<h6 class="font-weight-bold">KALİTE - GIDA - ÇEVRE - İŞ SAĞLIĞI ve HELAL GIDA ÜRETİM POLİTİKASI</h6>
            <p>Kaliteli, Gıda Güvenliği İlkelerine Uygun,Helal Olan Hammaddeleri Kullanarak ,Helal Üretim Yapmak,Helal Üretim Yaptığımızı
                Taahhüt Ederiz ve Sağlıklı Ürünler Sunarak, Beklenti Ve İhtiyaçlarını Eksiksiz Ve Zamanında Yerine Getirerek, Bunları Bize
                Ulaştıracakları Kanalları Sürekli Açık Tutarak, Memnuniyetlerine Odaklanıp</p>
            <p>ve</p>
            <p>Doğal kaynakları korumayı, Tüm çevre, sağlık, çalışma mevzuatı, tüzük ve yasalarını takip ederek uymayı,kirliliğin ve
                atıkların kaynağında azaltılması için temiz üretim teknolojilerini kullanarak atığı kaynağında azalmaya, Sürekliliğine
                Yönelik Çalışmalar Yaparak ,</p>
            <p class="font-weight-bold">TÜKETİCİMİZİN,</p>
            <p>Kaliteli, Yenilikçi, Verimli, Rekabetçi , Düzenli ve Helal Ürün ve Hizmetler Sunarak</p>
            <p class="font-weight-bold">İŞ ORTAKLARIMIZIN,</p>
            <p>Sisteme Katkı Sağlayabilecekleri, Uygun Organizasyon Altyapısı İle Düzenli Destek Hizmet Ve Eğitim İmkanları Sağlayarak, Çağdaş Çalışma Ortamı Ve Koşulları Sunarak
                , Ürün Güvenliği, Sağlık ve Çevre duyarlılığı ilkelerini benimseyerek</p>
            <p class="font-weight-bold">ÇALIŞANLARIMIZIN,</p>
            <p>Ticari Ahlak Ve Etik Değerlere Uygun, Adil Ve Sağlam Temellere Oturmuş Bir İşbirliği Yapısı Sağlayarak</p>
            <p class="font-weight-bold">TEDARİKÇİLERİMİZİN,</p>
            <p>Toplumsal Değerlere Saygılı, Çevreye Ve İnsan Sağlığına Duyarlı Ve Yasalara Tümüyle Bağlı Helal Üretim ,Paketleme
                ve Satış Ticari Anlayışı Çerçevesinde Faaliyet Göstererek</p>
            <p class="font-weight-bold">TOPLUMUN,</p>
            <p class="font-weight-bold">ÖRNEK GÖSTERDİĞİ BİR FİRMA OLMAK VE BU DOĞRULTUDA TÜM SÜREÇLERİMİZİ SÜREKLİ DENETLEYİP, İYİLEŞTİREREK
                FAALİYET GÖSTERDİĞİMİZ SÜRECE ÖRNEK BİR FİRMA OLARAK KALMAKTIR.</p>'
        ]);
    }

    private function createBoardOfDirectory(): void
    {
        $yonetimKurulu = $this->page->create([
            'title'       => [
                'tr' => 'Yönetim Kurulu',
                'en' => 'Board of Directors',
            ],
            'content' => ''
        ]);

        $yonetimKurulu->children()->create([
            'title' => [
                'tr' => 'Yönetim Kurulu Üyeleri',
                'en' => 'Board Members',
            ],
            'content' => <<<EOF
                <div id="management">
                    <div class="card p-0 mb-2">
                        <div class="card-header p-0" id="managerOne">
                            <h5 class="mb-0 text-left">
                                <a class="btn btn-link d-flex align-items-center justify-content-between text-left" data-toggle="collapse" data-target="#contentOne" aria-expanded="false" aria-controls="contentOne">
                                    <div>
                                        <span class="font-weight-bold d-block">SÜLEYMAN KARAKAN</span>
                                        <small>Yönetim Kurulu Başkanı</small>
                                    </div>
                                </a>
                            </h5>
                        </div>
                        <div id="contentOne" class="collapse" aria-labelledby="managerOne" data-parent="#management">
                            <div class="card-body">
                                <p>01.01.1955 Rize Doğumlu olan Süleyman KARAKAN eğitimini ortaokulda bırakmış ve Rize ‘de babasının toptancı dükkanında çalışmaya başlayarak o dönemde ticaret hayatına atılmıştır.
                                    Uzun yıllar babasının yanında çalışan Süleyman KARAKAN 1985 yılında erkek kardeşi Cemal Alpaslan KARAKAN ile birlikte Doğu Çay İşletmesi San. ve Tic. A.Ş'yi kurmuş ticaret
                                    hayatına büyük bir adım atmıştır.</p>
                                <p>Doğuş Çay Türkiye’ye Çay sektörü olarak giriş yapmış olmasına rağmen çayın yanında Doğuş Şeker,doğuş salça gibi gıda maddelerinin üretimini de yapmıştır. Türkiye’nin en
                                    büyük 500 şirketi sıralamasında 245.Sırada olan Doğuş çay; 2013 yılında Kraft gıdanın %100 hissesini satın alarak Patos, Cipso ve Çerezos markalarını bünyesine alarak
                                    Aksaray ili organize sanayi bölgesinde CİPS fabrikası kurup Ekonomiye büyük ölçüde katkı sağlamıştır. Satın alma sonrasında cips üretimi Doğuş Yiyecek ve İçecek adı ile
                                    devam ediyor .Doğuş Yiyecek ve Gıda Türkiye’nin en büyük 1000 şirketi sıralamasında 627.sırada yer almaktadır.</p>
                                <p>Süleyman KARAKAN Doğuş Çay olarak birçok (onkoloji hastanesi-okul)alanda yardımlarda bulunmuştur. Doğuş Çay Yönetim Kurulu Başkanı Süleyman Karakan evli ve 3 çocuk babasıdır.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-2">
                        <div class="card-header p-0" id="managerTwo">
                            <h5 class="mb-0 text-left">
                                <a class="btn btn-link d-flex align-items-center justify-content-between text-left" data-toggle="collapse" data-target="#contentTwo" aria-expanded="false" aria-controls="contentTwo">
                                    <div>
                                        <span class="d-block font-weight-bold">ALPASLAN KARAKAN</span>
                                        <small>Yönetim Kurulu Başkan Yardımcısı</small>
                                    </div>
                                </a>
                            </h5>
                        </div>
                        <div id="contentTwo" class="collapse" aria-labelledby="managerTwo" data-parent="#management">
                            <div class="card-body">
                                <p>01.01.1955 Rize Doğumlu olan Süleyman KARAKAN eğitimini ortaokulda bırakmış ve Rize ‘de babasının toptancı dükkanında çalışmaya başlayarak o dönemde ticaret hayatına atılmıştır.
                                    Uzun yıllar babasının yanında çalışan Süleyman KARAKAN 1985 yılında erkek kardeşi Cemal Alpaslan KARAKAN ile birlikte Doğu Çay İşletmesi San. ve Tic. A.Ş'yi kurmuş ticaret
                                    hayatına büyük bir adım atmıştır.</p>
                                <p>Doğuş Çay Türkiye’ye Çay sektörü olarak giriş yapmış olmasına rağmen çayın yanında Doğuş Şeker,doğuş salça gibi gıda maddelerinin üretimini de yapmıştır. Türkiye’nin en
                                    büyük 500 şirketi sıralamasında 245.Sırada olan Doğuş çay; 2013 yılında Kraft gıdanın %100 hissesini satın alarak Patos, Cipso ve Çerezos markalarını bünyesine alarak
                                    Aksaray ili organize sanayi bölgesinde CİPS fabrikası kurup Ekonomiye büyük ölçüde katkı sağlamıştır. Satın alma sonrasında cips üretimi Doğuş Yiyecek ve İçecek adı ile
                                    devam ediyor .Doğuş Yiyecek ve Gıda Türkiye’nin en büyük 1000 şirketi sıralamasında 627.sırada yer almaktadır.</p>
                                <p>Süleyman KARAKAN Doğuş Çay olarak birçok (onkoloji hastanesi-okul)alanda yardımlarda bulunmuştur. Doğuş Çay Yönetim Kurulu Başkanı Süleyman Karakan evli ve 3 çocuk babasıdır.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-2">
                        <div class="card-header p-0" id="managerThree">
                            <h5 class="mb-0 text-left">
                                <a class="btn btn-link d-flex align-items-center justify-content-between text-left" data-toggle="collapse" data-target="#contentThree" aria-expanded="false" aria-controls="contentThree">
                                    <div>
                                        <span class="d-block font-weight-bold">HARİKA BATALLI</span>
                                        <small>Yönetim Kurulu Üyesi</small>
                                    </div>
                                </a>
                            </h5>
                        </div>
                        <div id="contentThree" class="collapse" aria-labelledby="managerTwo" data-parent="#management">
                            <div class="card-body">
                                <p>01.01.1955 Rize Doğumlu olan Süleyman KARAKAN eğitimini ortaokulda bırakmış ve Rize ‘de babasının toptancı dükkanında çalışmaya başlayarak o dönemde ticaret hayatına atılmıştır.
                                    Uzun yıllar babasının yanında çalışan Süleyman KARAKAN 1985 yılında erkek kardeşi Cemal Alpaslan KARAKAN ile birlikte Doğu Çay İşletmesi San. ve Tic. A.Ş'yi kurmuş ticaret
                                    hayatına büyük bir adım atmıştır.</p>
                                <p>Doğuş Çay Türkiye’ye Çay sektörü olarak giriş yapmış olmasına rağmen çayın yanında Doğuş Şeker,doğuş salça gibi gıda maddelerinin üretimini de yapmıştır. Türkiye’nin en
                                    büyük 500 şirketi sıralamasında 245.Sırada olan Doğuş çay; 2013 yılında Kraft gıdanın %100 hissesini satın alarak Patos, Cipso ve Çerezos markalarını bünyesine alarak
                                    Aksaray ili organize sanayi bölgesinde CİPS fabrikası kurup Ekonomiye büyük ölçüde katkı sağlamıştır. Satın alma sonrasında cips üretimi Doğuş Yiyecek ve İçecek adı ile
                                    devam ediyor .Doğuş Yiyecek ve Gıda Türkiye’nin en büyük 1000 şirketi sıralamasında 627.sırada yer almaktadır.</p>
                                <p>Süleyman KARAKAN Doğuş Çay olarak birçok (onkoloji hastanesi-okul)alanda yardımlarda bulunmuştur. Doğuş Çay Yönetim Kurulu Başkanı Süleyman Karakan evli ve 3 çocuk babasıdır.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0 mb-2">
                        <div class="card-header p-0" id="managerFour">
                            <h5 class="mb-0 text-left">
                                <a class="btn btn-link d-flex align-items-center justify-content-between text-left" data-toggle="collapse" data-target="#contentFour" aria-expanded="false" aria-controls="contentFour">
                                    <div>
                                        <span class="d-block font-weight-bold">BİLGE KAAN KARAKAN</span>
                                        <small>Yönetim Kurulu Üyesi</small>
                                    </div>
                                </a>
                            </h5>
                        </div>
                        <div id="contentFour" class="collapse" aria-labelledby="managerTwo" data-parent="#management">
                            <div class="card-body">
                                <p>01.01.1955 Rize Doğumlu olan Süleyman KARAKAN eğitimini ortaokulda bırakmış ve Rize ‘de babasının toptancı dükkanında çalışmaya başlayarak o dönemde ticaret hayatına atılmıştır.
                                    Uzun yıllar babasının yanında çalışan Süleyman KARAKAN 1985 yılında erkek kardeşi Cemal Alpaslan KARAKAN ile birlikte Doğu Çay İşletmesi San. ve Tic. A.Ş'yi kurmuş ticaret
                                    hayatına büyük bir adım atmıştır.</p>
                                <p>Doğuş Çay Türkiye’ye Çay sektörü olarak giriş yapmış olmasına rağmen çayın yanında Doğuş Şeker,doğuş salça gibi gıda maddelerinin üretimini de yapmıştır. Türkiye’nin en
                                    büyük 500 şirketi sıralamasında 245.Sırada olan Doğuş çay; 2013 yılında Kraft gıdanın %100 hissesini satın alarak Patos, Cipso ve Çerezos markalarını bünyesine alarak
                                    Aksaray ili organize sanayi bölgesinde CİPS fabrikası kurup Ekonomiye büyük ölçüde katkı sağlamıştır. Satın alma sonrasında cips üretimi Doğuş Yiyecek ve İçecek adı ile
                                    devam ediyor .Doğuş Yiyecek ve Gıda Türkiye’nin en büyük 1000 şirketi sıralamasında 627.sırada yer almaktadır.</p>
                                <p>Süleyman KARAKAN Doğuş Çay olarak birçok (onkoloji hastanesi-okul)alanda yardımlarda bulunmuştur. Doğuş Çay Yönetim Kurulu Başkanı Süleyman Karakan evli ve 3 çocuk babasıdır.</p>
                            </div>
                        </div>
                    </div>
                </div>
            EOF
        ]);

        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Organizasyon Şeması',
                'en' => 'Organization Chart',
            ],
            'content' => '<img class="w-100" src="' . asset('images/organizasyon_sema.png') . '" alt="organizasyon şeması">',
        ]);

        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Başkanın Mesajı',
                'en' => "President's Message",
            ],
            'content' => [
                'tr' => 'Güncelleniyor...',
                'en' => 'Updating...',
            ],
        ]);

        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Misyon / Vizyon',
                'en' => "Mission / Vision",
            ],
            'content' => <<<EOL
                <p class="font-weight-bold">MİSYONUMUZ</p>
                <p>Tamamen yerli sermayeli bir şirket olarak bugüne kadar ismimizle birlikte anılan kalite ve dürüstlük ilkelerinin yanı sıra
                    yenilikçilik anlayışla birlikte Türkiye ekonomisine ve istihdamına büyük katkı veren bir markadır.</p>
                <p class="font-weight-bold">VİZYON</p>
                <p>Doğuş Çay olarak çalışanları, üreticisi ve tedarikçileriyle birlikte büyüyen ve tüketici odaklı bir yaklaşımla odaklandığı
                    ürün gruplarında yerel ve bölgesel bir güç olmaktır. Geçmişten gelen deneyim ile mevcut satış ve dağıtım ağının daha da geliştirilmesiyle birlikte
                    inovatif ürünlerle birlikte tüketicilerimizle buluşmayı hedeflemektedir.</p>
                <p class="font-weight-bold">DEĞERLERİMİZ VE İŞ PRENSİPLERİMİZ</p>
                <ul>
                    <li class="d-block">- Yeniliklere açık ve önder olmak</li>
                    <li class="d-block">- Karlı ve sürdürebilir büyüme</li>
                    <li class="d-block">- Sektöre ve ekonomiye katkı sağlamak</li>
                    <li class="d-block">- Dürüst ve güvenilir olmak</li>
                    <li class="d-block">- Kaliteden ödün vermemek</li>
                    <li class="d-block">- En büyük gücümüz insan kaynağımız</li>
                </ul>
            EOL
        ]);

        $komiteler = $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Komiteler',
                'en' => 'Committees',
            ],
            'content' => '',
        ]);

        $komiteler->children()->create([
            'title'       => [
                'tr' => 'Denetim Komitesi',
                'en' => 'Audit Committee',
            ],
            'content' => <<<EOL
                <div><span class="font-weight-bold">Başkan: </span><span>HARİKA BATALLI</span></div>
                <div><span class="font-weight-bold">Üye: </span><span>BİLGE KAAN KARAKAN</span></div>
                <div class="mt-4">
                    <h5 class="subtitle">Amaç</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Kurul şirketin finansal ve operasyonel faaliyetlerinin yürürlükteki yasal düzenleme ve mevzuata uygun, sağlıklı bir biçimde yürütülmesi
                            amacına yönelik olarak; iç kontrol ve denetim sisteminin işleyişini ve etkinliğinin gözetimini, yasalara ve yönetmeliklere uygunluğunu sağlamak amacıyla görev yapar.</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="subtitle">Yapısı ve Oluşumu</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> En az iki kişiden oluşturulan Denetim Kurulu Yönetim Kuruluna bağlı olarak çalışır ve üç yıl için seçilir.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Üyelerden en az birisi mali işler alanında deneyim ve eğitime sahip olması esastır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Bağımsız Yönetim Kurulu üyesi bulunması durumunda en az bir bağımsız yönetim kurulu üyesinin kurul üyesi olarak atanması esastır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Mali işler deneyimine sahip Bağımsız Yönetim Kurulu üyesi bulunması durumunda bağımsız Yönetim Kurulu Üyesi komite başkanlığını üstlenir.</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="subtitle">Faaliyet Esasları</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Mali dönemlere bağlı olarak üç ayda bir en az yılda dört kez toplanır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Komite kararları tavsiye niteliğinde olup, karar mercii Yönetim Kuruludur.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Denetim Komitesi, Kurumsal Yönetim Komitesi ile işbirliği içinde çalışır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Yönetim Kurulu Şirket Genel Sekreteri denetim komitesinin etkin çalışabilmesi için gerekli bilgileri ve dokümanları kurula zamanında iletmekten ve kurul toplantı
                            tutanaklarının kayıt altına alınmasından sorumludur.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Mali işler yöneticisi denetim komitesi toplantısına davet edilir ve düzenli olarak katılır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç Denetçi kurula bağlı olarak görev yapar.</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="subtitle">Görevleri</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Finansal raporların kalite ve etkinliğini değerlendirmek,</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Ara dönem ve yıllık finansal tablolarının muhasebe ilkeleri ile gerçeğe uygunluğunun ve doğruluğunun denetimi ve onayı</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Bağımsız denetimle ilgili denetim şirketinin seçimi, sözleşmelerinin hazırlanması ve onayı, bağımsız denetim faaliyetlerinin etkinliğinin denetimi</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç denetim planının hazırlanmasını sağlama ve onaylama,</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Periyodik (çeyreklerde) olarak hazırlanan iç denetim raporlarını kontrol etme yönetim kurulunu bu konuda bilgilendirme</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç kontrol ve denetim sisteminin etkinliğini, işleyişini ve elde edilen bulguları izleme, değerlendirme ve Yönetim Kuruluna raporlanması</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç kontrol ve iç denetim raporlarını inceleme ve onaylama</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç denetçi seçim, atama ve işten çıkarma işlemlerinin aksaksız yapılmasını sağlama ve onaylama,</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İlgi alanı ile ilgili şikayetleri değerlendirme ve çözümleme</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Çıkar çatışması yönetim sürecinin sağlıklı biçimde işleyişini sağlama</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Şirket çalışanlarının, muhasebe, raporlama, iç kontrol ve bağımsız denetim konularındaki bildirimlerinin gizlilik ilkesi çerçevesinde değerlendirilmesi konularında uygulanacak yöntem ve kriterleri belirlemek.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Yıllık Faaliyet Raporu kapsam ve içeriği konusunda Yönetim Kuruluna görüş bildirme, önerilerde bulunmak.</li>
                    </ul>
                </div>
            EOL
        ]);

        $komiteler->children()->create([
            'title'       => [
                'tr' => 'Kurumsal Yönetim Komitesi',
                'en' => 'Corporate Governance Committee',
            ],
            'content' => <<<EOL
                <div><span class="font-weight-bold">Başkan: </span><span>HARİKA BATALLI</span></div>
                <div><span class="font-weight-bold">Üye: </span><span>BİLGE KAAN KARAKAN</span></div>
                <div class="mt-4">
                    <h5 class="subtitle">Amaç</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Kurul şirketin finansal ve operasyonel faaliyetlerinin yürürlükteki yasal düzenleme ve mevzuata uygun, sağlıklı bir biçimde yürütülmesi
                            amacına yönelik olarak; iç kontrol ve denetim sisteminin işleyişini ve etkinliğinin gözetimini, yasalara ve yönetmeliklere uygunluğunu sağlamak amacıyla görev yapar.</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="subtitle">Yapısı ve Oluşumu</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> En az iki kişiden oluşturulan Denetim Kurulu Yönetim Kuruluna bağlı olarak çalışır ve üç yıl için seçilir.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Üyelerden en az birisi mali işler alanında deneyim ve eğitime sahip olması esastır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Bağımsız Yönetim Kurulu üyesi bulunması durumunda en az bir bağımsız yönetim kurulu üyesinin kurul üyesi olarak atanması esastır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Mali işler deneyimine sahip Bağımsız Yönetim Kurulu üyesi bulunması durumunda bağımsız Yönetim Kurulu Üyesi komite başkanlığını üstlenir.</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="subtitle">Faaliyet Esasları</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Mali dönemlere bağlı olarak üç ayda bir en az yılda dört kez toplanır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Komite kararları tavsiye niteliğinde olup, karar mercii Yönetim Kuruludur.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Denetim Komitesi, Kurumsal Yönetim Komitesi ile işbirliği içinde çalışır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Yönetim Kurulu Şirket Genel Sekreteri denetim komitesinin etkin çalışabilmesi için gerekli bilgileri ve dokümanları kurula zamanında iletmekten ve kurul toplantı
                            tutanaklarının kayıt altına alınmasından sorumludur.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Mali işler yöneticisi denetim komitesi toplantısına davet edilir ve düzenli olarak katılır.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç Denetçi kurula bağlı olarak görev yapar.</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h5 class="subtitle">Görevleri</h5>
                    <ul>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Finansal raporların kalite ve etkinliğini değerlendirmek,</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Ara dönem ve yıllık finansal tablolarının muhasebe ilkeleri ile gerçeğe uygunluğunun ve doğruluğunun denetimi ve onayı</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Bağımsız denetimle ilgili denetim şirketinin seçimi, sözleşmelerinin hazırlanması ve onayı, bağımsız denetim faaliyetlerinin etkinliğinin denetimi</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç denetim planının hazırlanmasını sağlama ve onaylama,</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Periyodik (çeyreklerde) olarak hazırlanan iç denetim raporlarını kontrol etme yönetim kurulunu bu konuda bilgilendirme</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç kontrol ve denetim sisteminin etkinliğini, işleyişini ve elde edilen bulguları izleme, değerlendirme ve Yönetim Kuruluna raporlanması</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç kontrol ve iç denetim raporlarını inceleme ve onaylama</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İç denetçi seçim, atama ve işten çıkarma işlemlerinin aksaksız yapılmasını sağlama ve onaylama,</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İlgi alanı ile ilgili şikayetleri değerlendirme ve çözümleme</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Çıkar çatışması yönetim sürecinin sağlıklı biçimde işleyişini sağlama</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Şirket çalışanlarının, muhasebe, raporlama, iç kontrol ve bağımsız denetim konularındaki bildirimlerinin gizlilik ilkesi çerçevesinde değerlendirilmesi konularında uygulanacak yöntem ve kriterleri belirlemek.</li>
                        <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Yıllık Faaliyet Raporu kapsam ve içeriği konusunda Yönetim Kuruluna görüş bildirme, önerilerde bulunmak.</li>
                    </ul>
                </div>
            EOL
        ]);

        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Etik Kurallar',
                'en' => 'Ethical Rules',
            ],
            'content' => [
                'tr' => 'Güncelleniyor...',
                'en' => 'Updating...',
            ],
        ]);

        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Menfaat Sahipleri Politikası',
                'en' => 'Stakeholders Policy',
            ],
            'content' => [
                'tr' => 'Güncelleniyor...',
                'en' => 'Updating...',
            ],
        ]);

        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Çıkar Çatışması Politikası',
                'en' => 'Conflict of Interest Policy',
            ],
            'content' => [
                'tr' => 'Güncelleniyor...',
                'en' => 'Updating...',
            ],
        ]);

        $logo = asset('images/logo.png');
        $image2 = asset('images/herdemtoprakicin.png');
        $yonetimKurulu->children()->create([
            'title'       => [
                'tr' => 'Sosyal Sorumluluk',
                'en' => 'Social Responsibility',
            ],
            'content' => <<<PHP
                <div>
                    <img style="max-width: 150px" src="{$logo}" alt="#">
                    <img style="max-width: 150px" src="{$image2}" alt="#">
                    <p class="mt-3">TEMA VAKFI VE DOĞUŞ ÇAY’IN BAŞLATTIĞI ‘HER DEM TOPRAK İÇİN’ PROJESİ KAPSAMINDA RİZE’DE SÜRDÜRÜLEBİLİR ÇAY TARIMI EĞİTİMLERİ VERİLECEK</p>
                </div>
                <div class="mt-4">
                    <p class="subtitle">DOĞUŞ ÇAY, TEMA İŞBİRLİĞİ İLE ÇAY TARIMINA SAHİP ÇIKIYOR</p>
                    <p class="font-weight-bold">Dünyanın sayılı çay üretim merkezlerinden biri olan Rize’de, sürdürülebilir çay tarımının temelini oluşturan toprak sağlığının koruması konusunda önemli bir proje başlatıldı. Türkiye’de toprak varlığının korunması alanında referans sivil toplum kuruluşu olan TEMA Vakfı, bu alandaki uzmanlığını Türkiye’nin en büyük özel sektör çay üreticisi Doğuş Çay ile birleştirdi. Doğuş Çay’ın ‘Her Dem Toprak İçin’ adıyla TEMA Vakfı ile hayata geçireceği farkındalık projesinin tanıtım toplantısı Rize yerel basın temsilcilerinin katıldığı bir basın buluşması ile gerçekleştirildi.</p>
                    <p>Rize’nin doğal zenginliği ve en önemli geçim kaynağı olan çayın en iyi şartlarda yetiştirilmesi, aynı lezzet ve kalitede üretilebilmesi için Türkiye’nin en büyük özel sektör çay kuruluşu olan Doğuş Çay, doğduğu topraklarda önemli bir sosyal sorumluluk projesine imza atmaya hazırlanıyor. Türkiye’nin toprak ve doğal varlıklarının korunması alanında uzun yıllara dayanan bilgi ve deneyimle önemli projeler yürüten TEMA Vakfı’nın işbirliği ile gerçekleşecek olan ‘Her Dem Toprak İçin’ projesi, Doğuş Çay Yönetim Kurulu Üyesi Harika Karakan Batallı, TEMA Vakfı Yönetim Kurulu Başkanı Deniz Ataç ve TEMA Vakfı Rize Temsilcisi Nevzat Özer’in de katıldığı bir basın buluşmasıyla Rize’de tanıtıldı.</p>
                    <p>TEMA Vakfı Başkanı Deniz Ataç Rize’de çay tarımının sürdürülebilirliğini sağlamak için toprağı korumayı hedefleyen bir eğitim projesi için Doğuş Çay’la işbirliği yapmaktan büyük mutluluk duyduklarını vurgulayarak şunları söyledi:</p>
                    <p>“Doğu Karadeniz’de çay tarımının kuşaklar boyu devam etmesinin odağında toprak sağlığının ve çay bahçelerine komşu ekosistemlerin korunması yer alıyor. Bu konuda güçlerimizi birleştirmemiz gerekiyor. TEMA Vakfı kurulduğu 1992 yılından bu yana yaşamın kaynağı toprağı korumanın yaşamı korumak olduğu ilkesiyle hareket etti. Toprak varlığını korumak yalnızca erozyonu önlemekle sınırlı değil, toprak ekosisteminin tüm bileşenleri ile bütünsel olarak korunmasıdır. Bu da sürdürülebilir yaşamın temelini oluşturur. Doğu Karadeniz Bölgesi’nde toprak sağlığını ve komşu ekosistemleri koruyan sürdürülebilir çay tarımı yapılmasına katkıda bulunmak için Doğuş Çay işbirliği ile yürüteceğimiz ‘Her Dem Toprak İçin’ projesinin temel hedefi Doğu Karadeniz’de çay bahçelerinde toprak sağlığı konusunda farkındalık yaratmak” dedi.</p>
                    <p>TEMA Vakfı Yönetim Kurulu Başkanı Ataç, şöyle devam etti: “Yapılan araştırmalar, çay üreticisini birebirde dinlediğimizde yapılan aktarımlar Rize’de çay bahçelerinde toprağın giderek asitleştiğini, çay bitkisinin uygun yetişme koşullarının dışına çıkmaya başladığını ortaya koyuyor. Topraktaki asitliğin artmasıyla beraber toprağın fiziksel ve organik yapısında değişmeler meydana geliyor. Toprağın su tutma kapasitesi düşüyor, havalanması azalıyor, toprağın geçirgenliği giderek azalıyor. Bu da çay tarımının sürdürülebilirliğini, çayın kalite ve verimini tehdit ediyor. Bizim bu projeyle öncelikli hedefimiz, bu konuda tüm paydaşlar nezdinde farkındalık yaratmak. Üreticiden başlayarak, bölgede çay tarımının içinde olan, etki sahibi kim varsa, tüm kesimlere bu alandaki bilimsel gerçekleri ve alınabilecek tedbirleri aktarmak. Doğu Karadeniz’de çayın bugün de, gelecekte de bölge insanlarına katkısının devamı için güçlerimizi birleştirmemiz gerekiyor” dedi.</p>
                </div>
                <div class="mt-4">
                    <p class="subtitle">“Toprak yoksa, çay da yok; bu projenin hedefi çözümün üreticiyle birlikte bulunması”</p>
                    <p>1960’lı yıllarda tüm Türkiye’de çay bahçelerinin %88,8’inin çay bitkisine uygun pH değerlerine sahipken 2011 yılında bu oranın %13,7’ye düştüğü bilgisini paylaşan Deniz Ataç, projenin önemine dikkat çekerek, çay üretimi yapılan topraktaki değişimi şu şekilde açıkladı: “Özellikle 1970’li yıllar sonrasında çay bahçelerinde kullanılan gübre çeşitleri çay topraklarında önemli değişikliklere neden oldu. Çay bahçelerinde toprakları çok asitli hale dönüştürdü. Asitleşme ile birlikte toprağa hayat veren canlılar giderek azaldı. Yüksek doz gübre kullanımı üreticilerin maddi olarak kayba uğramalarının yanında toprak sağlığının bozulmasına ve akarsularda nitrat kirliliğine neden oluyor. Toprağın sürdürülebilir yönetimi, sürdürülebilir çay üretiminin temelini teşkil ettiğinden toprak sağlığını iyileştirici ve çay bitkisinin ihtiyaçlarını karşılayan sürdürülebilir çay tarımı faaliyetlerinin bölgede yaygınlaşması acil önem taşıyor. Unutmayalım ki, toprak yoksa çay da yok.” Çay tarımında en acil konunun toprağın sağlığı olduğunu belirten Deniz Ataç, şöyle devam etti: “Bu projeye değer katan en önemli unsurların başında eğitim çalışmalarının etkileşim merkezinde kurgulanmış olması. Eğitime katılacak gruplara tek taraflı bilgi aktarmayı değil, onların deneyimlerini de dinleyerek, uzman bilgileriyle birleştirerek, birlikte en doğru çözümlere ulaşmayı istiyoruz. Toprağa dokunurken çay topraklarında üretici gözlemlerini temel alacağız. Kendi dile getirdikleri gözlemler üzerinden düşünmelerine imkan vererek, öncelikle sorunun farkında olmalarını sağlayacağız. Farkındalık beraberinde çare aramayı getirecek. Çareleri de üreticilerle beraber üreterek bu meseleyi gerçek anlamda sahiplenmesi mümkün olacak.”</p>
                </div>
                <div class="mt-4">
                    <p class="subtitle">Harika Karakan Batallı: “Doğduğumuz topraklarda çayın ilelebet yetişmesi hem hayalimiz hem sorumluluğumuz”</p>
                    <p>Doğuş Çay’ın temellerinin 1985 yılında Rize’de atıldığını, bu topraklarda doğup bu topraklardan marka çıkarmış bir kuruluş olarak, çayın yaşamlarının merkezinde olmaya devam ettiğini belirten Doğuş Çay Yönetim Kurulu Üyesi Harika Karakan Batallı, ‘Her Dem Toprak İçin’ projesinin bölgeye duydukları hassasiyetin bir yansıması olduğunu vurguladı. Çayın, Doğu Karadeniz Bölgesi’nin en önemli ürünlerinden biri olduğunu hatırlatan Batallı, “Doğduğumuz topraklarda çayın ilelebet yetişmesi hem hayalimiz hem de sorumluluğumuz” dedi. Türkiye’nin dünyada çay tüketiminde birinci, üretiminde beşinci sırada olduğu bilgisini paylaşan Batallı, “Çay, bölge insanı ve ekonomisi için adeta yaşamsal değerde bir ürün. Bir asra yakın geçmişi olan çay, aynı zamanda sosyolojik bir unsur. Çay tarımının sürdürülebilirliği, etkin ve verimli olması tüm kesimler için son derece önemli bir öncelik” dedi.</p>
                </div>
                <div class="mt-4">
                    <p class="subtitle">“Çay tarımı yapılan topraklar sertleşiyor, acil tedbir gerekiyor”</p>
                    <p>Doğuş Çay olarak, TEMA ile başlattıkları ‘Her Dem Toprak İçin’ projesiyle, bir yıl boyunca üreticilerin ve üreticiyi etkileyen tüm kesimlerin toprakla ilgili farkındalığını artırmayı, topraklarında yaşanan sıkıntının çözüm yollarını görmelerini sağlamayı hedeflediklerini belirten Harika Karakan Batallı; şöyle devam etti: “Biz Doğuş Çay olarak, üreticilerle sürekli temas halindeyiz. Saha eksperlerimiz, alım uzmanlarımız, mühendislerimizin çay tarımı yapan kişilerin sorunlarını, topraktaki ve çayın kendisindeki verim seyrini çok yakından takip ediyor. Rize’de ve genel olarak Doğu Karadeniz’de üreticilerle konuştuğumuzda, artık neredeyse hepsi topraklarının giderek daha da sertleştiğini söylüyor. Çoğu üretici, uzun zamandır ‘Toprakta solucan bile yok’ diyor. Bu da, topraktaki mikroorganizma yapısında dahi değişimler olduğunu, toprağın fiziksel özelliklerinin kötüye gittiğini ortaya koyuyor. Tedbir alınmaması durumunda, Doğu Karadeniz’de gelecekte çayın veriminin ve kalitesinin giderek düşmesi tehlikesiyle karşı karşıyayız.”</p>
                </div>
                <div class="mt-4">
                    <p class="subtitle">“600 üreticinin yanı sıra kadınlara, çocuklara, öğretmen, din adamı ve eksperlere de eğitim verilecek”</p>
                    <p>Doğuş Çay olarak, TEMA işbirliğiyle başlattıkları ve bir yıl sürecek projenin merkezinde her biri birer ‘mikro aile işletmesi’ olarak tanımlanan çay üreticilerinin bulunduğunu belirten Harika Karakan Batallı, proje süresince, 600 üreticinin özel olarak kurgulanan bir eğitim programından yararlanmasının öngörüldüğünü açıkladı. Bu eğitim programından yararlanacak kesimler arasında üreticilerin yanı sıra onların sosyal çevresinde yer alan kadınlar ve çocuklar ile etki lideri olarak tanımlanan öğretmen, din görevlisi ve eksperlerin de bulunduğunu ifade eden Batallı, “Projenin hedef kitlesindeki tüm kesimlere çay bitkisinin ekolojisine uygun toprak koşulları, bitki besleme, gübreleme, budama, hasat ve toprak yönetimi konusunda bilgilendirme çalışmaları teorik ve pratik yöntemlerle TEMA tarafından sunulacak. Projede Doğuş Çay profesyonelleri ve uzmanları da aktif olarak görev alacak.</p>
                </div>
            PHP
        ]);
    }

    public function createHumanResources(): void
    {
        $this->page->create([
            'title'       => [
                'tr' => 'İnsan Kaynakları',
                'en' => 'Human Resources',
            ],
            'content' => '<p>Adil değerlendirme ile çalışanlara hak ettiği değeri vermek, mutlu huzurlu bir iş ortamı oluşturmak, çalışanların gelişimine olanak sunarak yaratıcılığı ön plana çıkarmak ve bunu sürekli kılmak yönetim anlayışımızdır.</p>
            <div class="mt-4">
            <p class="subtitle">Temel İlkeler</p>
            <p class="font-weight-bold"><em>Doğuş Çay Grubu şirketlerinde;</em></p>
            <ul>
                <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Bireye saygının temel alındığı bir iş ortamının yaratılması öncelikli hedeflerden birisidir.</li>
                <li class="d-block"><i class="fa fa-arrow-circle-right"></i> Tüm çalışanların birbirinin hak ve onuruna saygı duymakla sorumlu olduğunu anlamasını sağlayacak uygulamalara ağırlık verilir.</li>
                <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İşe alım, ücretlendirme, performans değerlendirme, eğitim, görevlendirme gibi tüm İnsan Kaynakları süreçleri çalışanlar arasında fırsat eşitliği sağlayacak ve herhangi bir ayrıma fırsat vermeyecek biçimde tasarlanmıştır.</li>
                <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İş başvurularının duyurusu fırsat eşitliğini sağlayacak biçimde yapılır. İş başvuru değerlendirme ve işe alım süreci düşünme tarzı, milliyet, dil, din, etnik köken ve cinsiyet ayrımı yapılmadan yürütülür</li>
                <li class="d-block"><i class="fa fa-arrow-circle-right"></i> İşe alım süreci doğru işe doğru insan ilkesine dayalı olarak geliştirilmiştir. Şirket içi görevlendirmeler ve terfiler performansa dayalı olarak yapılır.</li>
                <hr>
            </ul>
            </div>',
        ]);
    }

    public function createPressRoom(): void
    {
        $this->page->create([
            'title'       => [
                'tr' => 'Basın Odası',
                'en' => 'Press Room',
            ],
            'content' => [
                'tr' => 'Güncelleniyor...',
                'en' => 'Updating...',
            ],
        ]);
    }

    public function createAdvertisingFilms(): void
    {
        $this->page->create([
            'title'       => [
                'tr' => 'Reklam Filmi',
                'en' => 'Advertising Films',
            ],
            'content' => [
                'tr' => 'Güncelleniyor...',
                'en' => 'Updating...',
            ],
        ]);
    }
}
