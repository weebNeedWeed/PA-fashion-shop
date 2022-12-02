<?php

use App\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $data = [
      [
        "title" => "Cách Hòa Minzy mix đồ đông được khen 'hack' tuổi",
        "image" => "/images/news/1.jpg",
        "description" => "Ca sĩ Hòa Minzy thường diện đồ màu sắc, kiểu dáng trẻ trung trong mùa đông, giúp cô được khen như sinh viên dù là bà mẹ một con."
      ],
      [
        "title" => "Ý nghĩa trang phục của Meghan Markle tại sự kiện Indianapolis",
        "image" => "/images/news/2.jpg",
        "description" => "MỸ Nữ công tước xứ Sussex Meghan Markle chọn phục sức thể hiện rõ thông điệp ủng hộ trao quyền cho phụ nữ tại sự kiện tối 29/11."
      ],
      [
        "title" => "H'Hen Niê lăng xê váy độc đáo",
        "image" => "/images/news/3.jpg",
        "description" => "Hoa hậu H'Hen Niê đảm nhiệm vai trò vedette với bộ trang phục độc đáo của nhà thiết kế Tuyết Lê, tối 30/11 tại TP HCM."
      ],
      [
        "title" => "Thời trang thanh lịch cho mùa lễ hội 2022",
        "image" => "/images/news/4.jpg",
        "description" => "Nhà thiết kế Nhung Hobb mang đến những gợi ý trang phục cho các quý cô thành thị trong dịp lễ Tết cuối năm."
      ],
      [
        "title" => "Dàn sao quy tụ show diễn của nhà thiết kế Hoàng Hải",
        "image" => "/images/news/5.jpg",
        "description" => "NSND Thu Hà, Tùng Dương cùng nhiều người đẹp và doanh nhân tới thưởng thức show diễn thời trang của nhà thiết kế Hoàng Hải tại VIFW 2022 ngày 27/11."
      ],
      [
        "title" => "'Bộ sưu tập Sương phản chiếu tinh hoa di sản Bắc bộ'",
        "image" => "/images/news/6.jpg",
        "description" => "Theo nhà thiết kế Hoàng Minh Hà, 'Sương' phản chiếu tinh hoa di sản Bắc bộ qua những nếp gấp, đường cong mềm mại lấy cảm hứng từ ruộng bậc thang, đồi núi quanh co…"
      ],
      [
        "title" => "Tiên Nguyên là 'Người có sức ảnh hưởng' tại Harper's Bazaar Star Awards",
        "image" => "/images/news/7.jpg",
        "description" => "Tiên Nguyễn - Phó tổng giám đốc mảng Phát triển thời trang cao cấp DAFC - nhận giải 'Người có sức ảnh hưởng của năm' tại Harper’s Bazaar Star Awards."
      ],
      [
        "title" => "Phối đồ lấy cảm hứng từ nhóm BTS",
        "image" => "/images/news/8.jpg",
        "description" => "Phong cách trẻ trung của các thành viên nhóm nhạc Hàn Quốc đình đám BTS có thể được tái hiện từ những món trang phục gần gũi, dễ kiếm."
      ],
      [
        "title" => "Lương Thùy Linh, Đỗ Thị Hà mặc trang nhã khi bình luận World Cup",
        "image" => "/images/news/9.jpg",
        "description" => "Hoa hậu Lương Thùy Linh và Đỗ Thị Hà được khen với phong cách thanh lịch, kín đáo khi lần đầu bình luận bóng đá."
      ],
      [
        "title" => "Dàn mẫu diện đồ Vũ Ngọc và Son tại các địa danh lịch sử",
        "image" => "/images/news/10.jpg",
        "description" => "10 người mẫu trình diễn trang phục thuộc bộ sưu tập 'Ký ức tuổi thơ' của Vũ Ngọc và Son tại một số địa danh nổi tiếng ở TP HCM."
      ],
      [
        "title" => "Thí sinh Hoa hậu Việt Nam tạo dáng với nước hoa GoodCharme",
        "image" => "/images/news/11.jpg",
        "description" => "56 người đẹp tạo dáng với nước hoa GoodCharme trong phần thi thời trang tại chung khảo Hoa hậu Việt Nam 2022."
      ],
      [
        "title" => "Thanh Hằng làm vedette bộ sưu tập mở màn Aquafina VIFW 2022",
        "image" => "/images/news/12.jpg",
        "description" => "Thanh Hằng làm vedette show trình diễn 'Sương' - bộ sưu tập mang cảm hứng từ di sản Bộ, mở màn cho sự kiện Aquafina VIFW Thu - Đông 2022."
      ],
    ];

    News::insert($data);
  }
}
