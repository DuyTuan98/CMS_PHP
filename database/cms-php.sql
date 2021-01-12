-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2021 lúc 03:14 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cms-php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'HTML'),
(10, 'CSS'),
(11, 'JAVASCRIPT'),
(12, 'SQL'),
(13, 'UX/UI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `comment_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(1, 4, 'Quang Thái', 'awpareshan@gmail.com', 'tuyệt vời', 'approve'),
(2, 8, 'Bình Phương', 'john@john.com', 'hay quá', 'approve'),
(12, 10, 'N.Q.Thái', 'thai123@gmail.com', 'Bài viết rất hay + phân tích chi tiết ', 'unapprove');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_details` varchar(100) NOT NULL,
  `post_explain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`, `img_details`, `post_explain`) VALUES
(4, 3, 'BEM là gì ? Tìm hiểu về cách đặt tên trong CSS', '04-12-2019', 'Võ Duy Tuấn', 'BEM là một quy ước đặt tên, giúp cho việc code Frontend dễ đọc và dễ hiểu hơn, dễ làm việc và dễ mở rộng cũng như bảo trì. Việc đặt tên chuẩn giúp các bạn hiểu được đoạn code đó có ý nghĩa gì, nó thực hiện nhiệm vụ gì. Từ đó những người khác khi đọc vào code của bạn họ cũng hiểu được bạn đang làm gì, từ đó dễ dàng phân tích, thay đổi và quản lý hơn sau này.', 'bem.jpg', '<p>Đ&acirc;y l&agrave; một Stick Man, ch&uacute;ng ta h&atilde;y coi n&oacute; l&agrave; một Block, Block l&agrave; đại diện cho chữ c&aacute;i đầu ti&ecirc;n trong BEM nh&eacute;. Như t&ecirc;n gọi của n&oacute; ta c&oacute; thể đặt class cho n&oacute; l&agrave; .stick-man</p>\r\n<p>Tiếp theo l&agrave; chữ E trong BEM nghĩa l&agrave; Elements tức l&agrave; những th&agrave;nh phần c&oacute; trong Stick Man n&agrave;y, như l&agrave; c&aacute;i đầu(head), tay(arm), ch&acirc;n(feet), cơ thể(body)&hellip; L&uacute;c n&agrave;y ch&uacute;ng ta sẽ c&oacute; c&aacute;c class như l&agrave; .stick-man__head, .stick-man__arm, .stick-man__feet&hellip;. L&uacute;c n&agrave;y c&aacute;c bạn c&oacute; thể thấy l&agrave; Element theo sau 2 dấu gạch dưới __ của Block. Cấu tr&uacute;c tạm thời l&uacute;c n&agrave;y ta c&oacute; .Block__Element</p>\r\n<p>Tuy nhi&ecirc;n m&igrave;nh lại muốn thay đổi c&aacute;i đầu(head) to ra th&ocirc;i th&igrave; l&uacute;c n&agrave;y Modified phải theo sau Element l&agrave; head thay v&igrave; Block như sau .stick-man__head--big hay tay d&agrave;i ra ta c&oacute; .stick-man__arm--long , .stick-man__head--small cho đầu nhỏ lại. Ta c&oacute; cấu tr&uacute;c .Block__Element&ndash;Modified</p>', 'bem.png', 'bem.png'),
(8, 7, 'Hướng dẫn viết Theme WordPress toàn tập ', '29-11-2019', 'Hồ Viết Nhân', '<p>Ở bài trước chúng ta đã cùng nhau hoàn thành block Header và Banner. Và các bạn cũng đã biết cách dùng ACF(Advanced Custom Fields) rồi. Nên từ bây giờ mình sẽ không hướng dẫn lại nữa nhé.</p>\r\n<p>Và block mà chúng ta sẽ làm trong bài này sẽ là block About. Trông khá đẹp và phức tạp nhỉ, nhưng rất dễ làm chỉ dùng ACF và áp dụng cách làm y hệt phần trước mà thôi.</p>', 'wordpress.jpg', '<p>Nhưng chúng ta chưa code PHP để có thể tùy chỉnh bên trong Admin được. Bây giờ chúng ta sẽ vào CustomFields(ACF) và tạo một Field Group là About Header gồm có 3 Fields tương ứng cho hình icon, tiêu đề và text như sau:</p>\r\n<p>Đừng quên chỗ Rules chọn Show this field group if Page is equal to Home nhá các bạn và cái about header icon chọn type là image và chọn image array như đã làm ở bài trước rồi nhé. Sau đó các bạn nhấn Đăng thôi.</p>\r\n<p>Sau đó các bạn truy cập vào trang Home các bạn sẽ thấy được như hình rồi các bạn điền nội dung vào như hình đây.</p>', 'wordpress.jpg', 'wordpress.jpg'),
(9, 3, 'Weekly UI – Hướng dẫn code giao diện trang đăng nhập đơn giản', '30-11-2019', 'Nguyễn Quang Thái', '<p>Nhìn vào hình chúng ta sẽ thấy các thành phần trong UI như các hình tròn, form, input, button, a… Hình này có chiều rộng 800x600, có một form ở giữa có chiều rộng và chiều cao chiếm khoảng 70-80%, và nằm ở dưới là 4 hình tròn tương ứng với 4 màu là đỏ, vàng, xanh và tím với các kích cỡ khác nhau.</p>\r\n<p>Nằm trên các vòng tròn là Form chính có 2 thẻ input có type lần lượt là email và password, dưới nữa là một thẻ a dẫn tới trang quên mật khẩu(forgot password), dưới cùng bên phải là một button(sign in) để đăng nhập, và một thẻ a ở bên trái để dẫn tới trang đăng ký(register), mỗi bên chiếm đều nhau 50%.</p>', 'ui.jpg', '# Responsive\r\nVới các đoạn code như trên thì mình thấy rằng khi xuống mobile thì giao diện vẫn nhìn được và không bị gì cả. Cho nên ở UI này phần Responsive mình không code gì thêm nữa. Như vậy là đã xong. Các bạn có thể tham khảo kết quả dưới đây nhé. Nếu codepen bị lỗi không hiển thị ở blog mình thì các bạn có thể nhấn vào đây để xem trực tiếp trên codepen nhé.', 'ui.jpg', 'ui.jpg'),
(10, 15, 'Hướng dẫn cắt PSD sang HTML toàn tập', '31-11-2019', 'Dương Viết Thuận', '<p>Layout: Nhìn vào giao diện mình thấy có ba phần riêng biệt đó là header trên cùng gồm có menu, logo chữ Shoes và các icon bên phải, phần thứ hai là navigation bên trái có các liên kết và icon mạng xã hội nằm theo chiều dọc và cuối cùng là phần chính Slider chiếm phần lớn giao diện.</p>\r\n\r\n<p>Đặt tên class: Đây là trang sản phẩm thì các bạn có thể đặt tên class là .single__product hoặc .product thôi cho gọn cũng được. Đây là class cha bọc lại khi chúng ta code HTML.</p>\r\n\r\n<p>Icons: Mình dùng font-awesome, có hỗ trợ trong Codepen luôn, các bạn vào Codepen chọn phần Setting rồi hiện ra giao diện như hình dưới đây, các bạn gõ vào font-awesome hiện ra chọn sau đó nhấn Save & Close là xong.</p>', 'catpsd.jpg', 'Trong giao diện này mình sử dụng đơn vị REM để code, các bạn có thể tìm hiểu đơn vị REM tại đây. Ngoài ra mình còn sử dụng pseudo class như :before, :after, về cấu trúc layout mình dùng flexbox, có một điểm chú ý ở đây là ở phần navigation có các chữ nằm theo chiều dọc. Các bạn dùng thuộc tính này writing-mode: vertical-lr; kết hợp với transform: rotate cho các icon . Các bạn có thể tham khảo thêm ở đây.', 'catpsd.jpg', 'catpsd.jpg'),
(11, 11, 'Hướng dẫn sử dùng CSS Grid chia layout', '01-12-2019', 'Võ Thị Chung', '<p>Để dễ hình dung trong việc đọc hiểu và học tập mình vẫn sẽ làm trên Codepen cho các bạn tiện xem demo và có thể sửa trên nó cho mau hiểu. Mình sẽ giải thích rõ các thuộc tính và công dụng của chúng thông qua ví dụ dưới đây xuyên suốt bài viết các bạn chú ý nha.</p>\r\n<p>Đầu tiên mình tạo layout HTML như sau:</p>', 'layout.png', '<p>Các đường đánh dấu theo hàng và cột tương ứng từ trên cùng hoặc ngoài cùng bên trái. Cách để nhớ đơn giản là cứ lấy số cột + 1 sẽ ra tổng tracks theo cột và số hàng + 1 sẽ ra tổng tracks theo hàng. Các bạn thấy đó có 2 cột thì có 3 tracks line cột đánh dấu 1 2 3, còn 5 hàng thì 6 tracks line hàng. -1 là cuối cùng.</p>\r\n<p>Ở đây các bạn chỉ cần hiểu nó là các đường như hình trên là được. Ở bài sau mình sẽ nói chi tiết về công dụng rất quan trọng của nó trong việc tạo layout như thế nào. Do CSS Grid khá nhiều thuộc tính nên mình không gom vào một bài được.</p>', 'layout.png\r\n', 'layout.png'),
(15, 0, 'css', '06-01-2021', 'Tuấn đẹp trai', 'a', 'a.jpg', '<p>hhhhhhhhhhhh</p>', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'duytuan', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
