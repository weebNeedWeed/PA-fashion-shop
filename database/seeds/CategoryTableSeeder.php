<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $category1 = new Category();

    $category1->name = "Áo nữ";
    $category1->slug = "ao-nu";

    $category1->save();

    $aoNu = [
      [
        "name" => "Áo thun nữ",
        "slug" => "ao-thun-nu",
        "description" =>
        "-Chất liệu: thun cotton co dãn, dày dặn, mặc mát và thấm hút mồ hôi, may chuẩn, hình in chất lượng như mẫu.<br>-Mực in bền màu, thấm sâu vào từng sợi vải, không lem không bong tróc.<br>-Size: freesize, form rộng.",
        "price" => 79000,
        "image" => "/images/products/1.png",
      ],
      [
        "name" => "Áo sơ mi nữ",
        "slug" => "ao-so-mi-nu",
        "description" =>
        "-Chất liệu: lụa chéo ý (không nhăn, dày dặn, thời trang), giặt thoải mái, không bai xù.<br>-Size: đủ loại từ size S đến size L (từ dưới 48kg đến 62kg).Kĩ thuật may: đường may chuẩn chỉnh, tỉ mỉ, chắc chắn. ",
        "price" => 99000,
        "image" => "/images/products/2.png",
      ],
      [
        "name" => "Áo coptop nữ",
        "slug" => "ao-coptop-nu",
        "description" =>
        "Chất liệu: thun borip, co giãn tốt, thấm hút mồ hôi tốt.<br>-Kiểu dáng: áo tay ngắn, cổ chữ V, from croptop.<br>-Áo được thiết kế đẹp, chuẩn form, đường may sắc xảo, không có chỉ dư chỉ thừa.",
        "price" => 62000,
        "image" => "/images/products/3.png",
      ],
      [
        "name" => "Áo kiểu nữ",
        "slug" => "ao-kieu-nu",
        "description" =>
        "-Chất liệu: voan, mịn mát.<br>-Size: form rũ theo dáng người, phù hợp vóc dáng size S, M.<br>-Kiểu dáng: áo tay ngắn, cổ áo sơ mi mềm.<br>-Kĩ thuật may: đường may kĩ càng, tỉ mỉ. ",
        "price" => 169000,
        "image" => "/images/products/4.png",
      ],
      [
        "name" => "Áo khoác len nữ",
        "slug" => "ao-khoac-len-nu",
        "description" =>
        "-Chất liệu: len dày dặn (thích hợp mặc cho mùa thu đông), sợi len cực mịn tạo cảm giác thoải mái.<br>Form áo rộng rãi, thoải mái.<br>-Phong cách: thể thao, cơ bản, boho, hàn quốc, tối giản. ",
        "price" => 215000,
        "image" => "/images/products/5.png",
      ],
      [
        "name" => "Áo khoác nữ",
        "slug" => "ao-khoac-nu",
        "description" =>
        "-Chất liệu: nỉ bông cotton, dày mịn, ấm áp.<br>Hoodie zip form rộng chuẩn cực đẹp.<br>Size: freesize (cao dưới 1m75 và nặng dưới 75kg).<br>-Thiết kế: áo hoodie với thân áo rộng rãi, tay áo dài và rộng, bo cổ tay.<br>-Kĩ thuật may: đường chỉ may chắc chắn, túi áo phía trước cực tiện dụng. ",
        "price" => 99000,
        "image" => "/images/products/6.png",
      ],
      [
        "name" => "Áo khoác croptop nữ",
        "slug" => "ao-khoac-croptop-nu",
        "description" =>
        "-Chất liệu: nỉ lót da cá và nỉ lót lông, thấm hút mồ hôi, mặc hè không bị nóng.<br>-Size: freesize (dưới 60kg tùy chiều cao).<br>-Form áo thụng cánh dơi nên rộng chiều ngang, khi mặc sẽ rủ 2 bên xuống không bị phồng to, dễ mặc không kén dáng.<br>-Style: dễ thương, năng động, cá tính, Hàn Quốc, trẻ trung.<br>-Kĩ thuật may: đường may kỹ, đường thêu in nhiệt sắt nét. ",
        "price" => 125000,
        "image" => "/images/products/7.png",
      ],
    ];

    $category1->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $aoNu)
    );

    $category2 = new Category();

    $category2->name = "Quần nữ";
    $category2->slug = "quan-nu";

    $category2->save();

    $quanNu = [
      [
        "name" => "Quần jean nữ ống rộng",
        "slug" => "quan-jean-nu-ong-rong",
        "description" =>
        "-Chất liệu: vải jeans bò đẹp và dày dặn (không ra màu khi giặt, không co giãn thoải mái).<br>-Size: có size S(40-44kg), M(45-49kg), L(50-55kg) tùy chiều cao.<br>-Kĩ thuật may: đường chỉ may tinh tế và tỉ mỉ.<br>-Kiểu dáng: quần bò jean ống rộng lưng cao, eo bản cao, 1 nút cài. ",
        "price" => 139000,
        "image" => "/images/products/8.png",
      ],
      [
        "name" => "Quần short nữ",
        "slug" => "quan-short-nu",
        "description" =>
        "-Chất liệu: nhung nổi, mát mẻ, thấm hút mồ hôi tốt, có độ xốp nhất định.<br>-Kích thước: từ size S đến size XL (nặng dưới 45kg đến dưới 60kg).<br>Kiểu dáng: quần short nữ ống rộng lưng cao, xếp ly mặt trước, có khóa kéo, 1 khuy cài.<br>-Kĩ thuật may: đường may đẹp, chắc chắn, tỉ mỉ.<br>-Phong cách: thể thao, cơ bản, Hàn Quốc, đường phố. ",
        "price" => 115000,
        "image" => "/images/products/9.png",
      ],
      [
        "name" => "Quần yếm jeans nữ",
        "slug" => "quan-yem-jeans-nu",
        "description" =>
        "-Chất liệu: vải denim cotton, thoáng mát, mềm mại, giữ dáng, khó phai màu, không bị xù lông.<br>-Size: S(35-44kg), M(45-49kg), L(50-54kg), form rộng mặc thoải mái.<br>-Kiểu dáng: quần yếm short jeans nữ, ống rộng, phối dây 20cm.<br>-Phong cách: ngọt ngào, tươi mát, tối giản. ",
        "price" => 160000,
        "image" => "/images/products/10.png",
      ]
    ];

    $category2->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $quanNu)
    );

    $category3 = new Category();

    $category3->name = "Chân váy";
    $category3->slug = "chan-vay";

    $category3->save();

    $chanVay = [
      [
        "name" => "Chân váy ngắn nữ",
        "slug" => "chan-vay-ngan-nu",
        "description" =>
        "-Chất liệu: tuyết mưa cao cấp (có lót quần), trơn, mát mẻ.<br>-Có 3 kiểu: dáng trơn, xẻ 1 cạnh, xẻ 2 cạnh.<br>-Size: từ size S đến size 2XL (nặng từ dưới 46kg đến dưới 64kg).<br>-Phong cách: công sở, đường phố, sexy.<br>-Kiểu dáng: chân váy chữ A, lưng cao, eo bản rộng, khóa kéo phía sau. ",
        "price" => 160000,
        "image" => "/images/products/11.png",
      ],
      [
        "name" => "Chân váy dài nữ",
        "slug" => "chan-vay-dai-nu",
        "description" =>
        "-Chất liệu: kaki mềm, mỏng nhẹ, không nhăn, khó ra màu, không bai xù.<br>-Size: từ size S đến size XL (nặng từ 40kg đến dưới 60kg).<br>-Kiểu dáng: form dài qua gối, phù hợp thời tiết thu-đông, cạp lưng cao, form xòe rộng đùi.<br>-Phong cách: trẻ trung, phù hợp mọi lứa tuổi. ",
        "price" => 89000,
        "image" => "/images/products/12.png",
      ],
    ];

    $category3->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $chanVay)
    );

    $category4 = new Category();

    $category4->name = "Đầm";
    $category4->slug = "dam-nu";

    $category4->save();

    $dam = [
      [
        "name" => "Đầm voan maxi dáng dài",
        "slug" => "dam-voan-maxi-dang-dai",
        "description" =>
        "-Chất liệu: voan mỏng, thoải mái, mát mẻ, làm hạ nhiệt cơ thể.<br>-Size: freesize từ 59kg đổ về tùy chiều cao.<br>-Kiểu dáng: kiểu cổ yếm dáng dài maxi, xòe rộng, có lót trong, chiều dài váy 1m2.<br>Kĩ thuật may: tỉ mỉ từng chi tiết, chắc chắn.<br>-Phong cách: trẻ trung, thiếu nữ, phù hợp với mẹ bầu. ",
        "price" => 299000,
        "image" => "/images/products/13.png",
      ],
      [
        "name" => "Đầm dự tiệc",
        "slug" => "dam-du-tiec",
        "description" =>
        "-Chất liệu: vải ford cao cấp, co dãn, mặc thoải mái, dễ di chuyển, vận động, không ra màu.<br>-Size: từ size M đến size 3XL (nặng từ dưới 50kg đến dưới 70kg).<br>-Kiểu dáng: váy xòe, 2 dây trễ vai, tay phồng.<br>-Kĩ thuật may: tỉ mỉ, chắc chắn.<br>-Phong cách: trẻ trung, trưởng thành, thiếu nữ. ",
        "price" => 299000,
        "image" => "/images/products/14.png",
      ],
      [
        "name" => "Đầm tay phồng",
        "slug" => "dam-tay-phong",
        "description" =>
        "-Chất liệu: voan mỏng, thoải mái, mát mẻ.<br>-Size: freesize dưới 53kg tùy chiều cao.<br>-Kiểu dáng: kiểu cổ tròn, váy xòe rộng, có lót trong, xếp ly tà dưới và ống tay,chiều dài váy 1m3.<br>-Kĩ thuật may: chi tiết, chắc chắn, đường kim mũi chỉ đều và đẹp.<br>-Phong cách: trẻ trung, tươi mát, trưởng thành. ",
        "price" => 185000,
        "image" => "/images/products/15.png",
      ],
    ];

    $category4->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $dam)
    );

    $category5 = new Category();

    $category5->name = "Giày";
    $category5->slug = "giay";

    $category5->save();

    $giay = [
      [
        "name" => "Giày cao gót nữ",
        "slug" => "giay-cao-got-nu",
        "description" =>
        "-Chất liệu: da cao cấp.<br>-Size: từ 35 đến 39 (theo chiều dài bàn chân từ 22cm đến 24.5cm).<br>-Dáng gót: gót vuông từ 5-7 phân hoặc làm theo yêu cầu của khách hàng.<br>-Loại giày: giày mũi hở, không bo gót, trên quai có đính ngọc và ruy băng.<br>-Kĩ thuật: giày cao gót được may chắc chắn từng đường kim mũi chỉ. ",
        "price" => 125000,
        "image" => "/images/products/16.png",
      ],
      [
        "name" => "Giày oxford",
        "slug" => "giay-oxford",
        "description" =>
        "-Chất liệu: da, cao su chất lượng cao.<br>-Size: từ 36 đến 40 (theo chiều dài chân từ 23cm đến 25cm).<br>-Dáng giày: đế nối liền, chiều cao 5cm.<br>-Loại giày: giày mũi tròn, có khóa dây, được khâu chỉ nổi, đế răng cưa đảm bảo di chuyển.<br>-Kĩ thuật:  may chỉ nổi chắc chắn, đều và đẹp, dây khóa vừa vặn. ",
        "price" => 175000,
        "image" => "/images/products/17.png",
      ],
      [
        "name" => "Giày boot da nữ",
        "slug" => "giay-boot-da-nu",
        "description" =>
        "-Chất liệu: da cao cấp, chống thấm nước, bóng loáng.<br>-Size: từ 35 đến 39 (theo chiều dài bàn chân từ 22.5cm đến 24.5cm).<br>-Dáng giày: đế bằng có độn bên trong khoảng 5cm, boot cao khoảng 45cm.<br>-Loại giày: giày mũi nhọn, có khóa kéo phía sau, cổ boot vòng cung.<br>-Kĩ thuật: may chìm, có thẩm mỹ.",
        "price" => 199000,
        "image" => "/images/products/18.png",
      ],
      [
        "name" => "Giày thể thao nữ",
        "slug" => "giay-the-thao-nu",
        "description" =>
        "-Chất liệu: vải canvans, thoải mái bền, không phai khi giặt.<br>-Size: từ 36 đến 39.<br>-Dáng giày: đế bằng, chống trơn trượt, cao khoảng 3-4cm.<br>-Loại giày: giày mũi tròn, có khóa dây (dài khoảng 30cm), cổ thấp.<br>-Kĩ thuật: may kết hợp giữa nổi và chìm, chắc chắn, đều. ",
        "price" => 139000,
        "image" => "/images/products/19.png",
      ], [
        "name" => "Giày nam thể thao",
        "slug" => "giay-nam-the-thao",
        "description" =>
        "-Đế giày cao su non cao cấp đi êm chân, chống trơn trượt.<br>-Đế giày được thiết kế chịu ma sát tốt, tăng chiều cao, nhẹ, êm, cân bằng và thoáng khí.<br>-Giày đẹp, nhẹ, bền. Giá phải chăng phù hợp với các bạn học sinh, sinh viên. Có thể làm giày đôi, giày nhóm. Thích hợp đi chơi, du lịch, chạy bộ, gym, đi học, đi làm...<br>- Dễ phối đồ, có thể kết hợp với quần jeans, sooc….Phù hợp với mọi thời tiết từ đông sang hè.<br>-Đủ size Nam: 39 - 44.",
        "price" => 250000,
        "image" => "/images/products/33.png",
      ],
      [
        "name" => "Giày tây nam",
        "slug" => "giay-tay-nam",
        "description" =>
        "-Chất liệu bền đẹp kết hợp đế cao su êm nhẹ ,chống trơn trượt giúp bạn nam luôn thoải mái, tự tin khi đi chơi, dạo phố, đi làm nơi công sở hay đi dự tiệc<br>-Giày được thiết kế tinh xảo với đường may chắc chắn, kiểu dáng sang trọng, lịch sự.<br>Giày với một tông màu chủ đạo giúp cho việc phối đồ trở nên dễ dàng hơn, bạn có thể kết hợp với các loại trang phục hằng ngày tùy theo sở thích và phong cách mix & match riêng biệt của mình..<br>-Đủ size nam: 39-44.",
        "price" => 350000,
        "image" => "/images/products/34.png",
      ],
      [
        "name" => "Dép nam",
        "slug" => "dep-nam",
        "description" =>
        "-Chất liệu đế đôi dép được làm từ da tổng hợp giúp cho bạn đi cả ngày mà vẫn cảm giác rất êm ái.<br>Kiểu dáng ôm chân, thon gọn, thoải mái di chuyển mà không lo đau chân.<br>-Với kiểu dáng trẻ trung hiện đại, có thể phối với bất kì bộ đồ nào trong tủ đồ, để đi chơi dạo phố , đi dự tiệc , đi du lịch picnic .<br>- Size : 36-41.",
        "price" => 150000,
        "image" => "/images/products/35.png",
      ],
      [
        "name" => "Giày sandan nam",
        "slug" => "giay-sandan-nam",
        "description" =>
        "- Thiết kế: Dép Sandal Nam năng động trẻ trung, dễ phối đồ, có thể mang đi chơi, đi học,...<br>- Chất Liệu: đế được làm từ cao su tổng hợp, giúp cho bạn đi cả ngày mà vẫn cảm giác rất êm ái.<br>-Kiểu dáng ôm chân, thon gọn, thoải mái di chuyển<br>- Size: 37-43.",
        "price" => 179000,
        "image" => "/images/products/36.png",
      ],
    ];

    $category5->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $giay)
    );

    $category6 = new Category();

    $category6->name = "Áo nam";
    $category6->slug = "ao-nam";

    $category6->save();

    $aoNam = [
      [
        "name" => "Áo sweater nam",
        "slug" => "ao-sweater-nam",
        "description" =>
        "-Chất liệu: cotton nỉ ngoại có lót trong, trơn, không bị xù lông, in hình chất lượng.<br>-Size: từ M đến 2XL (từ dưới 45kg đến dưới 85kg và cao từ 1m6 đến 1m75).<br>-Thiết kế: có bo cổ áo và cổ tay, đường viền nổi ở lưng và vai.<br>-Kĩ thuật: đường may đẹp, chắc chắn, tỉ mỉ. ",
        "price" => 149000,
        "image" => "/images/products/20.png",
      ],
      [
        "name" => "Áo thun nam",
        "slug" => "ao-thun-nam",
        "description" =>
        "-Chất liệu: thun cotton thông thoáng, thấm hút mồ hôi.<br>-Size: từ M đến 2XL (từ 40kg đến 73kg).<br>-Thiết kế: tay ngắn, xẻ tà 2 bên, form rộng, bo cổ.<br>- Kĩ thuật may: đường may chìm, đều và đẹp. ",
        "price" => 99000,
        "image" => "/images/products/21.png",
      ],
      [
        "name" => "Áo khoác jean nam",
        "slug" => "ao-khoac-jean-nam",
        "description" =>
        "-Chất liệu: cotton, denim, jeans.<br>-Size: từ size M đến size 2XL (từ 40kg đến 95kg).<br>-Thiết kế: tay dài, khuy cài, có 2 túi phía trước, tay áo gài nút đơn giản, có xếp ly nhẹ.<br>-Kĩ thuật may: đường may chìm, đều và đẹp. ",
        "price" => 175000,
        "image" => "/images/products/22.png",
      ], [
        "name" => "Áo sơ mi nam",
        "slug" => "ao-so-mi-nam",
        "description" =>
        "-Chất liệu: lụa chống nhăn, trơn, mềm mịn, không xù, không bai, không phai màu, co dãn tốt, thoáng mát, vải đẹp không co rút, thấm hút mồ hôi tốt.<br>-Size: từ size S đến size 2XL (nặng từ 40kg đến 75kg và cao 1m6 đến 1m8).<br>-Thiết kế: áo tay dài, cổ sơ mi, bản nút phía trước.<br>- Kĩ thuật may: đường may bản to, đường kim mũi chỉ chắc chắn, chỉ chìm. ",
        "price" => 150000,
        "image" => "/images/products/24.png",
      ],
      [
        "name" => "Áo khoác blazer nam",
        "slug" => "ao-khoac-blazer-nam",
        "description" =>
        "-Chất liệu vải :  Flannel xuất Hàn cao cấp 100%, co giãn 4 chiều, vải mềm, mịn, thoáng mát, không xù lông.<br>-Kĩ thuật may: Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn<br>-Kiểu dáng :Form rộng rhoải mái<br>-Full size nam: 40 - 85 kg",
        "price" => 439000,
        "image" => "/images/products/25.png",
      ], [
        "name" => "Áo khoác nam",
        "slug" => "ao-khoac-nam",
        "description" =>
        "-Chất liệu: co giãn, thoáng mát, không mỏng, không nhăn, thấm mồ hôi, mềm mại cho làn da. <br>-Form chuẩn, dễ mặc, tiện dụng.<br>-Áo nam đủ size từ M-3Xl cho khách từ 45-85kg mặc vừa.",
        "price" => 250000,
        "image" => "/images/products/27.png",
      ], [
        "name" => "Áo hoodies nam",
        "slug" => "ao-hoodies-nam",
        "description" =>
        "-Chất liệu vải: mềm mịn, dày dặn, không xù, không phai màu<br>Mặc đi học, đi chơi đều được.<br> Áo form rộng, có đủ size từ M-3XL cho khách từ 45-85kg đều mặc vừa.",
        "price" => 250000,
        "image" => "/images/products/30.png",
      ],
    ];

    $category6->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $aoNam)
    );

    $category7 = new Category();

    $category7->name = "Quần nam";
    $category7->slug = "quan-nam";

    $category7->save();

    $quanNam = [
      [
        "name" => "Quần jean nam",
        "slug" => "quan-jean-nam",
        "description" =>
        "-Chất liệu: cotton, demin, jeans bò, khó phai màu, bề mặt mềm mịn.<br>-Size: từ 26 đến 37 (nặng từ 38kg đến 95kg và cao dưới 1m71 đến dưới 1m8).<br>-Thiết kế: chiều dài ống từ 98-102cm, có khóa kéo, dáng baggy suông, ống rộng.<br>-Kĩ thuật may: đường may bản to, đường kim mũi chỉ chắc chắn, chỉ chìm. ",
        "price" => 15500,
        "image" => "/images/products/23.png",
      ], [
        "name" => "Quần âu nam",
        "slug" => "quan-au-nam",
        "description" =>
        "- Dễ phối đồ: sơmi, thun, vest đều đẹp<br>- Chất Liệu: Vải lụa co giãn nhẹ, mềm mịn<br>- Chất vải đảm bảo không nhăn nhàu, lên form đứng dáng<br>-Form chuẩn, khoá giữa, có túi  dễ mặc và cực tiện dụng.<br>-Quần âu nam đủ size từ 28 đến 34 cho khách từ 45-80 kg mặc vừa.",
        "price" => 400000,
        "image" => "/images/products/26.png",
      ], [
        "name" => "Quần ống rộng nam",
        "slug" => "quan-ong-rong-nam",
        "description" =>
        "- Chun cạp may dạng bản rộng mặc ôm người, không gây khó chịu hằn da, có dây buộc chắc chắn<br>- Chất liệu mềm mịn, dày dặn nhưng thoáng mát.<br>- Màu sắc chuẩn ảnh, vải cao cấp không nhăn, không xù, không phai màu..<br>- Quần thể thao nam được thiết kế theo đúng form chuẩn của người Việt Nam cho khách từ 45-85kg.",
        "price" => 200000,
        "image" => "/images/products/28.png",
      ],
      [
        "name" => "Quần jogger nam",
        "slug" => "quan-jogger-nam",
        "description" =>
        "- chất thun dày dặn co giãn tốt.<br>- Form quần rộng rãi thoải mái dây rút điều chỉnh mặc được 2 dáng để suông hoặc bo gấu.<br>- Mặc đi học, đi chơi, đi tập thể thao đều đẹp. <br>Form quần cho khách từ 45-85kg.",
        "price" => 200000,
        "image" => "/images/products/29.png",
      ], [
        "name" => "Quần short nam",
        "slug" => "quan-short-nam",
        "description" =>
        "-Chất liệu vải co giản, thoáng mát.<br>-Đường may tỉ mỉ, chắc chắn.<br>-Form chuẩn, phối với áo thun, áo sơ mi đều đep.<>-Có đủ size từ M-2XL cho khách từ 40-80kg mặc vừa.",
        "price" => 160000,
        "image" => "/images/products/31.png",
      ],
      [
        "name" => "Quần baggy nam",
        "slug" => "quan-baggy-nam",
        "description" =>
        "- Chất liệu: Kaki cao cấp, dày dặn.<br>- Mực in cao cấp không bong tróc, hình in sắc nét, không phai màu, không gây hại cho da.<br>- Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn.<br>- Mặc ở nhà, mặc đi chơi hoặc khi vận động thể thao. Dễ phối đồ, phù hợp mix đồ với nhiều loại trang phục.<br>- Thiết kế hiện đại, trẻ trung, năng động. Form quần chuẩn, có đủ size từ M-3XL dành cho khách từ 40-85kg.",
        "price" => 185000,
        "image" => "/images/products/32.png",
      ],
    ];

    $category7->products()->saveMany(
      array_map(function ($data) {
        return new Product($data);
      }, $quanNam)
    );
  }
}
